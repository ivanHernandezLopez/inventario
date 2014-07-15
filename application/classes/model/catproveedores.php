<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catproveedores extends ORM {

	protected $_primary_key = "id_catproveedor";

	public function select_registros_activos()
	{
		$sql = "SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				catproveedores.dsc_contacto,
				catproveedores.dsc_domicilio,
				catproveedores.dsc_correo
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N'";
		return $this->selectDB($sql);
	}

	public function insert_registro($post,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catproveedor","=",$id)->find();
		$query->num_proveedor = $post["num_proveedor"];
		$query->dsc_razon_social = $post["dsc_razon_social"];
		$query->rfc_empresa = $post["rfc_empresa"];
		$query->dsc_domicilio = $post["dsc_domicilio"];
		$query->id_catestado = $post["id_catestado"];
		$query->id_detmunicipio = $post["id_detmunicipio"];
		$query->dsc_contacto = $post["dsc_contacto"];	
		$query->tel_oficina = $post["tel_oficina"];
		$query->dsc_correo = $post["dsc_correo"];
		$query->dsc_comercializadora = $post["dsc_comercializadora"];

		if($id==0)
			$query->fec_alta = date("Y-m-d");
		else
			$query->fec_modif = date("Y-m-d");

		$query->sta_baja = "N";
		return $query->save();
	}

}