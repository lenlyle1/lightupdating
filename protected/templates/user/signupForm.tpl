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
									{for $month=1 to 12}
									<option value="{$month}">{$month}</option>
									{/for}
								</select>
								<select name="day">
									<option value="">Day</option>
									{for $day=1 to 31}
									<option value="{$day}">{$day}</option>
									{/for}
								</select>
								<select name="year">
									<option value="">Year</option>
									{for $year=$smarty.now|date_format:'%Y' to 1920 step -1}
									<option value="{$year}">{$year}</option>
									{/for}
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
									{foreach $countries as $country}
										{if $country->code_2 != 'us' && $country->code_2 != 'ca' && $country->code_2 != 'gb'}
											<option value="{$country->country_id}">{$country->name}</option>
										{/if}
									{/foreach}
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
									{foreach $ethnicities as $ethnicity}
										<option value="{$ethnicity->ethnicity_id}">{$ethnicity->name}</option>
									{/foreach}
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
				</div>