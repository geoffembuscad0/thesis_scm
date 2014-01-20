<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-28 17:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL personnel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-28 17:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL personnel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-28 17:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL personnel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-28 17:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL personnel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-28 17:09:42 --- ERROR: View_Exception [ 0 ]: The requested view PMS/timekeeper/dashboard.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-10-28 17:09:42 --- STRACE: View_Exception [ 0 ]: The requested view PMS/timekeeper/dashboard.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(137): Kohana_View->set_filename('PMS/timekeeper/...')
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(30): Kohana_View->__construct('PMS/timekeeper/...', NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(34): Kohana_View::factory('PMS/timekeeper/...')
#3 [internal function]: Controller_Pms->action_personnel_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-28 17:10:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 1 ]
2013-10-28 17:10:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\dashboard.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(35): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_personnel_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-28 17:11:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 9 ]
2013-10-28 17:11:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: account_name ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(43): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_personnel_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-28 17:13:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: verify_applicant_form_script ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 204 ]
2013-10-28 17:13:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: verify_applicant_form_script ~ APPPATH\views\PMS\timekeeper\dashboard.php [ 204 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\dashboard.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 204, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(45): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Pms->action_personnel_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-28 17:42:32 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:42:32 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 17:42:57 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:42:57 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 17:42:59 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:42:59 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 17:43:22 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:43:22 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 17:44:38 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:44:38 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 17:45:33 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
2013-10-28 17:45:33 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ MODPATH\database\classes\kohana\database\pdo.php [ 189 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\pdo.php(189): PDOStatement->fetchAll()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'DELETE FROM crm...', false, Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(95): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(331): Model_Crm->select_inquiry_informations()
#4 [internal function]: Controller_Crm->action_inquiries_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-28 22:26:49 --- ERROR: ErrorException [ 8 ]: Undefined index: ine_no ~ APPPATH\views\CRM\sales\dashboard.php [ 37 ]
2013-10-28 22:26:49 --- STRACE: ErrorException [ 8 ]: Undefined index: ine_no ~ APPPATH\views\CRM\sales\dashboard.php [ 37 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\sales\dashboard.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(332): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_inquiries_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}