<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-09 15:23:13
         compiled from "/var/www/lightupdating/protected/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130328471656ba046171fec1-68291894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f65e792913a89303b2bc7d0bf42507ae06b8ad' => 
    array (
      0 => '/var/www/lightupdating/protected/templates/home/home.tpl',
      1 => 1454969588,
      2 => 'file',
    ),
    '0c5aa149af02f7bc5220d9ffcb07cb35b44bf536' => 
    array (
      0 => '/var/www/lightupdating/protected/templates/base.tpl',
      1 => 1454969588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130328471656ba046171fec1-68291894',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ba0461854c61_49479576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ba0461854c61_49479576')) {function content_56ba0461854c61_49479576($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupdating/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupdating/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupdating/protected/classes/Smarty/plugins/function.compile_stack.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);?>
</title>

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
	Home page
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
