<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:34:59
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7a8362c5d3_81733352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976590ad045965404b5380309163e04a6a1f91bf' => 
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
function content_684d7a8362c5d3_81733352 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
