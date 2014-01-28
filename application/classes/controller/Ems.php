<?php ini_set ( "display_errors", true );
defined ( 'SYSPATH' ) or die ( "No direct script is allowed." );
class Controller_Ems extends Controller {
	public $obj = array();
	public function __construct(Request $request, Response $response){
		parent::__construct($request, $response);
		// Misc. Classes
		$this->obj['webstructure'] = new Webstructure();
		$this->obj['response'] = Response::factory();
		
		// Core Models
		$this->obj['acc_logic'] = new Model_Account();
		$this->obj['ems_logic'] = new Model_Ems();
	}
	// START - VAlidation of Applicant's entry
	public function action_validate_applicant(){
		$popup_message = array();
		$datas = array(
			'Firstname'		=> $this->validate_applicant_name(array($this->request->post("Firstname"), "Firstname")),
			'Middlename'	=> $this->validate_applicant_name(array($this->request->post("Middlename"),"Middlename")),
			'Lastname'		=> $this->validate_applicant_name(array($this->request->post("Lastname"),"Lastname")),
			'Address'		=> $this->request->post("address"),
			'mobile'		=> $this->validate_mobile($this->request->post("mobile_contact")),
			'email'			=> Valid::email($this->request->post("Email")) ? $this->request->post("Email") : "Invalid <b>Email</b> Entry. ",
			'time_reach'	=> $this->validate_time_reach($this->request->post("time_reach")),
			'position'		=> $this->validate_position($this->request->post("position")),
			'birthday'	=>  $this->request->post("birthday"),
			'file_resume'	=> (empty($_FILES['resume']['name'])) ? "Please upload your <b>File Resume</b>. " : $this->validate_file_resume($_FILES)
		);
		
		if(strpos(implode(" ", $datas), "Invalid") !== false){			
			$popup_message['Firstname']		= (strpos($datas['Firstname'], "<b>") !== false) ? $datas['Firstname'] : null;
			$popup_message['Middlename']	= (strpos($datas['Middlename'], "<b>") !== false) ? $datas['Middlename'] : null;
			$popup_message['Lastname'] 		= (strpos($datas['Lastname'], "<b>") !== false) ? $datas['Lastname'] : null;
			$popup_message['Address']		= (strpos($datas['Address'], "<b>") !== false) ? $datas['Address'] : null;
			$popup_message['mobile']		= (strpos($datas['mobile'], "<b>") !== false) ? $datas['mobile'] : null;
			$popup_message['email']			= (strpos($datas['email'], "<b>") !== false) ? $datas['email'] : null;
			$popup_message['time_reach']	= (strpos($datas['time_reach'], "<b>") !== false) ? $datas['time_reach'] : null;
			$popup_message['position']		= (strpos($datas['position'], "<b>") !== false) ? $datas['position'] : null ;
			$popup_message['birthday']	= (strpos($datas['birthday'], "<b>") !== false) ? $datas['date_start'] : null;
			$popup_message['file_resume']	= (strpos($datas['file_resume'], "<b>") !== false) ? $datas['file_resume'] : null;
			
			Session::instance()->set('applicant_msg', "<tr><td class='label' style='background:#FF4C4C;color:#B30000;' colspan='6'>". implode($popup_message) . "</td></tr>");
			$this->request->redirect('careers?invalid_inputs=true&code='.sha1('false'.date('Y-m-j;H;i;s')));
		} else {
			$resume = Validation::factory($_FILES);
			$this->obj['ems_logic']->save_applicant($datas, $resume['resume']['name']);
			Upload::save($resume['resume'], $resume['resume']['name'], "resumes");
			Session::instance()->set('applicant_msg', "<tr><td class='label' style='background:#98ff98;color:#0C6E23;text-align:center;' colspan='6'><b>Your application entry has been submitted.</b></td></tr>");
			$this->request->redirect('careers?valid_inputs=true&code='.sha1('true'.date('Y-m-j;H;i;s')));
		}
	}
	public function validate_applicant_name($datas = array()){
		return (Valid::alpha($datas[0])) ? $datas[0] : "Invalid Entry of <b>" . $datas[1] . "</b>. ";
	}
	public function validate_address($address = null){
		return (count(explode(",", $address)) >= 2) ? $address : "Invalid <b>Address</b> input. ";
	}
	public function validate_date($date = null){
		return (count(explode("-",$date)) >= 3) ? $date : "Invalid <b>Date input</b>. " ;
	}
	public function validate_mobile($mobile = null){
		if(strlen($mobile) == 11){
			if(Valid::numeric($mobile)){
				return $mobile;
			} else {
				return "Invalid <b>mobile number</b> input. ";
			}
		} else {
			return "Invalid <b>Mobile Number</b> input. ";
		}
	}
	public function validate_position($position = null){
		if($position == null){
			return "Please enter your <b>Position</b>. "; 
		} else if($position != null){
			if(count(explode(" ", $position)) > 0){
				foreach(explode(" ", $position) AS $position_pieces){
					if(!Valid::alpha($position_pieces)){
						return "Invalid entry of <b>Position</b>. "; break;
					}
				}
				return $position;
			} else if(count(explode(" ", $position)) == 0){
				if(Valid::alpha($position)){
					return $position;
				}
				return "Invalid entry of <b>Position</b>. ";
			}
		}
	}
	public function validate_file_resume($FILES = array()){
		$resume = Validation::factory($FILES);
		if(in_array(explode(".",$resume['resume']['name'])[1], array("doc","docx","odt","pdf"))){
 			//Upload::save($resume['resume'], $resume['resume']['name'], "resumes");
			return $resume['resume']['name'];
		} else {
			return "Invalid <b>File Format</b> of your resume. ";
		}
	}
	public function validate_time_reach($time_reach = null){
		return (in_array($time_reach, array("morning","afternoon","evening","night")) == true) ? $time_reach : "Invalid selection of <b>Time of Reach</b>, Please select a valid time of reach. ";
	}
	// ENd of validation of Appplicant entry
	public function action_add_employee_form(){
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/hr/add_applicant" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		$presentation_tier->applicant_response = null;
		
		$presentation_tier->positions = $this->obj['ems_logic']->get_position_department();
		
		$this->response->body($presentation_tier);
	}
	public function action_admin_add(){
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/admin/add_applicant" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Admin Homepage" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->applicant_response = null;
		
		$presentation_tier->positions = $this->obj['ems_logic']->get_position_department();
		
		$this->response->body($presentation_tier);
	}
	public function action_hr_dashboard(){ //Current work
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT')
		);
		// validates session
		if(Session::instance()->get('hr_id') == null && Session::instance()->get('hr_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/hr/dashboard" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_hr_navigation () );
		
		// Model Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get('hr_sess'), "ems");
		$presentation_tier->applicants = $this->obj['ems_logic']->get_applicants();
		$presentation_tier->employee_statuses = array(""=>"",1=>"Active",2=>"Inactive");
		$presentation_tier->sort_queries = array(
				"name" => array("","Firstname - ASC","Firstname - DESC","Lastname - ASC","Lastname - DESC"),
				"position"=>array("","ASC","DESC"),
				"department"=>array("","ASC","DESC"),
				"type"=>array("","ASC","DESC"),
				"date"=>array("","ASC","DESC")
		);
		
		$filter_datas = array(
			"name"=>$this->request->query('name'),
			"position"=>$this->request->query('position'),
			"department"=>$this->request->query('department'),
			"type"=>$this->request->query('type'),
			"date"=>$this->request->query('date'),
			"status"=>$this->request->query('status'),
			"search_query" => null
		);

		$presentation_tier->filter_data = $filter_datas;
		$presentation_tier->employees = $this->obj['ems_logic']->get_employees($filter_datas);
		$presentation_tier->positions = $this->obj['ems_logic']->get_positions();
		
		// Renders Template
		$this->response->body($presentation_tier);
	}
	public function action_set_applicant_schedule(){
            if($this->request->post('schedule') == null){
                echo 0;
            } else {
		$data = array();
		$data['applicant'] = $this->request->post('applicant');
		$data['schedule_date'] = date_format(date_create($this->request->post('schedule')), "Y-m-d");
		$data['schedule_time'] = date("H:i",strtotime($this->request->post('schedule')));//date_format(date_create($this->request->post('schedule')),"YYY-MM");
		$this->obj['ems_logic']->set_applicant_schedule($data);
//		print_r($data);
                echo 1;
            }
	}
	public function action_update_employee(){
		$datas = array();
		$msg = null;
		
		if(Valid::alpha_numeric($this->request->post('emp_id'))){
			$datas['employee_id'] = $this->request->post('emp_id');
		} else {
			$msg .= "Invalid Employee number.";
		}
		
		if(Valid::alpha($this->request->post('fname'), true)){
			$datas['firstname'] = $this->request->post('fname');
		} else {
			$msg .= "Firstname entry is not valid. " ;
		}
		
		if(Valid::alpha($this->request->post('mname'), true)){
			$datas['middlename'] = $this->request->post('mname');
		} else {
			$msg .= "Middlename entry is not valid. ";
		}
		
		if(Valid::alpha($this->request->post('lname'), true)){
			$datas['lastname'] = $this->request->post('lname');
		} else {
			$msg.="Lastname entry is not valid. ";
		}
		
		$datas['position'] = $this->request->post('position');

		if($msg == null){
			echo $this->obj['ems_logic']->update_employee($datas);
		} else {
			echo $msg;
		}
	}
	public function action_export_employees(){
		$filter_datas = array(
				"name"=>$this->request->query('name'),
				"position"=>$this->request->query('position'),
				"department"=>$this->request->query('department'),
				"type"=>$this->request->query('type'),
				"date"=>$this->request->query('date'),
				"date_modified"=>$this->request->query('date_modified'),
				"search_query"=>$this->request->query('search_query')
		);
		
		$this->obj['ems_logic']->get_audit(Session::instance()->get( md5('ems') . 'admin_sess'), $this->audit_trail['export_emps']);
		$presentation_tier = View_PDF::factory ( 'EMS/admin/employee_list_export', array (
				'title' => 'Export Employee Lists',
				'name' => 'employee_list_report.pdf'
		) )->set ( 'employees', $this->obj['ems_logic']->get_employees($filter_datas))->render ();
		exit ();
	}
	public function action_hr_logout(){
		// embuscado updated december 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get('hr_sess'),
				$this->audit_trail['logout']
		);
		Session::instance ()->delete ( 'hr_id' );
		Session::instance ()->delete ( 'hr_sess' );
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function action_submit_leave(){
// 		echo "<td colspan='2' style='background:#FF7373;color:#B30000;font-weight:bold;'>Error</td>";\
		$inputs = array();
		$inputs['employee_id'] = $this->request->post('employee_id');
		$inputs['mobile'] = $this->request->post('mobile');
		$inputs['address'] = $this->request->post('address');
		$inputs['leave_type'] = $this->request->post('leave_type');
		$inputs['date_leaving'] = $this->request->post('date_leaving');
		$inputs['no_of_days'] = $this->request->post('no_of_days');
		$inputs['reason'] = $this->request->post('reason');
		
		if($this->obj['ems_logic']->validate_leaves($inputs['employee_id']) >= 0){
			$this->obj['ems_logic']->send_leave($inputs);
			echo "<td style='background:#73FF73;color:#008C00;font-weight:bold;'>";
			echo "Request successfully submited.";
			echo "</td>";
		} else if($this->obj['ems_logic']->validate_leaves($inputs['employee_id']) ==0){
			echo "<td style='background:#FF7373;color:#B30000;font-weight:bold;'>Insuficient Leaves</td>";
		}
		
	}
	public function action_employee_home(){
		$presentation_tier = View::factory ( "ems/employee_module" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Employee Home" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_employee_nav() );
		$presentation_tier->employee_datas = $this->obj['ems_logic']->get_employee(Session::instance()->get(md5('employeeID_Acc')));

		$this->response->body($presentation_tier);
	}
	
	public function action_emp_leaves(){
		$presentation_tier = View::factory ( "ems/employee_leaves" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Employee Home" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_employee_nav() );
		$presentation_tier->employee_datas = $this->obj['ems_logic']->get_employee(Session::instance()->get(md5('employeeID_Acc')));
		
		$presentation_tier->employee_leaves = $this->obj['ems_logic']->get_leaves_by_employee(Session::instance()->get(md5('employeeID_Acc')));

		$this->response->body($presentation_tier);
	}
	public function action_admin_leaves(){
		$presentation_tier = View::factory ( "ems/admin/leaves" );
	
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "Leave Request" );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ($this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		
		$presentation_tier->employee_leaves = $this->obj['ems_logic']->get_employee_leaves();
		$this->response->body($presentation_tier);
	}
	public function action_approve_leave(){
		$leave_id = $this->request->post('leave_id');
		$this->obj['ems_logic']->approve_leave($leave_id);
	}
	public function action_reject_leave(){
		$leave_id = $this->request->post('leave_id');
		$this->obj['ems_logic']->reject_leave($leave_id);
	}
	public function action_employee_statistics(){
		$presentation_tier = View::factory('EMS/admin/employee_statistics');
		$presentation_tier->head = $this->obj ['webstructure']->head ( "General Manager Homepage");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		
		$presentation_tier->resigned_employee = $this->obj['ems_logic']->count_resigned_employees();
		$presentation_tier->active_employees = $this->obj['ems_logic']->count_active_employees();
		$presentation_tier->counted_drivers = $this->obj['ems_logic']->count_drivers();
		$presentation_tier->counted_delivery_men = $this->obj['ems_logic']->count_delivery_men();
		
		$this->response->body($presentation_tier);
	}
	public function action_print_statistics(){
		$presentation_tier = View::factory('EMS/admin/print_statistics');
		$presentation_tier->head = $this->obj ['webstructure']->head ( "HR Dashboard");
		$presentation_tier->time = $presentation_tier->time = date ( "l, " . ucfirst ( "F" ) . " d Y - g:i A" );
		$presentation_tier->statistics = array(
			
		);
		$this->response->body($presentation_tier);
	}
	public function action_admin_dashboard(){
		$this->obj['response']->headers(array(
				'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
				'Pragma'		=> 'no-cache',
				'Expires'		=>'Sat, 26 Jul 1997 05:00:00 GMT'));
		// validates session
		if(Session::instance()->get(md5('ems') . 'admin_id') == null && Session::instance()->get(md5('ems') . 'admin_sess') == null){
			echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
		}
		
		// Calls presentation page file
		$presentation_tier = View::factory ( "ems/admin/dashboard" );
		
		// Calls webstructure
		$presentation_tier->head = $this->obj ['webstructure']->head ( "General Manager Homepage");
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->ems_admin_navigation () );
		$presentation_tier->verify_applicant_form = ($this->request->query('applicant_form') != null) ? $this->constructApplicantForm($this->request->query("applicant_no")) : null;
		$presentation_tier->verify_applicant_form_script = ($this->request->query('applicant_form') != null) ? "$('#hiringModal').reveal();$('#birthdateApplicant').datepicker({maxDate:'0',minDate: new Date(1882, 10 - 1, 25),changeMonth:true,changeYear:true,dateFormat:'yy-mm-dd'});" : null;
		$presentation_tier->ajax_validate_hiree = ($this->request->query('applicant_form') != null) ? $this->obj['webstructure']->ajax_validate_applicant():null;
		
		// Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('ems').'admin_sess'), "ems");
		$presentation_tier->schduled_applicants = $this->obj['ems_logic']->get_applicants(1);
		$presentation_tier->employee_statuses = array(""=>"",1=>"Active",2=>"Inactive");
		
		$presentation_tier->sort_queries = array(
			"name" => array("","Firstname - ASC","Firstname - DESC","Lastname - ASC","Lastname - DESC"),
			"position"=>array("","ASC","DESC"),
			"department"=>array("","ASC","DESC"),
			"type"=>array("","ASC","DESC"),
			"date"=>array("","ASC","DESC"),
			"date_modified"=>array("","ASC","DESC")
		);
		
		$filter_datas = array(
			"name"=>$this->request->query('name'),
			"position"=>$this->request->query('position'),
			"department"=>$this->request->query('department'),
			"type"=>$this->request->query('type'),
			"date"=>$this->request->query('date'),
			"date_modified"=>$this->request->query('date_modified'),
			"search_query"=>$this->request->query('search_query'),
			"status"=>$this->request->query('status')
		);
		
		$presentation_tier->filter_data = $filter_datas;
		$presentation_tier->employees = $this->obj['ems_logic']->get_employees($filter_datas);
		$presentation_tier->job_positions = $this->obj['ems_logic']->get_position_department();
		// Renders Template
		$this->response->body($presentation_tier);
	}
	public function action_delete_applicant(){
		$this->obj['ems_logic']->delete_applicant($this->request->post('applicant_id'));
		// Embuscado Update December 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get( md5('ems') . 'admin_sess'),
				$this->audit_trail['delete_app']
		);
	}
	public function action_admin_logout(){
		// Embuscado update December 3
		$this->obj['ems_logic']->get_audit(
				Session::instance()->get(md5('ems').'admin_sess'),
				$this->audit_trail['logout']
		);
		Session::instance ()->delete ( md5('ems') . 'admin_id');
		Session::instance ()->delete ( md5('ems') . 'admin_sess' );
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function constructApplicantForm($applicant_no = 0){
		$data = array();
		$data = $this->obj['ems_logic']->get_applicant($applicant_no);
		$data['positions'] = $this->obj['ems_logic']->get_position();
		return $this->obj['webstructure']->applicantHiringForm($data);
	}
	public function action_delete_employee(){

		$employee_id = $this->request->post('employee_id');
		$employee = $this->obj['ems_logic']->get_employee($employee_id);

		if($employee[0]['status'] == 1){
			$value = 0;
		} else if($employee[0]['status'] == 0){
			$value = 1;
		}
		$this->obj['ems_logic']->delete_employee($employee_id, $value);
		$this->obj['ems_logic']->get_audit(
			Session::instance()->get(md5('ems').'admin_sess'),
			$this->audit_trail['remove_emp']
		);
	}
	public function action_validate_hiree(){
		$data = array(
				//'applicant_no' => $this->request->post('applicant_no'),
				'employee_code'=>$this->request->post('barcode_value'),
				'firstname'=>$this->request->post('firstname'),
				'middlename'=>$this->request->post('middlename'),
				'lastname'=>$this->request->post('lastname'),
				'address'=>$this->request->post('address'),
				'employee_type'=>$this->request->post('employee_type'),
				'position'=>$this->request->post('position'),
				'birthday'=>$this->request->post('birthday'),
				'mobile'=>$this->request->post('mobile'),
				'email'=>$this->request->post('email'),
				'marital_status'=>$this->request->post('marital_status')
		);

		$error_msg = null;
		
		if(!Valid::alpha($data['firstname'])){
			$error_msg .= "Invalid Firstname. ";
		}
		
		if(!Valid::alpha($data['middlename'])){
			$error_msg .= "Invalid Middlename. ";
		}
		
		if(!Valid::alpha($data['lastname'])){
			$error_msg .= "Invalid Lastname. ";
		}
		
		if($data['address'] == null){
			$error_msg .= "Invalid Address. ";
		}
		
		if($data['birthday'] == null){
			$error_msg .= "Invalid Birthdate input. ";
		} else {
			$data_pieces = explode("-", $data['birthday']);
			$applicants_age = date("Y") - $data_pieces[0];
			if($applicants_age < 18){
				$error_msg .= "This applicant is to young. ";
			}
		}

		if($error_msg != null){
			$error_sub_msg = $error_msg;
			$error_msg = null;
			echo "<td colspan='6' style='background:#FF7373;color:#B30000;font-weight:bold;'>" . $error_sub_msg . "</td>";
			$error_sub_msg = null;
		} else {
			echo "<td colspan='6' style='background:#73FF73;color:#008C00;font-weight:bold;'>";
			echo "Successfully Added to Employees Lists.";
			echo "</td>";
			echo "<script>self.location='".URL::site('ems/admin_dashboard',null,false)."';</script>";
			$this->add_employee($data);
		}
	}
	public function add_employee($data = array()){
		$this->obj['ems_logic']->add_employee($data);
		// Embuscado Update December 3
		$this->obj['ems_logic']->get_audit(Session::instance()->get(md5('ems') . 'admin_sess'), $this->audit_trail['hire_emp']);
	}
}
