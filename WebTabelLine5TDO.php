<html>
<head>
	<title>Checklist</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<form method="POST" action="DatabaseTabelInputLine5TDO.php">

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
	while($i<=30)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Fan PH 1-1 DS</td>
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
			<td>TDO Fan PH 1-2 OS</td>
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
			<td>TDO Fan PH 2-1 DS</td>
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
			<td>TDO Fan PH 2-2 OS</td>
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
			<td>TDO Fan PH 2-3 OS</td>
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
			<td>TDO Fan PH 3-1 DS</td>
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
			<td>TDO Fan PH 3-2 OS</td>
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
			<td>TDO Fan PH 3-3 DS</td>
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
			<td>TDO Fan Drawing 1-1 DS</td>
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
			<td>TDO Fan Drawing 1-2 OS</td>
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
			<td>TDO Fan Drawing 2-1 DS</td>
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
			<td>TDO Fan Drawing 2-2 OS</td>
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
			<td>TDO Fan Drawing 3-1 DS</td>
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
			<td>TDO Fan Drawing 3-2 OS</td>
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
			<td>TDO Fan Drawing 4-1 DS</td>
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
			<td>TDO Fan Drawing 4-2 OS</td>
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
			<td>TDO Fan Annealing 1-1 DS</td>
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
			<td>TDO Fan Annealing 1-2 OS</td>
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
			<td>TDO Fan Annealing 2-1 DS</td>
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
			<td>TDO Fan Annealing 2-2 OS</td>
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
			<td>TDO Fan Annealing 3-1 DS</td>
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
			<td>TDO Fan Annealing 3-2 OS</td>
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
		elseif($i==23){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Air Shower 1 DS</td>
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
		elseif($i==24){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Air Shower 2 OS</td>
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
		elseif($i==25){
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
		}
		elseif($i==26){
			echo "
			<tr>
			<td>$i</td>
			<td>AC Motor Cooling TDO-Drive</td>
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
		elseif($i==27){
			echo "
			<tr>
			<td>$i</td>
			<td>Edge Guide-DS</td>
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
		elseif($i==28){
			echo "
			<tr>
			<td>$i</td>
			<td>Edge Guide-OS</td>
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
		elseif($i==29){
			echo "
			<tr>
			<td>$i</td>
			<td>TDO Bolt Lubrication Pump</td>
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
		elseif($i==30){
			echo "
			<tr>
			<td>$i</td>
			<td>&nbsp;TDO&nbsp;Chain&nbsp;Lubrication&nbsp;Pump&nbsp;</td>
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
<br><input type="submit" name="submit" value="Submit >>" class="submit">
<input type="reset" name="reset" value="Reset" class="res">
</form>
<br><br><br><br>
</body>
</html>