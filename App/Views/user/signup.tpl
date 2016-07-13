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

	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1136089219765315',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {
	     		return;
     	 }
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

{/block}
		
{block name="content"}
	
	
   {initScript script='Signup'}
	<div class="row">
		{if !empty($prelaunch)}
		<div class="row">
			<p>The site will be launching in the next month.  Please sign up to be notified when we go live.</p>

			<p>The first 1,000 people to sign up will be automatically upgraded to a premium account for free.</p>
		</div>
		{/if}
		<h1>Signup</h1>
	</div>
	<div class="row error hidden" id="errorBox"></div>
	<div class="row">
		{include file="user/signupForm.tpl"}
	</div>

{/block}