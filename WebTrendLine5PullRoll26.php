<html>
<head>
    <title>Review Trend</title>
    <script src="Chart.js/Chart.bundle.js"></script>
    <style type="text/css">
    .container {
		width: 50%;
		margin: 15px auto;
    
    </style>
</head>
<body>
	<center><table border = 1 width = 500>
	<img width=300 height=100 src='arghakarya.jpg' />
	<h1>Trend (Pull Roll - Heater HCU Zone 2-3) Electrical Line 5</h1>
	
	
	<form method="POST" action="">
	
	<center><h3>Paramater : <select name='Parameter'>
	<option value="Vibrasi">Vibrasi Motor</option>
	<option value="Temperature">Temperature Motor</option>
	<option value="Arus">Arus Motor</option>
	</select></center>
	
	<center><h3>Trend Date : From <select name="Hari1">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	</select>
	
	<select name="Bulan1">
	<option value="1">Januari</option>
	<option value="2">Febuari</option>
	<option value="3">Maret</option>
	<option value="4">April</option>
	<option value="5">Mei</option>
	<option value="6">Juni</option>
	<option value="7">Juli</option>
	<option value="8">Agustus</option>
	<option value="9">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
	</select>
	
	<select name="Tahun1">
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>
	</select>
	
	Until <select name="Hari2">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	</select>
	
	<select name="Bulan2">
	<option value="1">Januari</option>
	<option value="2">Febuari</option>
	<option value="3">Maret</option>
	<option value="4">April</option>
	<option value="5">Mei</option>
	<option value="6">Juni</option>
	<option value="7">Juli</option>
	<option value="8">Agustus</option>
	<option value="9">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
	</select>
	
	<select name="Tahun2">
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>
	</select></h3></center>
<center><input type="submit" name="submit" value="Submit"></center>
</form>

<center><table border = 1>
<?php
	include ('koneksi.php');

	$hari1 = $_POST['Hari1'];
	$bulan1 = $_POST['Bulan1'];
	$tahun1 = $_POST['Tahun1'];
	$hari2 = $_POST['Hari2'];
	$bulan2 = $_POST['Bulan2'];
	$tahun2 = $_POST['Tahun2'];
	
	//echo"<h3>Date : From $hari1-$bulan1-$tahun1 Until $hari2-$bulan2-$tahun2 </h3>";
	
	// Fetch the data
	$query = "SELECT Tanggal FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
	$result = mysql_query($query);
	
	$item = 'Fan Water Removal Chill Roll';
	$parameter = $_POST['Parameter'];
		
	//query sama query 1 untuk data pada grafik
	//query2 sama query 3 untuk data pada tabel
		
	//echo"<center>$item</center>";
	if($parameter == 'Vibrasi'){
		$query1 = "SELECT Heater_HCU23_VMDE as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Heater_HCU23_VMDE as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);

		$query4 = "SELECT Heater_HCU23_VMNDEA as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result4 = mysql_query($query4);
		$query5 = "SELECT Heater_HCU23_VMNDEA as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result5 = mysql_query($query5);

		$query6 = "SELECT Heater_HCU23_VMNDER as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result6 = mysql_query($query6);
		$query7 = "SELECT Heater_HCU23_VMNDER as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result7 = mysql_query($query7);
		
		$parameter1='DE';
		$parameter2='NDEA';
		$parameter3='NDER';
	
		echo "
			<center><br><br><h3>Vibrasi Motor</h3></center>
			";
		
		echo "
			<center><th>Tanggal</th>
			";
		
		$i=0;
		while($data = mysql_fetch_array($result2))
		{
			echo "
			<th>".$data['Tanggal']."</th>
			";
			$i++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value DE</th>
			";
			
		$k=0;
		while($data1 = mysql_fetch_array($result3))
		{
			echo "
			<th>".$data1['itemdb1']."</th>
			";
			$k++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value NDEA</th>
			";
			
		$l=0;
		while($data2 = mysql_fetch_array($result5))
		{
			echo "
			<th>".$data2['itemdb1']."</th>
			";
			$l++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value NDER</th>
			";
			
		$m=0;
		while($data3 = mysql_fetch_array($result7))
		{
			echo "
			<th>".$data3['itemdb1']."</th>
			";
			$m++;
		}
	}
	elseif($parameter == 'Temperature'){
		$query1 = "SELECT Heater_HCU23_TempM as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Heater_HCU23_TempM as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
	
		$parameter1='Temperature';
	
		echo "
			<center><br><br><h3>Temperature Motor</h3></center>
			";
	
		echo "
			<center><th>Tanggal</th>
			";
		
		$i=0;
		while($data = mysql_fetch_array($result2))
		{
			echo "
			<th>".$data['Tanggal']."</th>
			";
			$i++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value</th>
			";
			
		$k=0;
		while($data1 = mysql_fetch_array($result3))
		{
			echo "
			<th>".$data1['itemdb1']."</th>
			";
			$k++;
		}
	}
	elseif($parameter == 'Arus'){
		$query1 = "SELECT Heater_HCU23_ArusR as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Heater_HCU23_ArusR as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
	
		$query4 = "SELECT Heater_HCU23_ArusS as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result4 = mysql_query($query4);
		$query5 = "SELECT Heater_HCU23_ArusS as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result5 = mysql_query($query5);

		$query6 = "SELECT Heater_HCU23_ArusT as itemdb FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result6 = mysql_query($query6);
		$query7 = "SELECT Heater_HCU23_ArusT as itemdb1 FROM `form_checklist_line_5_pullroll` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result7 = mysql_query($query7);
	
		$parameter1='R';
		$parameter2='S';
		$parameter3='T';
	
		echo "
			<center><br><br><h3>Arus Motor</h3></center>
			";
	
		echo "
			<center><th>Tanggal</th>
			";
		
		$i=0;
		while($data = mysql_fetch_array($result2))
		{
			echo "
			<th>".$data['Tanggal']."</th>
			";
			$i++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value R</th>
			";
			
		$k=0;
		while($data1 = mysql_fetch_array($result3))
		{
			echo "
			<th>".$data1['itemdb1']."</th>
			";
			$k++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value S</th>
			";
			
		$l=0;
		while($data2 = mysql_fetch_array($result5))
		{
			echo "
			<th>".$data2['itemdb1']."</th>
			";
			$l++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value T</th>
			";
			
		$m=0;
		while($data3 = mysql_fetch_array($result7))
		{
			echo "
			<th>".$data3['itemdb1']."</th>
			";
			$m++;
		}
	}

	if ( !$result OR !$result1 ) {
		  die( "<br><h3>Select Parameter and Trend Date</h3>");
	}
	
?>
</table></center>
	
<div class="container">
<canvas id="myChart" width="100" height="75"></canvas>
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
							label: [<?php echo '"' . $parameter1 . '",'; ?>],
                            data: [
							<?php
								if (!empty($result1)) {
								while ($p = mysql_fetch_array($result1)) { echo '"' . $p['itemdb'] . '",';} 
								}
							?>
							],
							fill: false,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                            ],
                            borderWidth: 1
                        },{
							label: [<?php echo '"' . $parameter2 . '",'; ?>],
                            data: [
							<?php
								if (!empty($result4)) {
								while ($q = mysql_fetch_array($result4)) { echo '"' . $q['itemdb'] . '",';} 
								}
							?>
							],
							fill: false,
                            backgroundColor: [
                                'rgba(10, 75, 100, 0.5)',
                            ],
                            borderColor: [
                                'rgba(10,75,100,1)',
                            ],
                            borderWidth: 1
                        },{
							label: [<?php echo '"' . $parameter3 . '",'; ?>],
                            data: [
							<?php
								if (!empty($result6)) {
								while ($r = mysql_fetch_array($result6)) { echo '"' . $r['itemdb'] . '",';} 
								}
							?>
							],
							fill: false,
                            backgroundColor: [
                                'rgba(10, 50, 10, 1)',
                            ],
                            borderColor: [
                                'rgba(10,50,10,1)',
                            ],
                            borderWidth: 1
                        }
						]
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
		
		<form method="POST" action="MenuReviewTrendLine5.php">
		<center><input type="submit" name="menureviewtrend" value="Menu Trend"></center></br>
		</form>
		
		<form method="POST" action="../MainPagePC.php">
		<center><input type="submit" name="mainpagetab" value="Main Page"></center>
		</form>

</body>
</html>