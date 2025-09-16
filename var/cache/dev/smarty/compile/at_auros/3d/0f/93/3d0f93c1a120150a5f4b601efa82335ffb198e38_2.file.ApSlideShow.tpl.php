<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c887696e02c7_57204209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d0f93c1a120150a5f4b601efa82335ffb198e38' => 
    array (
      0 => '/home/playfunc/prod/tcg/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c887696e02c7_57204209 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="slideshow-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApSlideShow">
	<?php if ((isset($_smarty_tpl->tpl_vars['content_slider']->value))) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>
	<?php }?>
</div>
<?php }
}
}
