<?php

Class Template {

	public static function assign($var, $value)
	{
		global $smarty;

		$smarty->assign($var, $value);
	}
}