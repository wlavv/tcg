<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/modules/leobootstrapmenu/views/templates/hook/menutree_2_submenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769b108c6_28453719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c204ceedf0e384698066e910f2ae6dd8c14626d' => 
    array (
      0 => '/home/playfunc/prod/tcg/modules/leobootstrapmenu/views/templates/hook/menutree_2_submenu.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769b108c6_28453719 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['colums']->value)) && $_smarty_tpl->tpl_vars['colums']->value > 1) {?>
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 level<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attrw']->value, ENT_QUOTES, 'UTF-8');?>
 >
        <div class="dropdown-menu-inner">
            <div class="row">
                <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu" >
                    <div class="inner">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                                <ul class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cols']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['mod_menu']->value->renderMenuContent($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['level']->value+1,$_smarty_tpl->tpl_vars['typesub']->value,$_smarty_tpl->tpl_vars['group_type']->value);?>

                                </ul>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 level<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attrw']->value, ENT_QUOTES, 'UTF-8');?>
 >
        <div class="dropdown-menu-inner">
            <div class="row">
                <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu" >
                    <div class="inner">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['mod_menu']->value->renderMenuContent($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['level']->value+1,$_smarty_tpl->tpl_vars['typesub']->value,$_smarty_tpl->tpl_vars['group_type']->value);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
