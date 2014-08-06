<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-17 17:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:41:45 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$dsc_apellido_pat ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 55 ]
2014-07-17 17:41:45 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$dsc_apellido_pat ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 55 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_agregar_material.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 55, Array)
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
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-17 17:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:43:34 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$dsc_apellido_pat ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 55 ]
2014-07-17 17:43:34 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$dsc_apellido_pat ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 55 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_agregar_material.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 55, Array)
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
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-17 17:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 17:46:33 --- ERROR: Kohana_Exception [ 0 ]: The dsc_nombre property does not exist in the Model_Catfamilias class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-17 17:46:33 --- STRACE: Kohana_Exception [ 0 ]: The dsc_nombre property does not exist in the Model_Catfamilias class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_agregar_material.php(34): Kohana_ORM->__get('dsc_nombre')
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
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-17 17:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 17:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 21:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 21:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 21:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 21:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 21:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 21:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 21:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-17 21:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-17 22:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/proveedor/contactos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-07-17 22:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/proveedor/contactos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-07-17 22:25:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/backend/proveedores.php [ 91 ]
2014-07-17 22:25:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/backend/proveedores.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-17 22:26:21 --- ERROR: View_Exception [ 0 ]: The requested view backend/proveedor/view_agregar_contacto could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-17 22:26:21 --- STRACE: View_Exception [ 0 ]: The requested view backend/proveedor/view_agregar_contacto could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/proveed...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/proveed...', NULL)
#2 /var/www/inventario/application/classes/controller/backend/proveedores.php(91): Kohana_View::factory('backend/proveed...')
#3 [internal function]: Controller_Backend_Proveedores->action_contactos()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}