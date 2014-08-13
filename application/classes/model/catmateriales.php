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
		$query->dsc_precio = $post["dsc_precio"];
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
				catfamilias.num_familia as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_razon_social) as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N'";
		return $this->selectDB($sql);
 	}

 	public function materiales($nombre,$codigo)
 	{
 		$sql = "SELECT 
 				catmateriales.cod_producto,
 				catmateriales.id_catmaterial,
 				catmateriales.dsc_nombre,
 				catmateriales.dsc_descripcion,
 				catmateriales.dsc_precio,
 				catunidades.dsc_nombre as unidad,
 				catproveedores.dsc_razon_social as proveedor
 				FROM catmateriales
 				INNER JOIN catunidades ON catmateriales.id_catunidad = catunidades.id_catunidad
 				INNER JOIN catproveedores ON catmateriales.id_catproveedor = catproveedores.id_catproveedor
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