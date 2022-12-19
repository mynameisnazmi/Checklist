<html>
<body>

<h1>Result Form Checklist Electrical Line 2</h1>

<table border = 1 width = 1100>

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_2_rawmaterial` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_2_extrussion` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_2_mdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_2_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_2_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_2_winder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);

	
	if($query=='0'){
		echo"Data Raw Material Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}

	echo"<h3>Nama Pelaksana :  $data[1]</h3>";
	echo"<h3>Status :  $data[2]ed ($data[3])</h3>";

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">Raw Material</th>
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
	while($i<=9)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2RawMaterial1.php'>Transfer Material Silo</a></td>
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
			<td><a href='WebTrendLine2RawMaterial2.php'>Dosing PP1</a></td>
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
			<td><a href='WebTrendLine2RawMaterial3.php'>Dosing AD</a></td>
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
			<td><a href='WebTrendLine2RawMaterial4.php'>Dosing Regran</a></td>
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
			<td><a href='WebTrendLine2RawMaterial5.php'>Rotary Valve</a></td>
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
			<td><a href='WebTrendLine2RawMaterial6.php'>Autoloader Dosing PP1</a></td>
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
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine2RawMaterial7.php'>Autoloader Dosing Add</a></td>
			<td><center>".$data[$i+46]."</center></td>
			<td><center>".$data[$i+47]."</center></td>
			<td><center>".$data[$i+48]."</center></td>
			<td><center>".$data[$i+49]."</center></td>
			<td><center>".$data[$i+50]."</center></td>
			<td><center>".$data[$i+51]."</center></td>
			<td><center>".$data[$i+52]."</center></td>
			<td><center>".$data[$i+53]."</center></td>
			</tr>
			";
		}		
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine2RawMaterial8.php'>Autoloader Dosing Regran</a></td>
			<td><center>".$data[$i+53]."</center></td>
			<td><center>".$data[$i+54]."</center></td>
			<td><center>".$data[$i+55]."</center></td>
			<td><center>".$data[$i+56]."</center></td>
			<td><center>".$data[$i+57]."</center></td>
			<td><center>".$data[$i+58]."</center></td>
			<td><center>".$data[$i+59]."</center></td>
			<td><center>".$data[$i+60]."</center></td>
			</tr>
			";
		}		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine2RawMaterial9.php'>Mixer</a></td>
			<td><center>".$data[$i+60]."</center></td>
			<td><center>".$data[$i+61]."</center></td>
			<td><center>".$data[$i+62]."</center></td>
			<td><center>".$data[$i+63]."</center></td>
			<td><center>".$data[$i+64]."</center></td>
			<td><center>".$data[$i+65]."</center></td>
			<td><center>".$data[$i+66]."</center></td>
			<td><center>".$data[$i+67]."</center></td>
			</tr>
			";
		}		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine2RawMaterial10.php'>Mixer Silo</a></td>
			<td><center>".$data[$i+67]."</center></td>
			<td><center>".$data[$i+68]."</center></td>
			<td><center>".$data[$i+69]."</center></td>
			<td><center>".$data[$i+70]."</center></td>
			<td><center>".$data[$i+71]."</center></td>
			<td><center>".$data[$i+72]."</center></td>
			<td><center>".$data[$i+73]."</center></td>
			<td><center>".$data[$i+74]."</center></td>
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
	while($i<=24)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2Ext1.php'>Drive EA</a></td>
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
			<td><a href='WebTrendLine2Ext2.php'>Fan Drive EA</a></td>
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
			<td><a href='WebTrendLine2Ext3.php'>Gear Oil Pump</a></td>
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
			<td><a href='WebTrendLine2Ext4.php'>Pump Filter EA</a></td>
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
			<td><a href='WebTrendLine2Ext5.php'>Pump HCU 1</a></td>
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
			<td><a href='WebTrendLine2Ext6.php'>Pump HCU 2</a></td>
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
			<td><a href='WebTrendLine2Ext7.php'>Pump HCU 3</a></td>
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
			<td><a href='WebTrendLine2Ext8.php'>Feeding Zone EA</a></td>
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
			<td><a href='WebTrendLine2Ext9.php'>Drive Cramer Feeder</a></td>
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
			<td><a href='WebTrendLine2Ext10.php'>Fan Drive Cramer Feeder</a></td>
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
			<td><a href='WebTrendLine2Ext11.php'>Drive Metering Pump</a></td>
			<td><center>".$data1[$i+72]."</center></td>
			<td><center>".$data1[$i+73]."</center></td>
			<td><center>".$data1[$i+74]."</center></td>
			<td><center>".$data1[$i+75]."</center></td>
			<td><center>".$data1[$i+76]."</center></td>
			<td><center>".$data1[$i+77]."</center></td>
			<td><center>".$data1[$i+78]."</center></td>
			<td><center>".$data1[$i+79]."</center></td>
			</tr
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine2Ext12.php'>Fan Drive Metering Pump</a></td>
			<td><center>".$data1[$i+79]."</center></td>
			<td><center>".$data1[$i+80]."</center></td>
			<td><center>".$data1[$i+81]."</center></td>
			<td><center>".$data1[$i+82]."</center></td>
			<td><center>".$data1[$i+83]."</center></td>
			<td><center>".$data1[$i+84]."</center></td>
			<td><center>".$data1[$i+85]."</center></td>
			<td><center>".$data1[$i+86]."</center></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine2Ext13.php'>Drive Chill Roll</a></td>
			<td><center>".$data1[$i+86]."</center></td>
			<td><center>".$data1[$i+87]."</center></td>
			<td><center>".$data1[$i+88]."</center></td>
			<td><center>".$data1[$i+89]."</center></td>
			<td><center>".$data1[$i+90]."</center></td>
			<td><center>".$data1[$i+91]."</center></td>
			<td><center>".$data1[$i+92]."</center></td>
			<td><center>".$data1[$i+93]."</center></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine2Ext14.php'>Fan Drive Chill Roll</a></td>
			<td><center>".$data1[$i+93]."</center></td>
			<td><center>".$data1[$i+94]."</center></td>
			<td><center>".$data1[$i+95]."</center></td>
			<td><center>".$data1[$i+96]."</center></td>
			<td><center>".$data1[$i+97]."</center></td>
			<td><center>".$data1[$i+98]."</center></td>
			<td><center>".$data1[$i+99]."</center></td>
			<td><center>".$data1[$i+100]."</center></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine2Ext15.php'>Air Knife</a></td>
			<td><center>".$data1[$i+100]."</center></td>
			<td><center>".$data1[$i+101]."</center></td>
			<td><center>".$data1[$i+102]."</center></td>
			<td><center>".$data1[$i+103]."</center></td>
			<td><center>".$data1[$i+104]."</center></td>
			<td><center>".$data1[$i+105]."</center></td>
			<td><center>".$data1[$i+106]."</center></td>
			<td><center>".$data1[$i+107]."</center></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine2Ext16.php'>Water Removal</a></td>
			<td><center>".$data1[$i+107]."</center></td>
			<td><center>".$data1[$i+108]."</center></td>
			<td><center>".$data1[$i+109]."</center></td>
			<td><center>".$data1[$i+110]."</center></td>
			<td><center>".$data1[$i+111]."</center></td>
			<td><center>".$data1[$i+112]."</center></td>
			<td><center>".$data1[$i+113]."</center></td>
			<td><center>".$data1[$i+114]."</center></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine2Ext17.php'>Pump Chill Roll</a></td>
			<td><center>".$data1[$i+114]."</center></td>
			<td><center>".$data1[$i+115]."</center></td>
			<td><center>".$data1[$i+116]."</center></td>
			<td><center>".$data1[$i+117]."</center></td>
			<td><center>".$data1[$i+118]."</center></td>
			<td><center>".$data1[$i+119]."</center></td>
			<td><center>".$data1[$i+120]."</center></td>
			<td><center>".$data1[$i+121]."</center></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine2Ext18.php'>Water Bath</a></td>
			<td><center>".$data1[$i+121]."</center></td>
			<td><center>".$data1[$i+122]."</center></td>
			<td><center>".$data1[$i+123]."</center></td>
			<td><center>".$data1[$i+124]."</center></td>
			<td><center>".$data1[$i+125]."</center></td>
			<td><center>".$data1[$i+126]."</center></td>
			<td><center>".$data1[$i+127]."</center></td>
			<td><center>".$data1[$i+128]."</center></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine2Ext19.php'>Drive EB 1</a></td>
			<td><center>".$data1[$i+128]."</center></td>
			<td><center>".$data1[$i+129]."</center></td>
			<td><center>".$data1[$i+130]."</center></td>
			<td><center>".$data1[$i+131]."</center></td>
			<td><center>".$data1[$i+132]."</center></td>
			<td><center>".$data1[$i+133]."</center></td>
			<td><center>".$data1[$i+134]."</center></td>
			<td><center>".$data1[$i+135]."</center></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine2Ext20.php'>Fan Drive EB 1</a></td>
			<td><center>".$data1[$i+135]."</center></td>
			<td><center>".$data1[$i+136]."</center></td>
			<td><center>".$data1[$i+137]."</center></td>
			<td><center>".$data1[$i+138]."</center></td>
			<td><center>".$data1[$i+139]."</center></td>
			<td><center>".$data1[$i+140]."</center></td>
			<td><center>".$data1[$i+141]."</center></td>
			<td><center>".$data1[$i+142]."</center></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine2Ext21.php'>Autoloader EB 1</a></td>
			<td><center>".$data1[$i+142]."</center></td>
			<td><center>".$data1[$i+143]."</center></td>
			<td><center>".$data1[$i+144]."</center></td>
			<td><center>".$data1[$i+145]."</center></td>
			<td><center>".$data1[$i+146]."</center></td>
			<td><center>".$data1[$i+147]."</center></td>
			<td><center>".$data1[$i+148]."</center></td>
			<td><center>".$data1[$i+149]."</center></td>
			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine2Ext22.php'>Drive EB 2</a></td>
			<td><center>".$data1[$i+149]."</center></td>
			<td><center>".$data1[$i+150]."</center></td>
			<td><center>".$data1[$i+151]."</center></td>
			<td><center>".$data1[$i+152]."</center></td>
			<td><center>".$data1[$i+153]."</center></td>
			<td><center>".$data1[$i+154]."</center></td>
			<td><center>".$data1[$i+155]."</center></td>
			<td><center>".$data1[$i+156]."</center></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine2Ext23.php'>Fan Drive EB 2</a></td>
			<td><center>".$data1[$i+156]."</center></td>
			<td><center>".$data1[$i+157]."</center></td>
			<td><center>".$data1[$i+158]."</center></td>
			<td><center>".$data1[$i+159]."</center></td>
			<td><center>".$data1[$i+160]."</center></td>
			<td><center>".$data1[$i+161]."</center></td>
			<td><center>".$data1[$i+162]."</center></td>
			<td><center>".$data1[$i+163]."</center></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine2Ext24.php'>Autoloader EB 2</a></td>
			<td><center>".$data1[$i+163]."</center></td>
			<td><center>".$data1[$i+164]."</center></td>
			<td><center>".$data1[$i+165]."</center></td>
			<td><center>".$data1[$i+166]."</center></td>
			<td><center>".$data1[$i+167]."</center></td>
			<td><center>".$data1[$i+168]."</center></td>
			<td><center>".$data1[$i+169]."</center></td>
			<td><center>".$data1[$i+170]."</center></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine2Ext25.php'>Feeding Zone EB</a></td>
			<td><center>".$data1[$i+170]."</center></td>
			<td><center>".$data1[$i+171]."</center></td>
			<td><center>".$data1[$i+172]."</center></td>
			<td><center>".$data1[$i+173]."</center></td>
			<td><center>".$data1[$i+174]."</center></td>
			<td><center>".$data1[$i+175]."</center></td>
			<td><center>".$data1[$i+176]."</center></td>
			<td><center>".$data1[$i+177]."</center></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th rowspan="2">No</th>
		<th rowspan="2">MDO</th>
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
	while($i<=17)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2MDO1.php'>Drive MA</a></td>
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
			<td><a href='WebTrendLine2MDO2.php'>Fan Drive MA</a></td>
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
			<td><a href='WebTrendLine2MDO3.php'>Drive MB</a></td>
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
			<td><a href='WebTrendLine2MDO4.php'>Fan Drive MB</a></td>
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
			<td><a href='WebTrendLine2MDO5.php'>Drive MC</a></td>
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
			<td><a href='WebTrendLine2MDO6.php'>Fan Drive MC</a></td>
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
			<td><a href='WebTrendLine2MDO7.php'>Auxilary MDO</a></td>
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
			<td><a href='WebTrendLine2MDO8.php'>Fan Auxilary MDO</a></td>
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
			<td><a href='WebTrendLine2MDO9.php'>Pump MDO 1</a></td>
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
			<td><a href='WebTrendLine2MDO10.php'>Pump MDO 2</a></td>
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
			<td><a href='WebTrendLine2MDO11.php'>Pump MDO 3</a></td>
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
			<td><a href='WebTrendLine2MDO12.php'>Pump MDO 4</a></td>
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
			<td><a href='WebTrendLine2MDO13.php'>Pump MDO 5</a></td>
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
			<td><a href='WebTrendLine2MDO14.php'>Pump MDO 6</a></td>
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
			<td><a href='WebTrendLine2MDO15.php'>Pump MDO 7</a></td>
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
			<td><a href='WebTrendLine2MDO16.php'>Pump MDO 8</a></td>
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
			<td><a href='WebTrendLine2MDO17.php'>Pump MDO 9</a></td>
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
			<td><a href='WebTrendLine2MDO18.php'>Pump MDO 10</a></td>
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
	while($i<=18)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2TDO1.php'>Edge Guide TDO</a></td>
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
			<td><a href='WebTrendLine2TDO2.php'>Lubrication Inlet</a></td>
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
			<td><a href='WebTrendLine2TDO3.php'>Lubrication Outlet</a></td>
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
			<td><a href='WebTrendLine2TDO4.php'>Chain Lubrication</a></td>
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
			<td><a href='WebTrendLine2TDO5.php'>Fan Blower TDO 1</a></td>
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
			<td><a href='WebTrendLine2TDO6.php'>Fan Blower TDO 2</a></td>
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
			<td><a href='WebTrendLine2TDO7.php'>Fan Blower TDO 3</a></td>
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
			<td><a href='WebTrendLine2TDO8.php'>Fan Blower TDO 4</a></td>
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
			<td><a href='WebTrendLine2TDO9.php'>Fan Blower TDO 5</a></td>
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
			<td><a href='WebTrendLine2TDO10.php'>Fan Blower TDO 6</a></td>
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
			<td><a href='WebTrendLine2TDO11.php'>Fan Blower TDO 7</a></td>
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
			<td><a href='WebTrendLine2TDO12.php'>Fan Blower TDO 8</a></td>
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
			<td><a href='WebTrendLine2TDO13.php'>Fan Blower TDO 9</a></td>
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
			<td><a href='WebTrendLine2TDO14.php'>Fan Blower TDO 10</a></td>
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
			<td><a href='WebTrendLine2TDO15.php'>Exhaust TDO In</a></td>
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
			<td><a href='WebTrendLine2TDO16.php'>Exhaust TDO Out</a></td>
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
			<td>17</td>
			<td><a href='WebTrendLine2TDO17.php'>Exhaust TDO Out</a></td>
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
			<td><a href='WebTrendLine2TDO18.php'>Drive TDO</a></td>
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
			<td><a href='WebTrendLine2TDO19.php'>Fan Drive TDO</a></td>
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
	while($i<=15)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2PullRoll1.php'>Drive Pull Roll 1</a></td>
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
			<td><a href='WebTrendLine2PullRoll2.php'>Fan Drive Pull Roll 1</a></td>
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
			<td><a href='WebTrendLine2PullRoll3.php'>Drive Pull Roll 2</a></td>
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
			<td><a href='WebTrendLine2PullRoll4.php'>Fan Drive Pull Roll 2</a></td>
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
			<td><a href='WebTrendLine2PullRoll5.php'>Edge Trim Exh Fan</a></td>
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
			<td><a href='WebTrendLine2PullRoll6.php'>Edge Trim Grinder</a></td>
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
			<td><a href='WebTrendLine2PullRoll7.php'>Fluff Transfer Grinder</a></td>
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
			<td><a href='WebTrendLine2PullRoll8.php'>Edge Puller OS</a></td>
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
			<td><a href='WebTrendLine2PullRoll9.php'>Edge Puller DS</a></td>
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
			<td><a href='WebTrendLine2PullRoll10.php'>Pump Cooling PR 1</a></td>
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
			<td><a href='WebTrendLine2PullRoll11.php'>Pump Cooling PR 2</a></td>
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
			<td><a href='WebTrendLine2PullRoll12.php'>Pump Cooling Roll</a></td>
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
			<td><a href='WebTrendLine2PullRoll13.php'>Ozon Exhaust Corona 1</a></td>
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
			<td><a href='WebTrendLine2PullRoll14.php'>Ozon Exhaust Corona 2</a></td>
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
			<td><a href='WebTrendLine2PullRoll15.php'>Drive Contact Roll</a></td>
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
			<td><a href='WebTrendLine2PullRoll16.php'>Fan Drive Contact Roll</a></td>
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
	while($i<=6)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine2Winder1.php'>Drive WA</a></td>
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
			<td><a href='WebTrendLine2Winder2.php'>Fan Drive WA</a></td>
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
			<td><a href='WebTrendLine2Winder3.php'>Drive WB</a></td>
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
			<td><a href='WebTrendLine2Winder4.php'>Fan Drive WB</a></td>
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
			<td><a href='WebTrendLine2Winder5.php'>Drive Turning Winder</a></td>
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
			<td><a href='WebTrendLine2Winder6.php'>Fan Drive Turning Winder</a></td>
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
			<td><a href='WebTrendLine2Winder7.php'>Cutting Winder</a></td>
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
	
?>

</table>
<form method="POST" action="WebTampilanCheckLine2.php">
<br><input type="submit" name="Check" value="Check">
</form>
<form method="POST" action="../MainPagePC.php">
<br><input type="submit" name="mainpagepc" value="Main Page">
</form>
</body>
</html>