<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Inicio extends Controller_Core_Backend implements Standars_Backend{

	public function action_index()
	{
		Assets::script(array("dataTables.js","backend/script_tables.js"));
		Assets::style(array("dataTables.css"));
		$this->body= View::factory("backend/view_tabla");
	}

	public function action_agregar()
	{
		$this->body = View::factory("backend/view_form");
	}

	public function action_editar()
	{

	}

	public function action_eliminar()
	{

	}

} 