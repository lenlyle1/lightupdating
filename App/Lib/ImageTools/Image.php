<?php

namespace Lib\ImageTools;

use Lib\Utils\Debugger;

Class Image
{
	use Traits\ResizeTools;
	use Traits\CropTools;

	public $filename;

	public $imageType;

	public function __construct($img)
	{
		//Debugger::debug('loading ' . $img);
		$this->load($img);
	}

	public function load($image = null)
	{
		
		//Debugger::debug($image . ' exists', 'Loading image');

  		$imageInfo = getimagesize($image);
  		$this->imageType = $imageInfo[2];

  		if( $this->imageType == IMAGETYPE_JPEG ) {
			$this->image = imagecreatefromjpeg($image);
		} elseif( $this->imageType == IMAGETYPE_GIF ) {
			$this->image = imagecreatefromgif($image);
		} elseif( $this->imageType == IMAGETYPE_PNG ) {
			$this->image = imagecreatefrompng($image);

		}

		return true;
	}

	public function save($filename, $compression = 100)
	{
		Debugger::debug($filename, 'file name');
		Debugger::debug($this->imageType, '$this->imageType');
		if( $this->imageType == IMAGETYPE_JPEG ) {
			imagejpeg($this->image, $filename, $compression);
		} elseif( $this->imageType == IMAGETYPE_GIF ) {
			imagegif($this->image, $filename);
		} elseif( $this->imageType == IMAGETYPE_PNG ) {
			imagepng($this->image, $filename);
		}

		$this->filename = $filename;
		chmod($filename, 0777) ;
	}

	public function output($quality = 75)
	{
		if( $this->imageType == IMAGETYPE_JPEG ) {
			imagejpeg($this->image, null, $quality);
		} elseif( $this->imageType == IMAGETYPE_GIF ) {
			imagegif($this->image);
		} elseif( $this->imageType == IMAGETYPE_PNG ) {
			imagepng($this->image);
		}
	}

	public function getWidth()
	{
		return imagesx($this->image);
	}

	public function getHeight()
	{
		return imagesy($this->image);
	}

	private function error($error)
	{

	}

	public function notFound($width)
	{

	}

	public function createKey($image, $width)
	{
		Debugger::debug($image, 'FILENAME for key');
		Debugger::debug($width, 'Width');
		$key = md5('not the craftiest salt' . $image . $width);
		Debugger::debug($key, 'KEY');

		return $key;
	}

	public function splitName($filename)
	{
		$response = array();

		$nameBits = explode('.', $filename);

		$response['extension'] = array_pop($nameBits);
		$response['filename'] = implode('.', $nameBits);

		return $response;
	}
}