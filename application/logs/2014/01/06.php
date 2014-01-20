<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-06 11:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-06 11:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-06 11:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-06 11:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-06 11:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2014-01-06 11:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/search-white.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-06 12:29:16 --- ERROR: ErrorException [ 8 ]: Undefined index: search_query ~ APPPATH\classes\model\Ems.php [ 31 ]
2014-01-06 12:29:16 --- STRACE: ErrorException [ 8 ]: Undefined index: search_query ~ APPPATH\classes\model\Ems.php [ 31 ]
--
#0 C:\xampp\htdocs\thesis_scm\application\classes\model\Ems.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\thesis_scm\application\classes\controller\Pms.php(138): Model_Ems->get_employees()
#2 [internal function]: Controller_Pms->action_personnel_dashboard()
#3 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pms))
#4 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_scm\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_scm\index.php(109): Kohana_Request->execute()
#7 {main}