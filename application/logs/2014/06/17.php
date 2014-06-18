<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 02:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 02:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-17 03:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/login/myCloseButton.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 03:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/login/myCloseButton.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 03:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/load/view/backend_recovery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 03:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/load/view/backend_recovery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-17 03:57:19 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/controller/backend/login.php [ 68 ]
2014-06-17 03:57:19 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/controller/backend/login.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 03:59:34 --- ERROR: View_Exception [ 0 ]: The requested view mailings/recovery could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 03:59:34 --- STRACE: View_Exception [ 0 ]: The requested view mailings/recovery could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('mailings/recove...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('mailings/recove...', NULL)
#2 /var/www/inventario/application/classes/controller/backend/login.php(134): Kohana_View::factory('mailings/recove...')
#3 /var/www/inventario/application/classes/controller/backend/login.php(69): Controller_Backend_Login->parse_html(Array, 'recovery')
#4 [internal function]: Controller_Backend_Login->action_recovery()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-17 04:00:11 --- ERROR: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-06-17 04:00:11 --- STRACE: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/controller/backend/login.php(70): Kohana_Validation->offsetGet('usuarios')
#2 [internal function]: Controller_Backend_Login->action_recovery()
#3 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#4 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/inventario/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-17 04:00:49 --- ERROR: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-06-17 04:00:49 --- STRACE: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/controller/backend/login.php(70): Kohana_Validation->offsetGet('usuarios')
#2 [internal function]: Controller_Backend_Login->action_recovery()
#3 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#4 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/inventario/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-17 04:04:29 --- ERROR: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2014-06-17 04:04:29 --- STRACE: ErrorException [ 8 ]: Undefined index: usuarios ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/inventario/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/invent...', 102, Array)
#1 /var/www/inventario/application/classes/controller/backend/login.php(70): Kohana_Validation->offsetGet('usuarios')
#2 [internal function]: Controller_Backend_Login->action_recovery()
#3 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#4 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/inventario/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-17 10:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 10:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-17 10:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-17 10:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-17 11:05:16 --- ERROR: View_Exception [ 0 ]: The requested view backend/structure/view_template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:05:16 --- STRACE: View_Exception [ 0 ]: The requested view backend/structure/view_template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/structu...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/structu...', NULL)
#2 /var/www/inventario/application/classes/controller/core/backend.php(35): Kohana_View::factory('backend/structu...')
#3 /var/www/inventario/application/classes/controller/backend/login.php(7): Controller_Core_Backend->before()
#4 [internal function]: Controller_Backend_Login->before()
#5 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#6 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/inventario/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/view-form ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/ViewForm ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/load/view/backend/ViewForm ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load/view/backend/ViewForm ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-17 11:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: load/view/backend/ViewForm ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-17 11:11:11 --- ERROR: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:11:11 --- STRACE: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('bakend/ViewForm')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('bakend/ViewForm', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('bakend/ViewForm')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:11:59 --- ERROR: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:11:59 --- STRACE: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('Backend/FormVie...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('Backend/FormVie...', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('Backend/FormVie...')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:11:59 --- ERROR: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:11:59 --- STRACE: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('Backend/FormVie...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('Backend/FormVie...', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('Backend/FormVie...')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:12:00 --- ERROR: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:12:00 --- STRACE: View_Exception [ 0 ]: The requested view Backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('Backend/FormVie...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('Backend/FormVie...', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('Backend/FormVie...')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:12:05 --- ERROR: View_Exception [ 0 ]: The requested view backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:12:05 --- STRACE: View_Exception [ 0 ]: The requested view backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/FormVie...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/FormVie...', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('backend/FormVie...')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:12:05 --- ERROR: View_Exception [ 0 ]: The requested view backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:12:05 --- STRACE: View_Exception [ 0 ]: The requested view backend/FormView could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/FormVie...')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/FormVie...', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('backend/FormVie...')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:12:32 --- ERROR: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:12:32 --- STRACE: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('bakend/ViewForm')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('bakend/ViewForm', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('bakend/ViewForm')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:12:33 --- ERROR: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-17 11:12:33 --- STRACE: View_Exception [ 0 ]: The requested view bakend/ViewForm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/inventario/system/classes/kohana/view.php(137): Kohana_View->set_filename('bakend/ViewForm')
#1 /var/www/inventario/system/classes/kohana/view.php(30): Kohana_View->__construct('bakend/ViewForm', NULL)
#2 /var/www/inventario/application/classes/controller/load.php(9): Kohana_View::factory('bakend/ViewForm')
#3 [internal function]: Controller_Load->action_view()
#4 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#5 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/inventario/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-17 11:15:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: ruta ~ APPPATH/classes/controller/load.php [ 8 ]
2014-06-17 11:15:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: ruta ~ APPPATH/classes/controller/load.php [ 8 ]
--
#0 /var/www/inventario/application/classes/controller/load.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 8, Array)
#1 [internal function]: Controller_Load->action_view()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Load))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}