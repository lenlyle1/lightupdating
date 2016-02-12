var Form = {

	showError: function(form, field, error){
		Log.write('showing error for ' + field);

		$('#' + form +' :input').each(function(index, input){
			if($(input).val() == ''){
				$(input).addClass('formError'); 
			}
		});

		//$('#' + field + 'Input').addClass('formError'); 

		if($('#' + field + 'Input').prev().prop("tagName") == 'LABEL'){
			$('#' + field + 'Input').prev().addClass('error'); 
		}
		if(typeof error != 'undefined'){
			Form.clearErrors(form);
			$('#' + field + 'Input').before('<div class="error">' + error + '</div>');
		}
	},

	clearErrors: function(form){
		$(".error").remove();
	},

	spinButton: function(button){
		$(button).addClass('hidden');
		$(button).after(Spinner.getSpinner());
	},

	restoreButton: function(button){
		$('#'+button).removeClass('hidden');
		$("#spinner").remove();
	}
}