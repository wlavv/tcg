<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApTabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d788442e980_72024266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a9deb8d358241bad977b19cbffaed9da468c9a' => 
    array (
      0 => '/home/playfunc/tcg/modules/appagebuilder/views/templates/hook/ApTabs.tpl',
      1 => 1703924428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d788442e980_72024266 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
<?php if ($_smarty_tpl->tpl_vars['tab_name']->value == 'ApTabs') {
echo '<script'; ?>
 type="text/javascript">
    ap_list_functions.push(function(){
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['fade_effect'])) && $_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) {?>
            // ACTION USE EFFECT
            $("#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("fade");
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_tab'] >= 0) {?>
            // ACTION SET ACTIVE
            $('#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 .nav a:eq(<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['active_tab'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
)').trigger('click');
        <?php }?>
    });
<?php echo '</script'; ?>
>
<div<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['id']))) {?> id="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ApTabs <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">

	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']), ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-dropdown') {?>
    <div class="dropdown tabs-dropdown-menu hidden-sm-up">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php $_smarty_tpl->_assignInScope('firstData', reset($_smarty_tpl->tpl_vars['subTabContent']->value));?>
        <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['firstData']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>

      </button>
      <div class="dropdown-menu" role="tablist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
            <a href="#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-toggle="tab">
                <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                    <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['image'])) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subTab']->value['title']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-left') {?>
        <div class="block_content">
            <ul class="nav nav-tabs col-md-3<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type']))) {
if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-accordion') {?> tabs-accordion<?php } elseif ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-dropdown') {?> tabs-dropdown hidden-xs-down<?php }
}?>" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
                    <li class="nav-item <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['subTab']->value['css_class'])) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-toggle="tab">
                            <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['image'])) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subTab']->value['title']), ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div class="tab-content col-md-9">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-right') {?>
        <div class="block_content">
            <div class="tab-content col-md-9">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
            <ul class="nav nav-tabs col-md-3<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type']))) {
if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-accordion') {?> tabs-accordion<?php } elseif ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-dropdown') {?> tabs-dropdown hidden-xs-down<?php }
}?>" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
                    <li class="nav-item <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['subTab']->value['css_class'])) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-toggle="tab">
                            <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['image'])) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subTab']->value['title']), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/><?php }?>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-below') {?>
        <div class="block_content">
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
            <ul class="nav nav-tabs<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type']))) {
if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-accordion') {?> tabs-accordion<?php } elseif ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-dropdown') {?> tabs-dropdown hidden-xs-down<?php }
}?>" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
                    <li class="nav-item <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['subTab']->value['css_class'])) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-toggle="tab">
                            <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['image'])) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subTab']->value['title']), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/><?php }?>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-top') {?>
        <div class="block_content">
            <ul class="nav nav-tabs<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type']))) {
if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-accordion') {?> tabs-accordion<?php } elseif ($_smarty_tpl->tpl_vars['formAtts']->value['tab_mobile_type'] == 'tabs-dropdown') {?> tabs-dropdown hidden-xs-down<?php }
}?>" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
                    <li class="nav-item <?php echo htmlspecialchars((string) ((isset($_smarty_tpl->tpl_vars['subTab']->value['css_class'])) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-toggle="tab">
                            <span><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title'])) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['subTab']->value['image'])) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subTab']->value['title']), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/><?php }?>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
        </div>
    <?php }?>


	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['tab_name']->value == 'ApTab') {?>
    <div id="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabID']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" class="tab-pane">
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    </div>
<?php }
}
}
