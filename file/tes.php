<html>
<body>

<img width=200 height=50 src='arghakarya.jpg' />
<h1>Result Form Checklist Electrical Line 4</h1>

<table border = 1 width = 1100>

<?php
include '4.koneksi.php';

//$review = $_POST['Review'];
//if($review == 'Tabel'){
	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$query = mysql_query("SELECT * FROM `form_line_4`");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_4` WHERE Tanggal='$tahun-$bulan-$hari' ");
	if($query1=='0'){
		echo"Data Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}

	$data1 = mysql_fetch_row($query1);

	echo"<h3>Nama Pelaksana :  $data1[1]</h3>";

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
		</tr>
	';

	$i=0;
	while($data = mysql_fetch_row($query))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td><a href='tes1.php'>Ex Dosing 1</a></td>
			<td><center>".$data1[$i+2]."</center></td>
			<td><center>".$data1[$i+3]."</center></td>
			<td><center>".$data1[$i+4]."</center></td>
			<td><center>".$data1[$i+5]."</center></td>
			<td><center>".$data1[$i+6]."</center></td>
			<td><center>".$data1[$i+7]."</center></td>
			<td><center>".$data1[$i+8]."</center></td>
			<td><center>".$data1[$i+9]."</center></td>
			<td><center>".$data1[$i+10]."</center></td>
			<td><center>".$data1[$i+11]."</center></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td><center>".$data1[$i+11]."</center></td>
			<td><center>".$data1[$i+12]."</center></td>
			<td><center>".$data1[$i+13]."</center></td>
			<td><center>".$data1[$i+14]."</center></td>
			<td><center>".$data1[$i+15]."</center></td>
			<td><center>".$data1[$i+16]."</center></td>
			<td><center>".$data1[$i+17]."</center></td>
			<td><center>".$data1[$i+18]."</center></td>
			<td><center>".$data1[$i+19]."</center></td>
			<td><center>".$data1[$i+20]."</center></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td><center>".$data1[$i+20]."</center></td>
			<td><center>".$data1[$i+21]."</center></td>
			<td><center>".$data1[$i+22]."</center></td>
			<td><center>".$data1[$i+23]."</center></td>
			<td><center>".$data1[$i+24]."</center></td>
			<td><center>".$data1[$i+25]."</center></td>
			<td><center>".$data1[$i+26]."</center></td>
			<td><center>".$data1[$i+27]."</center></td>
			<td><center>".$data1[$i+28]."</center></td>
			<td><center>".$data1[$i+29]."</center></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td><center>".$data1[$i+29]."</center></td>
			<td><center>".$data1[$i+30]."</center></td>
			<td><center>".$data1[$i+31]."</center></td>
			<td><center>".$data1[$i+32]."</center></td>
			<td><center>".$data1[$i+33]."</center></td>
			<td><center>".$data1[$i+34]."</center></td>
			<td><center>".$data1[$i+35]."</center></td>
			<td><center>".$data1[$i+36]."</center></td>
			<td><center>".$data1[$i+37]."</center></td>
			<td><center>".$data1[$i+38]."</center></td>
			</tr>
			";
		}
		$i++;
	}
//}
?>
</table>

<form method="POST" action="index.php">
<br><input type="submit" name="index" value="Main Page">
</form>

</body>
</html>