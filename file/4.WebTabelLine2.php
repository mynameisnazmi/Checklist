<html>
<head>
	<title>Checklist</title>
</head>
<body>

<h1>Form Checklist Electrical Line 2</h1>

<form method="POST" action="4.DatabaseTabelInputLine2.php">

<table border = 1 width = 500>

<?php 
	include "4.koneksi.php";
	
	$tanggal = date('d-m-Y');
	echo"<h3>Date : $tanggal</h3>";
	
	echo"<h3>Nama Pelaksana : ".$_SESSION["nama"]."</h3>";
	
	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Item</th>
	<th colspan="3">Kondisi</th>
	<tr>
	<th>Noise</th>
	<th>Kasar</th>
	<th>Getar</th>
	</tr>
	</tr>
	';
	
	$i=0;
	$query = mysql_query("SELECT * FROM `form_line_2`");
	while($data = mysql_fetch_array($query))
	{
		echo "
		<tr>
		<td>".$data['No']."</td>
		<td>".$data['Bagian']."</td>
		<td><center><input type='radio' name='condition[$i]' Value='Noise'></td>
		<td><center><input type='radio' name='condition[$i]' Value='Kasar'></td>
		<td><center><input type='radio' name='condition[$i]' Value='Getar'></td>
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