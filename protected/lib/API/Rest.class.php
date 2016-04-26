<?php

Class API_Rest extends API {
	
	public function __construct($request, $origin) 
	{
        parent::__construct($request);

		if(!empty($_SESSION['localREST'])){
	        $APIKey = new API_Key();

	        if (!array_key_exists('apiKey', $this->request)) {
	            throw new Exception('No API Key provided');
	        } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
	            throw new Exception('Invalid API Key');
	        } else if (array_key_exists('token', $this->request) &&
	             !$User->get('token', $this->request['token'])) {

	            throw new Exception('Invalid User Token');
	        }
        }
    }

	protected function getResult()
	{
		$className = 'API_' . ucwords($this->endpoint);

		if(!class_exists($className)){
			$result = 'Invalid endpoint';
		} else if(!empty($this->verb)){
			$action = $this->verb;
			if(!method_exists($className, $action)){
				$result = 'Invalid action';
			} else {
				$result = $className::$action($this->args);
			}
		}

		return $this->makeResponse($result);
	}

	private function makeResponse($result)
	{
		$response = array(
			'endpoint' => $this->endpoint,
			'action'   => $this->verb,
			'result'   => $result,
			'success'  => $this->success
		);

		return $response;
	}

	public function curlCall($endpoint, $curlPostData = null)
	{
		$curl = curl_init($endpoint);
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		Debugger::debug('x','x', null, true );
		if(!empty($curlPostData)){
			Debugger::debug('adding post');
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPostData);
		}

		$curlResponse = curl_exec($curl);
		curl_close($curl);

		Debugger::debug($curlResponse, 'CURL response');

		return $curlResponse;
	}
}