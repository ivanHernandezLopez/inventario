<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Familias extends Controller_Core_Backend implements Standars_Backend{

	
	protected $catfamilias;
	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE FAMILIAS";
		parent::before();
		$this->catfamilias = new Model_Catfamilias();
	}
	
	public function action_index()
	{
		Assets::style(array("plugins/dataTables/dataTables.bootstrap.css","plugins/jconfirm/alertify.core.css","plugins/jconfirm/alertify.default.css"));
		Assets::script(array("plugins/dataTables/jquery.dataTables.js","plugins/dataTables/dataTables.bootstrap.js","backend/script_tables.js","plugins/jconfirm/alertify.js"));
		
		$this->body = View::factory("backend/familias/view_familias")->set(array(
				"familias"	=> $this->catfamilias->select_registros_activos(),
			));
	}

	public function action_agregar()
	{
		Assets::script(array("jquery-validate.js"));
		$msg = "";  $error = "";
		$post = $this->validate_post();
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catfamilias->agregar_editar($post,0))
				{
					$msg = "Registro insertado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/familias/view_agregar_familia")->set(array(
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function action_editar()
	{
		Assets::script(array("jquery-validate.js"));
		$msg = "";  $error = "";
		$id = $this->request->param("id");
		$post = $this->validate_post();
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catfamilias->agregar_editar($post,$id))
				{
					$msg = "Registro actualizado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/familias/view_editar_familia")->set(array(
				"familia"	=> $this->catfamilias->FindBy("id_catfamilia",$id),
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function action_eliminar()
	{
		$id = $this->request->param("id");
		$this->catfamilias->UpdateStatus("id_catfamilia",$id);
	}

	public function validate_post()
	{
		return Validation::factory($_POST)
			->rule("num_familia","not_empty")
			->rule("dsc_descripcion","not_empty")
			->rule("nom_responsable","not_empty");
	}
}