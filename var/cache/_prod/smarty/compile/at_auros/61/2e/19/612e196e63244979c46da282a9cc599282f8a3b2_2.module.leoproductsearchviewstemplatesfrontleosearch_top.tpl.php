<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from 'module:leoproductsearchviewstemplatesfrontleosearch_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78812c64a4_25347145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612e196e63244979c46da282a9cc599282f8a3b2' => 
    array (
      0 => 'module:leoproductsearchviewstemplatesfrontleosearch_top.tpl',
      1 => 1743578896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d78812c64a4_25347145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => '/home/playfunc/tcg/var/cache/prod/smarty/compile/at_auros/61/2e/19/612e196e63244979c46da282a9cc599282f8a3b2_2.module.leoproductsearchviewstemplatesfrontleosearch_top.tpl.php',
    'uid' => '612e196e63244979c46da282a9cc599282f8a3b2',
    'call_name' => 'smarty_template_function_lps_categories_1181425709684d788128b4b3_60932197',
  ),
));
?>


<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> search-by-category<?php }?>">
	<p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search here...','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</p>
		<form method="get" action="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('leoproductsearch','productsearch',array(),true),'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" id="leosearchtopbox" data-label-suggestion="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suggestion','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-search-for="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-in-category="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in category','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-products-for="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products For','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-label-products="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" data-view-all="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
">
                <input type="hidden" name="leoproductsearch_static_token" value="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leoproductsearch_static_token']->value,'htmlall','UTF-8' )) ))), ENT_QUOTES, 'UTF-8');?>
"/>
		    			<div class="block_content clearfix leoproductsearch-content">
			<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?>		
				<div class="list-cate-wrapper">
					<input id="leosearchtop-cate-id" name="cate" value="<?php if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value))) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['selectedCate']->value), ENT_QUOTES, 'UTF-8');
}?>" type="hidden">
					<a href="javascript:void(0)" id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value != '') {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['selectedCateName']->value), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );
}?></span>
						<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
					</a>
					<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
						<a href="#" data-cate-id="" data-cate-name="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value == '') {?> active<?php }?>" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</a>				
						<a href="#" data-cate-id="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cates']->value['id_category'],'htmlall','UTF-8' )) ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cates']->value['name']), ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cates']->value['level_depth']), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value)) && $_smarty_tpl->tpl_vars['cates']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['cates']->value['level_depth'] > 1) {
echo htmlspecialchars((string) (str_repeat('-',$_smarty_tpl->tpl_vars['cates']->value['level_depth'])), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cates']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['cates']->value['children']), true);?>

					</div>
				</div>
			<?php }?>
			<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" data-content='<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['placeholder']->value), ENT_QUOTES, 'UTF-8');?>
' value="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' )) ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
"/>
				<div class="ac_results lps_results"></div>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var blocksearch_type = 'top';
<?php echo '</script'; ?>
>
<!-- /Block search module -->
<?php }
/* smarty_template_function_lps_categories_1181425709684d788128b4b3_60932197 */
if (!function_exists('smarty_template_function_lps_categories_1181425709684d788128b4b3_60932197')) {
function smarty_template_function_lps_categories_1181425709684d788128b4b3_60932197(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><a href="#" data-cate-id="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id_category'],'htmlall','UTF-8' )) ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['name']), ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['level_depth']), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['selectedCate']->value)) && $_smarty_tpl->tpl_vars['node']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {
echo htmlspecialchars((string) (str_repeat('-',$_smarty_tpl->tpl_vars['node']->value['level_depth'])), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_lps_categories_1181425709684d788128b4b3_60932197 */
}
