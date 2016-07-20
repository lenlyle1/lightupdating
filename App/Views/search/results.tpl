{extends file="base.tpl"}

{block name="title" append}{/block}


{block name="css" append}
	{embedcss cssfile="/assets/css/search.css"}
{/block}


{block name="js" append}
	{embedjs script="/assets/js/search.js"}
	{embedjs script="/assets/js/results.js"}
{/block}
		
{block name="content"}
	{initScript script='Search'}
	{initScript script='Results'}

	<div class="row">
		<h1>Search Results</h1>
		<div class="search-results">
			{foreach $results as $result}
				<div class="user-brief" data-id="{$result->id}">
					{generate_resized_image img=$result->thumbnail width="200"}
					<div class="username">
						<div>{$result->username}</div>
					</div>
					<div class="details"></div>
				</div>
			{/foreach}
		</div>
	</div>
{/block}