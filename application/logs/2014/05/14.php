<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-14 15:22:44 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
2014-05-14 15:22:44 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
--
#0 /var/www/inventario/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('submenuheader', NULL)
#1 /var/www/inventario/system/classes/kohana/request.php(202): Kohana_Cookie::get('submenuheader')
#2 /var/www/inventario/index.php(108): Kohana_Request::factory()
#3 {main}
2014-05-14 15:22:44 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
2014-05-14 15:22:44 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
--
#0 /var/www/inventario/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('submenuheader', NULL)
#1 /var/www/inventario/system/classes/kohana/request.php(202): Kohana_Cookie::get('submenuheader')
#2 /var/www/inventario/index.php(108): Kohana_Request::factory()
#3 {main}
2014-05-14 15:22:45 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
2014-05-14 15:22:45 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
--
#0 /var/www/inventario/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('submenuheader', NULL)
#1 /var/www/inventario/system/classes/kohana/request.php(202): Kohana_Cookie::get('submenuheader')
#2 /var/www/inventario/index.php(108): Kohana_Request::factory()
#3 {main}
2014-05-14 15:30:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/welcome.php [ 7 ]
2014-05-14 15:30:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:32:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/core/backend.php [ 20 ]
2014-05-14 15:32:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/core/backend.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:32:16 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:16 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:32:17 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:17 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:32:17 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:17 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:32:43 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:43 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:32:44 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:44 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:32:44 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-05-14 15:32:44 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(20): Kohana_View::factory('backend/structu...')
#3 [internal function]: Controller_Core_Backend->before()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-05-14 15:33:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Inicio::$auth ~ APPPATH/classes/controller/core/backend.php [ 25 ]
2014-05-14 15:33:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Inicio::$auth ~ APPPATH/classes/controller/core/backend.php [ 25 ]
--
#0 /var/www/inventario/application/classes/controller/core/backend.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 25, Array)
#1 [internal function]: Controller_Core_Backend->after()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Inicio))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 15:35:02 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:02 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:03 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:03 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:03 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:03 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:03 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:03 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:03 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:03 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:03 --- ERROR: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
2014-05-14 15:35:03 --- STRACE: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/controller/core/backend.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:35:53 --- ERROR: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/controller/core/backend.php [ 27 ]
2014-05-14 15:35:53 --- STRACE: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/controller/core/backend.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 15:37:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Inicio::$auth ~ APPPATH/classes/controller/core/backend.php [ 29 ]
2014-05-14 15:37:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Inicio::$auth ~ APPPATH/classes/controller/core/backend.php [ 29 ]
--
#0 /var/www/inventario/application/classes/controller/core/backend.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 29, Array)
#1 [internal function]: Controller_Core_Backend->before()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Inicio))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 15:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL administrator/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL administrator/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/inicio/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Backend/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-14 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Backend/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-14 15:49:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$autentificacion ~ APPPATH/classes/controller/core/backend.php [ 37 ]
2014-05-14 15:49:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$autentificacion ~ APPPATH/classes/controller/core/backend.php [ 37 ]
--
#0 /var/www/inventario/application/classes/controller/core/backend.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 37, Array)
#1 [internal function]: Controller_Core_Backend->after()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 15:49:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$autentificacion ~ APPPATH/classes/controller/core/backend.php [ 37 ]
2014-05-14 15:49:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$autentificacion ~ APPPATH/classes/controller/core/backend.php [ 37 ]
--
#0 /var/www/inventario/application/classes/controller/core/backend.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 37, Array)
#1 [internal function]: Controller_Core_Backend->after()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 15:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_login.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_login.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_login.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_login.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images_login/help.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/images/login_bg.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-left.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/img/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 15:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 15:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/img/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/images/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 16:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/images/0.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 16:12:47 --- ERROR: ErrorException [ 8 ]: Undefined index: remember ~ APPPATH/classes/controller/backend/login.php [ 23 ]
2014-05-14 16:12:47 --- STRACE: ErrorException [ 8 ]: Undefined index: remember ~ APPPATH/classes/controller/backend/login.php [ 23 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 23, Array)
#1 [internal function]: Controller_Backend_Login->action_index()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 16:14:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$auth ~ APPPATH/classes/controller/backend/login.php [ 33 ]
2014-05-14 16:14:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$auth ~ APPPATH/classes/controller/backend/login.php [ 33 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 33, Array)
#1 [internal function]: Controller_Backend_Login->action_index()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-05-14 16:14:09 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-14 16:14:09 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /var/www/inventario/modules/A1/classes/a1/driver/orm.php(13): Kohana_ORM::factory('user', Array)
#8 /var/www/inventario/modules/A1/classes/a1/core.php(281): A1_Driver_ORM->_load_user('user')
#9 /var/www/inventario/application/classes/controller/backend/login.php(33): A1_Core->login('user', 'password', false)
#10 [internal function]: Controller_Backend_Login->action_index()
#11 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#12 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/inventario/index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-14 16:14:15 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-14 16:14:15 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /var/www/inventario/modules/A1/classes/a1/driver/orm.php(13): Kohana_ORM::factory('user', Array)
#8 /var/www/inventario/modules/A1/classes/a1/core.php(281): A1_Driver_ORM->_load_user('user')
#9 /var/www/inventario/application/classes/controller/backend/login.php(33): A1_Core->login('user', 'password', false)
#10 [internal function]: Controller_Backend_Login->action_index()
#11 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#12 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/inventario/index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-14 16:32:21 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-14 16:32:21 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/inventario/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /var/www/inventario/modules/A1/classes/a1/driver/orm.php(13): Kohana_ORM::factory('user', Array)
#8 /var/www/inventario/modules/A1/classes/a1/core.php(281): A1_Driver_ORM->_load_user('user')
#9 /var/www/inventario/application/classes/controller/backend/login.php(32): A1_Core->login('user', 'password', true)
#10 [internal function]: Controller_Backend_Login->action_index()
#11 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#12 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/inventario/index.php(109): Kohana_Request->execute()
#15 {main}
2014-05-14 16:33:37 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2014-05-14 16:33:37 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 16:34:01 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.users' doesn't exist ( SHOW FULL COLUMNS FROM `users` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-05-14 16:34:01 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.users' doesn't exist ( SHOW FULL COLUMNS FROM `users` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('users')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#6 /var/www/inventario/modules/A1/classes/a1/driver/orm.php(13): Kohana_ORM::factory('user', Array)
#7 /var/www/inventario/modules/A1/classes/a1/core.php(281): A1_Driver_ORM->_load_user('user')
#8 /var/www/inventario/application/classes/controller/backend/login.php(32): A1_Core->login('user', 'password', true)
#9 [internal function]: Controller_Backend_Login->action_index()
#10 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#11 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/inventario/index.php(109): Kohana_Request->execute()
#14 {main}
2014-05-14 16:36:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2014-05-14 16:36:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 16:40:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2014-05-14 16:40:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 16:41:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2014-05-14 16:41:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 17:03:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2014-05-14 17:03:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catusuarios' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 17:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:55:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Catsocio' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2014-05-14 17:55:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Catsocio' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 17:56:23 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catusuarios' doesn't exist ( SHOW FULL COLUMNS FROM `catusuarios` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-05-14 17:56:23 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catusuarios' doesn't exist ( SHOW FULL COLUMNS FROM `catusuarios` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('catusuarios')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/inventario/application/classes/controller/backend/login.php(20): Kohana_ORM::factory('catusuarios')
#7 [internal function]: Controller_Backend_Login->action_index()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-05-14 17:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 17:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 17:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:00:32 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catusuarioses' doesn't exist ( SHOW FULL COLUMNS FROM `catusuarioses` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-05-14 18:00:32 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catusuarioses' doesn't exist ( SHOW FULL COLUMNS FROM `catusuarioses` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('catusuarioses')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/inventario/application/classes/controller/backend/login.php(20): Kohana_ORM::factory('catusuarios')
#7 [internal function]: Controller_Backend_Login->action_index()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-05-14 18:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:07:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH/A1/classes/a1/core.php [ 310 ]
2014-05-14 18:07:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH/A1/classes/a1/core.php [ 310 ]
--
#0 /var/www/inventario/modules/A1/classes/a1/core.php(310): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 310, Array)
#1 /var/www/inventario/application/classes/controller/backend/login.php(40): A1_Core->login('admin@inventari...', 'admin', false)
#2 [internal function]: Controller_Backend_Login->action_index()
#3 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#4 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/inventario/index.php(109): Kohana_Request->execute()
#7 {main}
2014-05-14 18:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:09:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:09:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:10:43 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 283 ]
2014-05-14 18:10:43 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 283 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 18:11:00 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 281 ]
2014-05-14 18:11:00 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 281 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 18:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:11:27 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry '0' for key 'PRIMARY' ( INSERT INTO `catusuarios` () VALUES () ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-05-14 18:11:27 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry '0' for key 'PRIMARY' ( INSERT INTO `catusuarios` () VALUES () ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ca...', false, Array)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/inventario/modules/A1/classes/a1/core.php(423): Kohana_ORM->save()
#4 /var/www/inventario/modules/A1/classes/a1/core.php(204): A1_Core->_save_user(Object(Model_Catusuarios))
#5 /var/www/inventario/modules/A1/classes/a1/core.php(317): A1_Core->failed_login(Object(Model_Catusuarios))
#6 /var/www/inventario/application/classes/controller/backend/login.php(40): A1_Core->login('admin@inventari...', 'admin', false)
#7 [internal function]: Controller_Backend_Login->action_index()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-05-14 18:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-14 18:17:43 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 331 ]
2014-05-14 18:17:43 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/A1/classes/a1/core.php [ 331 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-05-14 18:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-05-14 18:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}