<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/modules/leofeature/views/templates/hook/leo_product_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7895bbe038_55136180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88edb4cb176149366333828f9e1a1cff0c904cb' => 
    array (
      0 => '/home/playfunc/tcg/modules/leofeature/views/templates/hook/leo_product_tab.tpl',
      1 => 1703924414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7895bbe038_55136180 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'default') {?>
	<h4 class="title-info-product leo-product-show-review-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>
</h4>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
	<div class="card-header" role="tab" id="headingleofeatureproductreview">
	  <h5 class="h5">
		<a class="collapsed leo-product-show-review-title leofeature-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseleofeatureproductreview" aria-expanded="false" aria-controls="collapseleofeatureproductreview">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>

		</a>
	 </h5>
  </div>
<?php } else { ?>
	<li class="nav-item">
	  <a class="nav-link leo-product-show-review-title" data-toggle="tab" href="#leo-product-show-review-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
	</li>
<?php }?>

<?php }
}
