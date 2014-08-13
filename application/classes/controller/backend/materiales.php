<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Materiales extends Controller_Core_Backend implements Standars_Backend{

	protected $catmateriales,$catunidades,$catproveedores,$catfamilias;

	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE MATERIALES";
		parent::before();
		$this->catunidades = new Model_Catunidades();
		$this->catmateriales = new Model_Catmateriales();
		$this->catproveedores = new Model_Catproveedores();
		$this->catfamilias = new Model_Catfamilias();
		$this->catmatprov = new Model_Catmatprov();
	}

	public function action_index()
	{
		Assets::style(array("plugins/dataTables/dataTables.bootstrap.css","plugins/jconfirm/alertify.core.css","plugins/jconfirm/alertify.default.css"));
		Assets::script(array("plugins/dataTables/jquery.dataTables.js","plugins/dataTables/dataTables.bootstrap.js","backend/script_tables.js","plugins/jconfirm/alertify.js"));
		$this->body= View::factory("backend/materiales/view_materiales")->set(array(
				"materiales" => $this->catmateriales->select_registros_activos(),
			));
	}

	public function action_agregar()
	{
		Assets::script(array("jquery-validate.js"));
		$msg = ""; $error = "";
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_post();
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				$provs = count($_POST["dsc_precio"]);
				$id_mat  = $this->catmateriales->agregar_editar($post,0);
				if($id_mat!='')
				{
					for($i=0;$i<$provs;$i++)
					{
						$this->catmatprov->add_proveedor($id_mat,$_POST["id_catproveedor"][$i],$_POST["dsc_precio"][$i],$_POST["id"][$i]);
					}
					$msg = "Registro insertado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/materiales/view_agregar_material")->set(array(
				"unidades"	=> $this->catunidades->select_registros_activos(),
				"familias"	=> $this->catfamilias->select_registros_activos(),
				"error"	=> $error,
				"msg"	=> $msg,
			));
	}

	public function action_editar()
	{
		Assets::script(array("jquery-validate.js"));
		$msg = ""; $error = "";
		$id = $this->request->param("id");
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_post();
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				$provs = count($_POST["dsc_precio"]);
				if($this->catmateriales->agregar_editar($post,$id))
				{
					for($i=0;$i<$provs;$i++)
					{
						$this->catmatprov->add_proveedor($id,$_POST["id_catproveedor"][$i],$_POST["dsc_precio"][$i],$_POST["id"][$i]);
					}
					$msg = "Registro actualizado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/materiales/view_editar_material")->set(array(
				"material"	=> $this->catmateriales->FindBy("id_catmaterial",$id),
				"unidades"	=> $this->catunidades->select_registros_activos(),
				"proveedores"	=> $this->catproveedores->select_registros_activos(),
				"provs"			=> $this->catmatprov->registros_activos($id),
				"familias"	=> $this->catfamilias->select_registros_activos(),
				"error"	=> $error,
				"msg"	=> $msg,
			));
	}

	public function action_eliminar()
	{
		$id = $this->request->param("id");
		$this->catmateriales->UpdateStatus("id_catmaterial",$id);
	}

	public function action_proveedor()
	{
		$this->body = View::factory("backend/materiales/view_proveedores")->set(array(
				"proveedores"	=> $this->catproveedores->select_registros_activos(),
				"num"	=> $_POST["num"],		
			));
	}

	public function action_eliminarp()
	{
		$id = $_POST["id"];
		$this->catmatprov->UpdateStatus("id_catmatprov",$id);
	}

	public function validate_post()
	{
		return Validation::factory($_POST)
			->rule("cod_sap","not_empty")
			->rule("dsc_nombre","not_empty")
			->rule("id_catfamilia","not_empty")
			->rule("id_catunidad","not_empty")
			->rule("id_catproveedor","not_empty");

	}
}