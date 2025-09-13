{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_images\imagemanager -->
{if isset($url_param) && $url_param}
    
{else}
    {* DEFAULT VALUE *}
    {assign var=url_param value=''}
{/if}

{if isset($reloadBack) && $reloadBack==1}
	{foreach $images as $image}
		<div style="background:url('{$image.link|escape:'html':'UTF-8'}') no-repeat center center;" class="pull-left" data-image="{$image.link|escape:'html':'UTF-8'}" data-val="../../../../assets/img/patterns/{$image.name|escape:'html':'UTF-8'}">

		</div>
	{/foreach}
{else}
{if !(isset($reloadSliderImage) && $reloadSliderImage==1)}
<div class="bootstrap image-manager">
<div class="panel product-tab">
<h3 class="tab" >
	{l s='Images Manager' mod='appagebuilder'}
	<span class="badge" id="countImage">{$countImages|escape:'html':'UTF-8'}</span>
	<label class="control-label col-lg-3 file_upload_label">
			{l s='Format:' mod='appagebuilder'} JPG, GIF, PNG. {l s='Filesize:' mod='appagebuilder'} {$max_image_size|string_format:"%.2f"|escape:'html':'UTF-8'} {l s='MB max.' mod='appagebuilder'}
	</label>
</h3>

<div class="row">
	<div class="form-group">
		<div class="col-lg-12">
			{$image_uploader}{* HTML form , no escape necessary *}
			<div class="btn-group search-image-group">
				<input type="text" placeholder="{l s='Search image' mod='appagebuilder'}" class="search-image" value="">
				<button type="button" class="btn btn-primary search-bt">{l s='Search' mod='appagebuilder'}</button>
				<button type="button" class="btn btn-warning clear-search-bt">{l s='Clear' mod='appagebuilder'}</button>
				
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<ul id="list-imgs">
{/if}
{foreach from=$images item=image name=myLoop}
	<li class="image-item" data-image-name="{$image.name|escape:'html':'UTF-8'}">
		<div class="row img-row">
			<a class="label-tooltip img-link" data-widget="{if isset($widget) && $widget}{$widget}{/if}" data-toggle="tooltip" href="{$image.link|escape:'html':'UTF-8'}" title="{$image.name|escape:'html':'UTF-8'}" style="height:70px;overflow: hidden">
				<img class="select-img" data-widget="{if isset($widget) && $widget}{$widget}{/if}" data-name="{$image.name|escape:'html':'UTF-8'}" title="" width="70" alt="" src="{$image.link|escape:'html':'UTF-8'}?t={math equation='rand(1000,9999)'}"/>
			</a>
		 </div>
		<div class="row">
			{$image.name|rtrim|escape:'html':'UTF-8'}
		</div>
		<div class="row">
			<a class="fancybox" data-toggle="tooltip" href="{$image.link|escape:'html':'UTF-8'}" title="{l s='Click to view' mod='appagebuilder'}">
				<i class="icon-eye-open"></i>
				{l s='View' mod='appagebuilder'}
			</a>
			<a href="{$link->getAdminLink('AdminApPageBuilderImages')|escape:'html':'UTF-8'}&ajax=1&action=deleteimage&imgName={$image.name|rtrim|escape:'html':'UTF-8'}" class="text-danger delete-image" title="{l s='Delete Selected Image?' mod='appagebuilder'}" onclick="if (confirm($(this).attr('title'))) {
					return deleteImage($(this));
				} else {
					return false;
				}
				;">
				<i class="icon-remove"></i>
				{l s='Delete' mod='appagebuilder'}
			</a>
		</div>
	</li>
{/foreach}
{if !(isset($reloadSliderImage) && $reloadSliderImage==1)}
		</ul>
	</div>
