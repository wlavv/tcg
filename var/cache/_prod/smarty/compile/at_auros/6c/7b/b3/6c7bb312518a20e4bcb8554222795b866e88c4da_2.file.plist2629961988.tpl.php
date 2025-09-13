<?php
/* Smarty version 4.5.5, created on 2025-06-14 14:26:28
  from '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/profiles/plist2629961988.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_684d78842f3999_37792798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7bb312518a20e4bcb8554222795b866e88c4da' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/modules/appagebuilder/views/templates/front/profiles/plist2629961988.tpl',
      1 => 1637139912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684d78842f3999_37792798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552646596684d78842c7ce2_81517287', 'product_thumbnail');
?>



<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_413413502684d78842d8508_62241669', 'product_flags');
?>

<div class="pro3-btn">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-md-down">
<a
  href="#"
  class="quick-view"
  data-link-action="quickview"
>
	<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-quickview-bt-content">
		<i class="ti-search search"></i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view'),$_smarty_tpl ) );?>
</span>
	</span>
</a>
</div>

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div></div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669052062684d78842dfa29_61524229', 'product_name');
?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031630608684d78842e2830_63997276', 'product_price_and_shipping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523012406684d78842f0706_18973980', 'product_description_short');
?>
</div>
  </div>
</article>
<?php }
/* {block 'product_thumbnail'} */
class Block_552646596684d78842c7ce2_81517287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_552646596684d78842c7ce2_81517287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
        
	<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
	  <img
		class="img-fluid lazyOwl"
		src = ""
		data-src = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
		alt = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
"
		data-full-size-image-url = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
"
	  >
	  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
		<span class="product-additional" data-idproduct="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"></span>
	  <?php }?>
	</a> 
    <?php } else { ?>
	<a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
	  <img
		class="img-fluid"
		src = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
		alt = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['legend']), ENT_QUOTES, 'UTF-8');?>
"
		data-full-size-image-url = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
"
	  >
	  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
		<span class="product-additional" data-idproduct="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"></span>
	  <?php }?>
	</a>
    <?php }
} else { ?>
  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail leo-noimage">
 <img
   src = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
 >
  </a>
<?php }
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_413413502684d78842d8508_62241669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_413413502684d78842d8508_62241669',
  ),
);
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
/* {block 'product_name'} */
class Block_669052062684d78842dfa29_61524229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_669052062684d78842dfa29_61524229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' ))), ENT_QUOTES, 'UTF-8');?>
</a></h4>
<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_1031630608684d78842e2830_63997276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1031630608684d78842e2830_63997276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-price-and-shipping <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has_discount<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        <span class="regular-price"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['regular_price']), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
          <span class="discount-percentage"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['discount_percentage']), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
          <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display']), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

      
      <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_amount']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>
</span>
      </span>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

    </div>
  <?php }
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_523012406684d78842f0706_18973980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_523012406684d78842f0706_18973980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="product-description-short" itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),150,'...' ));?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
}
