<?php

Class Memc{

	private $memc = null;

	private $server;

	private $port;

	public function init()
	{
		try{
		    $this->memc = new Memcached();
			$this->memc->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
		    $this->memc->addServer($this->server, $this->port);
	    } catch(Exception $e){
	    	Errors::handle($e);
	    }
	}

	public function fetch($sql, $params, $action, $expire = 5, $key = null)
	{	
		global $db;
		
		if(empty($key)){
			$key = $this->buildKey($sql, $params);
		}

		if(!$data = $this->memc->get($key)){
			//Debugger::debug($key . ' not in cache, run query', 'MEMC', null);
			$data = $db->$action($sql, $params);
			$this->save($key, $data, $expire);
		} else {
			//Debugger::debug('cache found: ' . $key);
			//Debugger::debug($data);
		}

		return $data;
	}

	public function save($key, $data, $expire = 5)
	{
		//$memc = $this->getInstance();
		//Debugger::debug('adding to cache ' . $key, 'MEMC');

		$this->memc->set($key, $data, $expire);
	}

	private function buildKey($sql, $params = null)
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

	public function flush($key = null)
	{
		$memc = $this->getInstance();

		if($key) {
			$memc->delete($key);
		} else {
			$memc->flush($key);
		}
	}
}