<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:24
  from '/home/playfunc/tcg/themes/at_auros/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7880f069f9_21647642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a120e695720c9817fc29fb86622b885664bdb83e' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/page.tpl',
      1 => 1637139914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7880f069f9_21647642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_755672379684d7880f000a1_09672219', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3891578684d7880f01009_92869671 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_236498919684d7880f00754_33520571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3891578684d7880f01009_92869671', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1256725949684d7880f03ab4_92548785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_75960220684d7880f043d7_23221843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2142896330684d7880f03403_53445980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1256725949684d7880f03ab4_92548785', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75960220684d7880f043d7_23221843', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_235387594684d7880f05984_02964864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1488633790684d7880f052b2_06910328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235387594684d7880f05984_02964864', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_755672379684d7880f000a1_09672219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_755672379684d7880f000a1_09672219',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_236498919684d7880f00754_33520571',
  ),
  'page_title' => 
  array (
    0 => 'Block_3891578684d7880f01009_92869671',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2142896330684d7880f03403_53445980',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1256725949684d7880f03ab4_92548785',
  ),
  'page_content' => 
  array (
    0 => 'Block_75960220684d7880f043d7_23221843',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1488633790684d7880f052b2_06910328',
  ),
  'page_footer' => 
  array (
    0 => 'Block_235387594684d7880f05984_02964864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236498919684d7880f00754_33520571', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2142896330684d7880f03403_53445980', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1488633790684d7880f052b2_06910328', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
