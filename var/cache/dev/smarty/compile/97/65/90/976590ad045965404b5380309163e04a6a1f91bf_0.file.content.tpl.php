<?php
/* Smarty version 4.3.4, created on 2025-06-22 23:44:57
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6858876912adf6_46129519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976590ad045965404b5380309163e04a6a1f91bf' => 
    array (
      0 => '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/content.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6858876912adf6_46129519 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
