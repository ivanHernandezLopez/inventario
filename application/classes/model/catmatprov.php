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

	public function materiales($nombre,$codigo)
 	{
 		$sql = "SELECT 
 				catmateriales.cod_producto,
 				catmateriales.id_catmaterial,
 				catmateriales.dsc_nombre,
 				catmateriales.dsc_descripcion,
 				catmatprov.dsc_precio,
 				catunidades.dsc_nombre as unidad,
 				catproveedores.dsc_razon_social as proveedor
 				FROM catmatprov				
 				INNER JOIN catmateriales ON catmatprov.id_material = catmateriales.id_catmaterial
 				INNER JOIN catunidades ON catmateriales.id_catunidad=catunidades.id_catunidad
 				INNER JOIN catproveedores ON catmatprov.id_proveedor = catproveedores.id_catproveedor
 				";
 		
 		if($nombre!="")
 		{
 			$sql .= " where catmateriales.dsc_nombre = '".$nombre."'";
 		}
 		if($codigo!="" AND $nombre=="")
 		{
 			$sql .= " where catmateriales.cod_producto = ".$codigo;
 		}
 		if($codigo!="" AND $nombre!="")
 		{
 			$sql .= " AND catmateriales.cod_producto = ".$codigo;
 		}


 		return $this->selectDB($sql);
 	}
}