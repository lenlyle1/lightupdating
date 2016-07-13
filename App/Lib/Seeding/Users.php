<?php

namespace Lib\Seeding;

use Models\User;
use Models\UserEmail;
use Models\UserImage;
use Lib\User\Keys;
use Lib\Files\Curl;

Class Users extends FakerShared
{
	use \Lib\Seeding\Traits\FlushTable;

	public function seed($count = 2)
	{
		$genders = ['male', 'female'];

		$this->flushTables();

		for($i = 0; $i < $count; $i++){
			$user = new User();
			$gender = array_rand($genders);

			$user->set('username', $this->faker->userName($gender));
			//$user->set('email', $this->faker->freeEmail);
			$user->set('password', User::hashPassword("Scr0tums"));
			$user->set('gender', substr($genders[$gender], 0, 1));
			$user->set('created_ts', date("Y-m-d H:i:s"));
			$user->set('fake', 1);

			$user->set('secret_key', Keys::createSecret($user));
			$user->set('public_key', Keys::createPublic($user));

			$user->save();
			
			$this->seedEmail($user);

			$this->seedImage($user);
		}
	}

	private function seedEmail($user)
	{
		$userEmail = new UserEmail();

		$userEmail->set('user_id', $user->get('id'));
		$userEmail->set('email', $this->faker->freeEmail);
		$user->set('primary', 1);

		$userEmail->save();
	}

	public function seedImage($user)
	{
		$file = $this->faker->imageUrl(600, 400, 'people');

		$filename = md5($file . $user->get('id')) . '.jpg';
		$imageDir = 'assets/images/profile-pics/original/' . substr($filename, 0, 3) . '/';

		if(!is_dir(PUBLIC_ROOT . $imageDir)){
			mkdir(PUBLIC_ROOT . $imageDir);
		}

		$saveName = PUBLIC_ROOT . $imageDir . $filename;

		Curl::getFile($file, $saveName);

	    // update the database
		$userImage = new UserImage();
		$userImage->set('user_id', $user->get('id'));
		$userImage->set('image_url', '/' . $imageDir . $filename);
		$userImage->set('main_image', 1);

		$userImage->save();
	}

	private function flushTables()
	{
		// users
		$user = new User();
		$this->flushTable($user->table);

		// user_emails
		$userEmail = new UserEmail();
		$this->flushTable($userEmail->table);

		// user_images
		$userImage = new UserImage();
		$this->flushTable($userImage->table);

		//user_roles
	}
}