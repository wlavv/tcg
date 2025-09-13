<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/themes/at_auros/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7884355033_12297030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6f1517140372a92aa586054f62263b93b023f41' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7884355033_12297030 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wishlist">
	<?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
		<div class="dropdown leo-wishlist-button-dropdown">
		  <button class="leo-wishlist-button dropdown-toggle show-list btn-primary btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_wishlist']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="icon-btn-product icon-wishlist ti-heart"></i>
				<span class="name-btn-product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
			</span>
			
		  </button>
		  <div class="dropdown-menu leo-list-wishlist leo-list-wishlist-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value), ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlists_item');
$_smarty_tpl->tpl_vars['wishlists_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->value) {
$_smarty_tpl->tpl_vars['wishlists_item']->do_else = false;
?>
				<a href="javascript:void(0)" class="dropdown-item list-group-item list-group-item-action wishlist-item<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?> added <?php }?>" data-id-wishlist="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );
}?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['wishlists_item']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a>			
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </div>
		</div>
	<?php } else { ?>
		<a class="leo-wishlist-button btn-product btn-primary btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" href="javascript:void(0)" data-id-wishlist="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_wishlist']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );
}?>">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="icon-btn-product icon-wishlist ti-heart"></i>
				<span class="name-btn-product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
			</span>
		</a>
	<?php }?>
</div><?php }
}
