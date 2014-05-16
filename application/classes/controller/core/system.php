<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Core_System extends Controller {

	/**
	* @var View $template
	* @var mixed $body Variable que almacena el template a usar (backend/frontend)
	*/
	protected $template;
	
	/**
	* @var mixed $body Variable que almacena el contenido de o que vamos a mostrar (definida en cada metodo)
	*/
	protected $body;
	/**
	* @var boolean $simple Define if render is simple or with template;
	*/
	protected $simple = FALSE;
	/**
	* @var session, instancia para el uso de sessiones
	*/
	protected $session;
	

	public function before()
	{
		parent::before();
		try
		{
			$this->session = Session::instance();
		} catch (Session_Exception $e){
			session_destroy();
			$this->session = Session::instance();
		}
	}

	/**
	* (non-PHPdoc)
	* @see system/classes/kohana/Kohana_Controller::after()
	*/
	public function after()
	{
		$output = $this->body;
		if ($this->request->is_ajax() OR $this->simple === TRUE)
		{
			if (is_array($this->body))
			{
				$this->response->headers('Content-Type','application/json');
				$output =  json_encode($this->body);
			}
		}
		else
			$output = $this->template->set(array("body"	=> $this->body));
		$this->response->body($output);
		parent::after();
	}

} 
