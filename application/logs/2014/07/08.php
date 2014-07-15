<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 00:00:24 --- ERROR: ErrorException [ 8 ]: Undefined index: cod_sap ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-07-08 00:00:24 --- STRACE: ErrorException [ 8 ]: Undefined index: cod_sap ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/model/catfamilias.php(10): Kohana_Validation->offsetGet('cod_sap')
#2 /var/www/inventario/application/classes/controller/backend/familias.php(23): Model_Catfamilias->agregar_editar(Object(Validation), 0)
#3 [internal function]: Controller_Backend_Familias->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Familias))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 12:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:27:20 --- ERROR: View_Exception [ 0 ]: The requested view backend/familias/view_femilias could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-07-08 12:27:20 --- STRACE: View_Exception [ 0 ]: The requested view backend/familias/view_femilias could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/familia...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/familia...', NULL)
#2 /var/www/inventario/application/classes/controller/backend/familias.php(15): Kohana_View::factory('backend/familia...')
#3 [internal function]: Controller_Backend_Familias->action_index()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Familias))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 12:27:32 --- ERROR: Kohana_Exception [ 0 ]: The id_Catfamilia property does not exist in the Model_Catfamilias class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-08 12:27:32 --- STRACE: Kohana_Exception [ 0 ]: The id_Catfamilia property does not exist in the Model_Catfamilias class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/views/backend/familias/view_familias.php(43): Kohana_ORM->__get('id_Catfamilia')
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
#12 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Familias))
#13 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/inventario/index.php(109): Kohana_Request->execute()
#16 {main}
2014-07-08 12:29:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"msg"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/controller/backend/familias.php [ 65 ]
2014-07-08 12:29:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"msg"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/controller/backend/familias.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-08 12:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:54:06 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, string given, called in /var/www/inventario/application/classes/controller/backend/familias.php on line 83 and defined ~ SYSPATH/classes/kohana/validation.php [ 238 ]
2014-07-08 12:54:06 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, string given, called in /var/www/inventario/application/classes/controller/backend/familias.php on line 83 and defined ~ SYSPATH/classes/kohana/validation.php [ 238 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/invent...', 238, Array)
#1 /var/www/inventario/application/classes/controller/backend/familias.php(83): Kohana_Validation->rules('cod_sap', 'not_empty')
#2 /var/www/inventario/application/classes/controller/backend/familias.php(27): Controller_Backend_Familias->validate_post()
#3 [internal function]: Controller_Backend_Familias->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Familias))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 12:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 12:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 12:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:03:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id_Catproveedor ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 52 ]
2014-07-08 13:03:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id_Catproveedor ~ APPPATH/views/backend/materiales/view_agregar_material.php [ 52 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_agregar_material.php(52): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 52, Array)
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
2014-07-08 13:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:13:50 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catmaterial' in 'where clause' ( SELECT `catmateriales`.`id_producto` AS `id_producto`, `catmateriales`.`cod_producto` AS `cod_producto`, `catmateriales`.`id_familia` AS `id_familia`, `catmateriales`.`dsc_nombre` AS `dsc_nombre`, `catmateriales`.`dsc_descripcion` AS `dsc_descripcion`, `catmateriales`.`fec_alta` AS `fec_alta`, `catmateriales`.`fec_baja` AS `fec_baja`, `catmateriales`.`sta_baja` AS `sta_baja` FROM `catmateriales` AS `catmateriales` WHERE `id_catmaterial` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-08 13:13:50 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catmaterial' in 'where clause' ( SELECT `catmateriales`.`id_producto` AS `id_producto`, `catmateriales`.`cod_producto` AS `cod_producto`, `catmateriales`.`id_familia` AS `id_familia`, `catmateriales`.`dsc_nombre` AS `dsc_nombre`, `catmateriales`.`dsc_descripcion` AS `dsc_descripcion`, `catmateriales`.`fec_alta` AS `fec_alta`, `catmateriales`.`fec_baja` AS `fec_baja`, `catmateriales`.`sta_baja` AS `sta_baja` FROM `catmateriales` AS `catmateriales` WHERE `id_catmaterial` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catmate...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(910): Kohana_ORM->_load_result(false)
#3 /var/www/inventario/application/classes/model/catmateriales.php(9): Kohana_ORM->find()
#4 /var/www/inventario/application/classes/controller/backend/materiales.php(34): Model_Catmateriales->agregar_editar(Object(Validation), 0)
#5 [internal function]: Controller_Backend_Materiales->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-08 13:16:33 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catmaterial' in 'where clause' ( SELECT `catmateriales`.`id_producto` AS `id_producto`, `catmateriales`.`cod_producto` AS `cod_producto`, `catmateriales`.`dsc_nombre` AS `dsc_nombre`, `catmateriales`.`dsc_descripcion` AS `dsc_descripcion`, `catmateriales`.`id_catfamilia` AS `id_catfamilia`, `catmateriales`.`id_catunidad` AS `id_catunidad`, `catmateriales`.`id_catproveedor` AS `id_catproveedor`, `catmateriales`.`fec_alta` AS `fec_alta`, `catmateriales`.`fec_modif` AS `fec_modif`, `catmateriales`.`fec_baja` AS `fec_baja`, `catmateriales`.`dsc_baja` AS `dsc_baja`, `catmateriales`.`sta_baja` AS `sta_baja` FROM `catmateriales` AS `catmateriales` WHERE `id_catmaterial` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-08 13:16:33 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'id_catmaterial' in 'where clause' ( SELECT `catmateriales`.`id_producto` AS `id_producto`, `catmateriales`.`cod_producto` AS `cod_producto`, `catmateriales`.`dsc_nombre` AS `dsc_nombre`, `catmateriales`.`dsc_descripcion` AS `dsc_descripcion`, `catmateriales`.`id_catfamilia` AS `id_catfamilia`, `catmateriales`.`id_catunidad` AS `id_catunidad`, `catmateriales`.`id_catproveedor` AS `id_catproveedor`, `catmateriales`.`fec_alta` AS `fec_alta`, `catmateriales`.`fec_modif` AS `fec_modif`, `catmateriales`.`fec_baja` AS `fec_baja`, `catmateriales`.`dsc_baja` AS `dsc_baja`, `catmateriales`.`sta_baja` AS `sta_baja` FROM `catmateriales` AS `catmateriales` WHERE `id_catmaterial` = 0 LIMIT 1 ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `catmate...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(910): Kohana_ORM->_load_result(false)
#3 /var/www/inventario/application/classes/model/catmateriales.php(9): Kohana_ORM->find()
#4 /var/www/inventario/application/classes/controller/backend/materiales.php(34): Model_Catmateriales->agregar_editar(Object(Validation), 0)
#5 [internal function]: Controller_Backend_Materiales->action_agregar()
#6 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#7 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/inventario/index.php(109): Kohana_Request->execute()
#10 {main}
2014-07-08 13:16:54 --- ERROR: ErrorException [ 8 ]: Undefined index: dsc_descripcion ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-07-08 13:16:54 --- STRACE: ErrorException [ 8 ]: Undefined index: dsc_descripcion ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/model/catmateriales.php(12): Kohana_Validation->offsetGet('dsc_descripcion')
#2 /var/www/inventario/application/classes/controller/backend/materiales.php(34): Model_Catmateriales->agregar_editar(Object(Validation), 0)
#3 [internal function]: Controller_Backend_Materiales->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 13:17:11 --- ERROR: ErrorException [ 8 ]: Undefined index: dsc_descripcion ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-07-08 13:17:11 --- STRACE: ErrorException [ 8 ]: Undefined index: dsc_descripcion ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/model/catmateriales.php(12): Kohana_Validation->offsetGet('dsc_descripcion')
#2 /var/www/inventario/application/classes/controller/backend/materiales.php(34): Model_Catmateriales->agregar_editar(Object(Validation), 0)
#3 [internal function]: Controller_Backend_Materiales->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-08 13:28:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: materiales ~ APPPATH/views/backend/materiales/view_materiales.php [ 37 ]
2014-07-08 13:28:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: materiales ~ APPPATH/views/backend/materiales/view_materiales.php [ 37 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_materiales.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 37, Array)
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
2014-07-08 13:28:51 --- ERROR: Kohana_Exception [ 0 ]: The familia property does not exist in the Model_Catmateriales class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2014-07-08 13:28:51 --- STRACE: Kohana_Exception [ 0 ]: The familia property does not exist in the Model_Catmateriales class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_materiales.php(41): Kohana_ORM->__get('familia')
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
2014-07-08 13:32:09 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catfamilias.id_catcatfamilia' in 'on clause' ( SELECT 
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.dsc_nombre as familia,
				catunidades.dsc_nombre as unidad,
				catproveedores.dsc_nombre as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catcatfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-08 13:32:09 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catfamilias.id_catcatfamilia' in 'on clause' ( SELECT 
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.dsc_nombre as familia,
				catunidades.dsc_nombre as unidad,
				catproveedores.dsc_nombre as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catcatfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ?????cat...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catmateriales.php(38): ORM->selectDB('SELECT ?????cat...')
#3 /var/www/inventario/application/classes/controller/backend/materiales.php(21): Model_Catmateriales->select_registros_activos()
#4 [internal function]: Controller_Backend_Materiales->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-08 13:32:18 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id_catmaterial ~ APPPATH/views/backend/materiales/view_materiales.php [ 45 ]
2014-07-08 13:32:18 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id_catmaterial ~ APPPATH/views/backend/materiales/view_materiales.php [ 45 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_materiales.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 45, Array)
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
2014-07-08 13:32:33 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id_catproveedor ~ APPPATH/views/backend/materiales/view_materiales.php [ 50 ]
2014-07-08 13:32:33 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id_catproveedor ~ APPPATH/views/backend/materiales/view_materiales.php [ 50 ]
--
#0 /var/www/inventario/application/views/backend/materiales/view_materiales.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 50, Array)
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
2014-07-08 13:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:33:13 --- ERROR: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = ca' at line 8 ( SELECT 
 				catmateriales.id_catmaterial,
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.dsc_nombre as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_nombre,'asdsd' as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-08 13:33:13 --- STRACE: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = ca' at line 8 ( SELECT 
 				catmateriales.id_catmaterial,
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.dsc_nombre as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_nombre,'asdsd' as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ? ????ca...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catmateriales.php(39): ORM->selectDB('SELECT ? ????ca...')
#3 /var/www/inventario/application/classes/controller/backend/materiales.php(21): Model_Catmateriales->select_registros_activos()
#4 [internal function]: Controller_Backend_Materiales->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-08 13:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 13:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 13:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-08 14:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-08 14:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}