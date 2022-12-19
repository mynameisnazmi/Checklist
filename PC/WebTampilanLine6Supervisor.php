<html>
<body>
<style type="text/css">
	.head{
		font-family: Arial, Helvetica, sans-serif;
	}
	.main{
		position: absolute;
		left: 30px;
		font-size: 15px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 4px;
		width: 125px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.main:hover{
		border: #e6b800 solid;
		background-color: #e6b800;
		color: white;
	}
	.check{
		position: absolute;
		top: 4630px;
		left: 950px;
		font-size: 15px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 4px;
		width: 125px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;	
	}
	.check:hover{
		border: #00b300 solid;
		background-color: #00b300;
		color: white;
	}
</style>
<div class="head">
<h1>Result Form Checklist Electrical Line 6</h1>
<?php
include '../PC/koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
?>
</div>
<style>
	table{
		font-family: Arial, Helvetica, sans-serif;
		border: outset 4px black;

	}

	table th{
		margin: auto;
		border: 1px solid  ;

	}
	table td {
		text-align: center;
		margin: auto;
		border: 1px solid  ;
	}
</style>
<table border = 1 width = 1150>
<?php	
	$queryy = mysql_query("SELECT * FROM `form_line_6_casting`");
	$queryy1 = mysql_query("SELECT * FROM `form_line_6_mdo`");
	$queryy2 = mysql_query("SELECT * FROM `form_line_6_tdo`");
	$queryy3 = mysql_query("SELECT * FROM `form_line_6_tdoas`");
	$queryy4 = mysql_query("SELECT * FROM `form_line_6_pullroll`");
	$queryy5 = mysql_query("SELECT * FROM `form_line_6_airsys`");
	$queryy6 = mysql_query("SELECT * FROM `form_line_6_bigsilo`");
	$queryy7 = mysql_query("SELECT * FROM `form_line_6_mext`");
	$queryy8 = mysql_query("SELECT * FROM `form_line_6_erema`");
	$queryy9 = mysql_query("SELECT * FROM `form_line_6_smallgrinder`");
	$queryy10 = mysql_query("SELECT * FROM `form_line_6_biggrinder`");
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_6_casting` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_6_mdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_6_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_6_tdoas` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_6_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_6_airsys` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query6 = mysql_query("SELECT * FROM `form_checklist_line_6_bigsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query7 = mysql_query("SELECT * FROM `form_checklist_line_6_mext` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query8 = mysql_query("SELECT * FROM `form_checklist_line_6_erema` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query9 = mysql_query("SELECT * FROM `form_checklist_line_6_smallgrinder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query10 = mysql_query("SELECT * FROM `form_checklist_line_6_biggrinder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);
	$data6 = mysql_fetch_row($query6);
	$data7 = mysql_fetch_row($query7);
	$data8 = mysql_fetch_row($query8);
	$data9 = mysql_fetch_row($query9);
	$data10 = mysql_fetch_row($query10);
	
	if($query=='0'){
		echo"Data Casting Tidak Ada";
	}
	elseif($query1=='0'){
		echo"Data MDO Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}

	echo"<h3>Nama Pelaksana :  $data[1]</h3>";
	echo"<h3>Status :  $data[2]ed ($data[3])</h3>";

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Motor Casting</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa = mysql_fetch_row($queryy))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting1.php'>Fan Water Removal Chill Roll (+SG21=321N3-M011)</a></td>
			<td><center>".$data[$i+4]."</center></td>
			<td><center>".$data[$i+5]."</center></td>
			<td><center>".$data[$i+6]."</center></td>
			<td><center>".$data[$i+7]."</center></td>
			<td><center>".$data[$i+8]."</center></td>
			<td><center>".$data[$i+9]."</center></td>
			<td><center>".$data[$i+10]."</center></td>
			<td><center>".$data[$i+11]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting2.php'>Casting Unit System Water Removal Fan (+SG21=321N3-M511)</a></td>
			<td><center>".$data[$i+11]."</center></td>
			<td><center>".$data[$i+12]."</center></td>
			<td><center>".$data[$i+13]."</center></td>
			<td><center>".$data[$i+14]."</center></td>
			<td><center>".$data[$i+15]."</center></td>
			<td><center>".$data[$i+16]."</center></td>
			<td><center>".$data[$i+17]."</center></td>
			<td><center>".$data[$i+18]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting3.php'>Pump Chill Roll (+SG21=321U1-M010)</a></td>
			<td><center>".$data[$i+18]."</center></td>
			<td><center>".$data[$i+19]."</center></td>
			<td><center>".$data[$i+20]."</center></td>
			<td><center>".$data[$i+21]."</center></td>
			<td><center>".$data[$i+22]."</center></td>
			<td><center>".$data[$i+23]."</center></td>
			<td><center>".$data[$i+24]."</center></td>
			<td><center>".$data[$i+25]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting4.php'>Pump Water Bath (+SG21=321U1-M110)</a></td>
			<td><center>".$data[$i+25]."</center></td>
			<td><center>".$data[$i+26]."</center></td>
			<td><center>".$data[$i+27]."</center></td>
			<td><center>".$data[$i+28]."</center></td>
			<td><center>".$data[$i+29]."</center></td>
			<td><center>".$data[$i+30]."</center></td>
			<td><center>".$data[$i+31]."</center></td>
			<td><center>".$data[$i+32]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting5.php'>Motor Air Knife (+SG21=321N1-M014)</a></td>
			<td><center>".$data[$i+32]."</center></td>
			<td><center>".$data[$i+33]."</center></td>
			<td><center>".$data[$i+34]."</center></td>
			<td><center>".$data[$i+35]."</center></td>
			<td><center>".$data[$i+36]."</center></td>
			<td><center>".$data[$i+37]."</center></td>
			<td><center>".$data[$i+38]."</center></td>
			<td><center>".$data[$i+39]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting6.php'>Die Bolt Cooling Fan (+SH32=292Q1-M020)</a></td>
			<td><center>".$data[$i+39]."</center></td>
			<td><center>".$data[$i+40]."</center></td>
			<td><center>".$data[$i+41]."</center></td>
			<td><center>".$data[$i+42]."</center></td>
			<td><center>".$data[$i+43]."</center></td>
			<td><center>".$data[$i+44]."</center></td>
			<td><center>".$data[$i+45]."</center></td>
			<td><center>".$data[$i+46]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Motor MDO</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa1 = mysql_fetch_row($queryy1))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO1.php'>Drawing 1 (+SD21=331M5-M015)</a></td>
			<td><center>".$data1[$i+4]."</center></td>
			<td><center>".$data1[$i+5]."</center></td>
			<td><center>".$data1[$i+6]."</center></td>
			<td><center>".$data1[$i+7]."</center></td>
			<td><center>".$data1[$i+8]."</center></td>
			<td><center>".$data1[$i+9]."</center></td>
			<td><center>".$data1[$i+10]."</center></td>
			<td><center>".$data1[$i+11]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO2.php'>Drawing 2 (+SD21=331M6-M015)</a></td>
			<td><center>".$data1[$i+11]."</center></td>
			<td><center>".$data1[$i+12]."</center></td>
			<td><center>".$data1[$i+13]."</center></td>
			<td><center>".$data1[$i+14]."</center></td>
			<td><center>".$data1[$i+15]."</center></td>
			<td><center>".$data1[$i+16]."</center></td>
			<td><center>".$data1[$i+17]."</center></td>
			<td><center>".$data1[$i+18]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO3.php'>Drawing 3 (+SD21=331M7-M015)</a></td>
			<td><center>".$data1[$i+18]."</center></td>
			<td><center>".$data1[$i+19]."</center></td>
			<td><center>".$data1[$i+20]."</center></td>
			<td><center>".$data1[$i+21]."</center></td>
			<td><center>".$data1[$i+22]."</center></td>
			<td><center>".$data1[$i+23]."</center></td>
			<td><center>".$data1[$i+24]."</center></td>
			<td><center>".$data1[$i+25]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO4.php'>Drawing 4 (+SD21=331M8-M015)</a></td>
			<td><center>".$data1[$i+25]."</center></td>
			<td><center>".$data1[$i+26]."</center></td>
			<td><center>".$data1[$i+27]."</center></td>
			<td><center>".$data1[$i+28]."</center></td>
			<td><center>".$data1[$i+29]."</center></td>
			<td><center>".$data1[$i+30]."</center></td>
			<td><center>".$data1[$i+31]."</center></td>
			<td><center>".$data1[$i+32]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO5.php'>Drawing 5 (+SD21=331M9-M015)</a></td>
			<td><center>".$data1[$i+32]."</center></td>
			<td><center>".$data1[$i+33]."</center></td>
			<td><center>".$data1[$i+34]."</center></td>
			<td><center>".$data1[$i+35]."</center></td>
			<td><center>".$data1[$i+36]."</center></td>
			<td><center>".$data1[$i+37]."</center></td>
			<td><center>".$data1[$i+38]."</center></td>
			<td><center>".$data1[$i+39]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO6.php'>Drawing 6 (+SD21=331MA-M015)</a></td>
			<td><center>".$data1[$i+39]."</center></td>
			<td><center>".$data1[$i+40]."</center></td>
			<td><center>".$data1[$i+41]."</center></td>
			<td><center>".$data1[$i+42]."</center></td>
			<td><center>".$data1[$i+43]."</center></td>
			<td><center>".$data1[$i+44]."</center></td>
			<td><center>".$data1[$i+45]."</center></td>
			<td><center>".$data1[$i+46]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Motor TDO</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa2 = mysql_fetch_row($queryy2))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO1.php'>Line Drive Outlet Left (+SD41=341M1-M015)</a></td>
			<td><center>".$data2[$i+5]."</center></td>
			<td><center>".$data2[$i+6]."</center></td>
			<td><center>".$data2[$i+7]."</center></td>
			<td><center>".$data2[$i+8]."</center></td>
			<td><center>".$data2[$i+9]."</center></td>
			<td><center>".$data2[$i+10]."</center></td>
			<td><center>".$data2[$i+11]."</center></td>
			<td><center>".$data2[$i+12]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO2.php'>Cooling Drive Outlet Left (+SD41=341M1-M050)</a></td>
			<td><center>".$data2[$i+12]."</center></td>
			<td><center>".$data2[$i+13]."</center></td>
			<td><center>".$data2[$i+14]."</center></td>
			<td><center>".$data2[$i+15]."</center></td>
			<td><center>".$data2[$i+16]."</center></td>
			<td><center>".$data2[$i+17]."</center></td>
			<td><center>".$data2[$i+18]."</center></td>
			<td><center>".$data2[$i+19]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO3.php'>Line Drive Outlet Right (+SD42=341M2-M015)</a></td>
			<td><center>".$data2[$i+19]."</center></td>
			<td><center>".$data2[$i+20]."</center></td>
			<td><center>".$data2[$i+21]."</center></td>
			<td><center>".$data2[$i+22]."</center></td>
			<td><center>".$data2[$i+23]."</center></td>
			<td><center>".$data2[$i+24]."</center></td>
			<td><center>".$data2[$i+25]."</center></td>
			<td><center>".$data2[$i+26]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO4.php'>Cooling Drive Outlet Right (+SD42=341M2-M050)</a></td>
			<td><center>".$data2[$i+26]."</center></td>
			<td><center>".$data2[$i+27]."</center></td>
			<td><center>".$data2[$i+28]."</center></td>
			<td><center>".$data2[$i+29]."</center></td>
			<td><center>".$data2[$i+30]."</center></td>
			<td><center>".$data2[$i+31]."</center></td>
			<td><center>".$data2[$i+32]."</center></td>
			<td><center>".$data2[$i+33]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO5.php'>Preheating 1 Fan 1 (+SG33=343N1-M014)</a></td>
			<td><center>".$data2[$i+33]."</center></td>
			<td><center>".$data2[$i+34]."</center></td>
			<td><center>".$data2[$i+35]."</center></td>
			<td><center>".$data2[$i+36]."</center></td>
			<td><center>".$data2[$i+37]."</center></td>
			<td><center>".$data2[$i+38]."</center></td>
			<td><center>".$data2[$i+39]."</center></td>
			<td><center>".$data2[$i+40]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO6.php'>Preheating 1 Fan 2 (+SG33=343N1-M024)</a></td>
			<td><center>".$data2[$i+40]."</center></td>
			<td><center>".$data2[$i+41]."</center></td>
			<td><center>".$data2[$i+42]."</center></td>
			<td><center>".$data2[$i+43]."</center></td>
			<td><center>".$data2[$i+44]."</center></td>
			<td><center>".$data2[$i+45]."</center></td>
			<td><center>".$data2[$i+46]."</center></td>
			<td><center>".$data2[$i+47]."</center></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO7.php'>Preheating 1 Fan 3 (+SG33=343N1-M034)</a></td>
			<td><center>".$data2[$i+47]."</center></td>
			<td><center>".$data2[$i+48]."</center></td>
			<td><center>".$data2[$i+49]."</center></td>
			<td><center>".$data2[$i+50]."</center></td>
			<td><center>".$data2[$i+51]."</center></td>
			<td><center>".$data2[$i+52]."</center></td>
			<td><center>".$data2[$i+53]."</center></td>
			<td><center>".$data2[$i+54]."</center></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO8.php'>Preheating 2 Fan 1 (+SG33=343N1-M114)</a></td>
			<td><center>".$data2[$i+54]."</center></td>
			<td><center>".$data2[$i+55]."</center></td>
			<td><center>".$data2[$i+56]."</center></td>
			<td><center>".$data2[$i+57]."</center></td>
			<td><center>".$data2[$i+58]."</center></td>
			<td><center>".$data2[$i+59]."</center></td>
			<td><center>".$data2[$i+60]."</center></td>
			<td><center>".$data2[$i+61]."</center></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO9.php'>Preheating 2 Fan 2 (+SG33=343N1-M124)</a></td>
			<td><center>".$data2[$i+61]."</center></td>
			<td><center>".$data2[$i+62]."</center></td>
			<td><center>".$data2[$i+63]."</center></td>
			<td><center>".$data2[$i+64]."</center></td>
			<td><center>".$data2[$i+65]."</center></td>
			<td><center>".$data2[$i+66]."</center></td>
			<td><center>".$data2[$i+67]."</center></td>
			<td><center>".$data2[$i+68]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO10.php'>Preheating 2 Fan 3 (+SG33=343N1-M134)</a></td>
			<td><center>".$data2[$i+68]."</center></td>
			<td><center>".$data2[$i+69]."</center></td>
			<td><center>".$data2[$i+70]."</center></td>
			<td><center>".$data2[$i+71]."</center></td>
			<td><center>".$data2[$i+72]."</center></td>
			<td><center>".$data2[$i+73]."</center></td>
			<td><center>".$data2[$i+74]."</center></td>
			<td><center>".$data2[$i+75]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO11.php'>Preheating 3 Fan 1 (+SG33=343N1-M214)</a></td>
			<td><center>".$data2[$i+75]."</center></td>
			<td><center>".$data2[$i+76]."</center></td>
			<td><center>".$data2[$i+77]."</center></td>
			<td><center>".$data2[$i+78]."</center></td>
			<td><center>".$data2[$i+79]."</center></td>
			<td><center>".$data2[$i+80]."</center></td>
			<td><center>".$data2[$i+81]."</center></td>
			<td><center>".$data2[$i+82]."</center></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO12.php'>Preheating 3 Fan 2 (+SG33=343N1-M224)</a></td>
			<td><center>".$data2[$i+82]."</center></td>
			<td><center>".$data2[$i+83]."</center></td>
			<td><center>".$data2[$i+84]."</center></td>
			<td><center>".$data2[$i+85]."</center></td>
			<td><center>".$data2[$i+86]."</center></td>
			<td><center>".$data2[$i+87]."</center></td>
			<td><center>".$data2[$i+88]."</center></td>
			<td><center>".$data2[$i+89]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO13.php'>Preheating 3 Fan 3 (+SG33=343N1-M234)</a></td>
			<td><center>".$data2[$i+89]."</center></td>
			<td><center>".$data2[$i+90]."</center></td>
			<td><center>".$data2[$i+91]."</center></td>
			<td><center>".$data2[$i+92]."</center></td>
			<td><center>".$data2[$i+93]."</center></td>
			<td><center>".$data2[$i+94]."</center></td>
			<td><center>".$data2[$i+95]."</center></td>
			<td><center>".$data2[$i+96]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO14.php'>Preheating 4 Fan 1 (+SG34=343N1-M314)</a></td>
			<td><center>".$data2[$i+96]."</center></td>
			<td><center>".$data2[$i+97]."</center></td>
			<td><center>".$data2[$i+98]."</center></td>
			<td><center>".$data2[$i+99]."</center></td>
			<td><center>".$data2[$i+100]."</center></td>
			<td><center>".$data2[$i+101]."</center></td>
			<td><center>".$data2[$i+102]."</center></td>
			<td><center>".$data2[$i+103]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO15.php'>Preheating 4 Fan 2 (+SG34=343N1-M324)</a></td>
			<td><center>".$data2[$i+103]."</center></td>
			<td><center>".$data2[$i+104]."</center></td>
			<td><center>".$data2[$i+105]."</center></td>
			<td><center>".$data2[$i+106]."</center></td>
			<td><center>".$data2[$i+107]."</center></td>
			<td><center>".$data2[$i+108]."</center></td>
			<td><center>".$data2[$i+109]."</center></td>
			<td><center>".$data2[$i+110]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO16.php'>Preheating 4 Fan 3 (+SG34=343N1-M334)</a></td>
			<td><center>".$data2[$i+110]."</center></td>
			<td><center>".$data2[$i+111]."</center></td>
			<td><center>".$data2[$i+112]."</center></td>
			<td><center>".$data2[$i+113]."</center></td>
			<td><center>".$data2[$i+114]."</center></td>
			<td><center>".$data2[$i+115]."</center></td>
			<td><center>".$data2[$i+116]."</center></td>
			<td><center>".$data2[$i+117]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO17.php'>Preheating 5 Fan 1 (+SG34=343N1-M414)</a></td>
			<td><center>".$data2[$i+117]."</center></td>
			<td><center>".$data2[$i+118]."</center></td>
			<td><center>".$data2[$i+119]."</center></td>
			<td><center>".$data2[$i+120]."</center></td>
			<td><center>".$data2[$i+121]."</center></td>
			<td><center>".$data2[$i+122]."</center></td>
			<td><center>".$data2[$i+123]."</center></td>
			<td><center>".$data2[$i+124]."</center></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO18.php'>Preheating 5 Fan 2 (+SG34=343N1-M424)</a></td>
			<td><center>".$data2[$i+124]."</center></td>
			<td><center>".$data2[$i+125]."</center></td>
			<td><center>".$data2[$i+126]."</center></td>
			<td><center>".$data2[$i+127]."</center></td>
			<td><center>".$data2[$i+128]."</center></td>
			<td><center>".$data2[$i+129]."</center></td>
			<td><center>".$data2[$i+130]."</center></td>
			<td><center>".$data2[$i+131]."</center></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO19.php'>Preheating 5 Fan 3 (+SG34=343N1-M434)</a></td>
			<td><center>".$data2[$i+131]."</center></td>
			<td><center>".$data2[$i+132]."</center></td>
			<td><center>".$data2[$i+133]."</center></td>
			<td><center>".$data2[$i+134]."</center></td>
			<td><center>".$data2[$i+135]."</center></td>
			<td><center>".$data2[$i+136]."</center></td>
			<td><center>".$data2[$i+137]."</center></td>
			<td><center>".$data2[$i+138]."</center></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO20.php'>Preheating 6 Fan 1 (+SG34=343N1-M514)</a></td>
			<td><center>".$data2[$i+138]."</center></td>
			<td><center>".$data2[$i+139]."</center></td>
			<td><center>".$data2[$i+140]."</center></td>
			<td><center>".$data2[$i+141]."</center></td>
			<td><center>".$data2[$i+142]."</center></td>
			<td><center>".$data2[$i+143]."</center></td>
			<td><center>".$data2[$i+144]."</center></td>
			<td><center>".$data2[$i+145]."</center></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO21.php'>Preheating 6 Fan 2 (+SG34=343N1-M524)</a></td>
			<td><center>".$data2[$i+145]."</center></td>
			<td><center>".$data2[$i+146]."</center></td>
			<td><center>".$data2[$i+147]."</center></td>
			<td><center>".$data2[$i+148]."</center></td>
			<td><center>".$data2[$i+149]."</center></td>
			<td><center>".$data2[$i+150]."</center></td>
			<td><center>".$data2[$i+151]."</center></td>
			<td><center>".$data2[$i+152]."</center></td>
			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO22.php'>Preheating 6 Fan 3 (+SG34=343N1-M534)</a></td>
			<td><center>".$data2[$i+152]."</center></td>
			<td><center>".$data2[$i+153]."</center></td>
			<td><center>".$data2[$i+154]."</center></td>
			<td><center>".$data2[$i+155]."</center></td>
			<td><center>".$data2[$i+156]."</center></td>
			<td><center>".$data2[$i+157]."</center></td>
			<td><center>".$data2[$i+158]."</center></td>
			<td><center>".$data2[$i+159]."</center></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO23.php'>Drawing 1 Fan 1 Top (+SG41=343N4-M014)</a></td>
			<td><center>".$data2[$i+159]."</center></td>
			<td><center>".$data2[$i+160]."</center></td>
			<td><center>".$data2[$i+161]."</center></td>
			<td><center>".$data2[$i+162]."</center></td>
			<td><center>".$data2[$i+163]."</center></td>
			<td><center>".$data2[$i+164]."</center></td>
			<td><center>".$data2[$i+165]."</center></td>
			<td><center>".$data2[$i+166]."</center></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO24.php'>Drawing 1 Fan 2 Top (+SG41=343N4-M214)</a></td>
			<td><center>".$data2[$i+166]."</center></td>
			<td><center>".$data2[$i+167]."</center></td>
			<td><center>".$data2[$i+168]."</center></td>
			<td><center>".$data2[$i+169]."</center></td>
			<td><center>".$data2[$i+170]."</center></td>
			<td><center>".$data2[$i+171]."</center></td>
			<td><center>".$data2[$i+172]."</center></td>
			<td><center>".$data2[$i+173]."</center></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO25.php'>Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)</a></td>
			<td><center>".$data2[$i+173]."</center></td>
			<td><center>".$data2[$i+174]."</center></td>
			<td><center>".$data2[$i+175]."</center></td>
			<td><center>".$data2[$i+176]."</center></td>
			<td><center>".$data2[$i+177]."</center></td>
			<td><center>".$data2[$i+178]."</center></td>
			<td><center>".$data2[$i+179]."</center></td>
			<td><center>".$data2[$i+180]."</center></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO26.php'>Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)</a></td>
			<td><center>".$data2[$i+180]."</center></td>
			<td><center>".$data2[$i+181]."</center></td>
			<td><center>".$data2[$i+182]."</center></td>
			<td><center>".$data2[$i+183]."</center></td>
			<td><center>".$data2[$i+184]."</center></td>
			<td><center>".$data2[$i+185]."</center></td>
			<td><center>".$data2[$i+186]."</center></td>
			<td><center>".$data2[$i+187]."</center></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO27.php'>Drawing 2 Fan 1 Top (+SG41=343N4-M414)</a></td>
			<td><center>".$data2[$i+187]."</center></td>
			<td><center>".$data2[$i+188]."</center></td>
			<td><center>".$data2[$i+189]."</center></td>
			<td><center>".$data2[$i+190]."</center></td>
			<td><center>".$data2[$i+191]."</center></td>
			<td><center>".$data2[$i+192]."</center></td>
			<td><center>".$data2[$i+193]."</center></td>
			<td><center>".$data2[$i+194]."</center></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO28.php'>Drawing 2 Fan 2 Top (+SG41=343N4-M614)</a></td>
			<td><center>".$data2[$i+194]."</center></td>
			<td><center>".$data2[$i+195]."</center></td>
			<td><center>".$data2[$i+196]."</center></td>
			<td><center>".$data2[$i+197]."</center></td>
			<td><center>".$data2[$i+198]."</center></td>
			<td><center>".$data2[$i+199]."</center></td>
			<td><center>".$data2[$i+200]."</center></td>
			<td><center>".$data2[$i+201]."</center></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO29.php'>Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)</a></td>
			<td><center>".$data2[$i+201]."</center></td>
			<td><center>".$data2[$i+202]."</center></td>
			<td><center>".$data2[$i+203]."</center></td>
			<td><center>".$data2[$i+204]."</center></td>
			<td><center>".$data2[$i+205]."</center></td>
			<td><center>".$data2[$i+206]."</center></td>
			<td><center>".$data2[$i+207]."</center></td>
			<td><center>".$data2[$i+208]."</center></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO30.php'>Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)</a></td>
			<td><center>".$data2[$i+208]."</center></td>
			<td><center>".$data2[$i+209]."</center></td>
			<td><center>".$data2[$i+210]."</center></td>
			<td><center>".$data2[$i+211]."</center></td>
			<td><center>".$data2[$i+212]."</center></td>
			<td><center>".$data2[$i+213]."</center></td>
			<td><center>".$data2[$i+214]."</center></td>
			<td><center>".$data2[$i+215]."</center></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO31.php'>Drawing 3 Fan 1 Top (+SG41=343N4-M814)</a></td>
			<td><center>".$data2[$i+215]."</center></td>
			<td><center>".$data2[$i+216]."</center></td>
			<td><center>".$data2[$i+217]."</center></td>
			<td><center>".$data2[$i+218]."</center></td>
			<td><center>".$data2[$i+219]."</center></td>
			<td><center>".$data2[$i+220]."</center></td>
			<td><center>".$data2[$i+221]."</center></td>
			<td><center>".$data2[$i+222]."</center></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO32.php'>Drawing 3 Fan 2 Top (+SG42=343M5-M014)</a></td>
			<td><center>".$data2[$i+222]."</center></td>
			<td><center>".$data2[$i+223]."</center></td>
			<td><center>".$data2[$i+224]."</center></td>
			<td><center>".$data2[$i+225]."</center></td>
			<td><center>".$data2[$i+226]."</center></td>
			<td><center>".$data2[$i+227]."</center></td>
			<td><center>".$data2[$i+228]."</center></td>
			<td><center>".$data2[$i+229]."</center></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO33.php'>Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)</a></td>
			<td><center>".$data2[$i+229]."</center></td>
			<td><center>".$data2[$i+230]."</center></td>
			<td><center>".$data2[$i+231]."</center></td>
			<td><center>".$data2[$i+232]."</center></td>
			<td><center>".$data2[$i+233]."</center></td>
			<td><center>".$data2[$i+234]."</center></td>
			<td><center>".$data2[$i+235]."</center></td>
			<td><center>".$data2[$i+236]."</center></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO34.php'>Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)</a></td>
			<td><center>".$data2[$i+236]."</center></td>
			<td><center>".$data2[$i+237]."</center></td>
			<td><center>".$data2[$i+238]."</center></td>
			<td><center>".$data2[$i+239]."</center></td>
			<td><center>".$data2[$i+240]."</center></td>
			<td><center>".$data2[$i+241]."</center></td>
			<td><center>".$data2[$i+242]."</center></td>
			<td><center>".$data2[$i+243]."</center></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO35.php'>Drawing 4 Fan 1 Top (+SG42=343M5-M214)</a></td>
			<td><center>".$data2[$i+243]."</center></td>
			<td><center>".$data2[$i+244]."</center></td>
			<td><center>".$data2[$i+245]."</center></td>
			<td><center>".$data2[$i+246]."</center></td>
			<td><center>".$data2[$i+247]."</center></td>
			<td><center>".$data2[$i+248]."</center></td>
			<td><center>".$data2[$i+249]."</center></td>
			<td><center>".$data2[$i+250]."</center></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO36.php'>Drawing 4 Fan 2 Top (+SG42=343M5-M414)</a></td>
			<td><center>".$data2[$i+250]."</center></td>
			<td><center>".$data2[$i+251]."</center></td>
			<td><center>".$data2[$i+252]."</center></td>
			<td><center>".$data2[$i+253]."</center></td>
			<td><center>".$data2[$i+254]."</center></td>
			<td><center>".$data2[$i+255]."</center></td>
			<td><center>".$data2[$i+256]."</center></td>
			<td><center>".$data2[$i+257]."</center></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO37.php'>Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)</a></td>
			<td><center>".$data2[$i+257]."</center></td>
			<td><center>".$data2[$i+258]."</center></td>
			<td><center>".$data2[$i+259]."</center></td>
			<td><center>".$data2[$i+260]."</center></td>
			<td><center>".$data2[$i+261]."</center></td>
			<td><center>".$data2[$i+262]."</center></td>
			<td><center>".$data2[$i+263]."</center></td>
			<td><center>".$data2[$i+264]."</center></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO38.php'>Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)</a></td>
			<td><center>".$data2[$i+264]."</center></td>
			<td><center>".$data2[$i+265]."</center></td>
			<td><center>".$data2[$i+266]."</center></td>
			<td><center>".$data2[$i+267]."</center></td>
			<td><center>".$data2[$i+268]."</center></td>
			<td><center>".$data2[$i+269]."</center></td>
			<td><center>".$data2[$i+270]."</center></td>
			<td><center>".$data2[$i+271]."</center></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO39.php'>Drawing 5 Fan 1 Top (+SG42=343M5-M614)</a></td>
			<td><center>".$data2[$i+271]."</center></td>
			<td><center>".$data2[$i+272]."</center></td>
			<td><center>".$data2[$i+273]."</center></td>
			<td><center>".$data2[$i+274]."</center></td>
			<td><center>".$data2[$i+275]."</center></td>
			<td><center>".$data2[$i+276]."</center></td>
			<td><center>".$data2[$i+277]."</center></td>
			<td><center>".$data2[$i+278]."</center></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO40.php'>Drawing 5 Fan 2 Top (+SG42=343M5-M814)</a></td>
			<td><center>".$data2[$i+278]."</center></td>
			<td><center>".$data2[$i+279]."</center></td>
			<td><center>".$data2[$i+280]."</center></td>
			<td><center>".$data2[$i+281]."</center></td>
			<td><center>".$data2[$i+282]."</center></td>
			<td><center>".$data2[$i+283]."</center></td>
			<td><center>".$data2[$i+284]."</center></td>
			<td><center>".$data2[$i+285]."</center></td>
			</tr>
			";
		}
		elseif($i==40){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO41.php'>Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)</a></td>
			<td><center>".$data2[$i+285]."</center></td>
			<td><center>".$data2[$i+286]."</center></td>
			<td><center>".$data2[$i+287]."</center></td>
			<td><center>".$data2[$i+288]."</center></td>
			<td><center>".$data2[$i+289]."</center></td>
			<td><center>".$data2[$i+290]."</center></td>
			<td><center>".$data2[$i+291]."</center></td>
			<td><center>".$data2[$i+292]."</center></td>
			</tr>
			";
		}
		elseif($i==41){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO42.php'>Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)</a></td>
			<td><center>".$data2[$i+292]."</center></td>
			<td><center>".$data2[$i+293]."</center></td>
			<td><center>".$data2[$i+294]."</center></td>
			<td><center>".$data2[$i+295]."</center></td>
			<td><center>".$data2[$i+296]."</center></td>
			<td><center>".$data2[$i+297]."</center></td>
			<td><center>".$data2[$i+298]."</center></td>
			<td><center>".$data2[$i+299]."</center></td>
			</tr>
			";
		}
		elseif($i==42){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO43.php'>Annealing 1 Fan 1 Top (+SG52=343M7-M014)</a></td>
			<td><center>".$data2[$i+299]."</center></td>
			<td><center>".$data2[$i+300]."</center></td>
			<td><center>".$data2[$i+301]."</center></td>
			<td><center>".$data2[$i+302]."</center></td>
			<td><center>".$data2[$i+303]."</center></td>
			<td><center>".$data2[$i+304]."</center></td>
			<td><center>".$data2[$i+305]."</center></td>
			<td><center>".$data2[$i+306]."</center></td>
			</tr>
			";
		}
		elseif($i==43){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO44.php'>Annealing 1 Fan 2 Top (+SG52=343M7-M214)</a></td>
			<td><center>".$data2[$i+306]."</center></td>
			<td><center>".$data2[$i+307]."</center></td>
			<td><center>".$data2[$i+308]."</center></td>
			<td><center>".$data2[$i+309]."</center></td>
			<td><center>".$data2[$i+310]."</center></td>
			<td><center>".$data2[$i+311]."</center></td>
			<td><center>".$data2[$i+312]."</center></td>
			<td><center>".$data2[$i+313]."</center></td>
			</tr>
			";
		}
		elseif($i==44){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO45.php'>Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)</a></td>
			<td><center>".$data2[$i+313]."</center></td>
			<td><center>".$data2[$i+314]."</center></td>
			<td><center>".$data2[$i+315]."</center></td>
			<td><center>".$data2[$i+316]."</center></td>
			<td><center>".$data2[$i+317]."</center></td>
			<td><center>".$data2[$i+318]."</center></td>
			<td><center>".$data2[$i+319]."</center></td>
			<td><center>".$data2[$i+320]."</center></td>
			</tr>
			";
		}
		elseif($i==45){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO46.php'>Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)</a></td>
			<td><center>".$data2[$i+320]."</center></td>
			<td><center>".$data2[$i+321]."</center></td>
			<td><center>".$data2[$i+322]."</center></td>
			<td><center>".$data2[$i+323]."</center></td>
			<td><center>".$data2[$i+324]."</center></td>
			<td><center>".$data2[$i+325]."</center></td>
			<td><center>".$data2[$i+326]."</center></td>
			<td><center>".$data2[$i+327]."</center></td>
			</tr>
			";
		}
		elseif($i==46){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO47.php'>Annealing 2 Fan 1 Top (+SG52=343M7-M414)</a></td>
			<td><center>".$data2[$i+327]."</center></td>
			<td><center>".$data2[$i+328]."</center></td>
			<td><center>".$data2[$i+329]."</center></td>
			<td><center>".$data2[$i+330]."</center></td>
			<td><center>".$data2[$i+331]."</center></td>
			<td><center>".$data2[$i+332]."</center></td>
			<td><center>".$data2[$i+333]."</center></td>
			<td><center>".$data2[$i+334]."</center></td>
			</tr>
			";
		}
		elseif($i==47){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO48.php'>Annealing 2 Fan 2 Top (+SG52=343M7-M614)</a></td>
			<td><center>".$data2[$i+334]."</center></td>
			<td><center>".$data2[$i+335]."</center></td>
			<td><center>".$data2[$i+336]."</center></td>
			<td><center>".$data2[$i+337]."</center></td>
			<td><center>".$data2[$i+338]."</center></td>
			<td><center>".$data2[$i+339]."</center></td>
			<td><center>".$data2[$i+340]."</center></td>
			<td><center>".$data2[$i+341]."</center></td>
			</tr>
			";
		}
		elseif($i==48){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO49.php'>Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)</a></td>
			<td><center>".$data2[$i+341]."</center></td>
			<td><center>".$data2[$i+342]."</center></td>
			<td><center>".$data2[$i+343]."</center></td>
			<td><center>".$data2[$i+344]."</center></td>
			<td><center>".$data2[$i+345]."</center></td>
			<td><center>".$data2[$i+346]."</center></td>
			<td><center>".$data2[$i+347]."</center></td>
			<td><center>".$data2[$i+348]."</center></td>
			</tr>
			";
		}
		elseif($i==49){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO50.php'>Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)</a></td>
			<td><center>".$data2[$i+348]."</center></td>
			<td><center>".$data2[$i+349]."</center></td>
			<td><center>".$data2[$i+350]."</center></td>
			<td><center>".$data2[$i+351]."</center></td>
			<td><center>".$data2[$i+352]."</center></td>
			<td><center>".$data2[$i+353]."</center></td>
			<td><center>".$data2[$i+354]."</center></td>
			<td><center>".$data2[$i+355]."</center></td>
			</tr>
			";
		}
		elseif($i==50){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO51.php'>Annealing 3 Fan 1 Top (+SG52=343M7-M814)</a></td>
			<td><center>".$data2[$i+355]."</center></td>
			<td><center>".$data2[$i+356]."</center></td>
			<td><center>".$data2[$i+357]."</center></td>
			<td><center>".$data2[$i+358]."</center></td>
			<td><center>".$data2[$i+359]."</center></td>
			<td><center>".$data2[$i+360]."</center></td>
			<td><center>".$data2[$i+361]."</center></td>
			<td><center>".$data2[$i+362]."</center></td>
			</tr>
			";
		}
		elseif($i==51){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO52.php'>Annealing 3 Fan 2 Top (+SG53=343N8-M014)</a></td>
			<td><center>".$data2[$i+362]."</center></td>
			<td><center>".$data2[$i+363]."</center></td>
			<td><center>".$data2[$i+364]."</center></td>
			<td><center>".$data2[$i+365]."</center></td>
			<td><center>".$data2[$i+366]."</center></td>
			<td><center>".$data2[$i+367]."</center></td>
			<td><center>".$data2[$i+368]."</center></td>
			<td><center>".$data2[$i+369]."</center></td>
			</tr>
			";
		}
		elseif($i==52){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO53.php'>Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)</a></td>
			<td><center>".$data2[$i+369]."</center></td>
			<td><center>".$data2[$i+370]."</center></td>
			<td><center>".$data2[$i+371]."</center></td>
			<td><center>".$data2[$i+372]."</center></td>
			<td><center>".$data2[$i+373]."</center></td>
			<td><center>".$data2[$i+374]."</center></td>
			<td><center>".$data2[$i+375]."</center></td>
			<td><center>".$data2[$i+376]."</center></td>
			</tr>
			";
		}
		elseif($i==53){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO54.php'>Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)</a></td>
			<td><center>".$data2[$i+376]."</center></td>
			<td><center>".$data2[$i+377]."</center></td>
			<td><center>".$data2[$i+378]."</center></td>
			<td><center>".$data2[$i+379]."</center></td>
			<td><center>".$data2[$i+380]."</center></td>
			<td><center>".$data2[$i+381]."</center></td>
			<td><center>".$data2[$i+382]."</center></td>
			<td><center>".$data2[$i+383]."</center></td>
			</tr>
			";
		}
		elseif($i==54){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO55.php'>Annealing 4 Fan 1 Top (+SG53=343N8-M214)</a></td>
			<td><center>".$data2[$i+383]."</center></td>
			<td><center>".$data2[$i+384]."</center></td>
			<td><center>".$data2[$i+385]."</center></td>
			<td><center>".$data2[$i+386]."</center></td>
			<td><center>".$data2[$i+387]."</center></td>
			<td><center>".$data2[$i+388]."</center></td>
			<td><center>".$data2[$i+389]."</center></td>
			<td><center>".$data2[$i+390]."</center></td>
			</tr>
			";
		}
		elseif($i==55){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO56.php'>Annealing 4 Fan 2 Top (+SG53=343N8-M414)</a></td>
			<td><center>".$data2[$i+390]."</center></td>
			<td><center>".$data2[$i+391]."</center></td>
			<td><center>".$data2[$i+392]."</center></td>
			<td><center>".$data2[$i+393]."</center></td>
			<td><center>".$data2[$i+394]."</center></td>
			<td><center>".$data2[$i+395]."</center></td>
			<td><center>".$data2[$i+396]."</center></td>
			<td><center>".$data2[$i+397]."</center></td>
			</tr>
			";
		}
		elseif($i==56){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO57.php'>Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)</a></td>
			<td><center>".$data2[$i+397]."</center></td>
			<td><center>".$data2[$i+398]."</center></td>
			<td><center>".$data2[$i+399]."</center></td>
			<td><center>".$data2[$i+400]."</center></td>
			<td><center>".$data2[$i+401]."</center></td>
			<td><center>".$data2[$i+402]."</center></td>
			<td><center>".$data2[$i+403]."</center></td>
			<td><center>".$data2[$i+404]."</center></td>
			</tr>
			";
		}
		elseif($i==57){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO58.php'>Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)</a></td>
			<td><center>".$data2[$i+404]."</center></td>
			<td><center>".$data2[$i+405]."</center></td>
			<td><center>".$data2[$i+406]."</center></td>
			<td><center>".$data2[$i+407]."</center></td>
			<td><center>".$data2[$i+408]."</center></td>
			<td><center>".$data2[$i+409]."</center></td>
			<td><center>".$data2[$i+410]."</center></td>
			<td><center>".$data2[$i+411]."</center></td>
			</tr>
			";
		}
		elseif($i==58){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO59.php'>Annealing 5 Fan 1 Top (+SG53=343N8-M614)</a></td>
			<td><center>".$data2[$i+411]."</center></td>
			<td><center>".$data2[$i+412]."</center></td>
			<td><center>".$data2[$i+413]."</center></td>
			<td><center>".$data2[$i+414]."</center></td>
			<td><center>".$data2[$i+415]."</center></td>
			<td><center>".$data2[$i+416]."</center></td>
			<td><center>".$data2[$i+417]."</center></td>
			<td><center>".$data2[$i+418]."</center></td>
			</tr>
			";
		}
		elseif($i==59){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO60.php'>Annealing 5 Fan 2 Top (+SG53=343N8-M814)</a></td>
			<td><center>".$data2[$i+418]."</center></td>
			<td><center>".$data2[$i+419]."</center></td>
			<td><center>".$data2[$i+420]."</center></td>
			<td><center>".$data2[$i+421]."</center></td>
			<td><center>".$data2[$i+422]."</center></td>
			<td><center>".$data2[$i+423]."</center></td>
			<td><center>".$data2[$i+424]."</center></td>
			<td><center>".$data2[$i+425]."</center></td>
			</tr>
			";
		}
		elseif($i==60){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO61.php'>Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)</a></td>
			<td><center>".$data2[$i+425]."</center></td>
			<td><center>".$data2[$i+426]."</center></td>
			<td><center>".$data2[$i+427]."</center></td>
			<td><center>".$data2[$i+428]."</center></td>
			<td><center>".$data2[$i+429]."</center></td>
			<td><center>".$data2[$i+430]."</center></td>
			<td><center>".$data2[$i+431]."</center></td>
			<td><center>".$data2[$i+432]."</center></td>
			</tr>
			";
		}
		elseif($i==61){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO62.php'>Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)</a></td>
			<td><center>".$data2[$i+432]."</center></td>
			<td><center>".$data2[$i+433]."</center></td>
			<td><center>".$data2[$i+434]."</center></td>
			<td><center>".$data2[$i+435]."</center></td>
			<td><center>".$data2[$i+436]."</center></td>
			<td><center>".$data2[$i+437]."</center></td>
			<td><center>".$data2[$i+438]."</center></td>
			<td><center>".$data2[$i+439]."</center></td>
			</tr>
			";
		}
		elseif($i==62){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO63.php'>Annealing 6 Fan 1 Top (+SG53=343N9-M014)</a></td>
			<td><center>".$data2[$i+439]."</center></td>
			<td><center>".$data2[$i+440]."</center></td>
			<td><center>".$data2[$i+441]."</center></td>
			<td><center>".$data2[$i+442]."</center></td>
			<td><center>".$data2[$i+443]."</center></td>
			<td><center>".$data2[$i+444]."</center></td>
			<td><center>".$data2[$i+445]."</center></td>
			<td><center>".$data2[$i+446]."</center></td>
			</tr>
			";
		}
		elseif($i==63){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO64.php'>Annealing 6 Fan 2 Top (+SG53=343N9-M214)</a></td>
			<td><center>".$data2[$i+446]."</center></td>
			<td><center>".$data2[$i+447]."</center></td>
			<td><center>".$data2[$i+448]."</center></td>
			<td><center>".$data2[$i+449]."</center></td>
			<td><center>".$data2[$i+450]."</center></td>
			<td><center>".$data2[$i+451]."</center></td>
			<td><center>".$data2[$i+452]."</center></td>
			<td><center>".$data2[$i+453]."</center></td>
			</tr>
			";
		}
		elseif($i==64){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO65.php'>Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)</a></td>
			<td><center>".$data2[$i+453]."</center></td>
			<td><center>".$data2[$i+454]."</center></td>
			<td><center>".$data2[$i+455]."</center></td>
			<td><center>".$data2[$i+456]."</center></td>
			<td><center>".$data2[$i+457]."</center></td>
			<td><center>".$data2[$i+458]."</center></td>
			<td><center>".$data2[$i+459]."</center></td>
			<td><center>".$data2[$i+460]."</center></td>
			</tr>
			";
		}
		elseif($i==65){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO66.php'>Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)</a></td>
			<td><center>".$data2[$i+460]."</center></td>
			<td><center>".$data2[$i+461]."</center></td>
			<td><center>".$data2[$i+462]."</center></td>
			<td><center>".$data2[$i+463]."</center></td>
			<td><center>".$data2[$i+464]."</center></td>
			<td><center>".$data2[$i+465]."</center></td>
			<td><center>".$data2[$i+466]."</center></td>
			<td><center>".$data2[$i+467]."</center></td>
			</tr>
			";
		}
		elseif($i==66){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO67.php'>Film Edge Cooling Fan Left (+SG63=345N5-M014)</a></td>
			<td><center>".$data2[$i+467]."</center></td>
			<td><center>".$data2[$i+468]."</center></td>
			<td><center>".$data2[$i+469]."</center></td>
			<td><center>".$data2[$i+470]."</center></td>
			<td><center>".$data2[$i+471]."</center></td>
			<td><center>".$data2[$i+472]."</center></td>
			<td><center>".$data2[$i+473]."</center></td>
			<td><center>".$data2[$i+474]."</center></td>
			</tr>
			";
		}
		elseif($i==67){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO68.php'>Film Edge Cooling Fan Right (+SG63=345N5-M114)</a></td>
			<td><center>".$data2[$i+474]."</center></td>
			<td><center>".$data2[$i+475]."</center></td>
			<td><center>".$data2[$i+476]."</center></td>
			<td><center>".$data2[$i+477]."</center></td>
			<td><center>".$data2[$i+478]."</center></td>
			<td><center>".$data2[$i+479]."</center></td>
			<td><center>".$data2[$i+480]."</center></td>
			<td><center>".$data2[$i+481]."</center></td>
			</tr>
			";
		}
		elseif($i==68){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO69.php'>Edge Guide Fan Left (+SD24=341MA-M050)</a></td>
			<td><center>".$data2[$i+481]."</center></td>
			<td><center>".$data2[$i+482]."</center></td>
			<td><center>".$data2[$i+483]."</center></td>
			<td><center>".$data2[$i+484]."</center></td>
			<td><center>".$data2[$i+485]."</center></td>
			<td><center>".$data2[$i+486]."</center></td>
			<td><center>".$data2[$i+487]."</center></td>
			<td><center>".$data2[$i+488]."</center></td>
			</tr>
			";
		}
		elseif($i==69){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO70.php'>Edge Guide Fan Right (+SD24=341MA-M250)</a></td>
			<td><center>".$data2[$i+488]."</center></td>
			<td><center>".$data2[$i+489]."</center></td>
			<td><center>".$data2[$i+490]."</center></td>
			<td><center>".$data2[$i+491]."</center></td>
			<td><center>".$data2[$i+492]."</center></td>
			<td><center>".$data2[$i+493]."</center></td>
			<td><center>".$data2[$i+494]."</center></td>
			<td><center>".$data2[$i+495]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Motor TDO Air Shower</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa3 = mysql_fetch_row($queryy3))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS1.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M021)</a></td>
			<td><center>".$data3[$i+2]."</center></td>
			<td><center>".$data3[$i+3]."</center></td>
			<td><center>".$data3[$i+4]."</center></td>
			<td><center>".$data3[$i+5]."</center></td>
			<td><center>".$data3[$i+6]."</center></td>
			<td><center>".$data3[$i+7]."</center></td>
			<td><center>".$data3[$i+8]."</center></td>
			<td><center>".$data3[$i+9]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS2.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M023)</a></td>
			<td><center>".$data3[$i+9]."</center></td>
			<td><center>".$data3[$i+10]."</center></td>
			<td><center>".$data3[$i+11]."</center></td>
			<td><center>".$data3[$i+12]."</center></td>
			<td><center>".$data3[$i+13]."</center></td>
			<td><center>".$data3[$i+14]."</center></td>
			<td><center>".$data3[$i+15]."</center></td>
			<td><center>".$data3[$i+16]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS3.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M071)</a></td>
			<td><center>".$data3[$i+16]."</center></td>
			<td><center>".$data3[$i+17]."</center></td>
			<td><center>".$data3[$i+18]."</center></td>
			<td><center>".$data3[$i+19]."</center></td>
			<td><center>".$data3[$i+20]."</center></td>
			<td><center>".$data3[$i+21]."</center></td>
			<td><center>".$data3[$i+22]."</center></td>
			<td><center>".$data3[$i+23]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS4.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M073)</a></td>
			<td><center>".$data3[$i+23]."</center></td>
			<td><center>".$data3[$i+24]."</center></td>
			<td><center>".$data3[$i+25]."</center></td>
			<td><center>".$data3[$i+26]."</center></td>
			<td><center>".$data3[$i+27]."</center></td>
			<td><center>".$data3[$i+28]."</center></td>
			<td><center>".$data3[$i+29]."</center></td>
			<td><center>".$data3[$i+30]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS5.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)</a></td>
			<td><center>".$data3[$i+30]."</center></td>
			<td><center>".$data3[$i+31]."</center></td>
			<td><center>".$data3[$i+32]."</center></td>
			<td><center>".$data3[$i+33]."</center></td>
			<td><center>".$data3[$i+34]."</center></td>
			<td><center>".$data3[$i+35]."</center></td>
			<td><center>".$data3[$i+36]."</center></td>
			<td><center>".$data3[$i+37]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS6.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)</a></td>
			<td><center>".$data3[$i+37]."</center></td>
			<td><center>".$data3[$i+38]."</center></td>
			<td><center>".$data3[$i+39]."</center></td>
			<td><center>".$data3[$i+40]."</center></td>
			<td><center>".$data3[$i+41]."</center></td>
			<td><center>".$data3[$i+42]."</center></td>
			<td><center>".$data3[$i+43]."</center></td>
			<td><center>".$data3[$i+44]."</center></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS7.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)</a></td>
			<td><center>".$data3[$i+44]."</center></td>
			<td><center>".$data3[$i+45]."</center></td>
			<td><center>".$data3[$i+46]."</center></td>
			<td><center>".$data3[$i+47]."</center></td>
			<td><center>".$data3[$i+48]."</center></td>
			<td><center>".$data3[$i+49]."</center></td>
			<td><center>".$data3[$i+50]."</center></td>
			<td><center>".$data3[$i+51]."</center></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS8.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)</a></td>
			<td><center>".$data3[$i+51]."</center></td>
			<td><center>".$data3[$i+52]."</center></td>
			<td><center>".$data3[$i+53]."</center></td>
			<td><center>".$data3[$i+54]."</center></td>
			<td><center>".$data3[$i+55]."</center></td>
			<td><center>".$data3[$i+56]."</center></td>
			<td><center>".$data3[$i+57]."</center></td>
			<td><center>".$data3[$i+58]."</center></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS9.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M221)</a></td>
			<td><center>".$data3[$i+58]."</center></td>
			<td><center>".$data3[$i+59]."</center></td>
			<td><center>".$data3[$i+60]."</center></td>
			<td><center>".$data3[$i+61]."</center></td>
			<td><center>".$data3[$i+62]."</center></td>
			<td><center>".$data3[$i+63]."</center></td>
			<td><center>".$data3[$i+64]."</center></td>
			<td><center>".$data3[$i+65]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS10.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M223)</a></td>
			<td><center>".$data3[$i+65]."</center></td>
			<td><center>".$data3[$i+66]."</center></td>
			<td><center>".$data3[$i+67]."</center></td>
			<td><center>".$data3[$i+68]."</center></td>
			<td><center>".$data3[$i+69]."</center></td>
			<td><center>".$data3[$i+70]."</center></td>
			<td><center>".$data3[$i+71]."</center></td>
			<td><center>".$data3[$i+72]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS11.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M271)</a></td>
			<td><center>".$data3[$i+72]."</center></td>
			<td><center>".$data3[$i+73]."</center></td>
			<td><center>".$data3[$i+74]."</center></td>
			<td><center>".$data3[$i+75]."</center></td>
			<td><center>".$data3[$i+76]."</center></td>
			<td><center>".$data3[$i+77]."</center></td>
			<td><center>".$data3[$i+78]."</center></td>
			<td><center>".$data3[$i+79]."</center></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS12.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M273)</a></td>
			<td><center>".$data3[$i+79]."</center></td>
			<td><center>".$data3[$i+80]."</center></td>
			<td><center>".$data3[$i+81]."</center></td>
			<td><center>".$data3[$i+82]."</center></td>
			<td><center>".$data3[$i+83]."</center></td>
			<td><center>".$data3[$i+84]."</center></td>
			<td><center>".$data3[$i+85]."</center></td>
			<td><center>".$data3[$i+86]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS13.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)</a></td>
			<td><center>".$data3[$i+86]."</center></td>
			<td><center>".$data3[$i+87]."</center></td>
			<td><center>".$data3[$i+88]."</center></td>
			<td><center>".$data3[$i+89]."</center></td>
			<td><center>".$data3[$i+90]."</center></td>
			<td><center>".$data3[$i+91]."</center></td>
			<td><center>".$data3[$i+92]."</center></td>
			<td><center>".$data3[$i+93]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS14.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)</a></td>
			<td><center>".$data3[$i+93]."</center></td>
			<td><center>".$data3[$i+94]."</center></td>
			<td><center>".$data3[$i+95]."</center></td>
			<td><center>".$data3[$i+96]."</center></td>
			<td><center>".$data3[$i+97]."</center></td>
			<td><center>".$data3[$i+98]."</center></td>
			<td><center>".$data3[$i+99]."</center></td>
			<td><center>".$data3[$i+100]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS15.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)</a></td>
			<td><center>".$data3[$i+100]."</center></td>
			<td><center>".$data3[$i+101]."</center></td>
			<td><center>".$data3[$i+102]."</center></td>
			<td><center>".$data3[$i+103]."</center></td>
			<td><center>".$data3[$i+104]."</center></td>
			<td><center>".$data3[$i+105]."</center></td>
			<td><center>".$data3[$i+106]."</center></td>
			<td><center>".$data3[$i+107]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS16.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)</a></td>
			<td><center>".$data3[$i+107]."</center></td>
			<td><center>".$data3[$i+108]."</center></td>
			<td><center>".$data3[$i+109]."</center></td>
			<td><center>".$data3[$i+110]."</center></td>
			<td><center>".$data3[$i+111]."</center></td>
			<td><center>".$data3[$i+112]."</center></td>
			<td><center>".$data3[$i+113]."</center></td>
			<td><center>".$data3[$i+114]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS17.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M421)</a></td>
			<td><center>".$data3[$i+114]."</center></td>
			<td><center>".$data3[$i+115]."</center></td>
			<td><center>".$data3[$i+116]."</center></td>
			<td><center>".$data3[$i+117]."</center></td>
			<td><center>".$data3[$i+118]."</center></td>
			<td><center>".$data3[$i+119]."</center></td>
			<td><center>".$data3[$i+120]."</center></td>
			<td><center>".$data3[$i+121]."</center></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS18.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M423)</a></td>
			<td><center>".$data3[$i+121]."</center></td>
			<td><center>".$data3[$i+122]."</center></td>
			<td><center>".$data3[$i+123]."</center></td>
			<td><center>".$data3[$i+124]."</center></td>
			<td><center>".$data3[$i+125]."</center></td>
			<td><center>".$data3[$i+126]."</center></td>
			<td><center>".$data3[$i+127]."</center></td>
			<td><center>".$data3[$i+128]."</center></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS19.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M471)</a></td>
			<td><center>".$data3[$i+128]."</center></td>
			<td><center>".$data3[$i+129]."</center></td>
			<td><center>".$data3[$i+130]."</center></td>
			<td><center>".$data3[$i+131]."</center></td>
			<td><center>".$data3[$i+132]."</center></td>
			<td><center>".$data3[$i+133]."</center></td>
			<td><center>".$data3[$i+134]."</center></td>
			<td><center>".$data3[$i+135]."</center></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS20.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M473)</a></td>
			<td><center>".$data3[$i+135]."</center></td>
			<td><center>".$data3[$i+136]."</center></td>
			<td><center>".$data3[$i+137]."</center></td>
			<td><center>".$data3[$i+138]."</center></td>
			<td><center>".$data3[$i+139]."</center></td>
			<td><center>".$data3[$i+140]."</center></td>
			<td><center>".$data3[$i+141]."</center></td>
			<td><center>".$data3[$i+142]."</center></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS21.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)</a></td>
			<td><center>".$data3[$i+142]."</center></td>
			<td><center>".$data3[$i+143]."</center></td>
			<td><center>".$data3[$i+144]."</center></td>
			<td><center>".$data3[$i+145]."</center></td>
			<td><center>".$data3[$i+146]."</center></td>
			<td><center>".$data3[$i+147]."</center></td>
			<td><center>".$data3[$i+148]."</center></td>
			<td><center>".$data3[$i+149]."</center></td>
			</tr>
			";
		}elseif($i==21){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS22.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)</a></td>
			<td><center>".$data3[$i+149]."</center></td>
			<td><center>".$data3[$i+150]."</center></td>
			<td><center>".$data3[$i+151]."</center></td>
			<td><center>".$data3[$i+152]."</center></td>
			<td><center>".$data3[$i+153]."</center></td>
			<td><center>".$data3[$i+154]."</center></td>
			<td><center>".$data3[$i+155]."</center></td>
			<td><center>".$data3[$i+156]."</center></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS23.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)</a></td>
			<td><center>".$data3[$i+156]."</center></td>
			<td><center>".$data3[$i+157]."</center></td>
			<td><center>".$data3[$i+158]."</center></td>
			<td><center>".$data3[$i+159]."</center></td>
			<td><center>".$data3[$i+160]."</center></td>
			<td><center>".$data3[$i+161]."</center></td>
			<td><center>".$data3[$i+162]."</center></td>
			<td><center>".$data3[$i+163]."</center></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS24.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)</a></td>
			<td><center>".$data3[$i+163]."</center></td>
			<td><center>".$data3[$i+164]."</center></td>
			<td><center>".$data3[$i+165]."</center></td>
			<td><center>".$data3[$i+166]."</center></td>
			<td><center>".$data3[$i+167]."</center></td>
			<td><center>".$data3[$i+168]."</center></td>
			<td><center>".$data3[$i+169]."</center></td>
			<td><center>".$data3[$i+170]."</center></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS25.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M621)</a></td>
			<td><center>".$data3[$i+170]."</center></td>
			<td><center>".$data3[$i+171]."</center></td>
			<td><center>".$data3[$i+172]."</center></td>
			<td><center>".$data3[$i+173]."</center></td>
			<td><center>".$data3[$i+174]."</center></td>
			<td><center>".$data3[$i+175]."</center></td>
			<td><center>".$data3[$i+176]."</center></td>
			<td><center>".$data3[$i+177]."</center></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS26.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M623)</a></td>
			<td><center>".$data3[$i+177]."</center></td>
			<td><center>".$data3[$i+178]."</center></td>
			<td><center>".$data3[$i+179]."</center></td>
			<td><center>".$data3[$i+180]."</center></td>
			<td><center>".$data3[$i+181]."</center></td>
			<td><center>".$data3[$i+182]."</center></td>
			<td><center>".$data3[$i+183]."</center></td>
			<td><center>".$data3[$i+184]."</center></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS27.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M671)</a></td>
			<td><center>".$data3[$i+184]."</center></td>
			<td><center>".$data3[$i+185]."</center></td>
			<td><center>".$data3[$i+186]."</center></td>
			<td><center>".$data3[$i+187]."</center></td>
			<td><center>".$data3[$i+188]."</center></td>
			<td><center>".$data3[$i+189]."</center></td>
			<td><center>".$data3[$i+190]."</center></td>
			<td><center>".$data3[$i+191]."</center></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS28.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M673)</a></td>
			<td><center>".$data3[$i+191]."</center></td>
			<td><center>".$data3[$i+192]."</center></td>
			<td><center>".$data3[$i+193]."</center></td>
			<td><center>".$data3[$i+194]."</center></td>
			<td><center>".$data3[$i+195]."</center></td>
			<td><center>".$data3[$i+196]."</center></td>
			<td><center>".$data3[$i+197]."</center></td>
			<td><center>".$data3[$i+198]."</center></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS29.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)</a></td>
			<td><center>".$data3[$i+198]."</center></td>
			<td><center>".$data3[$i+199]."</center></td>
			<td><center>".$data3[$i+200]."</center></td>
			<td><center>".$data3[$i+201]."</center></td>
			<td><center>".$data3[$i+202]."</center></td>
			<td><center>".$data3[$i+203]."</center></td>
			<td><center>".$data3[$i+204]."</center></td>
			<td><center>".$data3[$i+205]."</center></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS30.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)</a></td>
			<td><center>".$data3[$i+205]."</center></td>
			<td><center>".$data3[$i+206]."</center></td>
			<td><center>".$data3[$i+207]."</center></td>
			<td><center>".$data3[$i+208]."</center></td>
			<td><center>".$data3[$i+209]."</center></td>
			<td><center>".$data3[$i+210]."</center></td>
			<td><center>".$data3[$i+211]."</center></td>
			<td><center>".$data3[$i+212]."</center></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS31.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)</a></td>
			<td><center>".$data3[$i+212]."</center></td>
			<td><center>".$data3[$i+213]."</center></td>
			<td><center>".$data3[$i+214]."</center></td>
			<td><center>".$data3[$i+215]."</center></td>
			<td><center>".$data3[$i+216]."</center></td>
			<td><center>".$data3[$i+217]."</center></td>
			<td><center>".$data3[$i+218]."</center></td>
			<td><center>".$data3[$i+219]."</center></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS32.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)</a></td>
			<td><center>".$data3[$i+219]."</center></td>
			<td><center>".$data3[$i+220]."</center></td>
			<td><center>".$data3[$i+221]."</center></td>
			<td><center>".$data3[$i+222]."</center></td>
			<td><center>".$data3[$i+223]."</center></td>
			<td><center>".$data3[$i+224]."</center></td>
			<td><center>".$data3[$i+225]."</center></td>
			<td><center>".$data3[$i+226]."</center></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS33.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M821)</a></td>
			<td><center>".$data3[$i+226]."</center></td>
			<td><center>".$data3[$i+227]."</center></td>
			<td><center>".$data3[$i+228]."</center></td>
			<td><center>".$data3[$i+229]."</center></td>
			<td><center>".$data3[$i+230]."</center></td>
			<td><center>".$data3[$i+231]."</center></td>
			<td><center>".$data3[$i+232]."</center></td>
			<td><center>".$data3[$i+233]."</center></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS34.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M823)</a></td>
			<td><center>".$data3[$i+233]."</center></td>
			<td><center>".$data3[$i+234]."</center></td>
			<td><center>".$data3[$i+235]."</center></td>
			<td><center>".$data3[$i+236]."</center></td>
			<td><center>".$data3[$i+237]."</center></td>
			<td><center>".$data3[$i+238]."</center></td>
			<td><center>".$data3[$i+239]."</center></td>
			<td><center>".$data3[$i+240]."</center></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS35.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M871)</a></td>
			<td><center>".$data3[$i+240]."</center></td>
			<td><center>".$data3[$i+241]."</center></td>
			<td><center>".$data3[$i+242]."</center></td>
			<td><center>".$data3[$i+243]."</center></td>
			<td><center>".$data3[$i+244]."</center></td>
			<td><center>".$data3[$i+245]."</center></td>
			<td><center>".$data3[$i+246]."</center></td>
			<td><center>".$data3[$i+247]."</center></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS36.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M873)</a></td>
			<td><center>".$data3[$i+247]."</center></td>
			<td><center>".$data3[$i+248]."</center></td>
			<td><center>".$data3[$i+249]."</center></td>
			<td><center>".$data3[$i+250]."</center></td>
			<td><center>".$data3[$i+251]."</center></td>
			<td><center>".$data3[$i+252]."</center></td>
			<td><center>".$data3[$i+253]."</center></td>
			<td><center>".$data3[$i+254]."</center></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS37.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)</a></td>
			<td><center>".$data3[$i+254]."</center></td>
			<td><center>".$data3[$i+255]."</center></td>
			<td><center>".$data3[$i+256]."</center></td>
			<td><center>".$data3[$i+257]."</center></td>
			<td><center>".$data3[$i+258]."</center></td>
			<td><center>".$data3[$i+259]."</center></td>
			<td><center>".$data3[$i+260]."</center></td>
			<td><center>".$data3[$i+261]."</center></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS38.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)</a></td>
			<td><center>".$data3[$i+261]."</center></td>
			<td><center>".$data3[$i+262]."</center></td>
			<td><center>".$data3[$i+263]."</center></td>
			<td><center>".$data3[$i+264]."</center></td>
			<td><center>".$data3[$i+265]."</center></td>
			<td><center>".$data3[$i+266]."</center></td>
			<td><center>".$data3[$i+267]."</center></td>
			<td><center>".$data3[$i+268]."</center></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS39.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)</a></td>
			<td><center>".$data3[$i+268]."</center></td>
			<td><center>".$data3[$i+269]."</center></td>
			<td><center>".$data3[$i+270]."</center></td>
			<td><center>".$data3[$i+271]."</center></td>
			<td><center>".$data3[$i+272]."</center></td>
			<td><center>".$data3[$i+273]."</center></td>
			<td><center>".$data3[$i+274]."</center></td>
			<td><center>".$data3[$i+275]."</center></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS40.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)</a></td>
			<td><center>".$data3[$i+275]."</center></td>
			<td><center>".$data3[$i+276]."</center></td>
			<td><center>".$data3[$i+277]."</center></td>
			<td><center>".$data3[$i+278]."</center></td>
			<td><center>".$data3[$i+279]."</center></td>
			<td><center>".$data3[$i+280]."</center></td>
			<td><center>".$data3[$i+281]."</center></td>
			<td><center>".$data3[$i+282]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Pull Roll HCU</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa4 = mysql_fetch_row($queryy4))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll1.php'>Pump Heating Cooling Unit Inlet (+SG82=374U1-M010)</a></td>
			<td><center>".$data4[$i+2]."</center></td>
			<td><center>".$data4[$i+3]."</center></td>
			<td><center>".$data4[$i+4]."</center></td>
			<td><center>".$data4[$i+5]."</center></td>
			<td><center>".$data4[$i+6]."</center></td>
			<td><center>".$data4[$i+7]."</center></td>
			<td><center>".$data4[$i+8]."</center></td>
			<td><center>".$data4[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll2.php'>Pump Flame Treatment Top (+SG82=374U1-M110)</a></td>
			<td><center>".$data4[$i+9]."</center></td>
			<td><center>".$data4[$i+10]."</center></td>
			<td><center>".$data4[$i+11]."</center></td>
			<td><center>".$data4[$i+12]."</center></td>
			<td><center>".$data4[$i+13]."</center></td>
			<td><center>".$data4[$i+14]."</center></td>
			<td><center>".$data4[$i+15]."</center></td>
			<td><center>".$data4[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll3.php'>Pump Corona Bottom (+SG82=374U1-M210)</a></td>
			<td><center>".$data4[$i+16]."</center></td>
			<td><center>".$data4[$i+17]."</center></td>
			<td><center>".$data4[$i+18]."</center></td>
			<td><center>".$data4[$i+19]."</center></td>
			<td><center>".$data4[$i+20]."</center></td>
			<td><center>".$data4[$i+21]."</center></td>
			<td><center>".$data4[$i+22]."</center></td>
			<td><center>".$data4[$i+23]."</center></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll4.php'>Pump Corona Top (+SG82=374U1-M310)</a></td>
			<td><center>".$data4[$i+23]."</center></td>
			<td><center>".$data4[$i+24]."</center></td>
			<td><center>".$data4[$i+25]."</center></td>
			<td><center>".$data4[$i+26]."</center></td>
			<td><center>".$data4[$i+27]."</center></td>
			<td><center>".$data4[$i+28]."</center></td>
			<td><center>".$data4[$i+29]."</center></td>
			<td><center>".$data4[$i+30]."</center></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll5.php'>Pump Heating Cooling Unit Outlet (+SG82=374U1-M410)</a></td>
			<td><center>".$data4[$i+30]."</center></td>
			<td><center>".$data4[$i+31]."</center></td>
			<td><center>".$data4[$i+32]."</center></td>
			<td><center>".$data4[$i+33]."</center></td>
			<td><center>".$data4[$i+34]."</center></td>
			<td><center>".$data4[$i+35]."</center></td>
			<td><center>".$data4[$i+36]."</center></td>
			<td><center>".$data4[$i+37]."</center></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll6.php'>Fan Corona Exhaust Top (+SG81=376N1-M111)</a></td>
			<td><center>".$data4[$i+37]."</center></td>
			<td><center>".$data4[$i+38]."</center></td>
			<td><center>".$data4[$i+39]."</center></td>
			<td><center>".$data4[$i+40]."</center></td>
			<td><center>".$data4[$i+41]."</center></td>
			<td><center>".$data4[$i+42]."</center></td>
			<td><center>".$data4[$i+43]."</center></td>
			<td><center>".$data4[$i+44]."</center></td>
			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll7.php'>Fan Corona Exhaust Bottom (+SG81=376N1-M011)</a></td>
			<td><center>".$data4[$i+44]."</center></td>
			<td><center>".$data4[$i+45]."</center></td>
			<td><center>".$data4[$i+46]."</center></td>
			<td><center>".$data4[$i+47]."</center></td>
			<td><center>".$data4[$i+48]."</center></td>
			<td><center>".$data4[$i+49]."</center></td>
			<td><center>".$data4[$i+50]."</center></td>
			<td><center>".$data4[$i+51]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Airing System</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa5 = mysql_fetch_row($queryy5))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS1.php'>Fan Cooling Exhaust Top (+SG64=347N1-M434)</a></td>
			<td><center>".$data5[$i+2]."</center></td>
			<td><center>".$data5[$i+3]."</center></td>
			<td><center>".$data5[$i+4]."</center></td>
			<td><center>".$data5[$i+5]."</center></td>
			<td><center>".$data5[$i+6]."</center></td>
			<td><center>".$data5[$i+7]."</center></td>
			<td><center>".$data5[$i+8]."</center></td>
			<td><center>".$data5[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS2.php'>Fan Cooling Exhaust Top 1 (+SG63=347N1-M414)</a></td>
			<td><center>".$data5[$i+9]."</center></td>
			<td><center>".$data5[$i+10]."</center></td>
			<td><center>".$data5[$i+11]."</center></td>
			<td><center>".$data5[$i+12]."</center></td>
			<td><center>".$data5[$i+13]."</center></td>
			<td><center>".$data5[$i+14]."</center></td>
			<td><center>".$data5[$i+15]."</center></td>
			<td><center>".$data5[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS3.php'>Airing Fan 1 (+SG64=347N1-M014)</a></td>
			<td><center>".$data5[$i+16]."</center></td>
			<td><center>".$data5[$i+17]."</center></td>
			<td><center>".$data5[$i+18]."</center></td>
			<td><center>".$data5[$i+19]."</center></td>
			<td><center>".$data5[$i+20]."</center></td>
			<td><center>".$data5[$i+21]."</center></td>
			<td><center>".$data5[$i+22]."</center></td>
			<td><center>".$data5[$i+23]."</center></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS4.php'>Airing Supply Fan 1 (+SG63=347N1-M114)</a></td>
			<td><center>".$data5[$i+23]."</center></td>
			<td><center>".$data5[$i+24]."</center></td>
			<td><center>".$data5[$i+25]."</center></td>
			<td><center>".$data5[$i+26]."</center></td>
			<td><center>".$data5[$i+27]."</center></td>
			<td><center>".$data5[$i+28]."</center></td>
			<td><center>".$data5[$i+29]."</center></td>
			<td><center>".$data5[$i+30]."</center></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS5.php'>Airing Fan Exhaust Neutral (+SG63=347N1-M214)</a></td>
			<td><center>".$data5[$i+30]."</center></td>
			<td><center>".$data5[$i+31]."</center></td>
			<td><center>".$data5[$i+32]."</center></td>
			<td><center>".$data5[$i+33]."</center></td>
			<td><center>".$data5[$i+34]."</center></td>
			<td><center>".$data5[$i+35]."</center></td>
			<td><center>".$data5[$i+36]."</center></td>
			<td><center>".$data5[$i+37]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Big Silo Storage</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa6 = mysql_fetch_row($queryy6))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo1.php'>Big Bag Blowing Station Fan 1 (+SR13=211N1-M010)</a></td>
			<td><center>".$data6[$i+2]."</center></td>
			<td><center>".$data6[$i+3]."</center></td>
			<td><center>".$data6[$i+4]."</center></td>
			<td><center>".$data6[$i+5]."</center></td>
			<td><center>".$data6[$i+6]."</center></td>
			<td><center>".$data6[$i+7]."</center></td>
			<td><center>".$data6[$i+8]."</center></td>
			<td><center>".$data6[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo2.php'>Big Bag Rotary Valve 1 (+SR13=211O1-M024)</a></td>
			<td><center>".$data6[$i+9]."</center></td>
			<td><center>".$data6[$i+10]."</center></td>
			<td><center>".$data6[$i+11]."</center></td>
			<td><center>".$data6[$i+12]."</center></td>
			<td><center>".$data6[$i+13]."</center></td>
			<td><center>".$data6[$i+14]."</center></td>
			<td><center>".$data6[$i+15]."</center></td>
			<td><center>".$data6[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo3.php'>Silo Blowing Station Fan 1 (+SR13=211N1-M110)</a></td>
			<td><center>".$data6[$i+16]."</center></td>
			<td><center>".$data6[$i+17]."</center></td>
			<td><center>".$data6[$i+18]."</center></td>
			<td><center>".$data6[$i+19]."</center></td>
			<td><center>".$data6[$i+20]."</center></td>
			<td><center>".$data6[$i+21]."</center></td>
			<td><center>".$data6[$i+22]."</center></td>
			<td><center>".$data6[$i+23]."</center></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo4.php'>Rotary Valve 1 (+SR13=211T1-M014)</a></td>
			<td><center>".$data6[$i+23]."</center></td>
			<td><center>".$data6[$i+24]."</center></td>
			<td><center>".$data6[$i+25]."</center></td>
			<td><center>".$data6[$i+26]."</center></td>
			<td><center>".$data6[$i+27]."</center></td>
			<td><center>".$data6[$i+28]."</center></td>
			<td><center>".$data6[$i+29]."</center></td>
			<td><center>".$data6[$i+30]."</center></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo5.php'>Rotary Valve 2 (+SR13=211T1-M114)</a></td>
			<td><center>".$data6[$i+30]."</center></td>
			<td><center>".$data6[$i+31]."</center></td>
			<td><center>".$data6[$i+32]."</center></td>
			<td><center>".$data6[$i+33]."</center></td>
			<td><center>".$data6[$i+34]."</center></td>
			<td><center>".$data6[$i+35]."</center></td>
			<td><center>".$data6[$i+36]."</center></td>
			<td><center>".$data6[$i+37]."</center></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo6.php'>Rotary Valve 3 (+SR13=211T1-M164)</a></td>
			<td><center>".$data6[$i+37]."</center></td>
			<td><center>".$data6[$i+38]."</center></td>
			<td><center>".$data6[$i+39]."</center></td>
			<td><center>".$data6[$i+40]."</center></td>
			<td><center>".$data6[$i+41]."</center></td>
			<td><center>".$data6[$i+42]."</center></td>
			<td><center>".$data6[$i+43]."</center></td>
			<td><center>".$data6[$i+44]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Main Extruder</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa7 = mysql_fetch_row($queryy7))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt1.php'>Main Extruder</a></td>
			<td><center>".$data7[$i+2]."</center></td>
			<td><center>".$data7[$i+3]."</center></td>
			<td><center>".$data7[$i+4]."</center></td>
			<td><center>".$data7[$i+5]."</center></td>
			<td><center>".$data7[$i+6]."</center></td>
			<td><center>".$data7[$i+7]."</center></td>
			<td><center>".$data7[$i+8]."</center></td>
			<td><center>".$data7[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt2.php'>Melt Pump</a></td>
			<td><center>".$data7[$i+9]."</center></td>
			<td><center>".$data7[$i+10]."</center></td>
			<td><center>".$data7[$i+11]."</center></td>
			<td><center>".$data7[$i+12]."</center></td>
			<td><center>".$data7[$i+13]."</center></td>
			<td><center>".$data7[$i+14]."</center></td>
			<td><center>".$data7[$i+15]."</center></td>
			<td><center>".$data7[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt3.php'>Co Extruder 1</a></td>
			<td><center>".$data7[$i+16]."</center></td>
			<td><center>".$data7[$i+17]."</center></td>
			<td><center>".$data7[$i+18]."</center></td>
			<td><center>".$data7[$i+19]."</center></td>
			<td><center>".$data7[$i+20]."</center></td>
			<td><center>".$data7[$i+21]."</center></td>
			<td><center>".$data7[$i+22]."</center></td>
			<td><center>".$data7[$i+23]."</center></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt4.php'>Co Extruder 2</a></td>
			<td><center>".$data7[$i+23]."</center></td>
			<td><center>".$data7[$i+24]."</center></td>
			<td><center>".$data7[$i+25]."</center></td>
			<td><center>".$data7[$i+26]."</center></td>
			<td><center>".$data7[$i+27]."</center></td>
			<td><center>".$data7[$i+28]."</center></td>
			<td><center>".$data7[$i+29]."</center></td>
			<td><center>".$data7[$i+30]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Erema</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa8 = mysql_fetch_row($queryy8))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema1.php'>Motor Extruder</a></td>
			<td><center>".$data8[$i+2]."</center></td>
			<td><center>".$data8[$i+3]."</center></td>
			<td><center>".$data8[$i+4]."</center></td>
			<td><center>".$data8[$i+5]."</center></td>
			<td><center>".$data8[$i+6]."</center></td>
			<td><center>".$data8[$i+7]."</center></td>
			<td><center>".$data8[$i+8]."</center></td>
			<td><center>".$data8[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema2.php'>Motor Compactor</a></td>
			<td><center>".$data8[$i+9]."</center></td>
			<td><center>".$data8[$i+10]."</center></td>
			<td><center>".$data8[$i+11]."</center></td>
			<td><center>".$data8[$i+12]."</center></td>
			<td><center>".$data8[$i+13]."</center></td>
			<td><center>".$data8[$i+14]."</center></td>
			<td><center>".$data8[$i+15]."</center></td>
			<td><center>".$data8[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema3.php'>TF. Regran</a></td>
			<td><center>".$data8[$i+16]."</center></td>
			<td><center>".$data8[$i+17]."</center></td>
			<td><center>".$data8[$i+18]."</center></td>
			<td><center>".$data8[$i+19]."</center></td>
			<td><center>".$data8[$i+20]."</center></td>
			<td><center>".$data8[$i+21]."</center></td>
			<td><center>".$data8[$i+22]."</center></td>
			<td><center>".$data8[$i+23]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Small Grinder</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa9 = mysql_fetch_row($queryy9))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder1.php'>Motor Grinder</a></td>
			<td><center>".$data9[$i+2]."</center></td>
			<td><center>".$data9[$i+3]."</center></td>
			<td><center>".$data9[$i+4]."</center></td>
			<td><center>".$data9[$i+5]."</center></td>
			<td><center>".$data9[$i+6]."</center></td>
			<td><center>".$data9[$i+7]."</center></td>
			<td><center>".$data9[$i+8]."</center></td>
			<td><center>".$data9[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder2.php'>Conveying Fan 1</a></td>
			<td><center>".$data9[$i+9]."</center></td>
			<td><center>".$data9[$i+10]."</center></td>
			<td><center>".$data9[$i+11]."</center></td>
			<td><center>".$data9[$i+12]."</center></td>
			<td><center>".$data9[$i+13]."</center></td>
			<td><center>".$data9[$i+14]."</center></td>
			<td><center>".$data9[$i+15]."</center></td>
			<td><center>".$data9[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder3.php'>Conveying Fan 2</a></td>
			<td><center>".$data9[$i+16]."</center></td>
			<td><center>".$data9[$i+17]."</center></td>
			<td><center>".$data9[$i+18]."</center></td>
			<td><center>".$data9[$i+19]."</center></td>
			<td><center>".$data9[$i+20]."</center></td>
			<td><center>".$data9[$i+21]."</center></td>
			<td><center>".$data9[$i+22]."</center></td>
			<td><center>".$data9[$i+23]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Big Grinder</th>
		<th colspan="3">Vibrasi Motor</th>
		<th rowspan="2">Temperature</th>
		<th colspan="3">Arus</th>
		<th rowspan="2">Keterangan</th>
			<tr>
			<th>DE</th>
			<th>NDE Axial</th>
			<th>NDE Radial</th>
			<th>R</th>
			<th>S</th>
			<th>T</th>
			</tr>
		</tr>
	';

	$i=0;
	while($dataa10 = mysql_fetch_row($queryy10))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder1.php'>Motor Grinder</a></td>
			<td><center>".$data10[$i+2]."</center></td>
			<td><center>".$data10[$i+3]."</center></td>
			<td><center>".$data10[$i+4]."</center></td>
			<td><center>".$data10[$i+5]."</center></td>
			<td><center>".$data10[$i+6]."</center></td>
			<td><center>".$data10[$i+7]."</center></td>
			<td><center>".$data10[$i+8]."</center></td>
			<td><center>".$data10[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder2.php'>Conveying Fan 1</a></td>
			<td><center>".$data10[$i+9]."</center></td>
			<td><center>".$data10[$i+10]."</center></td>
			<td><center>".$data10[$i+11]."</center></td>
			<td><center>".$data10[$i+12]."</center></td>
			<td><center>".$data10[$i+13]."</center></td>
			<td><center>".$data10[$i+14]."</center></td>
			<td><center>".$data10[$i+15]."</center></td>
			<td><center>".$data10[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder3.php'>Conveying Fan 2</a></td>
			<td><center>".$data10[$i+16]."</center></td>
			<td><center>".$data10[$i+17]."</center></td>
			<td><center>".$data10[$i+18]."</center></td>
			<td><center>".$data10[$i+19]."</center></td>
			<td><center>".$data10[$i+20]."</center></td>
			<td><center>".$data10[$i+21]."</center></td>
			<td><center>".$data10[$i+22]."</center></td>
			<td><center>".$data10[$i+23]."</center></td>
			</tr>
			";
		}
		$i++;
	}
?>
</table>

<form method="POST" action="WebTampilanCheckLine6.php">
<input class="check" type="submit" name="Check" value="Check">
</form>

<form method="POST" action="../MainPagePC.php">
<input class="main" type="submit" name="mainpagepc" value="<< Main Page">
</form>
<br>
<br><br><br>
</body>
</html>