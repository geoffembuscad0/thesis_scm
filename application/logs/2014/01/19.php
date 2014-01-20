<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-19 17:15:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_header ~ APPPATH\views\EMS\employee_module.php [ 2 ]
2014-01-19 17:15:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_header ~ APPPATH\views\EMS\employee_module.php [ 2 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\employee_module.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(231): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_home()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-19 17:16:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\employee_module.php [ 8 ]
2014-01-19 17:16:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\employee_module.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\employee_module.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(232): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_home()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-19 18:31:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$sql' (T_VARIABLE) ~ APPPATH\classes\model\Ems.php [ 9 ]
2014-01-19 18:31:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$sql' (T_VARIABLE) ~ APPPATH\classes\model\Ems.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-19 18:41:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\classes\controller\Login.php [ 172 ]
2014-01-19 18:41:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\classes\controller\Login.php [ 172 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Login.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 172, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-19 18:46:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 31 ]
2014-01-19 18:46:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH\classes\controller.php [ 31 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\controller.php(31): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Login.php(68): Controller->get_array_element(Array, 1)
#2 [internal function]: Controller_Login->action_validate()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-19 18:54:42 --- ERROR: ErrorException [ 8 ]: Undefined index: employee_id ~ APPPATH\classes\controller\Login.php [ 175 ]
2014-01-19 18:54:42 --- STRACE: ErrorException [ 8 ]: Undefined index: employee_id ~ APPPATH\classes\controller\Login.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Login.php(175): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 175, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-19 18:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 18:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:05:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\controller\Ems.php [ 233 ]
2014-01-19 19:05:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\controller\Ems.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-19 19:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 19:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/submit_leave was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 19:14:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Ems.php [ 233 ]
2014-01-19 19:14:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Ems.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-19 19:42:20 --- ERROR: ErrorException [ 8 ]: Undefined index: r_leaves ~ APPPATH\views\EMS\employee_module.php [ 9 ]
2014-01-19 19:42:20 --- STRACE: ErrorException [ 8 ]: Undefined index: r_leaves ~ APPPATH\views\EMS\employee_module.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\employee_module.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(241): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_home()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-19 21:11:15 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/21/2014','4','meow','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-19 21:11:15 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/21/2014','4','meow','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'insert into ems...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(116): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(236): Model_Ems->send_leave(Array)
#3 [internal function]: Controller_Ems->action_submit_leave()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-19 21:11:45 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/21/2014','4','meow','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-19 21:11:45 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/21/2014','4','meow','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'insert into ems...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(116): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(236): Model_Ems->send_leave(Array)
#3 [internal function]: Controller_Ems->action_submit_leave()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-19 21:14:33 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'r_leave' in 'field list' [ update ems_employee_leave SET r_leave = r_leave - 1 WHERE employee_id = '114568' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-19 21:14:33 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'r_leave' in 'field list' [ update ems_employee_leave SET r_leave = r_leave - 1 WHERE employee_id = '114568' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(3, 'update ems_empl...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(116): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(236): Model_Ems->send_leave(Array)
#3 [internal function]: Controller_Ems->action_submit_leave()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-19 21:15:16 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/22/2014','4','yeah','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-19 21:15:16 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_leave' doesn't exist [ insert into ems_leave values(null,'114568','medical','01/22/2014','4','yeah','0','pasig city'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'insert into ems...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(117): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(236): Model_Ems->send_leave(Array)
#3 [internal function]: Controller_Ems->action_submit_leave()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-19 21:40:16 --- ERROR: View_Exception [ 0 ]: The requested view ems/emp_leaves could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-01-19 21:40:16 --- STRACE: View_Exception [ 0 ]: The requested view ems/emp_leaves could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(137): Kohana_View->set_filename('ems/emp_leaves')
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(30): Kohana_View->__construct('ems/emp_leaves', NULL)
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(253): Kohana_View::factory('ems/emp_leaves')
#3 [internal function]: Controller_Ems->action_emp_leaves()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-19 23:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 23:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 23:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2014-01-19 23:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-19 23:46:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\HR\add_applicant.php [ 11 ]
2014-01-19 23:46:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\HR\add_applicant.php [ 11 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\HR\add_applicant.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(112): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_employee_form()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}