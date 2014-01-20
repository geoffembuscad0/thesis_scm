<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
<div class="pure-u-1-3" style="background:#0059B3;color:white;width:50%;">
        <h1>Homepage (Schedules Applicants for the Interview)</h1>
</div>
<div class="pure-u-2-3" style="background:#0059B3;text-align:right;color:white;width:50%;">
        <h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
</div>
</div>
<div class="pure-g" style="text-align:left;">
	<div class="pure-u-1-3" style="width: 100%;">
		<table class='InquiryDocumentsSales'>
			<thead>
				<tr>
					<th>Employee Name</th>
					<th>Position</th>
					<th>Date Leave</th>
					<th>No of Days</th>
					<th>Leave Type</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($employee_leaves AS $employee_leave){ ?>
				<tr>
					<td><?php echo $employee_leave['firstname'];?> <?php echo $employee_leave['lastname'];?></td>
					<td><?php echo $employee_leave['pos_name'];?></td>
					<td><?php echo date_format(date_create($employee_leave['date_leave']),"M/d/Y");?></td>
					<td><?php echo $employee_leave['no_of_days'];?></td>
					<td><?php echo $employee_leave['leave_type'];?></td>
					<?php if($employee_leave['status'] == 0){ ?>
					<td style='background:#ff0099;color:#fff;'>Request Pending</td>
					<?php }else if($employee_leave['status'] == 1){ ?>
					<td style='background:#67e667;color:#008500;'>Approved</td>
					<?php }else if($employee_leave['status'] == 2){ ?>
					<td style='background:#ff7373;color:#ff0000;'>Rejected</td>
					<?php }?>
					<td><button id="approveLeave<?php echo $employee_leave['id'];?>" class='approve'>Approve</button>
					<button id="denyLeave<?php echo $employee_leave['id'];?>" class='deny'>Reject</button>
					<script>
					$(document).ready(function(){
						$("#approveLeave<?php echo $employee_leave['id'];?>").on('click', function(){
							var approveConf<?php echo $employee_leave['id'];?> = confirm('Would you like to approve this leave request?');
							if(approveConf<?php echo $employee_leave['id'];?> == true){
								$.ajax({
									url: '<?php echo URL::site('ems/approve_leave', null, false);?>',
									type: 'POST',
									data: { leave_id: '<?php echo $employee_leave['id'];?>' },
									success: function(approveReponse){
										alert('Leave Request has been approved.');
										self.location = '<?php echo URL::site('ems/admin_leaves',null,false);?>';
									}
								});
							} else {
								// cancels employee leave
							}
						});
					});
					</script>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
