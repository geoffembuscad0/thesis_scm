<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-14 23:35:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: pdf ~ APPPATH\classes\controller\Login.php [ 74 ]
2013-09-14 23:35:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: pdf ~ APPPATH\classes\controller\Login.php [ 74 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 74, Array)
#1 [internal function]: Controller_Login->action_pdfko()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-14 23:36:06 --- ERROR: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\extra\Pdf.php [ 4 ]
2013-09-14 23:36:06 --- STRACE: ErrorException [ 1 ]: Class 'DOMPDF' not found ~ APPPATH\classes\extra\Pdf.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-14 23:42:29 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\extra\Pdf.php [ 2 ]
2013-09-14 23:42:29 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\extra\Pdf.php [ 2 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\extra\Pdf.php(2): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\extra\Pdf.php(2): include()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(73): include('C:\xampp\htdocs...')
#3 [internal function]: Controller_Login->action_pdfko()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}