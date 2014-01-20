<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 02:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/view_feedback was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 02:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/view_feedback was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 02:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/view_feedback was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 02:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/view_feedback was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 02:35:00 --- ERROR: View_Exception [ 0 ]: The requested view CRM/admin/feedbackreports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-10-06 02:35:00 --- STRACE: View_Exception [ 0 ]: The requested view CRM/admin/feedbackreports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(137): Kohana_View->set_filename('CRM/admin/feedb...')
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(30): Kohana_View->__construct('CRM/admin/feedb...', NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(44): Kohana_View::factory('CRM/admin/feedb...')
#3 [internal function]: Controller_Crm->action_view_feedbacks()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-06 02:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquery1102.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-06 02:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquery1102.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 02:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquerymigrate121.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-06 02:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquerymigrate121.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 02:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquerymigrate121.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-06 02:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/assets/js/jquerymigrate121.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 03:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 03:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 03:40:58 --- ERROR: ErrorException [ 2 ]: include(): http:// wrapper is disabled in the server configuration by allow_url_include=0 ~ APPPATH\views\CRM\admin\dashboard.php [ 7 ]
2013-10-06 03:40:58 --- STRACE: ErrorException [ 2 ]: include(): http:// wrapper is disabled in the server configuration by allow_url_include=0 ~ APPPATH\views\CRM\admin\dashboard.php [ 7 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(7): Kohana_Core::error_handler(2, 'include(): http...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(7): include()
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
2013-10-06 03:41:57 --- ERROR: ErrorException [ 2 ]: include(): http:// wrapper is disabled in the server configuration by allow_url_include=0 ~ APPPATH\views\CRM\admin\dashboard.php [ 7 ]
2013-10-06 03:41:57 --- STRACE: ErrorException [ 2 ]: include(): http:// wrapper is disabled in the server configuration by allow_url_include=0 ~ APPPATH\views\CRM\admin\dashboard.php [ 7 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(7): Kohana_Core::error_handler(2, 'include(): http...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(7): include()
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
2013-10-06 03:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view_feedbacks was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-06 03:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view_feedbacks was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 04:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-06 04:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/< was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-06 05:01:17 --- ERROR: ErrorException [ 8 ]: Undefined index: s ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
2013-10-06 05:01:17 --- STRACE: ErrorException [ 8 ]: Undefined index: s ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(175): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(42): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-06 05:02:35 --- ERROR: ErrorException [ 8 ]: Undefined index: Statisfaction ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
2013-10-06 05:02:35 --- STRACE: ErrorException [ 8 ]: Undefined index: Statisfaction ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(175): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(42): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-06 05:03:34 --- ERROR: ErrorException [ 8 ]: Undefined index: Satisfaction ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
2013-10-06 05:03:34 --- STRACE: ErrorException [ 8 ]: Undefined index: Satisfaction ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(175): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(42): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-06 05:04:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: rate_feedback ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
2013-10-06 05:04:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: rate_feedback ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(175): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(42): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-06 05:20:22 --- ERROR: ErrorException [ 1 ]: Class 'DATBASE' not found ~ APPPATH\classes\model\Crm.php [ 49 ]
2013-10-06 05:20:22 --- STRACE: ErrorException [ 1 ]: Class 'DATBASE' not found ~ APPPATH\classes\model\Crm.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-06 23:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 23:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-06 23:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 23:50:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 126 ~ APPPATH\classes\controller\Crm.php [ 51 ]
2013-10-06 23:50:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 126 ~ APPPATH\classes\controller\Crm.php [ 51 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 51, Array)
#1 [internal function]: Controller_Crm->action_yesno()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}