<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-18 01:35:28 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1987-10-06')' at line 7 [ INSERT INTO ems_employee VALUES(
				'0jbMXo',
				'Rose',
				'Santos',
				'Cruz',
				'00001',
				'1,
				now(), '1987-10-06'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-18 01:35:28 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1987-10-06')' at line 7 [ INSERT INTO ems_employee VALUES(
				'0jbMXo',
				'Rose',
				'Santos',
				'Cruz',
				'00001',
				'1,
				now(), '1987-10-06'); ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO ems...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(59): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(219): Model_Ems->add_employee(Array)
#3 [internal function]: Controller_Ems->action_validate_hiree()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}