<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-12 13:07:48 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php on line 58 and defined ~ MODPATH\database\classes\kohana\db.php [ 42 ]
2013-10-12 13:07:48 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php on line 58 and defined ~ MODPATH\database\classes\kohana\db.php [ 42 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\db.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(58): Kohana_DB::query('SELECT * FROM c...')
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(18): Model_Crm->get_avg_scores()
#3 [internal function]: Controller_Crm->action_export_scores()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-12 13:10:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\model\Crm.php [ 60 ]
2013-10-12 13:10:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\model\Crm.php [ 60 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 60, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(19): Model_Crm->get_avg_scores()
#2 [internal function]: Controller_Crm->action_export_scores()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-12 13:14:28 --- ERROR: ErrorException [ 8 ]: Undefined index: average ~ APPPATH\classes\model\Crm.php [ 65 ]
2013-10-12 13:14:28 --- STRACE: ErrorException [ 8 ]: Undefined index: average ~ APPPATH\classes\model\Crm.php [ 65 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(19): Model_Crm->get_avg_scores()
#2 [internal function]: Controller_Crm->action_export_scores()
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-12 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/export_scores was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/export_scores was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 14:19:31 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-10-12 14:19:31 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(2334): HTML2PDF->_setNewPage(NULL, '', Array, NULL, false)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_PAGE(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#6 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<!DOCTYPE HTML>...')
#7 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(26): View_PDF->render()
#8 [internal function]: Controller_Crm->action_export_scores()
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-12 14:24:48 --- ERROR: ErrorException [ 8 ]: Undefined index: average_Score ~ APPPATH\views\CRM\admin\product_average_scores.php [ 23 ]
2013-10-12 14:24:48 --- STRACE: ErrorException [ 8 ]: Undefined index: average_Score ~ APPPATH\views\CRM\admin\product_average_scores.php [ 23 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\product_average_scores.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(26): View_PDF->render()
#5 [internal function]: Controller_Crm->action_export_scores()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-10-12 14:25:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:25:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<!DOCTYPE HTML>...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(26): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:26:23 --- ERROR: ErrorException [ 8 ]: Undefined index: product_no ~ APPPATH\views\CRM\admin\product_average_scores.php [ 20 ]
2013-10-12 14:26:23 --- STRACE: ErrorException [ 8 ]: Undefined index: product_no ~ APPPATH\views\CRM\admin\product_average_scores.php [ 20 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\CRM\admin\product_average_scores.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(74): Kohana_View->render(NULL)
#4 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(26): View_PDF->render()
#5 [internal function]: Controller_Crm->action_export_scores()
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#10 {main}
2013-10-12 14:26:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:26:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<!DOCTYPE HTML>...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(26): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:28:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:28:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:31:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:31:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:33:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:33:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:40:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:40:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('??<page>??<h1>T...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 14:41:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
2013-10-12 14:41:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 5132 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(5132): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 5132, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_TR(Array)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('??<page>??<h1>T...')
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#6 [internal function]: Controller_Crm->action_export_scores()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-12 15:26:35 --- ERROR: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
2013-10-12 15:26:35 --- STRACE: HTML2PDF_exception [ 1 ]: ERRO n°1 : A tag &lt;CENTER&gt; ainda não existe.Se você quer inserí-la, deve criar os métodos o_CENTER (para abrí-la) e c_CENTER (para fechá-la) seguindo o modelo das tags existentes.Se você criar novos métodos, os envie para webmaster@html2pdf.fr para que as próximas versões de HTML2PDF, e o restante do mundo se beneficie com isso. ~ MODPATH\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php [ 1251 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(897): HTML2PDF->_executeAction(Array)
#1 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(579): HTML2PDF->_setNewPositionForNewLine(NULL)
#2 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(2334): HTML2PDF->_setNewPage(NULL, '', Array, NULL, false)
#3 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1255): HTML2PDF->_tag_open_PAGE(Array)
#4 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(1226): HTML2PDF->_executeAction(Array)
#5 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\vendor\html2pdf\html2pdf\html2pdf.class.php(408): HTML2PDF->_makeHTMLcode()
#6 C:\xampp\htdocs\thesis_teresamarble\modules\html2pdf\classes\view\pdf.php(84): HTML2PDF->writeHTML('<style type="te...')
#7 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(25): View_PDF->render()
#8 [internal function]: Controller_Crm->action_export_scores()
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#10 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-12 18:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 18:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 18:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 18:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 18:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 18:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 18:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 18:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 18:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-12 18:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 18:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 18:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/text/javascript was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 22:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-12 22:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ems/yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 22:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-12 22:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL yahoo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-12 22:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resume/l4.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-12 22:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resume/l4.pdf ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-12 22:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resumes/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-12 22:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resumes/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}