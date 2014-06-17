<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Login extends Controller_Core_Backend {

	public function before()
	{
		parent::before();
		/*
		* Para ver esta pantalla no necesitas estar logeado
		*/
		$this->autentificacion = FALSE;
		/*
		* Todo lo que mande a pantalla debe mostralo sin incrustarlo en TEMPLATE
		*/ 
		$this->simple = TRUE;  
		/*
		*	Instacia a los modelos a ser usados
		*/
		$this->catusuarios = new Model_Catusuarios();
	}

	public function action_index()
	{
		
		$mensaje = ""; $error="";
		//echo $this->a1->hash("admin");
		if($this->request->method()==Request::POST)
		{
			$mensaje = "Proporcione los datos requeridos.";
			$error   = "info";
			$post    = $this->validar_login();		
			if($post->check() AND Security::check($post['token']))
			{
				$mensaje = "Usuario y/o contraseña incorrectos.";
				$error   = "warning";
				$remember = (!empty($post["remember"]))?TRUE:FALSE;
				if($this->a1->login($post["usuario"],$post["contrasena"],$remember))
				{
					$this->request->redirect(URL::base()."backend/proveedores");
				}
			}
		}
		$this->body = View::factory("backend/view_login")->set(array(
				"mensaje"	=> $mensaje,
				"error"		=> $error,
			));
	}

	public function action_recovery()
	{
		$mensaje = ""; $error="";
		if($this->request->method()==Request::POST)
		{
			$mensaje = "Proporcione la cuenta de correo electronico con la que se registro.";
			$error   = "info";
			$post    = $this->validar_recovery();		
			if($post->check() AND Security::check($post['token']))
			{
				$mensaje = "No existe ningun usuario registrado con esta cuenta de correo electronico.";
				$error   = "warning";				
				if($this->catusuarios->FindBy("dsc_correo",$post["usuario"])->id_catusuario)
				{

					$mensaje = "Su nueva contraseña fue enviada al correo electronico: ".$post["usuario"];
					$error = "success";
				}			
			}
			$response = array("mensaje"=>$mensaje,"error"=>$error);
			$this->body = $response;
		}else{
			$this->body = View::factory("backend/view_recovery");
		}
		
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

	public function validar_recovery()
	{
		return Validation::factory($_POST)
				->rule("usuario","not_empty")
				->rule("token","not_empty");
	}
}