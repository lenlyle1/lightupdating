{extends file="admin/base.tpl"}

{block name="title" append} - Sites{/block}


{block name="css" append}

{/block}


{block name="js" append}	
	{embedjs script="/assets/js/admin/sites.js"}
	{embedjs script="/assets/js/validation.js"}
{/block}
		


{block name="content"}
	
	{initScript script='Sites'}
	<div class="row">
		<form id="addSite" action="/admin/sites/add" method="post">		
			<fieldset class="form-item left">
				<input class="required" name="name" id="nameInput" placeholder="Site Name" />
			</fieldset>
			<fieldset class="form-item left">
				<input class="required" name="shortname" id="shortnameInput" placeholder="Short Name" />
			</fieldset>
			<fieldset class="form-item left">
				<div class="btn btn-blue" id="submitNewSite">
					Add New Site
				</div>
			</fieldset>
		</form>
	</div>

	<hr />

	{foreach $sites as $k => $site}
		<div class="row ">
			<div class="link-row">
				<a class="left" href="/admin/sites/edit/{$site->site_id}">{$site->name}</a>
				{if $site->status != 'deleted'}
					<div data-site_id="{$site->site_id}" class="right btn-blue btn-row deleteSite" >Delete</div>
				{else}
					<div class="error right">Deleted</div>
				{/if}
			</div>
		</div>
	{/foreach}

{/block}