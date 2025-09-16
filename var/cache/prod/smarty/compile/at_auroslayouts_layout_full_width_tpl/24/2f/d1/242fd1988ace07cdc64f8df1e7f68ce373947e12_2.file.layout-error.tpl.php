<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:52:23
  from '/home/playfunc/tcg/themes/at_auros/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552f5738b819_54550062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242fd1988ace07cdc64f8df1e7f68ce373947e12' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/layouts/layout-error.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_68552f5738b819_54550062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197626020668552f57382818_51739314', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55000311468552f57383e39_14657234', 'head_icons');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175108904168552f57385216_58658286', 'stylesheets');
?>


  </head>

  <body>

    <div id="layout-error">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26319436268552f5738b251_66044912', 'content');
?>

    </div>

  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_210730595468552f57382c01_50986367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_135785612868552f57383180_03554559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_31691838868552f573836e8_11217316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_197626020668552f57382818_51739314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_197626020668552f57382818_51739314',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_210730595468552f57382c01_50986367',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_135785612868552f57383180_03554559',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_31691838868552f573836e8_11217316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210730595468552f57382c01_50986367', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135785612868552f57383180_03554559', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31691838868552f573836e8_11217316', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_icons'} */
class Block_55000311468552f57383e39_14657234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_55000311468552f57383e39_14657234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
   <?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_175108904168552f57385216_58658286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_175108904168552f57385216_58658286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_26319436268552f5738b251_66044912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_26319436268552f5738b251_66044912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
}
