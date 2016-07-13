{extends file="base.tpl"}

{block name="title" append}{/block}


{block name="css" append}
	{embedcss cssfile="/assets/css/search.css"}
{/block}


{block name="js" append}
	{embedjs script="/assets/js/search.js"}
{/block}
		
{block name="content"}
	{initScript script='Search'}

	<div class="row">
		Search Results

		{foreach $results as $result}
			<div class="user-brief">
				{generate_resized_image img="$result->image" width="300"}
			</div>
		{/foreach}
	</div>
{/block}