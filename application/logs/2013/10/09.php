<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 00:45:19 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'crm_accounts.user_lvl' in 'on clause' [ SELECT * FROM ems_accounts JOIN user_levels ON crm_accounts.`user_lvl` = user_levels.`user_lvl`WHERE username = 'admin-ems.admin' AND user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-09 00:45:19 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'crm_accounts.user_lvl' in 'on clause' [ SELECT * FROM ems_accounts JOIN user_levels ON crm_accounts.`user_lvl` = user_levels.`user_lvl`WHERE username = 'admin-ems.admin' AND user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM e...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Account.php(8): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(77): Model_Account->get_account_info(Array)
#3 [internal function]: Controller_Login->action_validate()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-09 01:45:23 --- ERROR: ErrorException [ 8 ]: Undefined index: webstructure ~ APPPATH\classes\controller\Ems.php [ 110 ]
2013-10-09 01:45:23 --- STRACE: ErrorException [ 8 ]: Undefined index: webstructure ~ APPPATH\classes\controller\Ems.php [ 110 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 110, Array)
#1 [internal function]: Controller_Ems->action_hr_dashboard()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-09 01:46:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ems::$titlePage ~ APPPATH\classes\controller\Ems.php [ 114 ]
2013-10-09 01:46:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ems::$titlePage ~ APPPATH\classes\controller\Ems.php [ 114 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(114): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 114, Array)
#1 [internal function]: Controller_Ems->action_hr_dashboard()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-09 01:46:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: add_sales_assistant_form ~ APPPATH\views\CRM\admin\dashboard.php [ 1 ]
2013-10-09 01:46:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: add_sales_assistant_form ~ APPPATH\views\CRM\admin\dashboard.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(118): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-09 02:28:00 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php on line 119 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
2013-10-09 02:28:00 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php on line 119 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Account.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(119): Model_Account->get_account_name('globio.santos@y...')
#2 [internal function]: Controller_Ems->action_hr_dashboard()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-09 02:31:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 47 ]
2013-10-09 02:31:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-09 02:31:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 47 ]
2013-10-09 02:31:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}