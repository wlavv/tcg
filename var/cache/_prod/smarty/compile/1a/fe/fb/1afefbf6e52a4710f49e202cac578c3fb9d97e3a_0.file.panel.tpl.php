<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:38:26
  from '/home/playfunc/tcg/modules/leoproductsearch/views/templates/admin/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7b52e106b1_71724128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1afefbf6e52a4710f49e202cac578c3fb9d97e3a' => 
    array (
      0 => '/home/playfunc/tcg/modules/leoproductsearch/views/templates/admin/panel.tpl',
      1 => 1701960342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7b52e106b1_71724128 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel form-horizontal">
    <div class="form-group">
        <div class="col-lg-1">
            <a class="megamenu-correct-module btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_admin']->value;?>
&success=correct&correctmodule=1">
                <i class="icon-AdminParentPreferences"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Correct module','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>

            </a>
        </div>
        <div class="control-label col-lg-11" style="text-align: left">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make module work well with current Prestashop Version (fix database and old bug of module).','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</div>
        <div class="control-label col-lg-11" style="text-align: left">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please backup the database before run correct module to safe','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</div>
    </div>
</div>

<div id="leoproductsearch-group">
    <div class="panel panel-default">
        <div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leo Product Search Global Config','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</div>
        <div class="panel-content" id="leoquicklogin-setting">		
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
            </div>
        </div>	
    </div>
</div><?php }
}
