<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Proveedores extends Controller_Core_Backend implements Standars_Backend{

	protected $catproveedores;
	public function before()
	{
		parent::before();
		$this->catproveedores = new Model_Catproveedores();

	}
	public function action_index()
	{
		Assets::script(array("dataTables.js","backend/script_tables.js"));
		Assets::style(array("dataTables.css"));
		$this->body= View::factory("backend/proveedores/view_proveedores")->set(array(
				"proveedores" => $this->catproveedores->select_registros_activos(),
			));
	}

	public function action_agregar()
	{
		if($this->request->method()==Request::POST)
		{
			$post = $this->valida_post();
			if($post->check())
			{
				if($this->catproveedores->insert_registro($post))
				{

				}
			}
		}
		$this->body = View::factory("backend/proveedores/view_agregar_proveedor");
	}

	public function action_editar()
	{

	}

	public function action_eliminar()
	{

	}

	//Metodos internos para validacion KOHANA
	public function valida_post()
	{
		return Validation::factory($_POST);
	}

} 