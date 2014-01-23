<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-21 20:44:02 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
				null,'','2014-01-21 20:44:02',
				NOW(),'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-21 20:44:02 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
				null,'','2014-01-21 20:44:02',
				NOW(),'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(76): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-21 20:44:22 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
				null,'','2014-01-21 20:44:22',
				NOW(),'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-21 20:44:22 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO tms_delivers VALUES(
				null,'','2014-01-21 20:44:22',
				NOW(),'') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(76): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-21 22:29:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: available_driver ~ APPPATH\views\TMS\clerk\dashboard.php [ 20 ]
2014-01-21 22:29:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: available_driver ~ APPPATH\views\TMS\clerk\dashboard.php [ 20 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\TMS\clerk\dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Tms.php(67): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}