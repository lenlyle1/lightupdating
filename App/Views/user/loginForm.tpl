
<div class="container">
	<div class="row">
		<div class="signupHolder">
			<form id="signin" action="/{if !empty($admin)}admin/{/if}user/login" method="post">
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
<div style="clear: both"></div>