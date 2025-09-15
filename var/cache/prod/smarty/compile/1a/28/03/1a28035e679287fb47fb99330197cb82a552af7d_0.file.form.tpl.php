<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:48:27
  from '/home/playfunc/tcg/modules/leoslideshow/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552e6b7bcd52_92340949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a28035e679287fb47fb99330197cb82a552af7d' => 
    array (
      0 => '/home/playfunc/tcg/modules/leoslideshow/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1749910613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68552e6b7bcd52_92340949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132206140268552e6b761da6_31478401', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_132206140268552e6b761da6_31478401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_132206140268552e6b761da6_31478401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?>">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                    <?php }?>
                    <div class="col-lg-9">
                        <div class="upload-img-form">
                            <img id="thumb_slider_thumbnail_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" width="50" class="<?php if (!$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?>nullimg<?php }?>" alt="" src="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {
if (!strstr($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'/')) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psBaseModuleUri']->value,'html','UTF-8' ));
}
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));
}?>"/>
                            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" class="hide" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
" />
                            <br>
                            <a onclick="image_upload('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
', 'thumb_slider_thumbnail_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
');" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Browse','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a onclick="$('#thumb_slider_thumbnail_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
').attr('src', '');$('#thumb_slider_thumbnail_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
').addClass('nullimg'); $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
').attr('value', '');" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                        </div>
                        <br/>
                    </div>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                                    <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'] ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
                <?php echo '<script'; ?>
>
                    $(document).ready(function() {
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-selectbutton').click(function(e) {
                            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
').trigger('click');
                        });
                        $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
').change(function(e) {
                            var val = $(this).val();
                            var file = val.split(/[\\/]/);
                            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name').val(file[file.length - 1]);
                        });
                    });
                <?php echo '</script'; ?>
>
                <input id="slider-image_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="hidden" name="image_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" class="hide bg-img" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value["image"][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
" />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group_background') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?>">
            <div class="upload-img-form">
               <img id="img_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
" width="50" class="<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));
$_prefixVariable1 = ob_get_clean();
if (!$_prefixVariable1) {?>nullimg<?php }?>" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group Back-ground','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" src="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psBaseModuleUri']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));
}?>"/>
               <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
" type="hidden" name="group[background_url]" class="hide" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
               <br>
               <a onclick="background_upload('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
', 'img_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
','<?php echo $_smarty_tpl->tpl_vars['ajaxfilelink']->value;?>
', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psBaseModuleUri']->value,'html','UTF-8' ));?>
');" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Browse','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;
               <a onclick="$('#img_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
').attr('src', '');$('#img_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
').addClass('nullimg'); $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'] ));?>
').attr('value', '');" href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
           </div>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to upload or select a back-ground','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</p>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group_button' && $_smarty_tpl->tpl_vars['input']->value['id_group']) {?>
        <div class="form-group">
            <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?> col-lg-offset-3">
                <div class="btn-group pull-right">
                    <a class="btn btn-default <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>dropdown-toggle <?php } else { ?>group-preview <?php }?>color_danger" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previewLink']->value,'html','UTF-8' ));?>
&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id_group'] ));?>
"><i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview Group','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    
                    <span data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                        <span class="caret"></span>&nbsp;
                    </span>
                    <ul class="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <li>
                            <?php $_smarty_tpl->_assignInScope('arrayParam', array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id_group'] ))));?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('leoslideshow','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] )));?>
" class="group-preview">
                                <i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview For','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8' ));?>

                            </a>
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php }?>
                </div>
                
                <button class="btn btn-default dash_trend_right" name="submitGroup" id="module_form_submit_btn" type="submit">
                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                </button>
                <a class="btn btn-default color_success" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&showsliders=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id_group'] ));?>
"><i class="icon-film"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manages Sliders','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&&exportGroup=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id_group'] ));?>
"><i class="icon-eye-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group and sliders','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leoslideshow&deletegroup=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id_group'] ));?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Group?','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
')) {
                            return true;
                        } else {
                            event.stopPropagation();
                            event.preventDefault();
                        }
                        ;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
