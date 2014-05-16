<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Login extends Controller_Core_Backend {

	public function before()
	{
		parent::before();
		/*
		* Para ver esta pantalla no necesita estar logeadp
		*/
		$this->autentificacion = FALSE;
		/*
		* Todo lo que mande a pantalla debe mostralo sin incrustarlo en TEMPLATE
		*/ 
		$this->simple = TRUE;  
	}

	public function action_index()
	{
		
		$mensaje = ""; $error="";
		if($this->request->method()==Request::POST)
		{
			$mensaje = "Proporcienen los datos requeridos";
			$error   = "info";
			$post    = $this->validar_login();		
			if($post->check() AND Security::check($post['token']))
			{
				$mensaje = "Usuario y/o contraseña incorrectos";
				$error   = "warning";
				$remember = (!empty($post["remember"]))?TRUE:FALSE;
				if($this->a1->login($post["usuario"],$post["contrasena"],$remember))
				{
					$this->request->redirect(URL::base()."backend/inicio");
				}
			}
		}
		$this->body = View::factory("backend/view_login")->set(array(
				"mensaje"	=> $mensaje,
				"error"		=> $error,
			));
	}

	public function action_logout()
	{
		$this->a1->logout();
		$this->request->redirect(URL::base()."backend/login");
	}

	public function validar_login()
	{
		return Validation::factory($_POST)
				->rule("usuario","not_empty")
				->rule("contrasena","not_empty")
				->rule("token","not_empty");
	}
}