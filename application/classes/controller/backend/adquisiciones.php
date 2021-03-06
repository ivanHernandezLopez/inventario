<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Adquisiciones extends Controller_Core_Backend {

	protected $catmateriales;
	protected $catmatprov;
	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE FAMILIAS";
		parent::before();
		$this->catmateriales = new Model_Catmateriales();
		$this->catmatprov = new Model_Catmatprov();
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
			$materiales = $this->catmatprov->materiales($_POST["nombre"],$_POST["codigo"]);
			$this->body = View::factory("backend/adquisiciones/view_materiales_encontrados")->set("materiales",$materiales);
		}
	}

	public function action_material()
	{
		$this->simple = TRUE;
		$material = ORM::factory("catmateriales")->where("id_catmaterial","=",$_POST["id"])->find();

		$this->body = array("material"=>$material);
	}

}