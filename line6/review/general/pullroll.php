<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">

<form method="POST" action="./checker.php">

<table border = 1 >
<?php 
session_start();
	include "../../../koneksi.php";
	$_SESSION['pager'] = 'pullroll';
	$dater = $_SESSION['datechk'];
	$conv = str_replace('-','_',$_SESSION['line']);
	$database = strtolower($conv.'_'.$_SESSION['pager']);
	$select = "SELECT * FROM $database WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

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
	</tr>';
	$arr = array(
		"Pump Heating Cooling Unit Inlet (+SG82=374U1-M010)",
		"Pump Flame Treatment Top (+SG82=374U1-M110)",
		"Pump Corona Bottom (+SG82=374U1-M210)",
		"Pump Corona Top (+SG82=374U1-M310)",
		"Pump&nbsp;Heating Cooling&nbsp;Unit Outlet&nbsp;(+SG82= 374U1&nbsp;- M410)",
		"Fan Corona Exhaust Top (+SG81=376N1-M111)",
		"Fan Corona Exhaust Bottom (+SG81=376N1-M011)");
		
	$j=2;
	$k =  0;
	$len = count($arr);

for ($i=1; $i<= $len ; $i++) { 
	echo '<tr>
			<td>'.$i.'</td>
			<td>'.$arr[$i-1].'</td>';
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any' disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><input  value='$ngambil[$j]' class='inp' step='any'  disabled size='3' style='border:none'></td>"; $j++; $k++;
			echo "
			<td><textarea class='inp' disabled cols=12 rows=2 style='border:none'>$ngambil[$j]</textarea></td></tr>"; $j++; $k++;
}
?>
</table>
<br>
<br>
<?php 
	$select = "SELECT status FROM $database WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);
if(empty($ngambil['status'])){
			echo '<div id="fl">
			<input type="submit" name="submit" value="Checking" id="chk">
			</div>';
		}else{
			echo 'Checked By : '.$ngambil['status'];
		} 
	mysql_close($link);
		?>
</form>
</body>
</html>





