<?php

//use \Utils\Utils;

Class Mysql {

	private static $db = null;

	private static $dbHost;

	private static $dbName;

	private static $dbUser;

	private static $dbPass;

	public static function connect()
	{
		try{
		    self::$db = new PDO('mysql:host=' . self::$dbHost . ';dbname=' . self::$dbName . ';charset=utf8', self::$dbUser, self::$dbPass);
		    self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
		    Errors::handle($e, 'sqlerr');
		}
	}

	public static function getDB()
	{
		if(!self::$db){
			self::connect();
		}
		
		return self::$db;
	}

	public static function runQuery($sql, $params = null)
	{
		$db = self::getDB();
		if(empty($db)){
			die('There has been a serious problem');
		}
		$stmt = $db->prepare($sql);

		try{
			$stmt->execute($params);
		} catch(PDOException $e){
		    Errors::handle($e, 'sqlerr');
		}

		return $stmt;
	}

	public static function fetchAll($sql, $params = null)
	{
		$stmt = self::runQuery($sql, $params);

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public static function fetchOne($sql, $params = null)
	{
		$stmt = self::runQuery($sql, $params);

		return $stmt->fetch(PDO::FETCH_OBJ);
	}

	public static function insertUpdate($sql, $params)
	{
		$stmt = self::runQuery($sql, $params);

		return self::$db->lastInsertId();
	}

	public static function setvar($name, $value)
	{
		self::$$name = $value;
	}
}