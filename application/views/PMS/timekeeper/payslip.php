<style type='text/css'>
*{ text-align: center;}
.right{ text-align: right;}
table { border: 1px solid #000; }
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
<h1>Teresa Marble Corporation</h1>
<h2>Payroll Payslip</h2>
<h3 class='right'>Date: <?php echo $date;?></h3>

<table>
<tr>
<th colspan='7'>Employee Information</th>
</tr>

<tr>
<td>Employee ID:</td><td><?php echo $employee_id;?></td>
<td>Employee Name:</td><td colspan='4'><?php echo $employee_name;?></td>
</tr>

<tr>
<td>Department:</td>
<td><?php echo $employee_department;?></td>
<td>Employee Position:</td>
<td colspan='4'><?php echo $employee_position;?></td>
</tr>

<tr>
<td>Employee Type:</td>
<td><?php echo $employee_type;?></td>
<td>Marital Status</td>
<td colspan=4'><?php echo $marital_status;?></td>
</tr>

<tr>
<th colspan='7'>Salary Information</th>
</tr>

<tr>
<td>No. of days <br>worked:</td>
<td>Total Hours <br>Worked:</td>
<td>OT Rate:</td>
<td>Total <br>OT Hours:</td>
<td>Basic Salary:</td>
<td>GROSS Pay:</td>
<td>NET Pay:</td>
</tr>

<tr>
<td><?php echo $days_worked;?></td>
<td><?php echo round($total_hours_worked);?></td>
<td>PHP <?php echo $OT_rate;?></td>
<td><?php echo $OT_hours;?></td>
<td>PHP <?php echo number_format($basic_salary,2,'.',',');?></td>
<td>PHP <?php echo number_format($gross_pay,2,'.',',');?></td>
<td>PHP <?php echo number_format($net_value,2,'.',',');?></td>
</tr>

<tr>
<th colspan='7'>Deduction Informations</th>
</tr>

<tr>
<?php foreach($deductions AS $deduction_label => $deduction_val){ ?>
<?php echo "<td>".$deduction_label."</td>";?>
<?php } ?>
<td>Total Deduction</td>
<td>BIR Excess</td>
<td colspan='2'>BIR Tax</td>
</tr>

<tr>
<?php foreach($deductions AS $deduction_label => $deduction_val){ ?>
<?php echo "<td>PHP ".$deduction_val."</td>";?>
<?php } ?>
<td><?php echo $total_deductions;?></td>
<td>PHP <?php echo $bir_excess;?></td>
<td colspan='2'>PHP <?php echo $bir_tax;?></td>
</tr>
</table>
</page>
