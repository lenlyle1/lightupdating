<?php


if(!empty($_POST)){
	Debugger::debug($_POST, 'POST');
	Debugger::debug($_GET, 'GET');
	
	if(!empty($_GET['validate'])){
		Debugger::debug('VALIDATING');
		$valid = Validate_User::account(
			$_POST['username'],
			$_POST['password'],
			$_POST['email']
		);
	}

	if($valid){
		Debugger::debug('SUBMITTING');
		if($_POST['g-recaptcha-response'] == ''){
			Errors::set('Must prove you are a real spell_config_personal(dictionary_link, file)');
		} else {
			$verification = json_decode(Users_Recaptcha::verify($_POST['g-recaptcha-response']));
		}
	
		if($verification -> success){
			Debugger::debug('verified');
			if(!$user = Users::update(
				null,
				$_POST['username'],
				$_POST['password'],
				$_POST['email'],
				$_POST['first'],
				$_POST['last']
			)){
				$errors = Errors::getErrors();
			}
		} else {
			Debugger::debug('not verified');
		}
	}

	//Debugger::debug($user);
	if(!empty($user)){
		Debugger::debug($user);
		Users::login($email, $password);
		//redirect to homepage
	}

	Debugger::debug(Errors::getErrors(), 'ERROR');

	if(!empty($_GET['ajax'])){
		Ajax::setupResponse(Errors::getErrors());
		Ajax::respond();
	}
}

// show signup form
Template::assign('recaptcha', true);
Template::assign('countries', Users_Countries::load());
Template::assign('ethnicities', Users_Ethnicity::load());
