{* 
* @Module Name: Leo Feature
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  2007-2018 Leotheme
* @description: Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
*}

<div class="leo-touchspin">
    <div class="input-group">
      <input type="number" class="input-group form-control leo_cart_quantity" value="{$leo_cart_product_quantity.minimal_quantity}" data-id-product="{$leo_cart_product_quantity.id_product}" data-min="{$leo_cart_product_quantity.minimal_quantity}">
      <div class="input-group-btn-vertical">
        <button class="btn btn-primary plus" type="button">+</button>
        <button class="btn btn-primary minus" type="button">-</button>
      </div>
    </div>
</div>
