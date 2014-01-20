<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-05 11:23:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: inputs ~ APPPATH\classes\model\Account.php [ 11 ]
2013-10-05 11:23:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: inputs ~ APPPATH\classes\model\Account.php [ 11 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Account.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(31): Model_Account->get_account_name('admin-crm.admin')
#2 [internal function]: Controller_Crm->action_admin_dashboard()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-05 11:25:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php on line 31 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
2013-10-05 11:25:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php on line 31 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Account.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(31): Model_Account->get_account_name('admin-crm.admin')
#2 [internal function]: Controller_Crm->action_admin_dashboard()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-05 12:04:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\classes\controller\Crm.php [ 18 ]
2013-10-05 12:04:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\classes\controller\Crm.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:29:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: customer_feedbacks ~ APPPATH\views\CRM\admin\dashboard.php [ 116 ]
2013-10-05 12:29:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: customer_feedbacks ~ APPPATH\views\CRM\admin\dashboard.php [ 116 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(116): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 116, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-05 12:34:13 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_product_scores VALUES(null,'4','1') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:34:13 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_product_scores VALUES(null,'4','1') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(58): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:34:13 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_product_scores VALUES(null,'4','1') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:34:13 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_product_scores VALUES(null,'4','1') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(58): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:38:12 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:38:12 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(59): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:38:12 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:38:12 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(59): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:39:22 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:39:22 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(59): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:39:22 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-05 12:39:22 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''::1' at line 1 [ INSERT INTO crm_product_scores VALUES(null,'4','::1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Products.php(21): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Products.php(59): Model_Products->set_product_score(Array)
#3 [internal function]: Controller_Products->action_getscore()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Products))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 12:42:16 --- ERROR: ErrorException [ 8 ]: Undefined index: ip ~ APPPATH\views\CRM\admin\dashboard.php [ 124 ]
2013-10-05 12:42:16 --- STRACE: ErrorException [ 8 ]: Undefined index: ip ~ APPPATH\views\CRM\admin\dashboard.php [ 124 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(124): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 124, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-05 12:42:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: score ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
2013-10-05 12:42:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: score ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 125, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-05 12:47:54 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
2013-10-05 12:47:54 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 125, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(125): date('m, d Y / H:i:s', '2013-10-05 12:4...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_admin_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-05 12:48:20 --- ERROR: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
2013-10-05 12:48:20 --- STRACE: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date_format() e...', 'C:\xampp\htdocs...', 125, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(125): date_format('2013-10-05 12:4...', 'm, d Y / H:i:s')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_admin_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-05 12:48:34 --- ERROR: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
2013-10-05 12:48:34 --- STRACE: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\admin\dashboard.php [ 125 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date_format() e...', 'C:\xampp\htdocs...', 125, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(125): date_format('2013-10-05 12:4...', 'm, d Y / H:i:s')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_admin_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}