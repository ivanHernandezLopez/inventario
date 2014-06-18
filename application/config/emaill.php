<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * The email kohanat3st@gmail.com is of test
 */
switch(Kohana::$environment)
{
	case Kohana::DEVELOPMENT:
		return array(
			"driver"	=> "smtp",
      		'options' => array(
	 			"hostname" => "smtp.gmail.com",
	 			"username" => "kohanat3st@gmail.com",
	 			"password" => "localhost01",
	 			"port" => 465,
	 			"encryption" => "ssl"
      		),			
		);
		break;
		
	case Kohana::PRODUCTION:
	default:
		return array(
			"driver"	=> "native",
      		"options"	=> NULL,			
		);
		break;
}