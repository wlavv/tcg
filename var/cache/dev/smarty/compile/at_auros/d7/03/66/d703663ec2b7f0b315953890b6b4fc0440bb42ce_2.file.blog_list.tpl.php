<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from '/home/playfunc/prod/tcg/modules/leoblog/views/templates/hook/blog_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c887696639b3_49175116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd703663ec2b7f0b315953890b6b4fc0440bb42ce' => 
    array (
      0 => '/home/playfunc/prod/tcg/modules/leoblog/views/templates/hook/blog_list.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c887696639b3_49175116 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['blogs']->value)) {?>
<div id="blog-listing-home" class="blogs-container box">
	<h1 class="blog-lastest-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastest Blogs','mod'=>'leoblog'),$_smarty_tpl ) );?>
</h1>
	<div class="inner">
		<div class="blogs">  
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog', false, NULL, 'blogs', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['total'];
?>
			 
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_column']->value > 1) {?>
				  <div class="row">
				<?php }?>
				<div class="col-lg-3 col-md-6 col-xs-12">
					
						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_listing_blog']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					
				</div>	
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blogs']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_column']->value > 1) {?>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="blog-bottom">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_all_link']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
</div>
<?php }
}
}
