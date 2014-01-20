<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-16 01:14:38 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Webstructure.php [ 116 ]
2013-10-16 01:14:38 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Webstructure.php [ 116 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 116, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(116): implode(',', Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Webstructure->applicantHiringForm(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#4 [internal function]: Controller_Ems->action_admin_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-16 01:15:09 --- ERROR: ErrorException [ 2 ]: json_encode() expects parameter 2 to be long, array given ~ APPPATH\classes\Webstructure.php [ 116 ]
2013-10-16 01:15:09 --- STRACE: ErrorException [ 2 ]: json_encode() expects parameter 2 to be long, array given ~ APPPATH\classes\Webstructure.php [ 116 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() e...', 'C:\xampp\htdocs...', 116, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(116): json_encode(',', Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Webstructure->applicantHiringForm(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#4 [internal function]: Controller_Ems->action_admin_dashboard()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-16 01:23:29 --- ERROR: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\classes\Webstructure.php [ 121 ]
2013-10-16 01:23:29 --- STRACE: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\classes\Webstructure.php [ 121 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(121): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 121, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Webstructure->applicantHiringForm(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-16 01:24:19 --- ERROR: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\classes\Webstructure.php [ 121 ]
2013-10-16 01:24:19 --- STRACE: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\classes\Webstructure.php [ 121 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(121): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 121, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Webstructure->applicantHiringForm(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-16 02:17:03 --- ERROR: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\classes\Webstructure.php [ 126 ]
2013-10-16 02:17:03 --- STRACE: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\classes\Webstructure.php [ 126 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\Webstructure.php(126): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 126, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Webstructure->applicantHiringForm(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-16 02:28:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: position_code ~ APPPATH\classes\model\Ems.php [ 45 ]
2013-10-16 02:28:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: position_code ~ APPPATH\classes\model\Ems.php [ 45 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(167): Model_Ems->get_position()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(149): Controller_Ems->constructApplicantForm('000000000000000...')
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}