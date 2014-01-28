<?php
defined ( 'SYSPATH' ) or die ( "No direct script access." );
class Controller_Login extends Controller {
	public $obj = array ();
	public $ins = array ();
	public $titlePage = "LOGIN - Cargo Stellar Movers Inc.";
	public $controller_datas = array ();
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		$this->obj ['forms'] = new Forms ();
		$this->obj ['messages'] = new Messages ();
		$this->obj ['webstructure'] = new Webstructure ();
		$this->obj ['account'] = new Model_Account ();
	}
	public function action_index() {
		// Cache Control
		$this->no_cache ();
		
		// Start - Validates current Sessions
		
		if (Session::instance ()->get ( 'hr_id' ) != null && Session::instance ()->get ( 'hr_sess' ) != null) {
			echo "<script>self.location='" . URL::site ( null, null, false ) . "ems/hr_dashboard';</script>";
		}
		
		if (Session::instance ()->get ( md5 ( 'ems' ) . 'admin_id' ) != null && Session::instance ()->get ( md5 ( 'ems' ) . 'admin_sess' )) {
			echo "<script>self.location='" . URL::site ( null, null, false ) . "ems/admin_dashboard';</script>";
		}
		
		if (Session::instance ()->get ( 'pms_id' ) != null && Session::instance ()->get ( 'pms_sess' ) != null) {
			echo "<script>self.location='" . URL::site ( null, null, false ) . "pms/personnel_dashboard';</script>";
		}
		// END - Validates current Sessions
		
		if (Arr::get ( $_GET, 'msg' ) == hash ( 'sha256', 'wrongpass' )) {
			$msg = "<div style='background: #ff6666; color: #990000; font-size: 16px ;padding: 2px; border: 1px solid #cc0000;font-style:bold;'>Password entry was wrong.</div>";
		} elseif (Arr::get ( $_GET, 'msg' ) == hash ( 'sha256', 'noacc' )) {
			$msg = "<div style='background: #ff6666; color: #990000; font-size: 16px ;padding: 2px; border: 1px solid #cc0000;font-style:bold;'>Account does not exists in the database.</div>";
		} else {
			$msg = null;
		}
		
		$presentation_tier = View::factory ( "login_form" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ();
		$presentation_tier->message_login = $msg;
		
		$this->response->body ( $presentation_tier);
	}
	function action_validate() {
		$this->no_cache ();

		$inputs = array ();
		
		if ($this->request->query ( 'username' ) != null && $this->request->query ( 'pass' ) != null) {
			$inputs ['prefix'] = strtolower ( $this->get_array_element ( explode ( "_", $this->request->query ( 'username' ) ), 0 ) );
			$inputs ['username'] = $this->get_array_element ( explode ( "_", $this->request->query ( 'username' ) ), 1 );
			$inputs ['password'] = (! empty ( SHA1 ( $this->request->query ( 'pass' ) ) )) ? SHA1 ( $this->request->query ( 'pass' ) ) : false;
		} else {
			$inputs ['prefix'] = strtolower ( $this->get_array_element ( explode ( "_", $this->request->post ( 'tmc_username' ) ), 0 ) );			
			$inputs ['username'] = $this->get_array_element ( explode ( "_", $this->request->post ( 'tmc_username' ) ), 1 );
			$inputs ['password'] = (! empty ( SHA1 ( $this->request->post ( 'tmc_password' ) ) )) ? SHA1 ( $this->request->post ( 'tmc_password' ) ) : false;
		}
		
		if ($inputs ['prefix'] == "tms" || $inputs ['prefix'] == "TMS") { // if prefix is Customer Relation Management System
			if ($this->obj ['account']->get_counted_users ( $inputs ) == 1) {
				$check_user_password = (count ( $this->obj ['account']->get_account_info ( $inputs ) ) > 0) ? true : false;
				if ($check_user_password == true) {
					if (Valid::email ( $inputs ['username'] )) {
						// Update Embuscado December 3
						$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
						
						Session::instance ()->set ( 'tms_clerk_id', 1 );
						Session::instance ()->set ( 'tms_clerk_sess', $inputs ['username'] );
						echo "<script>self.location='" . URL::site ( null, null, false ) . "tms/clerk_dashboard';</script>";
					} else {
						if (count ( explode ( "-", $inputs ['username'] ) ) > 0) {
							// Admin side of CRM login
							$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
							
							Session::instance ()->set ( md5 ( 'tms' ) . 'admin_id', 1 );
							Session::instance ()->set ( md5 ( 'tms' ) . 'admin_sess', $inputs ['username'] );
							echo "<script>self.location='" . URL::site ( null, null, false ) . "tms/admin_dashboard';</script>";
						} else {
							$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
						}
					}
				} else {
					$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'wrongpass' ) );
				}
			} else if ($this->obj ['account']->get_counted_users ( $inputs ) == 0) {
				$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
			}
		} else if ($inputs ['prefix'] == "ems" || $inputs ['prefix'] == "EMS") {
			if ($this->obj ['account']->get_counted_users ( $inputs ) == 1) {
				$check_user_password = (count ( $this->obj ['account']->get_account_info ( $inputs ) ) > 0) ? true : false;
				if ($check_user_password == true) {
					if (Valid::email ( $inputs ['username'] )) {
						// Employee-Sales Office side login of EMS system
						// Update Embuscado December 3
						$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
						
						Session::instance ()->set ( 'hr_id', 1 );
						Session::instance ()->set ( 'hr_sess', $inputs ['username'] );
						echo "<script>self.location='" . URL::site ( null, null, false ) . "ems/hr_dashboard';</script>";
					} else {
						if (count ( explode ( "-", $inputs ['username'] ) ) > 0) {
							// Admin side of CRM login
							// Update Embuscado December 3
							$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
							
							Session::instance ()->set ( md5 ( 'ems' ) . 'admin_id', 1 );
							Session::instance ()->set ( md5 ( 'ems' ) . 'admin_sess', $inputs ['username'] );
							echo "<script>self.location='" . URL::site ( null, null, false ) . "ems/admin_dashboard';</script>";
						} else {
							$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
						}
					}
				} else {
					$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'wrongpass' ) );
				}
			} else if ($this->obj ['account']->get_counted_users ( $inputs ) == 0) {
				$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
			}
		} else if ($inputs ['prefix'] == "pms" || $inputs ['prefix'] == "PMS") {
			if ($this->obj ['account']->get_counted_users ( $inputs ) == 1) {
				$check_user_password = (count ( $this->obj ['account']->get_account_info ( $inputs ) ) > 0) ? true : false;
				if ($check_user_password == true) {
					if (Valid::email ( $inputs ['username'] )) {
						// Employee-Sales Office side login of EMS system
						// Update Embuscado December 3
						$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
						
						Session::instance ()->set ( 'pms_id', 1 );
						Session::instance ()->set ( 'pms_sess', $inputs ['username'] );
						echo "<script>self.location='" . URL::site ( null, null, false ) . "pms/personnel_dashboard';</script>";
					} else {
						if (count ( explode ( "-", $inputs ['username'] ) ) > 0) {
							// Admin side of CRM login
							// Update Embuscado December 3
							$this->obj ['account']->get_audit ( $inputs ['username'], $this->audit_trail ['login'] );
							
							Session::instance ()->set ( md5 ( 'pms' ) . 'admin_id', 1 );
							Session::instance ()->set ( md5 ( 'pms' ) . 'admin_sess', $inputs ['username'] );
							echo "<script>self.location='" . URL::site ( null, null, false ) . "pms/admin_dashboard';</script>";
						} else {
							$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
						}
					}
				} else {
					$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'wrongpass' ) );
				}
			} else if ($this->obj ['account']->get_counted_users ( $inputs ) == 0) {
				$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
			}
		} else if ($inputs ['prefix'] == "MIS" || $inputs ['prefix'] == "mis") {
			if (strtolower ( $inputs ['username'] ) == 'admin') {
				echo "<script>self.location='" . URL::site ( null, null, false ) . "admin/mis_homepage';</script>";
			} else {
				$this->request->redirect ( 'login?msg=' . hash ( 'sha256', 'noacc' ) );
			}
		} else if($inputs['prefix'] == "emp" || $inputs['prefix'] == "EMP"){
			$counted_emp = $this->obj['account']->checking_extist_emp($inputs['username'], $this->request->post ( 'tmc_password' ));
			if($counted_emp > 0){
				$employee_acc = $this->obj['account']->get_employee_account($inputs['username'], $this->request->post('tmc_password'));
				Session::instance()->set(md5('employeeID_Acc'), $employee_acc[0]['employee_id']);
				$this->request->redirect(URL::site('ems/employee_home',null,false));
			} else {
				$this->request->redirect('login?msg=' . hash('sha256', 'noacc'));
			}
		}
	}
}
