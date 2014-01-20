<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-01 01:24:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\Pms.php [ 42 ]
2013-11-01 01:24:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\Pms.php [ 42 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(42): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(66): Controller_Pms->get_values_for_keys(Array, 'hours_worked')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-01 01:25:30 --- ERROR: ErrorException [ 8 ]: Undefined index: hours_worked ~ APPPATH\classes\controller\Pms.php [ 43 ]
2013-11-01 01:25:30 --- STRACE: ErrorException [ 8 ]: Undefined index: hours_worked ~ APPPATH\classes\controller\Pms.php [ 43 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(66): Controller_Pms->get_values_for_keys(Array, Array)
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}