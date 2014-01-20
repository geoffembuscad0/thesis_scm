<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 00:14:34 --- ERROR: ErrorException [ 1 ]: Class 'DATBASE' not found ~ APPPATH\classes\model\Crm.php [ 46 ]
2013-10-07 00:14:34 --- STRACE: ErrorException [ 1 ]: Class 'DATBASE' not found ~ APPPATH\classes\model\Crm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:14:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: business_rate ~ APPPATH\classes\controller\Crm.php [ 53 ]
2013-10-07 00:14:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: business_rate ~ APPPATH\classes\controller\Crm.php [ 53 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 53, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(45): Controller_Crm->get_statistics_bussinessrate()
#2 [internal function]: Controller_Crm->action_yesno()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 00:16:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function rount() ~ APPPATH\classes\controller\Crm.php [ 61 ]
2013-10-07 00:16:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function rount() ~ APPPATH\classes\controller\Crm.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:16:32 --- ERROR: ErrorException [ 1 ]: Call to undefined function rount() ~ APPPATH\classes\controller\Crm.php [ 78 ]
2013-10-07 00:16:32 --- STRACE: ErrorException [ 1 ]: Call to undefined function rount() ~ APPPATH\classes\controller\Crm.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:19:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Crm::select_bussiness_rate() ~ APPPATH\classes\controller\Crm.php [ 48 ]
2013-10-07 00:19:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Crm::select_bussiness_rate() ~ APPPATH\classes\controller\Crm.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:19:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Crm::ordered_products() ~ APPPATH\classes\controller\Crm.php [ 48 ]
2013-10-07 00:19:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Crm::ordered_products() ~ APPPATH\classes\controller\Crm.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_statistics_businessrate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-07 00:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_statistics_businessrate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 00:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_statistics_businessrate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-07 00:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_statistics_businessrate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 00:24:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Crm::get_statistics_business_rate() ~ APPPATH\classes\controller\Crm.php [ 45 ]
2013-10-07 00:24:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Crm::get_statistics_business_rate() ~ APPPATH\classes\controller\Crm.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 00:43:35 --- ERROR: ErrorException [ 8 ]: Undefined index: rate_rate_satisfaction ~ APPPATH\classes\controller\Crm.php [ 83 ]
2013-10-07 00:43:35 --- STRACE: ErrorException [ 8 ]: Undefined index: rate_rate_satisfaction ~ APPPATH\classes\controller\Crm.php [ 83 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(83): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(45): Controller_Crm->get_statistics_satisfaction()
#2 [internal function]: Controller_Crm->action_yesno()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 01:29:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Crm::select_rate_feedbacks() ~ APPPATH\classes\controller\Crm.php [ 36 ]
2013-10-07 01:29:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Crm::select_rate_feedbacks() ~ APPPATH\classes\controller\Crm.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 01:31:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: rate_feedbacks ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
2013-10-07 01:31:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: rate_feedbacks ~ APPPATH\views\CRM\admin\dashboard.php [ 175 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(175): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(50): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-07 02:22:48 --- ERROR: ErrorException [ 8 ]: Undefined index: rate_business ~ APPPATH\views\CRM\admin\dashboard.php [ 179 ]
2013-10-07 02:22:48 --- STRACE: ErrorException [ 8 ]: Undefined index: rate_business ~ APPPATH\views\CRM\admin\dashboard.php [ 179 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(179): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 179, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(51): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-07 02:23:39 --- ERROR: ErrorException [ 8 ]: Undefined index: rate_business ~ APPPATH\views\CRM\admin\dashboard.php [ 179 ]
2013-10-07 02:23:39 --- STRACE: ErrorException [ 8 ]: Undefined index: rate_business ~ APPPATH\views\CRM\admin\dashboard.php [ 179 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\dashboard.php(179): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 179, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(51): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Crm->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-07 03:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/export_survey was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-07 03:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/export_survey was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 04:04:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '", d Y - H:i:s"' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\controller\Crm.php [ 28 ]
2013-10-07 04:04:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '", d Y - H:i:s"' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\controller\Crm.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 04:22:47 --- ERROR: HTML2PDF_exception [ 3 ]: ERRO n°3 : Código HTML não válido, uma tag está com fechamento sobrando : &lt;body&gt; HTML : ...'
		}
	});
});


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 117 ]
2013-10-07 04:22:47 --- STRACE: HTML2PDF_exception [ 3 ]: ERRO n°3 : Código HTML não válido, uma tag está com fechamento sobrando : &lt;body&gt; HTML : ...'
		}
	});
});


... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_class\parsingHtml.class.php [ 117 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(407): HTML2PDF_parsingHtml->parse()
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(50): View_PDF->render()
#3 [internal function]: Controller_Crm->action_export_survey()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-07 04:23:38 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-10-07 04:23:38 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1246): HTML2PDF->_setNewPage()
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(50): View_PDF->render()
#7 [internal function]: Controller_Crm->action_export_survey()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-07 04:25:42 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. HTML : ...div>
	


$(document).ready(function(){... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-10-07 04:25:42 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. HTML : ...div>
	


$(document).ready(function(){... ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#3 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(41): View_PDF->render()
#4 [internal function]: Controller_Crm->action_export_survey()
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-07 04:25:56 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-10-07 04:25:56 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;SCRIPT&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_SCRIPT (para abrí-la) e c_SCRIPT (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1246): HTML2PDF->_setNewPage()
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#6 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(50): View_PDF->render()
#7 [internal function]: Controller_Crm->action_export_survey()
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#12 {main}
2013-10-07 04:39:54 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php on line 315 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
2013-10-07 04:39:54 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Account::get_account_name(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php on line 315 and defined ~ APPPATH\classes\model\Account.php [ 10 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Account.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(315): Model_Account->get_account_name('geo@yahoo.com')
#2 [internal function]: Controller_Crm->action_inquiries_dashboard()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 04:43:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method View_PDF::select_inquiry_products() ~ APPPATH\classes\controller\Crm.php [ 359 ]
2013-10-07 04:43:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method View_PDF::select_inquiry_products() ~ APPPATH\classes\controller\Crm.php [ 359 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 04:52:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 52163 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php [ 10442 ]
2013-10-07 04:52:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 52163 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php [ 10442 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php(10442): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 10442, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php(3371): TCPDF->utf8Bidi(Array, '?[??=????v7??7?...', false)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php(4332): TCPDF->GetStringWidth('?[??=????v7??7?...')
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\_tcpdf_5.0.002\tcpdf.php(4068): TCPDF->getCellCode(110.60288888889, 3.81, '?[??=????v7??7?...', 0, 0, 'L', false, '', 0, false, 'T', 'M')
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(3343): TCPDF->Cell(110.60288888889, 3.81, '?[??=????v7??7?...', 0, 0, 'L', false, '')
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_WRITE(Array)
#6 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#7 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(854): HTML2PDF->_setNewPositionForNewLine(169)
#8 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1290): HTML2PDF->_setNewLine(3.81, 169)
#9 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(3440): HTML2PDF->_makeBreakLine(3.81, 169)
#10 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(3375): HTML2PDF->_tag_open_BR(Array, 169)
#11 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_WRITE(Array)
#12 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#13 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#14 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#15 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(360): View_PDF->render()
#16 [internal function]: Controller_Crm->action_inquiry_report()
#17 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#18 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#20 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#21 {main}