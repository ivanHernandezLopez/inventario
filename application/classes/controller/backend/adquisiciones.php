<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Adquisiciones extends Controller_Core_Backend {

	protected $catmateriales;
	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE FAMILIAS";
		parent::before();
		$this->catmateriales = new Model_Catmateriales();
	}

	public function action_index()
	{

	}

	public function action_agregar()
	{
		$msg = "";  $error = "";
		
		$this->body = View::factory("backend/adquisiciones/view_agregar_adquisiciones")->set(array(
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function action_busqueda()
	{	
		$this->body = View::factory("backend/adquisiciones/view_busqueda_productos");
	}

	public function action_materiales()
	{
		if($_POST)
		{
			$materiales = $this->catmateriales->materiales($_POST["nombre"],$_POST["codigo"]);
			$this->body = View::factory("backend/adquisiciones/view_materiales_encontrados")->set("materiales",$materiales);
		}
	}

}