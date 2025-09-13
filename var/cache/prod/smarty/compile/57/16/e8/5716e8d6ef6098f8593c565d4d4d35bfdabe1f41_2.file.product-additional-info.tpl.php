<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7895b18261_07818970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5716e8d6ef6098f8593c565d4d4d35bfdabe1f41' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1637139914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7895b18261_07818970 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info"> 
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
