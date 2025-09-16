<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:33:52
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685539102e9672_41917731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3faca212302472c3802b683e5a252b51c5c28c92' => 
    array (
      0 => '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685539102e9672_41917731 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
