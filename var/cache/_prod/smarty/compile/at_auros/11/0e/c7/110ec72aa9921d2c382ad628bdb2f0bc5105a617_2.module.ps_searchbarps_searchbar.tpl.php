<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7881331ae4_89699988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1637139912,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7881331ae4_89699988 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div id="search_widget" class="search-widget js-dropdown popup-over" data-search-controller-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
"> 
	<a href="javascript:void(0)" data-toggle="dropdown" class="popup-title">
    	<i class="ti-search icons"></i>
	</a>
	<form method="get" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="popup-content dropdown-menu" id="search_form">
		<div class="search-inner">
			<input type="hidden" name="controller" value="search">
			<input type="text" name="s" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_string']->value), ENT_QUOTES, 'UTF-8');?>
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
<?php }
}
