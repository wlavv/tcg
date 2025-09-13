<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:30:17
  from '/home/playfunc/tcg/modules/leoslideshow/views/templates/hook/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d796981a685_49603887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44da3e292ff16a40129b914b9d72071959e3935' => 
    array (
      0 => '/home/playfunc/tcg/modules/leoslideshow/views/templates/hook/status.tpl',
      1 => 1677670524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d796981a685_49603887 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['gstatus']->value)) || (isset($_smarty_tpl->tpl_vars['status']->value))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['status_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" alt="" /></a>
<?php }?>

<?php }
}
