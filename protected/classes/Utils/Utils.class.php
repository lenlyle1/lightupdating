<?php

abstract class Utils{	
	
	public static function setvar($name, $value)
	{
		child::$$name = $value;
	}

	public static function getPost($name)
	{
		if(!empty($_POST[$name])){
			return $_POST[$name];
		} else {
			return null;
		}
	}
}