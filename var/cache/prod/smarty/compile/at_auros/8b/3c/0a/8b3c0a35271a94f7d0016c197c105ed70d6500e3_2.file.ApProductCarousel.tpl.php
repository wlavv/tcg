<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7884281286_50042306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b3c0a35271a94f7d0016c197c105ed70d6500e3' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl',
      1 => 1703924428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7884281286_50042306 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']), ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    <div class="block products_block exclusive appagebuilder <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
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
                    <?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ProductSlickCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } else { ?>
    				<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "boostrap") {?>
    					<?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ProductCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
    					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    				<?php } else { ?>
    					<?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ProductOwlCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
    					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    				<?php }?>
                <?php }?>
			<?php } else { ?>
				<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>	
			<?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>
<?php }
}
}
