<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-07 15:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-07 15:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-07 15:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales/agregar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-07 15:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales/agregar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-07 15:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 15:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 15:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 15:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 15:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-07 15:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/materiales was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-07 15:48:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 3 ]
2014-07-07 15:48:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 3 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_agregar_material.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 3, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 21:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 21:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 21:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 21:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 21:43:57 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catproveedores' doesn't exist ( SHOW FULL COLUMNS FROM `catproveedores` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 21:43:57 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catproveedores' doesn't exist ( SHOW FULL COLUMNS FROM `catproveedores` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('catproveedores')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/application/classes/controller/backend/proveedores.php(9): Kohana_ORM->__construct()
#6 [internal function]: Controller_Backend_Proveedores->before()
#7 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#8 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/inventario/index.php(109): Kohana_Request->execute()
#11 {main}
2014-07-07 21:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 21:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 21:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 21:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 21:57:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Materiales::$catestados ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
2014-07-07 21:57:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Materiales::$catestados ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
--
#0 /var/www/inventario/application/classes/controller/backend/materiales.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 16, Array)
#1 [internal function]: Controller_Backend_Materiales->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 21:57:47 --- ERROR: ErrorException [ 1 ]: Call to a member function select_registros_activos() on a non-object ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
2014-07-07 21:57:47 --- STRACE: ErrorException [ 1 ]: Call to a member function select_registros_activos() on a non-object ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 21:57:47 --- ERROR: ErrorException [ 1 ]: Call to a member function select_registros_activos() on a non-object ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
2014-07-07 21:57:47 --- STRACE: ErrorException [ 1 ]: Call to a member function select_registros_activos() on a non-object ~ APPPATH/classes/controller/backend/materiales.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 21:58:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Detmunicipio' not found ~ APPPATH/classes/controller/backend/materiales.php [ 11 ]
2014-07-07 21:58:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Detmunicipio' not found ~ APPPATH/classes/controller/backend/materiales.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 21:59:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catmateriales' not found ~ APPPATH/classes/controller/backend/materiales.php [ 12 ]
2014-07-07 21:59:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catmateriales' not found ~ APPPATH/classes/controller/backend/materiales.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 21:59:29 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'sta_baja' in 'where clause' ( SELECT `catestados`.`id_catestado` AS `id_catestado`, `catestados`.`dsc_nombre` AS `dsc_nombre` FROM `catestados` AS `catestados` WHERE `sta_baja` = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 21:59:29 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'sta_baja' in 'where clause' ( SELECT `catestados`.`id_catestado` AS `id_catestado`, `catestados`.`dsc_nombre` AS `dsc_nombre` FROM `catestados` AS `catestados` WHERE `sta_baja` = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catesta...', 'Model_Catestado...', Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/inventario/application/classes/orm.php(37): Kohana_ORM->find_all()
#4 /var/www/inventario/application/classes/controller/backend/materiales.php(24): ORM->select_registros_activos()
#5 [internal function]: Controller_Backend_Materiales->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-07 22:14:56 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catproveedores' doesn't exist ( SHOW FULL COLUMNS FROM `catproveedores` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:14:56 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catproveedores' doesn't exist ( SHOW FULL COLUMNS FROM `catproveedores` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('catproveedores')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/application/classes/controller/backend/proveedores.php(9): Kohana_ORM->__construct()
#6 [internal function]: Controller_Backend_Proveedores->before()
#7 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#8 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/inventario/index.php(109): Kohana_Request->execute()
#11 {main}
2014-07-07 22:15:32 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catmunicipios' doesn't exist ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN catmunicipios ON catmunicipios.id_catmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:15:32 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catmunicipios' doesn't exist ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN catmunicipios ON catmunicipios.id_catmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM c...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(13): ORM->selectDB('SELECT * FROM c...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(17): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-07 22:16:21 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.sta_baja' in 'where clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:16:21 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.sta_baja' in 'where clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM c...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(13): ORM->selectDB('SELECT * FROM c...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(17): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-07 22:17:00 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catestado' in 'on clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:17:00 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catestado' in 'on clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM c...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(13): ORM->selectDB('SELECT * FROM c...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(17): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-07 22:17:46 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catmunicipio' in 'on clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:17:46 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.id_catmunicipio' in 'on clause' ( SELECT * FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_catmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM c...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(13): ORM->selectDB('SELECT * FROM c...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(17): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-07 22:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 22:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 22:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 22:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 22:20:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/proveedores/view_agregar_proveedor.php [ 3 ]
2014-07-07 22:20:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/proveedores/view_agregar_proveedor.php [ 3 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_agregar_proveedor.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 3, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 22:20:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: unidades ~ APPPATH/views/backend/proveedores/view_agregar_proveedor.php [ 35 ]
2014-07-07 22:20:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: unidades ~ APPPATH/views/backend/proveedores/view_agregar_proveedor.php [ 35 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_agregar_proveedor.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 35, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 22:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/proveedores/municipios was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-07-07 22:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/proveedores/municipios was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-07 22:41:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Proveedores::$municipios ~ APPPATH/classes/controller/backend/proveedores.php [ 67 ]
2014-07-07 22:41:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Proveedores::$municipios ~ APPPATH/classes/controller/backend/proveedores.php [ 67 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 67, Array)
#1 [internal function]: Controller_Backend_Proveedores->action_municipios()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 22:41:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Detmunicipios::get_by() ~ APPPATH/classes/controller/backend/proveedores.php [ 68 ]
2014-07-07 22:41:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Detmunicipios::get_by() ~ APPPATH/classes/controller/backend/proveedores.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-07 22:43:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: municipop ~ APPPATH/views/backend/varios/view_municipios.php [ 2 ]
2014-07-07 22:43:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: municipop ~ APPPATH/views/backend/varios/view_municipios.php [ 2 ]
--
#0 /var/www/inventario/application/views/backend/varios/view_municipios.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 2, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#6 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#7 [internal function]: Controller_Core_Backend->after()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-07-07 22:43:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: municipo ~ APPPATH/views/backend/varios/view_municipios.php [ 2 ]
2014-07-07 22:43:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: municipo ~ APPPATH/views/backend/varios/view_municipios.php [ 2 ]
--
#0 /var/www/inventario/application/views/backend/varios/view_municipios.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 2, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#6 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#7 [internal function]: Controller_Core_Backend->after()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-07-07 22:50:06 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:50:06 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catprov...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(910): Kohana_ORM->_load_result(false)
#3 /var/www/inventario/application/classes/model/catproveedores.php(18): Kohana_ORM->find()
#4 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Model_Catproveedores->insert_registro(Object(Validation), 0)
#5 [internal function]: Controller_Backend_Proveedores->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-07 22:51:11 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:51:11 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catprov...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(910): Kohana_ORM->_load_result(false)
#3 /var/www/inventario/application/classes/model/catproveedores.php(19): Kohana_ORM->find()
#4 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Model_Catproveedores->insert_registro(Object(Validation), 0)
#5 [internal function]: Controller_Backend_Proveedores->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-07 22:52:30 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 22:52:30 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catproveedor' in 'where clause' ( SELECT `catproveedores`.`id_caproveedor` AS `id_caproveedor`, `catproveedores`.`id_catestado` AS `id_catestado`, `catproveedores`.`id_detmunicipio` AS `id_detmunicipio`, `catproveedores`.`fec_alta` AS `fec_alta`, `catproveedores`.`fec_modif` AS `fec_modif`, `catproveedores`.`fec_baja` AS `fec_baja`, `catproveedores`.`dsc_baja` AS `dsc_baja`, `catproveedores`.`sta_baja` AS `sta_baja` FROM `catproveedores` AS `catproveedores` WHERE `id_catproveedor` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catprov...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(910): Kohana_ORM->_load_result(false)
#3 /var/www/inventario/application/classes/model/catproveedores.php(19): Kohana_ORM->find()
#4 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Model_Catproveedores->insert_registro(Object(Validation), 0)
#5 [internal function]: Controller_Backend_Proveedores->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-07 22:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 22:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 22:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:04:05 --- ERROR: ErrorException [ 8 ]: Undefined index: tel_oficina ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-07-07 23:04:05 --- STRACE: ErrorException [ 8 ]: Undefined index: tel_oficina ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/model/catproveedores.php(30): Kohana_Validation->offsetGet('tel_oficina')
#2 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Model_Catproveedores->insert_registro(Object(Validation), 0)
#3 [internal function]: Controller_Backend_Proveedores->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-07 23:05:31 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$empresa ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 34 ]
2014-07-07 23:05:31 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$empresa ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 34 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_proveedores.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 34, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 23:05:53 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$estado ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 35 ]
2014-07-07 23:05:53 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$estado ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 35 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_proveedores.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 35, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 23:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:07:47 --- ERROR: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catp' at line 7 ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.dsc_nombre,
				catproveedores.dsc_colonia,
				catproveedores.dsc_correo,
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-07 23:07:47 --- STRACE: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catp' at line 7 ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.dsc_nombre,
				catproveedores.dsc_colonia,
				catproveedores.dsc_correo,
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ?????cat...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(19): ORM->selectDB('SELECT ?????cat...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(19): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-07 23:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:12:24 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id_catproveedor ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 45 ]
2014-07-07 23:12:24 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id_catproveedor ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 45 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_proveedores.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 45, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/application/views/backend/structure/view_template.php(26): Kohana_View->__toString()
#5 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#6 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#7 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#10 /var/www/inventario/application/classes/controller/core/backend.php(47): Controller_Core_System->after()
#11 [internal function]: Controller_Core_Backend->after()
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-07 23:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:17:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/backend/proveedores.php [ 68 ]
2014-07-07 23:17:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/controller/backend/proveedores.php [ 68 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 68, Array)
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 23:18:58 --- ERROR: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-07 23:18:58 --- STRACE: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(73): Kohana_ORM->__get('id_detmunnicipi...')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 23:18:59 --- ERROR: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-07 23:18:59 --- STRACE: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(73): Kohana_ORM->__get('id_detmunnicipi...')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 23:19:07 --- ERROR: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-07 23:19:07 --- STRACE: Kohana_Exception [ 0 ]: The id_detmunnicipio property does not exist in the Model_Catproveedores class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(73): Kohana_ORM->__get('id_detmunnicipi...')
#1 [internal function]: Controller_Backend_Proveedores->action_editar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-07 23:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-07 23:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-07 23:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}