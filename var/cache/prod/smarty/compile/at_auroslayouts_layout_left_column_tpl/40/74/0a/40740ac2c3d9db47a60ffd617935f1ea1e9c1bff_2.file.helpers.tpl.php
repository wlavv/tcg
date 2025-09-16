<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:06:06
  from '/home/playfunc/tcg/themes/at_auros/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6855328ee8bd38_92607207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40740ac2c3d9db47a60ffd617935f1ea1e9c1bff' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/_partials/helpers.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6855328ee8bd38_92607207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/playfunc/tcg/var/cache/prod/smarty/compile/at_auroslayouts_layout_left_column_tpl/40/74/0a/40740ac2c3d9db47a60ffd617935f1ea1e9c1bff_2.file.helpers.tpl.php',
    'uid' => '40740ac2c3d9db47a60ffd617935f1ea1e9c1bff',
    'call_name' => 'smarty_template_function_renderLogo_13340510776855328ee84406_42605546',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_13340510776855328ee84406_42605546 */
if (!function_exists('smarty_template_function_renderLogo_13340510776855328ee84406_42605546')) {
function smarty_template_function_renderLogo_13340510776855328ee84406_42605546(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_13340510776855328ee84406_42605546 */
}