" class="delete">
                    <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                </a>
            </div>
        </div>


    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'slider_button') {?>
        <div class="form-group">
            <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?> col-lg-offset-3">
                <a class="btn btn-default dash_trend_right" href="javascript:void(0)" onclick="return $('#module_form').submit();"><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Slider','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'sperator_form') {?>
        <div class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));
} else { ?>alert alert-info<?php }?>" 
             <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['name']))) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"<?php }?>
             nextClick="false"><?php echo $_smarty_tpl->tpl_vars['input']->value['text'];?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'video_config') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?>">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                    <?php }?>
                    <div class="col-lg-9">
                        <div class="radiolabel">
                            <lable><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Type','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</lable>
                            <select name="usevideo_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" class="">
                                <option <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == "0") {?>selected="selected"<?php }?> value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                <option <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == "youtube") {?>selected="selected"<?php }?> value="youtube"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                <option <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] && $_smarty_tpl->tpl_vars['fields_value']->value["usevideo"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == "vimeo") {?>selected="selected"<?php }?> value="vimeo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>
                        <div class="radiolabel">
                            <lable><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video ID','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</lable>
                            <input id="videoid_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" name="videoid_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="text" <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["videoid"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["videoid"][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?> value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value["videoid"][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
"<?php }?>/>
                            <div class="input-group col-lg-2">
                            </div>
                            <div class="input-group col-lg-2">
                                <lable><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Auto Play','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</lable>
                                <select name="videoauto_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
">
                                    <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["videoauto"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["videoauto"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == 1) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                    <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value["videoauto"][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value["videoauto"][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == 0) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                                    <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'] ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
        </div>
        </div>
        <input type="hidden" id="current_language" name="current_language" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_language']->value,'html','UTF-8' ));?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'col_width') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?>">
            <input type='hidden' class="col-val <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));?>
" name='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
' value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
'/>
            <button type="button" class="btn btn-default leobtn-width dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                <span class="leo-width-val"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'-','.');?>
/12</span><span class="leo-width leo-w-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"> </span><span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_width']->value, 'itemWidth');
$_smarty_tpl->tpl_vars['itemWidth']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->do_else = false;
?>
                <li>
                    <a class="leo-w-option" data-width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value ));?>
" href="javascript:void(0);" tabindex="-1">                                          
                        <span class="leo-width-val"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'-','.');?>
/12</span><span class="leo-width leo-w-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value ));?>
"> </span>
                    </a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group_class') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?>">
            <div class="well">
                <p> 
                    <input type="text" class="group-class" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"/><br />
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'insert new or select classes for toggling content across viewport breakpoints','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
<br />
                    <ul class="leo-col-class">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hidden_config']->value, 'itemHidden', false, 'keyHidden');
$_smarty_tpl->tpl_vars['itemHidden']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyHidden']->value => $_smarty_tpl->tpl_vars['itemHidden']->value) {
$_smarty_tpl->tpl_vars['itemHidden']->do_else = false;
?>
                        <li>
                                                        <input type="radio"<?php if (strpos($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],$_smarty_tpl->tpl_vars['keyHidden']->value) !== false) {?> checked="checked"<?php }?> data-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyHidden']->value,'html','UTF-8' ));?>
" name="col_class" value="1">
                            <label class="choise-class"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemHidden']->value,'html','UTF-8' ));?>
</label>
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </p>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color_lang') {?>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                            <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                    <?php }?>
                            <div class="col-lg-6">
                                <div class="col-md-4">
                                    <a href="javascript:void(0)" class="btn btn-default btn-update-slider">
                                                <i class="icon-upload"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select slider background','mod'=>'leoslideshow'),$_smarty_tpl ) );?>

                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                            <input type="color"
                                            data-hex="true"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?>class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));?>
"
                                            <?php } else { ?>class="color mColorPickerInput"<?php }?>
                                            name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
"
                                            value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
                                    </div>
                                </div>
                            </div>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                            <div class="col-lg-2">
                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                            <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
                                            <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                                            <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'] ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                            </div>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                            </div>
                    <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'leo_switch') {?>
        <div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['col']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['col'] ));
} else {
if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>8<?php } else { ?>9<?php }
}?> <?php if (!(isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>col-lg-offset-3<?php }?>">
            <span class="switch prestashop-switch fixed-width-lg <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['class'],'html','UTF-8' ));
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_on"<?php } else { ?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/>
                <label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_on"<?php } else { ?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leoslideshow'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leoslideshow'),$_smarty_tpl ) );
}?></label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <a class="slide-button btn"></a>
            </span>
                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['leo_desc'])) && !empty($_smarty_tpl->tpl_vars['input']->value['leo_desc'])) {?>
                    <p class="help-block">
                        <?php if (is_array($_smarty_tpl->tpl_vars['input']->value['leo_desc'])) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['leo_desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                <?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
                                    <span id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['input']->value['leo_desc'];?>
                        <?php }?>
                    </p>
                <?php }?>
        </div>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
