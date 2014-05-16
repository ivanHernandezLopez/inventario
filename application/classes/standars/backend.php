<?php
/**
 * interface Standars Backend
 * 
 * @author  Ivan Lopez Lopez
 * @example class Controller_Administrator_Demo extends Controller_Core_Backend implements Standars_Backend 
 *
 */
interface Standars_Backend {
	
	public function action_index();
	
	public function action_agregar();
	
	public function action_editar();
	
	public function action_eliminar();
	
}