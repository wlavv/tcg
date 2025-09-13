<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2019 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

require_once(_PS_MODULE_DIR_ . 'appagebuilder/classes/ApPageSetting.php');

class AdminApPageBuilderImagesController extends ModuleAdminController
{
    public $max_image_size = null;
    public $theme_name;
    public $module_name = 'appagebuilder';
    public $img_path;
    public $folder_name;
    public $module_path;
    public $tpl_path;
    public $theme_dir;
    public $page;
    public $itemPerPage = 50;
    public $paginationRange = 2;
    
    public function __construct()
    {
        parent::__construct();
        $this->theme_dir      = apPageHelper::getConfigDir('_PS_THEME_DIR_');
        $this->folder_name    = Tools::getIsset('imgDir') ? Tools::getValue('imgDir') : 'images';
        $this->bootstrap      = true;
        $this->max_image_size = (int) Configuration::get('PS_PRODUCT_PICTURE_MAX_SIZE');
        $this->theme_name     = apPageHelper::getThemeName();
        $this->img_path       = apPageHelper::getImgThemeDir($this->folder_name);
        $this->img_url        = apPageHelper::getImgThemeUrl($this->folder_name);
        $this->className      = 'ApPageBuilderImages';
        $this->context        = Context::getContext();
        $this->module_path    = __PS_BASE_URI__ . 'modules/' . $this->module_name . '/';
        $this->tpl_path       = _PS_ROOT_DIR_ . '/modules/' . $this->module_name . '/views/templates/admin';
        $this->page       = Tools::getValue('page') ? Tools::getValue('page') : '1';
        
        # LIVE THEME EDITER
        $leo_controller = Tools::getValue('leo_controller');
        if ($leo_controller == 'live_theme_edit') {
            $this->context->controller->addCss(apPageHelper::getCssAdminDir() . 'admin/images.css', 'all');
            
            $this->img_path = _PS_ALL_THEMES_DIR_ . apPageHelper::getThemeName() . '/assets/img/patterns/';
            $this->img_url  = __PS_BASE_URI__ . 'themes/' . apPageHelper::getThemeName() . '/assets/img/patterns/';
            $this->context->controller->addCss(apPageHelper::getCssAdminDir() . 'admin/images.css', 'all');
        }
    }
    
