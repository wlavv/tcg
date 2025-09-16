<?php
/* Smarty version 4.3.4, created on 2025-06-22 23:46:36
  from '/home/playfunc/tcg/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685887cce252c7_15084193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7380e27b3b09084e88b01e5a60b59e4f16c14e' => 
    array (
      0 => '/home/playfunc/tcg/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685887cce252c7_15084193 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
