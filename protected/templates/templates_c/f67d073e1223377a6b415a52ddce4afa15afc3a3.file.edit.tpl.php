<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-03 19:18:17
         compiled from "/var/www/lightupmylove.com/protected/templates/admin/sites/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45363485856a136727fd4c1-76009966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67d073e1223377a6b415a52ddce4afa15afc3a3' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/sites/edit.tpl',
      1 => 1454261018,
      2 => 'file',
    ),
    '82e15143c802dc21c5df6be027a8dc551010ac7e' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/admin/base.tpl',
      1 => 1454344985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45363485856a136727fd4c1-76009966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a136728508d4_48980317',
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
<?php if ($_valid && !is_callable('content_56a136728508d4_48980317')) {function content_56a136728508d4_48980317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
if (!is_callable('smarty_function_initScript')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.initScript.php';
if (!is_callable('smarty_function_generate_resized_image')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.generate_resized_image.php';
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

			
	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/admin/sites.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/validation.js"),$_smarty_tpl);?>

	


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
				
	<?php echo smarty_function_initScript(array('script'=>'Sites'),$_smarty_tpl);?>

		<div class="row">
			<div class="signupHolder">
				<form id="siteEdit" method="post" action="/admin/sites/update">
					<input type="hidden" name="siteId" id="siteId" value="<?php echo $_smarty_tpl->tpl_vars['editSite']->value->site_id;?>
" />
					<fieldset class="form-item">
						<label for="emailInput">Site Name</label>
						<input class="required" name="name" id="nameInput" value="<?php if (!empty($_smarty_tpl->tpl_vars['editSite']->value->name)) {
echo $_smarty_tpl->tpl_vars['editSite']->value->name;
}?>" placeholder="Site Name" />
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Shortname</label>
						<input class="required" name="shortname" id="shortnameInput" value="<?php if (!empty($_smarty_tpl->tpl_vars['editSite']->value->shortname)) {
echo $_smarty_tpl->tpl_vars['editSite']->value->shortname;
}?>"  placeholder="Shortname" />
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Blurb</label>
						<textarea name="blurb" maxlength="512"><?php echo $_smarty_tpl->tpl_vars['editSite']->value->blurb;?>
</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Description</label>
						<textarea name="description" maxlength="256"><?php echo $_smarty_tpl->tpl_vars['editSite']->value->description;?>
</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Keywords (comma separated)</label>
						<textarea name="keywords" maxlength="256"><?php echo $_smarty_tpl->tpl_vars['editSite']->value->keywords;?>
</textarea>
					</fieldset>
					<fieldset class="form-item">
						<label for="nameInput">Swatch</label>
						<textarea name="swatch" maxlength="512" style="min-height: 300px;"><?php echo $_smarty_tpl->tpl_vars['editSite']->value->swatch;?>
</textarea>
					</fieldset>
		
					<fieldset class="form-item center">
						<div class="btn btn-blue" id="saveSite">
							Save Site
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="signupHolder">
				<form id="imageEdit" method="post" action="/admin/sites/header-image" enctype="multipart/form-data">
					<input type="hidden" name="siteId" id="siteId" value="<?php echo $_smarty_tpl->tpl_vars['editSite']->value->site_id;?>
" />
					<input type="hidden" name="shortname" id="shortname" value="<?php echo $_smarty_tpl->tpl_vars['editSite']->value->shortname;?>
" />
					<fieldset class="form-item">
						<label for="nameInput">Header Image</label>

						<div class="right">	
										
							<?php echo smarty_function_generate_resized_image(array('img'=>((string)$_smarty_tpl->tpl_vars['header_image']->value),'width'=>"200"),$_smarty_tpl);?>

							

						</div>
						<div class="right">
							<input type="file" name="header_image" size="25" />
						</div>
					</fieldset>
					<fieldset class="form-item center">
						<div class="btn btn-blue" id="saveImage">
							Upload Image
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="signupHolder">
				<form id="siteStatus">
					<fieldset class="form-item">
						<label for="nameInput">Site Status</label>
						<select name="active" class='activeDD' id="statusDD">
							<option value="inactive" <?php if ($_smarty_tpl->tpl_vars['editSite']->value->status=='inactive') {?>selected="selected"<?php }?>>Inactive</option>
							<option value="active" <?php if ($_smarty_tpl->tpl_vars['editSite']->value->status=='active') {?>selected="selected"<?php }?>>Live</option>
						</select>
				</fieldset>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="signupHolder">
				<h2>Hostnames</h2>
			</div>
		</div>
		<div class="row">
			<form id="addSite" action="/admin/sites/add-host" method="post">		
				<input type="hidden" name="siteId" id="siteId" value="<?php echo $_smarty_tpl->tpl_vars['editSite']->value->site_id;?>
" />
				<fieldset class="form-item left">
					<input class="required" name="hostname" id="hostnameInput" placeholder="Hostname" />
				</fieldset>
				<fieldset class="form-item left">
					<div class="btn btn-blue" id="submitNewSite">
						Add New Hostname
					</div>
				</fieldset>
			</form>
		</div>
		<hr />
		<?php  $_smarty_tpl->tpl_vars['host'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['host']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editSite']->value->hosts; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['host']->key => $_smarty_tpl->tpl_vars['host']->value) {
$_smarty_tpl->tpl_vars['host']->_loop = true;
?>
		<div class="row ">
			<div class="link-row">
				<div class="left">
					<?php echo $_smarty_tpl->tpl_vars['host']->value->hostname;?>

				</div>
				<div class="right">

				</div>
			</div>
		</div>
		<?php } ?>


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
