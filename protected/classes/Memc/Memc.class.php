<?php

Class Memc{

	private static $memc = null;

	private static $server;

	private static $port;

	private static function getInstance()
	{
		if(!self::$memc){
			self::init();
		}

		return self::$memc;
	}

	public static function init()
	{
		try{
		    self::$memc = new Memcached();
			self::$memc->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
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
			//Debugger::debug($key . ' not in cache, run query', 'MEMC', null);
			$data = Mysql::$action($sql, $params);

			self::save($key, $data, $expire);
		} else {
			//Debugger::debug('cache found: ' . $key);
			//Debugger::debug($data);
		}

		return $data;
	}

	public static function save($key, $data, $expire = 5)
	{
		$memc = self::getInstance();
		//Debugger::debug('adding to cache ' . $key, 'MEMC');

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

		//Debugger::debug(md5($key), 'MEMC');
		return md5($key);
	}

	public static function flush($key = null)
	{
		$memc = self::getInstance();

		if($key) {
			$memc->delete($key);
		} else {
			$memc->flush($key);
		}
	}
}