<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Controller_Contactus extends Controller {
	public $obj = array ();
	public $titlePage = "ABOUT - Teresa Marble Corporation";
	public function __construct(Request $request, Response $response) {
		parent::__construct ( $request, $response );
		$this->obj ['webstructure'] = new Webstructure (); // Webstructure is where your front-end includes are initialized and your navigation menu
	}
	
	// public function action_index()
	// {
	// $homepage = View::factory("Website/about");
	// $homepage->page_header = $this->obj['webstructure']->page_header($this->obj['webstructure']->site_navigation());
	// $homepage->head = $this->obj['webstructure']->head($this->titlePage);
	// $this->response->body($homepage);
	// }
	public function action_index() {
		$this->response->body ( "<h1>Page is still not available.</h1>" );
	}
}
