<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catproveedores extends ORM {

	protected $_primary_key = "id_catproveedor";

	public function select_registros_activos()
	{
		$sql = "SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN catmunicipios ON catmunicipios.id_catmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N'";
		return $this->selectDB($sql);
	}

	public function insert_registro()
	{

	}

}