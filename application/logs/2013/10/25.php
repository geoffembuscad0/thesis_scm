<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 01:32:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\EMS\HR\dashboard.php [ 168 ]
2013-10-25 01:32:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\EMS\HR\dashboard.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-25 01:32:56 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1065 Query was empty [  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-25 01:32:56 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1065 Query was empty [  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, '', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(167): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(126): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Ems->action_hr_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-25 01:33:20 --- ERROR: ErrorException [ 2 ]: strtolower() expects parameter 1 to be string, array given ~ APPPATH\views\EMS\HR\dashboard.php [ 168 ]
2013-10-25 01:33:20 --- STRACE: ErrorException [ 2 ]: strtolower() expects parameter 1 to be string, array given ~ APPPATH\views\EMS\HR\dashboard.php [ 168 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strtolower() ex...', 'C:\xampp\htdocs...', 168, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(168): strtolower(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(126): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Ems->action_hr_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}