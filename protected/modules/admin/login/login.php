<?php


if(!empty($_POST)){
	if($user = Users::login($_POST['username'], $_POST['password'])){
		Session::set('user', $user);
		Session::set('loggedIn', true);

		$next = ((Session::get('next'))) ? (Session::get('next')) : "/admin";
		Session::wipe('next');
	} else {
		Session::set('error', 'Invalid email or password');
		$next = '/admin/user/login';
	}

	Redirect::handle($next);
}

// catch all fail
