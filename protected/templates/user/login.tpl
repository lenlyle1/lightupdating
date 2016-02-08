{extends file="base.tpl"}

{block name="title" append} - Sign up{/block}

{block name="js" append}
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


	<div class="row">
		<h1>Login</h1>
		{include file="user/loginForm.tpl"}
	</div>

	<div class="row">
		<div class="btn btn-blue" onclick="Login.fbLogin();">Facebook <i class="fa fa-facebook"></i></div>
		<form name="facebookForm" id="facebook_signup" action="/user/signup" method="post">
			<input type="hidden" name="first_name" id="first_name" />
			<input type="hidden" name="last_name" id="last_name" />
			<input type="hidden" name="email" id="email" />
			<input type="hidden" name="picture" id="picture" />
			<input type="hidden" name="gender" id="gender" />
			<input type="hidden" name="timezone" id="timezone" />
			<input type="hidden" name="locale" id="locale" />
		</form>
	</div>
{/block}