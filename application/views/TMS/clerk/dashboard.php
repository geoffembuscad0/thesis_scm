<?php echo $head; ?>
<?php echo $page_header; ?>
<!--  ADD Delivery Form Modal START -->
<div id='addDeliverySchedForm' class='reveal-modal' style='color: #000;'>
	<p class='close-reveal-modal' style='cursor:pointer;'>close[x]</p>
	<h1>Add Delivery Schedule</h1>
	<table class='InquiryDocumentsSales' style='width:100%;border: 1px solid #000;'>
		<thead style='border: 1px solid #000;'>
			<tr style='border: 1px solid #000;'>
				<th colspan='2' style='border: 1px solid #000;'>Delivery Details</th>
			</tr>
		</thead>
		<tbody style='border: 1px solid #000;'>
			<tr>
				<td colspan='2'>Client</td>
			</tr>
			<tr>
				<td colspan='2'>
				<select name="company" style="width: 98%;">
				<?php foreach($companies AS $company){ ?>
				<option value='<?php echo $company['company_no'];?>'><?php echo $company['name'];?></option>
				<?php } ?>
				</select>
				</td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Available Delivery Personnnel:</td>
			</tr>
			<tr>
				<td colspan='2'>
				<select name="employee_id" style="width: 98%;">
				<?php foreach($available_drivers AS $ad){ ?>
				<option value="<?php echo $ad['employee_id'];?>"><?php echo $ad['firstname'];?> <?php echo $ad['lastname'];?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Market:</td>
			</tr>
			<tr>
				<td colspan='2'><select name="receiver" style="width: 98%;">
				<?php foreach($markets AS $market){ ?>
				<option value="<?php echo $market['market_no'];?>"><?php echo $market['name'];?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Date Deliver Arrival:</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="text" name="date_receive" class="dateArrival" style="border:1px solid #fff;width:96%;" placeholder="Date Receiving" />
				</td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Details:</td>
			</tr>
			<tr>
				<td colspan='2'><textarea id="detailsTxt" name="details" cols="50" rows="3" style="border:1px solid #fff;width:96%;" placeholder="Delivery Information"></textarea></td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'><button id='addscheduledelivery' type='button' class='approve'>Submit</button></td>
			</tr>
		</tbody>
	</table>
	<div id='deliverResponse'></div>
</div>
<!-- ADD DELIVERY MODAL FORM END -->
<!-- Add Marketplace START -->
<div id='addShoppingMarketModal' class='reveal-modal' style='color: #000;'>
	<p class='close-reveal-modal' style='cursor:pointer;'>close[x]</p>
	<h1>Add Store</h1>
	<table class='InquiryDocumentsSales' style='width:100%;border: 1px solid #000;'>
		<thead style='border: 1px solid #000;'>
			<tr style='border: 1px solid #000;'>
				<th colspan='2' style='border: 1px solid #000;'>Store Details</th>
			</tr>
		</thead>
		<tbody style='border: 1px solid #000;'>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Shopping Markets:</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="text" name="marketPlace" class="" style="border:1px solid #fff;width:96%;" placeholder="Shopping Mall/Supermarket" />
				</td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'>Address:</td>
			</tr>
			<tr>
				<td colspan='2'><textarea id="" name="marketAddress" cols="50" rows="3" style="border:1px solid #fff;width:96%;" placeholder="Address of store."></textarea></td>
			</tr>
			<tr>
				<td colspan='2' style='background:#006CD9;color:#fff;font-weight:bold;font-size:18px;'><button id='addmartketBtn' type='button' class='approve'>Add Market</button></td>
			</tr>
		</tbody>
	</table>
	<div id='addMarketResponse'></div>
</div>
<!-- Add Marketplace END -->
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
			<th>Market</th>
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
				<td><?php echo $delivery_data['marketplace'];?></td>
				<td><?php echo date_format(date_create($delivery_data['date_issued']), 'M d Y G:i A'); ?></td>
				<td><?php echo date_format(date_create($delivery_data['date_receiving']), 'M d Y G:i A');?></td>
				<td class="<?php echo $delivery_data['delivery_stat'];?>" style="<?php echo ($delivery_data['delivery_stat'] == 1) ? "background-color:red;color:#fff;" : "background-color:red;color:#fff;";?>"><?php echo $delivery_data['label'];?></td>
				<td>
					<button id="<?php echo md5('deliveryDetails' . $delivery_data['deliver_id']);?>" class="approve">View</button>
					<button id="<?php echo md5('editDelsiveryDetails' . $delivery_data['deliver_id']);?>" class="approve">Edit</button>
				<div id="deliveryDetails<?php echo sha1("deloiveryOn" . $delivery_data['deliver_id']);?>" class="reveal-modal">
				<p class="close-reveal-modal" style="cursor:pointer">close[x]</p>
				<h1>Delivery Details</h1>
				
				<table class="InquiryDocumentsSales">
				<thead>
					<tr><th>Receiver</th></tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $delivery_data['marketplace'];?></td>
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
						<td>
						<select name="receiver">
						<?php foreach($markets AS $market){ ?>
						<option value="<?php echo $market['market_no'];?>"><?php echo $market['name'];?></option>
						<?php } ?>
						</select>
						</td>
					</tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Company name:</th></tr>
				</thead>
				<tbody>
				<tr><td>
				<select name="client">
				<?php foreach($companies AS $company){ ?>
				<option value="<?php echo $company['company_no'];?>"><?php echo $company['name'];?></option>
				<?php } ?>
				</select>
				</td></tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Date Receiving:</th></tr>
				</thead>
				<tbody>
				<tr><td><input name="date_receiving" class="dateArrival" type="text" value="<?php echo $delivery_data['date_receiving'];?>"/></td></tr>
				</tbody>
				</table>
				<table class="InquiryDocumentsSales">
				<thead>
				<tr><th>Details:</th></tr>
				</thead>
				<tbody>
				<tr><td>
				<textarea name="details" style="width: 98%;height: 100px;"><?php echo $delivery_data['details'];?></textarea>
				</td></tr>
				<tr><td><button id="updateDelivery<?php echo $delivery_data['deliver_id'];?>" style="width:50%;padding-top: 4px;padding-bottom:4px;" id="updateDeliveryDetails<?php echo $delivery_data['deliver_id'];?>" class="approve">Update Delivery Details</button></td></tr>
				</tbody>
				</table>
				<script>
				$(document).ready(function(){
					$("#updateDelivery<?php echo $delivery_data['deliver_id'];?>").on('click', function(){
						$.ajax({
							url: '<?php echo URL::site('tms/update_delivery',null,false);?>',
							type: 'POST',
							data: { 
								deliver_id: '<?php echo $delivery_data['deliver_id'];?>', 
								receiver:$("select[name='receiver']").val(),
								date_receiver:$("input[name='date_receiving']").val(),
								details:$("textarea[name='details']").val(),
								company:$("select[name='client']").val()
							},
							success: function(responseSaveDelivery){
								alert("delivery data has been updated");
							}
						});
					});
				});
				</script>
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
<script type="text/javascript">
$(document).ready(function(){
	$("#addDeliverySched").on('click', function(){
		$("#addDeliverySchedForm").reveal();
	});

	$("#addshoppingMarket").on('click', function(){
		$("#addShoppingMarketModal").reveal();
	});
	
	$(".dateArrival").datetimepicker();

	$("#addmartketBtn").on('click', function(){
		$.ajax({
			url: '<?php echo URL::site("tms/add_market", null, false);?>',
			type: 'POST',
			data: {
				market:$("input[name='marketPlace']").val(),
				address: $("textarea[name='marketAddress']").val()
			},
			success: function(responseAddMarket){
				$("#addMarketResponse").html(responseAddMarket);
			}
		});
	});

	$("#addscheduledelivery").on('click',function(){
		$.ajax({
			url: '<?php echo URL::site('tms/add_deliver_schedule'); ?>',
			data: { 
				'delivery_man':$("select[name='employee_id']").val(),
				'receiver':$('select[name="receiver"]').val(),
				'date_receive':$('input[name="date_receive"]').val(),
				'details': $('#detailsTxt').val(),
				'company':$("select[name='company']").val()
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