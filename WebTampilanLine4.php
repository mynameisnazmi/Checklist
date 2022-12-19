<html>
<body>

<h1>Result Form Checklist Electrical Line 4</h1>

<table border = 1 width = 1100>

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_4_resinsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_4_ext` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_4_chillrollmdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_4_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_4_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_4_winder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);
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
		<th rowspan="2">Resin ~ Silo</th>
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
	while($i<=1)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4ResinSilo1.php'>Material Dosing Unit (MDU Mixer)</a></td>
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
			<td><a href='WebTrendLine4ResinSilo2.php'>Blower Transfer Material</a></td>
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
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Extruder</th>
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
	while($i<=10)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4Ext1.php'>DC Melt-Ext</a></td>
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
			<td><a href='WebTrendLine4Ext2.php'>Melt-Ext Fan Cooling Blower</a></td>
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
			<td><a href='WebTrendLine4Ext3.php'>DC Metering-Ext</a></td>
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
			<td><a href='WebTrendLine4Ext4.php'>Metering-Ext Fan Cooling Blower</a></td>
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
			<td><a href='WebTrendLine4Ext5.php'>DC Co-Ext 1 </a></td>
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
			<td><a href='WebTrendLine4Ext6.php'>Co-Ext1 Fan Cooling Blower</a></td>
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
			<td><a href='WebTrendLine4Ext7.php'>DC Co-Ext 2</a></td>
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
			<td><a href='WebTrendLine4Ext8.php'>Co-Ext2 Fan Cooling Blower</a></td>
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
		elseif($i==8){
			echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4Ext9.php'>Melt-Ext Gear Box Oil Pump</a></td>
			<td><center>".$data1[$i+58]."</center></td>
			<td><center>".$data1[$i+59]."</center></td>
			<td><center>".$data1[$i+60]."</center></td>
			<td><center>".$data1[$i+61]."</center></td>
			<td><center>".$data1[$i+62]."</center></td>
			<td><center>".$data1[$i+63]."</center></td>
			<td><center>".$data1[$i+64]."</center></td>
			<td><center>".$data1[$i+65]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
			echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4Ext10.php'>Melt-Ext Filter Preheating Oil Pump</a></td>
			<td><center>".$data1[$i+65]."</center></td>
			<td><center>".$data1[$i+66]."</center></td>
			<td><center>".$data1[$i+67]."</center></td>
			<td><center>".$data1[$i+68]."</center></td>
			<td><center>".$data1[$i+69]."</center></td>
			<td><center>".$data1[$i+70]."</center></td>
			<td><center>".$data1[$i+71]."</center></td>
			<td><center>".$data1[$i+72]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
			echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4Ext11.php'>Metering-Ext Gear Box Oil Pump</a></td>
			<td><center>".$data1[$i+72]."</center></td>
			<td><center>".$data1[$i+73]."</center></td>
			<td><center>".$data1[$i+74]."</center></td>
			<td><center>".$data1[$i+75]."</center></td>
			<td><center>".$data1[$i+76]."</center></td>
			<td><center>".$data1[$i+77]."</center></td>
			<td><center>".$data1[$i+78]."</center></td>
			<td><center>".$data1[$i+79]."</center></td>
			</tr>
			";
		}
		$i++;
	}
		
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Chill Roll ~ MDO</th>
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
	while($i<=20)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4ChillRollMDO1.php'>DC Chill Roll</a></td>
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
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4ChillRollMDO2.php'>Air Knife</a></td>
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
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4ChillRollMDO3.php'>Water Removal</a></td>
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
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4ChillRollMDO4.php'>Chill Roll Drum Water Pump</a></td>
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
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4ChillRollMDO5.php'>Chill Roll Water Bath Pump</a></td>
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
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4ChillRollMDO6.php'>DC MDO-A</a></td>
			<td><center>".$data2[$i+37]."</center></td>
			<td><center>".$data2[$i+38]."</center></td>
			<td><center>".$data2[$i+39]."</center></td>
			<td><center>".$data2[$i+40]."</center></td>
			<td><center>".$data2[$i+41]."</center></td>
			<td><center>".$data2[$i+42]."</center></td>
			<td><center>".$data2[$i+43]."</center></td>
			<td><center>".$data2[$i+44]."</center></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4ChillRollMDO7.php'>MDO-A Fan Cooling Blower</a></td>
			<td><center>".$data2[$i+44]."</center></td>
			<td><center>".$data2[$i+45]."</center></td>
			<td><center>".$data2[$i+46]."</center></td>
			<td><center>".$data2[$i+47]."</center></td>
			<td><center>".$data2[$i+48]."</center></td>
			<td><center>".$data2[$i+49]."</center></td>
			<td><center>".$data2[$i+50]."</center></td>
			<td><center>".$data2[$i+51]."</center></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine4ChillRollMDO8.php'>DC MDO-B</a></td>
			<td><center>".$data2[$i+51]."</center></td>
			<td><center>".$data2[$i+52]."</center></td>
			<td><center>".$data2[$i+53]."</center></td>
			<td><center>".$data2[$i+54]."</center></td>
			<td><center>".$data2[$i+55]."</center></td>
			<td><center>".$data2[$i+56]."</center></td>
			<td><center>".$data2[$i+57]."</center></td>
			<td><center>".$data2[$i+58]."</center></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4ChillRollMDO9.php'>MDO-B Fan Cooling Blower</a></td>
			<td><center>".$data2[$i+58]."</center></td>
			<td><center>".$data2[$i+59]."</center></td>
			<td><center>".$data2[$i+60]."</center></td>
			<td><center>".$data2[$i+61]."</center></td>
			<td><center>".$data2[$i+62]."</center></td>
			<td><center>".$data2[$i+63]."</center></td>
			<td><center>".$data2[$i+64]."</center></td>
			<td><center>".$data2[$i+65]."</center></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4ChillRollMDO10.php'>DC MDO-C</a></td>
			<td><center>".$data2[$i+65]."</center></td>
			<td><center>".$data2[$i+66]."</center></td>
			<td><center>".$data2[$i+67]."</center></td>
			<td><center>".$data2[$i+68]."</center></td>
			<td><center>".$data2[$i+69]."</center></td>
			<td><center>".$data2[$i+70]."</center></td>
			<td><center>".$data2[$i+71]."</center></td>
			<td><center>".$data2[$i+72]."</center></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4ChillRollMDO11.php'>MDO-C Fan Cooling Blower</a></td>
			<td><center>".$data2[$i+72]."</center></td>
			<td><center>".$data2[$i+73]."</center></td>
			<td><center>".$data2[$i+74]."</center></td>
			<td><center>".$data2[$i+75]."</center></td>
			<td><center>".$data2[$i+76]."</center></td>
			<td><center>".$data2[$i+77]."</center></td>
			<td><center>".$data2[$i+78]."</center></td>
			<td><center>".$data2[$i+79]."</center></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine4ChillRollMDO12.php'>MDO Pump Preheating 1</a></td>
			<td><center>".$data2[$i+79]."</center></td>
			<td><center>".$data2[$i+80]."</center></td>
			<td><center>".$data2[$i+81]."</center></td>
			<td><center>".$data2[$i+82]."</center></td>
			<td><center>".$data2[$i+83]."</center></td>
			<td><center>".$data2[$i+84]."</center></td>
			<td><center>".$data2[$i+85]."</center></td>
			<td><center>".$data2[$i+86]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine4ChillRollMDO13.php'>MDO Pump Preheating 2</a></td>
			<td><center>".$data2[$i+86]."</center></td>
			<td><center>".$data2[$i+87]."</center></td>
			<td><center>".$data2[$i+88]."</center></td>
			<td><center>".$data2[$i+89]."</center></td>
			<td><center>".$data2[$i+90]."</center></td>
			<td><center>".$data2[$i+91]."</center></td>
			<td><center>".$data2[$i+92]."</center></td>
			<td><center>".$data2[$i+93]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine4ChillRollMDO14.php'>MDO Pump Preheating 3</a></td>
			<td><center>".$data2[$i+93]."</center></td>
			<td><center>".$data2[$i+94]."</center></td>
			<td><center>".$data2[$i+95]."</center></td>
			<td><center>".$data2[$i+96]."</center></td>
			<td><center>".$data2[$i+97]."</center></td>
			<td><center>".$data2[$i+98]."</center></td>
			<td><center>".$data2[$i+99]."</center></td>
			<td><center>".$data2[$i+100]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine4ChillRollMDO15.php'>MDO Pump Preheating 4</a></td>
			<td><center>".$data2[$i+100]."</center></td>
			<td><center>".$data2[$i+101]."</center></td>
			<td><center>".$data2[$i+102]."</center></td>
			<td><center>".$data2[$i+103]."</center></td>
			<td><center>".$data2[$i+104]."</center></td>
			<td><center>".$data2[$i+105]."</center></td>
			<td><center>".$data2[$i+106]."</center></td>
			<td><center>".$data2[$i+107]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine4ChillRollMDO16.php'>MDO Pump Preheating 5</a></td>
			<td><center>".$data2[$i+107]."</center></td>
			<td><center>".$data2[$i+108]."</center></td>
			<td><center>".$data2[$i+109]."</center></td>
			<td><center>".$data2[$i+110]."</center></td>
			<td><center>".$data2[$i+111]."</center></td>
			<td><center>".$data2[$i+112]."</center></td>
			<td><center>".$data2[$i+113]."</center></td>
			<td><center>".$data2[$i+114]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4ChillRollMDO17.php'>MDO Pump Drawing 1</a></td>
			<td><center>".$data2[$i+114]."</center></td>
			<td><center>".$data2[$i+115]."</center></td>
			<td><center>".$data2[$i+116]."</center></td>
			<td><center>".$data2[$i+117]."</center></td>
			<td><center>".$data2[$i+118]."</center></td>
			<td><center>".$data2[$i+119]."</center></td>
			<td><center>".$data2[$i+120]."</center></td>
			<td><center>".$data2[$i+121]."</center></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine4ChillRollMDO18.php'>MDO Pump Drawing 2</a></td>
			<td><center>".$data2[$i+121]."</center></td>
			<td><center>".$data2[$i+122]."</center></td>
			<td><center>".$data2[$i+123]."</center></td>
			<td><center>".$data2[$i+124]."</center></td>
			<td><center>".$data2[$i+125]."</center></td>
			<td><center>".$data2[$i+126]."</center></td>
			<td><center>".$data2[$i+127]."</center></td>
			<td><center>".$data2[$i+128]."</center></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine4ChillRollMDO19.php'>MDO Pump Drawing 3</a></td>
			<td><center>".$data2[$i+128]."</center></td>
			<td><center>".$data2[$i+129]."</center></td>
			<td><center>".$data2[$i+130]."</center></td>
			<td><center>".$data2[$i+131]."</center></td>
			<td><center>".$data2[$i+132]."</center></td>
			<td><center>".$data2[$i+133]."</center></td>
			<td><center>".$data2[$i+134]."</center></td>
			<td><center>".$data2[$i+135]."</center></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine4ChillRollMDO20.php'>MDO Pump Annealing 1</a></td>
			<td><center>".$data2[$i+135]."</center></td>
			<td><center>".$data2[$i+136]."</center></td>
			<td><center>".$data2[$i+137]."</center></td>
			<td><center>".$data2[$i+138]."</center></td>
			<td><center>".$data2[$i+139]."</center></td>
			<td><center>".$data2[$i+140]."</center></td>
			<td><center>".$data2[$i+141]."</center></td>
			<td><center>".$data2[$i+142]."</center></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine4ChillRollMDO21.php'>MDO Pump Annealing 2</a></td>
			<td><center>".$data2[$i+142]."</center></td>
			<td><center>".$data2[$i+143]."</center></td>
			<td><center>".$data2[$i+144]."</center></td>
			<td><center>".$data2[$i+145]."</center></td>
			<td><center>".$data2[$i+146]."</center></td>
			<td><center>".$data2[$i+147]."</center></td>
			<td><center>".$data2[$i+148]."</center></td>
			<td><center>".$data2[$i+149]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">TDO</th>
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
	while($i<=27)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4TDO1.php'>TDO Fan 1 OS</a></td>
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
			<td><a href='WebTrendLine4TDO2.php'>TDO Fan 2 OS</a></td>
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
			<td><a href='WebTrendLine4TDO3.php'>TDO Fan 3 OS</a></td>
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
			<td><a href='WebTrendLine4TDO4.php'>TDO Fan 4 OS</a></td>
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
			<td><a href='WebTrendLine4TDO5.php'>TDO Fan 5 OS</a></td>
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
			<td><a href='WebTrendLine4TDO6.php'>TDO Fan 6 OS</a></td>
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
			<td><a href='WebTrendLine4TDO7.php'>TDO Fan 7 OS</a></td>
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
			<td><a href='WebTrendLine4TDO8.php'>TDO Fan 8 OS</a></td>
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
			<td><a href='WebTrendLine4TDO9.php'>TDO Fan 9 OS</a></td>
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
			<td><a href='WebTrendLine4TDO10.php'>TDO Fan 10 OS</a></td>
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
			<td><a href='WebTrendLine4TDO11.php'>TDO Fan 11 OS</a></td>
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
			<td><a href='WebTrendLine4TDO12.php'>TDO Fan 12 OS</a></td>
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
			<td><a href='WebTrendLine4TDO13.php'>TDO Air Shower Fan 13 OS</a></td>
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
			<td><a href='WebTrendLine4TDO14.php'>TDO Fan 1 DS</a></td>
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
			<td><a href='WebTrendLine4TDO15.php'>TDO Fan 2 DS</a></td>
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
			<td><a href='WebTrendLine4TDO16.php'>TDO Fan 3 DS</a></td>
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
			<td><a href='WebTrendLine4TDO17.php'>TDO Fan 4 DS</a></td>
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
			<td><a href='WebTrendLine4TDO18.php'>TDO Fan 5 DS</a></td>
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
			<td><a href='WebTrendLine4TDO19.php'>TDO Fan 6 DS</a></td>
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
			<td><a href='WebTrendLine4TDO20.php'>TDO Fan 7 DS</a></td>
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
			<td><a href='WebTrendLine4TDO21.php'>TDO Fan 8 DS</a></td>
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
			<td><a href='WebTrendLine4TDO22.php'>TDO Fan 9 DS</a></td>
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
			<td><a href='WebTrendLine4TDO23.php'>TDO Fan 10 DS</a></td>
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
			<td><a href='WebTrendLine4TDO24.php'>TDO Fan 11 DS</a></td>
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
			<td><a href='WebTrendLine4TDO25.php'>TDO Fan 12 DS</a></td>
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
			<td><a href='WebTrendLine4TDO26.php'>TDO Air Shower Fan 13 DS</a></td>
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
			<td><a href='WebTrendLine4TDO27.php'>DC Motor TDO-Drive</a></td>
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
			<td><a href='WebTrendLine4TDO28.php'>AC Motor Cooling TDO-Drive</a></td>
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
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Pull Roll</th>
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
	while($i<=11)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4PullRoll1.php'>DC Pull Roll 1</a></td>
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
			<td><a href='WebTrendLine4PullRoll2.php'>DC Pull Roll 2</a></td>
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
			<td><a href='WebTrendLine4PullRoll3.php'>Cooling Pump 1</a></td>
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
			<td><a href='WebTrendLine4PullRoll4.php'>Cooling Pump 2</a></td>
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
			<td><a href='WebTrendLine4PullRoll5.php'>Pompa Cooling Flame</a></td>
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
			<td><a href='WebTrendLine4PullRoll6.php'>Pompa Radiator Flame</a></td>
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
			<td><a href='WebTrendLine4PullRoll7.php'>Oxon-Corona Exhaust Fan 1</a></td>
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
			<td><a href='WebTrendLine4PullRoll8.php'>Oxon-Corona Exhaust Fan 2</a></td>
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
			<td><a href='WebTrendLine4PullRoll9.php'>Grinder - Exhaust Fan</a></td>
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
			<td><a href='WebTrendLine4PullRoll10.php'>Grinder - Small Grinder</a></td>
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
			<td><a href='WebTrendLine4PullRoll11.php'>Grinder - Flake Conveyor Fan</a></td>
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
			<td><a href='WebTrendLine4PullRoll12.php'>Flame Treater Mixture Blower</a></td>
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
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Winder</th>
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
			<td><a href='WebTrendLine4Winder1.php'>DC Contact Roll</a></td>
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
			<td><a href='WebTrendLine4Winder2.php'>Contact-Roll Fan Cooling Blower</a></td>
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
			<td><a href='WebTrendLine4Winder3.php'>DC Turning</a></td>
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
			<td><a href='WebTrendLine4Winder4.php'>DC Winder-A</a></td>
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
			<td><a href='WebTrendLine4Winder5.php'>DC Winder-B</a></td>
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
			<td><a href='WebTrendLine4Winder6.php'>Hydraulic Pump</a></td>
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
		$i++;
	}
	
?>
</table>

<form method="POST" action="MainPageTab.php">
<br><input type="submit" name="mainpagetab" value="Main Page">
</form>

</body>
</html>