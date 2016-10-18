<?php

namespace Lib\Utils;

Class Escape 
{
	public static function get()
	{
		// escape $_GET vars
		foreach($_GET as $k => $v){
			$_GET[$k] = mysql_real_escape_string($v);
		}
	}

	public static  function post()
	{
		// escape $_POST vars
		foreach($_POST as $k => $v){
			$_POST[$k] = mysql_real_escape_string($v);
		}
	}

	public static function all()
	{
		// escape $_GET and $_POST vars
		self::get();
		self::post();
	}
}