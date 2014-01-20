<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-12 00:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-12 00:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-12 00:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-12 00:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thesis_teresamarble was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-12 00:35:05 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2013-09-12 00:35:05 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(202): Kohana_Cookie::get('session')
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(108): Kohana_Request::factory()
#3 {main}
2013-09-12 00:35:16 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2013-09-12 00:35:16 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(202): Kohana_Cookie::get('session')
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(108): Kohana_Request::factory()
#3 {main}
2013-09-12 01:16:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: dados ~ APPPATH\classes\controller\Crm.php [ 139 ]
2013-09-12 01:16:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: dados ~ APPPATH\classes\controller\Crm.php [ 139 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 139, Array)
#1 [internal function]: Controller_Crm->action_test_pdf()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-12 01:23:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\testpdf.php [ 50 ]
2013-09-12 01:23:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\testpdf.php [ 50 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(141): View_PDF->render()
#5 [internal function]: Controller_Crm->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 01:23:33 --- ERROR: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\views\testpdf.php [ 50 ]
2013-09-12 01:23:33 --- STRACE: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\views\testpdf.php [ 50 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(142): View_PDF->render()
#5 [internal function]: Controller_Crm->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 01:24:38 --- ERROR: ErrorException [ 8 ]: Undefined index: cpf ~ APPPATH\views\testpdf.php [ 55 ]
2013-09-12 01:24:38 --- STRACE: ErrorException [ 8 ]: Undefined index: cpf ~ APPPATH\views\testpdf.php [ 55 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(142): View_PDF->render()
#5 [internal function]: Controller_Crm->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 01:26:54 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to View_PDF::__construct() must be of the type array, null given, called in C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php on line 43 and defined ~ MODPATH\html2pdf\classes\view\pdf.php [ 54 ]
2013-09-12 01:26:54 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to View_PDF::__construct() must be of the type array, null given, called in C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php on line 43 and defined ~ MODPATH\html2pdf\classes\view\pdf.php [ 54 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(54): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct(NULL, NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(143): View_PDF::factory()
#3 [internal function]: Controller_Crm->action_test_pdf()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-12 01:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\testpdf.php [ 50 ]
2013-09-12 01:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\testpdf.php [ 50 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(143): View_PDF->render()
#5 [internal function]: Controller_Crm->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 01:28:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\testpdf.php [ 1 ]
2013-09-12 01:28:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\testpdf.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(143): View_PDF->render()
#5 [internal function]: Controller_Crm->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 01:48:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\Crm.php [ 153 ]
2013-09-12 01:48:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\Crm.php [ 153 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-12 08:51:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/report/pdf could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-09-12 08:51:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/report/pdf could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/report/pd...')
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(56): Kohana_View->__construct('admin/report/pd...')
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct('admin/report/pd...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(76): View_PDF::factory('admin/report/pd...', Array)
#4 [internal function]: Controller_Login->action_test_pdf()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-09-12 08:51:39 --- ERROR: View_Exception [ 0 ]: The requested view test_pdf could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-09-12 08:51:39 --- STRACE: View_Exception [ 0 ]: The requested view test_pdf could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(137): Kohana_View->set_filename('test_pdf')
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(56): Kohana_View->__construct('test_pdf')
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct('test_pdf', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(76): View_PDF::factory('test_pdf', Array)
#4 [internal function]: Controller_Login->action_test_pdf()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-09-12 08:51:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: etapa1 ~ APPPATH\views\testpdf.php [ 73 ]
2013-09-12 08:51:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: etapa1 ~ APPPATH\views\testpdf.php [ 73 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(78): View_PDF->render()
#5 [internal function]: Controller_Login->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 09:05:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\testpdf.php [ 78 ]
2013-09-12 09:05:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\testpdf.php [ 78 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\testpdf.php(78): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(78): View_PDF->render()
#5 [internal function]: Controller_Login->action_test_pdf()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-12 09:26:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\Login.php [ 79 ]
2013-09-12 09:26:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\Login.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-12 09:27:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::send_file() ~ APPPATH\classes\controller\Login.php [ 78 ]
2013-09-12 09:27:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::send_file() ~ APPPATH\classes\controller\Login.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-12 09:29:47 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Request::response() must be an instance of Response, instance of View_PDF given, called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php on line 74 and defined ~ SYSPATH\classes\kohana\request.php [ 1224 ]
2013-09-12 09:29:47 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Request::response() must be an instance of Response, instance of View_PDF given, called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php on line 74 and defined ~ SYSPATH\classes\kohana\request.php [ 1224 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1224): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 1224, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(74): Kohana_Request->response(Object(View_PDF))
#2 [internal function]: Controller_Login->action_test_pdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 09:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/test_pdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-12 09:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/test_pdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-12 12:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-12 12:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-12 12:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/test_pdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-12 12:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/test_pdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-12 12:56:05 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:56:05 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 12:56:33 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:56:33 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 12:56:49 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:56:49 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 12:56:58 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:56:58 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 12:57:03 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:57:03 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 12:59:03 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 12:59:03 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 13:00:04 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
2013-09-12 13:00:04 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 81 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(81): Controller_Login::action_testmpdf()
#2 [internal function]: Controller_Login->action_testmpdf()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-12 13:00:14 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 86 ]
2013-09-12 13:00:14 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-12 21:38:52 --- ERROR: ErrorException [ 1 ]: Class 'View_PDF' not found ~ APPPATH\classes\controller\Login.php [ 71 ]
2013-09-12 21:38:52 --- STRACE: ErrorException [ 1 ]: Class 'View_PDF' not found ~ APPPATH\classes\controller\Login.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-12 21:39:04 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 86 ]
2013-09-12 21:39:04 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}