<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-07 15:04:35 --- ERROR: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-11-07 15:04:35 --- STRACE: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT ems_empl...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(30): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(130): Model_Ems->get_employees()
#4 [internal function]: Controller_Pms->action_personnel_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}