<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-31 00:37:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Ems::getEmployees() ~ APPPATH\classes\controller\Pms.php [ 65 ]
2013-10-31 00:37:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Ems::getEmployees() ~ APPPATH\classes\controller\Pms.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-31 01:10:37 --- ERROR: ErrorException [ 8 ]: Undefined index: hours_worked ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-10-31 01:10:37 --- STRACE: ErrorException [ 8 ]: Undefined index: hours_worked ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-31 01:17:03 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\Pms.php [ 28 ]
2013-10-31 01:17:03 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\Pms.php [ 28 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(28): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(54): Controller_Pms->get_employee_logs('h2JWvu')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-31 01:17:48 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-10-31 01:17:48 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-31 01:18:24 --- ERROR: ErrorException [ 2 ]: array_push() expects at least 2 parameters, 1 given ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-10-31 01:18:24 --- STRACE: ErrorException [ 2 ]: array_push() expects at least 2 parameters, 1 given ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): array_push(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#3 [internal function]: Controller_Pms->action_test_script()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-31 01:23:43 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-10-31 01:23:43 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): array_push(NULL, '890')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#3 [internal function]: Controller_Pms->action_test_script()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-31 01:31:30 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-10-31 01:31:30 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): array_push(NULL, 'meow')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#3 [internal function]: Controller_Pms->action_test_script()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-31 01:32:05 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 30 ]
2013-10-31 01:32:05 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\Pms.php [ 30 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(30): array_push(NULL, 'meow')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(55): Controller_Pms->get_employee_logs('h2JWvu')
#3 [internal function]: Controller_Pms->action_test_script()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-31 01:42:53 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_array_element() ~ APPPATH\classes\controller\Pms.php [ 32 ]
2013-10-31 01:42:53 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_array_element() ~ APPPATH\classes\controller\Pms.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-31 01:43:23 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_array_element() ~ APPPATH\classes\controller\Pms.php [ 32 ]
2013-10-31 01:43:23 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_array_element() ~ APPPATH\classes\controller\Pms.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}