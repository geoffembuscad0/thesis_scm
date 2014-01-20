<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-23 01:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-23 01:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-23 01:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-09-23 01:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-09-23 02:11:30 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
2013-09-23 02:11:30 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\sales\dashboard.php(39): date('Y-m-d', '2013-09-07 15:5...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(176): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_inquiries_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-09-23 02:14:32 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
2013-09-23 02:14:32 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\sales\dashboard.php(39): strtotime('DD', '2013-09-07 15:5...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(176): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_inquiries_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-09-23 02:16:07 --- ERROR: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
2013-09-23 02:16:07 --- STRACE: ErrorException [ 2 ]: date_format() expects parameter 1 to be DateTimeInterface, string given ~ APPPATH\views\CRM\sales\dashboard.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date_format() e...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\sales\dashboard.php(39): date_format('2013-09-07 15:5...', 'D')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(176): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Crm->action_inquiries_dashboard()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-09-23 03:03:32 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-09-23 03:03:32 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(2334): HTML2PDF->_setNewPage(NULL, '', Array, NULL, false)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_PAGE(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#6 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<page>???<img s...')
#7 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(218): View_PDF->render()
#8 [internal function]: Controller_Crm->action_inquiry_report()
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#13 {main}
2013-09-23 03:03:52 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-09-23 03:03:52 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(2334): HTML2PDF->_setNewPage(NULL, '', Array, NULL, false)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_PAGE(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#6 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<page>???<img s...')
#7 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(218): View_PDF->render()
#8 [internal function]: Controller_Crm->action_inquiry_report()
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#13 {main}
2013-09-23 03:06:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 4957 ]
2013-09-23 03:06:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 4957 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(4957): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 4957, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_close_TABLE(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1218): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<page>???<img s...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(218): View_PDF->render()
#6 [internal function]: Controller_Crm->action_inquiry_report()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-09-23 03:09:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: inquiry_doc ~ APPPATH\views\htmlpdf.php [ 5 ]
2013-09-23 03:09:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: inquiry_doc ~ APPPATH\views\htmlpdf.php [ 5 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\htmlpdf.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(218): View_PDF->render()
#5 [internal function]: Controller_Crm->action_inquiry_report()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}