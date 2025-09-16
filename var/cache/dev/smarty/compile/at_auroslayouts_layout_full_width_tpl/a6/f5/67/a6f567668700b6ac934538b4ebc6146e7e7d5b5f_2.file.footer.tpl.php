<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769c43285_05552776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f567668700b6ac934538b4ebc6146e7e7d5b5f' => 
    array (
      0 => '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/footer.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769c43285_05552776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67626865768c88769c3d589_46702627', 'hook_footer_before');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148306768868c88769c3f6a0_89757923', 'hook_footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213291621168c88769c41692_16661839', 'hook_footer_after');
}
/* {block 'hook_footer_before'} */
class Block_67626865768c88769c3d589_46702627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_67626865768c88769c3d589_46702627',
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
class Block_148306768868c88769c3f6a0_89757923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_148306768868c88769c3f6a0_89757923',
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
class Block_213291621168c88769c41692_16661839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_213291621168c88769c41692_16661839',
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
