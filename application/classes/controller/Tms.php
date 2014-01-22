<?php
class Controller_Tms extends Controller {
	public $obj = array();
	public $titlePage = null;
	public function __construct(Request $request, Response $response) {
		parent::__construct($request,$response);
		// Other classes
		$this->obj ['forms'] = new Forms ();
		$this->obj ['messages'] = new Messages ();
		$this->obj ['webstructure'] = new Webstructure ();
		// Models
		$this->obj ['tms_logic'] = new Model_Tms ();
		$this->obj ['acc_logic'] = new Model_Account ();
	}
	public function action_personnel_dashboard() {
		// Title Page
		$this->titlePage = "Cargo Stellar Movers Inc. - Personnel Dashboard";
		
		// No-Cache Page
		$this->no_cache ();
		
		// Builds presentation tier
		$presentation_tier = View::factory ( "TMS/admin/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->tms_personnel_navigation () );
	}
	public function action_personnel_logout(){
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function action_admin_dashboard(){
		// Title Page
		$this->titlePage = "Cargo Stellar Movers Inc. - Admin Personel Dashboard";
		
		// No-Cache Page
		$this->no_cache ();
		
		// Builds presentation tier
		$presentation_tier = View::factory ( "TMS/admin/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage );
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->tms_admin_dashboard () );
		$presentation_tier->addDeliverySchedForm = null;//$this->obj['webstructure']->add_delivery_sched_form();
		
		// Core Logics
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance()->get(md5('tms') . 'admin_sess'), "tms");
		$presentation_tier->delivery_datas = $this->obj['tms_logic']->selectDeliverRecords();

		$this->response->body($presentation_tier);
	}
	public function action_admin_logout(){
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function action_clerk_dashboard(){
		$this->titlePage = "Cargo Stellar Movers Incs. - Clerk Dashboard";
		// No-Cache Page
		$this->no_cache();
		
		// Builds presentation tier
		$presentation_tier = View::factory ( "TMS/clerk/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage );
		
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->tms_personnel_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance ()->get ( 'tms_clerk_sess'), "tms");
		
		$presentation_tier->available_drivers = $this->obj['tms_logic']->select_delivery_men();
		$presentation_tier->delivery_datas = $this->obj['tms_logic']->selectDeliverRecords();
		$presentation_tier->markets = $this->obj['tms_logic']->get_markets();
		$presentation_tier->companies  = $this->obj['tms_logic']->get_company();
		$this->response->body($presentation_tier);
	}
	public function action_update_delivery(){
		$data = array(
			"delivery_id"=>$this->request->post('deliver_id'),
			"receiver"=>$this->request->post('receiver'),
			"date_receiver"=>$this->request->post('date_receiver'),
			"details"=>$this->request->post('details'),
			"client"=>$this->request->post('company')
		);
		$this->obj['tms_logic']->update_delivery($data);
	}
	public function action_add_market(){
		$msg = array();
		$data = array();
		if($this->request->post('market')!=null){
			$data['market'] = $this->request->post('market');
		} else {
			$msg[] = "Name of mall or supermarket is required.";
		}
		
		if($this->request->post('address') != null){
			$data['address'] = $this->request->post('address');
		} else {
			$msg[] = "Address is required";
		}
		
		$data['employee_id']=$this->request->post('delivery_man');
		echo "<pre>";print_r($data);die();
		$msg = implode(" ", $msg);
		if(strpos($msg, "required")!==false){
			$msg = "<div style='background:#ff7373;color:#a60000;width: 100%;font-weight: 17px;'>" . $msg . "</div>";
		} else {
			$this->obj['tms_logic']->add_market($data);
			$msg = "<div style='background:#7ae969;color:#138900;font-weight: bold; width: 100%;'>Market has been successfully added.</div>";
		}
		echo $msg;		
	}
	public function action_employee_statistics(){
		
	}
	public function action_add_deliver_schedule(){

		$datas = array(
			'employee_id'=>$this->request->post('delivery_man'),
			'market'=>$this->request->post('receiver'),
			'date_receiving'=>date_format(date_create($this->request->post('date_receive')),"Y-m-d H:i:s"),
			'details'=>$this->request->post('details'),
			'company'=>$this->request->post('company')
		);

		$this->obj['tms_logic']->addDeliverSched($datas);
		
		echo "<p style='background-color: #33FF99;color: #009933; border: green solid 1px; font-size:18px; font-weight:bold;padding-top:10px;padding-bottom:10px;'>Added Delivery Details Successfully.<p>";
		
	}
	public function action_delete_delivery(){
		$this->obj['tms_logic']->delete_delivery($this->request->post('delivery_id'));
	}
	public function action_delivery_details(){
		$delivery_id = $this->request->query('delivery_id');
		
		$presentation_tier = View_PDF::factory('tms/admin/print_delivery',array (
				'title' => 'Delivery Details',
				'name' => 'delivery_details.pdf'
		) )
		->set ( 'delivery_details', $this->obj['tms_logic']->selectDeliveryRecord($delivery_id))
		->set('date',date('m-d-Y'))
		->render ();
		exit ();
	}
}