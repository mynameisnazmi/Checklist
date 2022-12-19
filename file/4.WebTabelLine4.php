<html>
<head>
	<title>Checklist</title>
</head>
<body>

<h1>Form Checklist Electrical Line 4</h1>

<form method="POST" action="4.DatabaseTabelInputLine4.php">

<table border = 1 width = 1100>
<?php 
	include "4.koneksi.php";
	//session_start();
	
	$tanggal = date('d-m-Y');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION["nama"]."</h3>";

	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Item</th>
	<th colspan="3">Vibrasi Motor</th>
	<th colspan="3">Vibrasi Pump</th>
	<th colspan="2">Temperature</th>
	<th rowspan="2">Arus</th>
	<th rowspan="2">Keterangan</th>
		<tr>
		<th>DE</th>
		<th>NDE Axial</th>
		<th>NDE Radial</th>
		<th>DE</th>
		<th>NDE Axial</th>
		<th>NDE Radial</th>
		<th>Motor</th>
		<th>Pump</th>
		</tr>
	</tr>';
		
	$i=0;
	$query = mysql_query("SELECT * FROM `form_line_4`");
	while($data = mysql_fetch_array($query))
	{
		echo "
		<tr>
		<td>".$data['No']."</td>
		<td>".$data['Bagian']."</td>
		<td><center><input type='text' name='VMDE[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='VPDE[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='VPNDEA[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='VPNDER[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='TempM[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='TempP[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='Arus[$i]' size='3' style='border:none'></td>
		<td><center><input type='text' name='Ket[$i]' style='border:none'></td>
		</tr>";
		$i++;
	}
?>
</table>

<br><input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>

<form method="POST" action="4.MainPageTab.php">
<input type="submit" name="MainPage" value="Main Page">
</form>

</body>
</html>