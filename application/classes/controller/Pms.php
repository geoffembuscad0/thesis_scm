<?php
ini_set ( "display_errors", true );
class Controller_Pms extends Controller {
	public $obj = array ();
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		// Misc. Classes
		$this->obj ['webstructure'] = new Webstructure ();
		$this->obj ['response'] = Response::factory ();
		// Core Models
		$this->obj ['acc_logic'] = new Model_Account ();
		$this->obj ['ems_logic'] = new Model_Ems ();
		$this->obj ['pms_logic'] = new Model_Pms ();
	}
	public function action_index() {
		$this->request->redirect ( "PMS/personnel_dashboard" );
	}
	public function action_attendance_monitoring() {
		$presentation_tier = View::factory ( "PMS/attendance_monitoring" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Attendance Monitoring" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ();
		$this->response->body ( $presentation_tier );
	}
	public function action_get_employee_log() {
		$employee_id = $this->request->post ( 'employee_id' );
		$employee_id = "00f924";
		$logs_content = file_get_contents ( URL::site ( "timesheet.txt", null, false ) );
		$logs_struct = explode ( "/", $logs_content );
		$logs_content .= $employee_id . "_" . date ( 'Y-m-d H:i:s' ) . "_ssslll";
		
		if ($this->request->post ( 'login' ) != null) {
			if ($this->obj ['pms_logic']->validate_employee_log ( $employee_id ) > 0) {
				$this->login_msg ( "It Seems that you're already logged in." );
			} else {
				$this->obj ['pms_logic']->login_employee ( $employee_id );
				$this->login_msg ( "Employee logged in successfully" );
				$logs_content = file_get_contents ( URL::site ( "timesheet.txt", null, false ) );
				$logs_content .= $employee_id . "_" . date ( 'Y-m-d H:i:s' ) . "_ssslll";
				file_put_contents ( URL::site ( 'timesheet.xt', null, false ), $logs_content );
			}
		}
		
		if ($this->request->post ( 'logout' ) != null) {
			if ($this->obj ['pms_logic']->validate_employee_log ( $employee_id ) > 0) {
				$this->obj ['pms_logic']->logout_employee ( $employee_id );
				$this->logout_msg ( "Employee Logged out successfully." );
			} else {
				$this->logout_msg ( "You're already logged out." );
				$timesheet_contents = explode ( "/", file_get_contents ( URL::site ( "timesheet.txt", null, false ) ) );
				$datas = array ();
				$counz = 0;
				foreach ( $timesheet_contents as $timesheet ) {
					$datas [$counz] = explode ( "_", $timesheet );
					$counz = $counz + 1;
				}
				$counting  = 0;
				foreach ( $datas as $data ) {
					if ($data [0] == $employee_id && date_format ( date_create ( $data [1] ), "Y-m-d" ) == "Y-m-d" && $data [2] == "ssslll") {
						$datas[$counting][2] = date("Y-m-d H:i:s");
						$counting++;
					}
					$newtimeeeeee = implode("_", $datas);
				}
				$newtiome = implode("_", $newtimeeeeee);
				file_put_contents ( URL::site ( 'timesheet.xt', null, false ), $newtiome );
			}
		}
	}
	public function action_admin_dashboard() {
		$this->request->headers ( 'CACHE-CONTROL', 'NO-CACHE' );
		$this->request->headers ( 'EXPIRES', date ( 'Y-m-d H:i:s' ) );
		$this->request->headers ( 'PRAGMA', 'NO-CACHE' );
		
		if (Session::instance ()->get ( md5 ( 'pms' ) . 'admin_id' ) == null && Session::instance ()->get ( md5 ( 'pms' ) . 'admin_sess' ) == null) {
			echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
		}
		
		$presentation_tier = View::factory ( "PMS/admin/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Payroll Admin Homepage" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->pms_admin_navigation () );
		
		$presentation_tier->account_name = null;
		$filter_datas = array (
				"name" => $this->request->query ( 'name' ),
				"position" => $this->request->query ( 'position' ),
				"department" => $this->request->query ( 'department' ),
				"type" => $this->request->query ( 'type' ),
				"date" => $this->request->query ( 'date' ),
				"date_modified" => $this->request->query ( 'date_modified' ),
				"search_query" => $this->request->query ( 'search_query' ) 
		);
		$presentation_tier->employees = $this->obj ['pms_logic']->get_employees_rate ();
		$this->response->body ( $presentation_tier );
	}
	public function action_admin_logout() {
		Session::instance ()->destroy ( md5 ( 'pms' ) . 'admin_id' );
		Session::instance ()->destroy ( md5 ( 'pms' ) . 'admin_sess' );
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function get_timelog_contents() { // Fetch All Time contents MISC Function
		$time_table = array ();
		$timesheet_contents = explode ( "/", file_get_contents ( URL::site ( "timesheet.txt", null, false ) ) );
		foreach ( $timesheet_contents as $time_pieces ) {
			$time_table [] [] = explode ( "_", $time_pieces );
		}
		return $time_table;
	}
	// public function action_test_script($employee_id = "00f924"){ // Testing Script
	// $time_table = array();
	// /*Function Reference in getting the query*/
	// $timesheet_contents = explode("/",file_get_contents(URL::site("timesheet.txt",null,false)));
	// echo "<pre>";
	// foreach($timesheet_contents AS $time_pieces){
	// if(strpos($time_pieces, date("Y-m")) !== false){
	// if($employee_id == $this->get_array_element(explode("_", $time_pieces),0)){
	// $time_table[][] = array(
	// $this->get_array_element(explode("_", $time_pieces),0),
	// $this->get_array_element(explode("_", $time_pieces),1),
	// $this->get_array_element(explode("_", $time_pieces),2),
	// 'hours_worked' => (strtotime($this->get_array_element(explode("_",$time_pieces),2)) - strtotime($this->get_array_element(explode("_",$time_pieces),1))) / (60 * 60),
	// 'OT_hours' => $this->validate_OT_hours((strtotime($this->get_array_element(explode("_",$time_pieces),2)) - strtotime($this->get_array_element(explode("_",$time_pieces),1))) / (60 * 60))
	// );
	// }
	// }
	// }
	// /*END of Function Ref*/
	// echo "<pre>";
	// print_r($time_table);
	// echo "Total Hours: ";
	// echo $this->get_employee_total_hours($employee_id);
	// echo "<br>";
	// echo "Total OT Hours: ";
	// echo $this->get_employee_total_OT_hours($employee_id);
	// } // YEAR DUDE!
	public function get_employee_logs($employee_id) {
		// Working! Gets All Employee's logs from his start
		$time_table = array ();
		$timesheet_contents = explode ( "/", file_get_contents ( URL::site ( "timesheet.txt", null, false ) ) );
		foreach ( $timesheet_contents as $time_pieces ) {
			if ($employee_id == $this->get_array_element ( explode ( "_", $time_pieces ), 0 )) {
				$time_table [] [] = array (
						$this->get_array_element ( explode ( "_", $time_pieces ), 0 ),
						$this->get_array_element ( explode ( "_", $time_pieces ), 1 ),
						$this->get_array_element ( explode ( "_", $time_pieces ), 2 ),
						'hours_worked' => (strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 2 ) ) - strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 1 ) )) / (60 * 60) 
				);
			}
		}
		return $time_table;
	}
	public function get_employee_monthly_records($employee_id = null) { // Gets Employee monthly TRANS
	                                                                   // Working
		$time_table = array ();
		$timesheet_contents = explode ( "/", file_get_contents ( URL::site ( "timesheet.txt", null, false ) ) );
		
		foreach ( $timesheet_contents as $time_pieces ) {
			if (strpos ( $time_pieces, date ( "Y-m" ) ) !== false) {
				if ($employee_id == $this->get_array_element ( explode ( "_", $time_pieces ), 0 )) {
					$time_table [] [] = array (
							$this->get_array_element ( explode ( "_", $time_pieces ), 0 ),
							$this->get_array_element ( explode ( "_", $time_pieces ), 1 ),
							$this->get_array_element ( explode ( "_", $time_pieces ), 2 ),
							'hours_worked' => (strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 2 ) ) - strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 1 ) )) / (60 * 60),
							'OT_hours' => $this->validate_OT_hours ( (strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 2 ) ) - strtotime ( $this->get_array_element ( explode ( "_", $time_pieces ), 1 ) )) / (60 * 60) ) 
					);
				}
			}
		}
		return $time_table;
	}
	public function get_employee_total_hours($employee_id = null, $all = false) { // working
		$total_hours = 0;
		if ($all == true) {
			foreach ( $this->get_employee_logs ( $employee_id ) as $datas ) {
				$total_hours += $datas [0] ['hours_worked'];
			}
		} elseif ($all == false) {
			foreach ( $this->get_employee_monthly_records ( $employee_id ) as $datas ) {
				$total_hours += $datas [0] ['hours_worked'];
			}
		}
		return $total_hours;
	}
	public function get_employee_total_OT_hours($employee_id = null, $all = false) {
		$total_ots = 0;
		if ($all == true) {
			foreach ( $this->get_employee_logs ( $employee_id ) as $datas ) {
				$total_ots += $datas [0] ['OT_hours'];
			}
		} elseif ($all == false) {
			foreach ( $this->get_employee_monthly_records ( $employee_id ) as $datas ) {
				$total_ots += $datas [0] ['OT_hours'];
			}
		}
		return $total_ots;
	}
	public function validate_OT_hours($hours_worked = 0) {
		$OT_hours = 0;
		if (floor ( $hours_worked ) > 8) {
			while ( floor ( $hours_worked ) > 8 ) {
				$OT_hours ++;
				$hours_worked --;
			}
		}
		return ($OT_hours > 0) ? $OT_hours : 0;
	}
	public function action_personnel_dashboard() {
		if (Session::instance ()->get ( 'pms_id' ) == null && Session::instance ()->get ( 'pms_sess' ) == null) {
			echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
		}
		
		$presentation_tier = View::factory ( "PMS/timekeeper/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Payroll Personnel Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->pms_personnel_navigation () );
		
		$presentation_tier->account_name = null;
		$filter_datas = array (
				"name" => $this->request->query ( 'name' ),
				"position" => $this->request->query ( 'position' ),
				"department" => $this->request->query ( 'department' ),
				"type" => $this->request->query ( 'type' ),
				"date" => $this->request->query ( 'date' ),
				"date_modified" => $this->request->query ( 'date_modified' ),
				"search_query" => $this->request->query ( 'search_query' ) 
		);
		$presentation_tier->employees = array ();
		foreach ( $this->obj ['ems_logic']->get_employees ( $filter_datas ) as $employee ) {
			$presentation_tier->employees [] = array (
					'employee_id' => $employee ['employee_id'],
					'firstname' => $employee ['firstname'],
					'middlename' => $employee ['middlename'],
					'lastname' => $employee ['lastname'],
					'position' => $employee ['position_no'],
					'pos_name' => $employee ['pos_name'],
					'department' => $employee ['dept_name'],
					'total_hours' => $this->get_employee_total_hours ( $employee ['employee_id'] ) 
			);
		}
		// echo "<pre>";print_r($presentation_tier->employees);die();
		$this->response->body ( $presentation_tier );
	}
	public function action_personnel_logout() {
		Session::instance ()->destroy ( 'pms_id' );
		Session::instance ()->destroy ( 'pms_sess' );
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function action_print_payslip() {
		$employee_id = null;
		if ($this->request->query ( 'employee_id' ) != null) {
			$employee_id = $this->request->query ( 'employee_id' );
		} else {
			trigger_error ( 'Employee Invalid!' );
		}
		
		$employee_name = null;
		$employee_type = null;
		$employee_dept = null;
		$employee_position = null;
		foreach ( $this->obj ['ems_logic']->get_employee ( $employee_id ) as $employee_data ) {
			$employee_name = $this->get_array_element ( $employee_data, 'lastname' ) . ", ";
			$employee_name .= $this->get_array_element ( $employee_data, 'firstname' ) . " ";
			$employee_name .= $this->get_array_element ( $employee_data, 'middlename' );
			$employee_dept = $this->get_array_element ( $employee_data, 'dept_name' );
			$employee_position = $this->get_array_element ( $employee_data, 'pos_name' );
			$employee_type = $this->get_array_element ( $employee_data, 'type' );
		}
		
		$employee_rate = null;
		foreach ( $this->obj ['pms_logic']->get_employee_rate ( $employee_id ) as $rate_datas ) {
			$employee_rate = $rate_datas ['rate'];
		}
		
		$total_hours_worked = $this->get_employee_total_hours ( $employee_id );
		$OT_hours = $this->get_employee_total_OT_hours ( $employee_id );
		$OT_rate = $employee_rate * 0.20; // 20% of employee rate per OT hour
		$OT_pay = $OT_rate * $OT_hours;
		$gross_pay = ($employee_rate * number_format ( $total_hours_worked )) + $OT_pay; // GROSS PAY AMOUNT
		                                                                              
		// Deductions
		$data_deductions = array ();
		$total_deduction = 0;
		foreach ( $this->obj ['pms_logic']->get_deductions () as $deduction ) {
			$total_deduction += $deduction ['rate'];
			$data_deductions [] = array (
					'label' => $deduction ['label'],
					'rate' => $deduction ['rate'] * 100 
			);
		}
		
		$net_deducted_value = 1 - $total_deduction;
		
		// Gets Total NET PAY
		$net_pay = $gross_pay * $net_deducted_value;
		
		// Renders Web Template into PDF file
		$presentation_tier = View_PDF::factory ( 'PMS/timekeeper/payslip', array (
				'title' => 'Employee Payslip',
				'name' => $employee_name . '_' . date ( 'm-d-Y' ) . '_EmployeePayslip.pdf' 
		) )->set ( 'employee_id', $employee_id )->set ( 'employee_name', $employee_name )->set ( 'employee_type', $employee_type )->set ( 'employee_position', $employee_position )->set ( 'employee_department', $employee_dept )->set ( 'employee_rate', $employee_rate )->set ( 'days_worked', count ( $this->get_employee_monthly_records ( $employee_id ) ) )->set ( 'total_hours_worked', $total_hours_worked )->set ( 'OT_hours', $OT_hours )->set ( 'data_deductions', $data_deductions )->set ( 'basic_salary', $employee_rate * number_format ( $total_hours_worked ) )->set ( 'OT_rate', number_format ( $employee_rate * .20, 2, '.', ',' ) )->set ( 'gross_pay', $gross_pay )->set ( 'net_value', $gross_pay * $net_deducted_value )->set ( 'date', date ( 'm/d/Y' ) )->render ();
		exit ();
	}
	public function login_msg($msg) {
		echo "<div style='backgrond:#43803d;color:#05316d;'>" . $msg . ".</div>";
	}
	public function logout_msg($msg) {
		echo "<div style='background:#5ea9d9;color:#2070a3;'>" . $msg . ".</div>";
	}
}
