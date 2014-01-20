<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-15 00:19:06 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 20 ]
2013-09-15 00:19:06 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 20 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(20): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(20): Controller_Login::__construct()
#2 [internal function]: Controller_Login->__construct(Object(Request), Object(Response))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-15 00:19:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\Login.php [ 80 ]
2013-09-15 00:19:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\Login.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-15 00:20:27 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 20 ]
2013-09-15 00:20:27 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\controller\Login.php [ 20 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(20): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(20): Controller_Login::__construct()
#2 [internal function]: Controller_Login->__construct(Object(Request), Object(Response))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-15 00:34:04 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 21 ]
2013-09-15 00:34:04 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-15 01:06:57 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 75 ]
2013-09-15 01:06:57 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\controller\Login.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-15 01:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-15 01:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 02:11:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\pdf\example.php [ 50 ]
2013-09-15 02:11:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\pdf\example.php [ 50 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\pdf\example.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(79): View_PDF->render()
#5 [internal function]: Controller_Login->action_pdfko()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-15 02:13:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\pdf\example.php [ 77 ]
2013-09-15 02:13:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\pdf\example.php [ 77 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\pdf\example.php(77): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 77, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(80): View_PDF->render()
#5 [internal function]: Controller_Login->action_pdfko()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-15 02:16:50 --- ERROR: ErrorException [ 2 ]: include(html2pdf): failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 800 ]
2013-09-15 02:16:50 --- STRACE: ErrorException [ 2 ]: include(html2pdf): failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 800 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\core.php(800): Kohana_Core::error_handler(2, 'include(html2pd...', 'C:\xampp\htdocs...', 800, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\core.php(800): Kohana_Core::load()
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(68): Kohana_Core::load('html2pdf')
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct('pdf/example', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(79): View_PDF::factory('pdf/example', Array)
#5 [internal function]: Controller_Login->action_pdfko()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-09-15 02:18:27 --- ERROR: HTML2PDF_exception [ 0 ]: error: 0 : invalid language code [] ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\locale.class.php [ 49 ]
2013-09-15 02:18:27 --- STRACE: HTML2PDF_exception [ 0 ]: error: 0 : invalid language code [] ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\locale.class.php [ 49 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(141): HTML2PDF_locale::load('')
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(77): HTML2PDF->__construct('P', 'A4', NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(82): View_PDF->render()
#3 [internal function]: Controller_Login->action_pdfko()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-15 02:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/pdfko.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 02:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/pdfko.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 02:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/pdfko.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 02:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/pdfko.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 02:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-15 02:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 10:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/jspdf.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 10:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/jspdf.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 10:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/jspdf.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 10:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/jspdf.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 14:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-15 14:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 15:08:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function PDF_new() ~ APPPATH\views\pdf\example.php [ 2 ]
2013-09-15 15:08:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function PDF_new() ~ APPPATH\views\pdf\example.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-15 16:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-15 16:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 16:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-15 16:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/pdfko was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 16:45:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: pdf ~ APPPATH\views\pdf\example.php [ 1 ]
2013-09-15 16:45:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: pdf ~ APPPATH\views\pdf\example.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\pdf\example.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(72): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Login->action_pdfreport()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-15 16:46:05 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\views\pdf\example.php [ 1 ]
2013-09-15 16:46:05 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\views\pdf\example.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-15 17:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL careers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-15 17:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL careers was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 17:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-15 17:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 17:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-15 17:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 17:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-15 17:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contactus was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-15 17:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/family.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/familytwo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 17:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 17:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 18:02:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: inquiry_modal ~ APPPATH\views\Website\careers.php [ 1 ]
2013-09-15 18:02:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: inquiry_modal ~ APPPATH\views\Website\careers.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Careers->action_index()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-15 18:03:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: pageNotAvail ~ APPPATH\views\Website\careers.php [ 2 ]
2013-09-15 18:03:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: pageNotAvail ~ APPPATH\views\Website\careers.php [ 2 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Careers->action_index()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-15 18:03:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: pageNotAvail ~ APPPATH\views\Website\careers.php [ 2 ]
2013-09-15 18:03:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: pageNotAvail ~ APPPATH\views\Website\careers.php [ 2 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Careers->action_index()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-15 21:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/libs/FileSaver.js/FileSaber.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 21:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/libs/FileSaver.js/FileSaber.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-15 21:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/libs/FileSaver.js/FileSaber.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-15 21:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jspdf/libs/FileSaver.js/FileSaber.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}