<?php
class Model_Tms extends Model_Database {
	public function addDeliverSched($data = array()){
		DB::query(DATABASE::INSERT,  "INSERT INTO tms_delivers VALUES(NULL,'".$data['date_receiving']."',NOW(),'".$data['details']."',1, '".$data['employee_id']."','".$data['company']."','".$data['market']."')")->execute();
	}
	public function add_company($data = array()){
		DB::query(DATABASE::INSERT, "insert into tms_company values(null,'".$data['name']."',null,null)")->execute();
	}
	
	public function select_delivery_men(){
		return DB::query(DATABASE::SELECT, "SELECT e.* , da.* FROM ems_employee e JOIN tms_driver_availablity da ON e.`employee_id` = da.`employee_id` WHERE e.`status` = 1")->execute()->as_array();
	}
	public function get_company(){
		return DB::query(DATABASE::SELECT, "select * from tms_company")->execute()->as_array();
	}
	public function get_markets(){
		return DB::query(DATABASE::SELECT, "SELECt * FROM tms_marketplace")->execute()->as_array();
	}
	public function update_delivery($data = array()){
		DB::query(DATABASE::UPDATE, "update tms_delivers SET date_receiving = '".$data['date_receiver']."', details = '".$data['details']."', company_no = '".$data['client']."', market_no = '".$data['receiver']."' WHERE delivery_id = '".$data['delivery_id']."'")->execute();
	}
	public function add_market($data = array()){
		DB::query(DATABASE::INSERT, "insert into tms_marketplace values(null, '".$data['market']."', '".$data['address']."');")->execute();
	}
	public function selectDeliverRecords(){
		return DB::query(DATABASE::SELECT, "SELECT (select name from tms_marketplace where market_no = d.market_no) As marketplace, d.*, ds.* FROM tms_delivers d JOIN tms_delivery_status ds ON d.`delivery_stat` = ds.`deliver_stat`")->execute()->as_array();
	}
	public function selectDeliveryRecord($delivery_id){
	$sql = "SELECT d.*, ds.*,(SELECT NAME FROM tms_marketplace WHERE market_no = d.market_no) AS marketplace FROM tms_delivers d JOIN tms_delivery_status ds ON d.`delivery_stat` = ds.`deliver_stat` WHERE d.`deliver_id` = '".$delivery_id."'";
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function delete_delivery($delivery_id){
		DB::query(DATABASE::DELETE, "DELETE FROM tms_delivers where deliver_id = '".$delivery_id."'")->execute();
	}
}
