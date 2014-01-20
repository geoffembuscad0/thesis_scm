<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 00:34:50 --- ERROR: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\EMS\admin\dashboard.php [ 82 ]
2013-10-22 00:34:50 --- STRACE: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\EMS\admin\dashboard.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date_format() e...', 'C:\xampp\htdocs...', 82, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\admin\dashboard.php(82): date_format('2013-10-23 14:3...', 'm d Y H:i ')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(158): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Ems->action_admin_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-22 01:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-22 01:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-22 01:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-22 01:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-22 01:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-22 01:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}