<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-05 19:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 19:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:36:29 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.detcontactos' doesn't exist ( SHOW FULL COLUMNS FROM `detcontactos` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-08-05 20:36:29 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.detcontactos' doesn't exist ( SHOW FULL COLUMNS FROM `detcontactos` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('detcontactos')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/application/classes/controller/backend/proveedores.php(14): Kohana_ORM->__construct()
#6 [internal function]: Controller_Backend_Proveedores->before()
#7 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#8 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/inventario/index.php(109): Kohana_Request->execute()
#11 {main}
2014-08-05 20:38:52 --- ERROR: ErrorException [ 8 ]: Undefined index: materiales ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-08-05 20:38:52 --- STRACE: ErrorException [ 8 ]: Undefined index: materiales ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/model/catproveedores.php(41): Kohana_Validation->offsetGet('materiales')
#2 /var/www/inventario/application/classes/controller/backend/proveedores.php(40): Model_Catproveedores->insert_registro(Object(Validation), 0)
#3 [internal function]: Controller_Backend_Proveedores->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-08-05 20:40:15 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catestado' in 'on clause' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.num_proveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				
				catproveedores.dsc_domicilio
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-08-05 20:40:15 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catestado' in 'on clause' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.num_proveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				
				catproveedores.dsc_domicilio
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ?????cat...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(22): ORM->selectDB('SELECT ?????cat...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(22): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-08-05 20:41:01 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id_catestado ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 46 ]
2014-08-05 20:41:01 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id_catestado ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 46 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_proveedores.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 46, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(49): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-08-05 20:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:45:41 --- ERROR: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-08-05 20:45:41 --- STRACE: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(78): Kohana_ORM->__get('id_catestado')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-08-05 20:46:40 --- ERROR: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-08-05 20:46:40 --- STRACE: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(78): Kohana_ORM->__get('id_catestado')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-08-05 20:46:42 --- ERROR: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-08-05 20:46:42 --- STRACE: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(78): Kohana_ORM->__get('id_catestado')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-08-05 20:46:53 --- ERROR: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-08-05 20:46:53 --- STRACE: Kohana_Exception [ 0 ]: The id_catestado property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(78): Kohana_ORM->__get('id_catestado')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-08-05 20:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 20:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 20:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 21:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 21:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 21:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 21:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 21:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 21:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 21:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 21:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 21:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 21:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:17:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:17:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-05 22:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-05 22:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}