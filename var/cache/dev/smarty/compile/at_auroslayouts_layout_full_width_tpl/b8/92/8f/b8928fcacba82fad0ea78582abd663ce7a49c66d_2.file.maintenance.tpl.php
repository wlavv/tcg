<?php
/* Smarty version 4.3.4, created on 2025-09-12 14:05:43
  from '/home/playfunc/tcg/themes/at_auros/templates/errors/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c41aa7a37998_41038104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8928fcacba82fad0ea78582abd663ce7a49c66d' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/errors/maintenance.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c41aa7a37998_41038104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83036805768c41aa7a2edc8_56519479', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_44179175368c41aa7a2f8a0_59097666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_116727331768c41aa7a32f62_77761599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_36268924368c41aa7a33de2_20375538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_78609611268c41aa7a33aa9_83960740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36268924368c41aa7a33de2_20375538', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_94424774168c41aa7a2f502_64462128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44179175368c41aa7a2f8a0_59097666', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116727331768c41aa7a32f62_77761599', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78609611268c41aa7a33aa9_83960740', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_65472329068c41aa7a36686_44334921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_182722428668c41aa7a36204_36820246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65472329068c41aa7a36686_44334921', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_55436364368c41aa7a37184_62424597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_83036805768c41aa7a2edc8_56519479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_83036805768c41aa7a2edc8_56519479',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_94424774168c41aa7a2f502_64462128',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_44179175368c41aa7a2f8a0_59097666',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_116727331768c41aa7a32f62_77761599',
  ),
  'page_header' => 
  array (
    0 => 'Block_78609611268c41aa7a33aa9_83960740',
  ),
  'page_title' => 
  array (
    0 => 'Block_36268924368c41aa7a33de2_20375538',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_182722428668c41aa7a36204_36820246',
  ),
  'page_content' => 
  array (
    0 => 'Block_65472329068c41aa7a36686_44334921',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_55436364368c41aa7a37184_62424597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94424774168c41aa7a2f502_64462128', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182722428668c41aa7a36204_36820246', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55436364368c41aa7a37184_62424597', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
