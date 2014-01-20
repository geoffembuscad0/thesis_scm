<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-05 01:23:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: employee_department ~ APPPATH\classes\controller\Pms.php [ 115 ]
2013-11-05 01:23:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: employee_department ~ APPPATH\classes\controller\Pms.php [ 115 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 115, Array)
#1 [internal function]: Controller_Pms->action_print_payslip()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-05 01:23:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\PMS\timekeeper\payslip.php [ 10 ]
2013-11-05 01:23:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\PMS\timekeeper\payslip.php [ 10 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\PMS\timekeeper\payslip.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(124): View_PDF->render()
#5 [internal function]: Controller_Pms->action_print_payslip()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}