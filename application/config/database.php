
<?php defined('SYSPATH') OR die('No direct access allowed.');


switch(Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		return array
		(
			'default' => array
			(
				'type'       => 'MySQLi',
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
	break;
		
	case Kohana::PRODUCTION:
		default:
			return array
			(
				'default' => array
				(
					'type'       => 'mysql',
					'connection' => array(

						'hostname'   => 'localhost',
						'database'   => 'helpersp_free',
						'username'   => 'helpersp_free',
						'password'   => 'ib?bzkR$h!vA',
						'persistent' => FALSE,
					),
					'table_prefix' => '',
					'charset'      => 'utf8',
					'caching'      => FALSE,
					'profiling'    => TRUE,
				),
			);
		break;
}