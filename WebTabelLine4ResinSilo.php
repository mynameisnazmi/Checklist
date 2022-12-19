<html>
<head>
	<title>Checklist</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">

<h1 class="head">Form Checklist Electrical Line 4</h1>

<form method="POST" action="DatabaseTabelInputLine4ResinSilo.php">

<table border = 1 width = 1100>
<?php 
	include "koneksi.php";
	
	$tanggal = date('d-m-Y');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION['nama']."</h3>";
	
	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Resin - Silo</th>
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
		
	$i=1;
	while($i<=2)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>&nbsp;Material&nbsp;Dosing&nbsp;Unit&nbsp;(MDU&nbsp;Mixer)&nbsp;</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==2){
			echo "
			<tr>
			<td>$i</td>
			<td>Blower Transfer Material</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		$i++;
	}
	mysql_close($link);
?>
</table>
<br>
<br><input class="submit" type="submit" name="submit" value="Submit >>">
<input type="reset" name="reset" class="res" value="Reset">
</form>
<br><br>
<form method="POST" action="MainPageTab.php">
<input type="submit" class="main" name="MainPage" value="<< Main Page">
</form>
<br><br><br><br>
</body>
</html>