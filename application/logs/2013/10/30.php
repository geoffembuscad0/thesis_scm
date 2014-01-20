<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-30 01:09:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Login.php [ 52 ]
2013-10-30 01:09:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Login.php [ 52 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(52): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}