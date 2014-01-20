<?php echo $head; ?>
<?php echo $page_header; ?>
<?php echo $addDeliverySchedForm;?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#1049a9;color:white;width:50%;">
    	<h1>Homepage</h1>
    </div>
    <div class="pure-u-2-3" style="background:#1049a9;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Clerk</h1>
    </div>
</div>
<div class="pure-g">
	<div class="pure-u-2-3" style="background:#0b5fa5;text-align:center;color:#fff;width:100%;">
		<h1>Delivery Schedule Records</h1>
	</div>
</div>
<div class="pure-g">
	<div class="pure-u-2-3" style="width:100%;">
		<table class="InquiryDocumentsSales">
			<thead>
			<tr>
			<th>ID</th>
			<th>Receiver</th>
			<th>Date Issued</th>
			<th>Date Receiving</th>
			<th>Status</th>
			<th>Controls</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($delivery_datas AS $delivery_data){ ?>
			<tr>
				<td><?php echo $delivery_data['deliver_id'];?></td>
				<td><?php echo $delivery_data['receiver'];?></td>
				<td><?php echo date_format(date_create($delivery_data['date_issued']), 'M d Y G:i A'); ?></td>
				<td><?php echo date_format(date_create($delivery_data['date_receiving']), 'M d Y G:i A');?></td>
				<td class="<?php echo $delivery_data['delivery_stat'];?>" style="<?php echo ($delivery_data['delivery_stat'] == 1) ? "background-color:red;color:#fff;" : "background-color:red;color:#fff;";?>"><?php echo $delivery_data['label'];?></td>
				<td><button id="<?php echo md5('deliveryDetails' . $delivery_data['deliver_id']);?>" class="approve">View</button>
				<button id="<?php echo md5('editDeliveryDetails' . $delivery_data['deliver_id']);?>" class="approve">Edit</button>
				<div id="deliveryDetails<?php echo sha1("deloiveryOn" . $delivery_data['deliver_id']);?>" class="reveal-modal">
				<p class="close-reveal-modal" style="cursor:pointer">close[x]</p>
				<h1>Delivery Details</h1>
				<table class="InquiryDocumentsSales">
				<thead>
					<tr><th>Receiver</th></tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $delivery_data['receiver'];?></td>
					</tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Date Receiving:</th></tr>
				</thead>
				<tbody>
				<tr><td><?php echo date_format(date_create($delivery_data['date_receiving']), 'M d Y G:i A');?></td></tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Number of Days befor Arrival:</th></tr>
				</thead>
				<tbody>
				<tr><td><?php echo round(abs(strtotime($delivery_data['date_receiving'])-strtotime($delivery_data['date_issued']))/86400);?> Days</td></tr>
				</tbody>
				</table>
				</div>
				
				<div id="editDeliveryDetailsModal<?php echo md5('editDeliveryDetails' . $delivery_data['deliver_id']);?>" class="reveal-modal">
				<p class="close-reveal-modal" style="cursor:pointer">close[x]</p>
				<h1>Delivery Details</h1>
				<table class="InquiryDocumentsSales">
				<thead>
					<tr><th>Receiver</th></tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo Form::input('receiver', $delivery_data['receiver']);?></td>
					</tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Date Receiving:</th></tr>
				</thead>
				<tbody>
				<tr><td><?php echo date_format(date_create($delivery_data['date_receiving']), 'M d Y G:i A');?></td></tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Number of Days befor Arrival:</th></tr>
				</thead>
				<tbody>
				<tr><td><?php echo round(abs(strtotime($delivery_data['date_receiving'])-strtotime($delivery_data['date_issued']))/86400);?> Days</td></tr>
				</tbody>
				</table>
				
				</div>
				</td>
			</tr>
			<script>
				$(document).ready(function(){
					$("#<?php echo md5('deliveryDetails' . $delivery_data['deliver_id']);?>").on('click', function(){
						$("#deliveryDetails<?php echo sha1('deloiveryOn' . $delivery_data['deliver_id']);?>").reveal();
					});

					$("#<?php echo md5('editDelsiveryDetails' . $delivery_data['deliver_id']);?>").on('click', function(){
						$("#editDeliveryDetailsModal<?php echo md5('editDeliveryDetails' . $delivery_data['deliver_id']);?>").reveal();
					});
				});
			</script>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#addDeliverySched").on('click', function(){
		$("#addDeliverySchedForm").reveal();
	});

	$(".dateArrival").datetimepicker();

	$("#addscheduledelivery").on('click',function(){
		$.ajax({
			url: '<?php echo URL::site('tms/add_deliver_schedule'); ?>',
			data: { 
				'receiver':$('input[name="receiver"]').val(),
				'date_receive':$('input[name="date_receive"]').val(),
				'details': $('#detailsTxt').val()
			},
			type: 'POST',
			success: function(response){
				$('#deliverResponse').html(response);
				self.location='<?php echo URL::site('tms/clerk_dashboard');?>';
			}
		});
	});
});
</script>