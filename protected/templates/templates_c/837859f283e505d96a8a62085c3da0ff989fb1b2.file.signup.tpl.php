<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-05 19:23:52
         compiled from "/var/www/lightupmylove.com/protected/templates/user/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9147748845688440b9775f3-13718686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '837859f283e505d96a8a62085c3da0ff989fb1b2' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/signup.tpl',
      1 => 1454518542,
      2 => 'file',
    ),
    '74df6527a27de36803c4874f5cbf309919e09ffb' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/base.tpl',
      1 => 1454530233,
      2 => 'file',
    ),
    '48eb27246d682c89a9719e96663016a6b26fd952' => 
    array (
      0 => '/var/www/lightupmylove.com/protected/templates/user/signupForm.tpl',
      1 => 1454699544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9147748845688440b9775f3-13718686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5688440ba161d3_65793763',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688440ba161d3_65793763')) {function content_5688440ba161d3_65793763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_embedcss')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedcss.php';
if (!is_callable('smarty_function_embedjs')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.embedjs.php';
if (!is_callable('smarty_function_compile_stack')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.compile_stack.php';
if (!is_callable('smarty_function_initScript')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/function.initScript.php';
?><html>
	<head>
		<title><?php echo ucwords($_smarty_tpl->tpl_vars['site']->value->name);?>
 - Sign up</title>

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
		
	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/forms.css"),$_smarty_tpl);?>

	<?php echo smarty_function_embedcss(array('cssfile'=>"/assets/css/popup.css"),$_smarty_tpl);?>



		<?php echo $_smarty_tpl->getSubTemplate ("site-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		
			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/jquery-2.1.4.min.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/logging.js"),$_smarty_tpl);?>

			<?php echo smarty_function_embedjs(array('script'=>"/assets/js/login.js"),$_smarty_tpl);?>

		
	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/validation.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/signup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/form.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/popup.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/overlay.js"),$_smarty_tpl);?>

	<?php echo smarty_function_embedjs(array('script'=>"/assets/js/alerts.js"),$_smarty_tpl);?>


	<?php echo '<script'; ?>
>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1136089219765315',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {
	     		return;
     	 }
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	<?php echo '</script'; ?>
>


		
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
			
	
	
   <?php echo smarty_function_initScript(array('script'=>'Signup'),$_smarty_tpl);?>

	<div class="row">
		<?php if ($_smarty_tpl->tpl_vars['prelaunch']->value) {?>
		<div class="row">
			<p>The site will be launching in the next month.  Please sign up to be notified when we go live.</p>

			<p>The first 1,000 people to sign up will be automatically upgraded to a premium account for free.</p>
		</div>
		<?php }?>
		<h1>Signup</h1>
	</div>
	<div class="row error hidden" id="errorBox"></div>
		<div class="row">
			<?php /*  Call merged included template "user/signupForm.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("user/signupForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9147748845688440b9775f3-13718686');
content_56b4f6c823a3c2_83244821($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "user/signupForm.tpl" */?>
		</div>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-05 19:23:52
         compiled from "/var/www/lightupmylove.com/protected/templates/user/signupForm.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56b4f6c823a3c2_83244821')) {function content_56b4f6c823a3c2_83244821($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/lightupmylove.com/protected/classes/Smarty/plugins/modifier.date_format.php';
?>				<div class="signupHolder">
				
					<form id="signup" method="post">
						<fieldset class="form-item">
							<label for="emailInput">First Name</label>
							<div class="inputHolder">
								<input class="required" name="first" id="firstInput" placeholder="First Name" />
							</div>
						</fieldset>

						<fieldset class="form-item">
							<label for="nameInput">Last Name</label>
							<div class="inputHolder">
								<input class="required" name="last" id="lastInput" placeholder="Last Name" />
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Username</label>
							<div class="inputHolder">
								<input class="required" name="username" id="usernameInput" placeholder="Username" />
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Email</label>
							<div class="inputHolder">
								<input class="required" name="email" id="emailInput" placeholder="Email" />
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Password</label>
							<div class="inputHolder">
								<input class="required small" name="password" type="password" id="passwordInput" placeholder="Password" />
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Gender</label>
							<div class="inputHolder">
								<select name="gender" id="genderSelect" class="required">
									<option value="">Select</option>
									<option value="m">Male</option>
									<option value="f">Female</option>							
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Date of Birth</label>
							<div class="inputHolder">
								<select name="month" class="required">
									<option value="">Month</option>
									<?php $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['month']->step = 1;$_smarty_tpl->tpl_vars['month']->total = (int) ceil(($_smarty_tpl->tpl_vars['month']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['month']->step));
if ($_smarty_tpl->tpl_vars['month']->total > 0) {
for ($_smarty_tpl->tpl_vars['month']->value = 1, $_smarty_tpl->tpl_vars['month']->iteration = 1;$_smarty_tpl->tpl_vars['month']->iteration <= $_smarty_tpl->tpl_vars['month']->total;$_smarty_tpl->tpl_vars['month']->value += $_smarty_tpl->tpl_vars['month']->step, $_smarty_tpl->tpl_vars['month']->iteration++) {
$_smarty_tpl->tpl_vars['month']->first = $_smarty_tpl->tpl_vars['month']->iteration == 1;$_smarty_tpl->tpl_vars['month']->last = $_smarty_tpl->tpl_vars['month']->iteration == $_smarty_tpl->tpl_vars['month']->total;?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
									<?php }} ?>
								</select>
								<select name="day">
									<option value="">Day</option>
									<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['day']->step = 1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = 1, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration == 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration == $_smarty_tpl->tpl_vars['day']->total;?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</option>
									<?php }} ?>
								</select>
								<select name="year">
									<option value="">Year</option>
									<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['year']->step = -1;$_smarty_tpl->tpl_vars['year']->total = (int) ceil(($_smarty_tpl->tpl_vars['year']->step > 0 ? 1920+1 - (smarty_modifier_date_format(time(),'%Y')) : smarty_modifier_date_format(time(),'%Y')-(1920)+1)/abs($_smarty_tpl->tpl_vars['year']->step));
if ($_smarty_tpl->tpl_vars['year']->total > 0) {
for ($_smarty_tpl->tpl_vars['year']->value = smarty_modifier_date_format(time(),'%Y'), $_smarty_tpl->tpl_vars['year']->iteration = 1;$_smarty_tpl->tpl_vars['year']->iteration <= $_smarty_tpl->tpl_vars['year']->total;$_smarty_tpl->tpl_vars['year']->value += $_smarty_tpl->tpl_vars['year']->step, $_smarty_tpl->tpl_vars['year']->iteration++) {
$_smarty_tpl->tpl_vars['year']->first = $_smarty_tpl->tpl_vars['year']->iteration == 1;$_smarty_tpl->tpl_vars['year']->last = $_smarty_tpl->tpl_vars['year']->iteration == $_smarty_tpl->tpl_vars['year']->total;?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
									<?php }} ?>
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="country">Country</label>
							<div class="inputHolder">
								<select name="country" id="country">
									<option value="">Select</option>
									<option value="235">United States</option>
									<option value="40">Canada</option>
									<option value="234">United Kingdom</option>
									<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['country']->value->code_2!='us'&&$_smarty_tpl->tpl_vars['country']->value->code_2!='ca'&&$_smarty_tpl->tpl_vars['country']->value->code_2!='gb') {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->country_id;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->name;?>
</option>
										<?php }?>
									<?php } ?>
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Postcode</label>
							<div class="inputHolder">
								<input class="required" name="postcode" id="" placeholder="" />
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Ethnicity</label>

							<div class="inputHolder">
								<select name="ethnicity" class="required">
									<option value="">Select</option>
									<?php  $_smarty_tpl->tpl_vars['ethnicity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ethnicity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ethnicities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ethnicity']->key => $_smarty_tpl->tpl_vars['ethnicity']->value) {
$_smarty_tpl->tpl_vars['ethnicity']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['ethnicity']->value->ethnicity_id;?>
"><?php echo $_smarty_tpl->tpl_vars['ethnicity']->value->name;?>
</option>
									<?php } ?>
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Sexuality</label>							
							<div class="inputHolder">
								<select name="sexuality" class="required">
									<option value="">Select</option>
									<option value="S">Straight</option>
									<option value="G">Gay</option>
									<option value="B">Bisexual</option>
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item center">
							<div style="display: inline-block">
								<div class="g-recaptcha" data-sitekey="6LefKhcTAAAAADUPN9nrUv7MspMDKSB4nIKnAHKP"></div>
							</div>
						</fieldset>
						<fieldset class="form-item center">
							<div class="btn btn-blue" id="submitForm">
								Sign up!
							</div>
						</fieldset>
					</form>
				</div><?php }} ?>
