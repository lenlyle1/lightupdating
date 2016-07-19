<?php

require_once "../bootstrap.php";

use \Lib\Utils\Debugger;
use \Lib\ImageTools\Image;

$pathBits = explode('/', $_GET['img']);
dump($_GET);
$image = array_pop($pathBits);
$imgBits = explode('_', $image);

dump($pathBits);
$pathBits[2] = 'original';

$sizeBit = array_pop($imgBits);

$details = explode('.', $sizeBit);

$width = $details[0];

$ext = $details[1];

$imgName = 'assets/' . implode('/', $pathBits) . '/' . implode('_', $imgBits) . '.' . $ext;
//dump($imgName);
$imageResizer = new Image(PUBLIC_ROOT . $imgName);
$testKey = $imageResizer->createKey($imgBits[0] . '.jpg', $width);
//Debugger::debug($testKey);

if($testKey != $_GET['key']){
	Debugger::debug('BAD KEY');
} else {
	Debugger::debug('resizing');
	$imageResizer->resize($imgName, $width, PUBLIC_ROOT . 'assets/' . $_GET['img']);
}

$imageResizer->output();