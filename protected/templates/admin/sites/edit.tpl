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
			<div class="signupHolder">
				<form id="siteEdit" method="post" action="/admin/sites/update">
					<input type="hidden" name="siteId" id="siteId" value="{$editSite->site_id}" />
					<fieldset class="form-item">
						<label for="emailInput">Site Name</label>
						<input class="required" name="name" id="nameInput" value="{if !empty($editSite->name)}{$editSite->name}{/if}" placeholder="Site Name" />
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Shortname</label>
						<input class="required" name="shortname" id="shortnameInput" value="{if !empty($editSite->shortname)}{$editSite->shortname}{/if}"  placeholder="Shortname" />
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Blurb</label>
						<textarea name="blurb" maxlength="512">{$editSite->blurb}</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Description</label>
						<textarea name="description" maxlength="256">{$editSite->description}</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Keywords (comma separated)</label>
						<textarea name="keywords" maxlength="256">{$editSite->keywords}</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Swatch</label>
						<textarea name="swatch" maxlength="512" style="min-height: 300px;">{$editSite->swatch}</textarea>
					</fieldset>
		
					<fieldset class="form-item center">
						<div class="btn btn-blue" id="saveSite">
							Save Site
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="signupHolder">
				<form id="imageEdit" method="post" action="/admin/sites/header-image" enctype="multipart/form-data">
					<input type="hidden" name="siteId" id="siteId" value="{$editSite->site_id}" />
					<input type="hidden" name="shortname" id="shortname" value="{$editSite->shortname}" />
					<fieldset class="form-item">
						<label for="nameInput">Header Image</label>

						<div class="right">	
										
							{generate_resized_image img="$header_image" width="200"}
							

						</div>
						<div class="right">
							<input type="file" name="header_image" size="25" />
						</div>
					</fieldset>
					<fieldset class="form-item center">
						<div class="btn btn-blue" id="saveImage">
							Upload Image
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="signupHolder">
				<form id="siteStatus">
					<fieldset class="form-item">
						<label for="nameInput">Site Status</label>
						<select name="active" class='activeDD' id="statusDD">
							<option value="inactive" {if $editSite->status == 'inactive'}selected="selected"{/if}>Inactive</option>
							<option value="active" {if $editSite->status == 'active'}selected="selected"{/if}>Live</option>
						</select>
				</fieldset>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="signupHolder">
				<h2>Hostnames</h2>
			</div>
		</div>
		<div class="row">
			<form id="addSite" action="/admin/sites/add-host" method="post">		
				<input type="hidden" name="siteId" id="siteId" value="{$editSite->site_id}" />
				<fieldset class="form-item left">
					<input class="required" name="hostname" id="hostnameInput" placeholder="Hostname" />
				</fieldset>
				<fieldset class="form-item left">
					<div class="btn btn-blue" id="submitNewSite">
						Add New Hostname
					</div>
				</fieldset>
			</form>
		</div>
		<hr />
		{foreach $editSite->hosts as $host}
		<div class="row ">
			<div class="link-row">
				<div class="left">
					{$host->hostname}
				</div>
				<div class="right">

				</div>
			</div>
		</div>
		{/foreach}

{/block}