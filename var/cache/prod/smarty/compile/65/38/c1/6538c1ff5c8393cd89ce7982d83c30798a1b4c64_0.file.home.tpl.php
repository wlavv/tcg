<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:33:52
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcode/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685539103fec94_30205806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6538c1ff5c8393cd89ce7982d83c30798a1b4c64' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcode/home.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./position.tpl' => 1,
  ),
),false)) {
function content_685539103fec94_30205806 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\home -->
<?php if ((isset($_smarty_tpl->tpl_vars['errorText']->value)) && $_smarty_tpl->tpl_vars['errorText']->value) {?>
<div class="error alert alert-danger">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorText']->value,'html','UTF-8' ));?>

</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['errorSubmit']->value)) && $_smarty_tpl->tpl_vars['errorSubmit']->value) {?>
<div class="error alert alert-danger">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorSubmit']->value,'html','UTF-8' ));?>

</div>
<?php }?>

<div id="home_wrapper" class="default">
    <div class="position-cover row">
    <?php $_smarty_tpl->_subTemplateRender('file:./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>

<div id="ap_loading" class="ap-loading">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplPath']->value)."/ap_page_builder_shortcode/home_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 type="text/javascript">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('imgModuleLink'=>$_smarty_tpl->tpl_vars['imgModuleLink']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apAjaxShortCodeUrl'=>$_smarty_tpl->tpl_vars['ajaxShortCodeUrl']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apAjaxHomeUrl'=>$_smarty_tpl->tpl_vars['ajaxHomeUrl']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apImgController'=>$_smarty_tpl->tpl_vars['imgController']->value),$_smarty_tpl ) );?>

		
    $(document).ready(function(){
        var $apHomeBuilder = $(document).apPageBuilder();
        $apHomeBuilder.process('<?php echo $_smarty_tpl->tpl_vars['dataForm']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['shortcodeInfos']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['languages']->value;?>
');
        $apHomeBuilder.ajaxShortCodeUrl = apAjaxShortCodeUrl;
        $apHomeBuilder.ajaxHomeUrl = apAjaxHomeUrl;
        $apHomeBuilder.lang_id = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang_id']->value,'html','UTF-8' ));?>
';
        $apHomeBuilder.imgController = apImgController;        
    });
<?php echo '</script'; ?>
><?php }
}
