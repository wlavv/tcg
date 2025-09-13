{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn -->
<div {if !isset($apInfo)}id="default_column"{/if} class="column-row{if !isset($apInfo)} col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12{/if}{if isset($colClass)} {$colClass|replace:'.':'-'|escape:'html':'UTF-8'}{/if}{if isset($formAtts)} {$formAtts.form_id|escape:'html':'UTF-8'}{if isset($formAtts.active) && !$formAtts.active} deactive{else} active{/if}{/if}
		{if isset($formAtts.active_desktop) && !$formAtts.active_desktop} deactive-desktop{else} active-desktop{/if}
		{if isset($formAtts.active_tablet) && !$formAtts.active_tablet} deactive-tablet{else} active-tablet{/if}
		{if isset($formAtts.active_mobile) && !$formAtts.active_mobile} deactive-mobile{else} active-mobile{/if} ">
	<div class="cover-column">
		<div class="column-controll-top">
			<a href="javascript:void(0)" data-toggle="tooltip" title="{l s='Drag to sort Column' mod='appagebuilder'}" class="column-action caction-drag label-tooltip"><i class="icon-move"></i> </a>
			&nbsp;
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span>{l s='Column' mod='appagebuilder'}</span> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu for-column-row" role="menu">
					<li><a href="javascript:void(0)" title="{l s='Add new Widget' mod='appagebuilder'}" class="column-action btn-new-widget "><i class="icon-plus-sign"></i> {l s='Add new Widget' mod='appagebuilder'}</a></li>
					<li><a href="javascript:void(0)" title="{l s='Edit Column' mod='appagebuilder'}" class="column-action btn-edit " data-type="ApColumn" data-for=".column-row"><i class="icon-pencil"></i> {l s='Edit Column' mod='appagebuilder'}</a></li>
					<li><a href="javascript:void(0)" title="{l s='Delete Column' mod='appagebuilder'}" class="column-action btn-delete "><i class="icon-trash"></i> {l s='Delete Column' mod='appagebuilder'}</a></li>
					<li><a href="javascript:void(0)" title="{l s='Duplicate Group' mod='appagebuilder'}" class="column-action btn-duplicate "><i class="icon-paste"></i> {l s='Duplicate Column' mod='appagebuilder'}</a></li>
					{* <li><a href="javascript:void(0)" title="{l s='Disable or Enable Column' mod='appagebuilder'}" class="column-action btn-status {if isset($formAtts.active) && !$formAtts.active} deactive{else} active{/if}"><i class="icon-ok"></i> {l s='Disable or Enable Column' mod='appagebuilder'}</a></li> *}
				</ul>
			</div> 
			<div class="btn-group animation-section">
				<button type="button" class="btn btn-default animation-button">
					<i class="icon-magic"></i>
					<span class="animation-status" data-text-default="" data-text-infinite="{l s='Infinite' mod='appagebuilder'}"></span>
				</button>
				<div class="form-horizontal animation-wrapper column-animation-wrapper">
					<div class="form-group">
						<label class="control-label col-lg-5">
							{l s='Select Animation' mod='appagebuilder'}
						</label>
						<div class="col-lg-7">
							<select name="animation" class="animation_select fixed-width-xl">
								{if isset($listAnimation)}
									{foreach $listAnimation as $listAnimation_val}
										<optgroup label="{$listAnimation_val.name}">
											{foreach $listAnimation_val.query as $option}
												<option value="{$option.id}">{$option.name}</option>
											{/foreach}
										</optgroup>
									{/foreach}
								{/if}
							</select>
						</div>
					</div>
					<div class="form-group animate_sub">
						<div class="col-lg-10 col-lg-offset-2">
							<div class="animationSandbox">Prestashop.com</div>								
						</div>
					</div>
					<div class="form-group animate_sub">
						<label class="control-label col-lg-5">
							{l s='Delay' mod='appagebuilder'} ({l s='Default' mod='appagebuilder'}: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_delay" value="1" class="fixed-width-xs animation_delay" type="text">
								<span class="input-group-addon">{l s='s' mod='appagebuilder'}</span>							
							</div>						
						</div>
					</div>
					<div class="form-group animate_sub">
						<label class="control-label col-lg-5">
							{l s='Duration' mod='appagebuilder'} ({l s='Default' mod='appagebuilder'}: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_duration" value="1" class="fixed-width-xs animation_duration" type="text">
								<span class="input-group-addon">{l s='s' mod='appagebuilder'}</span>							
							</div>						
						</div>
					</div>
					<div class="form-group animate_sub animate_loop">
						<label class="control-label col-lg-5">
							{l s='Iteration count' mod='appagebuilder'} ({l s='Default' mod='appagebuilder'}: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_iteration_count" value="1" class="fixed-width-xs animation_iteration_count" type="text">
								<span class="input-group-addon">{l s='times' mod='appagebuilder'}</span>							
							</div>							
						</div>
					</div>
					<div class="form-group animate_sub">
						<div class="col-lg-7 col-lg-offset-5">
							<div class="checkbox">
								<label for="animation_infinite">
									<input name="animation_infinite" class="checkbox-group animation_infinite" value="1" type="checkbox">{l s='Infinite' mod='appagebuilder'}
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<button type="button" class="btn btn-primary pull-right btn-save-animation">{l s='Save' mod='appagebuilder'}</button>
							<button type="button" class="btn btn-default pull-right animate-it animate_sub">{l s='Animate demo' mod='appagebuilder'}</button>						
						</div>
					</div>
				</div>
			</div>
			<div class="btn-group"><a class="label-tooltip all-devicesd {if isset($formAtts.active) && !$formAtts.active} deactive{else} active{/if}" href="javascript:void(0)" data-toggle="tooltip" title="{if isset($formAtts.active) && !$formAtts.active}Enable Column{else}Disable Column{/if}"><i class="leo-devicesd {if isset($formAtts.active) && !$formAtts.active} icon-remove{else} icon-ok{/if}" ></i></a></div>
			<div class="btn-group devicesd-active column-action">
		        <div class="btn-group {if isset($formAtts.active_desktop) && !$formAtts.active_desktop} deactive-desktop{else} active-desktop{/if} label-tooltip" device="desktop" data-toggle="tooltip"
		            title="{if isset($formAtts.active_desktop) && !$formAtts.active_desktop}Enable Column On Desktop{else}Disable Column On Desktop{/if}">
		            <i class="icon-desktop leo-devicesd" ></i>
		        </div>
		        <div class="btn-group {if isset($formAtts.active_tablet) && !$formAtts.active_tablet} deactive-tablet{else} active-tablet{/if} label-tooltip" device="tablet" data-toggle="tooltip"
		        title="{if isset($formAtts.active_tablet) && !$formAtts.active_tablet}Enable Column On Tablet{else}Disable Column On Tablet{/if}">
		            <i class="icon-tablet leo-devicesd" ></i>
		        </div>
		        <div class="btn-group {if isset($formAtts.active_mobile) && !$formAtts.active_mobile} deactive-mobile{else} active-mobile{/if} label-tooltip" device="mobile" data-toggle="tooltip"
		        title="{if isset($formAtts.active_mobile) && !$formAtts.active_mobile}Enable Column On Mobile{else}Disable Column On Mobile{/if}">
		            <i class="icon-mobile leo-devicesd" ></i>
		        </div>
		    </div>
		</div>

		<div class="column-controll-right pull-right">
			<a href="javascript:void(0)" data-toggle="tooltip" title="{l s='Reduce size' mod='appagebuilder'}" class="column-action btn-change-colwidth" data-value="-1"><i class="icon-minus-sign-alt"></i></a>
			<div class="btn-group">
				<button type="button" class="btn" tabindex="-1" data-toggle="dropdown">
					<span class="width-val ap-w-6"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					{foreach from=$widthList item=itemWidth}
					{assign var="colwidth" value=$itemWidth/12}
					<li class="col-{$itemWidth|replace:'.':'-'|escape:'html':'UTF-8'}">
						<a class="change-colwidth" data-width="{$itemWidth|replace:'.':'-'|escape:'html':'UTF-8'}" href="javascript:void(0);" tabindex="-1">                                          
							<span data-width="{$itemWidth|escape:'html':'UTF-8'}" class="width-val ap-w-{if $itemWidth|strpos:"."|escape:'html':'UTF-8'}{$itemWidth|replace:'.':'-'|escape:'html':'UTF-8'}{else}{$itemWidth|escape:'html':'UTF-8'}{/if}">{$itemWidth|escape:'html':'UTF-8'}/12 - ( {math equation="x*100" x=$colwidth format="%.2f"} % )</span>
						</a>
					</li>
					{/foreach}
				</ul>
			</div>
			<a href="javascript:void(0)" data-toggle="tooltip" title="{l s='Increase size' mod='appagebuilder'}" class="column-action btn-change-colwidth" data-value="1"><i class="icon-plus-sign-alt"></i></a>
		</div>
		<div class="column-content">
			{if isset($apInfo)}{$apContent}{* HTML form , no escape necessary *}{/if}
		</div>
		<div class="column-controll-bottom">
			<a href="javascript:void(0)" data-toggle="tooltip" title="{l s='Add new Widget' mod='appagebuilder'}" class="column-action btn-new-widget label-tooltip"><i class="icon-plus-sign"></i></a>
			<a href="javascript:void(0)" data-toggle="tooltip" title="{l s='Edit Column' mod='appagebuilder'}" class="column-action btn-edit label-tooltip" data-type="ApColumn"><i class="icon-pencil"></i></a>
		</div>
	</div>
</div>