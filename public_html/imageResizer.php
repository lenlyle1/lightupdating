<?php

require_once "../protected/bootstrap.php";

$pathBits = explode('/', $_GET['img']);

Debugger::debug($_GET, 'GET');

$image = array_pop($pathBits);
$imgBits = explode('_', $image);

$tmp = array_pop($pathBits);
$tmp = array_pop($pathBits);

$sizeBit = array_pop($imgBits);

$details = explode('.', $sizeBit);

$width = $details[0];

$ext = $details[1];

$imgName = '/' . implode('/', $pathBits) . '/' . implode('_', $imgBits) . '.' . $ext;

$testKey = Image::createKey($imgName, $width);
Debugger::debug($_GET, 'GET');
if($testKey != $_GET['key']){
	Debugger::debug('BAD KEY');
} else {
	Debugger::debug('resizing');
	Image_Resizer::resize($imgName, $width, $_GET['img']);
}