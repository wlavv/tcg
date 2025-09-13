{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
  <div class="thumbnail-container">
    <div class="product-image">
      {block name='product_thumbnail'}
        <a href="{$product.url}" class="thumbnail product-thumbnail">
          <img
            class="img-fluid{if $aplazyload} lazy{/if}"
            {if $aplazyload}data-src{else}src{/if} = "{$product.cover.bySize.home_default.url}"
             alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name}{/if}"
            loading="lazy"
            data-full-size-image-url = "{$product.cover.large.url}"
          >
        </a>
      {/block}
      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="product-label {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}
      <div class="quickview{if !$product.main_variants} no-variants{/if} hidden-sm-down">
        <a
          href="#"
          class="quick-view"
          data-link-action="quickview"
        >
          <i class="fa fa-expand"></i> <span>{l s='Quick view' mod='appagebuilder'}</span>
        </a>
      </div>
    </div>
    <div class="product-meta">
      <div class="product-description">
        {block name='product_name'}
          <h1 class="h3 product-title"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
        {/block}

        {block name='product_price_and_shipping'}
          {if $product.show_price}
          <div class="product-price-and-shipping">
            {if $product.has_discount}
            {hook h='displayProductPriceBlock' product=$product type="old_price"}

            <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
            {if $product.discount_type === 'percentage'}
              <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
            {elseif $product.discount_type === 'amount'}
              <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
            {/if}
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span class="price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
            {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
            {if '' !== $smarty.capture.custom_price}
              {$smarty.capture.custom_price nofilter}
            {else}
              {$product.price}
            {/if}
            </span>

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
          {/if}
        {/block}
      </div>
      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
        {block name='product_variants'}
          {if $product.main_variants}
            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
          {/if}
        {/block}
      </div>
    </div>
  </div>
</article>