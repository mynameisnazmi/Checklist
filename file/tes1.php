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
	<h1>Trend (Ex Dosing 1) Electrical Line 4</h1>
	
	
	<form method="POST" action="">
	<center><h3><select hidden name="Item">
	<option value="Ex Dosing 1"></option>
	</select></h3></center>
	
	<center><h3>Paramater : <select name='Parameter'>
	<option value="VMDE">Vibrasi Motor DE</option>
	<option value="VMNDEA">Vibrasi Motor NDE Axial</option>
	<option value="VMNDER">Vibrasi Motor NDE Radial</option>
	<option value="VPDE">Vibrasi Pompa DE</option>
	<option value="VPNDEA">Vibrasi Pompa NDE Axial</option>
	<option value="VPNDER">Vibrasi Pompa NDE Radial</option>
	<option value="TempM">Temperature Motor</option>
	<option value="TempP">Temperature Pompa</option>
	<option value="Arus">Arus</option>
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

<center><table border = 1 width = 500>
<?php
	include ('4.koneksi.php');

	$hari1 = $_POST['Hari1'];
	$bulan1 = $_POST['Bulan1'];
	$tahun1 = $_POST['Tahun1'];
	$hari2 = $_POST['Hari2'];
	$bulan2 = $_POST['Bulan2'];
	$tahun2 = $_POST['Tahun2'];
	
	//echo"<h3>Date : From $hari1-$bulan1-$tahun1 Until $hari2-$bulan2-$tahun2 </h3>";
	
	// Fetch the data
	$query = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
	$result = mysql_query($query);
	
	$item = $_POST['Item'];
	$parameter = $_POST['Parameter'];
		
	//query sama query 1 untuk data pada grafik
	//query2 sama query 3 untuk data pada tabel
		
	//echo"<center>$item</center>";
	if($parameter == 'VMDE'){
		$query1 = "SELECT Ex_Dos_1_VMDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VMDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Motor DE</center>";
	}
	elseif($parameter == 'VMNDEA'){
		$query1 = "SELECT Ex_Dos_1_VMNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VMNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Motor NDE Axial</center>";
	}
	elseif($parameter == 'VMNDER'){
		$query1 = "SELECT Ex_Dos_1_VMNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VMNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Motor NDE Radial</center>";
	}
	elseif($parameter == 'VPDE'){
		$query1 = "SELECT Ex_Dos_1_VPDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VPDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Pompa DE</center>";
	}
	elseif($parameter == 'VPNDEA'){
		$query1 = "SELECT Ex_Dos_1_VPNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VPNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Pompa NDE Axial</center>";
	}
	elseif($parameter == 'VPNDER'){
		$query1 = "SELECT Ex_Dos_1_VPNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_VPNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Vibrasi Pompa NDE Radial</center>";
	}
	elseif($parameter == 'TempM'){
		$query1 = "SELECT Ex_Dos_1_TempM as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_TempM as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Temperature Motor</center>";
	}
	elseif($parameter == 'TempP'){
		$query1 = "SELECT Ex_Dos_1_TempP as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_TempP as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Temperature Pompa</center>";
	}
	elseif($parameter == 'Arus'){
		$query1 = "SELECT Ex_Dos_1_Arus as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result1 = mysql_query($query1);
		$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result2 = mysql_query($query2);
		$query3 = "SELECT Ex_Dos_1_Arus as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
		$result3 = mysql_query($query3);
		//echo"<center><br>Arus</center>";
	}

	if ( !$result OR !$result1 ) {
		  die( "<br><h3>Select Parameter and Trend Date</h3>");
	}

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
							label: 'data',
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
		<center><input type="submit" name="index" value="Main Page"></center>
		</form>

</body>
</html>