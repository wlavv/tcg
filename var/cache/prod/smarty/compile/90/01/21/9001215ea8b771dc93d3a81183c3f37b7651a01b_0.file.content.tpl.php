<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:31:37
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d79b931bbc9_29143322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9001215ea8b771dc93d3a81183c3f37b7651a01b' => 
    array (
      0 => '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/content.tpl',
      1 => 1748866498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d79b931bbc9_29143322 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
