<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__b1d85398b11b8e4f08815c0e8a0caf5b */
class __TwigTemplate_408fe92d2b3cdb46324b874b75b7a69a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__b1d85398b11b8e4f08815c0e8a0caf5b"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__b1d85398b11b8e4f08815c0e8a0caf5b"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Orders • TCG - Collectors</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '244f02f4f3d5b33f692cb85859bc227c';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = '4f2443fb1cea23c3abc845c54a5ad1f6';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY';
    var admin_notification_get_link = '/admin082vvnopp3nd5wlh82x/index.php/common/notifications?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY';
    var admin_notification_push_link = adminNotificationPushLink = '/admin082vvnopp3nd5wlh82x/index.php/common/notifications/ack?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var searc";
        // line 43
        echo "h_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.b13cfc23.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminOrderView.css?version=4.4.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script t";
        // line 71
        echo "ype=\"text/javascript\">
var appagebuilder_listshortcode_url = \"https:\\/\\/tcg-collectors.com\\/admin082vvnopp3nd5wlh82x\\/index.php?controller=AdminApPageBuilderShortcode&token=80acb602a18871e8a428267efd37e445&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/admin082vvnopp3nd5wlh82x\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin082vvnopp3nd5wlh82x\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leofeature_module_dir = \"\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psgdprNoAddresses = \"Customer data deleted by the official GDPR module.\";
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.cho";
        // line 90
        echo "sen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/appagebuilder/views/js/admin/function.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_checkout/views/js/adminOrderView.js?version=4.4.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/tcg-collectors.com\\/admin082vvnopp3nd5wlh82x\\/index.php?controller=AdminGamific";
        // line 112
        echo "ation&token=b97ae695fd1f87fcb1502ab412c190d9\";
            var current_id_tab = 4;
        </script>    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin082vvnopp3nd5wlh82x/index.php/common/notifications?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 133
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminorders developer-mode\"
  data-base-url=\"/admin082vvnopp3nd5wlh82x/index.php\"  data-token=\"tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fec594485995902afe78335a4ffb0833\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories/new?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products-v2/create?token=ec6aff9aed91906a74f097f7944989cf\"
  ";
        // line 168
        echo "               data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ed02de84153cf40960ea2e38bc2e7ae4\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/orders?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"1\"
        data-rand=\"22\"
        data-icon=\"icon-AdminParentOrders\"
        data-url=\"index.php/sell/orders\"
        data-post-link=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin082vvnopp3nd5wlh82x/index.php?controller=AdminSearch&amp;token=3b3d4f7806feb2ed3b24ce4f2fdc0626\"
      role=\"search\">
  <input type=";
        // line 209
        echo "\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cart";
        // line 224
        echo "s</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fec594485995902afe78335a4ffb0833\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories/new?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products-v2/create?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ed02de84153cf40960ea2e38bc2e7ae";
        // line 261
        echo "4\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/orders?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"1\"
      data-rand=\"42\"
      data-icon=\"icon-AdminParentOrders\"
      data-url=\"index.php/sell/orders\"
      data-post-link=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Orders - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/performance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
          >
            <i class=\"material-icons\">bug_rep";
        // line 303
        echo "ort</i>
            <span>Debug mode</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/maintenance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://tcg-collectors.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdow";
        // line 347
        echo "n-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9a1316e13b84774fbedd9489eee0f028\">abandoned carts</a></strong>?<br>Your next order could be hiding there";
        // line 397
        echo "!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right";
        // line 449
        echo "\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://tcg-collectors.com/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Welcome back Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/1/edit?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=tcg-collectors.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=DlDCwcMJKEmu1vmV8IFWyf5knOmBXkz9Z_9E-RfYDP0&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-ic";
        // line 474
        echo "ons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLogin&amp;logout=1&amp;token=7e68a049a9d67c3830bedbbdcdba2c24\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/toggle-navigation?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"133\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminPsEditio";
        // line 517
        echo "nBasicHomepageController\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminDashboard&amp;token=a15de2db2ed1cc2832efcb748a3b58cf\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
      ";
        // line 556
        echo "                                                    
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/invoices/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
       ";
        // line 585
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/credit-slips/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/delivery-slips/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarts&amp;token=9a1316e13b84774fbedd9489eee0f028\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products?_token=tTmgXEcoc2lv1wOud";
        // line 615
        echo "WTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/monitoring/?_tok";
        // line 645
        echo "en=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminAttributesGroups&amp;token=b8e2eafcd1ea2c7006ba510c8cf71356\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/brands/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/attachments/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                          ";
        // line 676
        echo "    <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;token=ed02de84153cf40960ea2e38bc2e7ae4\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/stocks/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customers/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                 ";
        // line 706
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customers/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/addresses/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCustomerThreads&amp;token=8458e2504e8e940314f4113ae5b619be\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                         ";
        // line 736
        echo "   </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCustomerThreads&amp;token=8458e2504e8e940314f4113ae5b619be\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customer-service/order-messages/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminReturn&amp;token=bec6199865434453d1275013f20731ad\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
       ";
        // line 767
        echo "                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics/legacy/stats?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics/legacy/stats?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                         ";
        // line 796
        echo "                     </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                   ";
        // line 831
        echo "               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=9e07bc4b22d9930b8e8c0e78e09fc088\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=0a1f97e8cf98e520980fdcc4daf2ab45\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminLeoQuickLoginModule\">
        ";
        // line 859
        echo "                        <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoQuickLoginModule&amp;token=3428300ca813653042a16e85e8690df5\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoProductSearchModule&amp;token=a0f74e608c12ec8034517c236f9affee\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=ee6e537e61e799fb96b2b55e9c1cc390\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submen";
        // line 887
        echo "u panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=ee6e537e61e799fb96b2b55e9c1cc390\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/themes/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/improve/design/themes?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/";
        // line 916
        echo "index.php/improve/design/mail_theme/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/design/cms-pages/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/design/modules/positions/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminImages&amp;token=bc84996290347d9115c2d1f27886cddd\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
               ";
        // line 947
        echo "   
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarriers&amp;token=2c686484d1e2246089e72ce332195c3d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarriers&amp;token=2c686484d1e2246089e72ce332195c3d\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/shipping/preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Preferences
                                </a>
                              </li>

                   ";
        // line 977
        echo "                                                           </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/payment_methods?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/payment_methods?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/preferences?_token=tTmgXEcoc2lv1wO";
        // line 1006
        echo "udWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/localization/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/localization/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm";
        // line 1038
        echo "enu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/zones/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/taxes/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/translations/settings?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"163\" id=\"subtab-Marketing\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsfacebookModule&amp;token=be4deee74feba0be95f502d070ec7b57\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campai";
        // line 1067
        echo "gn</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-163\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsfacebookModule&amp;token=be4deee74feba0be95f502d070ec7b57\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=bb525395b490c26b1e255cc71b5b2e20\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"174\" id=\"subtab-AdminApPageBuilder\">
     ";
        // line 1099
        echo "               <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProfiles&amp;token=dc4161f828d7f1334c43a171b906a7ab\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Ap PageBuilder
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-174\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminApPageBuilderProfiles\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProfiles&amp;token=dc4161f828d7f1334c43a171b906a7ab\" class=\"link\"> Ap Profiles Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminApPageBuilderPositions\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderPositions&amp;token=ad97ab4428311c38248d983d214b54e2\" class=\"link\"> Ap Positions Manage
                                </a>
                              </li>

                                                                                  
                              
          ";
        // line 1127
        echo "                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminApPageBuilderShortcode\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderShortcode&amp;token=80acb602a18871e8a428267efd37e445\" class=\"link\"> Ap ShortCode Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminApPageBuilderProducts\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProducts&amp;token=a8a871cb052121d1f2fedd820553af71\" class=\"link\"> Ap Products List Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminApPageBuilderDetails\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderDetails&amp;token=eff04e8a01d70a1ff4125eaabf229580\" class=\"link\"> Ap Products Details Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                                <a href=\"https://tcg-collectors.com/a";
        // line 1153
        echo "dmin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=380673b112636a1c99fc86f9dce08995\" class=\"link\"> Ap Live Theme Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminApPageBuilderModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderModule&amp;token=9f4220cdbdaa518b9f5952f371195215\" class=\"link\"> Ap Module Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=eba3b3c43a19b3674706cb945d513034\" class=\"link\"> Ap Theme Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminApPageBuilderHook\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderHook&amp;token=2c3827a189d1b603b22898c62cbf6c05\" class=\"link\"> Ap Hook Control Panel
                                </a>
                              </li>

      ";
        // line 1181
        echo "                                                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"192\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureModule&amp;token=93893e1883174d86b768cec7027edca5\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-192\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureModule&amp;token=93893e1883174d86b768cec7027edca5\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminLeofeatureReviews\">
                                <a hre";
        // line 1210
        echo "f=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureReviews&amp;token=52a3fe6a8062d32edd92b981935a2e60\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/settings?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/preferences/preferences?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
      ";
        // line 1247
        echo "                <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/preferences/preferences?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/order-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configu";
        // line 1276
        echo "re/shop/product-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/customer-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/contacts/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/seo-urls/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ";
        // line 1307
        echo "                        <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminSearchConf&amp;token=c68091f8b8b896724d111cd5696c77ad\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/system-information/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/system-information/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Information
                                </a>
