{extends file="base.tpl"}

{block name="title" append} - Sign up{/block}


{block name="css" append}
	{embedcss cssfile="/assets/css/forms.css"}
	{embedcss cssfile="/assets/css/popup.css"}
{/block}


{block name="js" append}
	{embedjs script="/assets/js/validation.js"}
	{embedjs script="/assets/js/signup.js"}
	{embedjs script="/assets/js/form.js"}
	{embedjs script="/assets/js/popup.js"}
	{embedjs script="/assets/js/overlay.js"}
	{embedjs script="/assets/js/alerts.js"}
{/block}
		
{block name="content"}
	<div class="row">

	</div>

{/block}