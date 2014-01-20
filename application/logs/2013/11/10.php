<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-10 00:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tms/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-11-10 00:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tms/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-10 00:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tms/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-11-10 00:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tms/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-10 00:07:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:07:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:07:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:07:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:08:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:08:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:09:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:09:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:09:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:09:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:09:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
2013-11-10 00:09:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\HR\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\HR\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(124): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-10 00:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL emsa/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-11-10 00:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL emsa/admin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-10 00:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/aadmin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-10 00:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/aadmin_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-10 14:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-11-10 14:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-10 14:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-11-10 14:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-10 14:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-11-10 14:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-10 14:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-11-10 14:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-10 14:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-11-10 14:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resumes/IT Endorsement Letter.doc ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}