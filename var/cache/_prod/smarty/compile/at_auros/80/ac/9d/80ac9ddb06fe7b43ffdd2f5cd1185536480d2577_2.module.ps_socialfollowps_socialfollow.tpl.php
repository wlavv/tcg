<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78813ac841_63994813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1637139912,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d78813ac841_63994813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626603353684d78813a8500_47314079', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_626603353684d78813a8500_47314079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_626603353684d78813a8500_47314079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
        <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['class']), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['label']), ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer"><span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['label']), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