";
        // line 1335
        echo "                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/performance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/administration/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/emails/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.";
        // line 1365
        echo "php/configure/advanced/import/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/sql-requests/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/logs/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 1396
        echo "veltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/webservice-keys/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/feature-flags/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/security/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://tcg-collector";
        // line 1424
        echo "s.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminKlaviyoPsConfig&amp;token=059755d8db8e777db6f8fdb4d36aae9b\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Orders    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/new?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"                  title=\"Add new order\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new order
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin082vvnopp3nd5wlh82x/index.php/co";
        // line 1477
        echo "mmon/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.2.1%2526country%253Den/Help?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/new?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"              title=\"Add new order\"            >
              Add new order
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin082vvnopp3nd5wlh82x/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.2.1%2526country%253Den/Help?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1529
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1563
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 133
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1529
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1563
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__b1d85398b11b8e4f08815c0e8a0caf5b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1836 => 1563,  1767 => 1529,  1732 => 133,  1717 => 1563,  1677 => 1529,  1623 => 1477,  1568 => 1424,  1538 => 1396,  1505 => 1365,  1473 => 1335,  1443 => 1307,  1410 => 1276,  1379 => 1247,  1340 => 1210,  1309 => 1181,  1279 => 1153,  1251 => 1127,  1221 => 1099,  1187 => 1067,  1156 => 1038,  1122 => 1006,  1091 => 977,  1059 => 947,  1026 => 916,  995 => 887,  965 => 859,  935 => 831,  898 => 796,  867 => 767,  834 => 736,  802 => 706,  770 => 676,  737 => 645,  705 => 615,  673 => 585,  642 => 556,  601 => 517,  556 => 474,  529 => 449,  475 => 397,  423 => 347,  377 => 303,  333 => 261,  294 => 224,  277 => 209,  234 => 168,  194 => 133,  171 => 112,  147 => 90,  126 => 71,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Orders • TCG - Collectors</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminOrders\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'PT\\';
    var _PS_VERSION_ = \\'8.2.1\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'244f02f4f3d5b33f692cb85859bc227c\\';
    var currentIndex = \\'index.php?controller=AdminOrders\\';
    var employee_token = \\'4f2443fb1cea23c3abc845c54a5ad1f6\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\\';
    var admin_notification_get_link = \\'/admin082vvnopp3nd5wlh82x/index.php/common/notifications?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin082vvnopp3nd5wlh82x/index.php/common/notifications/ack?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var searc' | raw }}{{ 'h_product_msg = \\'Search for a product\\';
  </script>



<link
      rel=\"preload\"
      href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin082vvnopp3nd5wlh82x/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.b13cfc23.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminOrderView.css?version=4.4.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script t' | raw }}{{ 'ype=\"text/javascript\">
var appagebuilder_listshortcode_url = \"https:\\\\/\\\\/tcg-collectors.com\\\\/admin082vvnopp3nd5wlh82x\\\\/index.php?controller=AdminApPageBuilderShortcode&token=80acb602a18871e8a428267efd37e445&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\\\/modules\\\\/appagebuilder\\\\/\";
var baseAdminDir = \"\\\\/admin082vvnopp3nd5wlh82x\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin082vvnopp3nd5wlh82x\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leofeature_module_dir = \"\\\\/modules\\\\/leofeature\\\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psgdprNoAddresses = \"Customer data deleted by the official GDPR module.\";
var psxDesignUpdateNotification = \"\\\\n<div class=\\\\\"psxdesign-notification\\\\\">\\\\n  1\\\\n<\\\\/div>\\\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.cho' | raw }}{{ 'sen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin082vvnopp3nd5wlh82x/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/appagebuilder/views/js/admin/function.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_checkout/views/js/adminOrderView.js?version=4.4.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
            var admin_gamification_ajax_url = \"https:\\\\/\\\\/tcg-collectors.com\\\\/admin082vvnopp3nd5wlh82x\\\\/index.php?controller=AdminGamific' | raw }}{{ 'ation&token=b97ae695fd1f87fcb1502ab412c190d9\";
            var current_id_tab = 4;
        </script>    <script>
        window.userLocale  = \\'en\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin082vvnopp3nd5wlh82x/index.php/common/notifications?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminorders developer-mode\"
  data-base-url=\"/admin082vvnopp3nd5wlh82x/index.php\"  data-token=\"tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fec594485995902afe78335a4ffb0833\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories/new?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products-v2/create?token=ec6aff9aed91906a74f097f7944989cf\"
  ' | raw }}{{ '               data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ed02de84153cf40960ea2e38bc2e7ae4\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/orders?token=ec6aff9aed91906a74f097f7944989cf\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"1\"
        data-rand=\"22\"
        data-icon=\"icon-AdminParentOrders\"
        data-url=\"index.php/sell/orders\"
        data-post-link=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin082vvnopp3nd5wlh82x/index.php?controller=AdminSearch&amp;token=3b3d4f7806feb2ed3b24ce4f2fdc0626\"
      role=\"search\">
  <input type=' | raw }}{{ '\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cart' | raw }}{{ 's</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fec594485995902afe78335a4ffb0833\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories/new?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products-v2/create?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ed02de84153cf40960ea2e38bc2e7ae' | raw }}{{ '4\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php/sell/orders?token=ec6aff9aed91906a74f097f7944989cf\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"1\"
      data-rand=\"42\"
      data-icon=\"icon-AdminParentOrders\"
      data-url=\"index.php/sell/orders\"
      data-post-link=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Orders - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminQuickAccesses&token=cfef00415e2b2624ed678506ffb80168\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/performance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
          >
            <i class=\"material-icons\">bug_rep' | raw }}{{ 'ort</i>
            <span>Debug mode</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/maintenance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://tcg-collectors.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdow' | raw }}{{ 'n-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9a1316e13b84774fbedd9489eee0f028\">abandoned carts</a></strong>?<br>Your next order could be hiding there' | raw }}{{ '!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right' | raw }}{{ '\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://tcg-collectors.com/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Welcome back Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/1/edit?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=tcg-collectors.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=DlDCwcMJKEmu1vmV8IFWyf5knOmBXkz9Z_9E-RfYDP0&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-ic' | raw }}{{ 'ons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLogin&amp;logout=1&amp;token=7e68a049a9d67c3830bedbbdcdba2c24\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/toggle-navigation?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"133\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminPsEditio' | raw }}{{ 'nBasicHomepageController\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminDashboard&amp;token=a15de2db2ed1cc2832efcb748a3b58cf\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
      ' | raw }}{{ '                                                    
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/invoices/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
       ' | raw }}{{ '                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/credit-slips/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/delivery-slips/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarts&amp;token=9a1316e13b84774fbedd9489eee0f028\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products?_token=tTmgXEcoc2lv1wOud' | raw }}{{ 'WTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/products?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/categories?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/monitoring/?_tok' | raw }}{{ 'en=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminAttributesGroups&amp;token=b8e2eafcd1ea2c7006ba510c8cf71356\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/catalog/brands/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/attachments/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                          ' | raw }}{{ '    <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCartRules&amp;token=ed02de84153cf40960ea2e38bc2e7ae4\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/stocks/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customers/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                 ' | raw }}{{ '                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customers/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/addresses/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCustomerThreads&amp;token=8458e2504e8e940314f4113ae5b619be\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                         ' | raw }}{{ '   </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCustomerThreads&amp;token=8458e2504e8e940314f4113ae5b619be\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/customer-service/order-messages/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminReturn&amp;token=bec6199865434453d1275013f20731ad\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
       ' | raw }}{{ '                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics/legacy/stats?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics/legacy/stats?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/metrics?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                         ' | raw }}{{ '                     </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/modules/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                   ' | raw }}{{ '               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/modules/manage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=9e07bc4b22d9930b8e8c0e78e09fc088\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=0a1f97e8cf98e520980fdcc4daf2ab45\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminLeoQuickLoginModule\">
        ' | raw }}{{ '                        <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoQuickLoginModule&amp;token=3428300ca813653042a16e85e8690df5\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeoProductSearchModule&amp;token=a0f74e608c12ec8034517c236f9affee\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=ee6e537e61e799fb96b2b55e9c1cc390\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submen' | raw }}{{ 'u panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=ee6e537e61e799fb96b2b55e9c1cc390\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/mbo/themes/catalog/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/improve/design/themes?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/' | raw }}{{ 'index.php/improve/design/mail_theme/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/design/cms-pages/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/design/modules/positions/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminImages&amp;token=bc84996290347d9115c2d1f27886cddd\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
               ' | raw }}{{ '   
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarriers&amp;token=2c686484d1e2246089e72ce332195c3d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminCarriers&amp;token=2c686484d1e2246089e72ce332195c3d\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/shipping/preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Preferences
                                </a>
                              </li>

                   ' | raw }}{{ '                                                           </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/payment_methods?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/payment_methods?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/payment/preferences?_token=tTmgXEcoc2lv1wO' | raw }}{{ 'udWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/localization/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/localization/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm' | raw }}{{ 'enu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/zones/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/taxes/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/improve/international/translations/settings?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"163\" id=\"subtab-Marketing\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsfacebookModule&amp;token=be4deee74feba0be95f502d070ec7b57\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campai' | raw }}{{ 'gn</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-163\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsfacebookModule&amp;token=be4deee74feba0be95f502d070ec7b57\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=bb525395b490c26b1e255cc71b5b2e20\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"174\" id=\"subtab-AdminApPageBuilder\">
     ' | raw }}{{ '               <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProfiles&amp;token=dc4161f828d7f1334c43a171b906a7ab\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Ap PageBuilder
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-174\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-AdminApPageBuilderProfiles\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProfiles&amp;token=dc4161f828d7f1334c43a171b906a7ab\" class=\"link\"> Ap Profiles Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminApPageBuilderPositions\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderPositions&amp;token=ad97ab4428311c38248d983d214b54e2\" class=\"link\"> Ap Positions Manage
                                </a>
                              </li>

                                                                                  
                              
          ' | raw }}{{ '                                                  
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminApPageBuilderShortcode\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderShortcode&amp;token=80acb602a18871e8a428267efd37e445\" class=\"link\"> Ap ShortCode Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminApPageBuilderProducts\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderProducts&amp;token=a8a871cb052121d1f2fedd820553af71\" class=\"link\"> Ap Products List Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminApPageBuilderDetails\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderDetails&amp;token=eff04e8a01d70a1ff4125eaabf229580\" class=\"link\"> Ap Products Details Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                                <a href=\"https://tcg-collectors.com/a' | raw }}{{ 'dmin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=380673b112636a1c99fc86f9dce08995\" class=\"link\"> Ap Live Theme Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminApPageBuilderModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderModule&amp;token=9f4220cdbdaa518b9f5952f371195215\" class=\"link\"> Ap Module Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=eba3b3c43a19b3674706cb945d513034\" class=\"link\"> Ap Theme Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminApPageBuilderHook\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminApPageBuilderHook&amp;token=2c3827a189d1b603b22898c62cbf6c05\" class=\"link\"> Ap Hook Control Panel
                                </a>
                              </li>

      ' | raw }}{{ '                                                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"192\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureModule&amp;token=93893e1883174d86b768cec7027edca5\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-192\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureModule&amp;token=93893e1883174d86b768cec7027edca5\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminLeofeatureReviews\">
                                <a hre' | raw }}{{ 'f=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminLeofeatureReviews&amp;token=52a3fe6a8062d32edd92b981935a2e60\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/settings?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/preferences/preferences?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
      ' | raw }}{{ '                <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/preferences/preferences?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/order-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configu' | raw }}{{ 're/shop/product-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/customer-preferences/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/contacts/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/shop/seo-urls/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ' | raw }}{{ '                        <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://tcg-collectors.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminSearchConf&amp;token=c68091f8b8b896724d111cd5696c77ad\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/system-information/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/system-information/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Information
                                </a>
' | raw }}{{ '                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/performance/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/administration/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/emails/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.' | raw }}{{ 'php/configure/advanced/import/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/employees/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/sql-requests/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/logs/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le' | raw }}{{ 'veltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/webservice-keys/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/feature-flags/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin082vvnopp3nd5wlh82x/index.php/configure/advanced/security/?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://tcg-collector' | raw }}{{ 's.com/admin082vvnopp3nd5wlh82x/index.php?controller=AdminKlaviyoPsConfig&amp;token=059755d8db8e777db6f8fdb4d36aae9b\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Orders    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/new?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"                  title=\"Add new order\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new order
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin082vvnopp3nd5wlh82x/index.php/co' | raw }}{{ 'mmon/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.2.1%2526country%253Den/Help?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin082vvnopp3nd5wlh82x/index.php/sell/orders/new?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"              title=\"Add new order\"            >
              Add new order
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin082vvnopp3nd5wlh82x/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.2.1%2526country%253Den/Help?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/admin082vvnopp3nd5wlh82x/index.php/modules/pseditionbasic/homepage?_token=tTmgXEcoc2lv1wOudWTjNhgEKOCVYu8wigKPNVkn_VY\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__b1d85398b11b8e4f08815c0e8a0caf5b", "");
    }
}
