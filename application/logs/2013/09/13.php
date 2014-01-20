<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-13 19:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logibn was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-13 19:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logibn was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-13 19:46:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Login::$requests ~ APPPATH\classes\controller\Login.php [ 63 ]
2013-09-13 19:46:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Login::$requests ~ APPPATH\classes\controller\Login.php [ 63 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Login.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 63, Array)
#1 [internal function]: Controller_Login->action_validate()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-09-13 19:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-13 19:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-13 19:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-13 19:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-13 19:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-09-13 19:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-13 19:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-13 19:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-13 19:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-13 19:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}