<html>
<head>
	<title>Checklist</title>
</head>
<body>
<style type="text/css">
	.head{
		font-family: Arial, Helvetica, sans-serif;
		padding-left: 20px;
		width: 500px;

	}
	.inp{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 20px;
		padding: 5px;
		text-align: center;
		color: #0000cc;
	}
	.submit{
		position: absolute;
		left: 2200;
		font-size: 20px;
		text-decoration: none;
		transition-duration: 0.1s;
		background-color: white;
		color: black;
		border: 3px solid #007399;
		text-align: center;
		border-radius: 15px;
		float: center;
		padding: 4px;
		width: 150px;
		display: inline-block;
		cursor: pointer;
	}
	.submit:hover{
		background-color: #007399;
		color: white;
	}
	.res {
		position: absolute;
		left: 230px;
		font-size: 20px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 4px;
		width: 150px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.res:hover{
		border: #ff1a1a solid;
		background-color: #ff1a1a;
		color: white;
	}
	.main{
		position: absolute;
		left: 230px;
		font-size: 20px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 4px;
		width: 150px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.main:hover{
		border: #e6b800 solid;
		background-color: #e6b800;
		color: white;
	}

</style>
<style>
	table{
		font-family: Arial, Helvetica, sans-serif;
		border: outset 4px black;
border-collapse: collapse 2px;
	}

	table th{
		font-size: 18px;
		margin: auto;
		border: 1px solid  ;
		padding: 3px;

	}
	table td {
		font-size: 15px;
		padding: 5px;
		text-align: center;
		margin: auto;
		border: 1px solid  ;
	}
</style>
<br>
<form method="POST" action="DatabaseTabelInputLine7MDO.php">

<table border = 1 width = 1250>
<?php 
	include "koneksi.php";
	
	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Motor MDO</th>
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
	while($i<=7)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>&nbsp;Drawing&nbsp;1&nbsp;(+SR13=331M5&nbsp;-&nbsp;M015)&nbsp;</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==2){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 2 (+SR13=331M6-M015)</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==3){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 3 (+SR13=331M7-M015)</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==4){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 4 (+SR13=331M8-M015)</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==5){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 5 (+SR13=331M9-M015)</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		elseif($i==6){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 6 (+SR13=331MA-M015)</td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='number' step='any' type='text' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input class='inp' type='text' type='text' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}
		$i++;
	}
	mysql_close($link);
?>
</table>
<br>
<br><input class="submit" type="submit" name="submit" value="Submit >>">
<input class="res" type="reset" name="reset" value="Reset">
</form>
<br><br><br><br>
</body>
</html>