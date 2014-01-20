<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 20:31:26 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\Ems.php [ 9 ]
2013-10-03 20:31:26 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\Ems.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(9): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Ems->action_index()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-03 22:10:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
2013-10-03 22:10:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(88): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 88, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(25): Controller_Ems->validate_file_resume(Array)
#2 [internal function]: Controller_Ems->action_validate_applicant()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-03 22:12:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
2013-10-03 22:12:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(88): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 88, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(25): Controller_Ems->validate_file_resume(Array)
#2 [internal function]: Controller_Ems->action_validate_applicant()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-03 22:12:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
2013-10-03 22:12:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Ems.php [ 88 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(88): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 88, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(25): Controller_Ems->validate_file_resume(Array)
#2 [internal function]: Controller_Ems->action_validate_applicant()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-03 22:16:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: _FILES ~ APPPATH\classes\controller\Ems.php [ 15 ]
2013-10-03 22:16:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: _FILES ~ APPPATH\classes\controller\Ems.php [ 15 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-03 23:02:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Ems::save_applicant() ~ APPPATH\classes\controller\Ems.php [ 45 ]
2013-10-03 23:02:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Ems::save_applicant() ~ APPPATH\classes\controller\Ems.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-03 23:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-03 23:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}