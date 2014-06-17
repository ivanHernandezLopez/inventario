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