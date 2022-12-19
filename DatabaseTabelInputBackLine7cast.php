<?php
$j=1;
if(isset($_POST['submit'])){
	//echo "<br>Proses Benar</br>";
	include 'koneksi.php';
	session_start();
	$date = date('Y-m-d');
	$nama=$_SESSION['nama'];
	$vmde=$_POST['VMDE'];
	$vmndea=$_POST['VMNDEA'];
	$vmnder=$_POST['VMNDER'];
	$tempm=$_POST['TempM'];
	$arusr=$_POST['ArusR'];
	$aruss=$_POST['ArusS'];
	$arust=$_POST['ArusT'];
	$ket=$_POST['Ket'];
	
	$insert = mysql_query("UPDATE form_checklist_line_7_casting SET 

				Fan_Water_Removal_VMDE = '$vmde[$j]',
				Fan_Water_Removal_VMNDEA = '$vmndea[$j]',
				Fan_Water_Removal_VMNDER = '$vmnder[$j]',
				Fan_Water_Removal_TempM = '$tempm[$j]',
				Fan_Water_Removal_ArusR = '$arusr[$j]',
				Fan_Water_Removal_ArusS = '$aruss[$j]',
				Fan_Water_Removal_ArusT = '$arust[$j]',
				Fan_Water_Removal_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_casting SET
				Casting_Unit_System_VMDE = '$vmde[$j]',
				Casting_Unit_System_VMNDEA = '$vmndea[$j]',
				Casting_Unit_System_VMNDER = '$vmnder[$j]',
				Casting_Unit_System_TempM = '$tempm[$j]',
				Casting_Unit_System_ArusR = '$arusr[$j]',
				Casting_Unit_System_ArusS = '$aruss[$j]',
				Casting_Unit_System_ArusT = '$arust[$j]',
				Casting_Unit_System_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_casting SET
				Pump_Chill_Roll_VMDE = '$vmde[$j]',
				Pump_Chill_Roll_VMNDEA = '$vmndea[$j]',
				Pump_Chill_Roll_VMNDER = '$vmnder[$j]',
				Pump_Chill_Roll_TempM = '$tempm[$j]',
				Pump_Chill_Roll_ArusR = '$arusr[$j]',
				Pump_Chill_Roll_ArusS = '$aruss[$j]',
				Pump_Chill_Roll_ArusT = '$arust[$j]',
				Pump_Chill_Roll_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_casting SET
				Pump_Water_Bath_VMDE = '$vmde[$j]',
				Pump_Water_Bath_VMNDEA = '$vmndea[$j]',
				Pump_Water_Bath_VMNDER = '$vmnder[$j]',
				Pump_Water_Bath_TempM = '$tempm[$j]',
				Pump_Water_Bath_ArusR = '$arusr[$j]',
				Pump_Water_Bath_ArusS = '$aruss[$j]',
				Pump_Water_Bath_ArusT = '$arust[$j]',
				Pump_Water_Bath_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_casting SET
				Motor_Air_Knife_VMDE = '$vmde[$j]',
				Motor_Air_Knife_VMNDEA = '$vmndea[$j]',
				Motor_Air_Knife_VMNDER = '$vmnder[$j]',
				Motor_Air_Knife_TempM = '$tempm[$j]',
				Motor_Air_Knife_ArusR = '$arusr[$j]',
				Motor_Air_Knife_ArusS = '$aruss[$j]',
				Motor_Air_Knife_ArusT = '$arust[$j]',
				Motor_Air_Knife_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_casting SET
				Die_Bolt_Cooling_Fan_VMDE = '$vmde[$j]',
				Die_Bolt_Cooling_Fan_VMNDEA = '$vmndea[$j]',
				Die_Bolt_Cooling_Fan_VMNDER = '$vmnder[$j]',
				Die_Bolt_Cooling_Fan_TempM = '$tempm[$j]',
				Die_Bolt_Cooling_Fan_ArusR = '$arusr[$j]',
				Die_Bolt_Cooling_Fan_ArusS = '$aruss[$j]',
				Die_Bolt_Cooling_Fan_ArusT = '$arust[$j]',
				Die_Bolt_Cooling_Fan_Ket = '$ket[$j]'	

				
				WHERE Tanggal = '$date';");
	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 Casting Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktomextline7.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>



				