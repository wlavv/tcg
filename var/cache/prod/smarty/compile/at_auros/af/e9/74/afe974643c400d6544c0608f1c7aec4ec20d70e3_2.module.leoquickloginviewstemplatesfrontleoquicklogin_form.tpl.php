<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:48:04
  from 'module:leoquickloginviewstemplatesfrontleoquicklogin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552e544769c9_18806459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe974643c400d6544c0608f1c7aec4ec20d70e3' => 
    array (
      0 => 'module:leoquickloginviewstemplatesfrontleoquicklogin_form.tpl',
      1 => 1749910613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68552e544769c9_18806459 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="leo-quicklogin-form row<?php if ((isset($_smarty_tpl->tpl_vars['leo_form_type']->value)) && $_smarty_tpl->tpl_vars['leo_form_type']->value != '') {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leo_form_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ((isset($_smarty_tpl->tpl_vars['leo_navigation_style']->value)) && $_smarty_tpl->tpl_vars['leo_navigation_style']->value) {?>
		<ul class="lql-action<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> lql-active<?php } else { ?> lql-inactive<?php }?>">
			<li class="lql-action-bt">
				<p class="lql-bt lql-bt-login<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'login') {?> lql-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</p>
			</li>
			<li class="lql-action-bt">
				<p class="lql-bt lql-bt-register<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'register') {?> lql-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</p>
			</li>
		</ul>
	<?php }?>
	<div class="leo-form leo-login-form col-sm-<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?>6<?php } else { ?>12<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'login' || $_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?> leo-form-active<?php } else { ?> leo-form-inactive<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> full-width<?php }?>">
		<p class="leo-login-title h3">			
			<span class="title-both">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Existing Account Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</span>
		
			<span class="title-only">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login to your account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</span>		
		</p>
		<form class="lql-form-content leo-login-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-email-login" name="lql-email-login" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-pass-login" name="lql-pass-login" autocomplete="on" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
				<i class="fa fa-eye-slash"></i>
			</div>
			<div class="form-group row lql-form-content-element">				
				<div class="col-xs-6">
					<?php if ($_smarty_tpl->tpl_vars['leo_check_cookie']->value) {?>
						<input type="checkbox" class="lql-rememberme" name="lql-rememberme">
						<label class="form-control-label"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remember Me','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span></label>
					<?php }?>
				</div>				
				<div class="col-xs-6 text-sm-right">
					<a role="button" href="#" class="leoquicklogin-forgotpass"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>
			<div class="form-group text-right">
				<button type="submit" class="form-control-submit lql-form-bt lql-login-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

					</span>
				</button>
			</div>
			<div class="form-group lql-callregister">
				<a role="button" href="#" class="lql-callregister-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
			</div>
		</form>
		<div class="leo-resetpass-form">
			<p class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</p>
			<form class="lql-form-content leo-resetpass-form-content" action="#" method="post">
				<div class="form-group lql-form-mesg has-success">					
				</div>			
				<div class="form-group lql-form-mesg has-danger">					
				</div>
				<div class="form-group lql-form-content-element">
					<input type="email" class="form-control lql-email-reset" name="lql-email-reset" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
				</div>
				<div class="form-group">					
					<button type="submit" class="form-control-submit lql-form-bt leoquicklogin-reset-pass-bt btn btn-primary">			
						<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
						<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
						<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
						<span class="lql-bt-txt">					
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

						</span>
					</button>
				</div>
				
			</form>
		</div>
	</div>
	
	<div class="leo-form leo-register-form col-sm-<?php if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?>6<?php } else { ?>12<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value == 'register' || $_smarty_tpl->tpl_vars['leo_form_layout']->value == 'both') {?> leo-form-active<?php } else { ?> leo-form-inactive<?php }
if ($_smarty_tpl->tpl_vars['leo_form_layout']->value != 'both') {?> full-width<?php }?>">
		<p class="leo-register-title h3">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Account Register','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

		</p>
		<form class="lql-form-content leo-register-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<?php if ($_smarty_tpl->tpl_vars['leo_gender']->value) {?>
			<div class="form-group lql-form-content-element">
    			<div class="form-control-valign">
					<?php if ((isset($_smarty_tpl->tpl_vars['genders']->value)) && $_smarty_tpl->tpl_vars['genders']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
							<label class="form-control-label radio-inline">
			              		<span class="custom-radio">
			                		<input class="id_gender" name="id_gender" type="radio" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value['id_gender'], ENT_QUOTES, 'UTF-8');?>
">
			                		<span></span>
			              		</span>
		              			<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gender']->value['name'], ENT_QUOTES, 'UTF-8');?>

		            		</label>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<label class="form-control-label radio-inline">
		              		<span class="custom-radio">
		                		<input class="id_gender" name="id_gender" type="radio" value="1">
		                		<span></span>
		              		</span>
	              			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mr.','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

	            		</label>
	                    <label class="form-control-label radio-inline">
	             			<span class="custom-radio">
				                <input class="id_gender" name="id_gender" type="radio" value="2">
				                <span></span>
				            </span>
			              	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mrs.','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			            </label>
					<?php }?>
   		 		</div>
			</div>
			<?php }?>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-firstname" name="lql-register-firstname"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-lastname" name="lql-register-lastname" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-register-email" name="lql-register-email" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-register-pass" name="lql-register-pass" autocomplete="on" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['leo_captcha']->value)) && $_smarty_tpl->tpl_vars['leo_captcha']->value) {?>
				<div class="form-group lql-form-content-element">
					<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['captcha_url']->value, ENT_QUOTES, 'UTF-8');?>
">
					<input type="text" class="form-control lql-register-captcha" name="lql-register-captcha" required="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Captcha','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
">
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['leo_check_terms']->value) {?>
			<div class="form-group lql-form-content-element leo-form-chk">
				<label class="form-control-label">
		            <input type="checkbox" class="lql-register-check" name="lql-register-check">
		            <?php if ($_smarty_tpl->tpl_vars['url_gdpr']->value) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_gdpr']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms.','mod'=>'leoquicklogin'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['url_gdpr']->value) {?></a><?php }?> <span style="color:red">*</span>
		        </label>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['leo_newsletter']->value) {?>
			<div class="form-group lql-form-content-element">
				<label class="form-control-label">
		            <input class="newsletter" name="newsletter" type="checkbox" value="1">
		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

		        </label>
			</div>
			<?php }?>
			<div class="form-group text-right">				
				<button type="submit" name="submit" class="form-control-submit lql-form-bt lql-register-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an Account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

					</span>
				</button>
			</div>
			<div class="form-group lql-calllogin">
				<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</div>
				<a role="button" href="#" class="lql-calllogin-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

				<a role="button" href="#" class="lql-calllogin-action lql-callreset-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset password','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</a>
			</div>
		</form>
	</div>
</div>

<?php }
}
