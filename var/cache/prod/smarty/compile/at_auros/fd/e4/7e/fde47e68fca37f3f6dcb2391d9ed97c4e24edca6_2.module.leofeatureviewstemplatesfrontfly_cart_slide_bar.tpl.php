<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from 'module:leofeatureviewstemplatesfrontfly_cart_slide_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78814a4b73_00438057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde47e68fca37f3f6dcb2391d9ed97c4e24edca6' => 
    array (
      0 => 'module:leofeatureviewstemplatesfrontfly_cart_slide_bar.tpl',
      1 => 1703924414,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d78814a4b73_00438057 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['enable_overlay_background']->value) {?>
	<div class="leo-fly-cart-mask"></div>
<?php }?>

<div class="leo-fly-cart-slidebar <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['type']->value), ENT_QUOTES, 'UTF-8');?>
">
	
	<div class="leo-fly-cart disable-dropdown">
		<div class="leo-fly-cart-wrapper">
			<div class="leo-fly-cart-icon-wrapper">
				<a href="javascript:void(0)" class="leo-fly-cart-icon"><i class="material-icons">&#xE8CC;</i></a>
				<span class="leo-fly-cart-total"></span>
			</div>
						<div class="leo-fly-cart-cssload-loader"></div>
		</div>
	</div>

</div><?php }
}
