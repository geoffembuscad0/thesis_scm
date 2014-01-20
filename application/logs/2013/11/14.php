<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-14 02:42:46 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Ems.php on line 30 and defined ~ MODPATH\database\classes\kohana\db.php [ 42 ]
2013-11-14 02:42:46 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Ems.php on line 30 and defined ~ MODPATH\database\classes\kohana\db.php [ 42 ]
--
#0 C:\xampp\htdocs\thesis_cargostellarmovers\modules\database\classes\kohana\db.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\model\Ems.php(30): Kohana_DB::query('SELECT * FROM e...')
#2 C:\xampp\htdocs\thesis_cargostellarmovers\application\classes\controller\Ems.php(204): Model_Ems->get_ems_personels()
#3 [internal function]: Controller_Ems->action_admin_dashboard()
#4 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ems))
#5 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\thesis_cargostellarmovers\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\thesis_cargostellarmovers\index.php(109): Kohana_Request->execute()
#8 {main}