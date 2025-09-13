<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7895b6c9e8_84462749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e583d4a707fb95b41724dd8edb6c32b12ea22a' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-variants.tpl',
      1 => 1667899322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7895b6c9e8_84462749 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-variants js-product-variants">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
    

    
    <div class="clearfix product-variants-item">
      <span class="control-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['name']), ENT_QUOTES, 'UTF-8');?>

               </span>
      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
        <select
          class="form-control form-control-select"
          id="group_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
"
          aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
          data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
"
          name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
        <ul id="group_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <li class="float-xs-left input-container">
              <label aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
                <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span
                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>
                    class="color texture" style="background-image: url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']), ENT_QUOTES, 'UTF-8');?>
)"
                  <?php } elseif ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>
                    class="color" style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']), ENT_QUOTES, 'UTF-8');?>
"
                  <?php }?>
                ><span class="attribute-name sr-only"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span></span>
              </label>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
        <ul id="group_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <li class="input-container float-xs-left">
              <label>
                <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute_group']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['id_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span class="radio-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['group_attribute']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
              </label>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
