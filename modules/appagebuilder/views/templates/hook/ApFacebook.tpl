{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApFacebook -->

<script type="text/javascript">
    var fb_lang = 'en_US';
</script>

{if isset($formAtts.fb_lang) && $formAtts.fb_lang != ''}
    <script type="text/javascript">
        fb_lang = "{$formAtts.fb_lang}";
    </script>
{/if}

<div class="widget-facebook block">
	{($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}
	<div id="fb-root"></div>
    {if isset($formAtts.title) && $formAtts.title}
    <h4 class="title_block">{$formAtts.title|escape:'html':'UTF-8'}</h4>
    {/if}
    {if isset($formAtts.sub_title) && $formAtts.sub_title}
        <div class="sub-title-widget">{$formAtts.sub_title nofilter}</div>
    {/if}
    {if isset($formAtts.page_url) && $formAtts.page_url}
<script type="text/javascript">
ap_list_functions.push(function(){
    console.log(fb_lang);
    // Check avoid include duplicate library Facebook SDK
    if($("#facebook-jssdk").length == 0) {
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/" + fb_lang + "/sdk.js#xfbml=1&version=v5.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }
});
</script>

    <div class="fb-page" data-href="{$formAtts.page_url|escape:'html':'UTF-8'}" {if isset($formAtts.tabs) && $formAtts.tabs}data-tabs="{$formAtts.tabs}" {/if}
    {if isset($formAtts.height) && $formAtts.height}data-height="{$formAtts.height|escape:'html':'UTF-8'}"{/if}
    {if isset($formAtts.width) && $formAtts.width}data-width="{$formAtts.width|escape:'html':'UTF-8'}"{/if}
    {if isset($formAtts.small_header) && $formAtts.small_header}data-small-header="{if $formAtts.small_header}true{else}false{/if}" {/if}
    {if isset($formAtts.adapt_container_width) && $formAtts.adapt_container_width}data-adapt-container-width="{if $formAtts.adapt_container_width}true{else}false{/if}" {/if}
    {if isset($formAtts.hide_cover) && $formAtts.hide_cover}data-hide-cover="{if $formAtts.hide_cover}true{else}false{/if}" {/if}
    {if isset($formAtts.hide_cta) && $formAtts.hide_cta}data-hide-cta = "{if $formAtts.hide_cta}true{else}false{/if}" {/if}
    {if isset($formAtts.show_facepile) && $formAtts.show_facepile}data-show-facepile="{if $formAtts.show_facepile}true{else}false{/if}" {/if}>
    <blockquote cite="{$formAtts.page_url|escape:'html':'UTF-8'}" class="fb-xfbml-parse-ignore"><a href="{$formAtts.page_url|escape:'html':'UTF-8'}"> </a></blockquote></div>
    {/if}
	{($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
</div>