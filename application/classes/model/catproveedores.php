<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catproveedores extends ORM {

	protected $_primary_key = "id_catproveedor";

	public function select_registros_activos()
	{
		$sql = "SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_nombre,
				catproveedores.dsc_apellido_pat,
				catproveedores.dsc_apellido_mat,
				catproveedores.dsc_colonia,
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
		$query->cod_sap = $post["cod_sap"];
		$query->dsc_nombre = $post["dsc_nombre"];
		$query->dsc_apellido_pat = $post["dsc_apellido_pat"];
		$query->dsc_apellido_mat = $post["dsc_apellido_mat"];
		$query->id_catestado = $post["id_catestado"];
		$query->id_detmunicipio = $post["id_detmunicipio"];
		$query->dsc_colonia = $post["dsc_colonia"];
		$query->dsc_calle = $post["dsc_calle"];
		$query->dsc_numero = $post["dsc_numero"];
		$query->dsc_codigo_postal = $post["dsc_codigo_postal"];
		$query->dsc_correo = $post["dsc_correo"];
		$query->tel_oficina = $post["tel_oficina"];
		$query->tel_celular = $post["tel_celular"];
		$query->dsc_comercializadora = $post["dsc_comercializadora"];

		if($id==0)
			$query->fec_alta = date("Y-m-d");
		else
			$query->fec_modif = date("Y-m-d");

		$query->sta_baja = "N";
		return $query->save();
	}

}