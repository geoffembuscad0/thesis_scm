<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-22 00:03:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant S - assumed 'S' ~ APPPATH\views\CRM\admin\dashboard.php [ 61 ]
2013-09-22 00:03:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant S - assumed 'S' ~ APPPATH\views\CRM\admin\dashboard.php [ 61 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(61): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-22 00:25:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::slect() ~ APPPATH\views\CRM\admin\dashboard.php [ 36 ]
2013-09-22 00:25:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::slect() ~ APPPATH\views\CRM\admin\dashboard.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-22 01:11:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
2013-09-22 01:11:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-22 01:12:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
2013-09-22 01:12:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-22 01:13:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
2013-09-22 01:13:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crm::redirect() ~ APPPATH\classes\controller\Crm.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-22 23:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-22 23:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-22 23:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-22 23:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-22 23:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-22 23:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/yahoo.com ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-22 23:48:31 --- ERROR: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\Login.php [ 22 ]
2013-09-22 23:48:31 --- STRACE: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\Login.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(22): date()
#2 [internal function]: Controller_Login->action_index()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-22 23:50:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Webstructure::$request ~ APPPATH\classes\Webstructure.php [ 83 ]
2013-09-22 23:50:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Webstructure::$request ~ APPPATH\classes\Webstructure.php [ 83 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(21): Webstructure->no_cache()
#2 [internal function]: Controller_Login->action_index()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}