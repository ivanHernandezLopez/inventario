<?php defined('SYSPATH') or die('No direct script access.');

class Model_Detcontactos extends ORM {

	protected $_primary_key = "id_detcontacto";

	public function insert_contact($data)
	{
		return ORM::factory($this->table_name())->set($data)->save();
	}
}