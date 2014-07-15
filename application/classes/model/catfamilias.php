<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catfamilias extends ORM {

	protected $_primary_key = "id_catfamilia";

	public function agregar_editar($post,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catfamilia","=",$id)->find();
		$query->num_familia = $post["num_familia"];
		$query->dsc_descripcion = $post["dsc_descripcion"];
		$query->num_extension = $post["num_extension"];
		$query->nom_responsable = $post["nom_responsable"];
		$query->dsc_region = $post["dsc_region"];
		$query->dsc_area = $post["dsc_area"];
		$query->sta_baja = "N";
		if($id==0)
			$query->fec_alta = date("Y-m-d");
		else
			$query->fec_modif = date("Y-m-d");
		return $query->save();
	}
}