<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-26 10:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: deliverRecords ~ APPPATH\views\TMS\admin\dashboard.php [ 25 ]
2013-11-26 10:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: deliverRecords ~ APPPATH\views\TMS\admin\dashboard.php [ 25 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\admin\dashboard.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(47): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-26 12:18:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::view() ~ APPPATH\classes\controller\Tms.php [ 93 ]
2013-11-26 12:18:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::view() ~ APPPATH\classes\controller\Tms.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-26 12:18:48 --- ERROR: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
2013-11-26 12:18:48 --- STRACE: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_Core::error_handler(4096, 'Method View_PDF...', 'C:\xampp\htdocs...', 160, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(93): Kohana_Response->body(Object(View_PDF))
#2 [internal function]: Controller_Tms->action_delivery_details()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-26 12:19:11 --- ERROR: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
2013-11-26 12:19:11 --- STRACE: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_Core::error_handler(4096, 'Method View_PDF...', 'C:\xampp\htdocs...', 160, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(93): Kohana_Response->body(Object(View_PDF))
#2 [internal function]: Controller_Tms->action_delivery_details()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-26 12:19:40 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to View_PDF::__construct() must be of the type array, null given, called in C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php on line 43 and defined ~ MODPATH\html2pdf\classes\view\pdf.php [ 54 ]
2013-11-26 12:19:40 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to View_PDF::__construct() must be of the type array, null given, called in C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php on line 43 and defined ~ MODPATH\html2pdf\classes\view\pdf.php [ 54 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(54): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(43): View_PDF->__construct('tms/admin/print...', NULL)
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(84): View_PDF::factory('tms/admin/print...')
#3 [internal function]: Controller_Tms->action_delivery_details()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-26 12:19:52 --- ERROR: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
2013-11-26 12:19:52 --- STRACE: ErrorException [ 4096 ]: Method View_PDF::__toString() must return a string value ~ SYSPATH\classes\kohana\response.php [ 160 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_Core::error_handler(4096, 'Method View_PDF...', 'C:\xampp\htdocs...', 160, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(88): Kohana_Response->body(Object(View_PDF))
#2 [internal function]: Controller_Tms->action_delivery_details()
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-26 12:21:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: delivery_details ~ APPPATH\views\TMS\admin\print_delivery.php [ 1 ]
2013-11-26 12:21:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: delivery_details ~ APPPATH\views\TMS\admin\print_delivery.php [ 1 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\admin\print_delivery.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(89): View_PDF->render()
#5 [internal function]: Controller_Tms->action_delivery_details()
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-26 12:30:58 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\admin\print_delivery.php [ 16 ]
2013-11-26 12:30:58 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver ~ APPPATH\views\TMS\admin\print_delivery.php [ 16 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\admin\print_delivery.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(90): View_PDF->render()
#5 [internal function]: Controller_Tms->action_delivery_details()
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-26 12:36:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tms::selectDeliverDatas() ~ APPPATH\classes\controller\Tms.php [ 64 ]
2013-11-26 12:36:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tms::selectDeliverDatas() ~ APPPATH\classes\controller\Tms.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-26 12:58:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\clerk\dashboard.php [ 9 ]
2013-11-26 12:58:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\TMS\clerk\dashboard.php [ 9 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\application\views\TMS\clerk\dashboard.php(9): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Tms.php(66): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tms->action_clerk_dashboard()
#7 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Tms))
#8 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#11 {main}