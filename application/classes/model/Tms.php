<?php
class Model_Tms extends Model_Database {
	public function addDeliverSched($data = array()){
		DB::query(DATABASE::INSERT, "INSERT INTO tms_delivers VALUES(
				null,'".$data['receiver']."','".$data['date_receiving']."',
				NOW(),'".$data['details']."')")->execute();
	}
	public function selectDeliverRecords(){
		return DB::query(DATABASE::SELECT, "SELECT d.*, ds.* FROM tms_delivers d JOIN tms_delivery_status ds ON d.`delivery_stat` = ds.`deliver_stat`")->execute()->as_array();
	}
	public function selectDeliveryRecord($delivery_id){
		return DB::query(DATABASE::SELECT, "SELECT d.*, ds.* FROM tms_delivers d JOIN tms_delivery_status ds ON d.`delivery_stat` = ds.`deliver_stat` where d.`deliver_id` = '".$delivery_id."'")->execute()->as_array();
	}
}
