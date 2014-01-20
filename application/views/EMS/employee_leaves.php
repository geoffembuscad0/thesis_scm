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
    	<h1>Employee Leaves</h1>
    </div>
    <div class="pure-u-2-3" style="background:#123eab;text-align:right;color:white;width:50%;">
    	<h1><?php echo $employee_datas[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $employee_datas[0]['lastname'];?> | Employee Home</h1>
    </div>
</div>
<div class='pure-g'>
	<div class="pure-u-1-3" style="background-color: #cccccc; width: 100%; min-height: 100px;">
		<table class='InquiryDocumentsSales'>
			<thead>
				<tr>
					<th>Leave Type</th>
					<th>Date Leaving</th>
					<th>No. of Days</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($employee_leaves AS $leaves){ ?>
				<tr>
					<td><?php echo $leaves['leave_type'];?></td>
					<td><?php echo $leaves['date_leave'];?></td>
					<td><?php echo $leaves['no_of_days'];?></td>
					<?php if($leaves['status'] == 0){ ?>
					<td style='background:#ff0099;color:#fff;'>Request Pending</td>
					<?php } else if($leaves['status'] == 1){ ?>
					<td style='background:#67e667;color:#008500;'>Approved</td>
					<?php } else if($leaves['status'] == 2){ ?>
					<td style='background:#ff7373;color:#ff0000;'>Rejected</td>
					<?php } ?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>