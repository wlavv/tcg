<?php
/* Smarty version 4.3.4, created on 2025-06-20 10:49:24
  from 'module:leoslideshowviewstemplatesfrontleoslideshow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68552ea46a4031_43835153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96019e77afe4ea89d894e025560cb48b7e294419' => 
    array (
      0 => 'module:leoslideshowviewstemplatesfrontleoslideshow.tpl',
      1 => 1749910613,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68552ea46a4031_43835153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('class_group', "iview-group-".((string)$_smarty_tpl->tpl_vars['rand_num']->value)."-".((string)$_smarty_tpl->tpl_vars['sliderParams']->value['id_leoslideshow_groups']));
if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'] == "boxed") {?>
	<div class="layerslider-wrapper<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['md_width'] ))) {?> col-md-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['md_width'] )), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-sm-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['sm_width'] )), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-xs-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['xs_width'] )), ENT_QUOTES, 'UTF-8');
}?>">
<?php }?>
<div class="bannercontainer banner-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" style="padding: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['padding'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;margin: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['margin'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;">
	<div class="iview <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
" style="height:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['height']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['height'] )), ENT_QUOTES, 'UTF-8');
} else { ?>780<?php }?>px">
		<?php if ($_smarty_tpl->tpl_vars['sliders']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider', false, 'k');
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['slider']->value['video']['active']) {?>
					<!-- SLIDE VIDEO BEGIN -->
					<div data-leo_image="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['thumbnail'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_type="video"
						data-leo_transition="strip-right-fade,strip-left-fade"
						data-leo_background="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['background_type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						data-autoplay="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['video']['videoauto'], ENT_QUOTES, 'UTF-8');?>
"
						data-videoid="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['video']['videoid'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<iframe src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['video']['videoURL'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?title=0&amp;byline=0&amp;portrait=0;api=1<?php if ($_smarty_tpl->tpl_vars['slider']->value['video']['videoauto']) {?>&autoplay=1&loop=1&mute<?php if ($_smarty_tpl->tpl_vars['slider']->value['video']['usevideo'] != 'youtube') {?>d<?php }?>=1<?php }?>" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen<?php if ($_smarty_tpl->tpl_vars['slider']->value['video']['videoauto']) {?> allow="autoplay"<?php }?>></iframe>
					</div>
					<!-- SLIDE VIDEO END -->
				<?php } else { ?>
					
					<!-- SLIDE IMAGE BEGIN -->
					<div class="slide_config <?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['data_link'])) && $_smarty_tpl->tpl_vars['slider']->value['data_link']) {?>data-link<?php }?>"
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['main_image'] != '') {?> data-leo_image="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['background_color'] != '') {?> data-leo_background_color="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['background_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>					
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['data_link'] != '') {?> data-link="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['data_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['data_target'] != '') {?> data-target="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['data_target'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						data-leo_pausetime="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['data_delay'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_thumbnail="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['thumbnail'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_background="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['background_type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"					
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['enable_custom_html_bullet']) {?>
						data-leo_bullet_description="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['bullet_description'], ENT_QUOTES, 'UTF-8');?>
"						data-leo_bullet_class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['bullet_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
						<?php }?>
						

						>
						
						<?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['layersparams']))) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value['layersparams'], 'layer');
$_smarty_tpl->tpl_vars['layer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->do_else = false;
?>
								
								<div class="tp-caption <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>data-link<?php }
if ($_smarty_tpl->tpl_vars['layer']->value['layer_class']) {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
									 data-x="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_left'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									 data-y="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_top'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									 data-transition="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_transition'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
									 <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>onclick="event.stopPropagation();window.open('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
','<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_target'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');"<?php }?>
									 <?php if ($_smarty_tpl->tpl_vars['layer']->value['css']) {?>style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['css'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>
									 >
									
									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type'] == "text") {?><!-- LAYER TEXT BEGIN -->
										<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layer']->value['layer_caption'],"_ASM_","&"),"_LEO_BACKSLASH_","\\"),"_LEO_DOUBLE_QUOTE_","&quot;");?>

									<?php }?><!-- LAYER TEXT END -->


									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type'] == "image") {?><!-- LAYER IMAGE BEGIN -->
										<img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_content'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img_disable_drag"/>
									<?php }?><!-- LAYER IMAGE END -->


									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type'] == "video") {?><!-- LAYER VIDEO BEGIN -->
										<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_video_type'] == "vimeo") {?>
											<iframe src="http://player.vimeo.com/video/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?title=0&amp;byline=0&amp;portrait=0;api=1" width="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ></iframe>
										<?php } else { ?>
											<iframe src="http://www.youtube.com/embed/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></iframe>
										<?php }?>
									<?php }?><!-- LAYER VIDEO END -->
									
									
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						
				</div><!-- SLIDE IMAGE END -->
				<?php }?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'] == "boxed") {?>
	</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
<?php if ((isset($_smarty_tpl->tpl_vars['load_from']->value)) && $_smarty_tpl->tpl_vars['load_from']->value == 'leoelements_backend') {?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['load_from']->value)) && $_smarty_tpl->tpl_vars['load_from']->value == 'leoelements_frontend') {?>
	if(typeof (leoslideshow_list_functions) == 'undefined'){
	    var leoslideshow_list_functions = [];
	}
    leoslideshow_list_functions.push(function(){
<?php } elseif ((isset($_smarty_tpl->tpl_vars['load_from_appagebuilder']->value)) && $_smarty_tpl->tpl_vars['load_from_appagebuilder']->value == 1) {?>
        ap_list_functions.push(function(){
<?php } else { ?>
	if(typeof (leoslideshow_list_functions) == 'undefined'){
	    var leoslideshow_list_functions = [];
	}
    leoslideshow_list_functions.push(function(){
<?php }?>

	jQuery(".<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
").iView({
		// COMMON
		pauseTime:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['delay'] ?? null)===null||$tmp==='' ? '5000' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
, // delay
		startSlide:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['start_with_slide'] ?? null)===null||$tmp==='' ? '0' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		autoAdvance: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['autoAdvance'] ?? null)===null||$tmp==='' ? 'true' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,	// enable timer thá»�i gian auto next slide
		pauseOnHover: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['stop_on_hover'] ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
		randomStart: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['shuffle_mode'] ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // Ramdom slide when start

		// TIMER
		timer: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timer'] ?? null)===null||$tmp==='' ? 'Pie' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		timerPosition: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerPosition'] ?? null)===null||$tmp==='' ? 'top-right' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
", // Top-right, top left ....
		timerX: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerX'] ?? null)===null||$tmp==='' ? '10' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerY: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerY'] ?? null)===null||$tmp==='' ? '10' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerOpacity: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerOpacity'] ?? null)===null||$tmp==='' ? '0.5' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
		timerBg: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerBg'] ?? null)===null||$tmp==='' ? '#000' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		timerColor: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerColor'] ?? null)===null||$tmp==='' ? '#EEE' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		timerDiameter: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerDiameter'] ?? null)===null||$tmp==='' ? '30' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerPadding: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerPadding'] ?? null)===null||$tmp==='' ? '4' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerStroke: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerStroke'] ?? null)===null||$tmp==='' ? '3' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerBarStroke: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStroke'] ?? null)===null||$tmp==='' ? '1' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		timerBarStrokeColor: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStrokeColor'] ?? null)===null||$tmp==='' ? '#EEE' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		timerBarStrokeStyle: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStrokeStyle'] ?? null)===null||$tmp==='' ? 'solid' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		playLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Play','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
",
		pauseLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pause','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
",
		closeLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
", // Muli language

		// NAVIGATOR controlNav
		controlNav: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['controlNav'] ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // true : enable navigate - default:'false'
		keyboardNav: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['keyboardNav'] ?? null)===null||$tmp==='' ? 'true' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // true : enable keybroad
		controlNavThumbs: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['controlNavThumbs'] ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // true show thumbnail, false show number ( bullet )
		controlNavTooltip: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['controlNavTooltip'] ?? null)===null||$tmp==='' ? 'true' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // true : hover to bullet show thumnail
		tooltipX: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['tooltipX'] ?? null)===null||$tmp==='' ? '5' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
		tooltipY: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['tooltipY'] ?? null)===null||$tmp==='' ? '-5' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
		controlNavHoverOpacity: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['controlNavHoverOpacity'] ?? null)===null||$tmp==='' ? '0.6' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // opacity navigator

		// DIRECTION
		controlNavNextPrev: false, // false dont show direction at navigator
		directionNav: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['directionNav'] ?? null)===null||$tmp==='' ? 'true' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // true  show direction at image ( in this case : enable direction )
		directionNavHoverOpacity: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['directionNavHoverOpacity'] ?? null)===null||$tmp==='' ? '0.6' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // direction opacity at image
		nextLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
",				// Muli language
		previousLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
", // Muli language

		// ANIMATION 
		fx: '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['fx'] ?? null)===null||$tmp==='' ? 'random' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', // Animation
		animationSpeed: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['animationSpeed'] ?? null)===null||$tmp==='' ? '500' ?? null : $tmp),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
, // time to change slide
//		strips: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['strips'] ?? null)===null||$tmp==='' ? '20' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
,
		strips: 1, // set value is 1 -> fix animation full background
		blockCols: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['blockCols'] ?? null)===null||$tmp==='' ? '10' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
, // number of columns
		blockRows: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['blockRows'] ?? null)===null||$tmp==='' ? '5' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
, // number of rows

		captionSpeed: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['captionSpeed'] ?? null)===null||$tmp==='' ? '500' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
, // speed to show caption
		captionOpacity: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['sliderParams']->value['captionOpacity'] ?? null)===null||$tmp==='' ? '1' ?? null : $tmp) )), ENT_QUOTES, 'UTF-8');?>
, // caption opacity
		captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
		customWidth: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['width'] )), ENT_QUOTES, 'UTF-8');?>
,
		customHtmlBullet: <?php if ($_smarty_tpl->tpl_vars['slider']->value['enable_custom_html_bullet']) {?>true<?php } else { ?>false<?php }?>,
		rtl: <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['rtl']) {?>true<?php } else { ?>false<?php }?>,
		height:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['height']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['height'] )), ENT_QUOTES, 'UTF-8');
} else { ?>780<?php }?>,
		timer_show : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['timer_show'] )), ENT_QUOTES, 'UTF-8');?>
,
		loading_show : "<?php if ((isset($_smarty_tpl->tpl_vars['sliderParams']->value['loading_show']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sliderParams']->value['loading_show'], ENT_QUOTES, 'UTF-8');
} else { ?>none<?php }?>",

		//onBeforeChange: function(){}, // Triggers before a slide transition
		//onAfterChange: function(){}, // Triggers after a slide transition
		//onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		//onLastSlide: function(){}, // Triggers when last slide is shown
		//onPause: function(){}, // Triggers when slider has paused
		//onPlay: function(){} // Triggers when slider has played

		onAfterLoad: function() 
		{
			// THUMBNAIL
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']) {?>
					$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-controlNav a img').height(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height'] )), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']) {?>
					$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-controlNav a img').width(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width'] )), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>

			// BULLET
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']) {?>
					$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip div.holder div.container div img').width(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width'] )), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']) {?>
					$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip div.holder div.container div img').height(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height'] )), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>

			// Display timer
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['timer_show'] == 1 || $_smarty_tpl->tpl_vars['sliderParams']->value['timer_show'] == 2) {?>
					$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-timer').hide();
			<?php }?>
			if($('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iviewSlider').children().eq(0).hasClass('iview-video')){
			  var iframe = $('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iviewSlider').children().eq(0).find('iframe');
			  iframe.closest('.iview-video-show').css("display", "block").css("top", "0");
			}
		},

	});

	$(".img_disable_drag").bind('dragstart', function() {
		return false;
	});


// Fix : Slide link, image cant swipe
	// step 1
	var link_event = 'click';

	// step 3
	$(".<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .slide_config").on("click",function(){
		
		if(link_event !== 'click'){
			link_event = 'click';
			return;
		}

		if($(this).data('link') != undefined && $(this).data('link') != '') {
			window.open($(this).data('link'),$(this).data('target'));
		}
		
	});

	// step 2
	$(".<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .slide_config").on('swipe',function(){
		link_event = 'swiped';	// do not click event
	});
	
<?php if ((isset($_smarty_tpl->tpl_vars['load_from']->value)) && $_smarty_tpl->tpl_vars['load_from']->value == 'leoelements_backend') {?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['load_from']->value)) && $_smarty_tpl->tpl_vars['load_from']->value == 'leoelements_frontend') {?>
});
<?php } elseif ((isset($_smarty_tpl->tpl_vars['load_from_appagebuilder']->value)) && $_smarty_tpl->tpl_vars['load_from_appagebuilder']->value == 1) {?>
});
<?php } else { ?>
});
<?php }?>
	
	 
<?php echo '</script'; ?>
>
<?php }
}
