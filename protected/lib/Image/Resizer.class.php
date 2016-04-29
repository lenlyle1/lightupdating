<?php

Class Image_Resizer  extends Image{

	public function resize($image, $newWidth, $targetName)
	{
		if(!file_exists(PUBLIC_ROOT . $image)){
			$image = '/assets/images/not-found.gif';
		}

		$imgInfo = getimagesize(PUBLIC_ROOT . $image);

		$oldWidth = $imgInfo[0];
		$oldHeight = $imgInfo[1];
		$changeRatio = $oldWidth / $newWidth;
		$newHeight = round($oldHeight / $changeRatio);
		$newImage = imagecreatetruecolor($newWidth, $newHeight);

		$source = $this->load(PUBLIC_ROOT . $image);

		if( $this->$imageType == IMAGETYPE_PNG ){
			imagealphablending($newImage, false);
			imagesavealpha($newImage,true);
			$transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
			imagefilledrectangle($newImage, 0, 0, $newWidth, $newHeight, $transparent);
		}

		imagecopyresampled($newImage, $this->$image, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

		header('Content-Type: image/jpeg');

		imagejpeg($newImage, null, 100);
		Debugger::debug($targetName, 'TARGET');
		$this->save($newImage, $targetName);			

		imagedestroy($newImage);

	}
}