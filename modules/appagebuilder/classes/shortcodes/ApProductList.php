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

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductListingPresenter as ProductListingPresenter9;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

require_once(_PS_MODULE_DIR_.'appagebuilder/classes/ApPageBuilderProductsModel.php');

class ApProductList extends ApShortCodeBase
{
    public $name = 'ApProductList';
    public $for_module = 'manage';

    public function getInfo()
    {
        return array('label' => $this->l('Product List'),
            'position' => 7,
            'desc' => $this->l('Create Product List'),
            'icon_class' => 'icon icon-th',
            'tag' => 'content');
    }

    public function getAdditionConfig()
    {
        return array(
            array(
                'type' => '',
                'name' => 'value_by_categories',
                'default' => '0'
            ),
            array(
                'type' => '',
                'name' => 'value_by_product_type',
                'default' => '0'
            ),
            array(
                'type' => '',
                'name' => 'value_by_manufacture',
                'default' => '0'
            ),
            array(
                'type' => '',
                'name' => 'value_by_supplier',
                'default' => '0'
            ),
            array(
                'type' => '',
                'name' => 'value_by_product_id',
                'default' => '0'
            ),
            array(
                'type' => '',
                'name' => 'value_by_tags',
                'default' => '0'
            )
        );
    }

    public function getConfigList()
    {
        $selected_categories = array();
        if (Tools::getIsset('categorybox')) {
            $category_box = Tools::getValue('categorybox');
            $selected_categories = explode(',', $category_box);
        }
        //get all manufacture
        $manufacturers = Manufacturer::getManufacturers(false, 0, true, false, false, false, true);
        $suppliers = Supplier::getSuppliers();
//        $product_active = ApPageBuilderProductsModel::getActive();
//        $product_class = $product_active['class'];
        $profile = new ApPageBuilderProductsModel();
        $profile_list = $profile->getAllProductProfileByShop();
        array_unshift($profile_list, array('plist_key' => 'default', 'name' => $this->l('Use Default')));
        $id_root_category = Context::getContext()->shop->getCategory();
        $input = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'desc' => $this->l('Auto hide if leave it blank'), 'lang' => 'true',
                'default' => ''
            ),
            array(
                'type' => 'textarea',
                'name' => 'sub_title',
                'label' => $this->l('Sub Title'),
                'lang' => true,
                'values' => '',
                'autoload_rte' => false,
                'default' => '',
            ),
            array(
                'type' => 'text',
                'name' => 'class',
                'label' => $this->l('CSS Class'),
                'default' => ''
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="alert alert-info">'.$this->l('Step 1: Product Filter').'</div>',
            ),
            array(
                'type' => 'checkbox',
                'name' => 'value_by',
                'label' => $this->l('Select By'),
                'class' => 'checkbox-group',
                'desc' => $this->l('Select Product Condition'),
                'values' => array(
                    'query' => array(
                        array(
                            'id' => 'categories',
                            'name' => $this->l('Categories'),
                            'val' => '1'
                        ),
                        array(
                            'id' => 'product_type',
                            'name' => $this->l('Product Type'),
                            'val' => '1'
                        ),
                        array(
                            'id' => 'manufacture',
                            'name' => $this->l('Manufacture'),
                            'val' => '1'
                        ),
                        array(
                            'id' => 'supplier',
                            'name' => $this->l('Supplier'),
                            'val' => '1'
                        ),
                        array(
                            'id' => 'product_id',
                            'name' => $this->l('Product Ids'),
                            'val' => '1'
                        ),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                )
            ),
            array(
                'type' => 'categories',
                'label' => $this->l('Select Category'),
                'name' => 'categorybox',
                'desc' => $this->l('You can select one or more, if not select we will not search by category'),
                'tree' => array(
                    'root_category' => $id_root_category,
                    'use_search' => false,
                    'id' => 'categorybox',
                    'use_checkbox' => true,
                    'selected_categories' => $selected_categories,
                ),
                'form_group_class' => 'value_by_categories',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Product of Category'),
                'name' => 'category_type',
                'options' => array(
                    'query' => array(
                        array('id' => 'all', 'name' => $this->l('Get All Product of Category')),
                        array('id' => 'default', 'name' => $this->l('Get Product if category is default category of product'))),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'value_by_categories',
                'default' => 'all'
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="sperator"></div>',
                'form_group_class' => 'value_by_categories',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Product Type'),
                'name' => 'product_type',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'all',
                            'name' => $this->l('All Product'),
                        ),
                        array(
                            'id' => 'new_product',
                            'name' => $this->l('New Product'),
                        ),
                        array(
                            'id' => 'best_sellers',
                            'name' => $this->l('Best sellers'),
                        ),
                        array(
                            'id' => 'price_drop',
                            'name' => $this->l('Special'),
                        ),
                        array(
                            'id' => 'home_featured',
                            'name' => $this->l('Home Featured'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'value_by_product_type',
                'default' => 'all',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="sperator"></div>',
                'form_group_class' => 'value_by_product_type',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Manufacture'),
                'name' => 'manufacture[]',
                'multiple' => true,
                'options' => array(
                    'query' => $manufacturers,
                    'id' => 'id_manufacturer',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_exceptions',
                'default' => 'all',
                'form_group_class' => 'value_by_manufacture',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="sperator"></div>',
                'form_group_class' => 'value_by_manufacture',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Supplier'),
                'name' => 'supplier[]',
                'multiple' => true,
                'options' => array(
                    'query' => $suppliers,
                    'id' => 'id_supplier',
                    'name' => 'name'
                ),
                'form_group_class' => 'value_by_supplier',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="sperator"></div>',
                'form_group_class' => 'value_by_supplier',
            ),
            array(
                'type' => 'text',
                'name' => 'product_id',
                'label' => $this->l('Product Ids'),
                'desc' => $this->l('Show product follow product id. Ex 1 or 1,2,3,4 '),
                'default' => '',
                'form_group_class' => 'value_by_product_id',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="sperator"></div>',
                'form_group_class' => 'value_by_product_id',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="alert alert-info">'.$this->l('Step 2: Product Order And Limit').'</div>',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Order Way'),
                'class' => 'form-action',
                'name' => 'order_way',
                'options' => array(
                    'query' => array(
                        array('id' => 'asc', 'name' => $this->l('Asc')),
                        array('id' => 'desc', 'name' => $this->l('Desc')),
                        array('id' => 'random', 'name' => $this->l('Random'))),        // remove to increase speed
                    'id' => 'id',
                    'name' => 'name'
                ),
                'default' => 'all'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Order By'),
                'name' => 'order_by',
                'options' => array(
                    'query' => ApPageSetting::getOrderBy(),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'order_type_sub order_type-asc order_type-desc',
                'default' => 'all'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Columns'),
                'name' => 'columns',
                'options' => array('query' => array(
                        array('id' => '1', 'name' => $this->l('1 Column')),
                        array('id' => '2', 'name' => $this->l('2 Columns')),
                        array('id' => '3', 'name' => $this->l('3 Columns')),
                        array('id' => '4', 'name' => $this->l('4 Columns')),
                        array('id' => '5', 'name' => $this->l('5 Columns')),
                        array('id' => '6', 'name' => $this->l('6 Columns')),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'default' => '4',
            ),
            array(
                'type' => 'text',
                'name' => 'nb_products',
                'label' => $this->l('Limit'),
                'default' => '10',
            ),
            //boostrap carousel end
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="alert alert-info">'.$this->l('Step 3: Product Template').'</div>',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Product Template'),
                'name' => 'profile',
                'options' => array(
                    'query' => $profile_list,
                    'id' => 'plist_key',
                    'name' => 'name'
                ),
                'default' => 'all'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Use Animation For Product Item'),
                'name' => 'use_animation',
                'values' => ApPageSetting::returnYesNo(),
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Use Show More button'),
                'name' => 'use_showmore',
                'desc' => $this->l('Show button to load more product or hidden this function'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '1'
            ),
        );
        return $input;
    }

    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        $form_atts = $assign['formAtts'];
        $n = (int)isset($form_atts['nb_products']) ? $form_atts['nb_products'] : '10';
        $p = (int)Tools::getIsset('p') ? Tools::getValue('p') : '1';
        $form_atts['page_number'] = $p;
        $form_atts['get_total'] = true;
        $module = APPageBuilder::getInstance();
        $form_atts['get_total'] = false;
        //get more product to paging
        $n = $form_atts['nb_products'];
        $form_atts['nb_products'] = $n + 1;

        $products = $module->getProductsFont($form_atts);
        $smore = 1;
        if (count($products) <= $n)
        {
            $smore = 0;
        } else {
            unset($products[$n]);
        }

        $products = $this->loadProductDetail($products, $module);

        
        if (isset($assign['formAtts']['use_showmore']) && $assign['formAtts']['use_showmore']) {
            if ($smore) {
                $assign['formAtts']['use_showmore'] = 1;
            } else {
                $assign['formAtts']['use_showmore'] = 0;
            }
        }
        
        $assign['scolumn'] = $form_atts['columns'];
        $assign['products'] = $products;
        $assign['p'] = $p + 1;
        
        $assign['productClassWidget'] = $this->getProductClassByPListKey($assign['formAtts']['profile']);

        if (isset($assign['formAtts']['profile']) && $assign['formAtts']['profile'] != 'default' && file_exists(apPageHelper::getConfigDir('theme_profiles').$assign['formAtts']['profile'] . '.tpl')) {
            $assign['product_item_path'] = apPageHelper::getConfigDir('theme_profiles') . $assign['formAtts']['profile'].'.tpl';
        } else {
            // Default load file in theme
            $assign['product_item_path'] = 'catalog/_partials/miniatures/product.tpl';
        }
        
        # DATA FOR AJAX
        $apPConfig = $form_atts;
        // FIX : special charactor http://screencast.com/t/cEqFoIL5K
        unset($apPConfig['title']);
        
        $assign['apPConfig'] = call_user_func('base64'.'_encode', json_encode($apPConfig));
        return $assign;
    }

    public function ajaxProcessRender($module)
    {
        $assign = array();
        $params = array();
        $input = json_decode(call_user_func('base64'.'_decode', Tools::getValue('config')));
        $use_animation = Tools::getValue('use_animation');
        $n = (int)isset($input->nb_products) ? $input->nb_products : '10';
        $p = (int)Tools::getIsset('p') ? Tools::getValue('p') : '1';
        $params['value_by_categories'] = isset($input->value_by_categories) ? $input->value_by_categories : '0';
        $params['value_by_product_type'] = isset($input->value_by_product_type) ? $input->value_by_product_type : '0';
        $params['value_by_manufacture'] = isset($input->value_by_manufacture) ? $input->value_by_manufacture : '0';
        $params['value_by_supplier'] = isset($input->value_by_supplier) ? $input->value_by_supplier : '0';
        $params['categorybox'] = isset($input->categorybox) ? $input->categorybox : '';
        $params['category_type'] = isset($input->category_type) ? $input->category_type : '';
        $params['product_type'] = isset($input->product_type) ? $input->product_type : '';
        $params['manufacture'] = isset($input->manufacture) ? $input->manufacture : '';
        $params['supplier'] = isset($input->supplier) ? $input->supplier : '';
        $params['nb_products'] = $n;
        $params['page_number'] = $p;
        $params['order_by'] = isset($input->order_by) ? $input->order_by : '';
        $params['order_way'] = isset($input->order_way) ? $input->order_way : '';
        $params['get_total'] = 0;
        $params['override_folder'] = isset($input->override_folder) ? $input->override_folder : '';
        $assign['product_item_path'] = Tools::getValue('product_item_path') ? Tools::getValue('product_item_path') : 'catalog/_partials/miniatures/product.tpl';
        
        // FIX AJAX SHOW_MORE NOT GET PRODUCT_ID
        $input2 = json_decode(call_user_func('base64'.'_decode', Tools::getValue('config')), true);
        if (is_array($input2) && $input2) {
            $params = array_merge($input2, $params);
        }
        $params['ajaxlist'] = 1;

        $products = $module->getProductsFont($params);
        $is_more = 0;

        if (count($products) >= $params['nb_products'])
        {
            if (isset($params['use_showmore']) && $params['use_showmore']) {
                $is_more = 1;
            }
            unset($products[$params['nb_products']-1]);
        }


        $products = $this->loadProductDetail($products, $module);

        $assign['profile'] = (isset($input->profile) && $input->profile != 'default') ? $input->profile : '';
        $assign['products'] = $products;
        $assign['apAjax'] = 1;
        $assign['scolumn'] = $input->columns;
        $assign['formAtts']['use_animation'] = $use_animation;
        
        $theme_name = apPageHelper::getThemeName();
        $tpl_name = 'ApProductList.tpl';
        if (isset($params['override_folder']) && file_exists(_PS_ALL_THEMES_DIR_.$theme_name.'/modules/appagebuilder/views/templates/hook/'.$params['override_folder'].'/'.$tpl_name)) {
            // overide_folder
            $tpl_file = _PS_ALL_THEMES_DIR_.$theme_name.'/modules/appagebuilder/views/templates/hook/'.$params['override_folder'].'/'.$tpl_name;
//      } elseif (file_exists(_PS_ALL_THEMES_DIR_.$theme_name.'/modules/appagebuilder/views/templates/hook/'.$hook_name.'/'.$tpl_name) || file_exists(dirname(__FILE__).'/views/templates/hook/'.$hook_name.'/'.$tpl_name)) {
//            $tpl_file = 'views/templates/hook/'.$hook_name.'/'.$tpl_name;
        } elseif (file_exists(_PS_ALL_THEMES_DIR_.$theme_name.'/modules/appagebuilder/views/templates/hook/'.$tpl_name) || file_exists(dirname(__FILE__).'/views/templates/hook/'.$tpl_name)) {
            // theme folder
            $tpl_file = _PS_ALL_THEMES_DIR_.$theme_name.'/modules/appagebuilder/views/templates/hook/'.$tpl_name;
        } else {
            // module folder
            $tpl_file = _PS_MODULE_DIR_.'appagebuilder/views/templates/hook/'.$tpl_name;
        }
        
        $imageRetriever = new ImageRetriever(Context::getContext()->link);
        $urls = array();
        $urls['no_picture_image'] =  $imageRetriever->getNoPictureImage(Context::getContext()->language);
        Context::getContext()->smarty->assign('urls', $urls);
        
        foreach ($assign as $key => $ass) {
            Context::getContext()->smarty->assign(array($key => $ass));
        }
        $html = Context::getContext()->smarty->fetch($tpl_file);
        
        return array('html' => $html, 'is_more' => $is_more);
    }
    
    public function loadProductDetail($products, $module)
    {
        # 1.7
        $assembler = new ProductAssembler(Context::getContext());
        $presenterFactory = new ProductPresenterFactory(Context::getContext());
        $presentationSettings = $presenterFactory->getPresentationSettings();
        if (version_compare(Configuration::get('PS_INSTALL_VERSION'), '9.0.0', '>=')
            || version_compare(Configuration::get('PS_VERSION_DB'), '9.0.0', '>=')
            || version_compare(_PS_VERSION_, '9.0.0', '>=')) {
            $presenter = new ProductListingPresenter9(
                new ImageRetriever(
                    Context::getContext()->link
                ),
                Context::getContext()->link,
                new PriceFormatter(),
                new ProductColorsRetriever(),
                Context::getContext()->getTranslator()
            );
        }else{
            $presenter = new ProductListingPresenter(
                new ImageRetriever(
                    Context::getContext()->link
                ),
                Context::getContext()->link,
                new PriceFormatter(),
                new ProductColorsRetriever(),
                Context::getContext()->getTranslator()
            );
        }
        
        $products_for_template = array();
        foreach ($products as $rawProduct) {
            $product_temp = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                Context::getContext()->language
            );
            # FIX 1.7.5.0
            if (version_compare(_PS_VERSION_, '1.7.7.0', '<') && is_object($product_temp) && method_exists($product_temp, 'jsonSerialize')) {
                $product_temp = $product_temp->jsonSerialize();
            }
            # ADD SHORTCODE TO PRODUCT DESCRIPTION AND PRODUCT SHORT DESCRIPTION
            $product_temp['description'] = $module->buildShortCode($product_temp['description']);
            $product_temp['description_short'] = $module->buildShortCode($product_temp['description_short']);
            $products_for_template[] = $product_temp;
        }
        return $products_for_template;
    }
}
