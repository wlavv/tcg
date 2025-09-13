<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7881222640_06600520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316b0ed9205ff5d1a2ad315c919453e5bb83b719' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1703924428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7881222640_06600520 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
