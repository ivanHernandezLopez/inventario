<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 21:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-16 21:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 22:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/imagges/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/imagges/input-right.gif ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_form.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/backend/style_template.css ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/backend/niceforms.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 22:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 22:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 19:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/login/recovery} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 19:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/login/recovery} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}                                                                                                                                                                                                                                                                                                                                                                                                                                                             
2014-06-16 20:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/login/backend/login/recovery ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 20:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/login/backend/login/recovery ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 20:12:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Login::recovery() ~ APPPATH/classes/controller/backend/login.php [ 51 ]
2014-06-16 20:12:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Login::recovery() ~ APPPATH/classes/controller/backend/login.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 20:12:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Login::recovery() ~ APPPATH/classes/controller/backend/login.php [ 51 ]
2014-06-16 20:12:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Login::recovery() ~ APPPATH/classes/controller/backend/login.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 20:14:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: mensaje ~ APPPATH/classes/controller/backend/login.php [ 61 ]
2014-06-16 20:14:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: mensaje ~ APPPATH/classes/controller/backend/login.php [ 61 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 61, Array)
#1 [internal function]: Controller_Backend_Login->action_recovery()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 20:14:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: mensaje ~ APPPATH/classes/controller/backend/login.php [ 61 ]
2014-06-16 20:14:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: mensaje ~ APPPATH/classes/controller/backend/login.php [ 61 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 61, Array)
#1 [internal function]: Controller_Backend_Login->action_recovery()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 20:16:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/view_recovery.php [ 32 ]
2014-06-16 20:16:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/backend/view_recovery.php [ 32 ]
--
#0 /var/www/inventario/application/views/backend/view_recovery.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/invent...', 32, Array)
#1 /var/www/inventario/system/classes/kohana/view.php(61): include('/var/www/invent...')
#2 /var/www/inventario/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/invent...', Array)
#3 /var/www/inventario/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/inventario/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /var/www/inventario/application/classes/controller/core/system.php(54): Kohana_Response->body(Object(View))
#6 /var/www/inventario/application/classes/controller/core/backend.php(42): Controller_Core_System->after()
#7 [internal function]: Controller_Core_Backend->after()
#8 /var/www/inventario/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#9 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/inventario/index.php(109): Kohana_Request->execute()
#12 {main}
2014-06-16 20:37:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$usuarios ~ APPPATH/classes/controller/backend/login.php [ 57 ]
2014-06-16 20:37:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$usuarios ~ APPPATH/classes/controller/backend/login.php [ 57 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 57, Array)
#1 [internal function]: Controller_Backend_Login->action_recovery()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 20:38:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$usuarios ~ APPPATH/classes/controller/backend/login.php [ 61 ]
2014-06-16 20:38:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Login::$usuarios ~ APPPATH/classes/controller/backend/login.php [ 61 ]
--
#0 /var/www/inventario/application/classes/controller/backend/login.php(61): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/invent...', 61, Array)
#1 [internal function]: Controller_Backend_Login->action_recovery()
#2 /var/www/inventario/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Login))
#3 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/inventario/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 20:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backend/login/recovery} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 20:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backend/login/recovery} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/inventario/index.php(109): Kohana_Request->execute()
#3 {main}