    /**
     * Action Live Theme Editor
     */
    public function renderList()
    {
        $tpl            = $this->createTemplate('imagemanager.tpl');
        $sort_by        = Tools::getValue('sortBy');
        $images         = $this->getImageList($sort_by);
        $image_uploader = new HelperImageUploader('file');
        $image_uploader->setSavePath($this->img_path);
        $image_uploader->setMultiple(true)->setUseAjax(true)->setUrl(Context::getContext()->link->getAdminLink('AdminApPageBuilderImages') . '&ajax=1&action=addimage&leo_controller=live_theme_edit'); // url upload image
        $p = $this->page;
        $n = $this->itemPerPage;
        $range = $this->paginationRange;
        $nb_items = count($images);
        $start = (int)($p - $range);
        if ($start < 1) {
            $start = 1;
        }
        $pages_nb = ceil($nb_items / (int)($n));
        $stop = (int)($p + $range);
        if ($stop > $pages_nb) {
            $stop = (int)($pages_nb);
        }
        $images = array_slice($images, ($p-1)*$n, $n);
        
        $tpl->assign(array(
            'p' => $p,
            'n' => $n,
            'start' => $start,
            'stop' => $stop,
            'nb_items' => $nb_items,
            'pages_nb' => $pages_nb,
            'ajaxImageUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages'),
            'img_dir' => $this->folder_name,
            'countImages' => $nb_items,
            'images' => $images,
            'max_image_size' => $this->max_image_size / 1024 / 1024,
            'image_uploader' => $image_uploader->render(),
            'imgManUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages'),
            'token' => $this->token,
            'url_param' => '&leo_controller=live_theme_edit'
        ));
        return $tpl->fetch();
    }
    
    /**
     * Action Live Theme Editor
     */
    public function ajaxProcessReloadBackground()
    {
        $sort_by = Tools::getValue('sortBy');
        $tpl     = $this->createTemplate('imagemanager.tpl');
        $images  = $this->getImageList($sort_by);
        $p = $this->page;
        $n = $this->itemPerPage;
        $range = $this->paginationRange;
        $nb_items = count($images);
        $start = (int)($p - $range);
        if ($start < 1) {
            $start = 1;
        }
        $pages_nb = ceil($nb_items / (int)($n));
        $stop = (int)($p + $range);
        if ($stop > $pages_nb) {
            $stop = (int)($pages_nb);
        }
        $images = array_slice($images, ($p-1)*$n, $n);
        $tpl->assign(array(
            'p' => $p,
            'n' => $n,
            'start' => $start,
            'stop' => $stop,
            'nb_items' => $nb_items,
            'pages_nb' => $pages_nb,
            'images' => $images,
            'ajaxImageUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages'),
            'reloadBack' => 1
        ));
        die(json_encode($tpl->fetch()));
    }
    
    public function getImageList($sortBy)
    {
        $path   = $this->img_path;
        # CACH 1 : lay cac file anh
        $images = glob($path . '{*.jpeg,*.JPEG,*.jpg,*.JPG,*.gif,*.GIF,*.png,*.PNG,*.webp,*.WEBP}', GLOB_BRACE);
        if ($images === null) {
            # CACH 2 : lay cac file anh
            $files = scandir($path);
            $files = array_diff($files, array(
                '..',
                '.'
            )); # insert code
            
            $images = array();
            foreach ($files as $key => $image) {
                # validate module
                unset($key);
                $ext = Tools::substr($image, strrpos($image, '.') + 1);
                if (in_array($ext, array(
                    'jpg',
                    'jpeg',
                    'png',
                    'gif',
                    'webp',
                    'JPG',
                    'JPEG',
                    'PNG',
                    'GIF',
                    'WEBP',
                ))) {
                    $images[] = $image;
                }
            }
        }
        
        if ($sortBy == 'name_desc') {
            rsort($images);
        }
        
        if ($sortBy == 'date' || $sortBy == 'date_desc') {
            ksort($images);
        }
        if ($sortBy == 'date_desc') {
            rsort($images);
        }
        
        $result = array();
        foreach ($images as &$file) {
            $fileInfo = pathinfo($file);
            $result[] = array(
                'name' => $fileInfo['basename'],
                'link' => $this->img_url . $fileInfo['basename']
            );
        }
        return $result;
    }
    
    public function renderTemplate($tpl_name)
    {
        $path = '';
        if (file_exists($this->theme_dir . 'modules/' . $this->module->name . '/views/templates/admin/' . $tpl_name) && $this->viewAccess()) {
            $path = $this->theme_dir . 'modules/' . $this->module->name . '/views/templates/admin/' . $tpl_name;
        } elseif (file_exists($this->getTemplatePath() . $this->override_folder . $tpl_name) && $this->viewAccess()) {
            $path = $this->getTemplatePath() . $this->override_folder . $tpl_name;
        }
        $content = Context::getContext()->smarty->fetch($path);
        return $content;
    }
    
    /**
     * Action Manage Image
     */
    public function ajaxProcessManageImage()
    {
        $smarty         = Context::getContext()->smarty;
        $sort_by        = Tools::getValue('sortBy');
        $images         = $this->getImageList($sort_by);
        $image_uploader = new HelperImageUploader('file');
        $image_uploader->setSavePath($this->img_path);
        $image_uploader->setTemplateDirectory($this->tpl_path . '/helpers/uploader');
        
        $image_uploader->setTemplate('ajax.tpl');
        $image_uploader->setMultiple(true)->setUseAjax(true)->setUrl(Context::getContext()->link->getAdminLink('AdminApPageBuilderImages') . '&ajax=1&action=addimage&imgDir=' . $this->folder_name);
        $upload_html = $image_uploader->render();
        $p = $this->page;
        $n = $this->itemPerPage;
        $range = $this->paginationRange;
        $nb_items = count($images);
        $start = (int)($p - $range);
        if ($start < 1) {
            $start = 1;
        }
        $pages_nb = ceil($nb_items / (int)($n));
        $stop = (int)($p + $range);
        if ($stop > $pages_nb) {
            $stop = (int)($pages_nb);
        }
        $images = array_slice($images, ($p-1)*$n, $n);
        $smarty->assign(array(
            'p' => $p,
            'n' => $n,
            'start' => $start,
            'stop' => $stop,
            'nb_items' => $nb_items,
            'pages_nb' => $pages_nb,
            'ajaxImageUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages').'&ajax=1&action=manageimage&imgDir=images',
            'img_dir' => $this->folder_name,
            'widget' => Tools::getValue('widget'),
            'countImages' => $nb_items,
            'images' => $images,
            'max_image_size' => $this->max_image_size / 1024 / 1024,
            'image_uploader' => $upload_html,
            'imgManUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages'),
            'token' => $this->token,
            'link' => Context::getContext()->link
        ));
        die($this->renderTemplate('imagemanager.tpl'));
    }
    
    /**
     * Action Add Image
     */
    public function ajaxProcessAddImage()
    {
        if (isset($_FILES['file'])) {
            try {
                $image_uploader = new HelperUploader('file');
                
                if (!file_exists($this->img_path)) {
                    mkdir($this->img_path, 0755, true);
                }
                $image_uploader->setSavePath($this->img_path);
                $image_uploader->setAcceptTypes(array(
                    'jpeg',
                    'gif',
                    'png',
                    'jpg',
                    'webp',
                ))->setMaxSize($this->max_image_size);
                $total_errors = array();
                
                $files = $image_uploader->process();
                foreach ($files as &$file) {
                    $errors = array();
                    // Evaluate the memory required to resize the image: ifit's too much, you can't resize it.
                    if (!ImageManager::checkImageMemoryLimit($file['save_path'])) {
                        $errors[] = Tools::displayError('Due to memory limit restrictions, this image cannot be loaded.
                                Please increase your memory_limit value via your server\'s configuration settings.');
                    }
                    if (count($errors)) {
                        $total_errors = array_merge($total_errors, $errors);
                    }
                    //unlink($file['save_path']);
                    //Necesary to prevent hacking
                    unset($file['save_path']);
                    //Add image preview and delete url
                }
                if (count($total_errors)) {
                    $this->context->controller->errors = array_merge($this->context->controller->errors, $total_errors);
                }
                $images = $this->getImageList('date');
                $tpl    = $this->createTemplate('imagemanager.tpl');
                $p = $this->page;
                $n = $this->itemPerPage;
                $range = $this->paginationRange;
                $nb_items = count($images);
                $start = (int)($p - $range);
                if ($start < 1) {
                    $start = 1;
                }
                $pages_nb = ceil($nb_items / (int)($n));
                $stop = (int)($p + $range);
                if ($stop > $pages_nb) {
                    $stop = (int)($pages_nb);
                }
                $images = array_slice($images, ($p-1)*$n, $n);
                $tpl->assign(array(
                    'p' => $p,
                    'n' => $n,
                    'start' => $start,
                    'stop' => $stop,
                    'nb_items' => $nb_items,
                    'pages_nb' => $pages_nb,
                    'images' => $images,
                    'reloadSliderImage' => 1,
                    'link' => Context::getContext()->link
                ));
                
                die(json_encode($tpl->fetch()));
            } catch (Exception $ex) {
                die("Error in ajaxProcessAddImage");
            }
        }
    }
    
    /**
     * Action Sort Image
     */
    public function ajaxProcessReLoadSliderImage()
    {
        $tpl     = $this->createTemplate('imagemanager.tpl');
        $sort_by = Tools::getValue('sortBy');
        $images  = $this->getImageList($sort_by);
        $p = $this->page;
        $n = $this->itemPerPage;
        $range = $this->paginationRange;
        $nb_items = count($images);
        $start = (int)($p - $range);
        if ($start < 1) {
            $start = 1;
        }
        $pages_nb = ceil($nb_items / (int)($n));
        $stop = (int)($p + $range);
        if ($stop > $pages_nb) {
            $stop = (int)($pages_nb);
        }
        $images = array_slice($images, ($p-1)*$n, $n);
        $tpl->assign(array(
            'p' => $p,
            'n' => $n,
            'start' => $start,
            'stop' => $stop,
            'nb_items' => $nb_items,
            'pages_nb' => $pages_nb,
            'ajaxImageUrl' => Context::getContext()->link->getAdminLink('AdminApPageBuilderImages').'&ajax=1&action=manageimage&imgDir=images',
            'images' => $images,
            'reloadSliderImage' => 1,
            'link' => Context::getContext()->link
        ));
        die(json_encode($tpl->fetch()));
    }
    
    /**
     * Action Delete Image
     */
    public function ajaxProcessDeleteImage()
    {
        if (($img_name = Tools::getValue('imgName', false)) !== false) {
            $link = $this->img_path;
            $this->icon_path = $link = str_replace('modules/appagebuilder/images', 'modules/appagebuilder/icon', $link);

            if (file_exists($link . $img_name)) {
                unlink($link . $img_name);
                $images = $this->getIconList('date');
            } else if (file_exists($this->img_path . $img_name)) {
                unlink($this->img_path . $img_name);
                $images = $this->getImageList('date');
            } else {
                throw new PrestaShopException('Do not find' . $link . $img_name);
            }
            
            $tpl    = $this->createTemplate('imagemanager.tpl');
            $p = $this->page;
            $n = $this->itemPerPage;
            $range = $this->paginationRange;
            $nb_items = count($images);
            $start = (int)($p - $range);
            if ($start < 1) {
                $start = 1;
            }
            $pages_nb = ceil($nb_items / (int)($n));
            $stop = (int)($p + $range);
            if ($stop > $pages_nb) {
                $stop = (int)($pages_nb);
            }
            $images = array_slice($images, ($p-1)*$n, $n);
            $tpl->assign(array(
                'p' => $p,
                'n' => $n,
                'start' => $start,
                'stop' => $stop,
                'nb_items' => $nb_items,
                'pages_nb' => $pages_nb,
                'images' => $images,
                'reloadSliderImage' => 1,
                'link' => Context::getContext()->link
            ));
            
            die(json_encode($tpl->fetch()));
        }
    }

    public function getIconList($sortBy)
    {
        $path   = $this->icon_path;
        $images = glob($path . '{*.jpeg,*.JPEG,*.jpg,*.JPG,*.gif,*.GIF,*.png,*.PNG,*.webp,*.WEBP}', GLOB_BRACE);
        
        if ($images === null) {
            # CACH 2 : lay cac file anh
            $files = scandir($path);
            $files = array_diff($files, array(
                '..',
                '.'
            )); # insert code
            
            $images = array();
            foreach ($files as $key => $image) {
                # validate module
                unset($key);
                $ext = Tools::substr($image, strrpos($image, '.') + 1);
                if (in_array($ext, array(
                    'jpg',
                    'jpeg',
                    'png',
                    'gif',
                    'webp',
                    'JPG',
                    'JPEG',
                    'PNG',
                    'GIF',
                    'WEBP',
                ))) {
                    $images[] = $image;
                }
            }
        }
        
        if ($sortBy == 'name_desc') {
            rsort($images);
        }
        
        if ($sortBy == 'date' || $sortBy == 'date_desc') {
            ksort($images);
        }
        if ($sortBy == 'date_desc') {
            rsort($images);
        }
        
        $result = array();

        foreach ($images as &$file) {
            $fileInfo = pathinfo($file);
            $result[] = array(
                'name' => $fileInfo['basename'],
                'link' => str_replace(
                    'modules/appagebuilder/images',
                    'modules/appagebuilder/icon',
                    $this->img_url
                ) . $fileInfo['basename']
            );
        }
        
        return $result;
    }
    
    public function viewAccess($disable = true)
    {
//        return $this->access('view', $disable);
        unset($disable);
        return true;
    }
}
