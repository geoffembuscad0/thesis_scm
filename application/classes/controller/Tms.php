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
// 		echo "<pre>";die(print_r($this->obj['tms_logic']->selectDeliverRecords()));
		$this->response->body($presentation_tier);
	}
	public function action_admin_logout(){
		echo "<script>self.location='" . URL::site ( 'login', true, false ) . "';</script>";
	}
	public function action_clerk_dashboard(){
		$this->titlePage = "Cargo Stellar Movers Incs. - Clerk Dashboard";
		// No-Cache Page
		$this->no_cache ();
		
		// Builds presentation tier
		$presentation_tier = View::factory ( "TMS/clerk/dashboard" );
		$presentation_tier->head = $this->obj ['webstructure']->head ( $this->titlePage );
		
		$presentation_tier->page_header = $this->obj ['webstructure']->page_header ( $this->obj ['webstructure']->tms_personnel_navigation () );
		$presentation_tier->account_name = $this->obj['acc_logic']->get_account_name(Session::instance ()->get ( 'tms_clerk_sess'), "tms");
		$presentation_tier->addDeliverySchedForm = $this->obj['webstructure']->add_delivery_sched_form();
		$presentation_tier->delivery_datas = $this->obj['tms_logic']->selectDeliverRecords();

		$this->response->body($presentation_tier);
	}
	public function action_add_deliver_schedule(){
		// tms_delivers
		$datas = array(
			'receiver'=>$this->request->post('receiver'),
			'date_receiving'=>date_format(date_create($this->request->post('date_receive')),"Y-m-d H:i:s"),
			'details'=>$this->request->post('details')
		);
		
		$this->obj['tms_logic']->addDeliverSched($datas);
		
		echo "<p style='background-color: #33FF99;color: #009933; border: green solid 1px; font-size:18px; font-weight:bold;padding-top:10px;padding-bottom:10px;'>Added Delivery Details Successfully.<p>";
		
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