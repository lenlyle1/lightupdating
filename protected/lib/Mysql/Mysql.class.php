<?php

//use \Utils\Utils;

Class Mysql{

	private $db = null;

	private $dbHost;

	private $dbName;

	private $dbUser;

	private $dbPass;

	public function connect()
	{	
		try{
		    $this->db = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=utf8', $this->dbUser, $this->dbPass);
		    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    Debugger::debug($this);
		} catch(PDOException $e){
		    Debugger::debug('error');
		    Errors::handle($e, 'sqlerr');
		}
	}

	public function getDB()
	{
		return $this->db;
	}

	public function beginTransaction()
	{
		return PDO::beginTransaction();
	}

	public function rollBack()
	{
		return PDO::rollback();
	}

	public function commitTransaction()
	{
		return PDO::rollback();
	}

	public function runQuery($sql, $params = null)
	{
		$stmt = $this->db->prepare($sql);

		try{
			$stmt->execute($params);
		} catch(PDOException $e){
		    Errors::handle($e, 'sqlerr');
		}

		return $stmt;
	}

	public function fetchAll($sql, $params = null)
	{
		$stmt = $this->runQuery($sql, $params);

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function fetchOne($sql, $params = null)
	{
		$stmt = $this->runQuery($sql, $params);

		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public function insertUpdate($sql, $params)
	{
		$stmt = $this->runQuery($sql, $params);

		return $this->db->lastInsertId();
	}

	public function setvar($name, $value)
	{
		$this->$name = $value;
	}
}