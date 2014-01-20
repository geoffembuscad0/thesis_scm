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