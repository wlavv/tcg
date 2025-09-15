<?php
/* Smarty version 4.3.4, created on 2025-09-11 23:48:24
  from '/home/playfunc/tcg/themes/at_auros/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c351b8588ea8_52332660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83da2aeab0b987dff0be77f9fecdcd243986be59' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/_partials/header.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c351b8588ea8_52332660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51807172168c351b8581222_06441997', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193008359068c351b85837b1_76021953', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168090034168c351b8586ea5_87220090', 'header_top');
}
/* {block 'header_banner'} */
class Block_51807172168c351b8581222_06441997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_51807172168c351b8581222_06441997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      </div>
      <?php }?>
  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_193008359068c351b85837b1_76021953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_193008359068c351b85837b1_76021953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="topnav">
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        </div>
      <?php }?>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_168090034168c351b8586ea5_87220090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_168090034168c351b8586ea5_87220090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
        <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
