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
		width: 180px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.main:hover{
		border: #e6b800 solid;
		background-color: #e6b800;
		color: white;
	}
</style>
<div class="head">
<h1>Result Form Checklist Electrical Line 7</h1>
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
<table border = 1 width = 1100>

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_7_casting` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_7_ext` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_7_tdoairing` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_7_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_7_tdoas` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_7_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query6 = mysql_query("SELECT * FROM `form_checklist_line_7_bigsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query7 = mysql_query("SELECT * FROM `form_checklist_line_7_mdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query8 = mysql_query("SELECT * FROM `form_checklist_line_7_mdohcu` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);
	$data6 = mysql_fetch_row($query6);
	$data7 = mysql_fetch_row($query7);
	$data8 = mysql_fetch_row($query8);
	
	if($query=='0'){
		echo"Data Casting Tidak Ada";
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
	while($i<=5)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Casting1.php'>Fan Water Removal Chill Roll (+SC=321N3-M011)</a></td>
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
			<td>2</td>
			<td><a href='WebTrendLine7Casting2.php'>Casting Unit System Water Removal Fan (+SC=321N3-M514)</a></td>
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
			<td>3</td>
			<td><a href='WebTrendLine7Casting3.php'>Pump Chill Roll (+SC=324U1-M010)</a></td>
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
			<td>4</td>
			<td><a href='WebTrendLine7Casting4.php'>Pump Water Bath (+SC=324U1-M110)</a></td>
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
			<td>5</td>
			<td><a href='WebTrendLine7Casting5.php'>Motor Air Knife (+SC=321MK-M015)</a></td>
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
			<td>6</td>
			<td><a href='WebTrendLine7Casting6.php'>Die Bolt Cooling Fan (+SH32=292Q1)</a></td>
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
		<th rowspan="2">Extrusion</th>
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
	while($i<=7)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Ext1.php'>Main Extruder (+SE11=271M1-M012)</a></td>
			<td><center>".$data1[$i+2]."</center></td>
			<td><center>".$data1[$i+3]."</center></td>
			<td><center>".$data1[$i+4]."</center></td>
			<td><center>".$data1[$i+5]."</center></td>
			<td><center>".$data1[$i+6]."</center></td>
			<td><center>".$data1[$i+7]."</center></td>
			<td><center>".$data1[$i+8]."</center></td>
			<td><center>".$data1[$i+9]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7Ext2.php'>Melt Pump Main Extruder (+SE52=271M4-M015)</a></td>
			<td><center>".$data1[$i+9]."</center></td>
			<td><center>".$data1[$i+10]."</center></td>
			<td><center>".$data1[$i+11]."</center></td>
			<td><center>".$data1[$i+12]."</center></td>
			<td><center>".$data1[$i+13]."</center></td>
			<td><center>".$data1[$i+14]."</center></td>
			<td><center>".$data1[$i+15]."</center></td>
			<td><center>".$data1[$i+16]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7Ext3.php'>Co Extruder 1 (+SE33=281M1-M015)</a></td>
			<td><center>".$data1[$i+16]."</center></td>
			<td><center>".$data1[$i+17]."</center></td>
			<td><center>".$data1[$i+18]."</center></td>
			<td><center>".$data1[$i+19]."</center></td>
			<td><center>".$data1[$i+20]."</center></td>
			<td><center>".$data1[$i+21]."</center></td>
			<td><center>".$data1[$i+22]."</center></td>
			<td><center>".$data1[$i+23]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7Ext4.php'>Co Extruder 2 (+SE34=281M2-M015)</a></td>
			<td><center>".$data1[$i+23]."</center></td>
			<td><center>".$data1[$i+24]."</center></td>
			<td><center>".$data1[$i+25]."</center></td>
			<td><center>".$data1[$i+26]."</center></td>
			<td><center>".$data1[$i+27]."</center></td>
			<td><center>".$data1[$i+28]."</center></td>
			<td><center>".$data1[$i+29]."</center></td>
			<td><center>".$data1[$i+30]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7Ext5.php'>Melt Pump Co Extruder 2 (+SE53=281MB-M015)</a></td>
			<td><center>".$data1[$i+30]."</center></td>
			<td><center>".$data1[$i+31]."</center></td>
			<td><center>".$data1[$i+32]."</center></td>
			<td><center>".$data1[$i+33]."</center></td>
			<td><center>".$data1[$i+34]."</center></td>
			<td><center>".$data1[$i+35]."</center></td>
			<td><center>".$data1[$i+36]."</center></td>
			<td><center>".$data1[$i+37]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Ext6.php'>Co Extruder 3 (+SE43=281M3-M015)</a></td>
			<td><center>".$data1[$i+37]."</center></td>
			<td><center>".$data1[$i+38]."</center></td>
			<td><center>".$data1[$i+39]."</center></td>
			<td><center>".$data1[$i+40]."</center></td>
			<td><center>".$data1[$i+41]."</center></td>
			<td><center>".$data1[$i+42]."</center></td>
			<td><center>".$data1[$i+43]."</center></td>
			<td><center>".$data1[$i+44]."</center></td>
			</tr>
			";
		}
		elseif($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Ext7.php'>Melt Pump Co Extruder 3 (+SE53=281MC-M015)</a></td>
			<td><center>".$data1[$i+44]."</center></td>
			<td><center>".$data1[$i+45]."</center></td>
			<td><center>".$data1[$i+46]."</center></td>
			<td><center>".$data1[$i+47]."</center></td>
			<td><center>".$data1[$i+48]."</center></td>
			<td><center>".$data1[$i+49]."</center></td>
			<td><center>".$data1[$i+50]."</center></td>
			<td><center>".$data1[$i+51]."</center></td>
			</tr>
			";
		}
		elseif($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7Ext8.php'>Co Extruder 4(+SE44=281M4-M015)</a></td>
			<td><center>".$data1[$i+51]."</center></td>
			<td><center>".$data1[$i+52]."</center></td>
			<td><center>".$data1[$i+53]."</center></td>
			<td><center>".$data1[$i+54]."</center></td>
			<td><center>".$data1[$i+55]."</center></td>
			<td><center>".$data1[$i+56]."</center></td>
			<td><center>".$data1[$i+57]."</center></td>
			<td><center>".$data1[$i+58]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Motor TDO Airing</th>
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
	while($i<=4)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDOAiring1.php'>Exhaust Fan (+SG63=347N1-M014)</a></td>
			<td><center>".$data2[$i+2]."</center></td>
			<td><center>".$data2[$i+3]."</center></td>
			<td><center>".$data2[$i+4]."</center></td>
			<td><center>".$data2[$i+5]."</center></td>
			<td><center>".$data2[$i+6]."</center></td>
			<td><center>".$data2[$i+7]."</center></td>
			<td><center>".$data2[$i+8]."</center></td>
			<td><center>".$data2[$i+9]."</center></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7TDOAiring2.php'>Exhaust Fan (+SG63=347N1-M114)</a></td>
			<td><center>".$data2[$i+9]."</center></td>
			<td><center>".$data2[$i+10]."</center></td>
			<td><center>".$data2[$i+11]."</center></td>
			<td><center>".$data2[$i+12]."</center></td>
			<td><center>".$data2[$i+13]."</center></td>
			<td><center>".$data2[$i+14]."</center></td>
			<td><center>".$data2[$i+15]."</center></td>
			<td><center>".$data2[$i+16]."</center></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7TDOAiring3.php'>Exhaust Fan Neutral Top (+SG63=347N1-M214)</a></td>
			<td><center>".$data2[$i+16]."</center></td>
			<td><center>".$data2[$i+17]."</center></td>
			<td><center>".$data2[$i+18]."</center></td>
			<td><center>".$data2[$i+19]."</center></td>
			<td><center>".$data2[$i+20]."</center></td>
			<td><center>".$data2[$i+21]."</center></td>
			<td><center>".$data2[$i+22]."</center></td>
			<td><center>".$data2[$i+23]."</center></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7TDOAiring4.php'>Exhaust Fan Neutral Bottom (+SG63=347N1-M314)</a></td>
			<td><center>".$data2[$i+23]."</center></td>
			<td><center>".$data2[$i+24]."</center></td>
			<td><center>".$data2[$i+25]."</center></td>
			<td><center>".$data2[$i+26]."</center></td>
			<td><center>".$data2[$i+27]."</center></td>
			<td><center>".$data2[$i+28]."</center></td>
			<td><center>".$data2[$i+29]."</center></td>
			<td><center>".$data2[$i+30]."</center></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7TDOAiring5.php'>LPG Exhaust Fan</a></td>
			<td><center>".$data2[$i+30]."</center></td>
			<td><center>".$data2[$i+31]."</center></td>
			<td><center>".$data2[$i+32]."</center></td>
			<td><center>".$data2[$i+33]."</center></td>
			<td><center>".$data2[$i+34]."</center></td>
			<td><center>".$data2[$i+35]."</center></td>
			<td><center>".$data2[$i+36]."</center></td>
			<td><center>".$data2[$i+37]."</center></td>
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
	while($i<=69)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDO1.php'>Line Drive Outlet Left (+SD42=341M5-M015)</a></td>
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
			<td>2</td>
			<td><a href='WebTrendLine7TDO2.php'>Cooling Drive Outlet Left (+SD42=341M5-M050)</a></td>
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
			<td>3</td>
			<td><a href='WebTrendLine7TDO3.php'>Line Drive Outlet Right (+SD43=341M6-M015)</a></td>
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
			<td>4</td>
			<td><a href='WebTrendLine7TDO4.php'>Cooling Drive Outlet Right (+SD43=341M6-M050)</a></td>
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
			<td>5</td>
			<td><a href='WebTrendLine7TDO5.php'>Preheating 1 Fan 1 (+SG33=343N1-M014)</a></td>
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
			<td>6</td>
			<td><a href='WebTrendLine7TDO6.php'>Preheating 1 Fan 2 (+SG33=343N1-M024)</a></td>
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
			<td>7</td>
			<td><a href='WebTrendLine7TDO7.php'>Preheating 1 Fan 3 (+SG33=343N1-M034)</a></td>
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
			<td>8</td>
			<td><a href='WebTrendLine7TDO8.php'>Preheating 2 Fan 1 (+SG33=343N1-M114)</a></td>
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
			<td>9</td>
			<td><a href='WebTrendLine7TDO9.php'>Preheating 2 Fan 2 (+SG33=343N1-M124)</a></td>
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
			<td>10</td>
			<td><a href='WebTrendLine7TDO10.php'>Preheating 2 Fan 3 (+SG33=343N1-M134)</a></td>
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
			<td>11</td>
			<td><a href='WebTrendLine7TDO11.php'>Preheating 3 Fan 1 (+SG33=343N1-M214)</a></td>
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
			<td>12</td>
			<td><a href='WebTrendLine7TDO12.php'>Preheating 3 Fan 2 (+SG33=343N1-M224)</a></td>
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
			<td>13</td>
			<td><a href='WebTrendLine7TDO13.php'>Preheating 3 Fan 3 (+SG33=343N1-M234)</a></td>
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
			<td>14</td>
			<td><a href='WebTrendLine7TDO14.php'>Preheating 4 Fan 1 (+SG34=343N1-M314)</a></td>
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
			<td>15</td>
			<td><a href='WebTrendLine7TDO15.php'>Preheating 4 Fan 2 (+SG34=343N1-M324)</a></td>
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
			<td>16</td>
			<td><a href='WebTrendLine7TDO16.php'>Preheating 4 Fan 3 (+SG34=343N1-M334)</a></td>
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
			<td>7</td>
			<td><a href='WebTrendLine7TDO17.php'>Preheating 5 Fan 1 (+SG34=343N1-M414)</a></td>
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
			<td>18</td>
			<td><a href='WebTrendLine7TDO18.php'>Preheating 5 Fan 2 (+SG34=343N1-M424)</a></td>
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
			<td>19</td>
			<td><a href='WebTrendLine7TDO19.php'>Preheating 5 Fan 3 (+SG34=343N1-M434)</a></td>
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
			<td>20</td>
			<td><a href='WebTrendLine7TDO20.php'>Preheating 6 Fan 1 (+SG34=343N1-M514)</a></td>
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
			<td>21</td>
			<td><a href='WebTrendLine7TDO21.php'>Preheating 6 Fan 2 (+SG34=343N1-M524)</a></td>
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
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine7TDO22.php'>Preheating 6 Fan 3 (+SG34=343N1-M534)</a></td>
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
			<td>23</td>
			<td><a href='WebTrendLine7TDO23.php'>Drawing 1 Fan 1 Top (+SG41=343N4-M014)</a></td>
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
			<td>24</td>
			<td><a href='WebTrendLine7TDO24.php'>Drawing 1 Fan 2 Top (+SG41=343N4-M214)</a></td>
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
			<td>25</td>
			<td><a href='WebTrendLine7TDO25.php'>Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)</a></td>
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
			<td>26</td>
			<td><a href='WebTrendLine7TDO26.php'>Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)</a></td>
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
			<td>27</td>
			<td><a href='WebTrendLine7TDO27.php'>Drawing 2 Fan 1 Top (+SG41=343N4-M414)</a></td>
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
			<td>28</td>
			<td><a href='WebTrendLine7TDO28.php'>Drawing 2 Fan 2 Top (+SG41=343N4-M614)</a></td>
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
			<td>29</td>
			<td><a href='WebTrendLine7TDO29.php'>Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)</a></td>
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
			<td>30</td>
			<td><a href='WebTrendLine7TDO30.php'>Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)</a></td>
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
			<td>31</td>
			<td><a href='WebTrendLine7TDO31.php'>Drawing 3 Fan 1 Top (+SG41=343N4-M814)</a></td>
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
			<td>32</td>
			<td><a href='WebTrendLine7TDO32.php'>Drawing 3 Fan 2 Top (+SG42=343M5-M014)</a></td>
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
			<td>33</td>
			<td><a href='WebTrendLine7TDO33.php'>Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)</a></td>
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
			<td>34</td>
			<td><a href='WebTrendLine7TDO34.php'>Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)</a></td>
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
			<td>35</td>
			<td><a href='WebTrendLine7TDO35.php'>Drawing 4 Fan 1 Top (+SG42=343M5-M214)</a></td>
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
			<td>36</td>
			<td><a href='WebTrendLine7TDO36.php'>Drawing 4 Fan 2 Top (+SG42=343M5-M414)</a></td>
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
			<td>37</td>
			<td><a href='WebTrendLine7TDO37.php'>Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)</a></td>
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
			<td>38</td>
			<td><a href='WebTrendLine7TDO38.php'>Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)</a></td>
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
			<td>39</td>
			<td><a href='WebTrendLine7TDO39.php'>Drawing 5 Fan 1 Top (+SG42=343M5-M614)</a></td>
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
			<td>40</td>
			<td><a href='WebTrendLine7TDO40.php'>Drawing 5 Fan 2 Top (+SG42=343M5-M814)</a></td>
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
		elseif($i==40){
		echo"
			<tr>
			<td>41</td>
			<td><a href='WebTrendLine7TDO41.php'>Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)</a></td>
			<td><center>".$data3[$i+282]."</center></td>
			<td><center>".$data3[$i+283]."</center></td>
			<td><center>".$data3[$i+284]."</center></td>
			<td><center>".$data3[$i+285]."</center></td>
			<td><center>".$data3[$i+286]."</center></td>
			<td><center>".$data3[$i+287]."</center></td>
			<td><center>".$data3[$i+288]."</center></td>
			<td><center>".$data3[$i+289]."</center></td>
			</tr>
			";
		}
		elseif($i==41){
		echo"
			<tr>
			<td>42</td>
			<td><a href='WebTrendLine7TDO42.php'>Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)</a></td>
			<td><center>".$data3[$i+289]."</center></td>
			<td><center>".$data3[$i+290]."</center></td>
			<td><center>".$data3[$i+291]."</center></td>
			<td><center>".$data3[$i+292]."</center></td>
			<td><center>".$data3[$i+293]."</center></td>
			<td><center>".$data3[$i+294]."</center></td>
			<td><center>".$data3[$i+295]."</center></td>
			<td><center>".$data3[$i+296]."</center></td>
			</tr>
			";
		}
		elseif($i==42){
		echo"
			<tr>
			<td>43</td>
			<td><a href='WebTrendLine7TDO43.php'>Annealing 1 Fan 1 Top (+SG52=343M7-M014)</a></td>
			<td><center>".$data3[$i+296]."</center></td>
			<td><center>".$data3[$i+297]."</center></td>
			<td><center>".$data3[$i+298]."</center></td>
			<td><center>".$data3[$i+299]."</center></td>
			<td><center>".$data3[$i+300]."</center></td>
			<td><center>".$data3[$i+301]."</center></td>
			<td><center>".$data3[$i+302]."</center></td>
			<td><center>".$data3[$i+303]."</center></td>
			</tr>
			";
		}
		elseif($i==43){
		echo"
			<tr>
			<td>44</td>
			<td><a href='WebTrendLine7TDO44.php'>Annealing 1 Fan 2 Top (+SG52=343M7-M214)</a></td>
			<td><center>".$data3[$i+303]."</center></td>
			<td><center>".$data3[$i+304]."</center></td>
			<td><center>".$data3[$i+305]."</center></td>
			<td><center>".$data3[$i+306]."</center></td>
			<td><center>".$data3[$i+307]."</center></td>
			<td><center>".$data3[$i+308]."</center></td>
			<td><center>".$data3[$i+309]."</center></td>
			<td><center>".$data3[$i+310]."</center></td>
			</tr>
			";
		}
		elseif($i==44){
		echo"
			<tr>
			<td>45</td>
			<td><a href='WebTrendLine7TDO45.php'>Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)</a></td>
			<td><center>".$data3[$i+310]."</center></td>
			<td><center>".$data3[$i+311]."</center></td>
			<td><center>".$data3[$i+312]."</center></td>
			<td><center>".$data3[$i+313]."</center></td>
			<td><center>".$data3[$i+314]."</center></td>
			<td><center>".$data3[$i+315]."</center></td>
			<td><center>".$data3[$i+316]."</center></td>
			<td><center>".$data3[$i+317]."</center></td>
			</tr>
			";
		}
		elseif($i==45){
		echo"
			<tr>
			<td>46</td>
			<td><a href='WebTrendLine7TDO46.php'>Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)</a></td>
			<td><center>".$data3[$i+317]."</center></td>
			<td><center>".$data3[$i+318]."</center></td>
			<td><center>".$data3[$i+319]."</center></td>
			<td><center>".$data3[$i+320]."</center></td>
			<td><center>".$data3[$i+321]."</center></td>
			<td><center>".$data3[$i+322]."</center></td>
			<td><center>".$data3[$i+323]."</center></td>
			<td><center>".$data3[$i+324]."</center></td>
			</tr>
			";
		}
		elseif($i==46){
		echo"
			<tr>
			<td>47</td>
			<td><a href='WebTrendLine7TDO47.php'>Annealing 2 Fan 1 Top (+SG52=343M7-M414)</a></td>
			<td><center>".$data3[$i+324]."</center></td>
			<td><center>".$data3[$i+325]."</center></td>
			<td><center>".$data3[$i+326]."</center></td>
			<td><center>".$data3[$i+327]."</center></td>
			<td><center>".$data3[$i+328]."</center></td>
			<td><center>".$data3[$i+329]."</center></td>
			<td><center>".$data3[$i+330]."</center></td>
			<td><center>".$data3[$i+331]."</center></td>
			</tr>
			";
		}
		elseif($i==47){
		echo"
			<tr>
			<td>48</td>
			<td><a href='WebTrendLine7TDO48.php'>Annealing 2 Fan 2 Top (+SG52=343M7-M614)</a></td>
			<td><center>".$data3[$i+331]."</center></td>
			<td><center>".$data3[$i+332]."</center></td>
			<td><center>".$data3[$i+333]."</center></td>
			<td><center>".$data3[$i+334]."</center></td>
			<td><center>".$data3[$i+335]."</center></td>
			<td><center>".$data3[$i+336]."</center></td>
			<td><center>".$data3[$i+337]."</center></td>
			<td><center>".$data3[$i+338]."</center></td>
			</tr>
			";
		}
		elseif($i==48){
		echo"
			<tr>
			<td>49</td>
			<td><a href='WebTrendLine7TDO49.php'>Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)</a></td>
			<td><center>".$data3[$i+338]."</center></td>
			<td><center>".$data3[$i+339]."</center></td>
			<td><center>".$data3[$i+340]."</center></td>
			<td><center>".$data3[$i+341]."</center></td>
			<td><center>".$data3[$i+342]."</center></td>
			<td><center>".$data3[$i+343]."</center></td>
			<td><center>".$data3[$i+344]."</center></td>
			<td><center>".$data3[$i+345]."</center></td>
			</tr>
			";
		}
		elseif($i==49){
		echo"
			<tr>
			<td>50</td>
			<td><a href='WebTrendLine7TDO50.php'>Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)</a></td>
			<td><center>".$data3[$i+345]."</center></td>
			<td><center>".$data3[$i+346]."</center></td>
			<td><center>".$data3[$i+347]."</center></td>
			<td><center>".$data3[$i+348]."</center></td>
			<td><center>".$data3[$i+349]."</center></td>
			<td><center>".$data3[$i+350]."</center></td>
			<td><center>".$data3[$i+351]."</center></td>
			<td><center>".$data3[$i+352]."</center></td>
			</tr>
			";
		}
		elseif($i==50){
		echo"
			<tr>
			<td>51</td>
			<td><a href='WebTrendLine7TDO51.php'>Annealing 3 Fan 1 Top (+SG52=343M7-M814)</a></td>
			<td><center>".$data3[$i+352]."</center></td>
			<td><center>".$data3[$i+353]."</center></td>
			<td><center>".$data3[$i+354]."</center></td>
			<td><center>".$data3[$i+355]."</center></td>
			<td><center>".$data3[$i+356]."</center></td>
			<td><center>".$data3[$i+357]."</center></td>
			<td><center>".$data3[$i+358]."</center></td>
			<td><center>".$data3[$i+359]."</center></td>
			</tr>
			";
		}
		elseif($i==51){
		echo"
			<tr>
			<td>52</td>
			<td><a href='WebTrendLine7TDO52.php'>Annealing 3 Fan 2 Top (+SG53=343N8-M014)</a></td>
			<td><center>".$data3[$i+359]."</center></td>
			<td><center>".$data3[$i+360]."</center></td>
			<td><center>".$data3[$i+361]."</center></td>
			<td><center>".$data3[$i+362]."</center></td>
			<td><center>".$data3[$i+363]."</center></td>
			<td><center>".$data3[$i+364]."</center></td>
			<td><center>".$data3[$i+365]."</center></td>
			<td><center>".$data3[$i+366]."</center></td>
			</tr>
			";
		}
		elseif($i==52){
		echo"
			<tr>
			<td>53</td>
			<td><a href='WebTrendLine7TDO53.php'>Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)</a></td>
			<td><center>".$data3[$i+366]."</center></td>
			<td><center>".$data3[$i+367]."</center></td>
			<td><center>".$data3[$i+368]."</center></td>
			<td><center>".$data3[$i+369]."</center></td>
			<td><center>".$data3[$i+370]."</center></td>
			<td><center>".$data3[$i+371]."</center></td>
			<td><center>".$data3[$i+372]."</center></td>
			<td><center>".$data3[$i+373]."</center></td>
			</tr>
			";
		}
		elseif($i==53){
		echo"
			<tr>
			<td>54</td>
			<td><a href='WebTrendLine7TDO54.php'>Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)</a></td>
			<td><center>".$data3[$i+373]."</center></td>
			<td><center>".$data3[$i+374]."</center></td>
			<td><center>".$data3[$i+375]."</center></td>
			<td><center>".$data3[$i+376]."</center></td>
			<td><center>".$data3[$i+377]."</center></td>
			<td><center>".$data3[$i+378]."</center></td>
			<td><center>".$data3[$i+379]."</center></td>
			<td><center>".$data3[$i+380]."</center></td>
			</tr>
			";
		}
		elseif($i==54){
		echo"
			<tr>
			<td>55</td>
			<td><a href='WebTrendLine7TDO55.php'>Annealing 4 Fan 1 Top (+SG53=343N8-M214)</a></td>
			<td><center>".$data3[$i+380]."</center></td>
			<td><center>".$data3[$i+381]."</center></td>
			<td><center>".$data3[$i+382]."</center></td>
			<td><center>".$data3[$i+383]."</center></td>
			<td><center>".$data3[$i+384]."</center></td>
			<td><center>".$data3[$i+385]."</center></td>
			<td><center>".$data3[$i+386]."</center></td>
			<td><center>".$data3[$i+387]."</center></td>
			</tr>
			";
		}
		elseif($i==55){
		echo"
			<tr>
			<td>56</td>
			<td><a href='WebTrendLine7TDO56.php'>Annealing 4 Fan 2 Top (+SG53=343N8-M414)</a></td>
			<td><center>".$data3[$i+387]."</center></td>
			<td><center>".$data3[$i+388]."</center></td>
			<td><center>".$data3[$i+389]."</center></td>
			<td><center>".$data3[$i+390]."</center></td>
			<td><center>".$data3[$i+391]."</center></td>
			<td><center>".$data3[$i+392]."</center></td>
			<td><center>".$data3[$i+393]."</center></td>
			<td><center>".$data3[$i+394]."</center></td>
			</tr>
			";
		}
		elseif($i==56){
		echo"
			<tr>
			<td>57</td>
			<td><a href='WebTrendLine7TDO57.php'>Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)</a></td>
			<td><center>".$data3[$i+394]."</center></td>
			<td><center>".$data3[$i+395]."</center></td>
			<td><center>".$data3[$i+396]."</center></td>
			<td><center>".$data3[$i+397]."</center></td>
			<td><center>".$data3[$i+398]."</center></td>
			<td><center>".$data3[$i+399]."</center></td>
			<td><center>".$data3[$i+400]."</center></td>
			<td><center>".$data3[$i+401]."</center></td>
			</tr>
			";
		}
		elseif($i==57){
		echo"
			<tr>
			<td>58</td>
			<td><a href='WebTrendLine7TDO58.php'>Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)</a></td>
			<td><center>".$data3[$i+401]."</center></td>
			<td><center>".$data3[$i+402]."</center></td>
			<td><center>".$data3[$i+403]."</center></td>
			<td><center>".$data3[$i+404]."</center></td>
			<td><center>".$data3[$i+405]."</center></td>
			<td><center>".$data3[$i+406]."</center></td>
			<td><center>".$data3[$i+407]."</center></td>
			<td><center>".$data3[$i+408]."</center></td>
			</tr>
			";
		}
		elseif($i==58){
		echo"
			<tr>
			<td>59</td>
			<td><a href='WebTrendLine7TDO59.php'>Annealing 5 Fan 1 Top (+SG53=343N8-M614)</a></td>
			<td><center>".$data3[$i+408]."</center></td>
			<td><center>".$data3[$i+409]."</center></td>
			<td><center>".$data3[$i+410]."</center></td>
			<td><center>".$data3[$i+411]."</center></td>
			<td><center>".$data3[$i+412]."</center></td>
			<td><center>".$data3[$i+413]."</center></td>
			<td><center>".$data3[$i+414]."</center></td>
			<td><center>".$data3[$i+415]."</center></td>
			</tr>
			";
		}
		elseif($i==59){
		echo"
			<tr>
			<td>60</td>
			<td><a href='WebTrendLine7TDO60.php'>Annealing 5 Fan 2 Top (+SG53=343N8-M814)</a></td>
			<td><center>".$data3[$i+415]."</center></td>
			<td><center>".$data3[$i+416]."</center></td>
			<td><center>".$data3[$i+417]."</center></td>
			<td><center>".$data3[$i+418]."</center></td>
			<td><center>".$data3[$i+419]."</center></td>
			<td><center>".$data3[$i+420]."</center></td>
			<td><center>".$data3[$i+421]."</center></td>
			<td><center>".$data3[$i+422]."</center></td>
			</tr>
			";
		}
		elseif($i==60){
		echo"
			<tr>
			<td>61</td>
			<td><a href='WebTrendLine7TDO61.php'>Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)</a></td>
			<td><center>".$data3[$i+422]."</center></td>
			<td><center>".$data3[$i+423]."</center></td>
			<td><center>".$data3[$i+424]."</center></td>
			<td><center>".$data3[$i+425]."</center></td>
			<td><center>".$data3[$i+426]."</center></td>
			<td><center>".$data3[$i+427]."</center></td>
			<td><center>".$data3[$i+428]."</center></td>
			<td><center>".$data3[$i+429]."</center></td>
			</tr>
			";
		}
		elseif($i==61){
		echo"
			<tr>
			<td>62</td>
			<td><a href='WebTrendLine7TDO62.php'>Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)</a></td>
			<td><center>".$data3[$i+429]."</center></td>
			<td><center>".$data3[$i+430]."</center></td>
			<td><center>".$data3[$i+431]."</center></td>
			<td><center>".$data3[$i+432]."</center></td>
			<td><center>".$data3[$i+433]."</center></td>
			<td><center>".$data3[$i+434]."</center></td>
			<td><center>".$data3[$i+435]."</center></td>
			<td><center>".$data3[$i+436]."</center></td>
			</tr>
			";
		}
		elseif($i==62){
		echo"
			<tr>
			<td>63</td>
			<td><a href='WebTrendLine7TDO63.php'>Annealing 6 Fan 1 Top (+SG53=343N9-M014)</a></td>
			<td><center>".$data3[$i+436]."</center></td>
			<td><center>".$data3[$i+437]."</center></td>
			<td><center>".$data3[$i+438]."</center></td>
			<td><center>".$data3[$i+439]."</center></td>
			<td><center>".$data3[$i+440]."</center></td>
			<td><center>".$data3[$i+441]."</center></td>
			<td><center>".$data3[$i+442]."</center></td>
			<td><center>".$data3[$i+443]."</center></td>
			</tr>
			";
		}
		elseif($i==63){
		echo"
			<tr>
			<td>64</td>
			<td><a href='WebTrendLine7TDO64.php'>Annealing 6 Fan 2 Top (+SG53=343N9-M214)</a></td>
			<td><center>".$data3[$i+443]."</center></td>
			<td><center>".$data3[$i+444]."</center></td>
			<td><center>".$data3[$i+445]."</center></td>
			<td><center>".$data3[$i+446]."</center></td>
			<td><center>".$data3[$i+447]."</center></td>
			<td><center>".$data3[$i+448]."</center></td>
			<td><center>".$data3[$i+449]."</center></td>
			<td><center>".$data3[$i+450]."</center></td>
			</tr>
			";
		}
		elseif($i==64){
		echo"
			<tr>
			<td>65</td>
			<td><a href='WebTrendLine7TDO65.php'>Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)</a></td>
			<td><center>".$data3[$i+450]."</center></td>
			<td><center>".$data3[$i+451]."</center></td>
			<td><center>".$data3[$i+452]."</center></td>
			<td><center>".$data3[$i+453]."</center></td>
			<td><center>".$data3[$i+454]."</center></td>
			<td><center>".$data3[$i+455]."</center></td>
			<td><center>".$data3[$i+456]."</center></td>
			<td><center>".$data3[$i+457]."</center></td>
			</tr>
			";
		}
		elseif($i==65){
		echo"
			<tr>
			<td>66</td>
			<td><a href='WebTrendLine7TDO66.php'>Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)</a></td>
			<td><center>".$data3[$i+457]."</center></td>
			<td><center>".$data3[$i+458]."</center></td>
			<td><center>".$data3[$i+459]."</center></td>
			<td><center>".$data3[$i+460]."</center></td>
			<td><center>".$data3[$i+461]."</center></td>
			<td><center>".$data3[$i+462]."</center></td>
			<td><center>".$data3[$i+463]."</center></td>
			<td><center>".$data3[$i+464]."</center></td>
			</tr>
			";
		}
		elseif($i==66){
		echo"
			<tr>
			<td>67</td>
			<td><a href='WebTrendLine7TDO67.php'>Film Edge Cooling Fan Left (+SG64=345N5-M014)</a></td>
			<td><center>".$data3[$i+464]."</center></td>
			<td><center>".$data3[$i+465]."</center></td>
			<td><center>".$data3[$i+466]."</center></td>
			<td><center>".$data3[$i+467]."</center></td>
			<td><center>".$data3[$i+468]."</center></td>
			<td><center>".$data3[$i+469]."</center></td>
			<td><center>".$data3[$i+470]."</center></td>
			<td><center>".$data3[$i+471]."</center></td>
			</tr>
			";
		}
		elseif($i==67){
		echo"
			<tr>
			<td>68</td>
			<td><a href='WebTrendLine7TDO68.php'>Film Edge Cooling Fan Right (+SG64=345N5-M114)</a></td>
			<td><center>".$data3[$i+471]."</center></td>
			<td><center>".$data3[$i+472]."</center></td>
			<td><center>".$data3[$i+473]."</center></td>
			<td><center>".$data3[$i+474]."</center></td>
			<td><center>".$data3[$i+475]."</center></td>
			<td><center>".$data3[$i+476]."</center></td>
			<td><center>".$data3[$i+477]."</center></td>
			<td><center>".$data3[$i+478]."</center></td>
			</tr>
			";
		}
		elseif($i==68){
		echo"
			<tr>
			<td>69</td>
			<td><a href='WebTrendLine7TDO69.php'>Edge Guide Fan Left (+SD41=341M1-M050)</a></td>
			<td><center>".$data3[$i+478]."</center></td>
			<td><center>".$data3[$i+479]."</center></td>
			<td><center>".$data3[$i+480]."</center></td>
			<td><center>".$data3[$i+481]."</center></td>
			<td><center>".$data3[$i+482]."</center></td>
			<td><center>".$data3[$i+483]."</center></td>
			<td><center>".$data3[$i+484]."</center></td>
			<td><center>".$data3[$i+485]."</center></td>
			</tr>
			";
		}
		elseif($i==69){
		echo"
			<tr>
			<td>70</td>
			<td><a href='WebTrendLine7TDO70.php'>Edge Guide Fan Right (+SD42=341M2-M050)</a></td>
			<td><center>".$data3[$i+485]."</center></td>
			<td><center>".$data3[$i+486]."</center></td>
			<td><center>".$data3[$i+487]."</center></td>
			<td><center>".$data3[$i+488]."</center></td>
			<td><center>".$data3[$i+489]."</center></td>
			<td><center>".$data3[$i+490]."</center></td>
			<td><center>".$data3[$i+491]."</center></td>
			<td><center>".$data3[$i+492]."</center></td>
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
	while($i<=39)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDOAS1.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M021)</a></td>
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
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7TDOAS2.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M023)</a></td>
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
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7TDOAS3.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M071)</a></td>
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
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7TDOAS4.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M073)</a></td>
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
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7TDOAS5.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)</a></td>
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
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7TDOAS6.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)</a></td>
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
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7TDOAS7.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)</a></td>
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
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7TDOAS8.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)</a></td>
			<td><center>".$data4[$i+51]."</center></td>
			<td><center>".$data4[$i+52]."</center></td>
			<td><center>".$data4[$i+53]."</center></td>
			<td><center>".$data4[$i+54]."</center></td>
			<td><center>".$data4[$i+55]."</center></td>
			<td><center>".$data4[$i+56]."</center></td>
			<td><center>".$data4[$i+57]."</center></td>
			<td><center>".$data4[$i+58]."</center></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine7TDOAS9.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M221)</a></td>
			<td><center>".$data4[$i+58]."</center></td>
			<td><center>".$data4[$i+59]."</center></td>
			<td><center>".$data4[$i+60]."</center></td>
			<td><center>".$data4[$i+61]."</center></td>
			<td><center>".$data4[$i+62]."</center></td>
			<td><center>".$data4[$i+63]."</center></td>
			<td><center>".$data4[$i+64]."</center></td>
			<td><center>".$data4[$i+65]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine7TDOAS10.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M223)</a></td>
			<td><center>".$data4[$i+65]."</center></td>
			<td><center>".$data4[$i+66]."</center></td>
			<td><center>".$data4[$i+67]."</center></td>
			<td><center>".$data4[$i+68]."</center></td>
			<td><center>".$data4[$i+69]."</center></td>
			<td><center>".$data4[$i+70]."</center></td>
			<td><center>".$data4[$i+71]."</center></td>
			<td><center>".$data4[$i+72]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine7TDOAS11.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M271)</a></td>
			<td><center>".$data4[$i+72]."</center></td>
			<td><center>".$data4[$i+73]."</center></td>
			<td><center>".$data4[$i+74]."</center></td>
			<td><center>".$data4[$i+75]."</center></td>
			<td><center>".$data4[$i+76]."</center></td>
			<td><center>".$data4[$i+77]."</center></td>
			<td><center>".$data4[$i+78]."</center></td>
			<td><center>".$data4[$i+79]."</center></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine7TDOAS12.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M273)</a></td>
			<td><center>".$data4[$i+79]."</center></td>
			<td><center>".$data4[$i+80]."</center></td>
			<td><center>".$data4[$i+81]."</center></td>
			<td><center>".$data4[$i+82]."</center></td>
			<td><center>".$data4[$i+83]."</center></td>
			<td><center>".$data4[$i+84]."</center></td>
			<td><center>".$data4[$i+85]."</center></td>
			<td><center>".$data4[$i+86]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine7TDOAS13.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)</a></td>
			<td><center>".$data4[$i+86]."</center></td>
			<td><center>".$data4[$i+87]."</center></td>
			<td><center>".$data4[$i+88]."</center></td>
			<td><center>".$data4[$i+89]."</center></td>
			<td><center>".$data4[$i+90]."</center></td>
			<td><center>".$data4[$i+91]."</center></td>
			<td><center>".$data4[$i+92]."</center></td>
			<td><center>".$data4[$i+93]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine7TDOAS14.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)</a></td>
			<td><center>".$data4[$i+93]."</center></td>
			<td><center>".$data4[$i+94]."</center></td>
			<td><center>".$data4[$i+95]."</center></td>
			<td><center>".$data4[$i+96]."</center></td>
			<td><center>".$data4[$i+97]."</center></td>
			<td><center>".$data4[$i+98]."</center></td>
			<td><center>".$data4[$i+99]."</center></td>
			<td><center>".$data4[$i+100]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine7TDOAS15.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)</a></td>
			<td><center>".$data4[$i+100]."</center></td>
			<td><center>".$data4[$i+101]."</center></td>
			<td><center>".$data4[$i+102]."</center></td>
			<td><center>".$data4[$i+103]."</center></td>
			<td><center>".$data4[$i+104]."</center></td>
			<td><center>".$data4[$i+105]."</center></td>
			<td><center>".$data4[$i+106]."</center></td>
			<td><center>".$data4[$i+107]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine7TDOAS16.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)</a></td>
			<td><center>".$data4[$i+107]."</center></td>
			<td><center>".$data4[$i+108]."</center></td>
			<td><center>".$data4[$i+109]."</center></td>
			<td><center>".$data4[$i+110]."</center></td>
			<td><center>".$data4[$i+111]."</center></td>
			<td><center>".$data4[$i+112]."</center></td>
			<td><center>".$data4[$i+113]."</center></td>
			<td><center>".$data4[$i+114]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine7TDOAS17.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M421)</a></td>
			<td><center>".$data4[$i+114]."</center></td>
			<td><center>".$data4[$i+115]."</center></td>
			<td><center>".$data4[$i+116]."</center></td>
			<td><center>".$data4[$i+117]."</center></td>
			<td><center>".$data4[$i+118]."</center></td>
			<td><center>".$data4[$i+119]."</center></td>
			<td><center>".$data4[$i+120]."</center></td>
			<td><center>".$data4[$i+121]."</center></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine7TDOAS18.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M423)</a></td>
			<td><center>".$data4[$i+121]."</center></td>
			<td><center>".$data4[$i+122]."</center></td>
			<td><center>".$data4[$i+123]."</center></td>
			<td><center>".$data4[$i+124]."</center></td>
			<td><center>".$data4[$i+125]."</center></td>
			<td><center>".$data4[$i+126]."</center></td>
			<td><center>".$data4[$i+127]."</center></td>
			<td><center>".$data4[$i+128]."</center></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine7TDOAS19.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M471)</a></td>
			<td><center>".$data4[$i+128]."</center></td>
			<td><center>".$data4[$i+129]."</center></td>
			<td><center>".$data4[$i+130]."</center></td>
			<td><center>".$data4[$i+131]."</center></td>
			<td><center>".$data4[$i+132]."</center></td>
			<td><center>".$data4[$i+133]."</center></td>
			<td><center>".$data4[$i+134]."</center></td>
			<td><center>".$data4[$i+135]."</center></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine7TDOAS20.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M473)</a></td>
			<td><center>".$data4[$i+135]."</center></td>
			<td><center>".$data4[$i+136]."</center></td>
			<td><center>".$data4[$i+137]."</center></td>
			<td><center>".$data4[$i+138]."</center></td>
			<td><center>".$data4[$i+139]."</center></td>
			<td><center>".$data4[$i+140]."</center></td>
			<td><center>".$data4[$i+141]."</center></td>
			<td><center>".$data4[$i+142]."</center></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine7TDOAS21.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)</a></td>
			<td><center>".$data4[$i+142]."</center></td>
			<td><center>".$data4[$i+143]."</center></td>
			<td><center>".$data4[$i+144]."</center></td>
			<td><center>".$data4[$i+145]."</center></td>
			<td><center>".$data4[$i+146]."</center></td>
			<td><center>".$data4[$i+147]."</center></td>
			<td><center>".$data4[$i+148]."</center></td>
			<td><center>".$data4[$i+149]."</center></td>
			</tr>
			";
		}elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine7TDOAS22.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)</a></td>
			<td><center>".$data4[$i+149]."</center></td>
			<td><center>".$data4[$i+150]."</center></td>
			<td><center>".$data4[$i+151]."</center></td>
			<td><center>".$data4[$i+152]."</center></td>
			<td><center>".$data4[$i+153]."</center></td>
			<td><center>".$data4[$i+154]."</center></td>
			<td><center>".$data4[$i+155]."</center></td>
			<td><center>".$data4[$i+156]."</center></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine7TDOAS23.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)</a></td>
			<td><center>".$data4[$i+156]."</center></td>
			<td><center>".$data4[$i+157]."</center></td>
			<td><center>".$data4[$i+158]."</center></td>
			<td><center>".$data4[$i+159]."</center></td>
			<td><center>".$data4[$i+160]."</center></td>
			<td><center>".$data4[$i+161]."</center></td>
			<td><center>".$data4[$i+162]."</center></td>
			<td><center>".$data4[$i+163]."</center></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine7TDOAS24.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)</a></td>
			<td><center>".$data4[$i+163]."</center></td>
			<td><center>".$data4[$i+164]."</center></td>
			<td><center>".$data4[$i+165]."</center></td>
			<td><center>".$data4[$i+166]."</center></td>
			<td><center>".$data4[$i+167]."</center></td>
			<td><center>".$data4[$i+168]."</center></td>
			<td><center>".$data4[$i+169]."</center></td>
			<td><center>".$data4[$i+170]."</center></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine7TDOAS25.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M621)</a></td>
			<td><center>".$data4[$i+170]."</center></td>
			<td><center>".$data4[$i+171]."</center></td>
			<td><center>".$data4[$i+172]."</center></td>
			<td><center>".$data4[$i+173]."</center></td>
			<td><center>".$data4[$i+174]."</center></td>
			<td><center>".$data4[$i+175]."</center></td>
			<td><center>".$data4[$i+176]."</center></td>
			<td><center>".$data4[$i+177]."</center></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine7TDOAS26.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M623)</a></td>
			<td><center>".$data4[$i+177]."</center></td>
			<td><center>".$data4[$i+178]."</center></td>
			<td><center>".$data4[$i+179]."</center></td>
			<td><center>".$data4[$i+180]."</center></td>
			<td><center>".$data4[$i+181]."</center></td>
			<td><center>".$data4[$i+182]."</center></td>
			<td><center>".$data4[$i+183]."</center></td>
			<td><center>".$data4[$i+184]."</center></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine7TDOAS27.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M671)</a></td>
			<td><center>".$data4[$i+184]."</center></td>
			<td><center>".$data4[$i+185]."</center></td>
			<td><center>".$data4[$i+186]."</center></td>
			<td><center>".$data4[$i+187]."</center></td>
			<td><center>".$data4[$i+188]."</center></td>
			<td><center>".$data4[$i+189]."</center></td>
			<td><center>".$data4[$i+190]."</center></td>
			<td><center>".$data4[$i+191]."</center></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine7TDOAS28.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M673)</a></td>
			<td><center>".$data4[$i+191]."</center></td>
			<td><center>".$data4[$i+192]."</center></td>
			<td><center>".$data4[$i+193]."</center></td>
			<td><center>".$data4[$i+194]."</center></td>
			<td><center>".$data4[$i+195]."</center></td>
			<td><center>".$data4[$i+196]."</center></td>
			<td><center>".$data4[$i+197]."</center></td>
			<td><center>".$data4[$i+198]."</center></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>29</td>
			<td><a href='WebTrendLine7TDOAS29.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)</a></td>
			<td><center>".$data4[$i+198]."</center></td>
			<td><center>".$data4[$i+199]."</center></td>
			<td><center>".$data4[$i+200]."</center></td>
			<td><center>".$data4[$i+201]."</center></td>
			<td><center>".$data4[$i+202]."</center></td>
			<td><center>".$data4[$i+203]."</center></td>
			<td><center>".$data4[$i+204]."</center></td>
			<td><center>".$data4[$i+205]."</center></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>30</td>
			<td><a href='WebTrendLine7TDOAS30.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)</a></td>
			<td><center>".$data4[$i+205]."</center></td>
			<td><center>".$data4[$i+206]."</center></td>
			<td><center>".$data4[$i+207]."</center></td>
			<td><center>".$data4[$i+208]."</center></td>
			<td><center>".$data4[$i+209]."</center></td>
			<td><center>".$data4[$i+210]."</center></td>
			<td><center>".$data4[$i+211]."</center></td>
			<td><center>".$data4[$i+212]."</center></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>31</td>
			<td><a href='WebTrendLine7TDOAS31.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)</a></td>
			<td><center>".$data4[$i+212]."</center></td>
			<td><center>".$data4[$i+213]."</center></td>
			<td><center>".$data4[$i+214]."</center></td>
			<td><center>".$data4[$i+215]."</center></td>
			<td><center>".$data4[$i+216]."</center></td>
			<td><center>".$data4[$i+217]."</center></td>
			<td><center>".$data4[$i+218]."</center></td>
			<td><center>".$data4[$i+219]."</center></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>32</td>
			<td><a href='WebTrendLine7TDOAS32.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)</a></td>
			<td><center>".$data4[$i+219]."</center></td>
			<td><center>".$data4[$i+220]."</center></td>
			<td><center>".$data4[$i+221]."</center></td>
			<td><center>".$data4[$i+222]."</center></td>
			<td><center>".$data4[$i+223]."</center></td>
			<td><center>".$data4[$i+224]."</center></td>
			<td><center>".$data4[$i+225]."</center></td>
			<td><center>".$data4[$i+226]."</center></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>33</td>
			<td><a href='WebTrendLine7TDOAS33.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M821)</a></td>
			<td><center>".$data4[$i+226]."</center></td>
			<td><center>".$data4[$i+227]."</center></td>
			<td><center>".$data4[$i+228]."</center></td>
			<td><center>".$data4[$i+229]."</center></td>
			<td><center>".$data4[$i+230]."</center></td>
			<td><center>".$data4[$i+231]."</center></td>
			<td><center>".$data4[$i+232]."</center></td>
			<td><center>".$data4[$i+233]."</center></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>34</td>
			<td><a href='WebTrendLine7TDOAS34.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M823)</a></td>
			<td><center>".$data4[$i+233]."</center></td>
			<td><center>".$data4[$i+234]."</center></td>
			<td><center>".$data4[$i+235]."</center></td>
			<td><center>".$data4[$i+236]."</center></td>
			<td><center>".$data4[$i+237]."</center></td>
			<td><center>".$data4[$i+238]."</center></td>
			<td><center>".$data4[$i+239]."</center></td>
			<td><center>".$data4[$i+240]."</center></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>35</td>
			<td><a href='WebTrendLine7TDOAS35.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M871)</a></td>
			<td><center>".$data4[$i+240]."</center></td>
			<td><center>".$data4[$i+241]."</center></td>
			<td><center>".$data4[$i+242]."</center></td>
			<td><center>".$data4[$i+243]."</center></td>
			<td><center>".$data4[$i+244]."</center></td>
			<td><center>".$data4[$i+245]."</center></td>
			<td><center>".$data4[$i+246]."</center></td>
			<td><center>".$data4[$i+247]."</center></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>36</td>
			<td><a href='WebTrendLine7TDOAS36.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M873)</a></td>
			<td><center>".$data4[$i+247]."</center></td>
			<td><center>".$data4[$i+248]."</center></td>
			<td><center>".$data4[$i+249]."</center></td>
			<td><center>".$data4[$i+250]."</center></td>
			<td><center>".$data4[$i+251]."</center></td>
			<td><center>".$data4[$i+252]."</center></td>
			<td><center>".$data4[$i+253]."</center></td>
			<td><center>".$data4[$i+254]."</center></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>37</td>
			<td><a href='WebTrendLine7TDOAS37.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)</a></td>
			<td><center>".$data4[$i+254]."</center></td>
			<td><center>".$data4[$i+255]."</center></td>
			<td><center>".$data4[$i+256]."</center></td>
			<td><center>".$data4[$i+257]."</center></td>
			<td><center>".$data4[$i+258]."</center></td>
			<td><center>".$data4[$i+259]."</center></td>
			<td><center>".$data4[$i+260]."</center></td>
			<td><center>".$data4[$i+261]."</center></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>38</td>
			<td><a href='WebTrendLine7TDOAS38.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)</a></td>
			<td><center>".$data4[$i+261]."</center></td>
			<td><center>".$data4[$i+262]."</center></td>
			<td><center>".$data4[$i+263]."</center></td>
			<td><center>".$data4[$i+264]."</center></td>
			<td><center>".$data4[$i+265]."</center></td>
			<td><center>".$data4[$i+266]."</center></td>
			<td><center>".$data4[$i+267]."</center></td>
			<td><center>".$data4[$i+268]."</center></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>39</td>
			<td><a href='WebTrendLine7TDOAS39.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)</a></td>
			<td><center>".$data4[$i+268]."</center></td>
			<td><center>".$data4[$i+269]."</center></td>
			<td><center>".$data4[$i+270]."</center></td>
			<td><center>".$data4[$i+271]."</center></td>
			<td><center>".$data4[$i+272]."</center></td>
			<td><center>".$data4[$i+273]."</center></td>
			<td><center>".$data4[$i+274]."</center></td>
			<td><center>".$data4[$i+275]."</center></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>40</td>
			<td><a href='WebTrendLine7TDOAS40.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)</a></td>
			<td><center>".$data4[$i+275]."</center></td>
			<td><center>".$data4[$i+276]."</center></td>
			<td><center>".$data4[$i+277]."</center></td>
			<td><center>".$data4[$i+278]."</center></td>
			<td><center>".$data4[$i+279]."</center></td>
			<td><center>".$data4[$i+280]."</center></td>
			<td><center>".$data4[$i+281]."</center></td>
			<td><center>".$data4[$i+282]."</center></td>
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
	while($i<=6)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Pullroll1.php'>Pump Heating Cooling Unit Inlet (+SPU12=374U1-M010)</a></td>
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
			<td>2</td>
			<td><a href='WebTrendLine7Pullroll2.php'>Pump Flame Treatment Top (+SPU12=374U1-M210)</a></td>
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
			<td>3</td>
			<td><a href='WebTrendLine7Pullroll3.php'>Pump Corona Bottom (+SPU12=374U1-M410)</a></td>
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
			<td>4</td>
			<td><a href='WebTrendLine7Pullroll4.php'>Pump Corona Top (+SPU12=374U1-M510)</a></td>
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
			<td>5</td>
			<td><a href='WebTrendLine7Pullroll5.php'>Pump Heating Cooling Unit Outlet (+SPU12=374U1-M610)</a></td>
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
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Pullroll6.php'>Fan Corona Exhaust Top (+SPU12=371N4-M111)</a></td>
			<td><center>".$data5[$i+37]."</center></td>
			<td><center>".$data5[$i+38]."</center></td>
			<td><center>".$data5[$i+39]."</center></td>
			<td><center>".$data5[$i+40]."</center></td>
			<td><center>".$data5[$i+41]."</center></td>
			<td><center>".$data5[$i+42]."</center></td>
			<td><center>".$data5[$i+43]."</center></td>
			<td><center>".$data5[$i+44]."</center></td>
			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Pullroll7.php'>Fan Corona Exhaust Bottom (+SPU12=371N4-M011)</a></td>
			<td><center>".$data5[$i+44]."</center></td>
			<td><center>".$data5[$i+45]."</center></td>
			<td><center>".$data5[$i+46]."</center></td>
			<td><center>".$data5[$i+47]."</center></td>
			<td><center>".$data5[$i+48]."</center></td>
			<td><center>".$data5[$i+49]."</center></td>
			<td><center>".$data5[$i+50]."</center></td>
			<td><center>".$data5[$i+51]."</center></td>
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
	while($i<=7)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Bigsilo1.php'>Big Bag Blowing Station Fan 1 (+SR12=211N1-M010)</a></td>
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
			<td>2</td>
			<td><a href='WebTrendLine7Bigsilo2.php'>Big Bag Rotary Valve 1 (+SR12=211N1-M024)</a></td>
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
			<td>3</td>
			<td><a href='WebTrendLine7Bigsilo3.php'>Silo Blowing Station Fan 1 (+SR12=211N1-M110)</a></td>
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
			<td>4</td>
			<td><a href='WebTrendLine7Bigsilo4.php'>Rotary Valve 1 (+SR12=211T1-M014)</a></td>
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
			<td>5</td>
			<td><a href='WebTrendLine7Bigsilo5.php'>Rotary Valve 2 (+SR12=211T1-M114)</a></td>
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
			<td>6</td>
			<td><a href='WebTrendLine7Bigsilo6.php'>Rotary Valve 3 (+SR12=211T1-M164)</a></td>
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
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Bigsilo7.php'>Big Bag Blowing Station Fan 2 (+SR12=211N1-M150)</a></td>
			<td><center>".$data6[$i+44]."</center></td>
			<td><center>".$data6[$i+45]."</center></td>
			<td><center>".$data6[$i+46]."</center></td>
			<td><center>".$data6[$i+47]."</center></td>
			<td><center>".$data6[$i+48]."</center></td>
			<td><center>".$data6[$i+49]."</center></td>
			<td><center>".$data6[$i+50]."</center></td>
			<td><center>".$data6[$i+51]."</center></td>
			</tr>
			";
		}
		if($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7Bigsilo8.php'>Rotary Valve 1 (+SR12=)</a></td>
			<td><center>".$data6[$i+51]."</center></td>
			<td><center>".$data6[$i+52]."</center></td>
			<td><center>".$data6[$i+53]."</center></td>
			<td><center>".$data6[$i+54]."</center></td>
			<td><center>".$data6[$i+55]."</center></td>
			<td><center>".$data6[$i+56]."</center></td>
			<td><center>".$data6[$i+57]."</center></td>
			<td><center>".$data6[$i+58]."</center></td>
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
	while($i<=5)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7MDO1.php'>Drawing 1 (+SR13=331M5-M015)</a></td>
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
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7MDO2.php'>Drawing 2 (+SR13=331M6-M015)</a></td>
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
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7MDO3.php'>Drawing 3 (+SR13=331M7-M015)</a></td>
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
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7MDO4.php'>Drawing 4 (+SR13=331M8-M015)</a></td>
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
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7MDO5.php'>Drawing 5 (+SR13=331M9-M015)</a></td>
			<td><center>".$data7[$i+30]."</center></td>
			<td><center>".$data7[$i+31]."</center></td>
			<td><center>".$data7[$i+32]."</center></td>
			<td><center>".$data7[$i+33]."</center></td>
			<td><center>".$data7[$i+34]."</center></td>
			<td><center>".$data7[$i+35]."</center></td>
			<td><center>".$data7[$i+36]."</center></td>
			<td><center>".$data7[$i+37]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7MDO6.php'>Drawing 6 (+SR13=331MA-M015)</a></td>
			<td><center>".$data7[$i+37]."</center></td>
			<td><center>".$data7[$i+38]."</center></td>
			<td><center>".$data7[$i+39]."</center></td>
			<td><center>".$data7[$i+40]."</center></td>
			<td><center>".$data7[$i+41]."</center></td>
			<td><center>".$data7[$i+42]."</center></td>
			<td><center>".$data7[$i+43]."</center></td>
			<td><center>".$data7[$i+44]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">HCU MDO</th>
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
	while($i<=16)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7MDOHCU1.php'>HCU Preheating 1 (+SMU=334U1-M010)</a></td>
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
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7MDOHCU2.php'>HCU Preheating 2 (+SMU=334U1-M110)</a></td>
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
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7MDOHCU3.php'>HCU Preheating 3 (+SMU=334U1-M210)</a></td>
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
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7MDOHCU4.php'>HCU Preheating 4 (+SMU=334U1-M310)</a></td>
			<td><center>".$data8[$i+23]."</center></td>
			<td><center>".$data8[$i+24]."</center></td>
			<td><center>".$data8[$i+25]."</center></td>
			<td><center>".$data8[$i+26]."</center></td>
			<td><center>".$data8[$i+27]."</center></td>
			<td><center>".$data8[$i+28]."</center></td>
			<td><center>".$data8[$i+29]."</center></td>
			<td><center>".$data8[$i+30]."</center></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7MDOHCU5.php'>HCU Preheating 5 (+SMU=334U1-M410)</a></td>
			<td><center>".$data8[$i+30]."</center></td>
			<td><center>".$data8[$i+31]."</center></td>
			<td><center>".$data8[$i+32]."</center></td>
			<td><center>".$data8[$i+33]."</center></td>
			<td><center>".$data8[$i+34]."</center></td>
			<td><center>".$data8[$i+35]."</center></td>
			<td><center>".$data8[$i+36]."</center></td>
			<td><center>".$data8[$i+37]."</center></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7MDOHCU6.php'>HCU Preheating 6 (+SMU=334U1-M510)</a></td>
			<td><center>".$data8[$i+37]."</center></td>
			<td><center>".$data8[$i+38]."</center></td>
			<td><center>".$data8[$i+39]."</center></td>
			<td><center>".$data8[$i+40]."</center></td>
			<td><center>".$data8[$i+41]."</center></td>
			<td><center>".$data8[$i+42]."</center></td>
			<td><center>".$data8[$i+43]."</center></td>
			<td><center>".$data8[$i+44]."</center></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7MDOHCU7.php'>HCU Preheating 7 (+SMU=334U1-M610)</a></td>
			<td><center>".$data8[$i+44]."</center></td>
			<td><center>".$data8[$i+45]."</center></td>
			<td><center>".$data8[$i+46]."</center></td>
			<td><center>".$data8[$i+47]."</center></td>
			<td><center>".$data8[$i+48]."</center></td>
			<td><center>".$data8[$i+49]."</center></td>
			<td><center>".$data8[$i+50]."</center></td>
			<td><center>".$data8[$i+51]."</center></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7MDOHCU8.php'>HCU Preheating 8 (+SMU=334U1-M710)</a></td>
			<td><center>".$data8[$i+51]."</center></td>
			<td><center>".$data8[$i+52]."</center></td>
			<td><center>".$data8[$i+53]."</center></td>
			<td><center>".$data8[$i+54]."</center></td>
			<td><center>".$data8[$i+55]."</center></td>
			<td><center>".$data8[$i+56]."</center></td>
			<td><center>".$data8[$i+57]."</center></td>
			<td><center>".$data8[$i+58]."</center></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine7MDOHCU9.php'>HCU Preheating 9 (+SMU=334U1-M810)</a></td>
			<td><center>".$data8[$i+58]."</center></td>
			<td><center>".$data8[$i+59]."</center></td>
			<td><center>".$data8[$i+60]."</center></td>
			<td><center>".$data8[$i+61]."</center></td>
			<td><center>".$data8[$i+62]."</center></td>
			<td><center>".$data8[$i+63]."</center></td>
			<td><center>".$data8[$i+64]."</center></td>
			<td><center>".$data8[$i+65]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine7MDOHCU10.php'>HCU Drawing 1 (+SMU=334U4-M010)</a></td>
			<td><center>".$data8[$i+65]."</center></td>
			<td><center>".$data8[$i+66]."</center></td>
			<td><center>".$data8[$i+67]."</center></td>
			<td><center>".$data8[$i+68]."</center></td>
			<td><center>".$data8[$i+69]."</center></td>
			<td><center>".$data8[$i+70]."</center></td>
			<td><center>".$data8[$i+71]."</center></td>
			<td><center>".$data8[$i+72]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine7MDOHCU11.php'>HCU Drawing 2 (+SMU=334U4-M110)</a></td>
			<td><center>".$data8[$i+72]."</center></td>
			<td><center>".$data8[$i+73]."</center></td>
			<td><center>".$data8[$i+74]."</center></td>
			<td><center>".$data8[$i+75]."</center></td>
			<td><center>".$data8[$i+76]."</center></td>
			<td><center>".$data8[$i+77]."</center></td>
			<td><center>".$data8[$i+78]."</center></td>
			<td><center>".$data8[$i+79]."</center></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine7MDOHCU12.php'>HCU Drawing 3 (+SMU=334U4-M210)</a></td>
			<td><center>".$data8[$i+79]."</center></td>
			<td><center>".$data8[$i+80]."</center></td>
			<td><center>".$data8[$i+81]."</center></td>
			<td><center>".$data8[$i+82]."</center></td>
			<td><center>".$data8[$i+83]."</center></td>
			<td><center>".$data8[$i+84]."</center></td>
			<td><center>".$data8[$i+85]."</center></td>
			<td><center>".$data8[$i+86]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine7MDOHCU13.php'>HCU Drawing 4 (+SMU=334U4-M310)</a></td>
			<td><center>".$data8[$i+86]."</center></td>
			<td><center>".$data8[$i+87]."</center></td>
			<td><center>".$data8[$i+88]."</center></td>
			<td><center>".$data8[$i+89]."</center></td>
			<td><center>".$data8[$i+90]."</center></td>
			<td><center>".$data8[$i+91]."</center></td>
			<td><center>".$data8[$i+92]."</center></td>
			<td><center>".$data8[$i+93]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine7MDOHCU14.php'>HCU Drawing 5 (+SMU=334U4-M410)</a></td>
			<td><center>".$data8[$i+93]."</center></td>
			<td><center>".$data8[$i+94]."</center></td>
			<td><center>".$data8[$i+95]."</center></td>
			<td><center>".$data8[$i+96]."</center></td>
			<td><center>".$data8[$i+97]."</center></td>
			<td><center>".$data8[$i+98]."</center></td>
			<td><center>".$data8[$i+99]."</center></td>
			<td><center>".$data8[$i+100]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine7MDOHCU15.php'>HCU Drawing 6 (+SMU=334U4-M510)</a></td>
			<td><center>".$data8[$i+100]."</center></td>
			<td><center>".$data8[$i+101]."</center></td>
			<td><center>".$data8[$i+102]."</center></td>
			<td><center>".$data8[$i+103]."</center></td>
			<td><center>".$data8[$i+104]."</center></td>
			<td><center>".$data8[$i+105]."</center></td>
			<td><center>".$data8[$i+106]."</center></td>
			<td><center>".$data8[$i+107]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine7MDOHCU16.php'>HCU Annealing 1 (+SMU=334U7-M010)</a></td>
			<td><center>".$data8[$i+107]."</center></td>
			<td><center>".$data8[$i+108]."</center></td>
			<td><center>".$data8[$i+109]."</center></td>
			<td><center>".$data8[$i+110]."</center></td>
			<td><center>".$data8[$i+111]."</center></td>
			<td><center>".$data8[$i+112]."</center></td>
			<td><center>".$data8[$i+113]."</center></td>
			<td><center>".$data8[$i+114]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine7MDOHCU17.php'>HCU Annealing 2 (+SMU=334U7-M110)</a></td>
			<td><center>".$data8[$i+114]."</center></td>
			<td><center>".$data8[$i+115]."</center></td>
			<td><center>".$data8[$i+116]."</center></td>
			<td><center>".$data8[$i+117]."</center></td>
			<td><center>".$data8[$i+118]."</center></td>
			<td><center>".$data8[$i+119]."</center></td>
			<td><center>".$data8[$i+120]."</center></td>
			<td><center>".$data8[$i+121]."</center></td>
			</tr>
			";
		}
		$i++;
	}
?>
</table>
<br>
<form method="POST" action="MainPageTab.php">
<br><input class="main" type="submit" name="mainpagetab" value="<< Main Page">
</form>
<br><br><br><br>
</body>
</html>