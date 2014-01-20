<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-08 23:34:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL attendance_monitoring was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-01-08 23:34:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL attendance_monitoring was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}