<?php

namespace Lib\ImageTools\Traits;

use lib\Utils\Debugger;

Trait CropTools
{
	public function crop($x, $y, $width, $height, $filename)
	{
		$cropArray = array('x' => $x , 'y' => $y, 'width' => $width, 'height'=> $height);
		Debugger::debug($cropArray);

		$thumb_im = imagecrop($this->image, $cropArray);
		//$filename = PUBLIC_ROOT . $filename;
		if( $this->imageType == IMAGETYPE_JPEG ) {
			imagejpeg($thumb_im, $filename, 100);
		} elseif( $this->imageType == IMAGETYPE_GIF ) {
			imagegif($thumb_im, $filename);
		} elseif( $this->imageType == IMAGETYPE_PNG ) {
			imagepng($thumb_im, $filename);
		}

		chmod($filename, 0777) ;
	}
}