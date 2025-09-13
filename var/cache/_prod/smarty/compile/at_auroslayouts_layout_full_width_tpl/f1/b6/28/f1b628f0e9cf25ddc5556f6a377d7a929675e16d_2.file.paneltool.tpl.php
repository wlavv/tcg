<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/info/paneltool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7881452669_67898332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b628f0e9cf25ddc5556f6a377d7a929675e16d' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/info/paneltool.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7881452669_67898332 (Smarty_Internal_Template $_smarty_tpl) {
if (class_exists("LeoFrameworkHelper")) {
$_smarty_tpl->_assignInScope('skins', LeoFrameworkHelper::getSkins($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));
$_smarty_tpl->_assignInScope('header_styles', LeoFrameworkHelper::getPanelConfigByTheme('header',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));
$_smarty_tpl->_assignInScope('sidebarmenu', LeoFrameworkHelper::getPanelConfigByTheme('sidebarmenu',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));
$_smarty_tpl->_assignInScope('theme_customizations', LeoFrameworkHelper::getLayoutSettingByTheme($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));?>
<div id="leo-paneltool" class="hidden-md-down" data-cname="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['LEO_COOKIE_THEME']->value), ENT_QUOTES, 'UTF-8');?>
">
	<?php if ((isset($_smarty_tpl->tpl_vars['list_productdetail_layout']->value)) && count($_smarty_tpl->tpl_vars['list_productdetail_layout']->value) > 1) {?>
	<div class="paneltool multiproductdetailtool">
		<div class="panelbutton">
			<i class="fa fa-cog"></i>
		</div>
		<div class="panelcontent block-multiproductdetailtool">
			<div class="panelinner">
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Multi Layout','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-12">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_productdetail_layout']->value, 'list_productdetail_layout_item');
$_smarty_tpl->tpl_vars['list_productdetail_layout_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list_productdetail_layout_item']->value) {
$_smarty_tpl->tpl_vars['list_productdetail_layout_item']->do_else = false;
?>        
						<a class="product-detail-demo<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productLayout'])) && $_smarty_tpl->tpl_vars['product']->value['productLayout'] != '' && $_smarty_tpl->tpl_vars['product']->value['productLayout'] == $_smarty_tpl->tpl_vars['list_productdetail_layout_item']->value['plist_key']) {?> active<?php }?>" data-product-detail-key=<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['list_productdetail_layout_item']->value['plist_key']), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['list_productdetail_layout_item']->value['product_layout_link']), ENT_QUOTES, 'UTF-8');?>
">
							<span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['list_productdetail_layout_item']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
							
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['skins']->value || $_smarty_tpl->tpl_vars['header_styles']->value || $_smarty_tpl->tpl_vars['theme_customizations']->value || $_smarty_tpl->tpl_vars['sidebarmenu']->value) {?>
		<div class="paneltool themetool">
			<div class="panelbutton">
				<i class="fa fa-sliders"></i>
			</div>
			<div class="block-panelcontent">
				<div class="panelcontent">
					<div class="panelinner">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Panel Tool','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
						<!-- Theme layout mod section -->
												<!-- Theme skin section --> 
						<?php if ($_smarty_tpl->tpl_vars['skins']->value) {?>
							<div class="group-input clearfix">
								<label class="col-sm-12 control-label"><span class="fa fa-pencil"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
								<div class="col-sm-12">
									<div data-theme-skin-id="default" class="skin-default leo-dynamic-theme-skin<?php if ($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value == 'default') {?> current-theme-skin<?php }?>">
										<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
									</div>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skins']->value, 'skin');
$_smarty_tpl->tpl_vars['skin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
$_smarty_tpl->tpl_vars['skin']->do_else = false;
?>
										<div data-theme-skin-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-theme-skin-css="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['css']), ENT_QUOTES, 'UTF-8');?>
" data-theme-skin-rtl="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['rtl']), ENT_QUOTES, 'UTF-8');?>
" class="leo-dynamic-theme-skin<?php if ((isset($_smarty_tpl->tpl_vars['skin']->value['icon'])) && $_smarty_tpl->tpl_vars['skin']->value['icon']) {?> theme-skin-type-image<?php }
if ($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value == $_smarty_tpl->tpl_vars['skin']->value['id']) {?> current-theme-skin<?php }?>">
											<?php if ((isset($_smarty_tpl->tpl_vars['skin']->value['icon'])) && $_smarty_tpl->tpl_vars['skin']->value['icon']) {?>
												<img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['icon']), ENT_QUOTES, 'UTF-8');?>
