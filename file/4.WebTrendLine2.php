<html>
    <head>
        <title>Review Trend</title>
        <script src="Chart.js/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
	
	<?php
		echo"<h1>Trend Checklist Electrical Line 2</h1>";
	
		include ('4.koneksi.php');

		$tanggal = date('d-m-Y');
		echo"<h3>Date : $tanggal</h3>";

		// Fetch the data
		$query = "SELECT Tanggal FROM `form_checklist_line_2`";
		$result = mysql_query($query);
		
		$query1 = "SELECT Dosing_PP1 FROM `form_checklist_line_2`";
		$result1 = mysql_query($query1);

		// All good?
		if ( !$result ) {
		  // Nope
		  //$message  = 'Invalid query: ' . mysqli_error() . "\n";
		  //$message .= 'Whole query: ' . $query;
		  die( 'error' );
		}	
	?>
	
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
		
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
					<?php
						if (!empty($result)) {
                        while ($b = mysql_fetch_array($result)) { echo '"' . $b['Tanggal'] . '",';} 
						}
					?>
					],
                    datasets: [{
                            label: 'Trend Line 2',
                            data: [
							<?php
								if (!empty($result1)) {
								while ($p = mysql_fetch_array($result1)) { echo '"' . $p['Dosing_PP1'] . '",';} 
								}
							?>
							],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		<form method="POST" action="index.php">
		<br><input type="submit" name="index" value="Main Page">
		</form>
    </body>
</html>