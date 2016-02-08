<?php

Class Image {

	protected static $salt = 'e78874eb9b7bc33a6c56e9fa122';

	protected static $imageDir = 'assets/images';

	protected static $imageType;

	protected static $imageInfo;

	protected static $image;

	protected static $errors = array( 1 => 'Max file size exceeded', 
							          2 => 'html form max file size exceeded', 
							          3 => 'File upload was only partial', 
							          4 => 'No file was attached' );


	public static function upload($image, $uploadDir, $newName = null)
	{
		if($image['error'] !== 0){
			Session::set('error', self::$errors[$image['error']]);
			return false;
		} else {
			if(empty($newName)){
				$newName = $image['name'];
			}

			$webPath = '/assets/images/' . $uploadDir . '/';

			$uploadDir = PUBLIC_ROOT . $webPath;

			if(!is_dir($uploadDir)){
				Debugger::debug('creating directory');
				mkdir($uploadDir, 0777, true);
			}

			$uploadTarget = $uploadDir . str_replace(' ', '-', $newName);

			if(file_exists($uploadTarget)){
				$uploadTarget = self::incrementName($uploadTarget);
			}

			if(move_uploaded_file($image['tmp_name'], $uploadTarget)){
				Session::set('message', 'File successfully uploaded');
			} else {
				Session::set('error', 'File not uploaded');
				return false;
			}
		}

		return $uploadTarget;
	}

	private static function incrementName($filename)
	{
		$nameBits = explode('/', $filename);
		$file = array_pop($nameBits);
		$path = implode('/', $nameBits);
		$fileBits = explode('.', $file);
		$ext = array_pop($fileBits);

		$name = implode('.', $fileBits);

		if(preg_match('/(.*)\-([0-9]+)$/', $name, $matches)){
			$name = $matches[1] . '-' . ($matches[2] + 1);
		} else {
			Debugger::debug($name, 'name before incrememnt');
			$name .= '-1';
		}

		$rebuiltName = implode('/', $nameBits) . '/' . $name . '.' . $ext;

		if(file_exists($rebuiltName)){
			$rebuiltName = self::incrementName($rebuiltName);
		}

		return ($rebuiltName);
	}

	public static function load($image)
	{
		if(!file_exists($image)){
			$e = new Exception('Image does not exists: ' . $image);
			Error::handle($e);
			return false;
		}

		Debugger::debug($image . ' exists', 'Loading image');

  		$imageInfo = getimagesize($image);
  		self::$imageType = $imageInfo[2];

  		if( self::$imageType == IMAGETYPE_JPEG ) {
			self::$image = imagecreatefromjpeg($image);
		} elseif( self::$imageType == IMAGETYPE_GIF ) {
			self::$image = imagecreatefromgif($image);
		} elseif( self::$imageType == IMAGETYPE_PNG ) {
			self::$image = imagecreatefrompng($image);

		}

		return true;
	}

	public static function save($image, $filename, $compression = 100, $permissions = 777)
	{
		if( self::$imageType == IMAGETYPE_JPEG ) {
			imagejpeg($image,$filename,$compression);
		} elseif( self::$imageType == IMAGETYPE_GIF ) {
			imagegif($image,$filename);
		} elseif( self::$imageType == IMAGETYPE_PNG ) {
			imagepng($image,$filename);
		}

		if( $permissions != null) {
			chmod($filename,$permissions);
		}
	}

	public static function output($quality)
	{
		if( self::$image_type == IMAGETYPE_JPEG ) {
			imagejpeg(self::$image, null, $quality);
		} elseif( self::$image_type == IMAGETYPE_GIF ) {
			imagegif(self::$image);
		} elseif( self::$image_type == IMAGETYPE_PNG ) {
			imagepng(self::$image);
		}
	}

	public static function getWidth()
	{
		return imagesx(self::$image);
	}

	public static function getHeight()
	{
		return imagesy(self::$image);
	}

	private static function error($error)
	{

	}

	public static function notFound($width)
	{

	}

	public static function createKey($image, $width)
	{
		$key = md5(self::$salt . $image . $width);
		return $key;
	}

	public static function splitName($filename)
	{
		$response = array();

		$nameBits = explode('.', $filename);

		$response['extension'] = array_pop($nameBits);
		$response['filename'] = implode('.', $nameBits);

		return $response;
	}
}