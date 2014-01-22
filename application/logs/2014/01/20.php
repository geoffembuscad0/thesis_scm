<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-20 00:27:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\HR\add_applicant.php [ 11 ]
2014-01-20 00:27:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\HR\add_applicant.php [ 11 ]
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
2014-01-20 08:46:20 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO ems_employee VALUES(
				'lnbzs9',
				'hannah',
				'manzo',
				'cruz',
				'00001',
				'1',
				now(), '01/13/1988',now()); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-20 08:46:20 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO ems_employee VALUES(
				'lnbzs9',
				'hannah',
				'manzo',
				'cruz',
				'00001',
				'1',
				now(), '01/13/1988',now()); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO ems...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(171): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(445): Model_Ems->add_employee(Array)
#3 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(440): Controller_Ems->add_employee(Array)
#4 [internal function]: Controller_Ems->action_validate_hiree()
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#9 {main}
2014-01-20 08:46:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
2014-01-20 08:46:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(345): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-20 09:08:03 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO ems_employee VALUES(
				'qadt79',
				'Hannah',
				'Loreino',
				'Ousbourne',
				'00001',
				'1',
				now(), '1985-01-08',now()); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-20 09:08:03 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO ems_employee VALUES(
				'qadt79',
				'Hannah',
				'Loreino',
				'Ousbourne',
				'00001',
				'1',
				now(), '1985-01-08',now()); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO ems...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(171): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(444): Model_Ems->add_employee(Array)
#3 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(440): Controller_Ems->add_employee(Array)
#4 [internal function]: Controller_Ems->action_validate_hiree()
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#9 {main}
2014-01-20 09:09:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
2014-01-20 09:09:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(345): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-20 13:10:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: deliveryRecords ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
2014-01-20 13:10:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: deliveryRecords ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\admin\dashboard.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 112, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(47): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-20 13:10:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: deliveryRecord ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
2014-01-20 13:10:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: deliveryRecord ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\admin\dashboard.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 112, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(47): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-20 13:11:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: deliveryRecord ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
2014-01-20 13:11:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: deliveryRecord ~ APPPATH\views\TMS\admin\dashboard.php [ 112 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\admin\dashboard.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 112, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(47): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-20 13:14:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'false' (T_STRING) ~ APPPATH\views\TMS\admin\dashboard.php [ 115 ]
2014-01-20 13:14:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'false' (T_STRING) ~ APPPATH\views\TMS\admin\dashboard.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-20 14:11:33 --- ERROR: View_Exception [ 0 ]: The requested view PMS/timekeeper/edit_deduction could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-01-20 14:11:33 --- STRACE: View_Exception [ 0 ]: The requested view PMS/timekeeper/edit_deduction could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(137): Kohana_View->set_filename('PMS/timekeeper/...')
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(30): Kohana_View->__construct('PMS/timekeeper/...', NULL)
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(52): Kohana_View::factory('PMS/timekeeper/...')
#3 [internal function]: Controller_Pms->action_deduction_table()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-20 14:13:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Pms::get_deduction_table() ~ APPPATH\classes\controller\Pms.php [ 57 ]
2014-01-20 14:13:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Pms::get_deduction_table() ~ APPPATH\classes\controller\Pms.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-20 14:15:47 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'from_range' in 'order clause' [ SELECT * FROM pms_deduction ORDER BY from_range ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-20 14:15:47 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'from_range' in 'order clause' [ SELECT * FROM pms_deduction ORDER BY from_range ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM p...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Pms.php(7): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(57): Model_Pms->get_deduction_table()
#3 [internal function]: Controller_Pms->action_deduction_table()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-20 14:22:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2014-01-20 14:22:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
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