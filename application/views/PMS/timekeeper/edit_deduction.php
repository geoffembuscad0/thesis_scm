<?php echo $head; ?>
<?php echo $page_header; ?>
<?php //echo $verify_applicant_form; ?>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#6F4E37;color:white;width:50%;">
    	<h1>Deduction Table</h1>
    </div>
    <div class="pure-u-2-3" style="background:#6F4E37;text-align:right;color:white;width:50%;">
    	<h1><?php //echo $account_name[0]['firstname']; ?> <?php //echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php //echo $account_name[0]['lastname'];?> | Payroll Personnel</h1>
    </div>
</div>
<div class="pure-g" style="text-align: left">
	<div class="pure-u-2-3" style="width:100%; background:#a63a00;">
		<table class="InquiryDocumentsSales">
			<thead>
			<tr>
			<th style="text-align:left;">Gross Pay Ranging</th>
			<th>SSS</th>
			<th>Pag-Ibig</th>
			<th>PhilHealth</th>
			<th></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($deductions_table AS $ded_table){ ?>
			<tr>
			<td style="text-align:left;">PHP<?php echo $ded_table['from_range'];?> - PHP<?php echo $ded_table['to_range'];?></td>
			<td>PHP<?php echo $ded_table['sss'];?></td>
			<td>PHP<?php echo $ded_table['pagibig'];?></td>
			<td>PHP<?php echo $ded_table['philhealth'];?></td>
			<td><button id="editDed<?php echo sha1($ded_table['deduction_no']);?>" class="approve">Edit Deduction</button>
			<div id="editDeductionModal<?php echo md5($ded_table['deduction_no']);?>" class="reveal-modal">
				<div class='close-reveal-modal' style='cursor:pointer;'>close[x]</div>
				<h1>Edit Deduction</h1>
				<table class="InquiryDocumentsSales">
					<thead>
						<th>Price Ranging</th>
					</thead>
					<tbody>
						<td>PHP<?php echo $ded_table['from_range'];?> - PHP<?php echo $ded_table['to_range'];?></td>
					</tbody>
				</table>
				<table class="InquiryDocumentsSales" style="width: 100%;">
					<thead>
						<th colspan='6'>Deductions</th>
					</thead>
					<tbody>
					<tr>
						<td>SSS</td>
						<td><input id="sss<?php echo $ded_table['deduction_no'];?>" type="text" style="width:100px;" name="sss" value="<?php echo $ded_table['sss'];?>"/></td>
						<td>PagIbig</td>
						<td><input id="pagibig<?php echo $ded_table['deduction_no'];?>" type="text" style="width:100px;" name="pagibig" value="<?php echo $ded_table['pagibig'];?>"/></td>
						<td>PhilHealth</td>
						<td><input id="philhealth<?php echo $ded_table['deduction_no'];?>" type="text" style="width:100px;" name="philhealth" value="<?php echo $ded_table['philhealth'];?>"/></td>
						</tr>
						<tr><td colspan='6'><button id="updateDeduction<?php echo $ded_table['deduction_no'];?>" style="padding-left: 75px;padding-right: 75px;" class="approve">Update Deduction</button></td></tr>
					</tbody>
				</table>		
			</div>
			<script>
			$(document).ready(function(){
				$("#editDed<?php echo sha1($ded_table['deduction_no']);?>").on('click', function(){
					$("#editDeductionModal<?php echo md5($ded_table['deduction_no']);?>").reveal();
				});

				$("#updateDeduction<?php echo $ded_table['deduction_no'];?>").on('click',function(){
					$.ajax({
						url: '<?php echo URL::site('pms/update_deduction');?>',
						type: 'POST',
						data: {
							ded_no:'<?php echo $ded_table['deduction_no'];?>',
							sss:$('#sss<?php echo $ded_table['deduction_no'];?>').val(),
							pagibig: $('#pagibig<?php echo $ded_table['deduction_no'];?>').val(),
							philhealth: $('#philhealth<?php echo $ded_table['deduction_no'];?>').val()
						},success:function(reponseUpdateDeduction){
								alert("Deduction data has been updated.");
								self.location = '<?php echo URL::site('pms/deduction_table');?>';
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
