<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78959d53f8_71811410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660eb7d1b1fae118f2cf2787b7cc2fdb63995206' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/product.tpl',
      1 => 1667899654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 2,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:sub/product_info/accordions.tpl' => 1,
    'file:sub/product_info/default.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_684d78959d53f8_71811410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452346566684d78959b2e78_94434938', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_827351743684d78959b8126_32614324', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1937544089684d78959b93f8_42055151', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_452346566684d78959b2e78_94434938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_452346566684d78959b2e78_94434938',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_amount']), ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['weight']), ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['weight_unit']), ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_827351743684d78959b8126_32614324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_827351743684d78959b8126_32614324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_1084039281684d78959bc1f5_32084663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_2075022381684d78959bbbe6_60179049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1084039281684d78959bc1f5_32084663', 'product_cover_thumbnails', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'product_images_modal'} */
class Block_967610858684d78959bcd29_71250992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_content_container'} */
class Block_1839785141684d78959bb859_86619065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="page-content" id="content">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075022381684d78959bbbe6_60179049', 'page_content', $this->tplIndex);
?>

            </section>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_967610858684d78959bcd29_71250992', 'product_images_modal', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_412941681684d78959bdee9_09058580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_236525915684d78959bdbc8_39581046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1 product-detail-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_412941681684d78959bdee9_09058580', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1823556543684d78959bd783_46329848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236525915684d78959bdbc8_39581046', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_927741186684d78959bf602_91540758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_1397847088684d78959bfe36_54315324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_879446425684d78959c2075_12019233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_409077248684d78959c4c89_12573912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1538634712684d78959c7565_88968023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_1871324278684d78959c54e8_63778945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1538634712684d78959c7565_88968023', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_1409584344684d78959c88a1_13847893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_665365359684d78959c9174_19500456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_1177140547684d78959c9b29_32040409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_1826165515684d78959ca399_76196955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_38112491684d78959c3c08_20567360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['cart']), ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['static_token']->value), ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_409077248684d78959c4c89_12573912', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1871324278684d78959c54e8_63778945', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1409584344684d78959c88a1_13847893', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_665365359684d78959c9174_19500456', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177140547684d78959c9b29_32040409', 'product_additional_info', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1826165515684d78959ca399_76196955', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_833123542684d78959cae47_46771702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_info'} */
class Block_1810027637684d78959cb631_01244635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'tab') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/accordions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>  
      <?php
}
}
/* {/block 'product_info'} */
/* {block 'product_miniature'} */
class Block_182939959684d78959d0153_93759294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
                  <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_193601080684d78959cd8a2_15936191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories clearfix">
      <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
      <div class="products">
        <div class="owl-row <?php if ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['productClassWidget']->value), ENT_QUOTES, 'UTF-8');
}?>">
          <div id="category-products2" class="owl-carousel owl-theme owl-loading">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182939959684d78959d0153_93759294', 'product_miniature', $this->tplIndex);
?>

              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </section>
  <?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_972415082684d78959d2cc0_69040167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1217200560684d78959d3720_08182582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_281531022684d78959d4268_43245271 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- Footer content -->
          <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_520957794684d78959d3f41_83946761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281531022684d78959d4268_43245271', 'page_footer', $this->tplIndex);
?>

        </footer>
      <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1937544089684d78959b93f8_42055151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1937544089684d78959b93f8_42055151',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1839785141684d78959bb859_86619065',
  ),
  'page_content' => 
  array (
    0 => 'Block_2075022381684d78959bbbe6_60179049',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1084039281684d78959bc1f5_32084663',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_967610858684d78959bcd29_71250992',
    1 => 'Block_1217200560684d78959d3720_08182582',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1823556543684d78959bd783_46329848',
  ),
  'page_header' => 
  array (
    0 => 'Block_236525915684d78959bdbc8_39581046',
  ),
  'page_title' => 
  array (
    0 => 'Block_412941681684d78959bdee9_09058580',
  ),
  'product_prices' => 
  array (
    0 => 'Block_927741186684d78959bf602_91540758',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1397847088684d78959bfe36_54315324',
  ),
  'product_customization' => 
  array (
    0 => 'Block_879446425684d78959c2075_12019233',
  ),
  'product_buy' => 
  array (
    0 => 'Block_38112491684d78959c3c08_20567360',
  ),
  'product_variants' => 
  array (
    0 => 'Block_409077248684d78959c4c89_12573912',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1871324278684d78959c54e8_63778945',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1538634712684d78959c7565_88968023',
    1 => 'Block_182939959684d78959d0153_93759294',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1409584344684d78959c88a1_13847893',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_665365359684d78959c9174_19500456',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_1177140547684d78959c9b29_32040409',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1826165515684d78959ca399_76196955',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_833123542684d78959cae47_46771702',
  ),
  'product_info' => 
  array (
    0 => 'Block_1810027637684d78959cb631_01244635',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_193601080684d78959cd8a2_15936191',
  ),
  'product_footer' => 
  array (
    0 => 'Block_972415082684d78959d2cc0_69040167',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_520957794684d78959d3f41_83946761',
  ),
  'page_footer' => 
  array (
    0 => 'Block_281531022684d78959d4268_43245271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productLayout'])) && $_smarty_tpl->tpl_vars['product']->value['productLayout'] != '') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'typeProduct'=>'detail'),$_smarty_tpl ) );?>

  <?php } else { ?>

 <section id="main" class="product-detail">
    <meta content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
">

      <div class="row product-container  js-product-container">
        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1839785141684d78959bb859_86619065', 'page_content_container', $this->tplIndex);
?>

        </div>

        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1823556543684d78959bd783_46329848', 'page_header_container', $this->tplIndex);
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927741186684d78959bf602_91540758', 'product_prices', $this->tplIndex);
?>


          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1397847088684d78959bfe36_54315324', 'product_description_short', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_879446425684d78959c2075_12019233', 'product_customization', $this->tplIndex);
?>

            <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38112491684d78959c3c08_20567360', 'product_buy', $this->tplIndex);
?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_833123542684d78959cae47_46771702', 'hook_display_reassurance', $this->tplIndex);
?>


          </div>
        </div>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1810027637684d78959cb631_01244635', 'product_info', $this->tplIndex);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193601080684d78959cd8a2_15936191', 'product_accessories', $this->tplIndex);
?>


<?php echo '<script'; ?>
 type="text/javascript">
  products_list_functions.push(
    function(){
      if($('#category-products2').parents('.tab-pane').length)
      {   
          if(!$('#category-products2').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#category-products2').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();   
              $('#category-products2').width(width_owl_active_tab);
          }
      }
      $('#category-products2').owlCarousel({
        <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
          direction:'rtl',
        <?php } else { ?>
          direction:'ltr',
        <?php }?>
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1200, 4],
        itemsDesktopSmall : [992, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

        addClassActive :    true,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,

      });
    }
  );
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
<?php echo '</script'; ?>
>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_972415082684d78959d2cc0_69040167', 'product_footer', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1217200560684d78959d3720_08182582', 'product_images_modal', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_520957794684d78959d3f41_83946761', 'page_footer_container', $this->tplIndex);
?>


    </section>
  <?php }
}
}
/* {/block 'content'} */
}
