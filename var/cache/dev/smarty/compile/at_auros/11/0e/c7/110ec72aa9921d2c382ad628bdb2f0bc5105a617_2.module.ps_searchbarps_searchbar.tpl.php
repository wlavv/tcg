<?php
/* Smarty version 4.3.4, created on 2025-08-31 22:10:13
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68b4ba350144b1_56746570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1749910615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b4ba350144b1_56746570 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/playfunc/tcg/themes/at_auros/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="search-widget js-dropdown popup-over" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
"> 
	<a href="javascript:void(0)" data-toggle="dropdown" class="popup-title">
    	<i class="ti-search icons"></i>
	</a>
	<form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="popup-content dropdown-menu" id="search_form">
		<div class="search-inner">
			<input type="hidden" name="controller" value="search">
			<input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your keywords...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
			<button type="submit">
				<i class="ti-search icons"></i>
				<span>Search</span>
			</button>
		</div>
	</form>
</div>
<!-- /Block search module TOP -->
<!-- end /home/playfunc/tcg/themes/at_auros/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
