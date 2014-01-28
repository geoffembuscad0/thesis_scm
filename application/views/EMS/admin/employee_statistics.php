<?php echo $head; ?>
<?php echo $page_header; ?>
<div class="pure-g" style="text-align:left;">
<div class="pure-u-1-3" style="background:#0059B3;color:white;width:50%;">
        <h1>Employee Statistics</h1>
</div>
<div class="pure-u-2-3" style="background:#0059B3;text-align:right;color:white;width:50%;">
        <h1><?php echo $account_name[0]['firstname']; ?> <?php echo (empty($account_name[0]['middlename'])) ? "" : ucfirst(substr($account_name[0]['middlename'],0,1)) . "."; ?> <?php echo $account_name[0]['lastname'];?> | General Manager</h1>
</div>
</div>
<div class="row" style="text-align:right;background:#ccc;">
	<div class="pure-u-1-3" style="width: 100%;text-align:right;">
		<button id="printstatistics" class="export-button" style="margin-right:10px;padding-top:14px;padding-bottom:14px;padding-left:18px;padding-right:18px;font-size:18px;">Print Report</button>
	</div>
</div>
<div class='pure-g' style="background: #ccc;">
	<div class='pure-u-1-3' style='width:33%;background:#ccc;'>
		<h1>Statistics of Employee Types</h1>
		<div id='ajaxsurveyrates'></div>
	</div>
	<div class='pure-u-1-3' style='width: 33%; background: #ccc;'>
		<h1>Statistics of employee by Positions</h1>
		<div id='ajaxsurveysatisfaction'></div>
	</div>
	<div class='pure-u-1-3' style='width: 33%; background: #ccc;'>
		<h1>Statistics of employee by Positions</h1>
		<div id='employeeActiveStats'></div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#printstatistics").on('click', function(){
		self.location = '<?php echo URL::site('ems/print_statistics',null,false);?>';
	});

	var datthree = [
	               ['Active Employees', <?php echo $active_employees;?>],['Resigned Employees', <?php echo $resigned_employee;?>]
	   	    ];
	   	          var plot1212 = jQuery.jqplot ('employeeActiveStats', [datthree],
	   	            {
	   	              seriesDefaults: {

	   	                renderer: jQuery.jqplot.PieRenderer,
	   	                rendererOptions: {
	   	                  showDataLabels: true,
	   	                  fontSize: '14pt'
	   	                }
	   	              },
	   	              legend: { show:true, location: 'e' }
	   	            }
	   	          );
	   	          
	var dataone = [
            ['Driver', <?php echo $counted_drivers;?>],['Delivery man', <?php echo $counted_delivery_men;?>]
	    ];
	          var plot12 = jQuery.jqplot ('ajaxsurveysatisfaction', [dataone],
	            {
	              seriesDefaults: {

	                renderer: jQuery.jqplot.PieRenderer,
	                rendererOptions: {
	                  showDataLabels: true
	                }
	              },
	              legend: { show:true, location: 'e' }
	            }
	          );
	          
	  var data = [
	    ['Part-Time Employees', 10],['Fulltime Employees', 90]
	  ];
	  var plot1 = jQuery.jqplot ('ajaxsurveyrates', [data],
	    {
	      seriesDefaults: {
	        // Make this a pie chart.
	        renderer: jQuery.jqplot.PieRenderer,
	        rendererOptions: {
	          // Put data labels on the pie slices.
	          // By default, labels show the percentage of the slice.
	          showDataLabels: true
	        }
	      },
	      legend: { show:true, location: 'e' }
	    }
	  );
	});
</script>
