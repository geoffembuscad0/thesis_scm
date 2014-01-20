<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-08 00:00:22 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 22 ]
2013-12-08 00:00:22 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 22 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(22): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:01:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\model\Account.php [ 23 ]
2013-12-08 00:01:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\model\Account.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-08 00:01:17 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 22 ]
2013-12-08 00:01:17 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 22 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(22): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:04:25 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 24 ]
2013-12-08 00:04:25 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 24 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(24): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:04:48 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 24 ]
2013-12-08 00:04:48 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 24 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(24): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:07:12 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 21 ]
2013-12-08 00:07:12 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 21 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:07:24 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 21 ]
2013-12-08 00:07:24 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 21 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:07:58 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 20 ]
2013-12-08 00:07:58 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\Account.php [ 20 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Account.php(20): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(20): Model_Account->get_admin_accounts(Array)
#2 [internal function]: Controller_Admin->action_mis_homepage()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-08 00:51:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: verify_applicant_form_script ~ APPPATH\views\mis_admin\dashboard.php [ 19 ]
2013-12-08 00:51:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: verify_applicant_form_script ~ APPPATH\views\mis_admin\dashboard.php [ 19 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\mis_admin\dashboard.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Admin.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->action_mis_homepage()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}