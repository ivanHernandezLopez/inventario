<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catmatprov extends ORM {

	protected $_primary_key = "id_catmatprov";

	public function add_proveedor($mat,$prov,$precio,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catmatprov","=",$id)->find();
		$query->id_proveedor = $prov;
		$query->id_material = $mat;
		$query->dsc_precio = $precio;
		if($id==0)
		{
			$query->fec_alta = date("Y-m-d");
		}
		$query->fec_modif = date("Y-m-d");
		$query->sta_baja = "N";
		return $query->save();
	}

	public function registros_activos($id)
	{
		return ORM::factory($this->table_name())->where("id_material","=",$id)->where("sta_baja","=","N")->find_all();
	}
}