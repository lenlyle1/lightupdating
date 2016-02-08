var Signup = {

	init: function(){
		$("#submitForm").click(function(){
			var form = 'signup';
			Validation.clearErrors(form);
			Signup.submitSignup(form);
		})
	},

	validate: function(form){
		if(!Validation.checkRequired(form)){
			Alert.error('Fields in red are required');
			return false;
		}

		return true;
	},

	submitSignup: function(form){

		if(Signup.validate(form)){
			if(Signup.testRecaptcha()){
				Log.write('submitting');
				//$("#" + form).submit();
				var submit 
			} 
		}
		
		Log.write('submitting');
		var url = '/user/signup';

		$.ajax({
			type: "POST",
			url: url,
			data: $("#" + form).serializeArray(),
			dataType: "json",
			success: function(response){
				if(typeof response.errors != "undefined"){
					$.each(response.errors, function(i, value){
						Form.showError(form, i, value);
						Log.write(i +":" + value);
					})
					console.log(response);
				} else {
					Log.write(response);
				}
			}
		})
		
	},

	testRecaptcha: function(){
		if($("#g-recaptcha-response").val() == ''){
			Log.write('you must recaptcha');
			
			Alert.popup('error', 'You must prove you are human');
			return false;
		}

		return true;
	},

	fbSignup: function(){
		Login.fbLogin(true);
	},

	getFBdetails: function(){

		FB.api('/me?fields=id, first_name, last_name, email, age_range, gender, locale, timezone', function(response) {
			//Log.write(response);
          	//Log.write(response.first_name + ':' + response.email);
          	$('.fbSignup').remove();
          	Log.write('signed in');
      		$('#firstInput').val(response.first_name);
      		$('#lastInput').val(response.last_name);
      		$('#emailInput').val(response.email);
      		if(response.gender == 'male'){
      			$('#genderSelect').val('m');
      		} else if(response.gender == 'female'){
      			$('#genderSelect').val('f');
      		}

      		return true
        });

	    FB.api('/me/picture?type=large&width=600', function(response) {
	      	//Log.write(response.data.url);
      		$('#fbPicture').val(response.data.url);
      	})	
	},
}