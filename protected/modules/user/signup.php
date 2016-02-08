<?php


if(!empty($_POST)){

	Debugger::debug($_POST);
	if(!empty($_POST['fbsignup'])){

	} else {
		if($_POST['g-recaptcha-response'] == ''){
			Errors::set('Must prove you are a real spell_config_personal(dictionary_link, file)');
		} else {
			$verified = Users_Recaptcha::verify($_POST['g-recaptcha-response']);
		}

		if($verified){
			if(!$user = Users::update(
				null,
				$_POST['username'],
				$_POST['password'],
				$_POST['email'],
				$_POST['first'],
				$_POST['last']
			)){
				Debugger::debug(Errors::getErrors(), 'ERROR');
				Template::assign('errors', Errors::getErrors());
			}
		} else {

		}
	}

	//Debugger::debug($user);
	if(!empty($user)){
		Debugger::debug($user);
		Users::login($email, $password);
		//redirect to homepage
	} else {

	}

}
	// show signup form
	Template::assign('recaptcha', true);
	Template::assign('countries', Users_Countries::load());
	Template::assign('ethnicities', Users_Ethnicity::load());
