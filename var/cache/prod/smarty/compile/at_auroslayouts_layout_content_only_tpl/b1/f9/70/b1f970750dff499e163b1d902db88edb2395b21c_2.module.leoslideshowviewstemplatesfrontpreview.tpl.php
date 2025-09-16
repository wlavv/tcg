<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:49:24
  from 'module:leoslideshowviewstemplatesfrontpreview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552ea44c1a28_50015646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f970750dff499e163b1d902db88edb2395b21c' => 
    array (
      0 => 'module:leoslideshowviewstemplatesfrontpreview.tpl',
      1 => 1749910613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:./leoslideshow.tpl' => 1,
    'module:leoslideshow/views/templates/front/leoslideshow.tpl' => 1,
  ),
),false)) {
function content_68552ea44c1a28_50015646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81661464268552ea44b47a9_49165636', 'header_banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681499568552ea44b5b06_15633152', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97136812668552ea44b6749_36792235', 'header_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50032966068552ea44b7150_49793818', 'hook_footer_before');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99868200768552ea44b7c02_07421813', 'hook_footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53667314268552ea44b8523_82678420', 'hook_footer_after');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99222296968552ea44b8f07_60592564', 'hook_before_body_closing_tag');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192509213068552ea44b98d2_44284052', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header_banner'} */
class Block_81661464268552ea44b47a9_49165636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_81661464268552ea44b47a9_49165636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_1681499568552ea44b5b06_15633152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1681499568552ea44b5b06_15633152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_97136812668552ea44b6749_36792235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_97136812668552ea44b6749_36792235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_top'} */
/* {block 'hook_footer_before'} */
class Block_50032966068552ea44b7150_49793818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_50032966068552ea44b7150_49793818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_99868200768552ea44b7c02_07421813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_99868200768552ea44b7c02_07421813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_53667314268552ea44b8523_82678420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_53667314268552ea44b8523_82678420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_footer_after'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_99222296968552ea44b8f07_60592564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_99222296968552ea44b8f07_60592564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'content'} */
class Block_192509213068552ea44b98d2_44284052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_192509213068552ea44b98d2_44284052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['leoslideshow_tpl']->value == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./leoslideshow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('module:leoslideshow/views/templates/front/leoslideshow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
/* {/block 'content'} */
}
