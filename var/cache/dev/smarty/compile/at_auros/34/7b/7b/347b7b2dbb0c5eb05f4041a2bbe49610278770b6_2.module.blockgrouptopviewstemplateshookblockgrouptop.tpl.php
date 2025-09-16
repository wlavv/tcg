<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from 'module:blockgrouptopviewstemplateshookblockgrouptop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769bcaf69_59121012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347b7b2dbb0c5eb05f4041a2bbe49610278770b6' => 
    array (
      0 => 'module:blockgrouptopviewstemplateshookblockgrouptop.tpl',
      1 => 1749910614,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769bcaf69_59121012 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/playfunc/prod/tcg/themes/at_auros/modules/blockgrouptop/views/templates/hook/blockgrouptop.tpl -->
<!-- Block languages module -->
<div id="leo_block_top" class="popup-over e-scale float-md-right">
    <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title">
    	<i class="icon-Ico_User icons"></i>
    </a>	    
	<div class="popup-content">
		<div class="row">
			<div class="col-xs-6">
				<div class="language-selector">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					<ul class="link">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				          	<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
				            	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item">
				            		<img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_lang_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_prefixVariable1,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" />
				            	</a>
				          	</li>
				        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
				<div class="currency-selector">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					<ul class="link">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
				        	<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
				          		<a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</a>
				        	</li>
				      	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
			<div class="col-xs-6">
				<?php if ($_smarty_tpl->tpl_vars['enable_userinfo']->value == 1) {?>
					<div class="useinfo-selector">
						<ul class="user-info">
						<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
						<li>
						  <a
							class="account" 
							href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
							title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
							rel="nofollow"
						  >
						  	<i class="material-icons">&#xE853;</i>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
						  </a>
						</li>
						<li>
						  <a
							class="logout"
							href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
							rel="nofollow"
						  >
						  	<i class="material-icons">&#xE853;</i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						  </a>
						</li>
						<?php } else { ?>
							<?php if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {?>
								<li>
									<a
										class="signin leo-quicklogin"
										data-enable-sociallogin="enable"
										data-type="popup"
										data-layout="login"
										href="javascript:void(0)"
										title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
										rel="nofollow"
									  >
										<i class="material-icons">&#xE88D;</i>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
									  </a>
								</li>
								<?php } else { ?>
								<li>
									<a
									class="signin"
									href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
									title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
									rel="nofollow"
									>
										<i class="material-icons">&#xE88D;</i>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</a>
								</li>
								<li>
									<a
									href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" 
									title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
									rel="nofollow"
									>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</a>
								</li>
							<?php }?>
						<?php }?>
						<li>
						<a
						  class="myacount"
						  href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
						  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
						  rel="nofollow"
						>
							<i class="material-icons">&#xE8A6;</i>
						  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
						</a>
						</li>
						<li>
						<a
						  class="checkout"
			          href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl ) );?>
"
						  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
						  rel="nofollow"
						>
						  <i class="material-icons">&#xE890;</i>
						  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
						</a>
						</li>
						<li>
				      <a
				        class="ap-btn-wishlist dropdown-item"
				        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
"
				        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
				        rel="nofollow"
				      >
				      	<i class="material-icons">&#xE87E;</i>
				        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
						<span class="ap-total-wishlist ap-total"></span>
				      </a>
				    </li>
					<li>
				      <a
				        class="ap-btn-compare dropdown-item"
				        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl ) );?>
"
				        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
				        rel="nofollow"
				      >
				      	<i class="material-icons">&#xE3B9;</i>
				        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
						<span class="ap-total-compare ap-total"></span>
				      </a>
				    </li>
						</ul>
					</div>
			<?php }?>
			</div>
		</div>
		
	</div>
</div>

<!-- /Block languages module -->
<!-- end /home/playfunc/prod/tcg/themes/at_auros/modules/blockgrouptop/views/templates/hook/blockgrouptop.tpl --><?php }
}
