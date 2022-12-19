<html>
<head>
	<title>Checklist</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<form method="POST" action="DatabaseTabelInputLine5Ext.php">

<table border = 1 width = 1100>
<?php 
	include "koneksi.php";
	
	echo'
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Extruder</th>
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
	while($i<=71)
	{
		if($i==1){
			echo "
			<tr>
			<td>$i</td>
			<td>DC Melt-Ext</td>
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
			<td>Melt-Ext Fan Cooling Blower</td>
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
			<td>DC Metering-Ext</td>
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
			<td>Metering-Ext Fan Cooling Blower</td>
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
			<td>DC Co-Ext1</td>
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
			<td>DC Co-Ext1 Cooling Blower Fan</td>
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
			<td>DC Co-Ext2</td>
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
			<td>DC Co-Ext2 Cooling Blower Fan</td>
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
			<td>Melt-Ext Gear Box Oil Pump</td>
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
			<td>Melt-Ext Gear Box Oil Pump 1</td>
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
			<td>&nbsp;Melt&nbsp;-&nbsp;Ext&nbsp;Filter&nbsp;Preheating&nbsp;Oil&nbsp;Pump&nbsp;</td>
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
			<td>Metering-Ext Gear Box Oil Pump</td>
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
			<td>Co-Ext 1 Auto Loader</td>
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
			<td>Co-Ext 2 Auto Loader</td>
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
			<td>EA Panel Temperature</td>
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
			<td>&nbsp;Cascade&nbsp;-&nbsp;Ext&nbsp;Panel&nbsp;Temperature&nbsp;</td>
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
			<td>Control Room Temperature</td>
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
			<td>Melt-Ext Heater Zone 1</td>
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
			<td>Melt-Ext Heater Zone 2</td>
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
			<td>Melt-Ext Heater Zone 3</td>
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
			<td>Melt-Ext Heater Zone 4</td>
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
			<td>Melt-Ext Heater Zone 5</td>
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
			<td>Melt-Ext Heater Zone 6</td>
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
			<td>Melt-Ext Heater Zone 7</td>
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
			<td>Melt-Ext Heater Zone 8</td>
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
			<td>Melt-Ext Heater Zone 9</td>
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
			<td>Metering-Ext Heater Zone 1</td>
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
			<td>Metering-Ext Heater Zone 2</td>
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
			<td>Metering-Ext Heater Zone 3</td>
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
			<td>Metering-Ext Heater Zone 4</td>
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
		elseif($i==31){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 5</td>
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
		elseif($i==32){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 6</td>
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
		elseif($i==33){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 7</td>
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
		elseif($i==34){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 8</td>
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
		elseif($i==35){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 9</td>
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
		elseif($i==36){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 10</td>
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
		elseif($i==37){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 11</td>
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
		elseif($i==38){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 12</td>
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
		elseif($i==39){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 13</td>
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
		elseif($i==40){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 14</td>
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
		elseif($i==41){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 15</td>
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
		elseif($i==42){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 16</td>
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
		elseif($i==43){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 17</td>
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
		elseif($i==44){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 18</td>
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
		elseif($i==45){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 19</td>
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
		elseif($i==46){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 20</td>
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
		elseif($i==47){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 21</td>
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
		elseif($i==48){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 22</td>
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
		elseif($i==49){
			echo "
			<tr>
			<td>$i</td>
			<td>Metering-Ext Heater Zone 23</td>
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
		elseif($i==50){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 1</td>
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
		elseif($i==51){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 2</td>
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
		elseif($i==52){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 3</td>
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
		elseif($i==53){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 4</td>
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
		elseif($i==54){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 5</td>
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
		elseif($i==55){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 6</td>
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
		elseif($i==56){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 7</td>
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
		elseif($i==57){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 8</td>
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
		elseif($i==58){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 9</td>
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
		elseif($i==59){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 10</td>
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
		elseif($i==60){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext1 Heater Zone 11</td>
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
		elseif($i==61){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 1</td>
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
		elseif($i==62){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 2</td>
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
		elseif($i==63){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 3</td>
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
		elseif($i==64){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 4</td>
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
		elseif($i==65){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 5</td>
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
		elseif($i==66){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 6</td>
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
		elseif($i==67){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 7</td>
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
		elseif($i==68){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 8</td>
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
		elseif($i==69){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 9</td>
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
		elseif($i==70){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 10</td>
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
		elseif($i==71){
			echo "
			<tr>
			<td>$i</td>
			<td>Co-Ext2 Heater Zone 11</td>
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
<form method="POST" action="Webtabelbacktoressilline5.php" >
<input type="submit" name="back" class="res" value="Back"></form>
<br><br><br><br>
</body>
</html>