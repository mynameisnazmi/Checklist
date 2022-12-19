<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">

<form method="POST" action="../update/smallgrinder.php">

<table border = 1 >
<?php 
session_start();
	include "../../koneksi.php";
	$_SESSION['pager'] = 'smallgrinder';
	$dater = $_SESSION['daterecord'];
	$select = "SELECT * FROM `line_6_smallgrinder` WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

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
	</tr>';
	$arr = array(
		"Motor Grinder",
		"Conveying&nbsp;Fan&nbsp;1",
		"Conveying Fan 2");
		
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





