<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {

	/**
	 * Model configuration, table names plural?
	 * @var bool
	 */
	protected $_table_names_plural = FALSE;

	public function selectDB($sql)
	{
		return DB::query(Database::SELECT,$sql)->as_object()->execute();
	}
	
	public function select_registros_activos()
	{
		return ORM::factory($this->table_name())->where("sta_baja","=","N")->find_all();
	}

	public function FindBy($campo,$valor)
	{
		return ORM::factory($this->table_name())->where($campo,"=",$valor)->find();
	}

}
