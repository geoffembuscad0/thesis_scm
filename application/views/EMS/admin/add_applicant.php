<?php echo $head;?><?php echo $page_header;?>
<div class="pure-g">
	<div class="pure-u-1-3" style="width: 100%;">
	<?php //echo Form::open("ems/validate_hiree"); ?>
	<table id="careerApplicantForm">
	<thead>
	<tr><th colspan="6">Add Employee Form</th></tr>
	</thead>
	<tbody>
		<tr>
		<td class="label" style="text-align:center;" colspan='6'><p>Fields with (<font color='red'>*</font>) are <b>required fields</b>.</p></td></tr>
		<?php echo $applicant_response; //Session::instance()->delete('applicant_msg'); ?>
		<tr>
		<td class="label">Barcode Value<font color='red'>*</font>(user barcode scanner):</td>
		<td class="input" colspan="5"><?php echo Form::input('barcode_value',null,array("class"=>"applicant_input", "placeholder"=>"Barcode Value"));?></td>
		</tr>
		<tr>
		<td class="label">Firstname<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input("firstname",null, array("class"=>"applicant_input", "placeholder"=>"Firstname")); ?></td>
		<td class="label">Middlename<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input('middlename',null, array("class"=>"applicant_input", "placeholder"=>"Middlename")); ?></td>
		<td class="label">Lastname<font color='red'>*</font>:</td>
		<td  class="input">
		<?php echo Form::input('lastname',null,array("class"=>"applicant_input", "placeholder"=>"Lastname")); ?>
		</td>
		</tr>
		<tr>
		<td class="label">Address<font color='red'>*</font>:</td>
		<td class="input" colspan="3"><?php echo Form::input("address",null,array("class"=>"applicant_input","style"=>"width: 98%;","placeholder"=>"Street No., street name, community name, city")); ?></td>
		<td class="label">Contact No.<font color='red'>*</font>:</td>
		<td class="input">
		<?php echo Form::input('mobile',null,array("class"=>"applicant_input","placeholder"=>"11 Digit only","maxlength"=>"11")); ?>
		</td>
		</tr>
		<tr>
		<td class="label">Email<font color='red'>*</font>:</td>
		<td class="input"><?php echo Form::input('email',null,array("class"=>"applicant_input","placeholder"=>"Email")); ?></td>
		<td class="label">Marital Status<font color='red'>*</font>:</td>
		<td class="input" colspan="3"><?php echo Form::radio('marital_status',1);?>Single 
		<?php echo Form::radio('marital_status', 2); ?>Married
		</td>
		</tr>
		<tr>
		<td class="label" colspan="2">Position Applying For<font color='red'>*</font>:</td>
		<td class="input" colspan="2">
			<select name='position'>
			<?php foreach($positions AS $position){ ?>
			<option value='<?php echo $position['position_no'];?>'><?php echo $position['pos_name'];?></option>
			<?php } ?>
			</select>
		</td>
		<td class="label">Employee Type<font color='red'>*</font>:</td>
		<td class="input">
			<?php echo Form::radio('employee_type',1);?>Part-Time
			<?php echo Form::radio('employee_type',2);?>Fulltime
		</td>
		</tr>
		<tr>
		<td class="label" colspan="2">Birthday<font color='red'>*</font>:</td>
		<td class="input" colspan="4"><?php echo Form::input('birthday',null,array("id"=>"datestart","class"=>"applicant_input", "placeholder"=>"YYYY-MM-DD")); ?></td>
		</tr>
		<tr id='responseEmployeeAdd'></tr>
		<tr>
		<td class="label" colspan="6" style="text-align:center;">
		<?php //echo Form::button('submitApplicant','Submit Employee',array("class"=>"submitbtn","id"=>"submitEmployee")); ?>
		<button id='submitEmployee' class='submitbtn'>Submit Employee</button>
		<input class="submitbtn" type="reset" value="Reset"/>
		</td>
		</tr>
	</tbody>
	</table>
	<?php //echo Form::close(); ?>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#submitEmployee").on('click', function(){
		$.ajax({
			url: '<?php echo URL::site("ems/validate_hiree",null,false);?>',
			type: 'POST',
			data: {
				barcode_value:$("input[name='barcode_value']").val(),
				firstname: $("input[name='firstname']").val(),
				middlename: $("input[name='middlename']").val(),
				lastname: $("input[name='lastname']").val(),
				address: $("input[name='address']").val(),
				employee_type:$("input[name='employee_type']").val(),
				mobile: $("input[name='mobile']").val(),
				position:$("select[name='position']").val(),
				birthday: $("input[name='birthday']").val(),
				email: $("input[name='email']").val(),
				marital_status:$("input[name='marital_status']").val()
			}, success: function(responseAddEmployee){
				$("#responseEmployeeAdd").html(responseAddEmployee);
			}
		});
	});
	$("#datestart").datepicker({ dateFormat:'yy-mm-dd',changeMonth: true, changeYear: true });
});
</script>