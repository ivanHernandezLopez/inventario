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
					$password = $this->create_password();
					$data = array(
						"usuario"		=> $post["usuario"],
						"contrasena"	=> $password,
					);
					$email = Email::factory("Solicitud de recuperación de contraseña")
							->message($this->parse_html($data,"recovery"), 'text/html')
						    ->to($post["usuario"])
						    ->from("recovery_pass@sistema.com");

				    if($email->send()){
				    	$this->catusuarios->new_password($post["usuario"],$this->a1->hash($password));
				    	$mensaje = "Su nueva contraseña fue enviada al correo electronico: ".$post["usuario"];
						$error = "success";
				    }
					
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

	public function create_password()
	{
		//Se define una cadena de caractares. Te recomiendo que uses esta.
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		//Obtenemos la longitud de la cadena de caracteres
		$longitudCadena=strlen($cadena);
		 
		//Se define la variable que va a contener la contraseña
		$pass = "";
		//Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
		$longitudPass=10;
		 
		//Creamos la contraseña
		for($i=1 ; $i<=$longitudPass ; $i++){
			//Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
			$pos=rand(0,$longitudCadena-1);
			 
			//Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
			$pass .= substr($cadena,$pos,1);
		}
		return $pass;
	}
	public function parse_html($data,$vista)
    {
    	$template =(string) View::factory("backend/mailings/".$vista);
        if ($template != NULL && count($data)>0)
        {
            foreach ($data as $key=>$value)
            {
              $key = '{'.$key.'}';
              $template= str_replace($key,$value,$template);
            }
        }
        return $template;
    }
}