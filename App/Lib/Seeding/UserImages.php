<?php

namespace Lib\Seeding;

use Models\User;
use Models\UserImage;
use Lib\ImageTools\Image;
use Lib\Utils\Debugger;

Class UserImages extends FakerShared
{
	protected $gender;

	public function __construct($gender)
	{
		$this->gender = $gender;
		$this->faker = \Faker\Factory::create();
	}

	public function seedImage(User $user)
	{
		$file = $this->faker->imageUrl(600, 400, 'people');

		Debugger::debug($file, 'image url');
		$image = new Image($file);

		Debugger::debug($image, 'image class');

		$filename = md5($file . $user->get('id')) . '.jpg';

		$imageDir = 'assets/images/profile-pics/original/';
		$imageDir .= substr($filename, 0, 1) .'/';
		$imageDir .= substr($filename, 1, 1) .'/';
		$imageDir .= substr($filename, 2, 1) .'/';

		if(!is_dir(PUBLIC_ROOT . $imageDir)){
			mkdir(PUBLIC_ROOT . $imageDir, 0777, true);
		}

		$saveName = PUBLIC_ROOT . $imageDir . $filename;
		Debugger::debug($saveName, 'save name');
		$image->save($imageDir . $filename);

		$thumbnail = $this->seedThumbnail($image, $imageDir, $user);

	    // update the database
		$userImage = new UserImage();
		$userImage->set('user_id', $user->get('id'));
		$userImage->set('image_url', '/' . $imageDir . $filename);
		$userImage->set('thumbnail', '/' . $thumbnail);
		$userImage->set('main_image', 1);
		$userImage->save();
	}

	public function seedThumbnail(Image $image, $imageDir, User $user)
	{
		dump($image);
		$filename = explode('.', $image->filename)[0];
		$filenameThumb = $filename . '-thumb.jpg';
		Debugger::debug('creating thumbnail');
		Debugger::debug($filenameThumb, '$filenameThumb');

		dump('creating thumbnail - ' . $filenameThumb);
		// thumbnail
		$imageX = getimagesize(PUBLIC_ROOT . $image->filename )[0];
		$imageY = getimagesize(PUBLIC_ROOT . $image->filename )[1];
		if($imageX < $imageY) {
			$width = $imageX;
			$x = 0;
			$y = $imageY / 2 - $width / 2;
		} else {			
			$width = $imageY;
			$y = 0;
			$x = $imageX / 2 - $width / 2;
		}

		$image->crop($x, $y, $width, $width, $filenameThumb);

		return $imageDir . $filenameThumb;
	}
}