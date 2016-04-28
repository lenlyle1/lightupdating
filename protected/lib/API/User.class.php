<?php

Class API_User{



	public function login($params = null)
	{

	}

	public function logout($params = null)
	{

	}

	public function create($params = null)
	{
		$result = new API_Response();

		if(!empty($_POST)){
			$user = new User();
			$userId = $user->create($_POST['username'], $_POST['email'], $_POST['password'], $_POST['gender'], $_POST['postcode']);
			//$valid = false;
			//echo gettype($userId);
			\Debugger::debug($userId, 'user id');

			if($userId){
				$result->addItem('message', 'User id ' . $userId . ' inserted');
				$result->addItem('userId', $userId);
				$result->addItem('success', true);
			} else {
				$result->addItem('message', 'User id inserted');
				$result->addItem('success', false);
			}
		} else {
			$result->addItem('message', 'POST missing');
			$result->addItem('success', false);
		}

		return $result->getResult();
	}

	public function delete($params = null)
	{

	}

	public function suspend($params = null)
	{

	}

	public function wipe($params = null)
	{

	}

	public function update($params = null)
	{

	}

	public function load($params = null)
	{		
		if(empty($params[0])){
			return 'no id';
		}

		$user = User::getById($params[0]);

		unset($user->password);

		return $user;
	}
}