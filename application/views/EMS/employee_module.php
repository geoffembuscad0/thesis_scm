<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="tyext-align: left;">
	<div class='pure-u-1-3' style='width: 100%; text-align: right;'>
		<div class='remaining_leaves'>
			<div class="ui-widget">
				<div class='ui-state-highlight' style='width:208px;float:right;'>
					<p class='ui-icon ui-icon-info' style='float:left;'></p>
					<h2><?php echo $employee_datas[0]['r_leaves'];?> Remaining Leaves</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#123eab;color:white;width:50%;">
    	<h1>Employee Leave Form</h1>
    </div>
    <div class="pure-u-2-3" style="background:#123eab;text-align:right;color:white;width:50%;">
    	<h1><?php echo $employee_datas[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $employee_datas[0]['lastname'];?> | Employee Home</h1>
    </div>
</div>
<div class="pure-g">
	<div class="pure-u-1-3" style="background-color: #cccccc; width: 100%; min-height: 100px;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr><th>Forwarding Address</th>
				<th>Mobile Number</th></tr>
			</thead>
			<tbody>
				<tr>
					<td><input style="width:98%;" type="text" name="employee_add" value=""/></td>
					<td><input style="width:98%;" type="text" name="employee_mobile" value=""/></td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
				<th colspan='6'>Leave Information</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style='font-size: 18px;background-color: #4282d3; color: #fff;'>Date Leave:</td>
					<td><input style="font-size:18px;width:98%;" type="text" name="date_leave" value=""/></td>
					<td style='font-size: 18px;background-color: #4282d3; color: #fff;'>No Of Days Leave:</td>
					<td style="font-size:18px;background:#fff;">
					<select name="NoOfDays" style="font-size:18px;width:98%;">
					<?php for($days = 1; $days <= 20; $days++){ ?>
					<option value="<?php echo $days; ?>"><?php echo $days;?></option>
					<?php } ?>
					</select>
					</td>
					<td style='font-size: 18px;background-color: #4282d3; color: #fff;'>Type Of Leave:</td>
					<td style="background:#fff; font-size: 18px;">
					<?php echo Form::radio('type_leave', 'maternity leave'); ?>Maternity Leave
					<?php echo Form::radio('type_leave', 'paternity filial leave');?>Paternity Filial Leave
					<?php echo Form::radio('type_leave', 'emergency leave');?>Emergency Leave
					</td>
				</tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
				<tr><th>Reason</th></tr>
			</thead>
			<tbody>
				<tr><td><textarea name="reason" style="width: 98%;"></textarea></td></tr>
			</tbody>
		</table>
		<table class="InquiryDocumentsSales">
			<thead>
			</thead>
			<tbody>
				<tr id="responseLeaveRequest">
				</tr>
				<tr>
					<td><button id="submitLeaveForm" class="approve" style="width: 50%;font-size: 35px;">Submit Leave Form</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#submitLeaveForm").on('click',function(){
		$.ajax({
			url: '<?php echo URL::site('ems/submit_leave',null,false);?>',
			type: 'POST',
			data: {
				employee_id: '<?php echo $employee_datas[0]['employee_id'];?>',

				address: $("input[name='employee_add']").val(),
				date_leaving: $("input[name='date_leave']").val(),
				mobile: $("input[name='employee_mobile']").val(),
				no_of_days: $("select[name='NoOfDays']").val(),
				leave_type: $("input[name='type_leave']").val(),
				reason: $("textarea[name='reason']").val()
			},
			success: function(leaveResponse){
				$("#responseLeaveRequest").html(leaveResponse);
			}
		});
	});
	$("input[name='date_leave']").datepicker({
		minDate: 0,
		dateFormat: 'yy-mm-dd'
	});
});
</script>
</body>
</html>
