<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769c37ac3_85089075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddcad9d096f2b39ac5a15d85e5eaade960eadfe' => 
    array (
      0 => '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/breadcrumb.tpl',
      1 => 1750632294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769c37ac3_85089075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrbg"),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrbg', $_prefixVariable2);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrcolor"),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrcolor', $_prefixVariable3);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobgfull"),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobgfull', $_prefixVariable4);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobgheight"),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobgheight', $_prefixVariable5);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"leobrtext"),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('leobrtext', $_prefixVariable6);?>

<?php if ($_smarty_tpl->tpl_vars['leobrbg']->value || $_smarty_tpl->tpl_vars['leobrcolor']->value) {?>
<div data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-bg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leobrtext']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['leobgfull']->value) {?>breadcrumb-full<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['leobrbg']->value) {?>background-image: <?php if ($_smarty_tpl->tpl_vars['leobrbg']->value) {?>url(<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['leobrbg']->value == 'catimg' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leobrbg']->value, ENT_QUOTES, 'UTF-8');
}?>)<?php }?>;<?php }
if ($_smarty_tpl->tpl_vars['leobrcolor']->value) {?> background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leobrcolor']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['leobgheight']->value) {?> min-height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leobgheight']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }?> ">
  <?php if ((isset($_smarty_tpl->tpl_vars['leobgfull']->value)) && $_smarty_tpl->tpl_vars['leobgfull']->value) {?>
  <div class="container">
  <?php }?>
  <nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
    <ol>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143774970568c88769c33373_65560966', 'breadcrumb');
?>

    </ol>
  </nav>
  <?php if ((isset($_smarty_tpl->tpl_vars['leobgfull']->value)) && $_smarty_tpl->tpl_vars['leobgfull']->value) {?>
  </div>
  <?php }?>
</div>
<?php } else { ?>
<nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133537712868c88769c35d18_41603902', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
}
/* {block 'breadcrumb_item'} */
class Block_40553685668c88769c33e66_67343818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              </a>
             
            </li>
          <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_143774970568c88769c33373_65560966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_143774970568c88769c33373_65560966',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_40553685668c88769c33e66_67343818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40553685668c88769c33e66_67343818', 'breadcrumb_item', $this->tplIndex);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'breadcrumb_item'} */
class Block_56067535768c88769c366e9_02082103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
      
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_133537712868c88769c35d18_41603902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_133537712868c88769c35d18_41603902',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_56067535768c88769c366e9_02082103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56067535768c88769c366e9_02082103', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
