<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-26 23:49:11
         compiled from "/var/www/lightupmylove.com/protected/templates/admin/roles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193951815156a16672e5ab47-85163091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fa0b5b37190a7230ea2029663c66f3615a0fa22' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/roles/edit.tpl',
      1 => 1453824087,
      2 => 'file',
    ),
    '82e15143c802dc21c5df6be027a8dc551010ac7e' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/base.tpl',
      1 => 1453828985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193951815156a16672e5ab47-85163091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a16672ec2153_63280992',
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
<?php if ($_valid && !is_callable('content_56a16672ec2153_63280992')) {function content_56a16672ec2153_63280992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
if (!is_callable('smarty_function_initScript')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.initScript.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->shortname);?>
 up my Love - Admin - </title>

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

		
	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/admin/roles.js"),$_smarty_tpl);?>
	


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
					
 - <span class="rolename"><?php echo ucwords(str_replace('_',' ',$_smarty_tpl->tpl_vars['role']->value->name));?>
</span>
</h1>
			</div>

			<div class="error errorBox" id="errorBox"><?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></div>
			
	<?php echo smarty_function_initScript(array('script'=>'Roles'),$_smarty_tpl);?>


	<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['module']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->iteration++;
?>		
		<?php $_smarty_tpl->tpl_vars["hasModule"] = new Smarty_variable(false, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['roleModule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roleModule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role']->value->modules; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roleModule']->key => $_smarty_tpl->tpl_vars['roleModule']->value) {
$_smarty_tpl->tpl_vars['roleModule']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['module']->value->module_id==$_smarty_tpl->tpl_vars['roleModule']->value->module_id) {?>
				<?php $_smarty_tpl->tpl_vars["hasModule"] = new Smarty_variable(true, null, 0);?>
				<?php break 1;?>
			<?php }?>
		<?php } ?>
		<div class="row <?php if ($_smarty_tpl->tpl_vars['module']->iteration%2) {?>even<?php }?> list-row">
			<div class="left v-center">			
				<label>
					<input type="checkbox" class="module-trigger" data-module_id="<?php echo $_smarty_tpl->tpl_vars['module']->value->module_id;?>
" data-role_id="<?php echo $_smarty_tpl->tpl_vars['role']->value->role_id;?>
" <?php if ($_smarty_tpl->tpl_vars['hasModule']->value) {?>checked="checked"<?php }?>/> 
					<?php echo ucwords($_smarty_tpl->tpl_vars['module']->value->name);?>

				</label>
			</div>
			<div class="right <?php if (!$_smarty_tpl->tpl_vars['hasModule']->value) {?>hidden<?php }?>">
				<fieldset class="form-item">
					<select name="permission" class='permissionDD' data-module_id="<?php echo $_smarty_tpl->tpl_vars['module']->value->module_id;?>
" data-role_id="<?php echo $_smarty_tpl->tpl_vars['role']->value->role_id;?>
">
						<option value="view" <?php if ($_smarty_tpl->tpl_vars['roleModule']->value->permission=='view') {?>selected="selected"<?php }?>>View</option>
						<option value="modify" <?php if ($_smarty_tpl->tpl_vars['roleModule']->value->permission=='modify') {?>selected="selected"<?php }?>>Modify</option>
					</select>
				</fieldset>
			</div>
		</div>
	<?php } ?>

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
