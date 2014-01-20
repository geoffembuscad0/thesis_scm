<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-24 12:44:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: employe ~ APPPATH\views\EMS\admin\dashboard.php [ 233 ]
2013-11-24 12:44:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: employe ~ APPPATH\views\EMS\admin\dashboard.php [ 233 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\EMS\admin\dashboard.php(233): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 233, Array)
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
2013-11-24 13:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-24 13:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-24 13:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-24 13:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/add_personnel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#3 {main}