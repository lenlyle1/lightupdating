<?php
/* Smarty version 3.1.29, created on 2016-06-20 18:45:30
  from "/var/www/lightupmylove.com/App/Views/user/loginForm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576839ca328cb3_70073308',
  'file_dependency' => 
  array (
    '500ef6d011c1c58aa65d6825e3f60beb29b7f6d1' => 
    array (
      0 => '/var/www/lightupmylove.com/App/Views/user/loginForm.tpl',
      1 => 1454254024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576839ca328cb3_70073308 ($_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="signupHolder">
			<form id="signin" action="/<?php if (!empty($_smarty_tpl->tpl_vars['admin']->value)) {?>admin/<?php }?>user/login" method="post">
				<fieldset class="form-item">
					<label for="emailInput">Email</label>
					<input class="required" name="username" id="usernameInput" placeholder="Username" />
				</fieldset>
				<fieldset class="form-item">
					<label for="emailInput">Password</label>
					<input class="required" name="password" type="password" id="passwordInput" placeholder="Password" />
				</fieldset>
				<fieldset class="form-item">
					<div class="row center">
						<div class="btn btn-blue" id="submitForm">
							Login
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<div style="clear: both"></div><?php }
}
