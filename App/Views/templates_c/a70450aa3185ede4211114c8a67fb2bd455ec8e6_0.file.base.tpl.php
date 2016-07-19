<?php
/* Smarty version 3.1.29, created on 2016-07-14 17:06:22
  from "/var/www/lightupmylove.com/App/Views/base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5787c68e6a6c46_23770237',
  'file_dependency' => 
  array (
    'a70450aa3185ede4211114c8a67fb2bd455ec8e6' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/base.tpl',
      1 => 1466972347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site-css.tpl' => 1,
    'file:top-menu.tpl' => 1,
    'file:footer-menu.tpl' => 1,
  ),
),false)) {
function content_5787c68e6a6c46_23770237 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.compile_stack.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html>
	<head>
		<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_11712561935787c68e64dce0_71500361',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "meta_description", array (
  0 => 'block_19057047765787c68e65a791_03471257',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		<meta name="keyword" content="<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "meta_keyword", array (
  0 => 'block_4164888645787c68e6644c8_99795473',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_17239390835787c68e66d882_32221459',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:site-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_17737363325787c68e689647_33525437',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		
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
		<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<div class="contentHolder">
				<div class="left">
					<div class="logo"><span class="site-name"><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
</span> up my Love</div>

				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
					<div class="left">
						<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					</div>
					<div class="right">
						<a class="btn btn-head" href="/user/logout">Logout</a>
					</div>
				<?php } else { ?>
					<div class="right" >
						<a class="btn btn-head" href="/user/signup">Signup</a>
						<?php if ($_smarty_tpl->tpl_vars['site']->value->status != "prelaunch") {?>
							or
							<a class="btn btn-head" href="/user/login">Login</a>
						<?php }?>
					</div>
				<?php }?>
			</div>
		</header>
		<div class="contentHolder main-body">
			<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_8418214935787c68e69e039_75984270',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		</div>


		<footer>	
			<div class="contentHolder">	
				<div class="row">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
</html><?php }
/* {block 'title'}  file:base.tpl */
function block_11712561935787c68e64dce0_71500361($_smarty_tpl, $_blockParentStack) {
echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);
}
/* {/block 'title'} */
/* {block 'meta_description'}  file:base.tpl */
function block_19057047765787c68e65a791_03471257($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['site']->value->description;
}
/* {/block 'meta_description'} */
/* {block 'meta_keyword'}  file:base.tpl */
function block_4164888645787c68e6644c8_99795473($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['site']->value->keywords;
}
/* {/block 'meta_keyword'} */
/* {block 'css'}  file:base.tpl */
function block_17239390835787c68e66d882_32221459($_smarty_tpl, $_blockParentStack) {
?>

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
		<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:base.tpl */
function block_17737363325787c68e689647_33525437($_smarty_tpl, $_blockParentStack) {
?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/login.js"),$_smarty_tpl);?>

		<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:base.tpl */
function block_8418214935787c68e69e039_75984270($_smarty_tpl, $_blockParentStack) {
?>


			<?php
}
/* {/block 'content'} */
}
