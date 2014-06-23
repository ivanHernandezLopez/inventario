<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Usuarios extends Controller_Core_Backend implements Standars_Backend{

	public function before()
	{
		parent::before();
		$this->catusuarios = new Model_Catusuarios();
	}
	public function action_index(){}
	
	public function action_agregar(){}
	
	public function action_editar(){}
	
	public function action_eliminar(){}

	public function action_perfil()
	{
		$msg="Mi perfil"; $error="";
		Assets::script(array("jquery-validate.js"));
		if($this->request->method()==Request::POST)
		{
			$mensaje = "Proporcione los datos requeridos.";
			$error   = "info";
			$post = $this->validate_perfil();
			if($post->check())
			{
				$mensaje = "Un error ocurrio durante la acción, intentelo mas tarde.";
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
			->rule("dsc_nombre","not_empty")
			->rule("dsc_correo","email")
			->rule("dsc_contrasena_repit","matches", array(':validation', 'dsc_contrasena_repit', 'dsc_contrasena'));
	}
}
