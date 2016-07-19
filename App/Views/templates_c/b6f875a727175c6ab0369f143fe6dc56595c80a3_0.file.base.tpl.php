<?php
/* Smarty version 3.1.29, created on 2016-07-16 21:22:38
  from "/var/www/lightupmylove.com/App/Views/admin/base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578aa59eca6962_27776332',
  'file_dependency' => 
  array (
    'b6f875a727175c6ab0369f143fe6dc56595c80a3' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/admin/base.tpl',
      1 => 1468704154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578aa59eca6962_27776332 ($_smarty_tpl) {
if (!is_callable('smarty_function_embedcss')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) require_once '/var/www/lightupmylove.com/App/SmartyPlugins/function.compile_stack.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html>
	<head>
		<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_1306669319578aa59ec7aef1_41627621',
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
  0 => 'block_1625783566578aa59ec7fce7_91899417',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		<meta name="keyword" content="<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "meta_keyword", array (
  0 => 'block_268032037578aa59ec81d43_54126787',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
" />
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "css", array (
  0 => 'block_1899302772578aa59ec841e1_78011291',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "js", array (
  0 => 'block_667933818578aa59ec8ee88_32639316',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


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
				<div class="left">
					<ul class="hori-menu">
						<li><a class="btn" href="/admin/users">Users</a></li>
						<li><a class="btn" href="/admin/images">Images</a></li>
						<li><a class="btn" href="/admin/sites">Sites</a></li>
						<li><a class="btn" href="/admin/roles">Roles</a></li>
						<li><a class="btn" href="/admin/metas">Metas</a></li>
					</ul>
				</div>
				<div class="right" style="margin-top: 15px;">
					<a class="btn btn-blue" href="/admin/users/logout">Logout</a>
				</div>
			</div>
		</header>
		<div class="contentHolder main-body">
			<div class="row">
				<h1></h1>
			</div>


			<div class="row">
				<div class="error errorBox" id="errorBox"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></div>
				<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_2031604674578aa59eca06a7_91155950',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

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
</html><?php }
/* {block 'title'}  file:admin/base.tpl */
function block_1306669319578aa59ec7aef1_41627621($_smarty_tpl, $_blockParentStack) {
echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
 up my Love - Admin<?php
}
/* {/block 'title'} */
/* {block 'meta_description'}  file:admin/base.tpl */
function block_1625783566578aa59ec7fce7_91899417($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'meta_description'} */
/* {block 'meta_keyword'}  file:admin/base.tpl */
function block_268032037578aa59ec81d43_54126787($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'meta_keyword'} */
/* {block 'css'}  file:admin/base.tpl */
function block_1899302772578aa59ec841e1_78011291($_smarty_tpl, $_blockParentStack) {
?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/admin.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/geometry.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/swatch.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/globalStyles.css"),$_smarty_tpl);?>

			<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>

		<?php
}
/* {/block 'css'} */
/* {block 'js'}  file:admin/base.tpl */
function block_667933818578aa59ec8ee88_32639316($_smarty_tpl, $_blockParentStack) {
?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/spinner.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/overlay.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/popup.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/error.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

		<?php
}
/* {/block 'js'} */
/* {block 'content'}  file:admin/base.tpl */
function block_2031604674578aa59eca06a7_91155950($_smarty_tpl, $_blockParentStack) {
?>

			</div>

			<?php
}
/* {/block 'content'} */
}
