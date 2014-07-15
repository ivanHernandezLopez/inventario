<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Usuarios extends Controller_Core_Backend implements Standars_Backend{

	public function before()
	{
		$this->titulo = "PANEL DE ADMINISTRACIÓN DE USUARIOS";
		parent::before();
		$this->catusuarios = new Model_Catusuarios();
	}
	public function action_index(){
		Assets::style(array("plugins/dataTables/dataTables.bootstrap.css","plugins/jconfirm/alertify.core.css","plugins/jconfirm/alertify.default.css"));
		Assets::script(array("plugins/dataTables/jquery.dataTables.js","plugins/dataTables/dataTables.bootstrap.js","backend/script_tables.js","plugins/jconfirm/alertify.js"));
		$this->body= View::factory("backend/usuarios/view_usuarios")->set(array(
				"usuarios" => $this->catusuarios->select_registros_activos(),
			));
	}
	
	public function action_agregar(){
		Assets::script(array("jquery-validate.js"));
		$msg="Mi perfil"; $error="";
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_perfil();
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catusuarios->agregar_editar($post,$this->a1,0))
				{
					$msg = "Registro insertado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/usuarios/view_agregar_usuario")->set(array(
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}
	
	public function action_editar(){
		Assets::script(array("jquery-validate.js"));
		$msg="Mi perfil"; $error="";
		$id = $this->request->param("id");

		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_perfil();
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catusuarios->agregar_editar($post,$this->a1,$id))
				{
					$msg = "Registro actualizado correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/usuarios/view_editar_usuario")->set(array(
				"msg"	=> $msg,
				"usuario"	=> $this->catusuarios->FindBy("id_catusuario",$id),
				"error"	=> $error,
			));
	}
	
	public function action_eliminar(){
		$id = $this->request->param("id");
		$this->catusuarios->baja_usuario($id);
	}

	public function action_perfil()
	{
		$msg="Mi perfil"; $error="";
		Assets::script(array("jquery-validate.js"));
		if($this->request->method()==Request::POST)
		{
			$msg = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_perfil();
			if($post->check())
			{
				$msg = "Un error ocurrio durante la acción, intentelo mas tarde.";
				$error   = "warning";
				if($this->catusuarios->edit_perfil($post,$this->userdata->id_catusuario,$this->a1))
				{
					$msg = "Datos actualizados correctamente"; $error="success";
				}
			}
		}
		$this->body = View::factory("backend/usuarios/view_perfil")->set(array(
				"msg"	=> $msg,
				"error"	=> $error,
			));
	}

	public function validate_perfil()
	{
		return Validation::factory($_POST)
			->rule("cod_usuario","not_empty")
			->rule("dsc_nombre","not_empty")
			->rule("dsc_correo","email")
			->rule("dsc_contrasena_repit","matches", array(':validation', 'dsc_contrasena_repit', 'dsc_contrasena'));
	}
}
