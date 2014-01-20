<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-23 01:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_cargostellarmovers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-11-23 01:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_cargostellarmovers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-23 01:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-23 01:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-23 02:09:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\dashboard.php [ 1 ]
2013-11-23 02:09:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\dashboard.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\dashboard.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(294): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_applicant()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-23 02:10:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\add_personnel.php [ 1 ]
2013-11-23 02:10:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\EMS\admin\add_personnel.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\add_personnel.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(294): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_applicant()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-23 02:11:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: alertSuccess ~ APPPATH\views\EMS\admin\add_personnel.php [ 47 ]
2013-11-23 02:11:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: alertSuccess ~ APPPATH\views\EMS\admin\add_personnel.php [ 47 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\add_personnel.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(296): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_applicant()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-23 02:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-23 02:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_applicant was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-23 02:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-23 02:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-23 02:28:21 --- ERROR: View_Exception [ 0 ]: The requested view ems/admin/add_applicant could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-11-23 02:28:21 --- STRACE: View_Exception [ 0 ]: The requested view ems/admin/add_applicant could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(137): Kohana_View->set_filename('ems/admin/add_a...')
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(30): Kohana_View->__construct('ems/admin/add_a...', NULL)
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(293): Kohana_View::factory('ems/admin/add_a...')
#3 [internal function]: Controller_Ems->action_add_applicant()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-23 02:28:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\admin\add_applicant.php [ 17 ]
2013-11-23 02:28:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: applicant_response ~ APPPATH\views\EMS\admin\add_applicant.php [ 17 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\add_applicant.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(296): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_add_applicant()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}