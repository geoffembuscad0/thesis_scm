<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-11 00:59:58 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'counted' ~ APPPATH\classes\controller\Login.php [ 106 ]
2013-11-11 00:59:58 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'counted' ~ APPPATH\classes\controller\Login.php [ 106 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Login.php(106): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\xampp\htdocs...', 106, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-11 02:23:09 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ul.user_level' in 'field list' [ SELECT ul.user_level FROM tms_accounts acc JOIN user_levels ul ON acc.`user_lvl` = ul.`user_lvl`WHERE acc.username = 'michelle@yahoo.com' AND acc.user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-11 02:23:09 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ul.user_level' in 'field list' [ SELECT ul.user_level FROM tms_accounts acc JOIN user_levels ul ON acc.`user_lvl` = ul.`user_lvl`WHERE acc.username = 'michelle@yahoo.com' AND acc.user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT ul.user_...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Account.php(18): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Login.php(111): Model_Account->get_account_user_level(Array)
#3 [internal function]: Controller_Login->action_validate()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-11 02:23:33 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'acc.user_level' in 'field list' [ SELECT acc.user_level FROM tms_accounts acc JOIN user_levels ul ON acc.`user_lvl` = ul.`user_lvl`WHERE acc.username = 'michelle@yahoo.com' AND acc.user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-11 02:23:33 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'acc.user_level' in 'field list' [ SELECT acc.user_level FROM tms_accounts acc JOIN user_levels ul ON acc.`user_lvl` = ul.`user_lvl`WHERE acc.username = 'michelle@yahoo.com' AND acc.user_password = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT acc.user...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Account.php(18): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Login.php(111): Model_Account->get_account_user_level(Array)
#3 [internal function]: Controller_Login->action_validate()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-11 02:23:53 --- ERROR: ErrorException [ 8 ]: Undefined index: user_level ~ APPPATH\classes\model\Account.php [ 19 ]
2013-11-11 02:23:53 --- STRACE: ErrorException [ 8 ]: Undefined index: user_level ~ APPPATH\classes\model\Account.php [ 19 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Account.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Login.php(111): Model_Account->get_account_user_level(Array)
#2 [internal function]: Controller_Login->action_validate()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-11 03:08:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\TMS\clerk\dashboard.php [ 8 ]
2013-11-11 03:08:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\TMS\clerk\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(59): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-11 03:09:45 --- ERROR: ErrorException [ 8 ]: Undefined index: account ~ APPPATH\classes\controller\Tms.php [ 57 ]
2013-11-11 03:09:45 --- STRACE: ErrorException [ 8 ]: Undefined index: account ~ APPPATH\classes\controller\Tms.php [ 57 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 57, Array)
#1 [internal function]: Controller_Tms->action_clerk_dashboard()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-11 03:10:04 --- ERROR: ErrorException [ 8 ]: Undefined index: account_logic ~ APPPATH\classes\controller\Tms.php [ 57 ]
2013-11-11 03:10:04 --- STRACE: ErrorException [ 8 ]: Undefined index: account_logic ~ APPPATH\classes\controller\Tms.php [ 57 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 57, Array)
#1 [internal function]: Controller_Tms->action_clerk_dashboard()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-11 03:10:17 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php on line 57 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2013-11-11 03:10:17 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php on line 57 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 243, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(57): Kohana_Session->set('tms_clerk_usern...')
#2 [internal function]: Controller_Tms->action_clerk_dashboard()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}