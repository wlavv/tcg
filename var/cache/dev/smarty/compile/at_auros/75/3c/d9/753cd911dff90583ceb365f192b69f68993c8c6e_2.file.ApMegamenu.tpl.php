<?php
/* Smarty version 4.3.4, created on 2025-09-11 23:48:24
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c351b86f4305_38000156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '753cd911dff90583ceb365f192b69f68993c8c6e' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c351b86f4305_38000156 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="memgamenu-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApMegamenu">
	<?php if ((isset($_smarty_tpl->tpl_vars['content_megamenu']->value))) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_megamenu']->value;?>
	<?php }?>
</div>
<?php }
}
}
