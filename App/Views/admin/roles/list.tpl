{extends file="admin/base.tpl"}

{block name="title" append} - Roles{/block}

		
{block name="content"}

	{foreach $roles as $k => $role}	
		<div class="row">
			<div class="link-row">
				<a href="/admin/roles/edit/{$role->role_id}">{$role->name}</a>
			</div>
		</div>
	{/foreach}

{/block}