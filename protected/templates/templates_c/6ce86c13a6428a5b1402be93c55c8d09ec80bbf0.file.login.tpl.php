<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-03 20:10:38
         compiled from "/var/www/lightupmylove.com/protected/templates/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628257784568844182875c7-80692632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce86c13a6428a5b1402be93c55c8d09ec80bbf0' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/login.tpl',
      1 => 1454513980,
      2 => 'file',
    ),
    '74df6527a27de36803c4874f5cbf309919e09ffb' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/base.tpl',
      1 => 1454530233,
      2 => 'file',
    ),
    'd405f3d58cb02a4517ee700aace5232f814dc79c' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/loginForm.tpl',
      1 => 1454254024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628257784568844182875c7-80692632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568844182c98b0_34009335',
  'variables' => 
  array (
    'site' => 0,
    'siteStyle' => 0,
    'recaptcha' => 0,
    'isLive' => 0,
    'user' => 0,
    'swatches' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568844182c98b0_34009335')) {function content_568844182c98b0_34009335($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);?>
 - Sign up</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" />
		<meta name="keyword" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->keywords;?>
" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/responsive.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/styles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/globalStyles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/site-styles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/sites-geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/responsive.css"),$_smarty_tpl);?>


			<?php if (!empty($_smarty_tpl->tpl_vars['siteStyle']->value)) {?>
				<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/".((string)$_smarty_tpl->tpl_vars['siteStyle']->value).".css"),$_smarty_tpl);?>

			<?php }?>
		

		<?php echo $_smarty_tpl->getSubTemplate ("site-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		
			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/login.js"),$_smarty_tpl);?>

		
	<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
>

		
		<?php echo smarty_function_compile_stack(array(),$_smarty_tpl);?>


		<?php if (!empty($_smarty_tpl->tpl_vars['recaptcha']->value)) {?>
			<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
		<?php }?>

		<?php echo '<script'; ?>
>
			$(document).ready(function(){
				<?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>
					Log.output = true;
				<?php }?>
			});
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<div class="contentHolder">
				<div class="left">
					<div class="logo"><?php echo $_smarty_tpl->tpl_vars['site']->value->shortname;?>
</div>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
					<div class="left">
						<?php echo $_smarty_tpl->getSubTemplate ("top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
					<div class="right">
						<a class="btn btn-head" href="/users/logout">Logout</a>
					</div>
				<?php } else { ?>
					<div class="right" >
						<a class="btn btn-head" href="/user/signup">Signup</a>
						<?php if ($_smarty_tpl->tpl_vars['site']->value->status!="prelaunch") {?>
							or
							<a class="btn btn-head" href="/user/login">Login</a>
						<?php }?>
					</div>
				<?php }?>
			</div>
		</header>
		<div class="contentHolder main-body">
			


	<div class="row">
		<h1>Login</h1>
		<?php /*  Call merged included template "user/loginForm.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("user/loginForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1628257784568844182875c7-80692632');
content_56b25ebee9f764_17356943($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "user/loginForm.tpl" */?>
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

		</div>


		<footer>	
			<div class="contentHolder">	
				<div class="row">
					<?php echo $_smarty_tpl->getSubTemplate ("footer-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<div class="row">
					<div class="center copyright">
						&copy; Copyright Light Up My Love LLC
					</div>
				</div>
				
				<?php if (!empty($_smarty_tpl->tpl_vars['swatches']->value)) {?>
				<div class="swatchHolder">
					<h2>Swatches</h2>	
					<div class="contentHolder center">
						<?php echo $_smarty_tpl->tpl_vars['swatches']->value;?>

					</div>
				</div>
				<?php }?>
			</div>
		</footer>

		
		<?php echo '<script'; ?>
>
		
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-73295442-1', 'auto');
		  ga('send', 'pageview');
	  	
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-03 20:10:38
         compiled from "/var/www/lightupmylove.com/protected/templates/user/loginForm.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56b25ebee9f764_17356943')) {function content_56b25ebee9f764_17356943($_smarty_tpl) {?>
<div class="container">
	<div class="row">
		<div class="signupHolder">
			<form id="signin" action="/<?php if (!empty($_smarty_tpl->tpl_vars['admin']->value)) {?>admin/<?php }?>user/login" method="post">
				<fieldset class="form-item">
					<label for="emailInput">Email</label>
					<input class="required" name="username" id="usernameInput" placeholder="Username" />
				</fieldset>
				<fieldset class="form-item">
					<label for="emailInput">Password</label>
					<input class="required" name="password" type="password" id="passwordInput" placeholder="Password" />
				</fieldset>
				<fieldset class="form-item">
					<div class="row center">
						<div class="btn btn-blue" id="submitForm">
							Login
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<div style="clear: both"></div><?php }} ?>
