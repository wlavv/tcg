<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:48:04
  from '/home/playfunc/tcg/themes/at_auros/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552e543bf923_90196732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38865f59d0b5f592ac326a46d7cb24937d9593f' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/_partials/footer.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68552e543bf923_90196732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2780032368552e543b9574_55378799', 'hook_footer_before');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37796346568552e543bbb22_12822072', 'hook_footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111117409768552e543bdb65_86258304', 'hook_footer_after');
}
/* {block 'hook_footer_before'} */
class Block_2780032368552e543b9574_55378799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_2780032368552e543b9574_55378799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-top">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_37796346568552e543bbb22_12822072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_37796346568552e543bbb22_12822072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-center">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_111117409768552e543bdb65_86258304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_111117409768552e543bdb65_86258304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer-bottom">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'] == 0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'hook_footer_after'} */
}
