<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-11 11:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-11 11:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-11 11:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-11 11:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-11 11:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thesis_teresamarble/index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-11 11:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thesis_teresamarble/index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}