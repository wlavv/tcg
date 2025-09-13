<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/hook/BlogItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7884c6d035_87094103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870475fdc9cb9a9c94a9bc1b62d7e1cf2a3c8ec2' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/hook/BlogItem.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7884c6d035_87094103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
             <a class="blog_img_link" href="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
				<img class="img-fluid" src="<?php if (((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'])) && $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'] != '')) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['blog']->value['preview_url']), ENT_QUOTES, 'UTF-8');
}?>" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');
}?>" 
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width']))) {?>width="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height']))) {?> height="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					 itemprop="image" />
			<?php }?>
            </a>
        </div>
    </div>
    <div class="right-block">
    	
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
        	<h5 class="blog-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['blog']->value['link']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['blog']->value['title']),35,'...' ))), ENT_QUOTES, 'UTF-8');?>
</a></h5>
        <?php }?>

        <div class="blog-meta">
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
				<span class="author">
					<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

				</span>
			<?php }?>		
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
				<span class="cat">
					<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['blog']->value['category_link']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</a>
				</span>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
				<span class="nbcomment">
					<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['comment_count'] ))), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				</span>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
				<span class="hits">
					<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['hits'] ))), ENT_QUOTES, 'UTF-8');?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Like','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
				</span>	
			<?php }?>
		</div>
        <div class="blog-date"> 
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
				<span class="created">
					<time class="date" datetime="<?php echo htmlspecialchars((string) (smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y")), ENT_QUOTES, 'UTF-8');?>
">
												<span class="b-daycount">
						<?php $_smarty_tpl->_assignInScope('blog_day', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"));?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_day']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 
												</span> 
						<span class="b-month">
						<?php $_smarty_tpl->_assignInScope('blog_month', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"));?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_month']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 
						<?php $_smarty_tpl->_assignInScope('blog_date_add', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%d"));?><!-- day of month -->
						</span>,
					
						<span class="b-year">					
						<?php $_smarty_tpl->_assignInScope('blog_year', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"));?>						
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_year']->value,'mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <!-- year -->
						</span> 
					
					</time>
				</span>
			<?php }?>
        </div>
  
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
	        <p class="blog-desc" itemprop="description">
	            <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['blog']->value['description']),120,'...' ))), ENT_QUOTES, 'UTF-8');?>

	        </p>
	        <p><a class="link-readmore" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['blog']->value['link']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'+ Read more','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></p>
        <?php }?>
    </div>
	
	<div class="hidden-xl-down hidden-xl-up datetime-translate">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sunday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Monday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tuesday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wednesday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thursday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saturday','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'January','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'February','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'March','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'April','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'May','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'June','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'July','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'August','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'September','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'October','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'November','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'December','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'st','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'nd','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rd','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'th','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
}
