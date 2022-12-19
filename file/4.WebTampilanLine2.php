<html>
<body>
	<h1>Result Form Checklist Electrical Line 2</h1>
<table border = 1 width = 500>

<?php
include '4.koneksi.php';

//$review = $_POST['Review'];
//if($review == 'Tabel'){
	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$i=0;
	$query = mysql_query("SELECT * FROM `form_line_2`");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_2` WHERE Tanggal='$tahun-$bulan-$hari' ");
	if($query1=='0'){
		echo"Data Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}
	
	$data1 = mysql_fetch_row($query1);

	echo"<h3>Nama Pelaksana :  $data1[1]</h3>";

	echo"
		<tr>
		<th>No</th>
		<th>Bagian</th>
		<th>Kondisi</th>
		</tr>
	";

	while($data = mysql_fetch_row($query))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td>".$data1[$i+2]."</td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td>".$data1[$i+2]."</td>
			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td>".$data1[$i+2]."</td>
			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>".$data[0]."</td>
			<td>".$data[1]."</td>
			<td>".$data1[$i+2]."</td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		elseif($i==5){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		elseif($i==6){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		elseif($i==7){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		elseif($i==8){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		elseif($i==9){
		echo"
		<tr>
		<td>".$data[0]."</td>
		<td>".$data[1]."</td>
		<td>".$data1[$i+2]."</td>
		</tr>
		";
		}
		$i++;
	}
	/*$query1 = mysql_query("SELECT * FROM `form_checklist_line_2`");
	$data1 = mysql_fetch_row($query1);
	echo "
	<th>
	<tr>
	<td>".$data1[3]."</td>
	</tr>
	<tr>
	<td>".$data1[4]."</td>
	</tr>
	<tr>
	<td>".$data1[5]."</td>
	</tr>
	<tr>
	<td>".$data1[6]."</td>
	</tr>
	<tr>
	<td>".$data1[7]."</td>
	</tr>
	<tr>
	<td>".$data1[8]."</td>
	</tr>
	<tr>
	<td>".$data1[9]."</td>
	</tr>
	<tr>
	<td>".$data1[10]."</td>
	</tr>
	<tr>
	<td>".$data1[11]."</td>
	</tr>
	<tr>
	<td>".$data1[12]."</td>
	</tr>
	</th>";*/
//}
?>
</table>

<form method="POST" action="4.MainPageTab.php">
<br><input type="submit" name="mainpagetab" value="Main Page">
</form>

</body>
</html>