<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">

<form method="POST" action="../update/casting.php">

<table border = 1 >
<?php 
session_start();
	include "../../koneksi.php";
	$_SESSION['pager'] = 'casting';
	$dater = $_SESSION['daterecord'];
	$select = "SELECT * FROM `line_6_casting` WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Casting</th>
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
	$arr = array("Fan&nbsp;Water&nbsp;Removal Chill&nbsp;Roll (+SG21= 321N3&nbsp;- M011)", 
		"Casting Unit System Water Removal Fan (+SG21=321N3-M511)", 
		"Pump Chill Roll (+SG21=321U1-M010)", 
		"Pump Water Bath (+SG21=321U1-M110)", 
		"Motor Air Knife (+SG21=321N1-M014)", 
		"Die Bolt Cooling Fan (+SH32=292Q1-M020)");	
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





