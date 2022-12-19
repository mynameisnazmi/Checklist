<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<h1 class="head">Form Checklist Electrical Line 7</h1>

<form method="POST" action="DatabaseTabelInputBackLine7tdo.php">

<table border = 1 width = 1100>
<?php session_start();
	include "koneksi.php";
	
	$tanggal = date('d-m-Y');
	$date = date('Y-m-d');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION['nama']."</h3>";
	$select = "SELECT * FROM form_checklist_line_7_tdo WHERE Tanggal = '$date'";
	$result = mysql_query($select);
	$ngambil = mysql_fetch_array($result);

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
	</tr>';
	$arr = array(
"Line Drive Outlet Left (+SD42=341M5-M015)", 

"Cooling Drive Outlet Left (+SD42=341M5-M050)", 

"Line Drive Outlet Right (+SD43=341M6-M015)", 

"Cooling Drive Outlet Right (+SD43=341M6 - M050)",  

"Preheating 1 Fan 1 (+SG33=343N1-M014)", 

"Preheating 1 Fan 2 (+SG33=343N1-M024)",

"Preheating 1 Fan 3 (+SG33=343N1-M034)", 

"Preheating 2 Fan 1 (+SG33=343N1-M114)", 

"Preheating 2 Fan 2 (+SG33=343N1-M124)", 

"Preheating 2 Fan 3 (+SG33=343N1-M134)", 

"Preheating 3 Fan 1 (+SG33=343N1-M214)", 

"Preheating 3 Fan 2 (+SG33=343N1-M224)", 

"Preheating 3 Fan 3 (+SG33=343N1-M234)", 

"Preheating 4 Fan 1 (+SG34=343N1-M314)", 

"Preheating 4 Fan 2 (+SG34=343N1-M324)", 

"Preheating 4 Fan 3 (+SG34=343N1-M334)", 

"Preheating 5 Fan 1 (+SG34=343N1-M414)", 

"Preheating 5 Fan 2 (+SG34=343N1-M424)", 

"Preheating 5 Fan 3 (+SG34=343N1-M434)", 

"Preheating 6 Fan 1 (+SG34=343N1-M514)", 

"Preheating 6 Fan 2 (+SG34=343N1-M524)", 

"Preheating 6 Fan 3 (+SG34=343N1-M534)", 

"Drawing 1 Fan 1 Top (+SG41=343N4-M014)", 

"Drawing 1 Fan 2 Top (+SG41=343N4-M214)", 

"Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)", 

"Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)", 

"Drawing 2 Fan 1 Top (+SG41=343N4-M414)", 

"Drawing 2 Fan 2 Top (+SG41=343N4-M614)", 

"Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)", 

"Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)", 

"Drawing 3 Fan 1 Top (+SG41=343N4-M814)", 

"Drawing 3 Fan 2 Top (+SG42=343M5-M014)", 

"Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)", 

"Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)", 

"Drawing 4 Fan 1 Top (+SG42=343M5-M214)", 

"Drawing 4 Fan 2 Top (+SG42=343M5-M414)", 

"Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)", 

"Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)", 

"Drawing 5 Fan 1 Top (+SG42=343M5-M614)", 

"Drawing 5 Fan 2 Top (+SG42=343M5-M814)",

"Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)", 

"Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)", 

"Annealing 1 Fan 1 Top (+SG52=343M7-M014)", 

"Annealing 1 Fan 2 Top (+SG52=343M7-M214)", 

"Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)", 

"Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)", 

"Annealing 2 Fan 1 Top (+SG52=343M7-M414)", 

"Annealing 2 Fan 2 Top (+SG52=343M7-M614)", 

"Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)", 

"Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)", 

"Annealing 3 Fan 1 Top (+SG52=343M7-M814)", 

"Annealing 3 Fan 2 Top (+SG53=343N8-M014)", 

"Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)", 

"Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)", 

"Annealing 4 Fan 1 Top (+SG53=343N8-M214)", 

"Annealing 4 Fan 2 Top (+SG53=343N8-M414)", 

"Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)", 

"Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)", 

"Annealing 5 Fan 1 Top (+SG53=343N8-M614)", 

"Annealing 5 Fan 2 Top (+SG53=343N8-M814)", 

"Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)", 

"Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)", 

"Annealing 6 Fan 1 Top (+SG53=343N9-M014)", 

"Annealing 6 Fan 2 Top (+SG53=343N9-M214)", 

"Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)", 

"Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)", 

"Film&nbsp;Edge&nbsp;Cooling&nbsp;Fan&nbsp;Left&nbsp;(+SG64=345N5&nbsp;-&nbsp;M014)", 

"Film&nbsp;Edge&nbsp;Cooling&nbsp;Fan&nbsp;Right&nbsp;(+SG64=345N5&nbsp;-&nbsp;M114)", 

"Edge Guide Fan Left (+SD41=341M1-M050)", 

"Edge Guide Fan Right (+SD42=341M2-M050)"
);

	$j=2;
	$i=1;
	while($i<=70)
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





