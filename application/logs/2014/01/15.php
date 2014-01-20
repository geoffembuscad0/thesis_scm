<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-15 07:05:32 --- ERROR: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\model\Ems.php [ 90 ]
2014-01-15 07:05:32 --- STRACE: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\model\Ems.php [ 90 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(90): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(145): Model_Ems->get_employees(Array)
#2 [internal function]: Controller_Ems->action_hr_dashboard()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-15 07:09:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: verify_applicant_form ~ APPPATH\views\EMS\HR\dashboard.php [ 3 ]
2014-01-15 07:09:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: verify_applicant_form ~ APPPATH\views\EMS\HR\dashboard.php [ 3 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\HR\dashboard.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(148): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_hr_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 07:12:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\EMS\HR\dashboard.php [ 173 ]
2014-01-15 07:12:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\EMS\HR\dashboard.php [ 173 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-15 07:16:02 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
2014-01-15 07:16:02 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 272, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 07:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_Scm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-01-15 07:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_Scm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#3 {main}
2014-01-15 07:18:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
2014-01-15 07:18:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 272, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 07:28:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
2014-01-15 07:28:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 272, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 07:29:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
2014-01-15 07:29:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\EMS\admin\dashboard.php [ 272 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-15 07:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:33:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 268 ]
2014-01-15 07:33:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 268 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(268): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 268, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 07:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:53:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 310 ]
2014-01-15 07:53:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 310 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(310): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 310, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 07:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-15 07:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-15 07:55:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
2014-01-15 07:55:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 311, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 07:57:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
2014-01-15 07:57:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 311, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 07:59:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
2014-01-15 07:59:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 311 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(311): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 311, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 08:00:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 312 ]
2014-01-15 08:00:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 312 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(312): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 312, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 08:00:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Ems.php [ 307 ]
2014-01-15 08:00:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\Ems.php [ 307 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(307): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 307, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 08:02:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 314 ]
2014-01-15 08:02:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\classes\controller\Ems.php [ 314 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(314): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 314, Array)
#1 [internal function]: Controller_Ems->action_delete_employee()
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-15 08:06:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:06:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 08:07:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:07:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 08:09:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:09:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 08:10:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:10:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 08:10:49 --- ERROR: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:10:49 --- STRACE: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-15 08:11:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
2014-01-15 08:11:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 271 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\views\EMS\admin\dashboard.php(271): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 271, Array)
#1 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_scm\application\classes\controller\Ems.php(276): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#11 {main}