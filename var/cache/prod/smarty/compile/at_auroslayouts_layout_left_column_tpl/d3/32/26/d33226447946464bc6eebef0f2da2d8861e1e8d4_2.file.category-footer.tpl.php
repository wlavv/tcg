<?php
/* Smarty version 4.3.4, created on 2025-06-20 11:06:07
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6855328f1cfdc8_40275734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33226447946464bc6eebef0f2da2d8861e1e8d4' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/category-footer.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6855328f1cfdc8_40275734 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
