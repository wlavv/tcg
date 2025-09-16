{* 
* @Module Name: Leo Blog
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  Leotheme
* @description: Content Management
*}

{if count($blogs)}
<div id="blog-listing-home" class="blogs-container box">
	<h1 class="blog-lastest-title">{l s='Lastest Blogs' mod='leoblog'}</h1>
	<div class="inner">
		<div class="blogs">  
			{foreach from=$blogs item=blog name=blogs}
			 
				{if ($smarty.foreach.blogs.iteration%$listing_column==1)&&$listing_column>1}
				  <div class="row">
				{/if}
				<div class="col-lg-3 col-md-6 col-xs-12">
					
						{include file="$_listing_blog"}
					
				</div>	
				{if ($smarty.foreach.blogs.iteration%$listing_column==0||$smarty.foreach.blogs.last)&&$listing_column>1}
					</div>
				{/if}
			{/foreach}
		</div>
		<div class="blog-bottom">
			<a href="{$view_all_link}">{l s='View all' mod='leoblog'}</a>
		</div>
	</div>
</div>
{/if}