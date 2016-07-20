<?php

Class API_Response extends API_Rest 
{
	private $result = array();

	public function addItem($key, $value)
	{
		$this->result[$key] = $value;
	}

	public function getResult()
	{
		return $this->result;
	}
}