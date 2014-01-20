<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-17 17:17:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 52 ]
2013-09-17 17:17:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-17 17:28:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 52 ]
2013-09-17 17:28:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-17 17:32:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 53 ]
2013-09-17 17:32:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::redirect() ~ APPPATH\classes\controller\Login.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-17 17:42:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crm::select_sales_assistants() ~ APPPATH\classes\controller\Crm.php [ 20 ]
2013-09-17 17:42:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crm::select_sales_assistants() ~ APPPATH\classes\controller\Crm.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-17 17:43:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant sales_assistants - assumed 'sales_assistants' ~ APPPATH\views\CRM\admin\dashboard.php [ 12 ]
2013-09-17 17:43:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant sales_assistants - assumed 'sales_assistants' ~ APPPATH\views\CRM\admin\dashboard.php [ 12 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(24): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-17 18:27:08 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Form::input(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php on line 67 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2013-09-17 18:27:08 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Form::input(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php on line 67 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\form.php(93): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 93, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php(67): Kohana_Form::input()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(24): Forms->admin_add_sales_assistant()
#3 [internal function]: Controller_Crm->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-17 18:30:42 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be of the type array, string given, called in C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php on line 67 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2013-09-17 18:30:42 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be of the type array, string given, called in C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php on line 67 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\xampp\htdocs...', 93, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\Forms.php(67): Kohana_Form::input('fname', NULL, 'style='width: 1...')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(24): Forms->admin_add_sales_assistant()
#3 [internal function]: Controller_Crm->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}