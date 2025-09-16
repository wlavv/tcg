<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769ce5a29_24159768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1749910614,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769ce5a29_24159768 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/playfunc/prod/tcg/themes/at_auros/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div id="blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" class="block_newsletter block">
  <h3 class="title_block" id="block-newsletter-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter signup','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
  <div class="block_content">
    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
      <div class="row">
        <div class="col-xs-12 col-conditions">
            <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
              <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        </div>
        <div class="col-xs-12 col-form">
          <div class="input-wrapper">
            <input
              name="email" required
              type="text"
              value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email...','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              aria-labelledby="block-newsletter-label"
            >
            <button
              class="btn btn-outline float-xs-right"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
              <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SUBSCRIBE','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            </button>
          </div>
          <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" /> 
	  <input type="hidden" name="action" value="0">
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-12 col-mesg">
          <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
            <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

            </p>
          <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

              <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- end /home/playfunc/prod/tcg/themes/at_auros/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
