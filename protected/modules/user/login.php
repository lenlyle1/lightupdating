<?php

if(!empty($_POST)){
	if($user = Users::login($_POST['username'], $_POST['password'])){
		Session::set('user', $user);
		Session::set('loggedIn', true);
	} 
}

// catch all fail
