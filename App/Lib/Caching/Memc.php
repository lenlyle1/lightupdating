<?php

namespace Lib\Caching;

use Lib\DB\Mysql;

Class Memc{

	private static $memc = null;

	private static $server = null;

	private static $port = null;

	private static function getInstance()
	{
		if(!self::$memc){
			self::init();
		}

		return self::$memc;
	}

	public static function addServer($server, $port)
	{
		self::$server = $server;
		self::$port = $port;
	}

	public static function init()
	{
		if(!self::$server && !self::$server){
			// die, change to clean handling later
			//die('cache not configured');
		}

		try{
		    self::$memc = new \Memcached();
			self::$memc->setOption(\Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
		    self::$memc->addServer(self::$server, self::$port);
	    } catch(Exception $e){
	    	Errors::handle($e);
	    }
	}

	public static function fetch($sql, $params, $action, $expire = 5, $key = null)
	{
		$memc = self::getInstance();

		if(empty($key)){
			$key = self::buildKey($sql, $params);
		}

		if(!$data = $memc->get($key)){
			$data = Mysql::$action($sql, $params);

			self::save($key, $data, $expire);
		}

		return $data;
	}

	public static function save($key, $data, $expire = 5)
	{
		$memc = self::getInstance();

		$memc->set($key, $data, $expire);
	}

	private static function buildKey($sql, $params = null)
	{
		$key = $sql;
		if($params){
			foreach($params as $k => $v){
				$key .= $k . '|' . $v;
			}
		}

		return md5($key);
	}

	public static function flush($key = null)
	{
		$memc = self::getInstance();

		if($key) {
			$memc->delete($key);
		} else {
			$memc->flush();
		}
	}
}