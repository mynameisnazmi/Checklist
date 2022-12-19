<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">

<form method="POST" action="../update/tdoas.php">

<table border = 1 >
<?php 
session_start();
	include "../../koneksi.php";
	$_SESSION['pager'] = 'tdoas';
	$dater = $_SESSION['daterecord'];
	$select = "SELECT * FROM `line_6_tdoas` WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">TDO Air Shower</th>
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
	</tr>';
	$arr = array(
		"Cooling 1 Fan 1 Top (+SG61=345N1-M021)",
		"Cooling 1 Fan 1 Top (+SG61=345N1-M023)",
		"Cooling 1 Fan 2 Top (+SG61=345N1-M071)",
		"Cooling 1 Fan 2 Top (+SG61=345N1-M073)",
		"Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)",
		"Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)",
		"Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)",
		"Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)",
		"Cooling 2 Fan 1 Top (+SG61=345N1-M221)",
		"Cooling 2 Fan 1 Top (+SG61=345N1-M223)",
		"Cooling 2 Fan 2 Top (+SG61=345N1-M271)",
		"Cooling 2 Fan 2 Top (+SG61=345N1-M273)",
		"Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)",
		"Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)",
		"Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)",
		"Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)",
		"Cooling 3 Fan 1 Top (+SG61=345N1-M421)",
		"Cooling 3 Fan 1 Top (+SG61=345N1-M423)",
		"Cooling 3 Fan 2 Top (+SG61=345N1-M471)",
		"Cooling 3 Fan 2 Top (+SG61=345N1-M473)",
		"Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)",
		"Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)",
		"Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)",
		"Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)",
		"Cooling 4 Fan 1 Top (+SG61=345N1-M621)",
		"Cooling 4 Fan 1 Top (+SG61=345N1-M623)",
		"Cooling 4 Fan 2 Top (+SG61=345N1-M671)",
		"Cooling 4 Fan 2 Top (+SG61=345N1-M673)",
		"Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)",
		"Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)",
		"Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)",
		"Cooling&nbsp;4&nbsp;Fan&nbsp;2 Bottom&nbsp;(+SG61 =345N1&nbsp;- M773)",
		"Cooling 5 Fan 1 Top (+SG61=345N1-M821)",
		"Cooling 5 Fan 1 Top (+SG61=345N1-M823)",
		"Cooling 5 Fan 2 Top (+SG61=345N1-M871)",
		"Cooling 5 Fan 2 Top (+SG61=345N1-M873)",
		"Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)",
		"Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)",
		"Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)",
		"Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)");		
	$j=2;
	$k =  0;
	$len = count($arr);

for ($i=1; $i<= $len ; $i++) { 
	echo '<tr>
			<td>'.$i.'</td>
			<td>'.$arr[$i-1].'</td>';
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any' name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='data[$k]' size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><textarea class='inp' name='data[$k]' cols=12 rows=2 style='border:none'>$ngambil[$j]</textarea></td></tr>"; $j++; $k++;
}
	mysql_close($link);
?>
</table>
<br>
<br>
<div id="fl">

<input type="reset" name="reset" value="Reset" id="res">
<input type="submit" name="submit" value="Save" id="submit">
</div>
</form>
</body>
</html>





