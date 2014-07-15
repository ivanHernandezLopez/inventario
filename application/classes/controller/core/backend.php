<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Core_Backend extends Controller_Core_System {

	/**
	* 
	* @abstract
	* @var Valida que el usuario este forzosamente logeado para ingresar a las secciones
	*/
	protected $autentificacion = TRUE;
	/**
	* 
	* @abstract
	* @var almacena los datos del usuario que se encuantra logeado
	*/
	protected $userdata;
	/**
	* 
	* @abstract
	* @var A1 autentificacion de usuario
	*/
	protected $a1,$titulo;
	
	public function before()
	{
		parent::before();
		$this->a1 = A1::instance('a1_config');
		Assets::Style(array("bootstrap.css","plugins/morris/morris-0.4.3.min.css","plugins/timeline/timeline.css","sb-admin.css"));
		Assets::Script(array("jquery-1.10.2.js","bootstrap.min.js","plugins/metisMenu/jquery.metisMenu.js"));
		if($this->a1->logged_in())
			$this->userdata = $this->a1->get_user();
		View::set_global(array(
			"usuario" => $this->userdata,
			));
		$this->template = View::factory("backend/structure/view_template")->set(array(
				"menu_superior"		=> View::factory("backend/structure/view_menu_superior")->set(array(
					"titulo_principal"	=> $this->titulo,
					)),
				"menu_lateral"		=> View::factory("backend/structure/view_menu_lateral")->set(array(
						"controller"	=> $this->request->controller(),
					)),
			));		
	}

	public function after()
	{
		if($this->autentificacion == TRUE AND !$this->a1->logged_in())
			$this->request->redirect(URL::base()."backend/login");
		parent::after();
	}
}