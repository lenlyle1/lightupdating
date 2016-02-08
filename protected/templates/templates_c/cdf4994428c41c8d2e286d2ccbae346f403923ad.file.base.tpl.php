<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 21:24:00
         compiled from "/var/www/lightupmylove.com/protected/templates/admin/sites/base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45555649456a14c531fa706-91045229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf4994428c41c8d2e286d2ccbae346f403923ad' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/sites/base.tpl',
      1 => 1453411438,
      2 => 'file',
    ),
    '82e15143c802dc21c5df6be027a8dc551010ac7e' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/base.tpl',
      1 => 1453409676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45555649456a14c531fa706-91045229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a14c53265495_55365600',
  'variables' => 
  array (
    'site' => 0,
    'isLive' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a14c53265495_55365600')) {function content_56a14c53265495_55365600($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
 up my Love - Admin - Sites</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="" />
		<meta name="keyword" content="" />
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>

		
			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/admin.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/responsive.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/globalStyles.css"),$_smarty_tpl);?>

		



		
			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

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
						<li><a class="btn" href="/admin/user">Users</a></li>
						<li><a class="btn" href="/admin/images">Images</a></li>
						<li><a class="btn" href="/admin/sites">Sites</a></li>
					</ul>
				</div>
				<div class="right" style="margin-top: 15px;">
					<a class="btn btn-blue" href="/admin/user/logout">Logout</a>
				</div>
				<?php }?>
			</div>
		</header>

		<div class="contentHolder main-body">
			
	
	<div class="row">
		<h1>Sites</h1>
	</div>

	<div class="menu-bar">
		<ul class="hori-menu">
			<li><a class="btn" href="/admin/user">Add New Site</a></li>
		</ul>
	</div>

		</div>
	</body>
</html><?php }} ?>
