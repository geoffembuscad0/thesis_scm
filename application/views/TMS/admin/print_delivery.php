<style type='text/css'>
*{ text-align:center; }
.right { text-align: right;}
table {width:100%;border: 1px solid #000;}
table tr {border: 1px solid #000;}
table tr th,td{border: 1px solid #000;padding: 6px 6px 6px 6px;text-align:left;}
</style>
<page>
</page>
<h1>Stellar Cargo Movers Inc. - Delivery</h1>
<h3 class='right'>Date: <?php echo $date;?></h3>
<table>

<tr>
<td style='width:100px;'>Receiver:</td>
<td style='width:600px;'><?php echo $delivery_details[0]['marketplace'];?></td>
</tr>

<tr>
<td>Date Receiving:</td>
<td><?php echo $delivery_details[0]['date_receiving'];?></td>
</tr>

<tr>
<td>Date Issued:</td>
<td><?php echo $delivery_details[0]['date_issued'];?></td>
</tr>

<tr>
<td>Status:</td>
<td><?php echo $delivery_details[0]['label'];?></td>
</tr>

<tr>
<td>Details:</td>
<td><?php echo htmlentities($delivery_details[0]['details']);?></td>
</tr>
</table>