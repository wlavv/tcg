<?php
/* Smarty version 4.3.4, created on 2025-06-22 23:46:37
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/categoryExtra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685887cd163295_55219104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a99e2072d5d4efd1e47831fb847f10f9c0dca525' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/categoryExtra.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685887cd163295_55219104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="form-group row" id="leoCategoryExtra">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Type','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Type','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

        </span>
      </label>
    <div class="col-lg-9">

    <select id="aplayout" name="aplayout" class="custom-select">
        <option value="default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_layouts']->value, 'aplayout');
$_smarty_tpl->tpl_vars['aplayout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aplayout']->value) {
$_smarty_tpl->tpl_vars['aplayout']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['aplayout']->value['plist_key'];?>
" <?php if ($_smarty_tpl->tpl_vars['aplayout']->value['plist_key'] == $_smarty_tpl->tpl_vars['current_layout']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['aplayout']->value['name'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <br/>
    <div class="alert alert-info" role="alert">
        <p class="alert-text">
          1. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create layout file in Ap PageBuilder > Ap product list builder','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br>
          2. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use code $category.categorylayout to get layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br>
          3. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Example code download in','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <a href="https://github.com/ApolloTheme/appagebuilderlayout/blob/master/YOURTHEMENAME/templates/catalog/listing/category.tpl" title="example"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
          <br>
        </p>
      </div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apextras']->value, 'apextrav', false, 'apextrak');
$_smarty_tpl->tpl_vars['apextrav']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['apextrak']->value => $_smarty_tpl->tpl_vars['apextrav']->value) {
$_smarty_tpl->tpl_vars['apextrav']->do_else = false;
?>

       <label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
</label>
       <div class="col-lg-9">
          <div class="form-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                <div class="row">
                  <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['id_lang_default']->value) {?>style="display:none"<?php }?>>
                    <div class="col-lg-9">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['apextrav']->value == 'varchar(255)') {?>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="text"  name="<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" value="<?php if ($_smarty_tpl->tpl_vars['data_fields']->value) {
echo $_smarty_tpl->tpl_vars['data_fields']->value[$_smarty_tpl->tpl_vars['apextrak']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']];
}?>"/>
                <?php } else { ?>
                    <textarea name="<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" rows="2" class="textarea-autosize"><?php if ($_smarty_tpl->tpl_vars['data_fields']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data_fields']->value[$_smarty_tpl->tpl_vars['apextrak']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']] ));
}?></textarea>
                <?php }?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
            </div>
            <div class="col-lg-2">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
        </div>
        <?php }?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          <p class="alert-text">Use $category.<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
 to get value in category.tpl file</p> 
        </div>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        if($('#category_form .form-wrapper').length)
        {
            $("#leoCategoryExtra").hide();
            $("#leoCategoryExtra").appendTo('#category_form .form-wrapper');
            $("#leoCategoryExtra").show();
        }
        
        if($('form[name="category"] .card-text').length)
        {
            $("#leoCategoryExtra").hide();
            $("#leoCategoryExtra").appendTo('form[name="category"] .card-text');
            $("#leoCategoryExtra").show();
        }
        if($('form[name="root_category"] .card-text').length)
        {
            $("#leoCategoryExtra").hide();
            $("#leoCategoryExtra").appendTo('form[name="root_category"] .card-text');
            $("#leoCategoryExtra").show();
        }
        if($('.admincategories .form-wrapper').length)
        {
            $("#leoCategoryExtra").hide();
            $("#leoCategoryExtra").appendTo('.admincategories .form-wrapper');
            $("#leoCategoryExtra").show();
        }

    });
<?php echo '</script'; ?>
><?php }
}
