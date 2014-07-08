<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catfamilias extends ORM {

	protected $_primary_key = "id_catfamilia";

	public function agregar_editar($post,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catfamilia","=",$id)->find();
		$query->cod_sap = $post["cod_sap"];
		$query->dsc_nombre = $post["dsc_nombre"];
		$query->dsc_descripcion = $post["dsc_descripcion"];
		$query->sta_baja = "N";
		if($id==0)
			$query->fec_alta = date("Y-m-d");
		else
			$query->fec_modif = date("Y-m-d");
		return $query->save();
	}
}