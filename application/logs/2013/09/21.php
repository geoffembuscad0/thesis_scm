<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-21 22:50:14 --- ERROR: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\views\CRM\sales\dashboard.php [ 8 ]
2013-09-21 22:50:14 --- STRACE: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\views\CRM\sales\dashboard.php [ 8 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\sales\dashboard.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(146): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_inquiries_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-21 23:35:19 --- ERROR: ErrorException [ 8 ]: Undefined index: usernmae ~ APPPATH\views\CRM\admin\dashboard.php [ 28 ]
2013-09-21 23:35:19 --- STRACE: ErrorException [ 8 ]: Undefined index: usernmae ~ APPPATH\views\CRM\admin\dashboard.php [ 28 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
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