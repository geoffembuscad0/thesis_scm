<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-14 01:10:56 --- ERROR: ErrorException [ 8 ]: Undefined index: type ~ APPPATH\views\EMS\HR\dashboard.php [ 85 ]
2013-10-14 01:10:56 --- STRACE: ErrorException [ 8 ]: Undefined index: type ~ APPPATH\views\EMS\HR\dashboard.php [ 85 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(85): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(126): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-14 01:11:30 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1051 Unknown table 'ems_employee_type' [ SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-14 01:11:30 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1051 Unknown table 'ems_employee_type' [ SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT ems_empl...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(26): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(121): Model_Ems->get_employees()
#3 [internal function]: Controller_Ems->action_hr_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-14 02:11:39 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\EMS\HR\dashboard.php [ 31 ]
2013-10-14 02:11:39 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\EMS\HR\dashboard.php [ 31 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(126): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}