<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:33:06
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_hook/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7a12144a92_30196820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca3c8b9f29f1f681cdac1397c32f9be957bdb691' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/admin/ap_page_builder_hook/panel.tpl',
      1 => 1703924426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7a12144a92_30196820 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showed']->value == true) {?>
 <div id="leo-page" class="clearfix">
	
	<div class="note">

		<p>+ <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop modules from hooks layouts to "<b>UnHook Modules</b>" Panel to unhook them','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag and drop modules from hooks layouts to update theirs order and hook position','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		<p>+  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Override hook feature only applies for <b>HOOK_HEADERRIGHT, HOOK_SLIDESHOW, HOOK_TOPNAVIATION, HOOK_SLIDESHOW, HOOK_PROMOTETOP, HOOK_CONTENTBOTTOM, HOOK_BOTTOM</b>','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		<p>+ <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here only shows all of installed modules having hooks supportting for LeoTheme Layout.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

	</div>	
	<div class="leo-container holdposition" id="noposition">
		<div class="pos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UnHook Modules','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 </div>
		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, NULL, 'leotempcp', array (
));
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
			<div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->id,'html','UTF-8' ));?>
">
				<a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
"></a>
				<div class="leo-editmodule" rel="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->author,'html','UTF-8' ));?>
">
				<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
