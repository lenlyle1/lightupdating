<?php
/* Smarty version 3.1.29, created on 2016-06-20 18:48:13
  from "/var/www/lightupmylove.com/App/Views/user/signupForm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57683a6d462069_58850209',
  'file_dependency' => 
  array (
    'c5c151bd9e3c800329bdb2fd1eb6bc6c8a3e2dfc' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/signupForm.tpl',
      1 => 1461944609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57683a6d462069_58850209 ($_smarty_tpl) {
?>
				<div class="signupHolder">
					<fieldset class="form-item center fbSignup">
						<div class="btn btn-fb" onclick="Signup.fbSignup();"><i class="fa fa-facebook"></i> Sign up with Facebook</div>
					</fieldset>
					<fieldset class="form-item center fbSignup">
						<div>- or -</div>
					</fieldset>
					<form id="signup" method="post">
						<fieldset class="form-item">
							<label for="emailInput">First Name</label>
							<div class="inputHolder">
								<input class="required medium" name="first" placeholder="First Name" <?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>value="test"<?php }?>/>
							</div>
						</fieldset>

						<fieldset class="form-item">
							<label for="nameInput">Last Name</label>
							<div class="inputHolder">
								<input class="required medium" name="last" placeholder="Last Name"  <?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>value="test"<?php }?>/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Username</label>
							<div class="inputHolder">
								<input class="required medium" name="username" placeholder="Username"  <?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>value="tester"<?php }?>/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Email</label>
							<div class="inputHolder">
								<input class="required large" name="email" placeholder="Email"  <?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>value="test@lightupmylove.com"<?php }?>/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Password</label>
							<div class="inputHolder">
								<input class="required medium" name="password" type="password" placeholder="Password"  <?php if (!$_smarty_tpl->tpl_vars['isLive']->value) {?>value="Scr0tums"<?php }?>/>
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
				</div><?php }
}
