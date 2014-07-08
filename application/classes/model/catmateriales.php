<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catmateriales extends ORM {

	protected $_primary_key = "id_catmaterial";

	public function agregar_editar($post,$id)
	{
		$query = ORM::factory($this->table_name())->where("id_catmaterial","=",$id)->find();
		$query->cod_producto = $post["cod_sap"];
		$query->dsc_nombre = $post["dsc_nombre"];
		$query->dsc_descripcion = $post["dsc_descripcion"];
		$query->id_catfamilia = $post["id_catfamilia"];
		$query->id_catunidad = $post["id_catunidad"];
		$query->id_catproveedor = $post["id_catproveedor"];
		$query->sta_baja = "N";
		if($id==0)
			$query->fec_alta = date("Y-m-d");
 		else
 			$query->fec_modif = date("Y-m-d");

 		return $query->save();
 	}

 	public function select_registros_activos()
 	{
 		$sql = "SELECT 
 				catmateriales.id_catmaterial,
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.dsc_nombre as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_nombre,' ',catproveedores.dsc_apellido_pat,' ',catproveedores.dsc_apellido_mat) as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N'";
		return $this->selectDB($sql);
 	}
}