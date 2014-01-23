<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-22 00:00:11 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'','2014-01-22 12:00:00',
			NOW(),'delivery items', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-22 00:00:11 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'','2014-01-22 12:00:00',
			NOW(),'delivery items', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(103): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 00:09:16 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-22 00:09:16 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(105): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 00:09:43 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-22 00:09:43 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(105): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 00:09:52 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-22 00:09:52 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
			null,'1','2014-01-23 14:00:00',
			NOW(),'delivery', 0,'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(105): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 01:03:54 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 132 ]
2014-01-22 01:03:54 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 132 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(132): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 132, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(68): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 01:05:47 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 149 ]
2014-01-22 01:05:47 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 149 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(149): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 149, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(68): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 01:06:03 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 180 ]
2014-01-22 01:06:03 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\clerk\dashboard.php [ 180 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(180): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 180, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(68): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 01:18:04 --- ERROR: ErrorException [ 8 ]: Undefined index: delivery_no ~ APPPATH\views\TMS\clerk\dashboard.php [ 220 ]
2014-01-22 01:18:04 --- STRACE: ErrorException [ 8 ]: Undefined index: delivery_no ~ APPPATH\views\TMS\clerk\dashboard.php [ 220 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(220): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 220, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(68): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 01:18:21 --- ERROR: ErrorException [ 8 ]: Undefined index: delivery_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 220 ]
2014-01-22 01:18:21 --- STRACE: ErrorException [ 8 ]: Undefined index: delivery_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 220 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(220): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 220, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(68): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 03:01:01 --- ERROR: View_Exception [ 0 ]: The requested view CRM/login_form could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-01-22 03:01:01 --- STRACE: View_Exception [ 0 ]: The requested view CRM/login_form could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(137): Kohana_View->set_filename('CRM/login_form')
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(30): Kohana_View->__construct('CRM/login_form', NULL)
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Login.php(49): Kohana_View::factory('CRM/login_form')
#3 [internal function]: Controller_Login->action_index()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 03:35:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\employee_statistics.php [ 1 ]
2014-01-22 03:35:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\employee_statistics.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(319): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 03:36:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: verify_applicant_form ~ APPPATH\views\EMS\admin\employee_statistics.php [ 3 ]
2014-01-22 03:36:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: verify_applicant_form ~ APPPATH\views\EMS\admin\employee_statistics.php [ 3 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(322): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 03:36:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
2014-01-22 03:36:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(322): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:00:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
2014-01-22 04:00:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(322): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:01:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
2014-01-22 04:01:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\employee_statistics.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(322): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_employee_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:29:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_header ~ APPPATH\views\EMS\admin\employee_statistics.php [ 2 ]
2014-01-22 04:29:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_header ~ APPPATH\views\EMS\admin\employee_statistics.php [ 2 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\employee_statistics.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(328): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_print_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:29:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH\views\EMS\admin\print_statistics.php [ 5 ]
2014-01-22 04:29:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH\views\EMS\admin\print_statistics.php [ 5 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\print_statistics.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(328): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_print_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:29:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: statistics ~ APPPATH\views\EMS\admin\print_statistics.php [ 33 ]
2014-01-22 04:29:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: statistics ~ APPPATH\views\EMS\admin\print_statistics.php [ 33 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\print_statistics.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(328): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_print_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 04:32:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\EMS\admin\print_statistics.php [ 1 ]
2014-01-22 04:32:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\EMS\admin\print_statistics.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\print_statistics.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(331): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_print_statistics()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 08:37:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2014-01-22 08:37:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(174): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 08:56:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH\classes\controller\Pms.php [ 179 ]
2014-01-22 08:56:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH\classes\controller\Pms.php [ 179 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-22 09:15:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: employee_no ~ APPPATH\classes\model\Pms.php [ 7 ]
2014-01-22 09:15:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: employee_no ~ APPPATH\classes\model\Pms.php [ 7 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Pms.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(193): Model_Pms->get_employee_logs('0af772')
#2 [internal function]: Controller_Pms->action_personnel_dashboard()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-22 09:16:34 --- ERROR: ErrorException [ 8 ]: Undefined index: relation_stat ~ SYSPATH\classes\controller.php [ 31 ]
2014-01-22 09:16:34 --- STRACE: ErrorException [ 8 ]: Undefined index: relation_stat ~ SYSPATH\classes\controller.php [ 31 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\controller.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(222): Controller->get_array_element(Array, 'relation_stat')
#2 [internal function]: Controller_Pms->action_print_payslip()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-22 09:18:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: data_deductions ~ APPPATH\views\PMS\timekeeper\payslip.php [ 53 ]
2014-01-22 09:18:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: data_deductions ~ APPPATH\views\PMS\timekeeper\payslip.php [ 53 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\PMS\timekeeper\payslip.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 53, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(279): View_PDF->render()
#5 [internal function]: Controller_Pms->action_print_payslip()
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#10 {main}
2014-01-22 10:30:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 42 ]
2014-01-22 10:30:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-22 10:30:26 --- ERROR: ErrorException [ 8 ]: Undefined index: timein ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 42 ]
2014-01-22 10:30:26 --- STRACE: ErrorException [ 8 ]: Undefined index: timein ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 42 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\PMS\timekeeper\print_logs.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(218): View_PDF->render()
#5 [internal function]: Controller_Pms->action_print_logs()
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#10 {main}
2014-01-22 10:41:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: leaves ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 34 ]
2014-01-22 10:41:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: leaves ~ APPPATH\views\PMS\timekeeper\print_logs.php [ 34 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\PMS\timekeeper\print_logs.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 34, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(218): View_PDF->render()
#5 [internal function]: Controller_Pms->action_print_logs()
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#10 {main}
2014-01-22 11:39:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2014-01-22 11:39:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(174): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-22 14:08:45 --- ERROR: ErrorException [ 8 ]: Undefined index: search_query ~ APPPATH\classes\model\Ems.php [ 44 ]
2014-01-22 14:08:45 --- STRACE: ErrorException [ 8 ]: Undefined index: search_query ~ APPPATH\classes\model\Ems.php [ 44 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 44, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(207): Model_Ems->get_employees()
#2 [internal function]: Controller_Pms->action_print_ledger()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-22 14:12:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 233 ]
2014-01-22 14:12:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 233 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(233): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 233, Array)
#1 [internal function]: Controller_Pms->action_print_ledger()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-22 14:12:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 233 ]
2014-01-22 14:12:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Pms.php [ 233 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(233): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 233, Array)
#1 [internal function]: Controller_Pms->action_print_ledger()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-22 14:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index: sss ~ APPPATH\classes\controller\Pms.php [ 233 ]
2014-01-22 14:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index: sss ~ APPPATH\classes\controller\Pms.php [ 233 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(233): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 233, Array)
#1 [internal function]: Controller_Pms->action_print_ledger()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-22 14:17:08 --- ERROR: ErrorException [ 8 ]: Undefined index: deduction ~ APPPATH\classes\controller\Pms.php [ 238 ]
2014-01-22 14:17:08 --- STRACE: ErrorException [ 8 ]: Undefined index: deduction ~ APPPATH\classes\controller\Pms.php [ 238 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(238): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 238, Array)
#1 [internal function]: Controller_Pms->action_print_ledger()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-22 14:25:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: employee_info ~ APPPATH\classes\controller\Pms.php [ 245 ]
2014-01-22 14:25:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: employee_info ~ APPPATH\classes\controller\Pms.php [ 245 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(245): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 245, Array)
#1 [internal function]: Controller_Pms->action_print_ledger()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-22 14:26:29 --- ERROR: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
)
 HTML : ...Delivery ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
2014-01-22 14:26:29 --- STRACE: HTML2PDF_exception [ 4 ]: ERRO n°4 : Código HTML não válido, as tags não estão fechadas na ordem correta.Estado : Array
(
    [0] => page
    [1] => table
    [2] => tr
)
 HTML : ...Delivery ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 119 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_scm\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(248): View_PDF->render()
#3 [internal function]: Controller_Pms->action_print_ledger()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-22 14:26:46 --- ERROR: HTML2PDF_exception [ 5 ]: ERRO n°5 : Código HTML não válido, todas as tags devem ser fechadas.Estado : Array
(
    [0] => page
)
 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 218 ]
2014-01-22 14:26:46 --- STRACE: HTML2PDF_exception [ 5 ]: ERRO n°5 : Código HTML não válido, todas as tags devem ser fechadas.Estado : Array
(
    [0] => page
)
 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 218 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_scm\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type='te...')
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(248): View_PDF->render()
#3 [internal function]: Controller_Pms->action_print_ledger()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}