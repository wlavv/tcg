<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:25
  from 'module:leoquickloginviewstemplatesfrontmodal_social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78814f16c4_20060010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac2b96abad42fdbadb6bbb1c96293f5f8a25c45' => 
    array (
      0 => 'module:leoquickloginviewstemplatesfrontmodal_social.tpl',
      1 => 1676038718,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d78814f16c4_20060010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal lql-social-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h5 class="modal-title lql-social-modal-mesg lql-social-loading">
				<span class="leoquicklogin-cssload-speeding-wheel"></span>
			</h5>
			<h5 class="modal-title lql-social-modal-mesg error-email">
				<i class="material-icons">&#xE033;</i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Can not login without email!','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
			<h5 class="modal-title lql-social-modal-mesg error-email">				
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please check your social account and give the permission to use your email info','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
			<h5 class="modal-title lql-social-modal-mesg error-login">
				<i class="material-icons">&#xE033;</i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Can not login!','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
			<h5 class="modal-title lql-social-modal-mesg error-login">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please contact with us or try to login with another way','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
			<h5 class="modal-title lql-social-modal-mesg success">
				<i class="material-icons">&#xE876;</i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successful!','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
			<h5 class="modal-title lql-social-modal-mesg success">			
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks for logging in','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>

			</h5>
		  </div>
		  
		  		 
		</div>
	  </div>
	
</div><?php }
}
