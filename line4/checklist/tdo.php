<html>
<head>
	<title>Checklist</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<form method="POST" action="DatabaseTabelInputLine4TDO.php">

<table border = 1 width = 1100>
<?php 
	include "koneksi.php";
	
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
		
	$i=1;
	while($i<=28)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 1 OS</td>
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
			<td>TDO Fan 2 OS</td>
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
		elseif($i==3){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 3 OS</td>
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
		elseif($i==4){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 4 OS</td>
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
		elseif($i==5){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 5 OS</td>
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
		elseif($i==6){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 6 OS</td>
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
		elseif($i==7){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 7 OS</td>
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
		elseif($i==8){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 8 OS</td>
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
		elseif($i==9){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 9 OS</td>
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
		elseif($i==10){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 10 OS</td>
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
		elseif($i==11){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 11 OS</td>
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
		elseif($i==12){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 12 OS</td>
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
		elseif($i==13){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Air Shower Fan 13 OS</td>
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
		elseif($i==14){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 1 DS</td>
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
		elseif($i==15){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 2 DS</td>
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
		elseif($i==16){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 3 DS</td>
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
		elseif($i==17){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 4 DS</td>
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
		elseif($i==18){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 5 DS</td>
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
		elseif($i==19){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 6 DS</td>
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
		elseif($i==20){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 7 DS</td>
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
		elseif($i==21){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 8 DS</td>
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
		elseif($i==22){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 9 DS</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==23){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 10 DS</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==24){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 11 DS</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==25){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan 12 DS</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==26){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Air Shower Fan 13 DS</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==27){
			echo "
			<tr>
			<td>$i</td>
			<td>DC Motor TDO-Drive</td>
			<td><center><input type='number' class='inp' step='any' name='VMDE[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDEA[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='VMNDER[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='TempM[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusR[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusS[$i]' size='3' style='border:none'></td>
			<td><center><input type='number' class='inp' step='any' name='ArusT[$i]' size='3' style='border:none'></td>
			<td><center><input type='text' class='inp' name='Ket[$i]' style='border:none'></td>
			</tr>";
		}elseif($i==28){
			echo "
			<tr>
			<td>$i</td>
			<td>&nbsp;AC&nbsp;Motor&nbsp;Cooling&nbsp;TDO&nbsp;-&nbsp;Drive&nbsp;</td>
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
<input type="reset" name="reset" value="Reset" class="res">
</form>
<br><br><br><br>
</body>
</html>