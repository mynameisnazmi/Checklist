<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<h1 class="head">Form Checklist Electrical Line 7</h1>

<form method="POST" action="DatabaseTabelInputBackLine7mdohcu.php">

<table border = 1 width = 1100>
<?php 
session_start();
	include "koneksi.php";
	
	$tanggal = date('d-m-Y');
	$date = date('Y-m-d');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION['nama']."</h3>";
	$select = "SELECT * FROM form_checklist_line_7_mdohcu WHERE Tanggal = '$date'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">MDO HCU</th>
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
		"HCU Preheating 1 (+SMU=334U1-M010)", 
		"HCU Preheating 2 (+SMU=334U1-M110)", 
		"HCU Preheating 3 (+SMU=334U1-M210)", 
		"HCU Preheating 4 (+SMU=334U1-M310)", 
		"HCU Preheating 5 (+SMU=334U1-M410)",
		"HCU Preheating 6 (+SMU=334U1-M510)",
		"HCU Preheating 7 (+SMU=334U1-M610)",
		"HCU Preheating 8 (+SMU=334U1-M710)",
		"HCU Preheating 9 (+SMU=334U1-M810)",
		"HCU Drawing 1 (+SMU=334U4-M010)",
		"HCU Drawing 2 (+SMU=334U4-M110)",
		"HCU Drawing 3 (+SMU=334U4-M210)",
		"HCU Drawing 4 (+SMU=334U4-M310)",
		"HCU Drawing 5 (+SMU=334U4-M410)",
		"HCU Drawing 6 (+SMU=334U4-M510)", 
		"HCU Annealing 1 (+SMU=334U7-M010)",
		"&nbsp;HCU&nbsp;Annealing&nbsp;2&nbsp;(+SMU=334U7&nbsp;-&nbsp;M110)&nbsp;");
	$j=2;
	$i=1;
	while($i<=17)
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
<br><form>
<button class="main" formaction="ConfirmL7.php" ><< Back</button>
</form>
<br><br><br>
</body>
</html>