<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-18 00:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 00:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 00:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 00:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 01:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 01:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 01:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 01:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 01:49:52 --- ERROR: ErrorException [ 8 ]: Undefined index: dsc_contacto0 ~ APPPATH/classes/controller/backend/proveedores.php [ 35 ]
2014-07-18 01:49:52 --- STRACE: ErrorException [ 8 ]: Undefined index: dsc_contacto0 ~ APPPATH/classes/controller/backend/proveedores.php [ 35 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 35, Array)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:50:21 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/backend/proveedores.php [ 35 ]
2014-07-18 01:50:21 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/backend/proveedores.php [ 35 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(35): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/invent...', 35, Array)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:57:21 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 01:57:21 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', Object(Model_Catproveedores))
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:58:33 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 01:58:33 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', 3)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:58:48 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 01:58:48 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', 4)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:59:34 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 01:59:34 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', 5)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 01:59:44 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 01:59:44 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('id_catproveedor', 6)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:00:12 --- ERROR: ErrorException [ 8 ]: Object of class Model_Catproveedores could not be converted to int ~ APPPATH/classes/controller/backend/proveedores.php [ 41 ]
2014-07-18 02:00:12 --- STRACE: ErrorException [ 8 ]: Object of class Model_Catproveedores could not be converted to int ~ APPPATH/classes/controller/backend/proveedores.php [ 41 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(41): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/invent...', 41, Array)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:00:25 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:00:25 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('id_catproveedor', Object(Model_Catproveedores))
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:00:37 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:00:37 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('id_catproveedor', 9)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:00:41 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:00:41 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('id_catproveedor', 10)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:01:04 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:01:04 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('as', 11)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:02:23 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:02:23 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('as', '12')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:03:09 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:03:09 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', 1)
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:03:23 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:03:23 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(45): Kohana_Validation->offsetSet('dsc_nombre', 'Contacto 1')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:04:16 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:04:16 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', '3')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:04:33 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:04:33 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('id_catproveedor', '4')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:05:36 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:05:36 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('dsc_nombre', 'n1')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:05:48 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:05:48 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('dsc_nombre', 'n1')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:05:59 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:05:59 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('dsc_nombre', 'n1')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:06:10 --- ERROR: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
2014-07-18 02:06:10 --- STRACE: Kohana_Exception [ 0 ]: Validation objects are read-only. ~ SYSPATH/classes/kohana/validation.php [ 65 ]
--
#0 /var/www/inventario/application/classes/controller/backend/proveedores.php(44): Kohana_Validation->offsetSet('dsc_nombre', 'n1')
#1 [internal function]: Controller_Backend_Proveedores->action_agregar()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-07-18 02:07:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/classes/controller/backend/proveedores.php [ 47 ]
2014-07-18 02:07:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/classes/controller/backend/proveedores.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-07-18 02:09:29 --- ERROR: Kohana_Exception [ 0 ]: The dsc_telefonos property does not exist in the Model_Detcontactos class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
2014-07-18 02:09:29 --- STRACE: Kohana_Exception [ 0 ]: The dsc_telefonos property does not exist in the Model_Detcontactos class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
--
#0 /var/www/inventario/application/classes/orm.php(18): Kohana_ORM->set('dsc_telefonos', '["T1","",""]')
#1 /var/www/inventario/application/classes/model/detcontactos.php(9): ORM->set(Array)
#2 /var/www/inventario/application/classes/controller/backend/proveedores.php(48): Model_Detcontactos->insert_contact(Array)
#3 [internal function]: Controller_Backend_Proveedores->action_agregar()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-07-18 02:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 02:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 02:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 02:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 02:15:10 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				catproveedores.dsc_contacto,
				catproveedores.dsc_domicilio,
				catproveedores.dsc_correo
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-18 02:15:10 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				catproveedores.dsc_contacto,
				catproveedores.dsc_domicilio,
				catproveedores.dsc_correo
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
2014-07-18 02:17:05 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				catproveedores.dsc_contacto,
				catproveedores.dsc_domicilio,
				catproveedores.dsc_correo
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-18 02:17:05 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				catproveedores.dsc_contacto,
				catproveedores.dsc_domicilio,
				catproveedores.dsc_correo
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
2014-07-18 02:18:30 --- ERROR: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catp' at line 9 ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				
				catproveedores.dsc_domicilio,
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-18 02:18:30 --- STRACE: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catp' at line 9 ( SELECT 
				catestados.dsc_nombre as id_catestado,
				detmunicipios.dsc_nombre as id_detmunicipio,
				catproveedores.id_catproveedor,
				catproveedores.dsc_razon_social,
				catproveedores.rfc_empresa,
				
				catproveedores.dsc_domicilio,
				FROM catproveedores	
				INNER JOIN catestados ON catestados.id_catestado = catproveedores.id_catestado
				INNER JOIN detmunicipios ON detmunicipios.id_detmunicipio = catproveedores.id_detmunicipio
				WHERE catproveedores.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ?????cat...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catproveedores.php(21): ORM->selectDB('SELECT ?????cat...')
#3 /var/www/inventario/application/classes/controller/backend/proveedores.php(22): Model_Catproveedores->select_registros_activos()
#4 [internal function]: Controller_Backend_Proveedores->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-18 02:18:35 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$num_proveedor ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 41 ]
2014-07-18 02:18:35 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$num_proveedor ~ APPPATH/views/backend/proveedores/view_proveedores.php [ 41 ]
--
#0 /var/www/inventario/application/views/backend/proveedores/view_proveedores.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 41, Array)
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
2014-07-18 02:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 02:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 10:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 10:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 10:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 10:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 13:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 13:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-07-18 13:52:32 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
 				catmateriales.id_catmaterial,
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.num_familia as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_contacto) as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-07-18 13:52:32 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'catproveedores.dsc_contacto' in 'field list' ( SELECT 
 				catmateriales.id_catmaterial,
				catmateriales.cod_producto,
				catmateriales.dsc_nombre,
				catfamilias.num_familia as familia,
				catunidades.dsc_nombre as unidad,
				CONCAT(catproveedores.dsc_contacto) as proveedor
				FROM catmateriales	
				INNER JOIN catfamilias ON catfamilias.id_catfamilia = catmateriales.id_catfamilia
				INNER JOIN catunidades ON catunidades.id_catunidad = catmateriales.id_catunidad
				INNER JOIN catproveedores ON catproveedores.id_catproveedor = catmateriales.id_catproveedor
				WHERE catmateriales.sta_baja = 'N' ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT ? ????ca...', true, Array)
#1 /var/www/inventario/application/classes/orm.php(32): Kohana_Database_Query->execute()
#2 /var/www/inventario/application/classes/model/catmateriales.php(39): ORM->selectDB('SELECT ? ????ca...')
#3 /var/www/inventario/application/classes/controller/backend/materiales.php(22): Model_Catmateriales->select_registros_activos()
#4 [internal function]: Controller_Backend_Materiales->action_index()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Materiales))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-07-18 13:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-07-18 13:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}