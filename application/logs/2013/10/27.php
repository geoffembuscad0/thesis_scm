<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-27 01:24:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\Pms.php [ 13 ]
2013-10-27 01:24:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\Pms.php [ 13 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 13, Array)
#1 [internal function]: Controller_Pms->action_index()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}