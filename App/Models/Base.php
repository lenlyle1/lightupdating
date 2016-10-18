<?php
/**------------------------------------------------
	Description: Very simple ORM to automate basic 
	DB tasks for Models
------------------------------------------------**/
namespace Models;


use Lib\DB\Mysql;

Abstract Class Base
{
	protected $table = '';

	protected $values = [];

	public function set($name, $value)
	{
		$this->values[$name] = $value;
	}

	public function get($name)
	{
		return $this->values[$name];
	}

	public function getById($id, $field = 'id', $mc = null, $mcLifetime = 20)
	{
		global $memc;
		$sql = "SELECT *
				FROM {$this->table}
				WHERE `$field` = ?";

		if ($mc){
			$data = $memc->fetch($sql, array($id), 'fetchOne', $mcLifetime);
		} else {
			$data = Mysql::fetchOne($sql, array($id));
		}

		return $data;
	}

	function all($key, $value)
	{
		global $memc;
		$sql = "SELECT *
				FROM {$this->table}
				WHERE {$field} = ?
				AND deleted =0";

		if ($mc){
			$memc->fetch($sql, array($id), 'fetchOne', $mcLifetime);
		} else {
			$data = Mysql::fetchAll($sql, array($id));
		}

		return $data;
	}

	public function save()
	{
		$fieldCount = 0;
		$values = [];
		//dump( count($this));
		if(empty($this->id)){
			//insert into table
			$sql = "INSERT {$this->table}
					(";

			foreach($this->values as $field => $value){
				$fieldCount++;	
				$sql .= '`' . $field . '`' . (($fieldCount < (count((array) $this->values))) ? ", " : "");
				$values[] = $value;
			}

			$sql .=  ") VALUES ( " .
				  		str_repeat('?, ', $fieldCount - 1) . '?'
				  . ")";
		} else {
			// update table
			$sql = "UPDATE {$this->table} SET ";

			foreach($this as $field => $value){
				$sql .= "{$field} = ? ";
				$values[] = $value;
			}
		}

		//dump($sql);
		//dump($values);
		$id = Mysql::insertUpdate($sql, $values);
		$this->set('id', $id);
	}

	public function flush()
	{
		dump('Flushing ' . $this->table);

		$sql = "TRUNCATE TABLE {$this->table}";
		
		\Lib\DB\Mysql::runQuery($sql);
	}
}