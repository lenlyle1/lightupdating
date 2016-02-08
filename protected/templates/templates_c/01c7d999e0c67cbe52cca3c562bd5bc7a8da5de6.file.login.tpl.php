<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-02 21:21:29
         compiled from "/var/www/lightupmylove.com/protected/templates/admin/login/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99469252256a02259cf96a9-38738801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c7d999e0c67cbe52cca3c562bd5bc7a8da5de6' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/login/login.tpl',
      1 => 1453755316,
      2 => 'file',
    ),
    '82e15143c802dc21c5df6be027a8dc551010ac7e' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/base.tpl',
      1 => 1454344985,
      2 => 'file',
    ),
    'd405f3d58cb02a4517ee700aace5232f814dc79c' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/loginForm.tpl',
      1 => 1454254024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99469252256a02259cf96a9-38738801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a02259d47410_37997019',
  'variables' => 
  array (
    'site' => 0,
    'isLive' => 0,
    'user' => 0,
    'module' => 0,
    'page' => 0,
    'error' => 0,
    'swatches' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a02259d47410_37997019')) {function content_56a02259d47410_37997019($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
if (!is_callable('smarty_function_initScript')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.initScript.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
 up my Love - Admin - Login</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="" />
		<meta name="keyword" content="" />
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		
			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/admin.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/swatch.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/responsive.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/globalStyles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>

		



		
			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/spinner.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/overlay.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/popup.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/error.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

		
	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/login.js"),$_smarty_tpl);?>



		<?php echo smarty_function_compile_stack(array(),$_smarty_tpl);?>


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
					<div class="logo">Lo<img src="/assets/images/site-images/heart.png" id="logo-heart" />e</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
				<div class="left">
					<ul class="hori-menu">
						<li><a class="btn" href="/admin/users">Users</a></li>
						<li><a class="btn" href="/admin/images">Images</a></li>
						<li><a class="btn" href="/admin/sites">Sites</a></li>
						<li><a class="btn" href="/admin/roles">Roles</a></li>
					</ul>
				</div>
				<div class="right" style="margin-top: 15px;">
					<a class="btn btn-blue" href="/admin/users/logout">Logout</a>
				</div>
				<?php }?>
			</div>
		</header>

		<div class="contentHolder main-body">		
			<div class="row">
				<h1>
						<?php echo ucwords($_smarty_tpl->tpl_vars['module']->value);?>

						<?php if ($_smarty_tpl->tpl_vars['module']->value!=$_smarty_tpl->tpl_vars['page']->value) {?>
							 - <?php echo str_replace('-',' ',ucwords($_smarty_tpl->tpl_vars['page']->value));?>

						<?php }?>
					</h1>
			</div>


			<div class="row">
				<div class="error errorBox" id="errorBox"><?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></div>
				
	
	<?php echo smarty_function_initScript(array('script'=>'Login'),$_smarty_tpl);?>

	<?php if (!empty($_SESSION['loggedIn'])) {?>
		logged in 
	<?php }?>
	<?php /*  Call merged included template "user/loginForm.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("user/loginForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '99469252256a02259cf96a9-38738801');
content_56b11dd98d9630_09560548($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "user/loginForm.tpl" */?>

		</div>

		<?php if (!empty($_smarty_tpl->tpl_vars['swatches']->value)) {?>
		<footer>		
			<div class="contentHolder">
				<h2>Swatches</h2>	
				<div class="contentHolder center">
					<?php echo $_smarty_tpl->tpl_vars['swatches']->value;?>

				</div>
			</div>
		</footer>
		<?php }?>

	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-02 21:21:29
         compiled from "/var/www/lightupmylove.com/protected/templates/user/loginForm.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56b11dd98d9630_09560548')) {function content_56b11dd98d9630_09560548($_smarty_tpl) {?>
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
