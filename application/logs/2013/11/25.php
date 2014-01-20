<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-25 04:15:37 --- ERROR: ErrorException [ 8 ]: Undefined index: location_infos ~ APPPATH\views\EMS\admin\dashboard.php [ 256 ]
2013-11-25 04:15:37 --- STRACE: ErrorException [ 8 ]: Undefined index: location_infos ~ APPPATH\views\EMS\admin\dashboard.php [ 256 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\dashboard.php(256): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 256, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(213): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-25 04:17:06 --- ERROR: ErrorException [ 8 ]: Undefined index: location_infos ~ APPPATH\views\EMS\admin\dashboard.php [ 256 ]
2013-11-25 04:17:06 --- STRACE: ErrorException [ 8 ]: Undefined index: location_infos ~ APPPATH\views\EMS\admin\dashboard.php [ 256 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\dashboard.php(256): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 256, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(213): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-25 04:17:20 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_employee_contact' doesn't exist [ SELECT * FROM ems_employee_contact WHERE employee_id = 'W7bjZk' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-25 04:17:20 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.ems_employee_contact' doesn't exist [ SELECT * FROM ems_employee_contact WHERE employee_id = 'W7bjZk' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM e...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Ems.php(54): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Ems.php(47): Model_Ems->get_emp_contact_information('W7bjZk')
#3 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(209): Model_Ems->get_employees()
#4 [internal function]: Controller_Ems->action_admin_dashboard()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#9 {main}
2013-11-25 04:19:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 259 ]
2013-11-25 04:19:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 259 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\dashboard.php(259): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 259, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(213): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-25 04:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-25 04:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-25 04:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-25 04:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-25 04:32:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ems::$titlePage ~ APPPATH\classes\controller\Ems.php [ 298 ]
2013-11-25 04:32:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ems::$titlePage ~ APPPATH\classes\controller\Ems.php [ 298 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(298): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 298, Array)
#1 [internal function]: Controller_Ems->action_add_applicant()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-25 04:41:33 --- ERROR: View_Exception [ 0 ]: The requested view EMS/admin/employee_list_export could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-11-25 04:41:33 --- STRACE: View_Exception [ 0 ]: The requested view EMS/admin/employee_list_export could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(137): Kohana_View->set_filename('EMS/admin/emplo...')
#1 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(56): Kohana_View->__construct('EMS/admin/emplo...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct('EMS/admin/emplo...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(183): View_PDF::factory('EMS/admin/emplo...', Array)
#4 [internal function]: Controller_Ems->action_export_employees()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#9 {main}
2013-11-25 05:03:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\admin\dashboard.php [ 9 ]
2013-11-25 05:03:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-25 05:04:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\admin\dashboard.php [ 9 ]
2013-11-25 05:04:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-25 05:07:53 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-25 05:07:53 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT CONCAT(c...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Crm.php(97): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Crm.php(347): Model_Crm->select_inquiry_informations()
#3 [internal function]: Controller_Crm->action_inquiries_dashboard()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-25 05:09:52 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-25 05:09:52 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT CONCAT(c...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Crm.php(97): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Crm.php(347): Model_Crm->select_inquiry_informations()
#3 [internal function]: Controller_Crm->action_inquiries_dashboard()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-25 05:10:15 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-25 05:10:15 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT CONCAT(c...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Crm.php(97): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Crm.php(347): Model_Crm->select_inquiry_informations()
#3 [internal function]: Controller_Crm->action_inquiries_dashboard()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-25 05:11:02 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-11-25 05:11:02 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'db_scm.crm_inq_clients' doesn't exist [ SELECT CONCAT(crm_inq_clients.`firstname`, ' ', crm_inq_clients.`middlename`, ' ', crm_inq_clients.`lastname`) AS client_name, crm_inq_clients.*, crm_inq_docs.*, crm_client_type.`type_name` FROM crm_inq_clients JOIN crm_inq_docs ON crm_inq_clients.`inq_no` = crm_inq_docs.`inq_no` JOIN crm_client_type ON crm_client_type.`client_type` = crm_inq_clients.`client_type` ORDER BY crm_inq_docs.date_issued DESC ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT CONCAT(c...', false, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Crm.php(97): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Crm.php(347): Model_Crm->select_inquiry_informations()
#3 [internal function]: Controller_Crm->action_inquiries_dashboard()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-25 05:11:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\controller\Login.php [ 148 ]
2013-11-25 05:11:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\controller\Login.php [ 148 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-25 05:11:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\clerk\dashboard.php [ 9 ]
2013-11-25 05:11:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\clerk\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(64): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}