<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mysqli',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => 'free_inventario',
			'username'   => 'root',
			'password'   => 'root',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);