" width="20" height="20" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['name']), ENT_QUOTES, 'UTF-8');?>
" />
											<?php } else { ?>
												<label><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['skin']->value['name']), ENT_QUOTES, 'UTF-8');?>
</label>
											<?php }?>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						<?php }?> 
						<!-- Float Header -->
						<div class="group-input clearfix">
							<label class="col-sm-12 control-label"><span class="fa fa-credit-card"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Float Header','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
							<div class="col-sm-12">
								<div class="btn_enable_fheader">
									<span class="enable_fheader btn_yes <?php if ($_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="1">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
									</span>
									<span class="enable_fheader btn_no <?php if (!$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="0">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
									</span>
								</div>
							</div>
						</div>
						<!-- Show Profile -->
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"profile"),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"header"),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"footer"),$_smarty_tpl ) );?>

											</div>
				</div>
			</div>
		</div>
	<?php }?>
	<!-- Live Theme Editor -->

	<div class="paneltool editortool">
		<div class="panelbutton">
			<i class="fa fa-adjust"></i>
		</div>
		<div class="panelcontent editortool">
			<div class="panelinner">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Theme Editor','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
				<?php $_smarty_tpl->_assignInScope('xmlselectors', LeoFrameworkHelper::renderEdtiorThemeForm($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));?>
				<?php $_smarty_tpl->_assignInScope('patterns', LeoFrameworkHelper::getPattern($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));?>
				<div class="clearfix" id="customize-body">
					<ul class="nav nav-tabs nav-pills" id="panelTab">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xmlselectors']->value, 'output', false, 'for');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['for']->value => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
							<li class="nav-item"><a class="nav-link" href="#tab-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['for']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['for']->value), ENT_QUOTES, 'UTF-8');?>
</a></li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<div class="tab-content">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xmlselectors']->value, 'items', false, 'for');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['for']->value => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
							<div class="tab-pane" id="tab-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['for']->value), ENT_QUOTES, 'UTF-8');?>
">
								<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
									<div class="accordion" id="accordion-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['for']->value), ENT_QUOTES, 'UTF-8');?>
">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'group');
$_smarty_tpl->tpl_vars['group']->iteration = 0;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->iteration++;
$__foreach_group_26_saved = $_smarty_tpl->tpl_vars['group'];
?>
											<div class="accordion-group card panel panel-default">
												<div class="accordion-heading card-header panel-heading">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['for']->value), ENT_QUOTES, 'UTF-8');?>
" href="#collapse<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
">
														<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['header']), ENT_QUOTES, 'UTF-8');?>

													</a>
												</div>
												<div id="collapse<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
" class="accordion-body panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['group']->iteration == 1) {?> in<?php }?>">
													<div class="accordion-inner card-block panel-body clearfix">
                                                                                                                <?php $_smarty_tpl->_assignInScope('fonts', $_smarty_tpl->tpl_vars['apPageHelper']->value->getFontFamily());?>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['selector'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
															<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['type'])) && $_smarty_tpl->tpl_vars['item']->value['type'] == "image") {?>
																<div class="form-group background-images cleafix">
																	<label><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['label']), ENT_QUOTES, 'UTF-8');?>
</label>
																	<input value="" type="hidden" name="customize[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
