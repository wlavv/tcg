<?php
/* Smarty version 4.3.4, created on 2025-09-15 22:38:49
  from 'module:leoquickloginviewstemplatesfrontmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68c88769e3f250_37989770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0153dba508ba33b8497625ce148519b6db90fcee' => 
    array (
      0 => 'module:leoquickloginviewstemplatesfrontmodal.tpl',
      1 => 1749910613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c88769e3f250_37989770 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/playfunc/prod/tcg/modules/leoquicklogin/views/templates/front/modal.tpl -->
<div class="modal leo-quicklogin-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
            </div> 
            <div class="modal-footer"></div>
        </div>
    </div>
</div><!-- end /home/playfunc/prod/tcg/modules/leoquicklogin/views/templates/front/modal.tpl --><?php }
}
