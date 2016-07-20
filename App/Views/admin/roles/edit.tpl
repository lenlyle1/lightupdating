{extends file="admin/base.tpl"}

{block name="title" append} - {/block}


{block name="css" append}

{/block}

{block name="heading" append}
 - <span class="rolename">{ucwords(str_replace('_', ' ', $role->name))}</span>
{/block}

{block name="js" append}
	{embedjs script="/assets/js/admin/roles.js"}	
{/block}
		
{block name="content"}
	{initScript script='Roles'}

	{foreach $modules as $module}		
		{assign var="hasModule" value=false}
		{foreach $role->modules as $roleModule}
			{if $module->module_id == $roleModule->module_id}
				{assign var="hasModule" value=true}
				{break}
			{/if}
		{/foreach}
		<div class="row {if $module@iteration %2}even{/if} list-row">
			<div class="left v-center">			
				<label>
					<input type="checkbox" class="module-trigger" data-module_id="{$module->module_id}" data-role_id="{$role->role_id}" {if $hasModule}checked="checked"{/if}/> 
					{ucwords($module->name)}
				</label>
			</div>
			<div class="right {if !$hasModule}hidden{/if}">
				<fieldset class="form-item">
					<select name="permission" class='permissionDD' data-module_id="{$module->module_id}" data-role_id="{$role->role_id}">
						<option value="view" {if $roleModule->permission == 'view'}selected="selected"{/if}>View</option>
						<option value="modify" {if $roleModule->permission == 'modify'}selected="selected"{/if}>Modify</option>
					</select>
				</fieldset>
			</div>
		</div>
	{/foreach}
{/block}