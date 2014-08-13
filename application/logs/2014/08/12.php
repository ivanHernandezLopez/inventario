<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-12 23:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-08-12 23:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/plugins/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /var/www/inventario/index.php(109): Kohana_Request->execute()
#1 {main}
2014-08-12 23:15:16 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catestados' doesn't exist ( SHOW FULL COLUMNS FROM `catestados` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
2014-08-12 23:15:16 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'free_inventario.catestados' doesn't exist ( SHOW FULL COLUMNS FROM `catestados` ) ~ MODPATH/mysqli/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /var/www/inventario/modules/mysqli/classes/kohana/database/mysqli.php(349): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/inventario/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQLi->list_columns('catestados')
#2 /var/www/inventario/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /var/www/inventario/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/inventario/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/inventario/application/classes/controller/backend/proveedores.php(12): Kohana_ORM->__construct()
#6 [internal function]: Controller_Backend_Proveedores->before()
#7 /var/www/inventario/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Proveedores))
#8 /var/www/inventario/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/inventario/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/inventario/index.php(109): Kohana_Request->execute()
#11 {main}