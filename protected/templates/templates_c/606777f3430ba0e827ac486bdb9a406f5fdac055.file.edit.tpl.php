<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-26 23:51:30
         compiled from "/var/www/lightupmylove.com/protected/templates/admin/users/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14688478156a16fb1de01f2-38707643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606777f3430ba0e827ac486bdb9a406f5fdac055' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/users/edit.tpl',
      1 => 1453559776,
      2 => 'file',
    ),
    '82e15143c802dc21c5df6be027a8dc551010ac7e' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/base.tpl',
      1 => 1453828985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14688478156a16fb1de01f2-38707643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a16fb1de0892_27665779',
  'variables' => 
  array (
    'site' => 0,
    'isLive' => 0,
    'user' => 0,
    'module' => 0,
    'page' => 0,
    'error' => 0,
    'swatches' => 0,
    'swatch' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a16fb1de0892_27665779')) {function content_56a16fb1de0892_27665779($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
 up my Love - Admin - Users</title>

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
					 - <?php echo $_smarty_tpl->tpl_vars['user']->value->first;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last;?>
</h1>
			</div>

			<div class="error errorBox" id="errorBox"><?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></div>
			
<div class="row form-block">
	<form>		
		<fieldset class="form-item">
			<label for="emailInput">First Name</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->first;?>
" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Last Name</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->last;?>
" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Username</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Email</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" />
		</fieldset>
	</form>
</div>

		</div>

		<footer>			
			<div class="contentHolder">
			<?php if (!empty($_smarty_tpl->tpl_vars['swatches']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['swatch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['swatch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['swatches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['swatch']->key => $_smarty_tpl->tpl_vars['swatch']->value) {
$_smarty_tpl->tpl_vars['swatch']->_loop = true;
?>
					<div class="swatch <?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['swatch']->value;?>
"></div>
				<?php } ?>
			<?php }?>
			</div>
		</footer>
	</body>
</html><?php }} ?>
