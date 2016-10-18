<?php

namespace Models;

Class Site extends Base
{
	public $table = 'sites';

	private $fields = [
		'id' => ['type' => 'int', 
				 'index' => 'primary', 
				 'auto_increment' => true],

		'name' => ['type' => 'varchar', 
				   'length' => 255, 
				   'null' => false],

		'shortname' => ['type' => 'varchar', 
						'length' => 255, 
						'null' => false],
	]
}
/*
CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `shortname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;*/