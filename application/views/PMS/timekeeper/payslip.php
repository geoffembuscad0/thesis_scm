<style type='text/css'>
*{ text-align:center; }
.right { text-align: right;}
table {width:100%;border: 1px solid #000;}
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
<h1>Stellar Cargo Movers-Payroll Payslip</h1>
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
<td><?php echo number_format($total_hours_worked, 2);?></td>
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
<th>OT Pay Formula</th>
<td colspan='7'>OT Pay = 20% of employee rate</td>
</tr>

<tr>
<th>NET Pay formula</th>
<td colspan='7'>Net Pay = ((employee rate x total hours worked) + OT Pay) - total deductions</td>
</tr>

<tr>
<th>Misc Additional</th>
<td colspan='7'>[adds 20% of employee rate if married]</td>
</tr>
</table>

<p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

<h1>Stellar Cargo Movers-Payroll Payslip</h1>
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
<td><?php echo number_format($total_hours_worked, 2);?></td>
<th>OT Hours:</th>
<td><?php echo $OT_hours;?></td>
</tr>

<tr>
<th>Basic Salary:</th>
<td colspan='2'><b>PHP <?php echo number_format($basic_salary,2,'.',',');?></b></td>
<th>OT Rate:</th>
<th>PHP <?php echo $OT_rate;?></th>
<th>GROSS Pay:</th>
<td colspan='2'><b>PHP <?php echo number_format($gross_pay,2,',','.');?></b></td>
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
<th>OT Pay Formula</th>
<td colspan='7'>OT Pay = 20% of employee rate</td>
</tr>

<tr>
<th>NET Pay formula</th>
<td colspan='7'>Net Pay = ((employee rate x total hours worked) + OT Pay) - total deductions</td>
</tr>

<tr>
<th>Misc Additional</th>
<td colspan='7'>[adds 20% of employee rate if married]</td>
</tr>
</table>
</page>
