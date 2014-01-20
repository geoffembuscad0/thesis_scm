<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-30 01:26:37 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: msg ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-09-30 01:26:37 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: msg ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(17): Kohana_View->__get('msg')
#1 [internal function]: Controller_Careers->action_index()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-30 01:27:39 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: msg ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-09-30 01:27:39 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: msg ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(17): Kohana_View->__get('msg')
#1 [internal function]: Controller_Careers->action_index()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-30 01:30:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'applicant_msg' (T_STRING) ~ APPPATH\views\Website\careers.php [ 64 ]
2013-09-30 01:30:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'applicant_msg' (T_STRING) ~ APPPATH\views\Website\careers.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}