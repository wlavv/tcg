<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/themes/at_auros/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7884c90864_67897672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c4017cb4bcc417f291ba401c3c93cfb8fc135b' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/index.tpl',
      1 => 1638374326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7884c90864_67897672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485391372684d7884c8e916_91003891', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1311038575684d7884c8ed32_05768518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_466941464684d7884c8f7c3_84130422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_142709481684d7884c8f462_84068364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466941464684d7884c8f7c3_84130422', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_485391372684d7884c8e916_91003891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_485391372684d7884c8e916_91003891',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1311038575684d7884c8ed32_05768518',
  ),
  'page_content' => 
  array (
    0 => 'Block_142709481684d7884c8f462_84068364',
  ),
  'hook_home' => 
  array (
    0 => 'Block_466941464684d7884c8f7c3_84130422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1311038575684d7884c8ed32_05768518', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142709481684d7884c8f462_84068364', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
