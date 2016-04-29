<?php

Class Image {

	protected $salt = 'e78874eb9b7bc33a6c56e9fa122';

	protected $imageDir = 'assets/images';

	protected $imageType;

	protected $imageInfo;

	protected $image;

	protected $errors = array( 1 => 'Max file size exceeded', 
							          2 => 'html form max file size exceeded', 
							          3 => 'File upload was only partial', 
							          4 => 'No file was attached' );


	public function upload($image, $uploadDir, $newName = null)
	{
		if($image['error'] !== 0){
			Session::set('error', $this->$errors[$image['error']]);
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
				$uploadTarget = $this->incrementName($uploadTarget);
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

	private function incrementName($filename)
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
			$rebuiltName = $this->incrementName($rebuiltName);
		}

		return ($rebuiltName);
	}

	public function load($image)
	{
		if(!file_exists($image)){
			$e = new Exception('Image does not exists: ' . $image);
			Error::handle($e);
			return false;
		}

		Debugger::debug($image . ' exists', 'Loading image');

  		$imageInfo = getimagesize($image);
  		$this->$imageType = $imageInfo[2];

  		if( $this->$imageType == IMAGETYPE_JPEG ) {
			$this->$image = imagecreatefromjpeg($image);
		} elseif( $this->$imageType == IMAGETYPE_GIF ) {
			$this->$image = imagecreatefromgif($image);
		} elseif( $this->$imageType == IMAGETYPE_PNG ) {
			$this->$image = imagecreatefrompng($image);

		}

		return true;
	}

	public function save($image, $filename, $compression = 100, $permissions = 777)
	{
		if( $this->$imageType == IMAGETYPE_JPEG ) {
			imagejpeg($image,$filename,$compression);
		} elseif( $this->$imageType == IMAGETYPE_GIF ) {
			imagegif($image,$filename);
		} elseif( $this->$imageType == IMAGETYPE_PNG ) {
			imagepng($image,$filename);
		}

		if( $permissions != null) {
			chmod($filename,$permissions);
		}
	}

	public function output($quality)
	{
		if( $this->$image_type == IMAGETYPE_JPEG ) {
			imagejpeg($this->$image, null, $quality);
		} elseif( $this->$image_type == IMAGETYPE_GIF ) {
			imagegif($this->$image);
		} elseif( $this->$image_type == IMAGETYPE_PNG ) {
			imagepng($this->$image);
		}
	}

	public function getWidth()
	{
		return imagesx($this->$image);
	}

	public function getHeight()
	{
		return imagesy($this->$image);
	}

	private function error($error)
	{

	}

	public function notFound($width)
	{

	}

	public function createKey($image, $width)
	{
		$key = md5($this->$salt . $image . $width);
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