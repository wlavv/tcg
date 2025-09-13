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

//require_once(_PS_MODULE_DIR_.'appagebuilder/classes/ApPageBuilderHookModel.php');

class ApRow extends ApShortCodeBase
{
    public $name = 'ApRow';
    public $for_module = 'manage';
    public $show_upload = '1';
    public $atribute = array('el_class' => '');
    public $profile_param = array();

    public function getInfo()
    {
        return array('label' => $this->l('Row'), 'position' => 1,
            'desc' => $this->l('Each row can have one or more Column'),
            'tag' => 'content structure');
    }

    public function getConfigList()
    {
        $input = array(
            array(
                'type' => 'tabConfig',
                'name' => 'tabConfig',
                'values' => array(
                    'aprow_general' => $this->l('General'),
                    'aprow_style' => $this->l('Style'),
                    'aprow_background' => $this->l('Background'),
                    // 'aprow_animation' => $this->l('Animation'),
                    'aprow_exceptions' => $this->l('Exceptions'))
            ),
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'desc' => $this->l('Auto hide if leave it blank'),
                'lang' => 'true',
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'textarea',
                'name' => 'sub_title',
                'label' => $this->l('Sub Title'),
                'lang' => true,
                'values' => '',
                'autoload_rte' => false,
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'id',
                'label' => $this->l('ID'),
                'form_group_class' => 'aprow_general',
                'desc' => $this->l('Use for css and javascript'),
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'container',
                'label' => $this->l('Class container'),
                'form_group_class' => 'aprow_general',
                'desc' => $this->getDescriptionContainerInput(),
                'default' => ''
            ),
            array(
                'type' => 'ApRowclass',
                'name' => 'class',
                'leolabel' => 'CSS Class',
                'form_group_class' => 'aprow_general',
                'default' => 'row'
            ),
            array(
                'type' => 'text',
                'name' => 'min_height',
                'label' => $this->l('Minimum height'),
                'desc' => $this->l('You can use pixels : 10px or percents : 10%.'),
                'default' => '',
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Margin Top'),
                'name' => 'margin_top',
                'desc' => $this->l('You can use pixels :10px or percents : 10%.'),
                'default' => '',
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Margin Bottom'),
                'name' => 'margin_bottom',
                'desc' => $this->l('You can use pixels :10px or percents : 10%.'),
                'default' => '',
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Padding Top'),
                'name' => 'padding_top',
                'desc' => $this->l('You can use pixels :10px or percents : 10%.'),
                'default' => '',
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Padding Bottom'),
                'name' => 'padding_bottom',
                'desc' => $this->l('You can use pixels : 10px or percents : 10%.'),
                'default' => '',
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Background Config'),
                'name' => 'bg_config',
                'default' => 'boxed',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'fullwidth',
                            'name' => $this->l('Full width'),
                        ),
                        array(
                            'id' => 'boxed',
                            'name' => $this->l('Boxed'),
                        ),
                        array(
                            'id' => 'none',
                            'name' => $this->l('None'),
                        ),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_background',
                'desc' => $this->l('If your layout is boxed select background is boxed to run parallax.'),
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Background Type'),
                'name' => 'bg_type',
                'class' => 'form-action',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'normal',
                            'name' => $this->l('Normal'),
                        ),
                        array(
                            'id' => 'fixed',
                            'name' => $this->l('Fixed'),
                        ),
                        array(
                            'id' => 'parallax',
                            'name' => $this->l('Parallax'),
                        ),
                        array(
                            'id' => 'mouseparallax',
                            'name' => $this->l('Mouse Parallax'),
                        ),
//                        array(
//                            'id' => 'video_youtube',
//                            'name' => $this->l('Video Youtube'),
//                        ),
//                                                array(
//                            'id' => 'video_vimeo',
//                            'name' => $this->l('Vimeo video'),
//                        ),
//                                                array(
//                            'id' => 'video_html5',
//                            'name' => $this->l('HTML5'),
//                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_background',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Background size'),
                'name' => 'bg_size',
                'desc' => $this->l('Set CSS value for the background size. (Ex: contain, cover, 50% 100%, 100px 200px,..)'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-normal bg_type-fixed bg_type-parallax',
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Background color'),
                'name' => 'bg_color',
                'default' => '',
                'form_group_class' => 'aprow_background bg_type_sub bg_type-normal bg_type-fixed bg_type-parallax bg_type-mouseparallax',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<script type="text/javascript" src="'.__PS_BASE_URI__.apPageHelper::getJsDir().'colorpicker/js/leo.jquery.colorpicker.js"></script>',
            ),
            array(
                'type' => 'bg_img',
                'label' => $this->l('Background image'),
                'name' => 'bg_img',
//                'img_link' => _THEME_IMG_DIR_.'modules/'.$this->module_name.'/images/',
                'img_link' => _THEMES_DIR_.apPageHelper::getThemeName().'/assets/img/modules/'.$this->module_name.'/images/',
                'default' => '',
                'form_group_class' => 'aprow_background bg_type_sub bg_type-normal bg_type-fixed bg_type-parallax bg_type-mouseparallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Background position'),
                'name' => 'bg_position',
                'desc' => $this->l('Set CSS value for the background image position. (Ex: center top, right bottom, 50% 50%, 100px 200px,..)'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-normal bg_type-fixed bg_type-parallax',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Background repeat'),
                'name' => 'bg_repeat',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'no-repeat',
                            'name' => $this->l('No repeat'),
                        ),
                        array(
                            'id' => 'repeat',
                            'name' => $this->l('Repeat All'),
                        ),
                        array(
                            'id' => 'repeat-x',
                            'name' => $this->l('repeat horizontally only'),
                        ),
                        array(
                            'id' => 'repeat-y',
                            'name' => $this->l('repeat vertically only'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-normal bg_type-fixed bg_type-parallax bg_type-mouseparallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Parallax speed'),
                'name' => 'parallax_speed',
                'default' => '0.1',
                'desc' => $this->l('Set the background speed, this is relative to the natural scroll speed (Ex: 0, 0.5, 1, 2).'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-parallax',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Parallax axis'),
                'desc' => $this->l('Select axis effect for this background.'),
                'name' => 'parallax_axis',
                'desc' => $this->l('Select axis effect for this background.'),
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'both',
                            'name' => $this->l('Both'),
                        ),
                        array(
                            'id' => 'axis-x',
                            'name' => $this->l('Axis X (horizontally)'),
                        ),
                        array(
                            'id' => 'axis-y',
                            'name' => $this->l('Axis Y (vertically)'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-mouseparallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Parallax strength'),
                'name' => 'parallax_strength',
                'default' => '0.5',
                'desc' => $this->l('Set the background strength, this is relative to the natural mouse speed (Ex: 0, 0.5, 1, 2).'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-mouseparallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Parallax rid'),
                'name' => 'parallax_rid',
                'default' => '0.5',
                'form_group_class' => 'aprow_background bg_type_sub bg_type-mouseparallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Parallax horizontal offsets'),
                'name' => 'parallax_hoffsets',
                'default' => '0.1',
                'desc' => $this->l('Set the global alignment horizontal offset'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-parallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Parallax vertical speed'),
                'name' => 'parallax_voffsets',
                'default' => '0.1',
                'desc' => $this->l('Set the global alignment vertical offset'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-parallax',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Video background'),
                'name' => 'video_link',
                'default' => '',
                'desc' => $this->l('Put video youtube link or vimeo'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-video_html5',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Video ID'),
                'name' => 'video_id',
                'default' => '',
                'desc' => $this->l('Put video ID of youtube link or vimeo'),
                'form_group_class' => 'aprow_background bg_type_sub bg_type-video_youtube bg_type-video_vimeo',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Specific Controller'),
                'name' => 'specific_type',
                'class' => 'form-action',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'all',
                            'name' => $this->l('Show on all Page Controller'),
                        ),
                        array(
                            'id' => 'index',
                            'name' => $this->l('Show on only Index'),
                        ),
                        array(
                            'id' => 'nocategory',
                            'name' => $this->l('Category: Not Display In Category list'),
                        ),
                        array(
                            'id' => 'nocategoryproduct',
                            'name' => $this->l('Category: Not Display In Category list and product of it'),
                        ),
                        array(
                            'id' => 'category',
                            'name' => $this->l('Category: Display only Category list'),
                        ),
                        array(
                            'id' => 'categoryproduct',
                            'name' => $this->l('Category: Display only Category list and product of Category'),
                        ),
                        array(
                            'id' => 'categoryproductmain',
                            'name' => $this->l('Category: Display only Category list and product of Main Category'),
                        ),
                        array(
                            'id' => 'product',
                            'name' => $this->l('Show on only Product'),
                        ),
                        array(
                            'id' => 'cms',
                            'name' => $this->l('Show on only CMS'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_exceptions',
                'default' => 'all'
            ),
            array(
                'type' => 'reloadControler',
                'label' => $this->l('AJAX Reload Controller'),
                'name' => 'reloadControler',
                'default' => '',
                'form_group_class' => 'aprow_exceptions  specific_type_sub specific_type-all',
                'hint' => 'If website have new a Controller, click to generate Controller again.',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Controller ID'),
                'name' => 'controller_id',
                'desc' => $this->l('Example: 1,2,3'),
                'default' => '',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-category specific_type-nocategory specific_type-nocategoryproduct specific_type-categoryproduct specific_type-categoryproductmain specific_type-product specific_type-cms',
            ),
            array(
                'type' => 'apExceptions',
                'name' => 'controller_pages',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-all',
            ),
        );
        return $input;
    }
    
    public function endRenderForm()
    {
//        $display_module_exception = '';
//
//        if (Tools::getValue('reloadControllerException')) {
//            # ReLoad : write to config
//            $display_module_exception = $this->displayModuleExceptionList();
//
//            $ap_cache_controller_exception = apPageHelper::correctEnCodeData($display_module_exception);
//            Configuration::updateValue('AP_CACHE_CONTROLLER_EXCEPTION', $ap_cache_controller_exception);
//        } else {
//
//            $display_module_exception = Configuration::get('AP_CACHE_CONTROLLER_EXCEPTION');
//            if ($display_module_exception === false)
//            {
//                # First Time : write to config
//                $display_module_exception = $this->displayModuleExceptionList();
//
//                $ap_cache_controller_exception = apPageHelper::correctEnCodeData($display_module_exception);
//                Configuration::updateValue('AP_CACHE_CONTROLLER_EXCEPTION', $ap_cache_controller_exception);
//            } else {
//                # Second Time : read from config
//                $display_module_exception = apPageHelper::correctDeCodeData($display_module_exception);
//            }
//        }
//        $this->helper->tpl_vars['exception_list'] = $display_module_exception;
        $this->helper->module = new $this->module_name();
        $this->helper->tpl_vars['link'] = Context::getContext()->link;
        $this->helper->tpl_vars['exception_list'] = $this->displayModuleExceptionList();
    }
    
    public function displayModuleExceptionList()
    {
        $controllers = array();
        $controllers_modules = array();
        $controllers_modules['admin'] = array();
        $controllers_modules['front'] = array();
        
        if (Tools::getValue('reloadControllerException')) {
            $controllers = Dispatcher::getControllers(_PS_FRONT_CONTROLLER_DIR_);
            $controllers_modules = array(
                'admin' => Dispatcher::getModuleControllers('admin'),
                'front' => Dispatcher::getModuleControllers('front'),
            );
            
            Configuration::updateValue('AP_CACHE_FRONT_CONTROLLER_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers)));
            Configuration::updateValue('AP_CACHE_FRONT_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers_modules['admin'])));
            Configuration::updateValue('AP_CACHE_ADMIN_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers_modules['front'])));
        } else {
            if (Configuration::get('AP_CACHE_FRONT_CONTROLLER_EXCEPTION') === false) {
                # First Time : write to config
                $controllers = Dispatcher::getControllers(_PS_FRONT_CONTROLLER_DIR_);
                Configuration::updateValue('AP_CACHE_FRONT_CONTROLLER_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers)));
            } else {
                # Second Time : read from config
                $controllers = json_decode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_FRONT_CONTROLLER_EXCEPTION')), true);
            }
            
            if (Configuration::get('AP_CACHE_FRONT_MODULE_EXCEPTION') === false) {
                # First Time : write to config
                $controllers_modules['admin'] = Dispatcher::getModuleControllers('admin');
                Configuration::updateValue('AP_CACHE_FRONT_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers_modules['admin'])));
            } else {
                # Second Time : read from config
                $controllers_modules['admin'] = json_decode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_FRONT_MODULE_EXCEPTION')), true);
            }
            
            if (Configuration::get('AP_CACHE_ADMIN_MODULE_EXCEPTION') === false) {
                # First Time : write to config
                $controllers_modules['front'] = Dispatcher::getModuleControllers('front');
                Configuration::updateValue('AP_CACHE_ADMIN_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(json_encode($controllers_modules['front'])));
            } else {
                # Second Time : read from config
                $controllers_modules['front'] = json_decode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_ADMIN_MODULE_EXCEPTION')), true);
            }
        }
        
        $controller = Tools::getValue('controller_pages');
        $arr_controllers = explode(',', $controller);
        $arr_controllers = array_map('trim', $arr_controllers);

        $modules_controllers_type = array('front' => $this->l('Front modules controller'), 'admin' => $this->l('Admin modules controller'));
        Context::getContext()->smarty->assign(array(
            '_core_' => $this->l('________________________________________ CORE ________________________________________'),
            'controller' => $controller,
            'arr_controllers' => $arr_controllers,
            'controllers' => $controllers,
            'modules_controllers_type' => $modules_controllers_type,
            'controllers_modules' => $controllers_modules,
        ));
        $content = Context::getContext()->smarty->fetch(apPageHelper::getShortcodeTemplatePath('ApRow.tpl'));
        return $content;
    }
    
    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        $form_atts = $assign['formAtts'];

        //process back-ground
        $form_atts['bg_class'] = '';
        $form_atts['bg_data'] = '';
        $form_atts['parallax'] = '';
        $form_atts['bg_video'] = '';

        //1. set class
        if (isset($form_atts['bg_config']) && $form_atts['bg_config'] != 'none') {
            $form_atts['bg_class'] = 'has-bg';
            //video
            if (isset($form_atts['bg_type']) && ($form_atts['bg_type'] == 'video_youtube' || $form_atts['bg_type'] == 'video_youtube' || $form_atts['bg_type'] == 'video_youtube')) {
                // validate module
                $form_atts['bg_video'] = $this->getBgStyleVideo($form_atts);
            } else {
                if ($form_atts['bg_config'] == 'boxed') {
                    // validate module
                    $form_atts['bg_class'] .= ' bg-boxed';
                } else {
                    if (isset($form_atts['container']) && $form_atts['container']) {
                        // validate module
                        $form_atts['bg_class'] .= ' bg-fullwidth-container';
                    } else {
                        $form_atts['id'] = (isset($form_atts['id']) && $form_atts['id'] != '') ? $form_atts['id'] : $form_atts['form_id'];
                        $form_atts['bg_class'] .= ' bg-fullwidth';
                    }
                }
                if (isset($form_atts['bg_color']) && $form_atts['bg_color']) {
                    // validate module
                    $form_atts['bg_data'] .= ' '.$form_atts['bg_color'];
                }
                if (isset($form_atts['bg_img']) && $form_atts['bg_img']) {
                    if (strpos($form_atts['bg_img'], '/') == false) {
                        // validate module
                        $form_atts['bg_img'] = _THEMES_DIR_.apPageHelper::getThemeName().'/assets/img/modules/'.$this->module_name.'/images/'.$form_atts['bg_img'];
                    } else {
                        $form_atts['bg_img'] = str_replace(apPageHelper::getStrSearch(), apPageHelper::getStrReplace(), $form_atts['bg_img']);
                    }
                    $form_atts['bg_img'] = $form_atts['bg_img'];
                }
                if (isset($form_atts['bg_type']) && $form_atts['bg_type'] == 'fixed') {
                    // validate module
                    $form_atts['bg_data'] .= ' fixed';
                }
                if ($form_atts['bg_repeat']) {
                    // validate module
                    $form_atts['bg_data'] .= ' '.$form_atts['bg_repeat'];
                }
                if (isset($form_atts['bg_position']) && $form_atts['bg_position']) {
                    // validate module
                    $form_atts['bg_data'] .= ' '.$form_atts['bg_position'];
                }
                if (isset($form_atts['bg_size']) && $form_atts['bg_size']) {
                    if (!empty($form_atts['bg_data'])) {
                        $form_atts['bg_data'] .= '; ';
                    }
                            
                    $form_atts['bg_data'] .= 'background-size: '.$form_atts['bg_size'];
                }
                //config for background style - stela - stela
                if (isset($form_atts['bg_img']) && $form_atts['bg_img'] && isset($form_atts['bg_type']) && $form_atts['bg_type'] == 'parallax') {
                    $form_atts['bg_class'] .= ' bg-parallax';
                    $hoffset = (isset($form_atts['parallax_hoffsets']) && $form_atts['parallax_hoffsets']) ? $form_atts['parallax_hoffsets'] : '40';
                    $voffset = (isset($form_atts['parallax_voffsets']) && $form_atts['parallax_voffsets']) ? $form_atts['parallax_voffsets'] : '150';
                    $bratio = (isset($form_atts['parallax_speed']) && $form_atts['parallax_speed']) ? $form_atts['parallax_speed'] : '0.5';

                    $form_atts['id'] = (isset($form_atts['id']) && $form_atts['id'] != '') ? $form_atts['id'] : $form_atts['form_id'];

                    $form_atts['parallax'] = 'data-stellar-horizontal-offset="'
                            .$hoffset.'" data-stellar-vertical-offset="'.$voffset.'" data-stellar-background-ratio="'.$bratio.'"';
                }

                if (isset($form_atts['bg_img']) && $form_atts['bg_img'] && isset($form_atts['bg_type']) && $form_atts['bg_type'] == 'mouseparallax') {
                    $strength = (isset($form_atts['parallax_strength']) && $form_atts['parallax_strength']) ? $form_atts['parallax_strength'] : '40';
                    $axis = (isset($form_atts['parallax_axis']) && $form_atts['parallax_axis']) ? $form_atts['parallax_axis'] : 'both';
                    $rid = (isset($form_atts['parallax_rid']) && $form_atts['parallax_rid']) ? $form_atts['parallax_rid'] : '0.5';

                    $form_atts['id'] = $form_atts['form_id'];

                    $form_atts['parallax'] = 'data-mouse-parallax-strength="'.$strength.'" data-mouse-parallax-axis="'.$axis.'" data-mouse-parallax-rid="'.$rid.'"';
                }
            }
        }

        if (!isset($form_atts['animation']) || $form_atts['animation'] == 'none') {
            $form_atts['animation'] = 'none';
            $form_atts['animation_delay'] = '';
        } elseif ($form_atts['animation'] != 'none') {
            // validate module
            //DONGND:: add more config for animation
            if ((int)$form_atts['animation_delay'] >= 0) {
                $form_atts['animation_delay'] .= 's';
            } else {
                $form_atts['animation_delay'] = '1s';
            }
            
            if (isset($form_atts['animation_duration']) && (int)$form_atts['animation_duration'] >= 0) {
                $form_atts['animation_duration'] .= 's';
            } else {
                $form_atts['animation_duration'] = '1s';
            }
            
            if (isset($form_atts['animation_iteration_count']) && (int)$form_atts['animation_iteration_count'] > 0) {
                $form_atts['animation_iteration_count'] = (int)$form_atts['animation_iteration_count'];
            } else {
                $form_atts['animation_iteration_count'] = 1;
            }
        };

        # set style
        $assign['formAtts'] = $form_atts;
        $form_atts['css_style'] = $this->showCSSStyle($assign);
        $assign['formAtts']['css_style'] = $this->showCSSStyle($assign);
        //not call this function in shortcode
        if ($this->profile_param) {
            $this->checkFullwidth($assign);
        }
        

        return $assign;
    }

    //delete model return already value
    public function checkFullwidth(&$assign)
    {
        $page_name = apPageHelper::getPageName();
        $hook_name = ApShortCodesBuilder::$hook_name;

        if ($page_name == 'index') {
            $hooks = $this->profile_param['fullwidth_index_hook'];
        } else {
            $hooks = $this->profile_param['fullwidth_other_hook'];
        }

        if (isset($hooks[$hook_name]) && $hooks[$hook_name] == ApPageSetting::HOOK_FULWIDTH_INDEXPAGE) {
            // validate module
            $assign['formAtts']['container_remove'] = '0';
        } else {
            # remove container class - BEGIN
            if (isset($assign['formAtts']['container'])) {
                $str_search = array('/\bcontainer\b/');
                $str_replace = array('');
                $str_subject = $assign['formAtts']['container'];

                $assign['formAtts']['container'] = preg_replace($str_search, $str_replace, $str_subject);
                $assign['formAtts']['container_remove'] = '1';
            }
            # remove container class - END
        }
    }

    public function getHookLayout()
    {
        $hook_name = Tools::getValue('hook_name');
        return isset($this->profile_param['fullwidth_index_hook'][$hook_name]) ? $this->profile_param['fullwidth_index_hook'][$hook_name] : 0;
    }

    /**
     * Live
     * not follow in database
     */
    public function getRowLayOut($hook_layout)
    {
        $row_layout = ApPageSetting::ROW_BOXED;
        if ($hook_layout == ApPageSetting::HOOK_FULWIDTH_INDEXPAGE) {
            $row_container = Tools::getValue('container');
            if (!preg_match('/\bcontainer\b/', $row_container)) {
                // validate module
                $row_layout = ApPageSetting::ROW_FULWIDTH_INDEXPAGE;
            }
        }

        return $row_layout;
    }

    public function getDescriptionContainerInput()
    {
        $hook_layout = $this->getHookLayout();
        $row_layout = $this->getRowLayOut($hook_layout);

        $id_profile = Tools::getValue('id_appagebuilder_profiles');
        $url_profile_edit = Context::getContext()->link->getAdminLink('AdminApPageBuilderProfiles').
                '&id_appagebuilder_profiles='.$id_profile.'&updateappagebuilder_profiles';
        $link = '<a href="'.$url_profile_edit.'" target="blank">edit profile</a>';

        $hook_name = Tools::getValue('hook_name');

        $row_layout_text = 'Boxed';
        if ($row_layout) {
            // validate module
            $row_layout_text = 'Fullwidth';
        }

        $row_contain_class = 0;
        $row_container = Tools::getValue('container');
        if (preg_match('/\bcontainer\b/', $row_container)) {
            // validate module
            $row_contain_class = 1;
        }
        if ($row_layout) {
            # fullwidth
            $desc = 'Now Layout of Row is <strong>'.$row_layout_text.'</strong>, to change to Boxed :';
            $desc .= '<br />';
            $desc .= '- Typing "container" to above textbox.';
        } else {
            # boxed
            $desc = 'Now Layout of Row is <strong>'.$row_layout_text.'</strong>, to change to Fullwidth :';
            if ($row_contain_class) {
                $desc .= '<br />';
                $desc .= '- Removing "container" above textbox.';
            }
            if ($hook_layout == ApPageSetting::HOOK_BOXED) {
                $desc .= '<br />';
                $desc .= '- Going to '.$link.' check option "'.$hook_name.'" hook of "Fullwidth Homepage"';
            }
        }
        return $desc;
    }

    public function showCSSStyle($assign)
    {
        $form_atts = $assign['formAtts'];
        $style = 'style="';
        if (isset($form_atts['bg_config']) && $form_atts['bg_config'] == 'boxed') {
            if (isset($form_atts['bg_img']) && $form_atts['bg_img'] && !Configuration::get('APPAGEBUILDER_LOAD_LAZY')) {
                $style .= 'background:url('.$form_atts['bg_img'].')'.$form_atts['bg_data'].';';
            } else {
                $style .= 'background:'.$form_atts['bg_data'].';';
            }
        }
        if (isset($form_atts['min_height']) && $form_atts['min_height']) {
            $style .= 'min-height: '.$form_atts['min_height'].';';
        }
        if (isset($form_atts['margin_top']) && $form_atts['margin_top']) {
            $style .= 'margin-top: '.$form_atts['margin_top'].';';
        }
        if (isset($form_atts['margin_bottom']) && $form_atts['margin_bottom']) {
            $style .= 'margin-bottom: '.$form_atts['margin_bottom'].';';
        }
        if (isset($form_atts['padding_top']) && $form_atts['padding_top']) {
            $style .= 'padding-top: '.$form_atts['padding_top'].';';
        }
        if (isset($form_atts['padding_bottom']) && $form_atts['padding_bottom']) {
            $style .= 'padding-bottom: '.$form_atts['padding_bottom'].';';
        }
        $style .= '"';
        return $style;
    }
    
    public function getPageName()
    {
        // Are we in a payment module
        $module_name = '';
        if (Validate::isModuleName(Tools::getValue('module'))) {
            $module_name = Tools::getValue('module');
        }

        if (!empty($this->page_name)) {
            $page_name = $this->page_name;
        } elseif (!empty($this->php_self)) {
            $page_name = $this->php_self;
        } elseif (Tools::getValue('fc') == 'module' && $module_name != '' && (Module::getInstanceByName($module_name) instanceof PaymentModule)) {
            $page_name = 'module-payment-submit';
        } elseif (preg_match('#^'.preg_quote(Context::getContext()->shop->physical_uri, '#').'modules/([a-zA-Z0-9_-]+?)/(.*)$#', $_SERVER['REQUEST_URI'], $m)) {
            // @retrocompatibility Are we in a module ?
            $page_name = 'module-'.$m[1].'-'.str_replace(array('.php', '/'), array('', '-'), $m[2]);
        } else {
            $page_name = Dispatcher::getInstance()->getController();
            $page_name = (preg_match('/^[0-9]/', $page_name) ? 'page_'.$page_name : $page_name);
        }
        return $page_name;
    }
}
