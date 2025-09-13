<?php
/**
 * 2007-2015 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo Quick Login And Social Login
 *
 * DISCLAIMER
 *
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2015 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Leoquicklogin extends Module implements WidgetInterface
{

    public $tabs;
    public $list_type;
    public $list_layout;
    public $module_path;
    public $secure_key;
    public $errors;
    public $fields_form;
    //DONGND:: create list hook to support
    public $hook_support = array(
        'displayTop',
        'displayNav1',
        'displayNav2',
        'displayNavFullWidth',
        'displayLeftColumn',
        'displayHome',
        'displayRightColumn',
        'displayFooterBefore',
        'displayFooter',
        'displayFooterAfter',
        'displayLeftColumnProduct',
        'displayFooterProduct',
        'displayRightColumnProduct',
        'displayProductButtons',
        'displayReassurance');
    public $is_gen_rtl;
    private $_html = '';

    public function __construct()
    {
        $this->name = 'leoquicklogin';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Leotheme';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->need_instance = 0;
        $this->controllers = array('leocustomer');
        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;
        // $this->static_token = Tools::getToken(false);
        parent::__construct();

        $this->secure_key = Tools::hash($this->name);
        $this->displayName = $this->l('Leo Quick Login And Social Login');
        $this->description = $this->l('Leo Quick Login And Social Login For Prestashop');

        //DONGND:: create tab array
        $this->tabs = array(
            array(
                'class_name' => 'AdminLeoQuickLoginModule',
                'name' => 'Leo Quick Login Configuration',
                'id_parent' => Tab::getIdFromClassName('AdminParentModulesSf'),
            ),
        );

        //DONGND:: create list type
        $this->list_type = array(
            'popup' => $this->l('Popup'),
            'slidebar_left' => $this->l('Slidebar Left'),
            'slidebar_right' => $this->l('Slidebar Right'),
            'slidebar_top' => $this->l('Slidebar Top'),
            'slidebar_bottom' => $this->l('Slidebar Bottom'),
            'dropdown' => $this->l('Drop Down'),
            'dropup' => $this->l('Drop Up'),
            'html' => $this->l('HTML'),
        );

        //DONGND:: create list layout
        $this->list_layout = array(
            'login' => $this->l('Only Login Form'),
            'register' => $this->l('Only Register Form'),
            'both' => $this->l('Both login and register form'),
        );
        $this->module_path = $this->_path;
        // $this->registerHook('displayAfterBodyOpeningTag');
        //DONGND:: check auto gen rtl
        if (file_exists(_PS_THEME_DIR_ . 'modules/' . $this->name . '/css/front_rtl.css') || file_exists(_PS_THEME_DIR_ . '/assets/css/modules/' . $this->name . '/css/front_rtl.css')) {
            $this->is_gen_rtl = true;
        } else {
            $this->is_gen_rtl = false;
        }
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (parent::install() && $this->createTables()) {
            $res = true;
            /* Creates tables */
            //$res &= $this->createTables();

            foreach ($this->tabs as $tab) {
                $newtab = new Tab();
                $newtab->class_name = $tab['class_name'];
                $newtab->id_parent = isset($tab['id_parent']) ? $tab['id_parent'] : 0;
                $newtab->module = 'leoquicklogin';
                foreach (Language::getLanguages(false) as $l) {
                    $newtab->name[$l['id_lang']] = $this->l($tab['name']);
                }
                $res &= $newtab->save();
            }

            Configuration::updateValue('AP_INSTALLED_LEOQUICKLOGIN', '1');
            Configuration::updateValue('LEOQUICKLOGIN_ENABLE_NEWSLETTER', '1');
            Configuration::updateValue('LEOQUICKLOGIN_ENABLE_GENDER', '1');

            return (bool) $res;
        }
        return false;
    }

    public function uninstall()
    {
        // Configuration::deleteByName('LEOFEATURE_LIVE_MODE');
        // return parent::uninstall();
        if (parent::uninstall() && $this->unregisterLeoHook()) {
            $res = true;

            foreach ($this->tabs as $tab) {
                $id = Tab::getIdFromClassName($tab['class_name']);
                if ($id) {
                    $tab = new Tab($id);
                    $tab->delete();
                }
            }

            // $res &= $this->deleteTables();
            $this->deleteConfiguration();

            return (bool) $res;
        }
        return false;
    }

    public function disable($force_all = false)
    {
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE', 0);
        return Module::disable($this->name);
    }

    public function enable($force_all = false)
    {
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE', 1);
        return Module::enable($this->name);
    }

    public function postProcess()
    {
        if (count($this->errors) > 0) {
            $this->ajax = Tools::getValue('ajax') || Tools::isSubmit('ajax');
            if ($this->ajax) {
                $array = array('hasError' => true, 'errors' => $this->errors[0]);
                die(json_encode($array));
            }
            return;
        }
        
        //DONGND:: correct module
        if (Tools::getValue('correctmodule')) {
            $this->correctModule();
            $this->_html .= $this->displayConfirmation($this->l('Correct Module is successful'));
        }
        
        if (((bool) Tools::isSubmit('submitLeoquickloginConfig')) == true) {
            if(!Validate::isInt(Tools::getValue('LEOQUICKLOGIN_LIFETIME_COOKIE'))) {
//                $this->context->smarty->assign('error', 'Lifetime Of Login Cookie - must be integer number');
                $this->_html .= $this->displayError($this->trans('Lifetime Of Login Cookie - must be integer number.', array(), 'Admin.Notifications.Success'));
                return;
            }
            
            $form_values = $this->getGroupFieldsValues();

            foreach (array_keys($form_values) as $key) {
                Configuration::updateValue($key, Tools::getValue($key));
            }

            $this->_html = $this->displayConfirmation($this->trans('Successful update.', array(), 'Admin.Notifications.Success'));
        }
    }
    
    public function getContent()
    {
        $this->errors = array();
        if (!$this->access('configure')) {
            $this->errors[] = $this->trans('You do not have permission to configure this.', array(), 'Admin.Notifications.Error');
//            $this->context->smarty->assign('errors', $this->errors);
            $this->_html .= $this->displayError($this->trans('You do not have permission to configure this.', array(), 'Admin.Notifications.Error'));
        }
        
        $this->postProcess();

        $this->_html .= $this->renderGroupConfig();

        return $this->_html;
    }

    public function renderGroupConfig()
    {
        $select_list_type = array();

        foreach ($this->list_type as $key => $value) {
            $select_list_type[] = array('id' => $key, 'name' => $value);
        }

        $select_list_layout = array();

        foreach ($this->list_layout as $key => $value) {
            $select_list_layout[] = array('id' => $key, 'name' => $value);
        }

        $fields_form = array();
        $fields_form[0]['form'] = array(
            'input' => array(
                array(
                    'type' => 'hidden',
                    'name' => 'LEOQUICKLOGIN_DEFAULT_TAB',
                    'default' => '',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Quick Login'),
                    'name' => 'LEOQUICKLOGIN_ENABLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Captcha'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_CAPTCHA',
                    'desc' => $this->l('Show captcha in registration form'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CAPTCHA_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CAPTCHA_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Redirect To My Account page'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_REDIRECT',
                    'desc' => $this->l('After login or create new account success'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_REDIRECT_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_REDIRECT_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Hide After Login Success'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_HIDE',
                    'desc' => $this->l('Not show anything at any position while the customer logged'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_HIDE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_HIDE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable "Gender" fields'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_GENDER',
                    'desc' => $this->l('Add "Social title" fields to login form.'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_GENDER_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_GENDER_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable GDPR'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_CHECK_TERMS',
                    'desc' => $this->l('Check accept terms.'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CHECK_TERMS_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CHECK_TERMS_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Newsletter subscription'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_NEWSLETTER',
                    'desc' => $this->l('Add check box "Sign up for our newsletter" to login form.'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_NEWSLETTER_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_NEWSLETTER_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->trans('Select CMS URL for GDPR'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_URL_GDPR',
                    'desc' => $this->trans('Select the page link to your text'),
                    'options' => array(
                        'query' => $this->getcmsoptions(),
                        'id' => 'id',
                        'name' => 'name'
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Check Login Cookie'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_CHECKCOOKIE',
                    'desc' => $this->l('Check browser cookie for the login session when the customer come back'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CHECKCOOKIE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_CHECKCOOKIE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Lifetime Of Login Cookie'),
                    'name' => 'LEOQUICKLOGIN_LIFETIME_COOKIE',
                    'desc' => $this->l('Only for enable check login cookie. Default: 28800 minutes = 20 days. 1440 minutes = 1 days. Set 0 to keep login session until the customer logout'),
                    'lang' => false,
                    'suffix' => $this->l('minutes'),
                ),
                // array(
                    // 'type' => 'switch',
                    // 'label' => $this->l('Enable Push Effect'),
                    // 'name' => 'LEOQUICKLOGIN_ENABLE_PUSHEFFECT',
                    // 'is_bool' => true,
                    // 'values' => array(
                        // array(
                            // 'id' => 'LEOQUICKLOGIN_ENABLE_PUSHEFFECT_on',
                            // 'value' => true,
                            // 'label' => $this->l('Enabled')
                        // ),
                        // array(
                            // 'id' => 'LEOQUICKLOGIN_ENABLE_PUSHEFFECT_off',
                            // 'value' => false,
                            // 'label' => $this->l('Disabled')
                        // )
                    // ),
                    // 'desc' => $this->l('Ony for type is Slidebar'),
                // ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Tab Navigation Style'),
                    'name' => 'LEOQUICKLOGIN_ENABLE_TABNAVIGATION',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_TABNAVIGATION_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_ENABLE_TABNAVIGATION_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                    'desc' => $this->l('Only display with one form layout'),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save and stay'),
                'class' => 'btn btn-default'
            )
        );
        foreach ($this->hook_support as $value) {
            $label = $value;
            $value = Tools::strtoupper($value);
            $fields_form[0]['form']['input'][] = array(
                'type' => 'html',
                'name' => $value . '_html',
                'html_content' => '<hr>',
            );
            $fields_form[0]['form']['input'][] = array(
                'type' => 'switch',
                'label' => $this->l('Enable for hook') . ' "' . $label . '"',
                'name' => 'LEOQUICKLOGIN_' . $value . '_ENABLE',
                'is_bool' => true,
                // 'desc' => $this->l('Show Button Cart At Product List'),
                'values' => array(
                    array(
                        'id' => 'LEOQUICKLOGIN_' . $value . '_ENABLE_on',
                        'value' => true,
                        'label' => $this->l('Enabled')
                    ),
                    array(
                        'id' => 'LEOQUICKLOGIN_' . $value . '_ENABLE_off',
                        'value' => false,
                        'label' => $this->l('Disabled')
                    )
                ),
            );

            $fields_form[0]['form']['input'][] = array(
                'type' => 'select',
                'label' => $this->l('Type'),
                'name' => 'LEOQUICKLOGIN_' . $value . '_TYPE',
                'options' => array(
                    'query' => $select_list_type,
                    'id' => 'id',
                    'name' => 'name',
                )
            );

            $fields_form[0]['form']['input'][] = array(
                'type' => 'select',
                'label' => $this->l('Layout'),
                'name' => 'LEOQUICKLOGIN_' . $value . '_LAYOUT',
                'options' => array(
                    'query' => $select_list_layout,
                    'id' => 'id',
                    'name' => 'name',
                )
            );
        }
        //DONGND:: image setting
        $fields_form[1]['form'] = array(
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Social Login'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENABLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Social Login In Login Page'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE',
                    'desc' => $this->l('Show Social Login At The Bottom Of Login Form'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show Social Login At The Top Of Quick Login Form'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show Social Login At The Bottom Of Quick Login Form'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show Text At Button Login With Social Account'),
                    'desc' => $this->l('If NO, Only Show Icon Of Social Networks'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show Icon Of Social Networks With Library Fontawesome'),
                    'desc' => $this->l('If Can Not See Icon Social Networks, Please Turn On This Option'),
                    'name' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'html',
                    'name' => 'facebook_html',
                    'html_content' => '<hr>',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Facebook Login'),
                    'name' => 'LEOQUICKLOGIN_FACEBOOK_ENABLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_FACEBOOK_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_FACEBOOK_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Facebook App ID'),
                    'name' => 'LEOQUICKLOGIN_FACEBOOK_APPID',
                    'lang' => false,
                ),
                array(
                    'type' => 'html',
                    'name' => 'google_html',
                    'html_content' => '<hr>',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Google Login'),
                    'name' => 'LEOQUICKLOGIN_GOOGLE_ENABLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_GOOGLE_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_GOOGLE_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Google App Client ID'),
                    'name' => 'LEOQUICKLOGIN_GOOGLE_CLIENTID',
                    'lang' => false,
                ),
                array(
                    'type' => 'html',
                    'name' => 'twitter_html',
                    'html_content' => '<hr>',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enable Twitter Login'),
                    'name' => 'LEOQUICKLOGIN_TWITTER_ENABLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'LEOQUICKLOGIN_TWITTER_ENABLE_on',
                            'value' => true,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'LEOQUICKLOGIN_TWITTER_ENABLE_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Twitter App Consumer Key (API Key)'),
                    'name' => 'LEOQUICKLOGIN_TWITTER_APIKEY',
                    'lang' => false,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Twitter App Consumer Secret (API Secret)'),
                    'name' => 'LEOQUICKLOGIN_TWITTER_APISECRET',
                    'lang' => false,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Callback URL'),
                    'name' => 'LEOQUICKLOGIN_TWITTER_CALLBACK',
                    'readonly' => 'readonly',
                    'lang' => false,
                    'desc' => $this->l('Copy and Paste to Twitter App - Callback URL. Remember check "Request email address from users"'),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save and stay'),
                'class' => 'btn btn-default')
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->name_controller = 'leoquicklogin';
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitLeoquickloginConfig';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getGroupFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        $globalform = $helper->generateForm($fields_form);

        //DONGND::
        $this->context->smarty->assign(array(
            'globalform' => $globalform,
            'url_admin' => $this->context->link->getAdminLink('AdminModules') . '&configure=' . $this->name,
            'default_tab' => Configuration::get('LEOQUICKLOGIN_DEFAULT_TAB'),
        ));
        return $this->context->smarty->fetch($this->local_path . 'views/templates/admin/panel.tpl');
    }

    /**
     * Set values for the inputs.
     */
    protected function getGroupFieldsValues()
    {
        $list_value = array();
        $list_value['LEOQUICKLOGIN_DEFAULT_TAB'] = Configuration::get('LEOQUICKLOGIN_DEFAULT_TAB');
        $list_value['LEOQUICKLOGIN_ENABLE'] = Configuration::get('LEOQUICKLOGIN_ENABLE');
        $list_value['LEOQUICKLOGIN_ENABLE_CAPTCHA'] = Configuration::get('LEOQUICKLOGIN_ENABLE_CAPTCHA');
        // $list_value['LEOQUICKLOGIN_ENABLE_PUSHEFFECT'] = Configuration::get('LEOQUICKLOGIN_ENABLE_PUSHEFFECT');
        $list_value['LEOQUICKLOGIN_ENABLE_TABNAVIGATION'] = Configuration::get('LEOQUICKLOGIN_ENABLE_TABNAVIGATION');

        $list_value['LEOQUICKLOGIN_ENABLE_REDIRECT'] = Configuration::get('LEOQUICKLOGIN_ENABLE_REDIRECT');
        $list_value['LEOQUICKLOGIN_ENABLE_HIDE'] = Configuration::get('LEOQUICKLOGIN_ENABLE_HIDE');
        $list_value['LEOQUICKLOGIN_ENABLE_NEWSLETTER'] = Configuration::get('LEOQUICKLOGIN_ENABLE_NEWSLETTER');
        $list_value['LEOQUICKLOGIN_ENABLE_GENDER'] = Configuration::get('LEOQUICKLOGIN_ENABLE_GENDER');
        $list_value['LEOQUICKLOGIN_ENABLE_CHECK_TERMS'] = Configuration::get('LEOQUICKLOGIN_ENABLE_CHECK_TERMS');
        $list_value['LEOQUICKLOGIN_ENABLE_URL_GDPR'] = Configuration::get('LEOQUICKLOGIN_ENABLE_URL_GDPR');
        $list_value['LEOQUICKLOGIN_ENABLE_CHECKCOOKIE'] = Configuration::get('LEOQUICKLOGIN_ENABLE_CHECKCOOKIE');
        $list_value['LEOQUICKLOGIN_LIFETIME_COOKIE'] = Configuration::get('LEOQUICKLOGIN_LIFETIME_COOKIE');

        foreach ($this->hook_support as $value) {
            $value = Tools::strtoupper($value);
            $list_value['LEOQUICKLOGIN_' . $value . '_ENABLE'] = Configuration::get('LEOQUICKLOGIN_' . $value . '_ENABLE');
            $list_value['LEOQUICKLOGIN_' . $value . '_TYPE'] = Configuration::get('LEOQUICKLOGIN_' . $value . '_TYPE');
            $list_value['LEOQUICKLOGIN_' . $value . '_LAYOUT'] = Configuration::get('LEOQUICKLOGIN_' . $value . '_LAYOUT');
        }

        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_ENABLE'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE');
        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE');
        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP');
        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM');
        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT');
        $list_value['LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO'] = Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO');

        $list_value['LEOQUICKLOGIN_FACEBOOK_ENABLE'] = Configuration::get('LEOQUICKLOGIN_FACEBOOK_ENABLE');
        $list_value['LEOQUICKLOGIN_FACEBOOK_APPID'] = Configuration::get('LEOQUICKLOGIN_FACEBOOK_APPID');

        $list_value['LEOQUICKLOGIN_GOOGLE_ENABLE'] = Configuration::get('LEOQUICKLOGIN_GOOGLE_ENABLE');
        $list_value['LEOQUICKLOGIN_GOOGLE_CLIENTID'] = Configuration::get('LEOQUICKLOGIN_GOOGLE_CLIENTID');

        $list_value['LEOQUICKLOGIN_TWITTER_ENABLE'] = Configuration::get('LEOQUICKLOGIN_TWITTER_ENABLE');
        $list_value['LEOQUICKLOGIN_TWITTER_APIKEY'] = Configuration::get('LEOQUICKLOGIN_TWITTER_APIKEY');
        $list_value['LEOQUICKLOGIN_TWITTER_APISECRET'] = Configuration::get('LEOQUICKLOGIN_TWITTER_APISECRET');
        $list_value['LEOQUICKLOGIN_TWITTER_CALLBACK'] = Tools::getHTTPHost(true) . __PS_BASE_URI__ . 'modules/leoquicklogin/twitter.php';
        

        return $list_value;
    }

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookActionAdminControllerSetMedia()
    {
        if (Tools::getValue('configure') == 'leoquicklogin') {
            //DONGND:: update new direction for media
            $media_dir = $this->getMediaDir();
            $this->context->controller->addJS(__PS_BASE_URI__.$media_dir.'js/back.js');
            $this->context->controller->addCSS(__PS_BASE_URI__.$media_dir.'css/back.css');
        }

        $this->autoRestoreSampleData();
    }

    public function hookActionCustomerLogoutAfter()
    {
        //DONGND:: remove cookie if exist
        if (isset($this->context->cookie->customer_last_activity)) {
            unset($this->context->cookie->customer_last_activity);
        }

        //DONGND:: remove cookie of twitter
        if (isset($this->context->cookie->twitter_token)) {
            unset($this->context->cookie->twitter_token);
        }

        if (isset($this->context->cookie->twitter_token_secret)) {
            unset($this->context->cookie->twitter_token_secret);
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {
            //DONGND:: update new direction for media
            $media_dir = $this->getMediaDir();
            $this->context->controller->addCSS(__PS_BASE_URI__.$media_dir.'css/front.css');
            if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE') && Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO')) {
                $this->context->controller->addCSS(__PS_BASE_URI__.$media_dir.'css/font-awesome.min.css');
            }
            $this->context->controller->addJS(__PS_BASE_URI__.$media_dir.'js/leoquicklogin.js');
            Media::addJsDef(array(
                // 'leo_push' => Configuration::get('LEOQUICKLOGIN_ENABLE_PUSHEFFECT'),
                'leo_push' => 0,
                'lql_redirect' => Configuration::get('LEOQUICKLOGIN_ENABLE_REDIRECT'),
                'lql_myaccount_url' => $this->context->link->getPageLink('my-account', true),
                'lql_ajax_url' => $this->context->link->getModuleLink('leoquicklogin', 'leocustomer'),
                'lql_module_dir' => $this->_path,
                'lql_is_gen_rtl' => $this->is_gen_rtl,
            ));

            //DONGND:: check cookie if enable or exist
            if (isset($this->context->cookie->customer_last_activity) && Configuration::get('LEOQUICKLOGIN_ENABLE_CHECKCOOKIE') && (int) Configuration::get('LEOQUICKLOGIN_LIFETIME_COOKIE') != 0) {
                $lifetime_cookie = (int) Configuration::get('LEOQUICKLOGIN_LIFETIME_COOKIE') * 60;

                if ($this->context->cookie->customer_last_activity + $lifetime_cookie < time()) {
                    $this->context->customer->mylogout();
                } else {
                    $this->context->cookie->customer_last_activity = time();
                }
            }
        }
    }

    //DONGND:: list hook
    public function hookDisplayTop()
    {
        return $this->_processHook('displayTop');
    }

    public function hookDisplayNav1()
    {
        return $this->_processHook('displayNav1');
    }

    public function hookDisplayNav2()
    {
        return $this->_processHook('displayNav2');
    }

    public function hookDisplayNavFullWidth()
    {
        return $this->_processHook('displayNavFullWidth');
    }

    public function hookDisplayLeftColumn()
    {
        return $this->_processHook('displayLeftColumn');
    }

    public function hookDisplayHome()
    {
        return $this->_processHook('displayHome');
    }

    public function hookDisplayRightColumn()
    {
        return $this->_processHook('displayRightColumn');
    }

    public function hookDisplayFooterBefore()
    {
        return $this->_processHook('displayFooterBefore');
    }

    public function hookDisplayFooter()
    {
        return $this->_processHook('displayFooter');
    }

    public function hookDisplayFooterAfter()
    {
        return $this->_processHook('displayFooterAfter');
    }

    public function hookDisplayLeftColumnProduct()
    {
        return $this->_processHook('displayLeftColumnProduct');
    }

    public function hookDisplayFooterProduct()
    {
        return $this->_processHook('displayFooterProduct');
    }

    public function hookDisplayRightColumnProduct()
    {
        return $this->_processHook('displayRightColumnProduct');
    }

    public function hookDisplayProductButtons()
    {
        return $this->_processHook('displayProductButtons');
    }

    public function hookDisplayReassurance()
    {
        return $this->_processHook('displayReassurance');
    }

    //DONGND:: process private hook
    public function hookDisplayLeoQuickLogin($params)
    {
        if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {
            $type = 'popup';
            $layout = 'login';
            if (isset($params['type']) && isset($this->list_type[Tools::strtolower($params['type'])])) {
                $type = Tools::strtolower($params['type']);
            }

            if (isset($params['layout']) && isset($this->list_layout[Tools::strtolower($params['layout'])])) {
                $layout = Tools::strtolower($params['layout']);
            }

            return $this->_processHook('leohook', $type, $layout);
        }
    }

    //DONGND:: add html of sliderbar and popup to end of body
    public function hookDisplayBeforeBodyClosingTag($params)
    {
        if (Configuration::get('LEOQUICKLOGIN_ENABLE') && !$this->context->customer->isLogged()) {
            $output = $this->buildModal();
            if (Configuration::get('LEOQUICKLOGIN_Build_SlideBar')) {
                $output .= $this->buildSlideBar();
            }
            if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE')) {
                $output .= $this->buildModalSocial();
            }
            return $output;
        }
    }

    //DONGND:: setup for social login
    public function hookDisplayAfterBodyOpeningTag($params)
    {

        if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE') && !$this->context->customer->isLogged()) {
            $lang_locale = $this->context->language->locale;
            if ($lang_locale != '') {
                if (strpos($lang_locale, 'ar-') !== false) {
                    $lang_locale = 'ar_AR';
                } else if (strpos($lang_locale, 'es-') !== false) {
                    $lang_locale = 'es_ES';
                } else {
                    $lang_locale = str_replace('-', '_', $lang_locale);
                }
            } else {
                $lang_locale = 'en_US';
            }

            $this->context->smarty->assign(array(
                'fb_enable' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_ENABLE'),
                'fb_app_id' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_APPID'),
                'google_enable' => Configuration::get('LEOQUICKLOGIN_GOOGLE_ENABLE'),
                'google_client_id' => Configuration::get('LEOQUICKLOGIN_GOOGLE_CLIENTID'),
                'lang_locale' => $lang_locale,
                'twitter_enable' => Configuration::get('LEOQUICKLOGIN_TWITTER_ENABLE'),
                'twitter_api_key' => Configuration::get('LEOQUICKLOGIN_TWITTER_APIKEY'),
                'twitter_api_secret' => Configuration::get('LEOQUICKLOGIN_TWITTER_APISECRET'),
            ));
            $output = $this->fetch('module:leoquicklogin/views/templates/front/social.tpl');

            return $output;
        }
    }

    //DONGND:: display social login in login page
    public function hookDisplayCustomerLoginFormAfter()
    {
        $output_social = '';
        if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE') && Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE')) {
            $this->context->smarty->assign(array(
                'fb_enable' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_ENABLE'),
                'fb_app_id' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_APPID'),
                'google_enable' => Configuration::get('LEOQUICKLOGIN_GOOGLE_ENABLE'),
                'google_client_id' => Configuration::get('LEOQUICKLOGIN_GOOGLE_CLIENTID'),
                'twitter_enable' => Configuration::get('LEOQUICKLOGIN_TWITTER_ENABLE'),
                'twitter_api_key' => Configuration::get('LEOQUICKLOGIN_TWITTER_APIKEY'),
                'twitter_api_secret' => Configuration::get('LEOQUICKLOGIN_TWITTER_APISECRET'),
                'show_button_text' => Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT'),
                'login_page' => 1,
                'leo_captcha' => Configuration::get('LEOQUICKLOGIN_ENABLE_CAPTCHA'),
                'captcha_social_url' => $this->context->link->getModuleLink('leoquicklogin', 'leocustomer', array('recaptcha' => 1, 'social' => 1, 'timestamp' => time())),
            ));

            $output_social = $this->fetch('module:leoquicklogin/views/templates/front/sociallogin_form.tpl');
            return $output_social;
        }
    }

    //DONGND:: render for FO
    public function _processHook($hookName, $type = '', $layout = '', $enable_sociallogin = '')
    {
        $hookName = Tools::strtoupper($hookName);
        if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {
            if (Configuration::get('LEOQUICKLOGIN_' . $hookName . '_ENABLE') || $hookName == 'LEOHOOK' || $hookName == 'APPAGEBUILDER') {
                $array_assign = array();

                if ($this->context->customer->isLogged()) {
                    if (Configuration::get('LEOQUICKLOGIN_ENABLE_HIDE')) {
                        return;
                    } else {
                        $link = $this->context->link;
                        $isLogged = true;
                        $array_assign['customerName'] = $this->context->customer->firstname . ' ' . $this->context->customer->lastname;
                        $array_assign['logout_url'] = $link->getPageLink('index', true, null, 'mylogout');
                        $array_assign['my_account_url'] = $link->getPageLink('my-account', true);
                    }
                } else {
                    $isLogged = false;
                }
                if ($hookName == 'LEOHOOK' || $hookName == 'APPAGEBUILDER') {
                    $leo_type = $type;
                    $leo_layout = $layout;
                    $array_assign['enable_sociallogin'] = $enable_sociallogin;
                } else {
                    $leo_type = Configuration::get('LEOQUICKLOGIN_' . $hookName . '_TYPE');
                    $leo_layout = Configuration::get('LEOQUICKLOGIN_' . $hookName . '_LAYOUT');
                }

                //DONGND:: reverse in rtl
                if ($this->context->language->is_rtl && !$this->is_gen_rtl) {
                    if ($leo_type == 'slidebar_left') {
                        $leo_type = 'slidebar_right';
                    } else if ($leo_type == 'slidebar_right') {
                        $leo_type = 'slidebar_left';
                    }
                }

                $array_assign['leo_type'] = $leo_type;
                $array_assign['leo_layout'] = $leo_layout;
                if ($leo_type == 'html' || $leo_type == 'dropdown' || $leo_type == 'dropup') {
                    $array_assign['html_form'] = $this->buildQuickLoginForm($leo_layout, $leo_type, $enable_sociallogin);
                }
                if ($leo_type != 'popup') {
                    Configuration::updateValue('LEOQUICKLOGIN_Build_SlideBar', 1);
                } else {
                    Configuration::updateValue('LEOQUICKLOGIN_Build_SlideBar', 0);
                }
                $array_assign['isLogged'] = $isLogged;
                $this->smarty->assign($array_assign);
                return $this->display(__FILE__, 'leoquicklogin.tpl');
            }
        }
    }

    //DONGND:: render modal cart popup
    public function buildQuickLoginForm($layout, $type = '', $enable_sociallogin = '')
    {
        $output_social = '';
        if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE')) {
            if ($enable_sociallogin == '' || ($enable_sociallogin != '' && $enable_sociallogin == 'enable')) {
                $this->context->smarty->assign(array(
                    'fb_enable' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_ENABLE'),
                    'fb_app_id' => Configuration::get('LEOQUICKLOGIN_FACEBOOK_APPID'),
                    'google_enable' => Configuration::get('LEOQUICKLOGIN_GOOGLE_ENABLE'),
                    'google_client_id' => Configuration::get('LEOQUICKLOGIN_GOOGLE_CLIENTID'),
                    'twitter_enable' => Configuration::get('LEOQUICKLOGIN_TWITTER_ENABLE'),
                    'twitter_api_key' => Configuration::get('LEOQUICKLOGIN_TWITTER_APIKEY'),
                    'twitter_api_secret' => Configuration::get('LEOQUICKLOGIN_TWITTER_APISECRET'),
                    'show_button_text' => Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT'),
                    'login_page' => 0,
                    'leo_captcha' => Configuration::get('LEOQUICKLOGIN_ENABLE_CAPTCHA'),
                    'captcha_social_url' => $this->context->link->getModuleLink('leoquicklogin', 'leocustomer', array('recaptcha' => 1, 'social' => 1, 'timestamp' => time())),
                ));

                $output_social = $this->fetch('module:leoquicklogin/views/templates/front/sociallogin_form.tpl');
            }
        }
        $output = '';
        $this->context->smarty->assign(array(
            'leo_form_layout' => $layout,
            'leo_form_type' => $type,
            'leo_check_cookie' => Configuration::get('LEOQUICKLOGIN_ENABLE_CHECKCOOKIE'),
            'leo_navigation_style' => Configuration::get('LEOQUICKLOGIN_ENABLE_TABNAVIGATION'),
            'leo_check_terms' => Configuration::get('LEOQUICKLOGIN_ENABLE_CHECK_TERMS'),
            'url_gdpr' => Configuration::get('LEOQUICKLOGIN_ENABLE_URL_GDPR') ? $this->context->link->getCMSLink(Configuration::get('LEOQUICKLOGIN_ENABLE_URL_GDPR')) : '',
            'leo_gender' => Configuration::get('LEOQUICKLOGIN_ENABLE_GENDER'),
            'genders' => DB::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'gender_lang WHERE id_lang='.$this->context->language->id),
            'leo_newsletter' => Configuration::get('LEOQUICKLOGIN_ENABLE_NEWSLETTER'),
            'leo_captcha' => Configuration::get('LEOQUICKLOGIN_ENABLE_CAPTCHA'),
            'captcha_url' => $this->context->link->getModuleLink('leoquicklogin', 'leocustomer', array('recaptcha' => 1, 'timestamp' => time())),
        ));
        if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE') && Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP')) {
            $output .= $output_social;
        }

        $output .= $this->fetch('module:leoquicklogin/views/templates/front/leoquicklogin_form.tpl');

        if (Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE') && Configuration::get('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM')) {
            $output .= $output_social;
        }
        return $output;
    }

    //DONGND:: build html modal for popup type
    public function buildModal()
    {
        $this->smarty->assign(array(
            'html_form' => $this->buildQuickLoginForm('both')
        ));
        $output = $this->fetch('module:leoquicklogin/views/templates/front/modal.tpl');

        return $output;
    }

    //DONGND:: build html modal for popup type
    public function buildModalSocial()
    {
        // $this->smarty->assign(array(
        // 'html_form' => $this->buildQuickLoginForm('both')
        // ));
        $output = $this->fetch('module:leoquicklogin/views/templates/front/modal_social.tpl');

        return $output;
    }

    //DONGND:: build html for slidebar type
    public function buildSlideBar()
    {
        $this->smarty->assign(array(
            'html_form' => $this->buildQuickLoginForm('both')
        ));
        $output = $this->fetch('module:leoquicklogin/views/templates/front/slide_bar.tpl');

        return $output;
    }

    //DONGND:: build html for slidebar type
    public function buildTwitterLoginCallBack($firstname, $lastname, $email)
    {
        $this->smarty->assign(array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
        ));
        $output = $this->fetch('module:leoquicklogin/views/templates/front/twitter_callback.tpl');

        return $output;
    }

    //DONGND:: buid for appagebuilder
    public function processHookCallBack($type, $layout, $enable_sociallogin)
    {
        return $this->_processHook('appagebuilder', $type, $layout, $enable_sociallogin);
    }

    /**
     * Common method
     * Resgister all hook for module
     */
    public function registerLeoHook()
    {
        $res = true;
        $res &= $this->registerHook('header');
        $res &= $this->registerHook('displayLeoQuickLogin');
        $res &= $this->registerHook('actionAdminControllerSetMedia');
        $res &= $this->registerHook('actionCustomerLogoutAfter');
        $res &= $this->registerHook('displayBeforeBodyClosingTag');
        $res &= $this->registerHook('displayAfterBodyOpeningTag');
        $res &= $this->registerHook('displayCustomerLoginFormAfter');
        foreach ($this->hook_support as $value) {
            $res &= $this->registerHook($value);
        }
        return $res;
    }

    /**
     * Common method
     * Unresgister all hook for module
     */
    public function unregisterLeoHook()
    {
        $res = true;
        $res &= $this->unregisterHook('header');
        $res &= $this->unregisterHook('displayLeoQuickLogin');
        $res &= $this->unregisterHook('actionAdminControllerSetMedia');
        $res &= $this->unregisterHook('actionCustomerLogoutAfter');
        $res &= $this->unregisterHook('displayBeforeBodyClosingTag');
        $res &= $this->unregisterHook('displayAfterBodyOpeningTag');
        $res &= $this->unregisterHook('displayCustomerLoginFormAfter');

        foreach ($this->hook_support as $value) {
            $res &= $this->unregisterHook($value);
        }

        return $res;
    }

    /**
     * Creates tables
     */
    protected function createTables()
    {
        if ($this->_installDataSample()) {
            return true;
        } else {
            $res = true;
            $res &= $this->createConfiguration();
            $res &= $this->registerLeoHook();
            return $res;
        }
        //$res = 1;
        //include_once(dirname(__FILE__) . '/install/install.php');
        //return $res;
    }

    public function deleteTables()
    {
    }

    //DONGND:: create configs
    public function createConfiguration()
    {
        foreach ($this->hook_support as $value) {
            $value= Tools::strtoupper($value);
            Configuration::updateValue('LEOQUICKLOGIN_' . $value . '_ENABLE', 0);
            Configuration::updateValue('LEOQUICKLOGIN_' . $value . '_TYPE', 'popup');
            Configuration::updateValue('LEOQUICKLOGIN_' . $value . '_LAYOUT', 'login');
        }
        
        Configuration::updateValue('LEOQUICKLOGIN_DISPLAYNAV2_ENABLE', 1);   // Demo datasample
        
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE', 1);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_CAPTCHA', 1);
        // Configuration::updateValue('LEOQUICKLOGIN_ENABLE_PUSHEFFECT', 0);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_TABNAVIGATION', 0);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_REDIRECT', 0);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_HIDE', 0);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_CHECK_TERMS', 1);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_URL_GDPR', 1);
        Configuration::updateValue('LEOQUICKLOGIN_ENABLE_CHECKCOOKIE', 1);
        Configuration::updateValue('LEOQUICKLOGIN_LIFETIME_COOKIE', 28800);
        //DONGND:: create config for default tab
        Configuration::updateValue('LEOQUICKLOGIN_DEFAULT_TAB', '#fieldset_0');
        //DONGND:: create config for social login
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE', 0);
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE', 1);
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP', 0);
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM', 1);
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT', 1);
        Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO', 0);

        //DONGND:: create config for facebook login
        Configuration::updateValue('LEOQUICKLOGIN_FACEBOOK_ENABLE', 0);
        Configuration::updateValue('LEOQUICKLOGIN_FACEBOOK_APPID', '');
        //DONGND:: create config for google login
        Configuration::updateValue('LEOQUICKLOGIN_GOOGLE_ENABLE', 0);
        Configuration::updateValue('LEOQUICKLOGIN_GOOGLE_CLIENTID', '');
        //DONGND:: create config for twitter login
        Configuration::updateValue('LEOQUICKLOGIN_TWITTER_ENABLE', 0);
        Configuration::updateValue('LEOQUICKLOGIN_TWITTER_APIKEY', '');
        Configuration::updateValue('LEOQUICKLOGIN_TWITTER_APISECRET', '');

        return true;
    }

    //DONGND:: delete configs
    public function deleteConfiguration()
    {
        foreach ($this->hook_support as $value) {
            $value= Tools::strtoupper($value);
            Configuration::deleteByName('LEOQUICKLOGIN_' . $value . '_ENABLE');
            Configuration::deleteByName('LEOQUICKLOGIN_' . $value . '_TYPE');
            Configuration::deleteByName('LEOQUICKLOGIN_' . $value . '_LAYOUT');
        }
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_CAPTCHA');
        // Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_PUSHEFFECT');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_TABNAVIGATION');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_REDIRECT');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_HIDE');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_CHECK_TERMS');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_URL_GDPR');
        Configuration::deleteByName('LEOQUICKLOGIN_ENABLE_CHECKCOOKIE');
        Configuration::deleteByName('LEOQUICKLOGIN_LIFETIME_COOKIE');
        //DONGND:: delete config for default tab
        Configuration::deleteByName('LEOQUICKLOGIN_DEFAULT_TAB');
        //DONGND:: delete config for social login
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP');
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM');
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT');
        Configuration::deleteByName('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO');

        //DONGND:: delete config for facebook login
        Configuration::deleteByName('LEOQUICKLOGIN_FACEBOOK_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_FACEBOOK_APPID');
        //DONGND:: delete config for google login
        Configuration::deleteByName('LEOQUICKLOGIN_GOOGLE_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_GOOGLE_CLIENTID');
        //DONGND:: delete config for twitter login
        Configuration::deleteByName('LEOQUICKLOGIN_TWITTER_ENABLE');
        Configuration::deleteByName('LEOQUICKLOGIN_TWITTER_APIKEY');
        Configuration::deleteByName('LEOQUICKLOGIN_TWITTER_APISECRET');

        return true;
    }

    private function _installDataSample()
    {
        if (file_exists(_PS_MODULE_DIR_.'leoelements/libs/LeoDataSample.php')) {
            require_once(_PS_MODULE_DIR_.'leoelements/libs/LeoDataSample.php');
        }elseif (file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')) {
            require_once(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php');
        }else{
            return false;
        }

        $sample = new Datasample(1);
        return $sample->processImport($this->name);
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache($template);
    }

    public function correctModule()
    {
        $this->registerLeoHook();
        //DONGND:: register hook for social login
        $this->registerHook('displayAfterBodyOpeningTag');
        $this->registerHook('displayCustomerLoginFormAfter');
        //DONGND:: create config for social login
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_ENABLE', 0);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_LOGINPAGE_ENABLE', 1);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWTOP', 0);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBOTTOM', 1);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_SHOWBUTTONTEXT', 1);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO')) {
            Configuration::updateValue('LEOQUICKLOGIN_SOCIALLOGIN_ENBABLE_FO', 0);
        }

        //DONGND:: create config for facebook login
        if (!Configuration::hasKey('LEOQUICKLOGIN_FACEBOOK_ENABLE')) {
            Configuration::updateValue('LEOQUICKLOGIN_FACEBOOK_ENABLE', 0);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_FACEBOOK_APPID')) {
            Configuration::updateValue('LEOQUICKLOGIN_FACEBOOK_APPID', '');
        }

        //DONGND:: create config for facebook login
        if (!Configuration::hasKey('LEOQUICKLOGIN_GOOGLE_ENABLE')) {
            Configuration::updateValue('LEOQUICKLOGIN_GOOGLE_ENABLE', 0);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_GOOGLE_CLIENTID')) {
            Configuration::updateValue('LEOQUICKLOGIN_GOOGLE_CLIENTID', '');
        }

        //DONGND:: create config for twitter login
        if (!Configuration::hasKey('LEOQUICKLOGIN_TWITTER_ENABLE')) {
            Configuration::updateValue('LEOQUICKLOGIN_TWITTER_ENABLE', 0);
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_TWITTER_APIKEY')) {
            Configuration::updateValue('LEOQUICKLOGIN_TWITTER_APIKEY', '');
        }
        if (!Configuration::hasKey('LEOQUICKLOGIN_TWITTER_APISECRET')) {
            Configuration::updateValue('LEOQUICKLOGIN_TWITTER_APISECRET', '');
        }

        //DONGND:: create config for tab navigation style
        if (!Configuration::hasKey('LEOQUICKLOGIN_ENABLE_TABNAVIGATION')) {
            Configuration::updateValue('LEOQUICKLOGIN_ENABLE_TABNAVIGATION', 0);
        }
        
        
        foreach ($this->hook_support as $value) {
            $name = 'LEOQUICKLOGIN_'.$value.'_ENABLE';
            $upper_name = Tools::strtoupper($name);
            Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'configuration` SET `name`=\'' . pSQL($upper_name) . '\' WHERE (`name`= \'' . pSQL($name) . '\' );');
            
            $name = 'LEOQUICKLOGIN_'.$value.'_LAYOUT';
            $upper_name = Tools::strtoupper($name);
            Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'configuration` SET `name`=\'' . pSQL($upper_name) . '\' WHERE (`name`= \'' . pSQL($name) . '\' );');
            
            $name = 'LEOQUICKLOGIN_'.$value.'_TYPE';
            $upper_name = Tools::strtoupper($name);
            Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'configuration` SET `name`=\'' . pSQL($upper_name) . '\' WHERE (`name`= \'' . pSQL($name) . '\' );');
        }
    }

    /**
     * Run only one when install/change Theme_of_Leo
     */
    public function hookActionAdminBefore($params)
    {
        if (isset($params) && isset($params['controller']) && isset($params['controller']->theme_manager)) {
            // Validate : call hook from theme_manager
        } else {
            // Other module call this hook -> duplicate data
            return;
        }

        $this->unregisterHook('actionAdminBefore');

        # FIX : update Prestashop by 1-Click module -> NOT NEED RESTORE DATABASE
        $ap_version = Configuration::get('AP_CURRENT_VERSION');
        if ($ap_version != false) {
            $ps_version = Configuration::get('PS_VERSION_DB');
            $versionCompare = version_compare($ap_version, $ps_version);
            if ($versionCompare != 0) {
                // Just update Prestashop
                Configuration::updateValue('AP_CURRENT_VERSION', $ps_version);
                return;
            }
        }

        # WHENE INSTALL THEME, INSERT HOOK FROM DATASAMPLE IN THEME
        $primary_module = 'appagebuilder';
        if (file_exists(_PS_MODULE_DIR_.'leoelements/libs/LeoDataSample.php')) {
            $primary_module = 'leoelements';
        }
        $hook_from_theme = false;
        if (file_exists(_PS_MODULE_DIR_ .$primary_module.'/libs/LeoDataSample.php')) {
            require_once(_PS_MODULE_DIR_ .$primary_module.'/libs/LeoDataSample.php');
            $sample = new Datasample();
            if ($sample->processHook($this->name)) {
                $hook_from_theme = true;
            }
        }

        # INSERT HOOK FROM MODULE_DATASAMPLE
        if ($hook_from_theme == false) {
            $this->registerLeoHook();
        }

        # WHEN INSTALL MODULE, NOT NEED RESTORE DATABASE IN THEME
        $install_module = (int) Configuration::get('AP_INSTALLED_LEOQUICKLOGIN', 0);
        if ($install_module) {
            Configuration::updateValue('AP_INSTALLED_LEOQUICKLOGIN', '0');    // next : allow restore sample
            return;
        }

        # INSERT DATABASE FROM THEME_DATASAMPLE
        if (file_exists(_PS_MODULE_DIR_ .$primary_module.'/libs/LeoDataSample.php')) {
            require_once(_PS_MODULE_DIR_ .$primary_module.'/libs/LeoDataSample.php');
            $sample = new Datasample();
            $sample->processImport($this->name);
        }
    }

    // public function isCached($template, $cache_id = null, $compile_id = null)
    // {
        // if (version_compare(_PS_VERSION_, '1.7.4.0', '>=') || version_compare(Configuration::get('PS_VERSION_DB'), '1.7.4.0', '>=')) {
            // return false;
        // }
        // return parent::isCached($template, $cache_id, $compile_id);
    // }

    /**
     * FIX BUG 1.7.3.3 : install theme lose hook displayHome, displayLeoProfileProduct
     * because ajax not run hookActionAdminBefore();
     */
    public function autoRestoreSampleData()
    {
        if (Hook::isModuleRegisteredOnHook($this, 'actionAdminBefore', (int)Context::getContext()->shop->id)) {
            $theme_manager = new stdclass();
            $theme_manager->theme_manager = 'theme_manager';
            $this->hookActionAdminBefore(array(
                'controller' => $theme_manager,
            ));
        }
    }

    //DONGND:: update direction css, js, img for 1.7.4.0
    public function getMediaDir()
    {
        $media_dir = '';
        if (version_compare(_PS_VERSION_, '1.7.4.0', '>=') || version_compare(Configuration::get('PS_VERSION_DB'), '1.7.4.0', '>=')) {
            $media_dir = 'modules/'.$this->name.'/views/';
        } else {
            $media_dir = 'modules/'.$this->name.'/';
        }
        return $media_dir;
    }
    
    /**
     * PERMISSION ACCOUNT demo@demo.com
     */
    public function getPermission($variable, $employee = null)
    {
        if ($variable == 'configure') {
            // Allow see form if permission is : configure, view
            $configure = Module::getPermissionStatic($this->id, 'configure', $employee);
            $view = Module::getPermissionStatic($this->id, 'view', $employee);
            return ($configure || $view);
        }
        
        return Module::getPermissionStatic($this->id, $variable, $employee);
    }
    
    /**
     * PERMISSION ACCOUNT demo@demo.com
     */
    public function access($action)
    {
        $employee = null;
        return Module::getPermissionStatic($this->id, $action, $employee);
    }

    public function getcmsoptions($lang = null)
    {
        if (!$lang) {
            $lang = $this->context->language->id;
        }
        $id_shop = Context::getContext()->shop->id;
        $pages = CMS::getCMSPages($lang, null, null, $id_shop);
        $cms_options = array();
        $cms_options[] = array("name"=> $this->l("Select CMS"), "id"=>'' );
        foreach ($pages as $cms) {
            $option = array();
            $option['name'] = $cms['meta_title'];
            $option['id'] = $cms['id_cms'];
            $cms_options[] = $option;
        }
        
        
        return $cms_options;
    }
    
    public function renderWidget($hookName, array $params)
    {
        $content = $this->hookDisplayTop($params);
        return $content;
    }

    public function getWidgetVariables($hookName, array $params)
    {
         return 'getWidgetVariables';
    }
}
