<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catproveedores extends ORM {

	protected $_primary_key = "id_catproveedor";

	public function select_registros_activos()
	{
		$sql = "SELECT 
				*
				FROM catproveedores	
				WHERE sta_baja = 'N'";
		return $this->selectDB($sql);
	}

	public function insert_registro($post,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catproveedor","=",$id)->find();
		$query->num_proveedor = $post["num_proveedor"];
		$query->dsc_razon_social = $post["dsc_razon_social"];
		$query->rfc_empresa = $post["rfc_empresa"];
		$query->dsc_domicilio = $post["dsc_domicilio"];
		$query->nombre1 = $post["nombre1"];
		$query->nombre2 = $post["nombre2"];
		$query->telefono1 = $post["telefono1"];
		$query->telefono2 = $post["telefono2"];
		$query->telefono3 = $post["telefono3"];
		$query->correo1 = $post["correo1"];
		$query->correo2 = $post["correo2"];
		$query->correo3 = $post["correo3"];
		$query->dsc_comercializadora = $post["dsc_comercializadora"];
		$query->dsc_materiales = $post["dsc_materiales"];
		if($id==0)
			$query->fec_alta = date("Y-m-d");
		else
			$query->fec_modif = date("Y-m-d");

		$query->sta_baja = "N";
		return $query->save();
	}

}