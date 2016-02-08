{extends file="admin/base.tpl"}

{block name="title" append} - Users{/block}


{block name="js" append}
	{embedjs script="/assets/js/admin/user.js"}
	
{/block}

{block name="heading" append}
 	<div class="right">Total users: {$usersTotal->count}</div>
{/block}

{block name="content"}

	{initScript script='User'}

	<div class="row">
		<div class="right form-item" style="width: 400px">
			<input placeholder="Search by Email" class="right medium" id="searchEmail"/>
			<div class="btn btn-blue" id="userSearch">Go</div>
		</div>
	</div>
	
	{foreach $users as $k => $user}
		<div class="row">
			<div class="link-row">
				<a href="/admin/users/edit/{$user->user_id}">{$user->username}</a>
			</div>
		</div>
	{/foreach}

{/block}