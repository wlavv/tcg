<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:33:52
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcode/position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68553910406480_24293473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8b7f377cb66c0130acc9c2d4919febf3883cd1' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcode/position.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68553910406480_24293473 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\position -->
<div class="position-area">
	<div class="hook-wrapper apshortcode <?php if ((isset($_smarty_tpl->tpl_vars['data_shortcode_content']->value['apshortcode']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data_shortcode_content']->value['apshortcode']['class'],'html','UTF-8' ));
}?>" data-hook="apshortcode">
		<div class="hook-top">
			<div class="pull-left hook-desc"></div>
			<div class="hook-info text-center">
				<a href="javascript:;" tabindex="0" class="open-group label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Hook','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" id="apshortcode" name="apshortcode">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shortcode Content','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <i class="icon-circle-arrow-down"></i>
				</a>
			</div>
		</div>
		<div class="hook-content">
			<?php if ((isset($_smarty_tpl->tpl_vars['data_shortcode_content']->value['apshortcode']['content']))) {?>
			<?php echo $_smarty_tpl->tpl_vars['data_shortcode_content']->value['apshortcode']['content'];?>
			<?php }?>
			<div class="hook-content-footer text-center">
				<a href="javascript:void(0)" tabindex="0" class="btn-new-widget-group" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Widget in new Group','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus">
					<i class="icon-plus"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<?php }
}
