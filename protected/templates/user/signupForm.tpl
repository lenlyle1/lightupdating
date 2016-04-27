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
								<input class="required medium" name="first" placeholder="First Name" {if !$isLive}value="test"{/if}/>
							</div>
						</fieldset>

						<fieldset class="form-item">
							<label for="nameInput">Last Name</label>
							<div class="inputHolder">
								<input class="required medium" name="last" placeholder="Last Name"  {if !$isLive}value="test"{/if}/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Username</label>
							<div class="inputHolder">
								<input class="required medium" name="username" placeholder="Username"  {if !$isLive}value="tester"{/if}/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Email</label>
							<div class="inputHolder">
								<input class="required large" name="email" placeholder="Email"  {if !$isLive}value="test@lightupmylove.com"{/if}/>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Password</label>
							<div class="inputHolder">
								<input class="required medium" name="password" type="password" placeholder="Password"  {if !$isLive}value="Scr0tums"{/if}/>
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
				</div>