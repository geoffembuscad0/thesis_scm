<?php echo $head;?>
<div class='pure-g'>
	<div class='pure-u-1-3' style='width:100%;text-align:right;'>
		<p style='float:right;'>Date: <?php echo $time;?></p>
	</div>
</div>
<div class='pure-g'>
	<div class='pure-u-1-3' style='width:100%;text-align:center;'>
		<h1>Stellar Cargo Movers</h1>
		<h3>Employee Statistics Reports</h3>
	</div>
</div>
<div class='pure-g' style="background: #ccc;">
	<div class='pure-u-1-3' style='width:50%;background:#ccc;'>
		<h1>Statistics of Employee Types</h1>
		<div id='ajaxsurveyrates'></div>
	</div>
	<div class='pure-u-1-3' style='width: 50%; background: #ccc;'>
		<h1>Statistics of employee by Positions</h1>
		<div id='ajaxsurveysatisfaction'></div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	window.print();
	var dataone = [
            ['Driver', 12],['Delivery man', 9]
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
