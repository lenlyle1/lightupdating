<?php

namespace Controllers;

Class AdminController 
{
	function home()
	{
		if(\Lib\Utils\Session::get('user')){
			return 'admin/home';
		} else {			
			return 'admin/login/login';
		}
	}
}