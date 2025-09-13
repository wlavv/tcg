<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from '/home/playfunc/tcg/modules/leobootstrapmenu/views/templates/hook/attrw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7881187d54_59199468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f872f5534e430cb88f6c4db2b92727313793cee' => 
    array (
      0 => '/home/playfunc/tcg/modules/leobootstrapmenu/views/templates/hook/attrw.tpl',
      1 => 1676038730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7881187d54_59199468 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth)) && $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth) {?>
    <?php if ($_smarty_tpl->tpl_vars['group_type']->value == 'horizontal') {?>
        style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth), ENT_QUOTES, 'UTF-8');?>
px;"
    <?php } else { ?>
        <?php if (((isset($_smarty_tpl->tpl_vars['typesub']->value)) && $_smarty_tpl->tpl_vars['typesub']->value == 'left')) {?>
            style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth), ENT_QUOTES, 'UTF-8');?>
px; left: -<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth), ENT_QUOTES, 'UTF-8');?>
px;"
        <?php } else { ?>
            style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth), ENT_QUOTES, 'UTF-8');?>
px; left: 100%;"
        <?php }?>
    <?php }
}
}
}
