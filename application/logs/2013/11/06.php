<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-06 01:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms/test_script was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-06 01:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms/test_script was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-06 02:17:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Login.php [ 52 ]
2013-11-06 02:17:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\Login.php [ 52 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(52): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-06 02:19:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Webstructure.php [ 122 ]
2013-11-06 02:19:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Webstructure.php [ 122 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(122): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 122, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(173): Webstructure->applicantHiringForm(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-06 02:19:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Webstructure.php [ 122 ]
2013-11-06 02:19:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Webstructure.php [ 122 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(122): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 122, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(173): Webstructure->applicantHiringForm(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-06 02:26:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
2013-11-06 02:26:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\EMS\admin\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\admin\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(158): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}