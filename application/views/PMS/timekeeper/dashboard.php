<?php echo $head; ?>
<?php echo $page_header; ?>
<?php //echo $verify_applicant_form; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Dashboard</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Payroll Personnel</h1>
    </div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Employee ID</th>
					<th>Employee</th>
					<th>Position</th>
					<th>Department</th>
					<th>Hours Worked</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($employees AS $employee){?>
				<tr>
					<td><?php echo $employee['employee_id']; ?></td>
					<td><?php echo $employee['firstname'] . ' ' . $employee['lastname'];?></td>
					<td><?php echo $employee['pos_name'];?></td>
					<td><?php echo $employee['department'];?></td>
					<td><?php echo round($employee['total_hours']);?></td>
					<td><button class="approve" onClick="self.location='<?php echo URL::site('pms/print_payslip?employee_id='.$employee['employee_id']);?>'">Print Payslip</button></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script text="text/javascript">
$(document).ready(function(){
	<?php //echo $verify_applicant_form_script; ?>
	<?php //echo $ajax_validate_hiree;?>
	$("#datetimepickbabeh").datetimepicker({
		timeFormat: "hh:mm tt",
		dateFormat: "yy-mm-dd",
		maxDate: "0"
	});
});
</script>
</body>
</html>

