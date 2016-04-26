{extends file="admin/base.tpl"}

{block name="title" append} - Sites{/block}


{block name="css" append}
	{embedcss cssfile="/assets/css/metas.css"}
{/block}

{block name="heading" append}

{/block}


{block name="js" append}	
	{embedjs script="/assets/js/admin/user_metas.js"}	
{/block}
		
{block name="content"}
	{initScript script='UserMetas'}
	
	{foreach $metas as $type => $items}
	<div class="row">
		<h2>
			{ucwords($type)} Metas
			<div class="btn btn-blue">Add new</div>
		</h2>
		<ul class="metas metasList">
		{foreach $items as $meta}
			<li>
				<div class="left">
					<b>{$meta->name}</b>
					-
					{$meta->type}
					-
					{$meta->values}
				</div>
			</li>
		{/foreach}
		</ul>
	</div>
	{/foreach}
	

	<div class="row">
	

	</div>
{/block}