<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catusuarios extends ORM {

	protected $_primary_key = "id_catusuario";

	public function new_password($user,$pass)
	{
		return ORM::factory($this->table_name())->where("dsc_correo","=",$user)->find()->set(array(
				"dsc_contrasena"	=> $pass,
			))->save();
	}

	public function edit_perfil($post,$id,$a1)
	{
		$perfil =  ORM::factory($this->table_name())->where("id_catusuario","=",$id)->find();
		$perfil->dsc_nombre = $post["dsc_nombre"];
		$perfil->dsc_apellido_pat = $post["dsc_apellido_pat"];
		$perfil->dsc_apellido_mat = $post["dsc_apellido_mat"];
		$perfil->dsc_correo = $post["dsc_correo"];
		if($post["dsc_contrasena"]!="")
			$perfil->dsc_contrasena = $a1->hash($post["dsc_contrasena"]);
		return $perfil->save();
			
	}
}