<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:33:39
  from '/home/playfunc/tcg/modules/leoquicklogin/views/templates/admin/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685539030d95b3_97082970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba685cfbca86bf20b75e28cda8fb69fb54f2c78' => 
    array (
      0 => '/home/playfunc/tcg/modules/leoquicklogin/views/templates/admin/panel.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685539030d95b3_97082970 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel form-horizontal">
	<div class="form-group">					
		<div class="col-lg-1">
			<a class="megamenu-correct-module btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_admin']->value;?>
&success=correct&correctmodule=1">
				<i class="icon-AdminParentPreferences"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Correct module','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</a>
		</div>
		<label class="control-label col-lg-5" style="text-align: left;">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please backup the database before correct module','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</label>							
	</div>
</div>


<div id="leoquicklogin-group">

	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leo Quick Login Global Config','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</div>
		
		<div class="panel-content" id="leoquicklogin-setting">
			<ul class="nav nav-tabs leoquicklogin-tablist" role="tablist">
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_0') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_1_1') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Social Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
				</li>
				
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
			</div>
		</div>	

	</div>
		
</div><?php }
}
