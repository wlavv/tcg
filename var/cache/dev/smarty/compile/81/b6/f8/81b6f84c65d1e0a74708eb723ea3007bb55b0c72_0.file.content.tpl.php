<?php
/* Smarty version 4.3.4, created on 2025-06-22 23:46:36
  from '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685887cce9f5d8_48757890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b6f84c65d1e0a74708eb723ea3007bb55b0c72' => 
    array (
      0 => '/home/playfunc/tcg/admin082vvnopp3nd5wlh82x/themes/new-theme/template/content.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685887cce9f5d8_48757890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
