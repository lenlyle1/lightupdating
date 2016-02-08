<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

function smarty_function_embedcss($params)
{
	global $settings;


	if(empty($params['cssfile'])){
		return;
	}
	
	if(!$settings->compressCSS){
		return '<link rel="stylesheet" href="' . $params['cssfile'] . '">';
	}
}