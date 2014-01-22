<?php
class Webstructure {
	public function head($title = null, $style = true) {
		$html = null;
		$html .= "<!DOCTYPE html>";
		$html .= "<html>";
		$html .= "<head>";
		$html .= "<meta charset=\"ISO-8859-1\">";
		$html .= "<title>" . $title . "</title>";
		$html .= "<style type='text/css'>body { color: #333333;background-color:#2c1108;background-image: url(\"" . URL::site ( 'assets/bg.jpg', true, false ) . "\");background-attachment:fixed;background-repeat:repeat-x; } </style>";
		$html .= "<style type=\"text/css\">.jqplot-data-label{ color:#fff; font-size: 22px; font-weight: bold; }</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/css/pure/purecss.css", true, false ) . "');</style>";
		$html .= "<style type='text/css'>@import url('".URL::site("assets/js/jquery-ui-1-10-3/themes/base/jquery-ui.css",true,false)."')</style>";
		$html .= "<style type='text/css'>@import url('".URL::site("assets/js/jquery-ui-datetimepicker/src/jquery-ui-timepicker-addon.css",true,false)."');</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/js/showcase/css/style.css", true, false ) . "');</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/js/reveal/reveal.css", true, false ) . "');</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/js/bxSlider/jquery.bxslider.css", true, false ) . "');</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/js/rateit/src/rateit.css", true, false ) . "')</style>";
		$html .= "<style type=\"text/css\">@import url(\"".URL::site("assets/js/jqplot/jquery.jqplot.css", true, false)."\");</style>";
		$html .= "<style type='text/css'>@import url('" . URL::site ( "assets/css/misc.css", true, false ) . "')</style>";		
		$html .= "<script>
				function makeid(){
				    var text = '';
					var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
					for( var i=0; i < 5; i++ )
						text += possible.charAt(Math.floor(Math.random() * possible.length));
					return text;
				}
				</script>";
		$html .= "<script src='" . URL::site ( "assets/js/jquery1102.js", true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/jquerymigrate121.js", true, false ) . "'></script>";
		$html .= "<script src='".URL::site("assets/js/jquery-ui-1-10-3/ui/jquery-ui.js",true,false)."'></script>";
		$html .= "<script src='".URL::site("assets/js/jquery-ui-datetimepicker/src/jquery-ui-timepicker-addon.js",true,false)."'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/dropdown/js/jquery.dropdownPlain.js", true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/showcase/jquery.aw-showcase.js", true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/reveal/jquery.reveal.js", true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( 'assets/js/pajinate/jquery.pajinate.js', true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/bxSlider/jquery.bxslider.js", true, false ) . "'></script>";
		$html .= "<script src='" . URL::site ( "assets/js/rateit/src/jquery.rateit.js", true, false ) . "'></script>";
		$html .= '<script type="text/javascript" src="'.URL::site("assets/js/jqplot/jquery.jqplot.js").'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.dateAxisRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.canvasTextRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'. URL::site("assets/js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.barRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.pieRenderer.min.js",true,false).'"></script>
		<script type="text/javascript" src="'.URL::site("assets/js/jqplot/plugins/jqplot.donutRenderer.min.js",true,false).'"></script>
		';
		$html .= "<script src='" . URL::site ( "assets/js/misc.js", true, false ) . "'></script>";
		$html .= "</head>";
		$html .= "<body>";
		$html .= "<center><div class='page'>";
		return $html;
	}
	public function page_header($nav = null) {
		return "<div class='header' style='background-image:url(\"" . URL::site ( 'assets/logo.png', true, false ) . "\");background-repeat:no-repeat;width:100%;height: 28px;padding-top: 92px;'>" . $nav . "</div>";
	}
	public function prduct_category() {
		$categories = null;
		$categories .= "";
		return $categories;
	}
	public function site_navigation() {
		$nav = '<ul class="dropdown" style="z-index:2;text-decoration:none;margin-top: -40px;float:right;">';
		$nav .= '<li><a href="' . URL::base () . '">Home</a></li>';
		$nav .= '<li><a href="' . URL::base () . '#about">About</a><ul class="sub_menu">';
		$nav .= '<li><a href="' . URL::base () . '#mission" rel="" id="anchor1" class="anchorLink">Our Mission</a></li>';
		$nav .= '<li><a href="' . URL::base () . '#credoGrid" rel="" id="anchor1" class="anchorLink">Our Credo</a></li>';
		$nav .= '<li><a href="' . URL::base () . '#capabilitiesGrid" rel="" id="anchor1" class="anchorLink">Our Capabilities</a></li>';
		$nav .= '<li><a href="' . URL::base () . '#ourStory" rel="" id="anchor1" class="anchorLink">Our Story</a></li>';
		$nav .= '<li><a href="' . URL::site ( 'family', true, false ) . '">The TMC Family</a></li>';
		$nav .= '</ul></li>';
		$nav .= '<li><a href="' . URL::site ( 'products', true, false ) . '">Products</a></li>';
		$nav .= '<li><a href="' . URL::site ( 'projects', true, false ) . '">Projects</a></li>';
		$nav .= '<li><a href="#" id="showinqForm" data-reveal-id="#inquiryForm">Inquiries</a></li>';
		$nav .= '<li><a href="' . URL::site ( 'contactus', true, false ) . '">Contact Us</a></li>';
		$nav .= '<li><a href="' . URL::site ( 'careers', true, false ) . '">Careers</a></li>';
		$nav .= '</ul>';
		return $nav;
	}
	public function crm_admin_navigation() {
		$nav = '<ul class="dropdown" style="z-index:2;text-decoration:none;margin-top: -40px;height: 45px;float:right;">';
		$nav .= '<li><a href="' . URL::base () . 'crm/admin_dashboard">Dashboard</a></li>';
		$nav .= "<li><a id='addsalesassistantform' href='#addSalesAssistant'>Add Sales Assistant</a></li>";
		$nav .= '<li><a href="' . URL::site ( null, null, false ) . 'crm/admin_logout' . '">Logout</a></li>';
		$nav .= '</ul>';
		return $nav;
	}
	public function crm_sales_navigation() {
		$nav = '<ul class="dropdown" style="z-index:2;text-decoration:none;margin-top: -40px;height: 45px;float:right;">';
		$nav .= '<li><a href="' . URL::base () . 'crm/inquiries_dashboard">Dashboard</a></li>';
		$nav .= '<li><a href="' . URL::site ( null, null, false ) . 'crm/sales_logout' . '">Logout</a></li>';
		$nav .= '</ul>';
		return $nav;
	}
	public function tms_personnel_navigation(){
		$nav = '<ul class="dropdown" style="z-index:2;text-decoration:none;margin-top: -40px;height: 45px;float:right;">';
		$nav .= '<li><a href="'.URL::base().'tms/personnel_dashboard">Dashboard</a></li>';
		$nav .= '<li><a id="addDeliverySched" href="#addDeliverySched">Add Delivery Record</a></li>';
		$nav .= '<li><a id="addshoppingMarket" href="#addShoppingMarket">Add Market</a></li>';
		$nav .= '<li><a href="'.URL::site(null,null,false).'tms/personnel_logout">Logout</a></li>';
		return $nav;
	}
	public function tms_admin_dashboard(){
		$nav = '<ul class="dropdown" style="z-index:2;text-decoration:none;margin-top:-40px;height:45px;float:right;">';
		$nav .= '<li><a href="'.URL::base().'tms/admin_dashboard">Dashboard</a></li>';
		$nav .= '<li><a href="'.URL::site(null,null,false).'tms/admin_logout">Logout</a></li>';
		$nav .= '<ul>';
		return $nav;
	}
	public function ems_employee_nav(){
		$nav = "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height: 45px;float:right;'>";
		$nav .= "<li><a href='".URL::base()."ems/employee_home'>Dashboard</a></li>";
		$nav .= "<li><a href='".URL::site('ems/emp_leaves', null, false)."'>My Leaves</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."ems/hr_logout'>Logout</a></li>";
		$nav .= "</ul>";
		return $nav;
	}
	public function ems_hr_navigation(){
		$nav = "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height: 45px;float:right;'>";
		$nav .= "<li><a href='".URL::base()."ems/hr_dashboard'>Dashboard</a></li>";
		$nav .= "<li><a href='".URL::site("ems/add_employee_form",null,false)."'>Add Employee</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."ems/hr_logout'>Logout</a></li>";
		$nav .= "</ul>";
		return $nav;
	}
	public function pms_personnel_navigation(){
		$nav = "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height: 45px;float:right;'>";
		$nav .= "<li><a href='".URL::base()."ems/hr_dashboard'>Dashboard</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."pms/deduction_table'>Deduction Table</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."pms/print_ledger'>Print Ledger</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."pms/personnel_logout'>Logout</a></li>";
		$nav .= "</ul>";
		return $nav;
	}
	public function pms_admin_navigation(){
		$nav = "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height: 45px;float:right;'>";
		$nav .= "<li><a href='".URL::site('pms/admin_logout',null,false)."'>Logout</a></li>";
		$nav .= "</ul>";
		return $nav;
	}
	public function ems_admin_navigation(){
		$nav = "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height:45px;float:right;'>";
		$nav .= "<li><a href='".URL::base()."ems/admin_dashboard'>Dashboard</a></li>";
		$nav .= "<li><a href='".URL::base()."ems/admin_add'>Add Employee</a></li>";
		$nav .= "<li><a href='".URL::site('ems/admin_leaves', null, false)."'>Leaves Request</a></li>";
		$nav .= "<li><a href='".URL::site('ems/employee_statistics',null,false)."'>Employee Statistics</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."ems/admin_logout'>Logout</a></li>";
		$nav .= "<ul>";
		return $nav;
	}

	public function applicantHiringForm($data = array()){
		$employee_type = array(1=>'Full-time',2=>'Part-Time');
		$html = null;
		$html .= "<div id='hiringModal' class='reveal-modal' style='color:#000;'>";
		$html .= "<p class='close-reveal-modal' style='cursor:pointer;'>close[X]</p>";
		$html .= "<h1>Verification for hiring</h1>";
		$html .= "<table class='InquiryDocumentsSales' style='width:100%;border: 1px solid #000;'>";
		$html .= "<thead style='border: 1px solid #000;'>";
		$html .= "<tr style='border: 1px solid #000;'><th colspan='2' style='border: 1px solid #000;'>Applicant</th></tr>";
		$html .= "</thead>";
		$html .= "<tbody style='border: 1px solid #000;'>";
		$html .= "<tr><td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Personal Information</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Firstname:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('appFirstname',$data[0]['firstname'],array('style'=>'border:1px solid #fff;width:96%;'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Middlename:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('appMiddlename',$data[0]['middlename'],array('style'=>'border:1px solid #fff;width:96%;'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Lastname:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('appLastname',$data[0]['lastname'],array('style'=>'border:1px solid #fff;width:96%;'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Birthdate:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('applicantBday',null,array('id'=>'birthdateApplicant','style'=>'border:1px solid #fff;width:96%;','placeholder'=>'YYYY-MM-DD','readonly'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Address:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('appAddress',$data[0]['address'],array('style'=>'border:1px solid #fff;width:96%;'))."</td></tr>";
		$html .= "<tr><td style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;' colspan='2'>Employment Datas</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Desired Position:</td><td style='background:#fff;border:1px solid #000;'>".Form::input('appPosition',$data[0]['position'],array('style'=>'border:1px solid #fff;width:96%;','readonly'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Position:</td><td style='background:#fff;border:1px solid #000;'><select name='appPositionSelected' style='width:96%;border:1px solid #fff;'>";
		foreach($data['positions'] AS $position_options){
			$html .= "<option value='".$position_options['position_no']."'>".$position_options['pos_name']."</option>";
		}
		$html .= "</select></td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;font-weight:bold;'>Employee Type:</td><td style='background:#fff;border:1px solid #000;text-align:left;'>".Form::select('employmentType', $employee_type,null,array('style'=>'border: 1px solid #fff;width:98%;'))."</td></tr>";
		$html .= "<tr><td style='border: 1px solid #000;text-align:center;' colspan='2'><button id='validateHiree' class='approve' style='font-size:20px;padding:8px 75px 8px 75px;'>Submit</button></td></tr>";
		$html .= Form::hidden('applicant_no',$data[0]['applicant_no']);
		$html .= "<tr class='veryfyApplicantResponse'></tr>";
		$html .= "</tbody>";
		$html .= "</table>";
		$html .= "</div>";
		return $html;
	}
	public function ajax_validate_applicant(){
		$js = null;
		$js .= '$("#validateHiree").on("click", function(){';
		$js .= '$.ajax({';
		$js .= 'url: "'.URL::site("ems/validate_hiree",null,false).'",';
		$js .= 'type: "POST",';
		$js .= 'data:{';
		$js .= '	applicant_no:$("input[name=\"applicant_no\"]").val(),';
		$js .= '	firstname:$("input[name=\"appFirstname\"]").val(),';
		$js .= '	middlename:$("input[name=\"appMiddlename\"]").val(),';
		$js .= '	lastname:$("input[name=\"appLastname\"]").val(),';
		$js .= '	address: $("input[name=\"appAddress\"]").val(),';
		$js .= '	position:$("select[name=\"appPositionSelected\"]").val(),';
		$js	.= '	birthday:$("input[name=\"applicantBday\"]").val(),';
		$js .= '	employee_type: $("select[name=\"employmentType\"]").val()';
		$js .= '},';
		$js .= 'success:function(HTTPresponse){';
		$js .= '	$(".veryfyApplicantResponse").html(HTTPresponse);';
		$js .= '}';
		$js .= '});';
		$js .= '});';
		return $js;
	}
	public function mis_admin_navigation(){
		$nav = null;
		$nav .= "<ul class='dropdown' style='z-index:2;text-decoration:none;margin-top:-40px;height:45px;float:right;'>";
		$nav .= "<li><a href='".URL::base()."admin/mis_homepage'>Home</a></li>";
		$nav .= "<li><a href='".URL::site(null,null,false)."admin/admin_logout'>Logout</a></li>";
		$nav .= "<ul>";
		return $nav;
	}
}
