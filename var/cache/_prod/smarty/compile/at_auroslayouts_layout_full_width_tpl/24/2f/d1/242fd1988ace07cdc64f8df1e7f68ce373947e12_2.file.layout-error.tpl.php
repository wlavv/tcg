<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:35:35
  from '/home/playfunc/tcg/themes/at_auros/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7aa7eab1a2_64917880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242fd1988ace07cdc64f8df1e7f68ce373947e12' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/layouts/layout-error.tpl',
      1 => 1667830256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_684d7aa7eab1a2_64917880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1411646529684d7aa7ea49d1_50938790', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_607196259684d7aa7ea6605_36853026', 'head_icons');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1909294672684d7aa7ea7f63_80989760', 'stylesheets');
?>


  </head>

  <body>

    <div id="layout-error">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1996160852684d7aa7eaaba5_95637122', 'content');
?>

    </div>

  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_131217256684d7aa7ea4ec5_36163972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_1426301543684d7aa7ea5556_89766410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_1347047790684d7aa7ea5ad5_78049615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_1411646529684d7aa7ea49d1_50938790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_1411646529684d7aa7ea49d1_50938790',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_131217256684d7aa7ea4ec5_36163972',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_1426301543684d7aa7ea5556_89766410',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_1347047790684d7aa7ea5ad5_78049615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131217256684d7aa7ea4ec5_36163972', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426301543684d7aa7ea5556_89766410', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1347047790684d7aa7ea5ad5_78049615', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_icons'} */
class Block_607196259684d7aa7ea6605_36853026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_607196259684d7aa7ea6605_36853026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['favicon']), ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time']), ENT_QUOTES, 'UTF-8');?>
">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['favicon']), ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time']), ENT_QUOTES, 'UTF-8');?>
">
   <?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_1909294672684d7aa7ea7f63_80989760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_1909294672684d7aa7ea7f63_80989760',
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
class Block_1996160852684d7aa7eaaba5_95637122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1996160852684d7aa7eaaba5_95637122',
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
