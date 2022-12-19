<html>
<head>
	<title>Checklist</title>
</head>
<body>
<style type="text/css">
	.inp{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 20px;
		padding: 2px;
		text-align: center;
		color: #0000cc;
	}
	.submit{
		position: absolute;
		left: 2200px;
		font-size: 30px;
		text-decoration: none;
		transition-duration: 0.1s;
		background-color: white;
		color: black;
		border: 3px solid #007399;
		text-align: center;
		border-radius: 15px;
		float: center;
		padding: 4px;
		width: 200px;
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
		font-size: 30px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 4px;
		width: 200px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.res:hover{
		border: #ff1a1a solid;
		background-color: #ff1a1a;
		color: white;
	}
</style>
<style>
	table{
		font-family: Arial, Helvetica, sans-serif;
		border: outset 4px black;

	}

	table th{
		font-size: 18px;
		padding: 3px;
		margin: auto;
		border: 1px solid  ;

	}
	table td {
		font-size: 15px;
		padding: 5px;
		text-align: center;
		margin: auto;
		border: 1px solid  ;
	}
</style>

<form method="POST" action="DatabaseTabelInputLine6TDO.php">

<table width="1000" >
<?php 
	include "koneksi.php";
	
	echo'
	<tr>
	<th rowspan="2">&nbsp;No&nbsp;</th>
	<th rowspan="2">Motor TDO</th>
	<th colspan="3">Vibrasi Motor</th>
	<th rowspan="2">Temperature</th>
	<th colspan="3">Arus</th>
	<th rowspan="2">Keterangan</th>
		<tr>
		<th>DE</th>
		<th>NDE&nbsp;Axial</th>
		<th>NDE&nbsp;Radial</th>
		<th>R</th>
		<th>S</th>
		<th>T</th>
		</tr>
	</tr>';
		
	$i=0;
	$query = mysql_query("SELECT * FROM `form_line_6_TDO`");
	while($data = mysql_fetch_array($query))
	{
		echo "
		<tr>
		<td>".$data['No']."</td>
		<td>".$data['Bagian']."</td>
		<td><center><input class='inp' type='number' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='TempM[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='number' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
		<td><center><input class='inp' type='text' name='Ket[$i]' style='border:none'></td>
		</tr>";
		$i++;
	}
	mysql_close($link);
?>
</table>

<br>
<br>
<br>
<br>
<input class="submit" type="submit" name="submit" value="Next >>">
<input class="res" type="reset" name="reset" value="Reset">
<br>
<br>
<br>
</form>

</body>
</html>