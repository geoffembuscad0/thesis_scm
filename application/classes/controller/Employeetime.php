<?php
class Controller_Employeetime extends Controller {
	public function action_index(){
		$template = View::factory('EMS/employeetime');
		$this->response->body($template);
	}
	public function action_update_timesheet(){
// 		die($this->request->post('timein'));
		$timesheet = file_get_contents("timesheet.txt");
		$timerecords = explode("/",$timesheet);
		
		$data = array();
		$count = 0;

		foreach($timerecords as $timerecord){
			$data[$count] = explode("_", $timerecord);
			$count++;
		}
		
		
		if($this->request->post('timein') != null){
			$fileTimesheet = fopen("timesheet.txt","w");
			fwrite($fileTimesheet, $timesheet);
			fwrite($fileTimesheet,"/" . $this->request->post('emp_id') . "_" . date('Y-m-d H:i:s') . "_popo");
			fclose($fileTimesheet);
			echo "Logs In!";
		}
		
		if($this->request->post('time_out') != null){
			$fileTimesheetB = fopen("timesheet.txt","w");
			fwrite($fileTimesheetB, $timesheet);
			fwrite($fileTimesheetB,"/" . $this->request->post('emp_id') . "_" . date('Y-m-d H:i:s') . "_popo");
			fclose($fileTimesheetB);
			echo "Logs Out!";
		}
	}
}