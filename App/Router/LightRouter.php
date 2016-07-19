<?php

namespace Router;

Class LightRouter extends \AltoRouter
{
	private $middleware = [];

	function process()
	{
		foreach($this->middleware as $middleware){
			$middleware();
		}

		return $this->match();
	}

	function addMiddleware($middleware)
	{
		$this->middleware[] = $middleware;
	}

}