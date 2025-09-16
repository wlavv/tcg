<?php
/* Smarty version 4.3.4, created on 2025-08-31 22:10:12
  from '/home/playfunc/tcg/themes/at_auros/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68b4ba34bee118_58055480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac36e27d2bab6e8fbcec0fe50a993be9584cea1d' => 
    array (
      0 => '/home/playfunc/tcg/themes/at_auros/templates/catalog/listing/product-list.tpl',
      1 => 1749910615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_68b4ba34bee118_58055480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180947710868b4ba34bdecb2_54120870', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42977300668b4ba34be0828_62489211', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_180947710868b4ba34bdecb2_54120870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_180947710868b4ba34bdecb2_54120870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_86983359268b4ba34be0c41_63225091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header" class="h2"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
class Block_163509476068b4ba34be1c65_04479220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_top'} */
class Block_203949019868b4ba34be4ad9_63243383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_151140996568b4ba34be5782_09555258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <div class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_169770579268b4ba34be65b4_96851498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-6 col-xl-4"), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_192667557668b4ba34be72c2_55843176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_113842667668b4ba34becf20_89652284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_42977300668b4ba34be0828_62489211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42977300668b4ba34be0828_62489211',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_86983359268b4ba34be0c41_63225091',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_163509476068b4ba34be1c65_04479220',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_203949019868b4ba34be4ad9_63243383',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_151140996568b4ba34be5782_09555258',
  ),
  'product_list' => 
  array (
    0 => 'Block_169770579268b4ba34be65b4_96851498',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_192667557668b4ba34be72c2_55843176',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_113842667668b4ba34becf20_89652284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/playfunc/tcg/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86983359268b4ba34be0c41_63225091', 'product_list_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163509476068b4ba34be1c65_04479220', 'subcategory_list', $this->tplIndex);
?>

    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>


    <section id="products">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203949019868b4ba34be4ad9_63243383', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151140996568b4ba34be5782_09555258', 'product_list_active_filters', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169770579268b4ba34be65b4_96851498', 'product_list', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192667557668b4ba34be72c2_55843176', 'product_list_bottom', $this->tplIndex);
?>



      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113842667668b4ba34becf20_89652284', 'product_list_footer', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
