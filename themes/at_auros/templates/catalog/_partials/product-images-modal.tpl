{**
 *  7 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="modal fade js-product-images-modal leo-product-modal" id="product-modal" data-thumbnails=".product-images-{$product.id_product}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        {assign var=imagesCount value=$product.images|count}
        <figure>
          {if $product.default_image}
            <picture>
              {if !empty($product.default_image.bySize.large_default.sources.avif)}<source srcset="{$product.default_image.bySize.large_default.sources.avif}" type="image/avif">{/if}
              {if !empty($product.default_image.bySize.large_default.sources.webp)}<source srcset="{$product.default_image.bySize.large_default.sources.webp}" type="image/webp">{/if}
              <img
                class="img-fluid js-modal-product-cover product-cover-modal"
                width="{$product.default_image.bySize.large_default.width}"
                src="{$product.default_image.bySize.large_default.url}"
                {if !empty($product.default_image.legend)}
                  alt="{$product.default_image.legend}"
                  title="{$product.default_image.legend}"
                {else}
                  alt="{$product.name}"
                {/if}
                height="{$product.default_image.bySize.large_default.height}"
              >
            </picture>
          {else}
            <picture>
              {if !empty($urls.no_picture_image.bySize.large_default.sources.avif)}<source srcset="{$urls.no_picture_image.bySize.large_default.sources.avif}" type="image/avif">{/if}
              {if !empty($urls.no_picture_image.bySize.large_default.sources.webp)}<source srcset="{$urls.no_picture_image.bySize.large_default.sources.webp}" type="image/webp">{/if}
              <img class="img-fluid" src="{$urls.no_picture_image.bySize.large_default.url}" loading="lazy" width="{$urls.no_picture_image.bySize.large_default.width}" height="{$urls.no_picture_image.bySize.large_default.height}" />
            </picture>
          {/if}
          <figcaption class="image-caption">
            {block name='product_description_short'}
              <div id="product-description-short">{$product.description_short nofilter}</div>
            {/block}
          </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          {block name='product_images'}
            <div class="product-images js-modal-product-images product-images-{$product.id_product}">
              {foreach from=$product.images item=image}
                <div class="thumb-container js-thumb-container">
                    <picture>
                      {if !empty($image.medium.sources.avif)}<source srcset="{$image.medium.sources.avif}" type="image/avif">{/if}
                      {if !empty($image.medium.sources.webp)}<source srcset="{$image.medium.sources.webp}" type="image/webp">{/if}
                      <img class="img-fluid" 
                        data-image-large-src="{$image.large.url}"
                        {if !empty($image.large.sources)}data-image-large-sources="{$image.large.sources|@json_encode}"{/if}
                        class="thumb js-modal-thumb"
                        src="{$image.medium.url}"
                        {if !empty($image.legend)}
                          alt="{$image.legend}"
                          title="{$image.legend}"
                        {else}
                          alt="{$product.name}"
                        {/if}
                        width="{$image.medium.width}"
                        height="{$image.medium.height}"
                      >
                    </picture>
                </div>
              {/foreach} 
            </div>
          {/block}  
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->