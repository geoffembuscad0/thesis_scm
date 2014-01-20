<?php
ini_set ( "display_errors", true );
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Model_Ems extends Model_Database {
	public function __construct(){	
	}
	
	public function save_applicant($datas = array(), $resume_file_name = null){
//		DB::query(DATABASE::INSERT, "INSERT INTO ems_applicants VALUES(NULL,'".$datas['Firstname']."','".$datas['Middlename']."','".$datas['Lastname']."','".$datas['Address']."','".$datas['mobile']."','".$datas['email']."','".$datas['time_reach']."','".$datas['date_start']."','".$datas['position']."',0,'".$datas['file_resume']."',null)")->execute();
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee VALUES(
				'".$data['employee_code']."',
				'".$data['firstname']."',
				'".$data['middlename']."',
				'".$data['lastname']."',
				'".$data['position']."',
				'".$data['employee_type']."',
				now(), '".$data['birthday']."',now());")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_locations VALUES('".$data['employee_code']."','".$data['address']."')")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_contact VALUES('".$data['employee_code']."','".$data['mobile']."',null,'".$data['email']."')")->execute();
	}
	public function get_applicants($approved = 0){
		$sql = null;
		if($approved > 0){
			$sql = "SELECT * FROM ems_applicants WHERE pending_status = 1 ORDER BY applicant_no DESC";
		} elseif($approved == 0) {
			$sql = "SELECT * FROM ems_applicants ORDER BY applicant_no DESC";
		}
		return DB::query(DATABASE::SELECT, $sql)->execute()->as_array();
	}
	public function set_applicant_schedule($data = array()){
		DB::query(DATABASE::UPDATE, "UPDATE ems_applicants SET pending_status = '1',interview_schedule = '".$data['schedule_date']." ".$data['schedule_time'].":00' WHERE applicant_no = '".$data['applicant']."'")->execute();
	}
	public function get_applicant($applicant_no = null){
		if($applicant_no != null){
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_applicants WHERE applicant_no = '".$applicant_no."'")->execute()->as_array();
		} else {
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_applicants")->execute()->as_array();
		}
	}
	public function get_employees($filter = array()){
		$sql = null;
		if($filter['search_query'] != null){
			$sql = "SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` WHERE
					LOWER(ems_employee.firstname) LIKE '%".$filter['search_query']."%' OR
					LOWER(ems_employee.middlename) LIKE '%".$filter['search_query']."%' OR
					LOWER(ems_employee.lastname) LIKE '%".$filter['search_query']."%' 
					";
		}else {
			$sql = "SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` ";
		}
		$filter_strings = array();

		if($filter['name'] == 1){
			$filter_strings[] = " ems_employee.firstname ASC ";
		} else if($filter['name']==2){
			$filter_strings[] = " ems_employee.firstname DESC ";
		} else if($filter['name'] == 3){
			$filter_strings[] = " ems_employee.lastname ASC ";
		} else if($filter['name'] == 4){
			$filter_strings[] = " ems_employee.lastname DESC ";
		}
		
		if($filter['position'] == 1){
			$filter_strings[] = " ems_positions.pos_name ASC ";
		} else if($filter['position']==2){
			$filter_strings[] = " ems_positions.pos_name DESC ";
		}
		
		if($filter['department'] == 1){
			$filter_strings[] = " ems_departments.dept_name ASC ";
		} else if($filter['name']==2){
			$filter_strings[] = " ems_departments.dept_name DESC ";
		}
		
		if($filter['type'] == 1){
			$filter_strings[] = " ems_employee.firstname ASC ";
		} else if($filter['type']==2){
			$filter_strings[] = " ems_employee.firstname DESC ";
		}
		
		if($filter['date'] == 1){
			$filter_strings[] = " ems_employee.date_added ASC ";
		} else if($filter['date'] == 2){
			$filter_strings[] = " ems_employee.date_added DESC ";
		}
		
		if(count($filter_strings) > 0){
			$sql .= " ORDER BY " . implode(",", $filter_strings);
		}
		
		$employees = array();
		$counter = 0;
		
		foreach(DB::query(DATABASE::SELECT, $sql)->execute()->as_array() AS $employee_data){
			$employees[$counter]['employee_id'] = $employee_data['employee_id'];
			$employees[$counter]['firstname'] = $employee_data['firstname'];
			$employees[$counter]['middlename'] = $employee_data['middlename'];
			$employees[$counter]['lastname'] = $employee_data['lastname'];
			$employees[$counter]['position_no'] = $employee_data['position_no'];
			$employees[$counter]['employee_type'] = $employee_data['employee_type'];
			$employees[$counter]['status'] = $employee_data['status'];
			$employees[$counter]['date_added'] = $employee_data['date_added'];
			$employees[$counter]['birthdate'] = $employee_data['birthdate'];
			$employees[$counter]['pos_name'] = $employee_data['pos_name'];
			$employees[$counter]['dept_no'] = $employee_data['dept_no'];
			$employees[$counter]['dept_name'] = $employee_data['dept_name'];
			$employees[$counter]['date_modified'] = $employee_data['date_modified'];
			$employees[$counter]['type'] = $employee_data['type'];
			$employees[$counter]['working_hours'] = $employee_data['working_hours'];
			$employees[$counter]['contact_infos'] = $this->get_emp_contact_information($employee_data['employee_id']);
			$employees[$counter]['location_infos'] = $this->get_emp_location($employee_data['employee_id']);
			$counter++;
		}
		return $employees;
	}
	public function get_emp_contact_information($employee_id){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_employee_contact WHERE employee_id = '".$employee_id."'")->execute()->as_array();
	}
	public function get_emp_location($employee_id){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_employee_locations WHERE employee_id = '".$employee_id."'")->execute()->as_array();
	}
	public function get_employee($employee_id){
		return DB::query(DATABASE::SELECT, "SELECT ems_employee.*,ems_positions.*,ems_departments.*,ems_employee_type.*,ems_employee_leave.* FROM ems_employee JOIN ems_employee_type ON ems_employee_type.`employee_type` = ems_employee.`employee_type` INNER JOIN ems_positions ON ems_positions.`position_no` = ems_employee.`position_no` INNER JOIN ems_departments ON ems_departments.`dept_no` = ems_positions.`dept_no` inner join ems_employee_leave on ems_employee.employee_id = ems_employee_leave.employee_id WHERE ems_employee.`employee_id` = '".$employee_id."'")->execute()->as_array();
	}
	public function send_leave($data = array()){
		DB::query(DATABASE::UPDATE, "update ems_employee_leave SET r_leaves = r_leaves - 1 WHERE employee_id = '".$data['employee_id']."'")->execute();
		DB::query(DATABASE::INSERT, "insert into ems_leaves values(null,'".$data['employee_id']."','".$data['leave_type']."','".$data['date_leaving']."','".$data['no_of_days']."','".$data['reason']."','0','".$data['address']."',now());")->execute();
	}
	public function approve_leave($leave_id){
		DB::query(DATABASE::UPDATE, "update ems_leaves set status = 1 where id = '".$leave_id."'")->execute();
	}
	public function reject_leave($leave_id){
		DB::query(DATABASE::UPDATE, "update ems_leaves set status = 2 where id = '".$leave_id."'")->execute();
	}
	public function get_employee_leaves(){
		return DB::query(DATABASE::SELECT, "SELECT e.firstname,e.`lastname`,e.`middlename`, el.*, ep.*,ed.*
FROM ems_employee e 
JOIN ems_leaves el ON e.`employee_id` = el.`employee_id`
JOIN ems_positions ep ON ep.`position_no` = e.`position_no`
JOIN ems_departments ed ON ed.`dept_no` = ep.`dept_no`
ORDER BY el.`date_requested` DESC")->execute()->as_array();
	}
	public function get_leaves_by_employee($employee_id){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_leaves WHERE employee_id = '".$employee_id."'")->execute()->as_array();
	}
	public function get_position_by_dept($dept_id){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_positions WHERE dept_no = '".$dept_id."'")->execute()->as_array();
	}
	public function get_position($position_no = null){
		if($position_no != null){
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_positions WHERE position_no = '".$position_no."'")->execute()->as_array();
		} else {
			return DB::query(DATABASE::SELECT, "SELECT * FROM ems_positions")->execute()->as_array();
		}
	}
	public function get_position_department(){
		return DB::query(DATABASE::SELECT, "SELECT p.*,dept.* FROM ems_positions p INNER JOIN ems_departments dept ON p.`dept_no`=dept.`dept_no`")->execute()->as_array();
	}
	public function add_employee($data = array()){
		//DB::query(DATABASE::DELETE,"DELETE FROM ems_applicants WHERE applicant_no = '".$data['applicant_no']."'")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee VALUES(
				'".$data['employee_code']."',
				'".$data['firstname']."',
				'".$data['middlename']."',
				'".$data['lastname']."',
				'".$data['position']."',
				'".$data['employee_type']."',
				now(), '".$data['birthday']."',now(),1);")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_locations VALUES('".$data['employee_code']."','".$data['address']."')")->execute();
		
		DB::query(DATABASE::INSERT, "INSERT INTO ems_employee_contact VALUES('".$data['employee_code']."','".$data['mobile']."',null,'".$data['email']."')")->execute();		
	}
	public function get_departments(){
		return DB::query(DATABASE::SELECT, "SELECT * FROM ems_departments")->execute()->as_array();
	}
	public function delete_applicant($applicant_id = null){
		DB::query(DATABASE::DELETE, "DELETE FROM ems_applicants WHERE applicant_no = '".$applicant_id."'")->execute();
	}
	public function delete_employee($employee_id, $val){
		$sql = "UPDATE ems_employee SET status = ".$val." WHERE employee_id = '".$employee_id."'";
// 		$sql = "DELETE FROM ems_employee WHERE employee_id = '".$employee_id."'";
		$query = DB::query(DATABASE::DELETE, $sql)->execute();
		return 1;
	}
	public function update_employee($datas = array()){
		$position_pieces = explode(" - ", $datas['position']);
		$sql = "UPDATE ems_employee SET date_modified = now(), firstname = '".$datas['firstname']."', middlename = '".$datas['middlename']."',lastname = '".$datas['lastname']."', position_no = (SELECT ems_positions.`position_no` FROM ems_positions WHERE ems_positions.`pos_name` LIKE '%".$position_pieces[1]."%') WHERE employee_id = '".$datas['employee_id']."'";
		DB::query(DATABASE::UPDATE, $sql)->execute();
		return 1;
	}
}
// geoffrey novemeber 21 updated