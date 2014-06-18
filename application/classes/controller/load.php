<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Load extends Controller {

	public function action_view()
	{
		$parametro = $this->request->param("id");
		$view_ruta  = str_replace("_","/",$parametro);
		$this->response->body(View::factory($view_ruta));		
	}
}