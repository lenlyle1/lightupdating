<?php

namespace Controllers;

Class PageController
{
	function home()
	{
		return 'pages/home';
	}

	function faq()
	{
		
	}

	function search()
	{
		return 'search/results';
	}

	function searchOptions()
	{
		return 'search/options';
	}

	function test()
	{
		include(SITE_ROOT . '/testpad.php');
		die();
	}

}