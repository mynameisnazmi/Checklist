<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<h1 class="head">Form Checklist Electrical Line 7</h1>

<form method="POST" action="DatabaseTabelInputBackLine7tdoairing.php">

<table border = 1 width = 1100>
<?php session_start();
	include "koneksi.php";
	
	$tanggal = date('d-m-Y');
	$date = date('Y-m-d');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION['nama']."</h3>";
	$select = "SELECT * FROM form_checklist_line_7_tdoairing WHERE Tanggal = '$date'";
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
"Exhaust Fan (+SG63=347N1-M014)",
"Exhaust Fan (+SG63=347N1-M114)",
"Exhaust Fan Neutral Top (+SG63=347N1-M214)",
"&nbsp;Exhaust&nbsp;Fan&nbsp;Neutral&nbsp;Bottom&nbsp;(+SG63=347N1&nbsp;-&nbsp;M314)&nbsp;",
"LPG Exhaust Fan");
	$j=2;
	$i=1;
	while($i<=5)
	{
		$k = $i - 1;
			echo "
			<tr>
			<td>&nbsp;$i</td>
			<td>$arr[$k]</td>
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='VMNDEA[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='VMNDER[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='TempM[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='ArusR[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='ArusS[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='number' value='$ngambil[$j]' class='inp' step='any'  name='ArusT[$i]' size='3' style='border:none'></td>"; $j++;
			echo "
			<td><center><input type='text' class='inp' value='$ngambil[$j]' name='Ket[$i]' style='border:none'></td>
			</tr>"; $j++; 

		$i++;
	}
	mysql_close($link);
?>
</table>
<br>
<br>
<input type="submit" name="submit" value="Submit >>" class="submit">
<input type="reset" name="reset" value="Reset" class="res">
</form><br>
<br>
<form>
<button class="main" formaction="ConfirmL7.php" ><< Back</button>
</form><br><br><br>
</body>
</html>





