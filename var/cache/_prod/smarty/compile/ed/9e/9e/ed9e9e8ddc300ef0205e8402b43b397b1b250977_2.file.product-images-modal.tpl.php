<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7895b11839_38421442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed9e9e8ddc300ef0205e8402b43b397b1b250977' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1690981822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d7895b11839_38421442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal leo-product-modal" id="product-modal" data-thumbnails=".product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']));?>
        <figure>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img
                class="img-fluid js-modal-product-cover product-cover-modal"
                width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width']), ENT_QUOTES, 'UTF-8');?>
"
                src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                  alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['legend']), ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['legend']), ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                  alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
                height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height']), ENT_QUOTES, 'UTF-8');?>
"
              >
            </picture>
          <?php } else { ?>
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img class="img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height']), ENT_QUOTES, 'UTF-8');?>
" />
            </picture>
          <?php }?>
          <figcaption class="image-caption">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_303903270684d7895b098b1_40298819', 'product_description_short');
?>

          </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_755679936684d7895b0a533_21727480', 'product_images');
?>
  
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }
/* {block 'product_description_short'} */
class Block_303903270684d7895b098b1_40298819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_303903270684d7895b098b1_40298819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_755679936684d7895b0a533_21727480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_755679936684d7895b0a533_21727480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-images js-modal-product-images product-images-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <div class="thumb-container js-thumb-container">
                    <picture>
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['avif']), ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['webp']), ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                      <img class="img-fluid" 
                        data-image-large-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['large']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['large']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['large']['sources'] ))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        class="thumb js-modal-thumb"
                        src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['medium']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                          alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                          alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['medium']['width']), ENT_QUOTES, 'UTF-8');?>
"
                        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['medium']['height']), ENT_QUOTES, 'UTF-8');?>
"
                      >
                    </picture>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
          <?php
}
}
/* {/block 'product_images'} */
}
