{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
{block name='product_description_short'}
  <div class="product-description-short">{$product.description_short|strip_tags|truncate:150:'...' nofilter}</div>
{/block}