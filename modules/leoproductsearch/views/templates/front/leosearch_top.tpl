{* 
* @Module Name: Leo Product Search
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright Leotheme
*}

{function name="lps_categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
        {foreach from=$nodes item=node}         
            <a href="#" data-cate-id="{$node.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$node.name}" class="cate-item cate-level-{$node.level_depth}{if isset($selectedCate) && $node.id_category eq $selectedCate} active{/if}" >{if $node.level_depth > 1}{str_repeat('-', $node.level_depth)}{/if}{$node.name}</a>           
            {lps_categories nodes=$node.children depth=$depth+1}           
        {/foreach}
    {/if}
  {/strip}
{/function}

<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive{if $en_search_by_cat} search-by-category{/if}">
	<p class="title_block">{l s='Search here...' mod='leoproductsearch'}</p>
		<form method="get" action="{$link->getModuleLink('leoproductsearch', 'productsearch', array(), true)|escape:'html':'UTF-8'}" id="leosearchtopbox" data-label-suggestion="{l s='Suggestion' mod='leoproductsearch'}" data-search-for="{l s='Search for' mod='leoproductsearch'}" data-in-category="{l s='in category' mod='leoproductsearch'}" data-products-for="{l s='Products For' mod='leoproductsearch'}" data-label-products="{l s='Products' mod='leoproductsearch'}" data-view-all="{l s='View all' mod='leoproductsearch'}">
                <input type="hidden" name="leoproductsearch_static_token" value="{$leoproductsearch_static_token|escape:'htmlall':'UTF-8'|stripslashes}"/>
		{*
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		*}
    	{*<label>{l s='Search products:' mod='leoproductsearch'}</label>*}
		<div class="block_content clearfix leoproductsearch-content">
			{if $en_search_by_cat}		
				<div class="list-cate-wrapper">
					<input id="leosearchtop-cate-id" name="cate" value="{if isset($selectedCate)}{$selectedCate}{/if}" type="hidden">
					<a href="javascript:void(0)" id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span>{if $selectedCateName != ''}{$selectedCateName}{else}{l s='All Categories' mod='leoproductsearch'}{/if}</span>
						<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
					</a>
					<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
						<a href="#" data-cate-id="" data-cate-name="{l s='All Categories' mod='leoproductsearch'}" class="cate-item{if $selectedCate == ''} active{/if}" >{l s='All Categories' mod='leoproductsearch'}</a>				
						<a href="#" data-cate-id="{$cates.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$cates.name}" class="cate-item cate-level-{$cates.level_depth}{if isset($selectedCate) && $cates.id_category eq $selectedCate} active{/if}" >{if $cates.level_depth > 1}{str_repeat('-', $cates.level_depth)}{/if}{$cates.name}</a>
						{lps_categories nodes=$cates.children}
					</div>
				</div>
			{/if}
			<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" data-content='{$placeholder}' value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" placeholder="{l s='Search' mod='leoproductsearch'}"/>
				<div class="ac_results lps_results"></div>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->
