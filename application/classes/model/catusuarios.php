<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catusuarios extends ORM {

	protected $_primary_key = "id_catusuario";

	//Genera nuevo password para enviarlo por correo, por olvido
	public function new_password($user,$pass)
	{
		return ORM::factory($this->table_name())->where("dsc_correo","=",$user)->find()->set(array(
				"dsc_contrasena"	=> $pass,
			))->save();
	}

	//Edita el perfil del usuario logeado
	public function edit_perfil($post,$id,$a1)
	{
		$perfil =  ORM::factory($this->table_name())->where("id_catusuario","=",$id)->find();
		$perfil->dsc_nombre = $post["dsc_nombre"];
		$perfil->dsc_apellido_pat = $post["dsc_apellido_pat"];
		$perfil->dsc_apellido_mat = $post["dsc_apellido_mat"];
		$perfil->dsc_correo = $post["dsc_correo"];
		$perfil->fec_modif = date("Y-m-d");
		if($post["dsc_contrasena"]!="")
			$perfil->dsc_contrasena = $a1->hash($post["dsc_contrasena"]);

		return $perfil->save();		
	}
	//Agrega nuevos registros y edita los ya existente
	public function agregar_editar($post,$a1,$id)
	{
		$perfil =  ORM::factory($this->table_name())->where("id_catusuario","=",$id)->find();
		$perfil->cod_usuario = $post["cod_usuario"];
		$perfil->dsc_nombre = $post["dsc_nombre"];
		$perfil->dsc_apellido_pat = $post["dsc_apellido_pat"];
		$perfil->dsc_apellido_mat = $post["dsc_apellido_mat"];
		$perfil->dsc_correo = $post["dsc_correo"];
		$perfil->sta_baja = "N";
		if($post["dsc_contrasena"]!="")
			$perfil->dsc_contrasena = $a1->hash($post["dsc_contrasena"]);
		if($id==0){
			$perfil->fec_alta = date("Y-m-d");
		}else{
			$perfil->fec_modif = date("Y-m-d");
		}
		return $perfil->save();		
	}

	
	public function baja_usuario($id)
	{
		return ORM::factory($this->table_name())->where("id_catusuario","=",$id)->find()->set(array(
				"sta_baja"	=> "S",
				"fec_baja"		=> date("Y-m-d"),
			))->save();
	}

	
}