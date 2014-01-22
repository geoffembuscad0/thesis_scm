<?php
class Model_Pms extends Model {
	public function get_deduction($gross_pay){
		return DB::query(DATABASE::SELECT, "SELECT * FROM pms_deduction WHERE from_range <= ".$gross_pay." AND to_range >= " . $gross_pay . " ")->execute()->as_array();
	}
	public function get_employee_logs($emp_no){
		return DB::query(DATABASE::SELECT, "SELECT * from pms_attendance_monitoring WHERE emp_no = '".$emp_no."' AND 
		DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') AND 
		DATE_FORMAT(timeout, '%m') = DATE_FORMAT(NOW(), '%m') ORDER BY attend_no DESC")->execute()->as_array();
	}
	public function get_number_of_days_worked($employee_no){
		return DB::query(DATABASE::SELECT, "SELECT COUNT(*) AS days_worked FROM pms_attendance_monitoring WHERE emp_no = '".$employee_no."' AND 
		DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m') AND 
		DATE_FORMAT(timeout, '%m') = DATE_FORMAT(NOW(), '%m')")->execute()->as_array();
	}
	public function get_hours_differences($employee){
		$query  = DB::query(DATABASE::SELECT, "SELECT TIMESTAMPDIFF(HOUR, time_in, timeout) AS `diff` 
		FROM pms_attendance_monitoring
		WHERE emp_no = '".$employee."' AND DATE_FORMAT(time_in,'%m') = DATE_FORMAT(NOW(),'%m')
		AND DATE_FORMAT(timeout,'%m') = DATE_FORMAT(NOW(),'%m')")->execute()->as_array();
		return $query;
	}
	public function get_deduction_table(){
		return DB::query(DATABASE::SELECT, "SELECT * FROM pms_deduction ORDER BY from_range")->execute()->as_array();
	}
	public function update_deduction_data($data = array()){
		DB::query(DATABASE::UPDATE, "UPDATE pms_deduction SET sss = " . $data['sss'] . ",pagibig = " . $data['pagibig'] . ",philhealth = " . $data['philhealth'] . " WHERE deduction_no = '".$data['deduction_no']."'")->execute();
	}
	public function get_employee_rate($employee_id){
		$query= DB::query(DATABASE::SELECT, "SELECT ems_employee.*,
			ems_positions.*,pms_position_rate.*
			FROM ems_employee
			INNER JOIN ems_positions ON ems_employee.`position_no` = ems_positions.`position_no`
			INNER JOIN pms_position_rate ON pms_position_rate.`position_no` = ems_positions.`position_no`
			WHERE ems_employee.`employee_id` = '".$employee_id."'")->execute()->as_array();
		return $query[0]['rate'];
	}
	public function login_employee($employee_id ){
		DB::query(DATABASE::INSERT, "INSERT INTO pms_logged_employee VALUES('".$employee_id."')")->execute();
		// clears null employee ids
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
	}
	public function logout_employee($employee_id){
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id = '".$employee_id."'")->execute();
		// clears null employee ids
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
	}
	public function get_employees_rate(){
		return DB::query(DATABASE::SELECT, "SELECT e.*,ep.*,pr.* FROM ems_employee e JOIN pms_position_rate pr ON pr.`position_no` = e.`position_no` JOIN ems_positions ep ON ep.`position_no` = e.`position_no`")->execute()->as_array();
	}
	public function validate_employee_log($employee_id){
		$sql = "SELECT COUNT(*) AS existing_log FROM pms_logged_employee WHERE employee_id = '".$employee_id."'";
		$result = DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
		// clears null employee ids
		DB::query(DATABASE::DELETE, "DELETE FROM pms_logged_employee WHERE employee_id IS NULL")->execute();
		return $result[0]['existing_log'];
	}
	public function attendance_login($employee_id){
		$sql = "INSERT INTO pms_attendance_monitoring VALUES(NULL,'".$employee_id."',NOW(),NULL)";
		DB::query(DATABASE::INSERT, $sql)->execute();
	}
	public function attendance_logout($emp_no){
		$sql = "UPDATE pms_attendance_monitoring SET timeout = now() WHERE emp_no = '".$emp_no."' AND date_format(time_in,'%Y-%m-%d') = date_format(now(),'%Y-%m-%d')";
		DB::query(DATABASE::UPDATE, $sql)->execute();
	}
}
