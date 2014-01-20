<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-25 01:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-25 01:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-25 03:42:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: customer_feedback ~ APPPATH\views\CRM\admin\dashboard.php [ 110 ]
2013-09-25 03:42:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: customer_feedback ~ APPPATH\views\CRM\admin\dashboard.php [ 110 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 110, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(38): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}