<?php
/* Smarty version 4.3.4, created on 2025-08-02 13:26:27
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/subcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_688e03f320a297_59552374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd130e51e89ec51d469b306764613fc8e7459489e' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/subcategories.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688e03f320a297_59552374 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
  <?php if ((isset($_smarty_tpl->tpl_vars['LEO_SUBCATEGORY']->value)) && $_smarty_tpl->tpl_vars['LEO_SUBCATEGORY']->value && (((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) && $_smarty_tpl->tpl_vars['display_subcategories']->value == 1) || !(isset($_smarty_tpl->tpl_vars['display_subcategories']->value)))) {?>
    <div id="subcategories">
      <div class="row subcategories-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
          <div class="subcategory-block subcategories-list col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-sp-12">
            <div class="subcategory-image">
               <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
                <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'])) {?>
                   <img
                    class="img-fluid"
                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                    loading="lazy"
                    width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['width'], ENT_QUOTES, 'UTF-8');?>
"
                    height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['height'], ENT_QUOTES, 'UTF-8');?>
"/>                
		    <?php }?>
              </a>
            </div>
            <div class="subcategory-meta">
              <h5><a class="subcategory-name" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h5> 
              <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
				<div class="subcategory-description cat_desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['subcategory']->value['description']),120,'...' )),'html','UTF-8' ));?>
</div>
			  <?php }?>  
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  <?php }
}
}
}
