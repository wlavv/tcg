<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:35:35
  from '/home/playfunc/tcg/themes/at_auros/templates/errors/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7aa7e9beb1_54022689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8928fcacba82fad0ea78582abd663ce7a49c66d' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/errors/maintenance.tpl',
      1 => 1637139914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7aa7e9beb1_54022689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2058626548684d7aa7e94f09_20339962', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_207761938684d7aa7e95a49_50312735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo']), ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_1888900170684d7aa7e979f8_26873689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_1726780739684d7aa7e98a62_11016881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_550339160684d7aa7e986a3_40785345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1726780739684d7aa7e98a62_11016881', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_389026565684d7aa7e95491_28012201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207761938684d7aa7e95a49_50312735', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888900170684d7aa7e979f8_26873689', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550339160684d7aa7e986a3_40785345', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_961396565684d7aa7e9a855_34825776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1743602366684d7aa7e9a3d2_51764370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_961396565684d7aa7e9a855_34825776', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1163276045684d7aa7e9b436_26237136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2058626548684d7aa7e94f09_20339962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2058626548684d7aa7e94f09_20339962',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_389026565684d7aa7e95491_28012201',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_207761938684d7aa7e95a49_50312735',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_1888900170684d7aa7e979f8_26873689',
  ),
  'page_header' => 
  array (
    0 => 'Block_550339160684d7aa7e986a3_40785345',
  ),
  'page_title' => 
  array (
    0 => 'Block_1726780739684d7aa7e98a62_11016881',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1743602366684d7aa7e9a3d2_51764370',
  ),
  'page_content' => 
  array (
    0 => 'Block_961396565684d7aa7e9a855_34825776',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1163276045684d7aa7e9b436_26237136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_389026565684d7aa7e95491_28012201', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1743602366684d7aa7e9a3d2_51764370', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1163276045684d7aa7e9b436_26237136', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