</div>
{* B: pagination *}
{if isset($p) && $p && $pages_nb > 1}
	{if ($n*$p) < $nb_items }
		{assign var='imageShowing' value=$n*$p}
	{else}
		{assign var='imageShowing' value=($n*$p-$nb_items-$n*$p)*-1}
	{/if}
	{if $p==1}
		{assign var='imageShowingStart' value=1}
	{else}
		{assign var='imageShowingStart' value=$n*$p-$n+1}
	{/if}
        
	<nav class="pagination" style="width: 100%;">
		<div class="col-xs-12 col-md-6 col-lg-6">		
			{if $nb_items > 1}
				{l s='Showing' mod='appagebuilder'} {$imageShowingStart|escape:'htmlall':'UTF-8'} - {$imageShowing|escape:'htmlall':'UTF-8'} {l s='of' mod='appagebuilder'} {$nb_items|escape:'htmlall':'UTF-8'} {l s='items' mod='appagebuilder'}	
			{else}
				{l s='Showing' mod='appagebuilder'} {$imageShowingStart|escape:'htmlall':'UTF-8'} - {$imageShowing|escape:'htmlall':'UTF-8'} {l s='of' mod='appagebuilder'} 1 {l s='item' mod='appagebuilder'}
			{/if}
		</div>
		{if $start!=$stop}
			<div id="pagination_imagemanager" class="col-xs-12 col-md-6 col-lg-6">			
				<ul class="page-list clearfix text-sm-right text-xs-center" style="list-style: none;display: flex;">
					{if $p != 1}
						{assign var='p_previous' value=$p-1}
						<li id="pagination_previous_imagemanager">							
							<a class="previous" rel="prev" href="{$ajaxImageUrl}&page={$p_previous}">
								<i class="material-icons">&#xE314;</i>
								<span>{l s='Previous' mod='appagebuilder'}</span>
							</a>
						</li>
					{else}
						<li id="pagination_previous_imagemanager">							
							<a class="previous disabled" rel="prev" href="#">
								<i class="material-icons">&#xE314;</i>
								<span>{l s='Previous' mod='appagebuilder'}</span>
							</a>
						</li>
					{/if}
					{if $start==3}
						<li><a  href="{$ajaxImageUrl}&page=1">1</a></li>
						<li><a  href="{$ajaxImageUrl}&page=2">2</a></li>
					{/if}
					{if $start==2}
						<li><a  href="{$ajaxImageUrl}&page=1">1</a></li>
					{/if}
					{if $start>3}
						<li><a  href="{$ajaxImageUrl}&page=1">1</a></li>
						<li class="truncate">...</li>
					{/if}
					{section name=pagination start=$start loop=$stop+1 step=1}
						{if $p == $smarty.section.pagination.index}
							<li class="current">
								<a href="{$ajaxImageUrl}&page={$smarty.section.pagination.index}" class="disabled">
									{$p|escape:'html':'UTF-8'}
								</a>
							</li>
						{else}
							<li>
								<a href="{$ajaxImageUrl}&page={$smarty.section.pagination.index}">
									{$smarty.section.pagination.index|escape:'html':'UTF-8'}
								</a>
							</li>
						{/if}
					{/section}
					{if $pages_nb>$stop+2}
						<li class="truncate">...</li>
						<li>
							<a href="{$ajaxImageUrl}&page={$pages_nb}">
								{$pages_nb|intval}
							</a>
						</li>
					{/if}
					{if $pages_nb==$stop+1}
						<li>
							<a href="{$ajaxImageUrl}&page={$pages_nb}">
								{$pages_nb|intval}
							</a>
						</li>
					{/if}
					{if $pages_nb==$stop+2}
						<li>
							<a href="{$ajaxImageUrl}&page={$pages_nb}">
								{$pages_nb-1|intval}
							</a>
						</li>
						<li>
							<a href="{$ajaxImageUrl}&page={$pages_nb}">
								{$pages_nb|intval}
							</a>
						</li>
					{/if}
					{if $pages_nb > 1 AND $p != $pages_nb}
						{assign var='p_next' value=$p+1}
						<li id="pagination_next_imagemanager">						
							<a class="next" rel="next" href="{$ajaxImageUrl}&page={$p_next}">							
								<span>{l s='Next' mod='appagebuilder'}</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					{else}
						<li id="pagination_next_imagemanager">						
							<a class="next disabled" rel="next" href="#">	
								<span>{l s='Next' mod='appagebuilder'}</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					{/if}
				</ul>			
			</div>
		{/if}
	</nav>
	<style type="text/css">
		#pagination_imagemanager ul {
			padding: 0;
		}
		#pagination_imagemanager li {
			padding: 0 10px;
		}
		#pagination_imagemanager .material-icons {
			vertical-align: middle;
		}
		.current a {
			color: #1a8196;
		}
		a.disabled:hover {
			text-decoration: none;
		}
	</style>
{/if}
{* E: pagination *}
<script type="text/javascript">
var imgManUrl = "{$imgManUrl}";
var img_dir = "{$img_dir}";
var upbutton = "{l s='Upload an image' mod='appagebuilder'}";
{literal}
	$(document).ready(function() {
		$('.fancybox').fancybox();	
		
		//DONGND:: search image by name
		$(".search-image").keyup(function(){		
			var filter = $(this).val();	
			$(".image-item").each(function(){		
				if ($(this).data('image-name').search(new RegExp(filter, "i")) < 0) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		 });
		
		//DONGND:: clear search image by name
		$('.clear-search-bt').click(function(){
			$(".search-image").val('').trigger('keyup');
		});
			
		//DONGND:: search image by name	with button
		$('.search-bt').click(function(){
			$(".search-image").trigger('keyup');
		});
		
		//DONGND:: add dir to filter
		$("#img_order a").each(function(){
			$(this).data('dir', img_dir);
		});
	});

	function deleteImage(element){
		$.ajax({
			type: 'GET',
			url: element.attr("href"),
			data: '',
			dataType: 'json',
			cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
			success: function(data) {
				 $("#list-imgs").html(data);
				 $("#countImage").text($("#list-imgs li").length);
				 $('.label-tooltip').tooltip();
				 $('.fancybox').fancybox();
			}
		});

		return false;
	}

	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
{/literal}
	function reloadImageList(sortBy, imgDir){
		if(!sortBy) sortBy = "date_add";
		if(!imgDir) sortBy = "images";
		$.ajax({
			type: 'GET',
			url: imgManUrl + '&ajax=1&action=reloadSliderImage&imgDir='+imgDir+'&sortBy='+sortBy+'{$url_param}',
			data: '',
			dataType: 'json',
			cache: false, // @todo see a way to use cache and to add a timestamps parameter to refresh cache each 10 minutes for example
			success: function(data)
			{
				 $("#list-imgs").html(data);
				 $('.label-tooltip').tooltip();
				 $('.fancybox').fancybox();
			}
		});
	}
</script>
</div>
</div>
{/if}
{/if}
