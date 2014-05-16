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
	protected $a1;
	
	public function before()
	{
		parent::before();
		$this->a1 = A1::instance('a1_config');


		if($this->a1->logged_in())
			$this->userdata = $this->a1->get_user();
		View::set_global(array(
			"usuario" => $this->userdata,
			));
		$this->template = View::factory("backend/structure/view_template");		
	}

	public function after()
	{
		if($this->autentificacion == TRUE AND !$this->a1->logged_in())
			$this->request->redirect(URL::base()."backend/login");
		parent::after();
	}
}