<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-25 01:26:37 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.pms_deduction_sss' doesn't exist [ SELECT * FROM pms_deduction_sss WHERE from_range = 9804.9 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2014-01-25 01:26:37 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.pms_deduction_sss' doesn't exist [ SELECT * FROM pms_deduction_sss WHERE from_range = 9804.9 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM p...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Pms.php(42): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(303): Model_Pms->get_sss_deduction(9804.9)
#3 [internal function]: Controller_Pms->action_print_payslip()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}