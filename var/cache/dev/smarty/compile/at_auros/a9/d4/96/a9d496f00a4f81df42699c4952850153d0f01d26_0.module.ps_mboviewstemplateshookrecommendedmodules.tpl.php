<?php
/* Smarty version 4.3.4, created on 2025-09-14 00:32:06
  from 'module:ps_mboviewstemplateshookrecommendedmodules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c5fef6494ab0_60233550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedmodules.tpl',
      1 => 1749551938,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c5fef6494ab0_60233550 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/playfunc/prod/tcg/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<?php echo '<script'; ?>
>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript' ));?>
',
        'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript' ));?>
',
      },
      recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript' ));?>
',
      shouldAttachRecommendedModulesAfterContent: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value ));?>
,
      shouldAttachRecommendedModulesButton: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value ));?>
,
      shouldUseLegacyTheme: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value ));?>
,
    });
  }
<?php echo '</script'; ?>
>
<!-- end /home/playfunc/prod/tcg/modules/ps_mbo/views/templates/hook/recommended-modules.tpl --><?php }
}
