<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:33:52
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/helpers/tree/tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6855391030c6b1_39773472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8475174fb371edd567e2f7fe5dc76535e8866a37' => 
    array (
      0 => '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6855391030c6b1_39773472 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
