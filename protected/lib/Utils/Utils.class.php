<?php

abstract class Utils{	
	
	public function setvar($name, $value)
	{
		child::$$name = $value;
	}

	public function getPost($name)
	{
		if(!empty($_POST[$name])){
			return $_POST[$name];
		} else {
			return null;
		}
	}
}