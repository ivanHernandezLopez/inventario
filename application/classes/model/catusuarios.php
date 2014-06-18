<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catusuarios extends ORM {

	protected $_primary_key = "id_catusuario";

	public function new_password($user,$pass)
	{
		return ORM::factory($this->table_name())->where("dsc_correo","=",$user)->find()->set(array(
				"dsc_contrasena"	=> $pass,
			))->save();
	}
}