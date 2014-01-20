<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 00:55:35 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\Pms.php [ 52 ]
2013-11-04 00:55:35 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\Pms.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-04 02:51:27 --- ERROR: ErrorException [ 8 ]: Undefined index: employee_id ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 31 ]
2013-11-04 02:51:27 --- STRACE: ErrorException [ 8 ]: Undefined index: employee_id ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 31 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\dashboard.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(157): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_personnel_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-04 03:07:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\PMS\timekeeper\payslip.php [ 11 ]
2013-11-04 03:07:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\PMS\timekeeper\payslip.php [ 11 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\payslip.php(11): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(73): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_print_payslip()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-04 03:08:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 64 ]
2013-11-04 03:08:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 64 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(64): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 64, Array)
#1 [internal function]: Controller_Pms->action_print_payslip()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-04 03:08:37 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\PMS\timekeeper\payslip.php [ 11 ]
2013-11-04 03:08:37 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\PMS\timekeeper\payslip.php [ 11 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\payslip.php(11): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(73): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_print_payslip()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-04 13:48:07 --- ERROR: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-11-04 13:48:07 --- STRACE: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT ems_empl...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(30): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(161): Model_Ems->get_employees()
#4 [internal function]: Controller_Pms->action_personnel_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-11-04 14:45:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_hours_worked ~ APPPATH\classes\controller\Pms.php [ 86 ]
2013-11-04 14:45:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_hours_worked ~ APPPATH\classes\controller\Pms.php [ 86 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 86, Array)
#1 [internal function]: Controller_Pms->action_print_payslip()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-04 14:45:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_hours_worked ~ APPPATH\classes\controller\Pms.php [ 86 ]
2013-11-04 14:45:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_hours_worked ~ APPPATH\classes\controller\Pms.php [ 86 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 86, Array)
#1 [internal function]: Controller_Pms->action_print_payslip()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}