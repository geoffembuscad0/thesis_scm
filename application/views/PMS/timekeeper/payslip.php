<style type='text/css'>
*{ text-align:center; }
.right { text-align: right;}
table {width:100%;border: 1px solid #000;}
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
<h1>Stellar Cargo Movers</h1><h2>Payroll Payslip</h2>
<!-- Request daw ito ngayon! -->
<h3 class='right'>Date: <?php echo $date;?></h3>
<table>

<tr>
<th>Employee ID:</th><td colspan='2'><?php echo $employee_id;?></td>
<th>Employee Name:</th><td colspan='4'><?php echo $employee_name;?></td>
</tr>

<tr>
<th>Department:</th>
<td colspan='3'><?php echo $employee_department;?></td>
<th>Employee Position:</th>
<td colspan='3'><?php echo $employee_position;?></td>
</tr>

<tr>
<th colspan='2'>Employee Type:</th>
<td colspan='3'><?php echo $employee_type;?></td>
<th>Marital Status</th>
<td colspan='2'><?php echo $marital_status;?></td>
</tr>

<tr>
<th>No. of days worked:</th>
<td><?php echo $days_worked;?></td>
<th>Rate per Hour:</th>
<td><b>PHP <?php echo number_format($employee_rate,2);?></b></td>
<th>Total Hours Worked:</th>
<td><?php echo round($total_hours_worked);?></td>
<th>OT Hours:</th>
<td><?php echo $OT_hours;?></td>
</tr>

<tr>
<th>Basic Salary:</th>
<td colspan='2'><b>PHP <?php echo number_format($basic_salary,2,'.',',');?></b></td>
<th>OT Rate:</th>
<th>PHP <?php echo $OT_rate;?></th>
<th>GROSS Pay:</th>
<th colspan='2'><b>PHP <?php echo number_format($gross_pay,2,',','.');?></b></th>
</tr>

<tr>
<th>Deductions:</th>
<td colspan='4'>
<?php foreach($deductions AS $deduction_label => $deduction_val){ ?>
	<?php echo $deduction_label . ": PHP" . $deduction_val;?>
<?php } ?>
</td>
<th>NET Pay:</th>
<td colspan='2'>PHP <?php echo number_format($net_value,2,'.',',');?></td>
</tr>


<tr>
<th>Misc Additional</th>
<td colspan='7'>[adds PHP <?php echo $employee_single_married_twenty;?> if employee is married]</td>
</tr>
</table>

</page>
