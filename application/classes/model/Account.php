<?php defined('SYSPATH') or die("No direct access script.");
class Model_Account extends Model_Database {
	//embuscado update december 10
	public function getAllAudit(){
		$sql = "SELECT * FROM audit_trail ORDER BY audit_no DESC";
		$queryResult = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		return $queryResult;
	}
	// ems
	public function checking_extist_emp($fname, $lname){
		$sql = "SELECT count(*) AS no_emp fROM ems_employee WHERE lcase(firstname) = '".strtolower($fname)."' AND lcase(lastname) = '".strtolower($lname)."'";
		$query = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		return $query[0]['no_emp'];
	}
	public function get_employee_account($fname, $lname){
		$sql = "SELECT * fROM ems_employee WHERE lcase(firstname) = '".strtolower($fname)."' AND lcase(lastname) = '".strtolower($lname)."'";
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	// CRM side
	public function get_counted_users($inputs = array()){
		$queryResult = DB::query(DATABASE::SELECT, "SELECT COUNT(*) AS counted FROM ".$inputs['prefix']."_accounts WHERE username = '".$inputs['username']."'")->execute()->as_array();
		return $queryResult[0]['counted'];
	}
	public function get_account_info($inputs = array()){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ".$inputs['prefix']."_accounts JOIN user_levels ON ".$inputs['prefix']."_accounts.`user_lvl` = user_levels.`user_lvl`WHERE username = '".$inputs['username']."' AND user_password = '".$inputs['password']."'")->execute()->as_array();
	}
	public function get_account_name($username = null, $prefix){
		return DB::query(DATABASE::SELECT, "SELECT firstname,middlename,lastname FROM ".$prefix."_accounts WHERE username = '".$username."'")->execute()->as_array();
	}
	public function get_module_prefix($prefix = ''){
		return DB::query(DATABASE::SELECT, "SELECT module_prefix FROM module_prefixes WHERE module_prefix = '".$prefix."'")->execute()->as_array();
	}
public function get_admin_accounts($system_prefixes = array()){
		// Embuscado Update December 7 - Exclusive only for super Admin of MIS
		$data = array();
		$counter = 0;
		foreach($system_prefixes AS $sys_prefix){
			$fetched_datas[$counter] = DB::query(DATABASE::SELECT, "SELECT * FROM " . $sys_prefix  . "_accounts WHERE user_lvl = 1")->execute()->as_array();
			$fetched_datas[$counter][0]['module'] = $this->get_acc_module($sys_prefix);
			$fetched_datas[$counter][0]['module_acronymn'] = $sys_prefix; // Embuscado Update December 10
			$data[$counter]  = $fetched_datas[$counter];
			$counter++;
		}
		return $data;
	}
	public function get_acc_module($sys_prefix){
		$systems = array(
				"ems"=>"Employee Management System",
				"tms"=>"Tracking Management System",
				"crm"=>"Customer Relationship System",
				"tms"=>"Tracking Management System"
		);
	
		foreach($systems AS $system_index => $system_val){
			if($sys_prefix == $system_index){
				return $system_val;
			} else {
				// 				return null;
			}
		}
	}

}
