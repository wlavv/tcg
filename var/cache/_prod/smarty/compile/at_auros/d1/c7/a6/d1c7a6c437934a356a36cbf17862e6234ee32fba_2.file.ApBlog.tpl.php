<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApBlog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7884c145d5_01568493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c7a6c437934a356a36cbf17862e6234ee32fba' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApBlog.tpl',
      1 => 1703924428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7884c145d5_01568493 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']), ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>

    <div id="blog-<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="block latest-blogs exclusive appagebuilder <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content">	
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "slickcarousel") {?>
                    <?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogSlickCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == 'boostrap') {?>
						<?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
						<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogOwlCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
						<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					<?php }?>
				<?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No blog at this time.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>	
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show']) {?>
                <div class="blog-viewall float-xs-right">
                    <a class="btn btn-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['formAtts']->value['leo_blog_helper']->getFontBlogLink()), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
                </div>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>
<?php }
}
}
