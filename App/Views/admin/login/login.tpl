{extends file="admin/base.tpl"}

{block name="title" append} - Login{/block}


{block name="css" append}

{/block}


{block name="js" append}
	{embedjs script="/assets/js/form.js"}
	{embedjs script="/assets/js/login.js"}
{/block}
		
{block name="content"}
	
	{initScript script='Login'}
	{if !empty($smarty.session.loggedIn)}
		logged in 
	{/if}
	{include file="user/loginForm.tpl"}
{/block}