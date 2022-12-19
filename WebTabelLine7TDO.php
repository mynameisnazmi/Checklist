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
<form method="POST" action="DatabaseTabelInputLine7TDO.php">

<table border = 1 width = 1250>
<?php 
	include "koneksi.php";
	
	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Motor TDO</th>
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
	while($i<=70)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>Line Drive Outlet Left (+SD42=341M5-M015)</td>
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
			<td>Cooling Drive Outlet Left (+SD42=341M5-M050)</td>
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
			<td>Line Drive Outlet Right (+SD43=341M6-M015)</td>
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
			<td>&nbsp;Cooling&nbsp;Drive&nbsp;Outlet&nbsp;Right&nbsp;(+SD43=341M6&nbsp;-&nbsp;M050)&nbsp;</td>
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
			<td>Preheating 1 Fan 1 (+SG33=343N1-M014)</td>
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
			<td>Preheating 1 Fan 2 (+SG33=343N1-M024)')</td>
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
		elseif($i==7){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 1 Fan 3 (+SG33=343N1-M034)</td>
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
		elseif($i==8){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 2 Fan 1 (+SG33=343N1-M114)</td>
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
		elseif($i==9){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 2 Fan 2 (+SG33=343N1-M124)</td>
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
		elseif($i==10){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 2 Fan 3 (+SG33=343N1-M134)</td>
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
		elseif($i==11){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 3 Fan 1 (+SG33=343N1-M214)</td>
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
		elseif($i==12){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 3 Fan 2 (+SG33=343N1-M224)</td>
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
		elseif($i==13){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 3 Fan 3 (+SG33=343N1-M234)</td>
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
		elseif($i==14){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 4 Fan 1 (+SG34=343N1-M314)</td>
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
		elseif($i==15){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 4 Fan 2 (+SG34=343N1-M324)</td>
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
		elseif($i==16){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 4 Fan 3 (+SG34=343N1-M334)</td>
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
		elseif($i==17){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 5 Fan 1 (+SG34=343N1-M414)</td>
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
		elseif($i==18){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 5 Fan 2 (+SG34=343N1-M424)</td>
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
		elseif($i==19){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 5 Fan 3 (+SG34=343N1-M434)</td>
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
		elseif($i==20){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 6 Fan 1 (+SG34=343N1-M514)</td>
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
		elseif($i==21){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 6 Fan 2 (+SG34=343N1-M524)</td>
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
		elseif($i==22){
			echo "
			<tr>
			<td>$i</td>
			<td>Preheating 6 Fan 3 (+SG34=343N1-M534)</td>
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
		elseif($i==23){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 1 Fan 1 Top (+SG41=343N4-M014)</td>
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
		elseif($i==24){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 1 Fan 2 Top (+SG41=343N4-M214)</td>
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
		elseif($i==25){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)</td>
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
		elseif($i==26){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)</td>
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
		elseif($i==27){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 2 Fan 1 Top (+SG41=343N4-M414)</td>
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
		elseif($i==28){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 2 Fan 2 Top (+SG41=343N4-M614)</td>
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
		elseif($i==29){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)</td>
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
		elseif($i==30){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)</td>
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
		elseif($i==31){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 3 Fan 1 Top (+SG41=343N4-M814)</td>
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
		elseif($i==32){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 3 Fan 2 Top (+SG42=343M5-M014)</td>
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
		elseif($i==33){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)</td>
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
		elseif($i==34){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)</td>
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
		elseif($i==35){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 4 Fan 1 Top (+SG42=343M5-M214)</td>
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
		elseif($i==36){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 4 Fan 2 Top (+SG42=343M5-M414)</td>
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
		elseif($i==37){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)</td>
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
		elseif($i==38){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)</td>
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
		elseif($i==39){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 5 Fan 1 Top (+SG42=343M5-M614)</td>
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
		elseif($i==40){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 5 Fan 2 Top (+SG42=343M5-M814)/td>
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
		elseif($i==41){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)</td>
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
		elseif($i==42){
			echo "
			<tr>
			<td>$i</td>
			<td>Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)</td>
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
		elseif($i==43){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 1 Fan 1 Top (+SG52=343M7-M014)</td>
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
		elseif($i==44){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 1 Fan 2 Top (+SG52=343M7-M214)</td>
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
		elseif($i==45){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)</td>
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
		elseif($i==46){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)</td>
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
		elseif($i==47){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 2 Fan 1 Top (+SG52=343M7-M414)</td>
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
		elseif($i==48){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 2 Fan 2 Top (+SG52=343M7-M614)</td>
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
		elseif($i==49){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)</td>
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
		elseif($i==50){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)</td>
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
		elseif($i==51){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 3 Fan 1 Top (+SG52=343M7-M814)</td>
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
		elseif($i==52){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 3 Fan 2 Top (+SG53=343N8-M014)</td>
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
		elseif($i==53){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)</td>
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
		elseif($i==54){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)</td>
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
		elseif($i==55){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 4 Fan 1 Top (+SG53=343N8-M214)</td>
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
		elseif($i==56){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 4 Fan 2 Top (+SG53=343N8-M414)</td>
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
		elseif($i==57){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)</td>
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
		elseif($i==58){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)</td>
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
		elseif($i==59){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 5 Fan 1 Top (+SG53=343N8-M614)</td>
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
		elseif($i==60){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 5 Fan 2 Top (+SG53=343N8-M814)</td>
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
		elseif($i==61){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)</td>
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
		elseif($i==62){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)</td>
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
		elseif($i==63){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 6 Fan 1 Top (+SG53=343N9-M014)</td>
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
		elseif($i==64){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 6 Fan 2 Top (+SG53=343N9-M214)</td>
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
		elseif($i==65){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)</td>
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
		elseif($i==66){
			echo "
			<tr>
			<td>$i</td>
			<td>Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)</td>
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
		elseif($i==67){
			echo "
			<tr>
			<td>$i</td>
			<td>Film Edge Cooling Fan Left (+SG64=345N5-M014)</td>
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
		elseif($i==68){
			echo "
			<tr>
			<td>$i</td>
			<td>Film Edge Cooling Fan Right (+SG64=345N5-M114)</td>
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
		elseif($i==69){
			echo "
			<tr>
			<td>$i</td>
			<td>Edge Guide Fan Left (+SD41=341M1-M050)</td>
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
		elseif($i==70){
			echo "
			<tr>
			<td>$i</td>
			<td>Edge Guide Fan Right (+SD42=341M2-M050)</td>
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
<input type="reset" class="res" name="reset" value="Reset">
</form>
<br><br><br><br>
</body>
</html>