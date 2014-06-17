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