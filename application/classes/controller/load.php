<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Load extends Controller {

	public function action_view()
	{
		$ruta = $this->request->param("id");
		$new_ruta  = str_replace("_","/",$ruta);
		$this->response->body(View::factory("backend/mailings/recovery"));		
	}
}