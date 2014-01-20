<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-21 11:29:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session::instace() ~ APPPATH\classes\controller\Login.php [ 33 ]
2013-11-21 11:29:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session::instace() ~ APPPATH\classes\controller\Login.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-21 11:51:03 --- ERROR: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\EMS\admin\dashboard.php [ 240 ]
2013-11-21 11:51:03 --- STRACE: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\EMS\admin\dashboard.php [ 240 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-21 11:51:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::site_url() ~ APPPATH\views\EMS\admin\dashboard.php [ 240 ]
2013-11-21 11:51:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::site_url() ~ APPPATH\views\EMS\admin\dashboard.php [ 240 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-21 11:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/yeahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-21 11:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/yeahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-21 15:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/deleteEmployee was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-21 15:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/deleteEmployee was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-21 15:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-11-21 15:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-21 17:28:01 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-21 17:28:01 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(123): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(232): Model_Crm->add_sales_assistant(Array)
#3 [internal function]: Controller_Crm->action_admin_add_sales()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-21 17:28:04 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-21 17:28:04 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(123): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(232): Model_Crm->add_sales_assistant(Array)
#3 [internal function]: Controller_Crm->action_admin_add_sales()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-21 17:28:05 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-21 17:28:05 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_accounts VALUES(null,'kiko@live.com',sha1('Cruz'),'Kiko','','Cruz','2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(123): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(232): Model_Crm->add_sales_assistant(Array)
#3 [internal function]: Controller_Crm->action_admin_add_sales()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-21 17:29:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\EMS\admin\dashboard.php [ 231 ]
2013-11-21 17:29:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\EMS\admin\dashboard.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}