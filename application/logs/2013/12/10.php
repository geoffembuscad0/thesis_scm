<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-10 01:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mis/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-10 01:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mis/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-10 01:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mis/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-10 01:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mis/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-10 02:02:46 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.tmc_accounts' doesn't exist [ SELECT * FROM tmc_accounts WHERE user_lvl = 1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-12-10 02:02:46 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.tmc_accounts' doesn't exist [ SELECT * FROM tmc_accounts WHERE user_lvl = 1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_scm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(22): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(29): Model_Account->get_admin_accounts(Array)
#3 [internal function]: Controller_Admin->action_mis_homepage()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-10 02:05:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Account::get_acc_module() ~ APPPATH\classes\model\Account.php [ 23 ]
2013-12-10 02:05:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Account::get_acc_module() ~ APPPATH\classes\model\Account.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-10 02:17:48 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\model\Account.php [ 26 ]
2013-12-10 02:17:48 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\model\Account.php [ 26 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(29): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}