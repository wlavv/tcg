<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c887698d3817_88072207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4f989009f4007ebf57cc3615984bc1a3ab8997' => 
    array (
      0 => '/home/playfunc/prod/tcg/themes/at_auros/templates/_partials/helpers.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c887698d3817_88072207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/playfunc/prod/tcg/var/cache/dev/smarty/compile/at_auroslayouts_layout_full_width_tpl/7b/4f/98/7b4f989009f4007ebf57cc3615984bc1a3ab8997_2.file.helpers.tpl.php',
    'uid' => '7b4f989009f4007ebf57cc3615984bc1a3ab8997',
    'call_name' => 'smarty_template_function_renderLogo_3979148668c887698cac91_41051004',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_3979148668c887698cac91_41051004 */
if (!function_exists('smarty_template_function_renderLogo_3979148668c887698cac91_41051004')) {
function smarty_template_function_renderLogo_3979148668c887698cac91_41051004(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_3979148668c887698cac91_41051004 */
}
