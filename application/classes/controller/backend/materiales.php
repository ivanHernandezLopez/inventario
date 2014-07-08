<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Materiales extends Controller_Core_Backend implements Standars_Backend{

	protected $catmateriales,$catunidades,$catproveedores;

	public function before()
	{
		parent::before();
		$this->catunidades = new Model_Catunidades();
		$this->catmateriales = new Model_Catmateriales();
		$this->catproveedores = new Model_Catproveedores();
	}

	public function action_index()
	{

	}

	public function action_agregar()
	{
		$msg = ""; $error = "";
		$this->body = View::factory("backend/materiales/view_agregar_material")->set(array(
				"unidades"	=> $this->catunidades->select_registros_activos(),
				"proveedores"	=> $this->catproveedores->select_registros_activos(),
				"error"	=> $error,
				"msg"	=> $msg,
			));
	}

	public function action_editar()
	{

	}

	public function action_eliminar()
	{

	}
}