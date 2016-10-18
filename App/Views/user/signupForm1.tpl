					<form id="signup" method="post">
						
						<fieldset class="form-item">
							<label for="emailInput">Gender</label>
							<div class="inputHolder">
								<select name="gender" id="genderSelect" class="required">
									<option value="">Select</option>
									<option value="m" {if !$isLive}selected="selected"{/if}>Male</option>
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
									<option value="{$month}" {if !$isLive && $month == 11}selected="selected"{/if}>{$month}</option>
									{/for}
								</select>
								<select name="day">
									<option value="">Day</option>
									{for $day=1 to 31}
									<option value="{$day}" {if !$isLive && $day == 25}selected="selected"{/if}>{$day}</option>
									{/for}
								</select>
								<select name="year">
									<option value="">Year</option>
									{for $year=$smarty.now|date_format:'%Y' to 1920 step -1}
									<option value="{$year}" {if !$isLive && $year == 1972}selected="selected"{/if}>{$year}</option>
									{/for}
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="country">Country</label>
							<div class="inputHolder">
								<select name="country" id="country">
									<option value="">Select</option>
									<option value="235" {if !$isLive}selected="selected"{/if}>United States</option>
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
								<input class="required" name="postcode" id="" placeholder=""  {if !$isLive}value="test"{/if}/>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Ethnicity</label>

							<div class="inputHolder">
								<select name="ethnicity" class="required">
									<option value="">Select</option>
									{foreach $ethnicities as $ethnicity}
										<option value="{$ethnicity->ethnicity_id}" {if !$isLive && $ethnicity->name == 'Caucasian'}selected="selected"{/if}>{$ethnicity->name}</option>
									{/foreach}
								</select>
							</div>
						</fieldset>
						<fieldset class="form-item">
							<label for="emailInput">Sexuality</label>							
							<div class="inputHolder">
								<select name="sexuality" class="required">
									<option value="">Select</option>
									<option value="S" {if !$isLive}selected="selected"{/if}>Straight</option>
									<option value="G">Gay</option>
									<option value="B">Bisexual</option>
								</select>
							</div>
						</fieldset>
						
						<fieldset class="form-item center">
							<div class="btn btn-blue" id="submitForm">
								Sign up!
							</div>
						</fieldset>
					</form>