<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-27 17:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-09-27 17:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-09-27 17:36:05 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\Ems.php [ 37 ]
2013-09-27 17:36:05 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\Ems.php [ 37 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(13): Controller_Ems->validate_applicant_name(Array)
#2 [internal function]: Controller_Ems->action_validate_applicant()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-09-27 17:37:32 --- ERROR: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH\classes\controller\Ems.php [ 40 ]
2013-09-27 17:37:32 --- STRACE: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH\classes\controller\Ems.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(40): explode('')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(21): Controller_Ems->validate_date('')
#3 [internal function]: Controller_Ems->action_validate_applicant()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-09-27 17:40:16 --- ERROR: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH\classes\controller\Ems.php [ 46 ]
2013-09-27 17:40:16 --- STRACE: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH\classes\controller\Ems.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-27 17:40:39 --- ERROR: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH\classes\controller\Ems.php [ 46 ]
2013-09-27 17:40:39 --- STRACE: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH\classes\controller\Ems.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-09-27 17:57:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''date_start'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\controller\Ems.php [ 22 ]
2013-09-27 17:57:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''date_start'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\controller\Ems.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}