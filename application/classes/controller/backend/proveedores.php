<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Proveedores extends Controller_Core_Backend implements Standars_Backend{

	protected $catproveedores,$catestados,$detmunicipios,$detcontactos;

	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE PROVEEDORES";
		parent::before();
		$this->catproveedores = new Model_Catproveedores();
		$this->catestados = new Model_Catestados();
		$this->detmunicipios = new MOdel_Detmunicipios();
		//$this->detcontactos = new Model_Detcontactos();

	}
	public function action_index()
	{		
		Assets::style(array("plugins/dataTables/dataTables.bootstrap.css","plugins/jconfirm/alertify.core.css","plugins/jconfirm/alertify.default.css"));
		Assets::script(array("plugins/dataTables/jquery.dataTables.js","plugins/dataTables/dataTables.bootstrap.js","backend/script_tables.js","plugins/jconfirm/alertify.js"));
		$this->body= View::factory("backend/proveedores/view_proveedores")->set(array(
				"proveedores" => $this->catproveedores->select_registros_activos(),
			));
	}

	public function action_agregar()
	{
		Assets::script(array("jquery-validate.js"));
		$msg = ""; $error = "";
		if($this->request->method()==Request::POST)
		{
						
			$post = $this->valida_post();
			$msg = "Proporcione todos los campos requeridos"; $error="info";
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				
				if($this->catproveedores->insert_registro($post,0))
				{
					$msg = "Registro insertado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/proveedores/view_agregar_proveedor")->set(array(
				"estados"	=> $this->catestados->select_registros_activos(),
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function action_editar()
	{
		
		Assets::script(array("jquery-validate.js"));
		$msg = ""; $error = "";
		$id = $this->request->param("id");
		if($this->request->method()==Request::POST)
		{
			$post = $this->valida_post();
			$msg = "Proporcione todos los campos requeridos"; $error="info";
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catproveedores->insert_registro($post,$id))
				{
					$msg = "Registro actualizado correctamente"; $error="success";
				}
			}
		}

		$proveedor = $this->catproveedores->FindBy("id_catproveedor",$id);

		$this->body = View::factory("backend/proveedores/view_editar_proveedor")->set(array(
				"p"			=> $proveedor,
				
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function action_eliminar(){
		$id = $this->request->param("id");
		$this->catproveedores->UpdateStatus("id_catproveedor",$id);
	}

	public function action_contactos()
	{
		$this->body = View::factory("backend/proveedores/view_agregar_contacto")->set(array(
				"post"	=> $_POST,
			));
	}

	//Metodos internos para validacion KOHANA
	public function valida_post()
	{
		return Validation::factory($_POST)
		
		->rule("dsc_razon_social","not_empty")
		->rule("dsc_domicilio","not_empty")
		->rule("nombre1","not_empty")
		->rule("telefono1","not_empty")
		->rule("correo1","not_empty")
		->rule("dsc_comercializadora","not_empty");
		 
	}

	//Consulta los municipios del estado seleccionado
	public function action_municipios()
	{
		$id = $_POST["id_estado"];
		$municipios = $this->detmunicipios->FindByAll("id_catestado",$id);
		$this->body = View::factory("backend/varios/view_municipios")->set(array(
				"municipios"	=> $municipios,
			));
	}

} 