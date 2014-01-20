<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 00:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms/test_script was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-02 00:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms/test_script was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-02 00:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms/personel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-11-02 00:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms/personel_dashboard was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-02 01:28:35 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:28:35 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:29:05 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:29:05 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:30:46 --- ERROR: ErrorException [ 2 ]: implode() expects at most 2 parameters, 3 given ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:30:46 --- STRACE: ErrorException [ 2 ]: implode() expects at most 2 parameters, 3 given ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() expec...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...', '2013-11')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:35:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 44 ]
2013-11-02 01:35:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-02 01:35:35 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:35:35 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:36:04 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:36:04 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:36:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 45 ]
2013-11-02 01:36:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-02 01:36:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 45 ]
2013-11-02 01:36:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\Pms.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-02 01:37:46 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:37:46 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:40:29 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:40:29 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode('', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-02 01:42:31 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
2013-11-02 01:42:31 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\Pms.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Pms.php(29): implode(' ', 'h2JWvu_2013-10-...')
#2 [internal function]: Controller_Pms->action_test_script()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}