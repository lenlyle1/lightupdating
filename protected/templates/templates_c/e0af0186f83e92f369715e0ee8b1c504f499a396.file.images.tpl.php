<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-27 23:02:57
         compiled from "/var/www/lightupmylove.com/protected/templates/user/images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2135598978569fadc5222547-66366258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0af0186f83e92f369715e0ee8b1c504f499a396' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/images.tpl',
      1 => 1453935775,
      2 => 'file',
    ),
    '74df6527a27de36803c4874f5cbf309919e09ffb' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/base.tpl',
      1 => 1453934418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135598978569fadc5222547-66366258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569fadc5277687_98032612',
  'variables' => 
  array (
    'site' => 0,
    'siteStyle' => 0,
    'isLive' => 0,
    'user' => 0,
    'swatches' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fadc5277687_98032612')) {function content_569fadc5277687_98032612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);?>
 - Images</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="" />
		<meta name="keyword" content="" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/styles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/responsive.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/globalStyles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/site-styles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/sites-geometry.css"),$_smarty_tpl);?>


			<?php if (!empty($_smarty_tpl->tpl_vars['siteStyle']->value)) {?>
				<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/".((string)$_smarty_tpl->tpl_vars['siteStyle']->value).".css"),$_smarty_tpl);?>

			<?php }?>
		

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/dropzone.css"),$_smarty_tpl);?>

	<style>
	</style>


		<?php echo $_smarty_tpl->getSubTemplate ("site-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		
			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			
		
	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/file_uploader.js"),$_smarty_tpl);?>

	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			if (window.File && window.FileList && window.FileReader) {
				FileUploader.init();
			}
		});
		$(window).on("dragover",function(e){
			e.stopPropagation();
	        e.preventDefault();
		})
		.on("drop",function(e){		  
			e.stopPropagation();
	        e.preventDefault();
		});
	<?php echo '</script'; ?>
>


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
					<div class="logo"><?php echo $_smarty_tpl->tpl_vars['site']->value->shortname;?>
</div>
					<img src="/assets/images/site-images/heart.png" id="logo-heart" />
				</div>
				<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
					<div class="left">
						<?php echo $_smarty_tpl->getSubTemplate ("top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
					<div class="right" style="margin-top: 15px;">
						<a class="btn btn-head" href="/users/logout">Logout</a>
					</div>
				<?php } else { ?>
					<div class="right" style="margin-top: 15px;">
						<a class="btn btn-head" href="/user/signup">Signup</a>
						or
						<a class="btn btn-head" href="/user/login">Login</a>
					</div>
				<?php }?>
			</div>
		</header>
		<div class="contentHolder main-body">
			

	<div class="row">
		<h1>Images</h1>
		<div class="row">
			<input type="file" id="fileinput" multiple="multiple" name="files[]" />
		</div>
		<div id="dropzoneHolder" class="hidden row center">
			- or - 
			<div class="dropzone">
		        Drop files here
		    </div>
		    <div id="imageHolder"></div>
	    </div>
	</div>

		</div>


		<footer>	
			<div class="contentHolder">	
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

	</body>
</html><?php }} ?>
