<?php
/* Smarty version 3.1.29, created on 2016-07-25 22:10:23
  from "/var/www/lightupmylove.com/App/Views/base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57968e4fca1db8_93313896',
  'file_dependency' => 
  array (
    'a70450aa3185ede4211114c8a67fb2bd455ec8e6' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/base.tpl',
      1 => 1469484620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:site-css.tpl' => 1,
    'file:top-menu.tpl' => 2,
    'file:footer-menu.tpl' => 1,
  ),
),false)) {
function content_57968e4fca1db8_93313896 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_compile_stack')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.compile_stack.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html lang="en" ng-app="lightupApp">
	<head>
		<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_14480333757968e4fc4fa31_35517995',
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
  0 => 'block_178146264657968e4fc547e3_14216449',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		<meta name="keyword" content="<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "meta_keyword", array (
  0 => 'block_63864959257968e4fc57640_74322217',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<?php echo '<script'; ?>
 src="bower_components/angular/angular.js"><?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_17144339857968e4fc5a5d0_22041354',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:site-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_150631150857968e4fc89035_83076857',
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
			
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<div class="contentHolder">
				<div class="left">
					<div class="logo">
						<a href="/">
							<span class="site-name"><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
</span> up my Love
						</a>
					</div>

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
					<div class="left">
						<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					</div>
					<div class="right top-signin" >
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
  0 => 'block_182699913857968e4fc98f44_28466187',
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
function block_14480333757968e4fc4fa31_35517995($_smarty_tpl, $_blockParentStack) {
echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);
}
/* {/block 'title'} */
/* {block 'meta_description'}  file:base.tpl */
function block_178146264657968e4fc547e3_14216449($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['site']->value->description;
}
/* {/block 'meta_description'} */
/* {block 'meta_keyword'}  file:base.tpl */
function block_63864959257968e4fc57640_74322217($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['site']->value->keywords;
}
/* {/block 'meta_keyword'} */
/* {block 'css'}  file:base.tpl */
function block_17144339857968e4fc5a5d0_22041354($_smarty_tpl, $_blockParentStack) {
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
function block_150631150857968e4fc89035_83076857($_smarty_tpl, $_blockParentStack) {
?>


		<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:base.tpl */
function block_182699913857968e4fc98f44_28466187($_smarty_tpl, $_blockParentStack) {
?>


			<?php
}
/* {/block 'content'} */
}
