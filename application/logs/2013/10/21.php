<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 00:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-10-21 00:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phone-icon-hi.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 00:27:13 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:13 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:25 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:25 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:31 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:31 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:43 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:43 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:43 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:43 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:43 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:43 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:44 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:44 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:44 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:44 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:45 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:45 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:27:45 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:27:45 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:28:30 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:28:30 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:28:32 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:28:32 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:28:55 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:28:55 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:34:07 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:34:07 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(272): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:34:40 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:34:40 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(270): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:36:06 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:36:06 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(271): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:36:47 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:36:47 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('kj4tKxauozIs',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(270): Model_Crm->get_inquiry_informations(Array, 'kj4tKxauozIs')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:44:55 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('vgH5jXek90B6',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:44:55 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('vgH5jXek90B6',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(270): Model_Crm->get_inquiry_informations(Array, 'vgH5jXek90B6')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:50:19 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('mXSHXEx9snrH',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 00:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-21 00:50:19 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO crm_inq_docs VALUES('mXSHXEx9snrH',now(), '0') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO crm...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Crm.php(13): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(271): Model_Crm->get_inquiry_informations(Array, 'mXSHXEx9snrH')
#3 [internal function]: Controller_Crm->action_validate_inquiry()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 00:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 00:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-10-21 00:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL crm/get_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 01:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL conditional_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-10-21 01:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL conditional_products_inquiry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 01:07:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: inquiry_code ~ APPPATH\classes\controller\Crm.php [ 275 ]
2013-10-21 01:07:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: inquiry_code ~ APPPATH\classes\controller\Crm.php [ 275 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Crm.php(275): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 275, Array)
#1 [internal function]: Controller_Crm->action_get_products_inquiry()
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Crm))
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-21 22:37:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: scheduled_applicants ~ APPPATH\views\EMS\admin\dashboard.php [ 26 ]
2013-10-21 22:37:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: scheduled_applicants ~ APPPATH\views\EMS\admin\dashboard.php [ 26 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\application\views\EMS\admin\dashboard.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(158): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Ems->action_admin_dashboard()
#7 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#8 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#11 {main}
2013-10-21 22:50:38 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31'
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 22:50:38 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31'
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(49): Model_Ems->save_applicant(Array, 'EmbuscadoResume...')
#3 [internal function]: Controller_Ems->action_validate_applicant()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 22:56:13 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 22:56:13 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(49): Model_Ems->save_applicant(Array, 'EmbuscadoResume...')
#3 [internal function]: Controller_Ems->action_validate_applicant()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 22:56:45 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 22:56:45 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(49): Model_Ems->save_applicant(Array, 'EmbuscadoResume...')
#3 [internal function]: Controller_Ems->action_validate_applicant()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-21 22:56:58 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-10-21 22:56:58 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ 
				INSERT INTO ems_applicants VALUES(NULL,
				'James',
				'Mandal',
				'Sardo',
				'80 shaw bouldvard, mandaluyong city',
				'09342342342',
				'aliasmohakaido@gmail.com',
				'night',
				'2013-10-31',
				'Data Entry',
				'EmbuscadoResume.doc');
				 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\xampp\htdocs\thesis_teresamarble\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, '??????INSERT IN...', false, Array)
#1 C:\xampp\htdocs\thesis_teresamarble\application\classes\model\Ems.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\thesis_teresamarble\application\classes\controller\Ems.php(49): Model_Ems->save_applicant(Array, 'EmbuscadoResume...')
#3 [internal function]: Controller_Ems->action_validate_applicant()
#4 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_teresamarble\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_teresamarble\index.php(109): Kohana_Request->execute()
#8 {main}