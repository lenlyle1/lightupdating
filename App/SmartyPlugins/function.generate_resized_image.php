<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

use Lib\ImageTools\Image;
use Lib\Utils\Debugger;

function smarty_function_generate_resized_image($params)
{
	if($params['img'] == ''){
		$params['img'] = '/assets/images/not-found.gif';
	}

	$type = '';
	$pathBits = explode ('/', $params['img']);

	if(!empty($pathBits[2])){
		$type = $pathBits[2];
	}

	$img = array_pop($pathBits);
	$dir = array_pop($pathBits);

	//$path = implode('/', $pathBits);
	$path = '/assets/images/resized/';
	$path .= substr($img, 0, 1) .'/';
	$path .= substr($img, 1, 1) .'/';
	$path .= substr($img, 2, 1) .'/';
	//Debugger::debug($path);
	if(!is_dir(PUBLIC_ROOT . $path)){
		//Debugger::debug(PUBLIC_ROOT . $path, '$path');
		mkdir(PUBLIC_ROOT . $path, 0777, true);
	}
	$nameBits = explode('.', $img);
	$ext = array_pop($nameBits);

	$filename = $path . implode('.', $nameBits) . '_' . $params['width'] . '.' . $ext;

	$key = Image::createKey($img, $params['width']);

	return '<img src="' . $filename . '?key=' . $key . '&type=' . $type . '"  />';
	return '<img src="' . $filename . '?key=' . $key . '" width="' . $params['width'] . '" />';
}



