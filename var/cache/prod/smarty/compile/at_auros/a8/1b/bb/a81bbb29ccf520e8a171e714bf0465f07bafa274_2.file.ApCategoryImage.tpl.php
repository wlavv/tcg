<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/hook/ApCategoryImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d788418ec09_77599552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a81bbb29ccf520e8a171e714bf0465f07bafa274' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/hook/ApCategoryImage.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d788418ec09_77599552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'apmenu' => 
  array (
    'compiled_filepath' => '/home/playfunc/tcg/var/cache/prod/smarty/compile/at_auros/a8/1b/bb/a81bbb29ccf520e8a171e714bf0465f07bafa274_2.file.ApCategoryImage.tpl.php',
    'uid' => 'a81bbb29ccf520e8a171e714bf0465f07bafa274',
    'call_name' => 'smarty_template_function_apmenu_2095798628684d788416ec95_47788066',
  ),
));
?><!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->


<?php if ((isset($_smarty_tpl->tpl_vars['categories']->value))) {?>
<div class="widget-category_image block <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class']))) {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

	</h4>
	<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
	<div class="block_content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cate', false, 'key');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
			<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'apmenu', array('data'=>$_smarty_tpl->tpl_vars['cate']->value), true);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div id="view_all_wapper_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="view_all_wapper hide">
			<a class="btn btn-primary view_all" href="javascript:void(0)"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
		</div> 
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php }
echo '<script'; ?>
 type="text/javascript">
 
	ap_list_functions.push(function(){
		$(".view_all_wapper").hide();
		var limit = <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['limit'] ))), ENT_QUOTES, 'UTF-8');?>
;
		var level = <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['cate_depth'] ))), ENT_QUOTES, 'UTF-8');?>
 - 1;
		$("ul.ul-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
, ul.ul-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 ul").each(function(){
			var element = $(this).find(">li").length;
			var count = 0;
			$(this).find(">li").each(function(){
				count = count + 1;
				if(count > limit){
					// $(this).remove();
					$(this).hide();
				}
			});
			if(element > limit) {
				view = $(".view_all","#view_all_wapper_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
").clone(1);
				// view.appendTo($(this).find("ul.level" + level));
				view.appendTo($(this));
				var href = $(this).closest("li").find('a:first-child').attr('href');
				$(view).attr("href", href);
			}
		})
	});

<?php echo '</script'; ?>
><?php }
/* smarty_template_function_apmenu_2095798628684d788416ec95_47788066 */
if (!function_exists('smarty_template_function_apmenu_2095798628684d788416ec95_47788066')) {
function smarty_template_function_apmenu_2095798628684d788416ec95_47788066(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<ul class="level<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['level']->value ))), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?> ul-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['random']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['children'])) && is_array($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
	<li class="cate_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] ))), ENT_QUOTES, 'UTF-8');?>
" >
		<a href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
			<span class="cate_content">
				<span class="cover-img">
					<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']))) {?>
					<img src='<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
' 
						 <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 0 || ($_smarty_tpl->tpl_vars['level']->value > 0 && $_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 2)) {?> style="display:none"<?php }?>/>
					<?php }?>
				</span>
				<span class="cat_name"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
			</span>
		</a>
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'apmenu', array('data'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

	</li>
	<?php } else { ?>
	<li class="cate_<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] ))), ENT_QUOTES, 'UTF-8');?>
">
		<a href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
			<span class="cate_content">
				<span class="cover-img">
					<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['image']))) {?>
					<img src='<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["image"],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value["name"],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
' 
						 <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 0 || ($_smarty_tpl->tpl_vars['level']->value > 0 && $_smarty_tpl->tpl_vars['formAtts']->value['showicons'] == 2)) {?> style="display:none"<?php }?>/>
					<?php }?>
				</span>
				<span class="wr-text">	
					<span class="cate-name"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
					<span data-id="leo-cat-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" class="items leo-qty leo-cat-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"  data-str="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" style="display:none"></span>
				</span>
			</span>
		</a>
		<a class="cate-show-all" href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']),'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="show all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'+ Show All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
	</li>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}}
/*/ smarty_template_function_apmenu_2095798628684d788416ec95_47788066 */
}
