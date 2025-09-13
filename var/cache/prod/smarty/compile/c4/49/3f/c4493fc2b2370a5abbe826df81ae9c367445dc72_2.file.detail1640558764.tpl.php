<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:45
  from '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/details/detail1640558764.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d7895af57c4_96179368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4493fc2b2370a5abbe826df81ae9c367445dc72' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/details/detail1640558764.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_684d7895af57c4_96179368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section id="main" class="product-detail product-image-no-thumbs-fullwidth product-image-thumbs no-thumbs" itemscope itemtype="https://schema.org/Product">
  <meta itemprop="url" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560361403684d7895ad57a8_26999841', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276409838684d7895ae3a26_25587120', 'product_images_modal');
?>

                            </div><div class="offset-lg-2 offset-xl-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172515680684d7895ae4413_70194934', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413307265684d7895ae57f1_88393541', 'product_additional_info');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
<div class="leo-more-cdown" data-idproduct="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549285295684d7895ae68f4_89078869', 'product_prices');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79121700684d7895ae7155_21482325', 'product_description_short');
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95136095684d7895ae89d6_54949314', 'product_customization');
?>

<?php }?>
<div class="product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_855361660684d7895ae9880_46150747', 'product_buy');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1064147152684d7895aeedb2_02714164', 'hook_display_reassurance');
?>

<?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114813458684d7895aefa42_57001330', 'product_accessories');
?>


<?php echo '<script'; ?>
 type="text/javascript">

  products_list_functions.push(
    function(){
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

      });
    }
  ); 
  
<?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458923623684d7895af4051_36369749', 'product_footer');
?>

                            </div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1833996904684d7895af4b09_53314117', 'page_footer_container');
?>

</section>

<?php }
/* {block 'product_flags'} */
class Block_512716127684d7895ad6533_42342576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                    <li class="product-flag <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['type']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['label']), ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_2043452855684d7895ad6227_89390232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_512716127684d7895ad6533_42342576', 'product_flags', $this->tplIndex);
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['legend']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['default_image']['legend']), ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                  <i class="material-icons zoom-in">&#xE8FF;</i>
                </div>
              <?php } else { ?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
              <?php }?>
            </div>
          <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_1437865394684d7895adaa01_33413344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

            <div id="thumb-gallery" class="product-thumb-images">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <div class="thumb-container <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> active <?php }?>">
                    <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
"> 
                      <img
                        class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected <?php }?>"
                        data-image-medium-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        data-image-large-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['legend']), ENT_QUOTES, 'UTF-8');?>
"
                        itemprop="image"
                      >
                    </a>
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
                <div class="thumb-container">
                  <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
"> 
                    <img 
                      class="thumb js-thumb img-fluid" 
                      data-image-medium-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                      data-image-large-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                      title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                      itemprop="image"
                    >
                  </a>
                </div>
              <?php }?>
            </div>
            
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
              <div class="arrows-product-fake slick-arrows">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_cover_thumbnails'} */
class Block_1492439264684d7895ad5ef3_23089794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2043452855684d7895ad6227_89390232', 'product_cover', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1437865394684d7895adaa01_33413344', 'product_images', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_796205415684d7895ad5bb2_87847288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="images-container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492439264684d7895ad5ef3_23089794', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1560361403684d7895ad57a8_26999841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1560361403684d7895ad57a8_26999841',
  ),
  'page_content' => 
  array (
    0 => 'Block_796205415684d7895ad5bb2_87847288',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1492439264684d7895ad5ef3_23089794',
  ),
  'product_cover' => 
  array (
    0 => 'Block_2043452855684d7895ad6227_89390232',
  ),
  'product_flags' => 
  array (
    0 => 'Block_512716127684d7895ad6533_42342576',
  ),
  'product_images' => 
  array (
    0 => 'Block_1437865394684d7895adaa01_33413344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="page-content" id="content" data-templateview="none" data-numberimage="5" data-numberimage1200="5" data-numberimage992="4" data-numberimage768="3" data-numberimage576="3" data-numberimage480="2" data-numberimage360="2" data-templatemodal="1" data-templatezoomtype="in" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796205415684d7895ad5bb2_87847288', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_images_modal'} */
class Block_276409838684d7895ae3a26_25587120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_276409838684d7895ae3a26_25587120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_1597335846684d7895ae4a86_31142022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_2033293202684d7895ae4773_59682228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1597335846684d7895ae4a86_31142022', 'page_title', $this->tplIndex);
?>
</h1>
	<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_172515680684d7895ae4413_70194934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_172515680684d7895ae4413_70194934',
  ),
  'page_header' => 
  array (
    0 => 'Block_2033293202684d7895ae4773_59682228',
  ),
  'page_title' => 
  array (
    0 => 'Block_1597335846684d7895ae4a86_31142022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033293202684d7895ae4773_59682228', 'page_header', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_1413307265684d7895ae57f1_88393541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_1413307265684d7895ae57f1_88393541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_prices'} */
class Block_1549285295684d7895ae68f4_89078869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_1549285295684d7895ae68f4_89078869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_79121700684d7895ae7155_21482325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_79121700684d7895ae7155_21482325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="product-description-short-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" class="description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_95136095684d7895ae89d6_54949314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_95136095684d7895ae89d6_54949314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
	<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_857982293684d7895aea991_52368877 extends Smarty_Internal_Block
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
class Block_1901254195684d7895aec136_23697935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_1444931982684d7895aeb1c6_93292262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
          <section class="product-pack">
            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1901254195684d7895aec136_23697935', 'product_miniature', $this->tplIndex);
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
class Block_1777340767684d7895aed057_22071773 extends Smarty_Internal_Block
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
class Block_1456978296684d7895aed869_63797062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_5312210684d7895aee020_12937837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_855361660684d7895ae9880_46150747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_855361660684d7895ae9880_46150747',
  ),
  'product_variants' => 
  array (
    0 => 'Block_857982293684d7895aea991_52368877',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1444931982684d7895aeb1c6_93292262',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1901254195684d7895aec136_23697935',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1777340767684d7895aed057_22071773',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1456978296684d7895aed869_63797062',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_5312210684d7895aee020_12937837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['cart']), ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['static_token']->value), ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_857982293684d7895aea991_52368877', 'product_variants', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1444931982684d7895aeb1c6_93292262', 'product_pack', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1777340767684d7895aed057_22071773', 'product_discounts', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1456978296684d7895aed869_63797062', 'product_add_to_cart', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5312210684d7895aee020_12937837', 'product_refresh', $this->tplIndex);
?>

    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_1064147152684d7895aeedb2_02714164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_1064147152684d7895aeedb2_02714164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_1006906392684d7895af17b1_51751494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                      
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                  <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_2114813458684d7895aefa42_57001330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_2114813458684d7895aefa42_57001330',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1006906392684d7895af17b1_51751494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories clearfix">
      <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
      <div class="products">
        <div class="owl-row <?php if ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['productClassWidget']->value), ENT_QUOTES, 'UTF-8');
}?>">
          <div id="category-products2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1006906392684d7895af17b1_51751494', 'product_miniature', $this->tplIndex);
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
class Block_1458923623684d7895af4051_36369749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_1458923623684d7895af4051_36369749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_1900897388684d7895af4e43_01530524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    	<!-- Footer content -->
	    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1833996904684d7895af4b09_53314117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_1833996904684d7895af4b09_53314117',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1900897388684d7895af4e43_01530524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <footer class="page-footer">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900897388684d7895af4e43_01530524', 'page_footer', $this->tplIndex);
?>

	  </footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
}
