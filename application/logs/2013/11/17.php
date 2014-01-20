<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-17 04:59:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Webstructure::tms_admin_navigation() ~ APPPATH\classes\controller\Tms.php [ 40 ]
2013-11-17 04:59:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Webstructure::tms_admin_navigation() ~ APPPATH\classes\controller\Tms.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-17 05:18:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Webstructure.php [ 145 ]
2013-11-17 05:18:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Webstructure.php [ 145 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\Webstructure.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 145, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(41): Webstructure->add_delivery_sched_form()
#2 [internal function]: Controller_Tms->action_admin_dashboard()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-17 06:16:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH\classes\controller\Tms.php [ 71 ]
2013-11-17 06:16:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH\classes\controller\Tms.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-17 06:17:18 --- ERROR: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH\classes\controller\Tms.php [ 71 ]
2013-11-17 06:17:18 --- STRACE: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH\classes\controller\Tms.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-17 06:18:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\Tms.php [ 76 ]
2013-11-17 06:18:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\Tms.php [ 76 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 76, Array)
#1 [internal function]: Controller_Tms->action_add_deliver_schedule()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-17 06:18:18 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 [ INSERT INTO tms_tms_delivers VALUES(
				null,'Sony Inc.','11/19/2013 11:28',
				NOW(),'sony products',) ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-17 06:18:18 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 [ INSERT INTO tms_tms_delivers VALUES(
				null,'Sony Inc.','11/19/2013 11:28',
				NOW(),'sony products',) ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(76): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-17 06:18:48 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.tms_tms_delivers' doesn't exist [ INSERT INTO tms_tms_delivers VALUES(
				null,'Sony Inc.','11/19/2013 11:28',
				NOW(),'sony products') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-17 06:18:48 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.tms_tms_delivers' doesn't exist [ INSERT INTO tms_tms_delivers VALUES(
				null,'Sony Inc.','11/19/2013 11:28',
				NOW(),'sony products') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO tms...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Tms.php(6): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(76): Model_Tms->addDeliverSched(Array)
#3 [internal function]: Controller_Tms->action_add_deliver_schedule()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-17 06:28:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\Tms.php [ 67 ]
2013-11-17 06:28:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\Tms.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-17 06:33:16 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\TMS\clerk\dashboard.php [ 32 ]
2013-11-17 06:33:16 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\TMS\clerk\dashboard.php [ 32 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(67): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-17 06:33:30 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 32 ]
2013-11-17 06:33:30 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 32 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(67): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-17 06:39:43 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\TMS\clerk\dashboard.php [ 37 ]
2013-11-17 06:39:43 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\TMS\clerk\dashboard.php [ 37 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(67): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-17 06:50:43 --- ERROR: ErrorException [ 8 ]: Undefined index: delivery_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 47 ]
2013-11-17 06:50:43 --- STRACE: ErrorException [ 8 ]: Undefined index: delivery_id ~ APPPATH\views\TMS\clerk\dashboard.php [ 47 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(67): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}