/logo.png"/>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>

				</div>
			
			</div>
		 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
    <div class="leotheme-layout">
        <div id="leo-header">
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNav1"><div class="pos">HOOK_NAV1</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNav1'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayNav1']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayNav1']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
            
            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNav2"><div class="pos">HOOK_NAV2</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNav2'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayNav2']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayNav2']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
            
            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayTop"><div class="pos">HOOK_TOP</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayTop'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayTop']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayTop']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>

            
            <div id="leo-displaynav" class="leo-container overridehook" data-position="displayNavFullWidth"><div class="pos">HOOK_NAV_FULLWIDTH</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayNavFullWidth']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
		</div>
		
		
		<div id="leo-content" class="clearfix leo_top_25"  >
			<div id="leo-left" class="leo-container" data-position="displayLeftColumn"><div class="pos">HOOK_LEFT</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn']['module_count'] > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumn']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
				<div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
					<a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

					</div>
				</div>
				<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
            
            
			<div  id="leo-center" class="leo-container inner" data-position="displayHome" style="min-height:250px"><div class="pos">HOOK_HOME</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayHome'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayHome']['module_count'] > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayHome']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
				<div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
					<a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

					</div>
				</div>
				<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
			
			
			<div id="leo-right" class="leo-container" data-position="displayRightColumn"><div class="pos">HOOK_RIGHT</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn']['module_count'] > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumn']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
				<div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
					<a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

					</div>
				</div>
				<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
            
            
        <div id="leo-content" class="clearfix"  >
            <div id="leo-left" class="leo-container clearfix" data-position="displayLeftColumnProduct"><div class="pos">HOOK_PRODUCT_LEFT</div>
                <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct']['module_count'] > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayLeftColumnProduct']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?> 
                <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
                <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                    <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                    <div class="leo-editmodule">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                    </div>
                </div>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
			<div id="leo-center"></div>
			<div id="leo-right" class="leo-container" data-position="displayRightColumnProduct"><div class="pos">HOOK_PRODUCT_RIGHT</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct']['module_count'] > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayRightColumnProduct']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
				<div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
					<a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
					<div class="leo-editmodule">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

					</div>
				</div>
				<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
        </div>


		<div id="leo-bottom" class="leo-container overridehook clearfix leo_top_25" data-position="displayFooterBefore">
            <div class="pos">HOOK_FOOTER_BEFORE</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterBefore']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
		</div>

		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooter">
            <div class="pos">HOOK_FOOTER</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooter'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayFooter']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayFooter']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
		</div>

        
		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooterAfter">
            <div class="pos">HOOK_FOOTER_AFTER</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterAfter']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
		</div>
        
        
		<div id="leo-bottom" class="leo-container overridehook clearfix" data-position="displayFooterProduct">
            <div class="pos">HOOK_FOOTER_PRODUCT</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct'])) && $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct']['module_count'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookModules']->value['displayFooterProduct']['modules'], 'module', false, 'position');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['module']->value['instance']))) {?>
            <div class="module-pos" id="module-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->id,'html','UTF-8' ));?>
" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_hook'],'html','UTF-8' ));?>
">
                <a class="editmod" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleEditURL']->value,'html','UTF-8' ));?>
&module_name=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
&configure=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
" data-mod="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
"></a><div class="edithook"></div>
                <div class="leo-editmodule">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['URI']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'],'html','UTF-8' ));?>
/logo.png"/>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['instance']->displayName,'html','UTF-8' ));?>

                </div>
            </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
		</div>
        
        

		
 
	
		<div class="clearfix"></div>
</div>
<div id="overidehook" style="display:none">
	<div id="oh-close">Close</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['currentURL']->value;?>
&action=overridehook" method="post">
	<p class="clearfix"><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select override hook','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</lable><br>
	<select  name="name_hook">
		<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'--- Use Self Hook ---','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</option>

	</select>
	
	
	<input type="hidden" name="hdidmodule" id="hdidmodule" value=""/>
        <input type="hidden" name="deshook" id="deshook" value=""/>
	<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" name="submit" />
	</p>
	</form>
</div>	
<?php echo '<script'; ?>
 type="text/javascript">
$("#noposition").css("height",$(".leotheme-layout").height() );






// 2
$('#noposition.leo-container').sortable( {
    connectWith: ".leotheme-layout .leo-container",
    helper: function (e, li) {
        this.copyHelper = li.clone().insertAfter(li);
        $(this).data('copied', false);
        return li.clone();
    },
    stop: function () {
        var copied = $(this).data('copied');
        if (!copied) {
            this.copyHelper.remove();
        }
        this.copyHelper = null;
    }
});

$('.leotheme-layout .leo-container').sortable( {
    connectWith: "#noposition.leo-container, .leotheme-layout .leo-container",
    receive: function (e, ui) {
        ui.sender.data('copied', true);
    }
});


// 3



$(document).ready( function(){
    miniLeftMenu();
    //$('#leohook_toolbar').hide();
    $("#desc-leohook-save, #page-header-desc-leohook-save").click( function(){
        //var string = 'rand='+Math.random();
        var string = '';
        var hook = '';
        $(".leotheme-layout .ui-sortable").each( function(){
            if( $(this).attr("data-position") && $(".module-pos",this).length>0)
            {
                string +="&position[]="+$(this).attr("data-position")+"|";
                hook += "&"+$(this).attr("data-position")+"=";
                $(".module-pos",this).each( function(){
                    if( $(this).attr("id") != "" ){
                            string += $(this).attr("id").replace("module-","")+",";
                            hook += $(this).attr("data-position")+",";
                    }				
                } );
                string = string.replace(/\,$/,"");
                hook = hook.replace(/\,$/,"");
            }
        });
        var unhook = '';
        var arr_unhook = [];
        $("#noposition .module-pos").each( function(){
            var id_position = $(this).attr("data-position");
            var id_module = $(this).attr("id").replace("module-","");

            if( arr_unhook[ id_module ] )
            {
                // REMOVE MODULE AT MANY HOOK
                arr_unhook[ id_module ] += ',' + id_position;
            }else
            {
                arr_unhook[ id_module ] = id_position;
            }
            for( i=0; i < arr_unhook.length; i++)
            {
                if(arr_unhook[i])
                {
                  unhook += '&unhook['+i+']='+arr_unhook[i];
                }
            }
        });

        $.ajax({
          type: 'POST',
          url: $(this).attr("href") + "&updateleohook=1&ajax=1",
          data: string+"&"+hook+unhook,
          dataType: 'json',
          cache: false,
          success: function(json){
                if (json && json.hasError == true){
                    alert(json.errors);
                } else {
                    window.location.reload(true);
                }
            }
        });
        return false; 
    });
	
	$("#overidehook #oh-close").click( function() { $("#overidehook").hide(); } );
	$("#overidehook form").submit( function(){
            var string  =  $("#overidehook form").serialize();
            if( $("#overidehook #hdidmodule").val() ){
                $.ajax({
                    type:'POST',
                    url:$(this).attr("action") + "&updateleohook=1&ajax=1",
                    data:string,
                    dataType: 'json',
                    cache: false,
                    success: function( json ){
                        if (json && json.hasError == true){
                            alert(json.errors);
                        }else{
                            $("#overidehook").hide();
                        }
                    } 
                 });
            }
            return false; 
	});
} );	

$(".editmod").fancybox({
    'type':'iframe',
    'width':1024,
    'height':500,
    afterLoad:function()
    {
        if( $('body',$('.fancybox-iframe').contents()).find("#main").length  )
        {
            $('body',$('.fancybox-iframe').contents()).find("#header").hide();
            $('body',$('.fancybox-iframe').contents()).find("#footer").hide();
            $('body',$('.fancybox-iframe').contents()).find(".page-head, #nav-sidebar ").hide();
            $('body',$('.fancybox-iframe').contents()).find("#content.bootstrap").css( 'padding',0).css('margin',0);
        }else 
        { 
            $('body',$('.fancybox-iframe').contents()).find("#psException").html('<div class="alert error"> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['noModuleConfig']->value,'html','UTF-8' ));?>
</div>');
        }
    }
});
<?php echo '</script'; ?>
>
<?php }
}
}
