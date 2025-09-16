<?php
/* Smarty version 4.3.4, created on 2025-09-14 00:32:06
  from '/home/playfunc/prod/tcg/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c5fef63b2e49_10743883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41bbb4db7859744538f18ba385bb11a02de1bbfe' => 
    array (
      0 => '/home/playfunc/prod/tcg/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1749551938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c5fef63b2e49_10743883 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
