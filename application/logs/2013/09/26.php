<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-26 18:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-26 18:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-26 21:08:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '')); ?>' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH\views\Website\careers.php [ 21 ]
2013-09-26 21:08:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '')); ?>' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH\views\Website\careers.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-26 21:23:24 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be of the type array, string given, called in C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php on line 28 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2013-09-26 21:23:24 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be of the type array, string given, called in C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php on line 28 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\xampp\htdocs...', 93, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php(28): Kohana_Form::input('addr', Array, 'Philippines')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(210): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Careers->action_index()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-09-26 22:28:12 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Form::submit(), called in C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php on line 56 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
2013-09-26 22:28:12 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Form::submit(), called in C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php on line 56 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 354, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\Website\careers.php(56): Kohana_Form::submit()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Careers.php(13): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Careers->action_index()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Careers))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-09-26 23:04:45 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2013-09-26 23:04:45 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(14): Kohana_Upload::save(Array)
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-26 23:28:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\Ems.php [ 18 ]
2013-09-26 23:28:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\Ems.php [ 18 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 [internal function]: Controller_Ems->action_validate_applicant()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}