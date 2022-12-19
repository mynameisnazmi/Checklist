<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<h1 class="head">Form Checklist Electrical Line 7</h1>

<form method="POST" action="DatabaseTabelInputBackLine7tdoas.php">

<table border = 1 width = 1100>
<?php session_start();
	include "koneksi.php";
	
	$tanggal = date('d-m-Y');
	$date = date('Y-m-d');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION['nama']."</h3>";
	$select = "SELECT * FROM form_checklist_line_7_tdoas WHERE Tanggal = '$date'";
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

"Cooling&nbsp;1&nbsp;Fan&nbsp;2&nbsp;Bottom&nbsp;(+SG61=345N1&nbsp;-&nbsp;M171)",  

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

"Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)", 

"Cooling 5 Fan 1 Top (+SG61=345N1-M821)", 

"Cooling 5 Fan 1 Top (+SG61=345N1-M823)", 

"Cooling 5 Fan 2 Top (+SG61=345N1-M871)", 

"Cooling 5 Fan 2 Top (+SG61=345N1-M873)", 

"Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)", 

"Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)", 

"Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)", 

"Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)");

	$j=2;
	$i=1;
	while($i<=40)
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





