<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

function smarty_function_generate_resized_image($params)
{
	if($params['img'] === ''){
		$params['img'] = '/assets/images/not-found.gif';
	}

	$pathBits = explode ('/', $params['img']);

	$img = array_pop($pathBits);
	$dir = array_pop($pathBits);

	$path = implode('/', $pathBits);

	$path .= '/' . $dir . '/resized/' . substr($img, 0, 3) .'/';
	//Debugger::debug($path);
	if(!is_dir(PUBLIC_ROOT . $path)){
		Debugger::debug(PUBLIC_ROOT . $path, '$path');
		mkdir(PUBLIC_ROOT . $path, 0777, true);
	}

	$nameBits = explode('.', $img);
	$ext = array_pop($nameBits);

	$filename = $path . implode('.', $nameBits) . '_' . $params['width'] . '.' . $ext;

	$key = Image::createKey($params['img'], $params['width']);

	return '<img src="' . $filename . '?key=' . $key . '"  />';
	return '<img src="' . $filename . '?key=' . $key . '" width="' . $params['width'] . '" />';
}



