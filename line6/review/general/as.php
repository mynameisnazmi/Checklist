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
	$_SESSION['pager'] = 'as';
	$dater = $_SESSION['datechk'];
	$conv = str_replace('-','_',$_SESSION['line']);
	$database = strtolower($conv.'_'.$_SESSION['pager']);
	$select = "SELECT * FROM $database WHERE Tanggal = '$dater'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

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
	</tr>';
	$arr = array(
"Fan Cooling Exhaust Top (+SG64=347N1-M434)",
"Fan&nbsp;Cooling Exhaust&nbsp;Top&nbsp;1 (+SG63 =347N1&nbsp;- M414)",
"Airing Fan 1 (+SG64=347N1-M014)",
"Airing Supply Fan 1 (+SG63=347N1-M114)",
"Airing Fan Exhaust Neutral (+SG63=347N1-M214)");
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





