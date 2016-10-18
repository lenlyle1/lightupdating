{extends file="admin/base.tpl"}

{block name="title" append} - Sites{/block}


{block name="css" append}
	{embedcss cssfile="/assets/css/metas.css"}
{/block}

{block name="heading" append}
	- <a href="/admin/{$module}/edit/{$editSite->site_id}">{$editSite->name}</a>
{/block}


{block name="js" append}	
	{embedjs script="/assets/js/admin/user_metas.js"}	
{/block}
		
{block name="content"}
	{initScript script='UserMetas'}
	{*
	<div class="row">
		<ul class="metas">
		{foreach $metas as $meta}
			<li>
				<div class="left">
					<input type="checkbox" class="squaredOne" />
					 {$meta->name}
				</div>
			</li>
		{/foreach}
		</ul>
	</div>
	*}

	<div class="row">
	{foreach $groups as $scope => $items}
		<h2>{$scope}</h2>
		{foreach $items as $group => $metaItems}
			<h3>{str_replace($scope|cat:'_', '', $group)}</h3>
			<div class="row">
				<ul class="metas">
				{foreach $metaItems as $meta}
					<li>
						<div class="left">
							<input type="checkbox" class="meta-trigger" {if in_array($meta->meta_id, $siteMetas)}checked="checked"{/if} data-meta_id="{$meta->meta_id}" data-site_id="{$editSite->site_id}" />
							 {$meta->name}
						</div>
					</li>
				{/foreach}
				</ul>
			</div>
		{/foreach}
	{/foreach}
	</div>
{/block}