<?php echo $head; ?>
<?php echo $page_header; ?>
<?php echo $addDeliverySchedForm; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#1049a9;color:white;width:50%;">
    	<h1>Homepage</h1>
    </div>
    <div class="pure-u-2-3" style="background:#1049a9;text-align:right;color:white;width:50%;">
    	<h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | Product Manager</h1>
    </div>
</div>
<div class="pure-g" style="">
	<div class="pure-u-1-3" style="background:#fff;width:100%;">
		<table class="InquiryDocumentsSales">
			<thead>
				<tr>
					<th>Target Market</th>
					<th>Date Receiving</th>
					<th>Date Issued</th>
					<th>Status</th>
					<th>Operations</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($delivery_datas AS $deliverRecord){ ?>
					<tr>
						<td><?php echo $deliverRecord['marketplace']; ?></td>
						<td><?php echo date_format(date_create($deliverRecord['date_receiving']),"m/d/Y"); ?></td>
						<td><?php echo date_format(date_create($deliverRecord['date_issued']), "m/d/Y"); ?></td>
						<td><?php echo $deliverRecord['label'];?></td>
						<td>
							<button id="viewDeliver<?php echo md5($deliverRecord['deliver_id']);?>" class="view">View</button>
							<button id="printDeliver<?php echo md5($deliverRecord['deliver_id']);?>" class="approve">Print</button>
							<button id="deleteDelivery<?php echo md5($deliverRecord['deliver_id']);?>" class="deny">Delete</button>
							
							<div class="reveal-modal" id="viewDeliverModal<?php echo sha1($deliverRecord['deliver_id']);?>">
								<p class="close-reveal-modal" style="cursor:pointer;">close[x]</p>
								<table class="InquiryDocumentsSales">
									<thead>
										<tr><th>Marketplace</th></tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $deliverRecord['marketplace'];?></td>
										</tr>
									</tbody>
								</table>
								<table class="InquiryDocumentsSales">
									<thead>
										<tr>
											<th>Date Issued</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $deliverRecord['date_issued'];?></td>
										</tr>
									</tbody>
								</table>
								<table class="InquiryDocumentsSales">
									<thead>
										<tr>
											<th>Date Receiving</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $deliverRecord['date_receiving'];?></td>
										</tr>
									</tbody>
								</table>
								<table class="InquiryDocumentsSales">
									<thead>
										<tr>
											<th>Date Issued</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $deliverRecord['date_issued'];?></td>
										</tr>
									</tbody>
								</table>
								<table class="InquiryDocumentsSales">
									<thead>
										<tr>
											<th>Delivery Details</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo htmlentities($deliverRecord['details']);?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<script type="text/javascript">
							$(document).ready(function(){
								$("#viewDeliver<?php echo md5($deliverRecord['deliver_id']);?>").on('click', function(){
									$("#viewDeliverModal<?php echo sha1($deliverRecord['deliver_id']);?>").reveal();
								});

								$("#printDeliver<?php echo md5($deliverRecord['deliver_id']);?>").on('click', function(){
									self.location = '<?php echo URL::site('tms/delivery_details?delivery_id=' . $deliverRecord['deliver_id'], null, false);?>';
								});

								$("#deleteDelivery<?php echo md5($deliverRecord['deliver_id']);?>").on('click', function(){
									$.ajax({
										url : '<?php echo URL::site('tms/delete_delivery');?>',
										type: 'POST',
										data: { delivery_id: '<?php echo $deliverRecord['deliver_id'];?>'},
										success: function(responseDeliveryDelete){
											alert('Delivery Record has been delete.');
											self.location = '<?php echo URL::site('tms/admin_dashboard', null, false);?>';
												
										}
									});
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
<script>
$(document).ready(function(){
	$("#addDeliverySched").on('click', function(){
		$("#addDeliverySchedForm").reveal();
	});
	$(".dateArrival").datepicker();
});
</script>
