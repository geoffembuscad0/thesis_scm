<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller extends Kohana_Controller {
	// Embuscado update december 3
	public $audit_trail = array(
			'login'			=> 'Logged In',
			'logout'		=> 'Logged Out',
			'hire_emp'		=> 'Hired Employee',
			'set_app_sched' => 'Set Applicant Schedule',
			'remove_emp'	=> 'Removed Employee',
			'add_app'		=> 'Added Applicant',
			'delete_app'	=> 'Deleted Applicant',
			'export_emps'	=> 'Export Employees',
			'update_emp'	=> 'Updated Employee',
			'export_scores' => 'Exported Product Scores',
			'export_surveys'=> 'Exported Surveys ratings',
			'export_stats'	=> 'Exported Business Statistics'
	);
	
	public function no_cache()
	{
		// Embuscado Added function
		$this->request->headers('CACHE-CONTROL','NO-CACHE');
		$this->request->headers('EXPIRES', date('Y-m-d H:i:s'));
		$this->request->headers('PRAGMA', 'NO-CACHE');
	}
	
	public function get_array_element($data = array(), $index = 0)
	{
		// Embuscado Added Function
		return $data[$index];
	}
	
	public function display_error_embuscado(){
		
	}
}
