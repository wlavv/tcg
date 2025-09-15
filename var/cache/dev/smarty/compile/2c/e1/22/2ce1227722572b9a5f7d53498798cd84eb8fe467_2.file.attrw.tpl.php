<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/modules/leobootstrapmenu/views/templates/hook/attrw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769b079e0_29328721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce1227722572b9a5f7d53498798cd84eb8fe467' => 
    array (
      0 => '/home/playfunc/prod/tcg/modules/leobootstrapmenu/views/templates/hook/attrw.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769b079e0_29328721 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth)) && $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth) {?>
    <?php if ($_smarty_tpl->tpl_vars['group_type']->value == 'horizontal') {?>
        style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px;"
    <?php } else { ?>
        <?php if (((isset($_smarty_tpl->tpl_vars['typesub']->value)) && $_smarty_tpl->tpl_vars['typesub']->value == 'left')) {?>
            style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px; left: -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px;"
        <?php } else { ?>
            style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px; left: 100%;"
        <?php }?>
    <?php }
}
}
}