" class="input-setting" data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-attrs="background-image">
																	<a class="clear-bg d-inline bg-success" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
																	<div class="clearfix"></div>
																	<p><em style="font-size:10px"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Those Images in folder YOURTHEME/assets/img/patterns/','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</em></p>
																	<div class="bi-wrapper clearfix">
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patterns']->value, 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
																			<div style="background:url('<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['pattern']->value['img_url']), ENT_QUOTES, 'UTF-8');?>
') no-repeat center center;" class="pull-left" data-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['pattern']->value['img_url']), ENT_QUOTES, 'UTF-8');?>
" data-val="../../img/patterns/<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['pattern']->value['img_name']), ENT_QUOTES, 'UTF-8');?>
"></div>
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																	</div>
																	<ul class="bg-config">
																		<li>
																			<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
																			<select class="form-control" data-attrs="background-attachment" name="customize[body][]" data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option>
																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['attachment'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
																					<option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['attachment']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['attachment']->value), ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																			</select>
																		</li>
																		<li>
																			<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
																			<select class="form-control" data-attrs="background-position" name="customize[body][]" data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option>
																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['position'], 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
																					<option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['position']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['position']->value), ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																			</select>
																		</li>
																		<li>
																			<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Repeat','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
																			<select class="form-control" data-attrs="background-repeat" name="customize[body][]" data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option>
																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['repeat'], 'repeat');
$_smarty_tpl->tpl_vars['repeat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['repeat']->value) {
$_smarty_tpl->tpl_vars['repeat']->do_else = false;
?>
																					<option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['repeat']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['repeat']->value), ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																			</select>
																		</li>
																	</ul>
																</div>
															<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "fontsize") {?>
																<div class="form-group cleafix">
																	<label><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['label']), ENT_QUOTES, 'UTF-8');?>
</label>
																	<select class="form-control input-setting" name="customize[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
"  data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['attrs']), ENT_QUOTES, 'UTF-8');?>
">
																		<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inherit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</option>
																		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
																			<option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value), ENT_QUOTES, 'UTF-8');?>
</option>
																		<?php }
}
?>
																	</select>
																	<a href="#" class="clear-bg d-inline bg-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
																</div>
                                                                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "fontfamily") {?>
                                                                                                                            <div class="form-group cleafix">
                                                                                                                                <label><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</label>
                                                                                                                                <select name="customize[<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="input-setting" data-selector="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['attrs'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
                                                                                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fonts']->value, 'font_item', false, 'font_key');
$_smarty_tpl->tpl_vars['font_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font_key']->value => $_smarty_tpl->tpl_vars['font_item']->value) {
$_smarty_tpl->tpl_vars['font_item']->do_else = false;
?>
                                                                                                                                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['font_item']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['font_item']->value['name']) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['font_item']->value['name']), ENT_QUOTES, 'UTF-8');
} else { ?>&nbsp;<?php }?></option>
                                                                                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                                                                </select>
                                                                                                                                <a href="#" class="clear-bg d-inline bg-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                                                                                                                            </div>
															<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == "subtitle") {?>
																<div class="form-group cleafix">
																	<label class="subtitle"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['content']), ENT_QUOTES, 'UTF-8');?>
</label>	
																</div>
															<?php } else { ?>
																<div class="form-group cleafix">
																	<label><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['label']), ENT_QUOTES, 'UTF-8');?>
</label>
																	<input value="" size="10" name="customize[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['match']), ENT_QUOTES, 'UTF-8');?>
" type="text" class="input-setting" data-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['selector']), ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['item']->value['attrs']), ENT_QUOTES, 'UTF-8');?>
"><a href="#" class="clear-bg d-inline bg-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
																</div>
															<?php }?>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</div>
												</div>
											</div>
										<?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								<?php }?>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
		<div class="panelbutton label-customize"></div>
	</div>

</div>
<?php }
}
}
