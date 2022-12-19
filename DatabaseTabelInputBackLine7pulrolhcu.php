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
	
	$insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET 
			
				Pump_Heat_Cool_UI_VMDE = '$vmde[$j]',
				Pump_Heat_Cool_UI_VMNDEA = '$vmndea[$j]',
				Pump_Heat_Cool_UI_VMNDER = '$vmnder[$j]',
				Pump_Heat_Cool_UI_TempM = '$tempm[$j]',
				Pump_Heat_Cool_UI_ArusR = '$arusr[$j]',
				Pump_Heat_Cool_UI_ArusS = '$aruss[$j]',
				Pump_Heat_Cool_UI_ArusT = '$arust[$j]',
				Pump_Heat_Cool_UI_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Pump_Flame_Treat_Top_VMDE = '$vmde[$j]',
				Pump_Flame_Treat_Top_VMNDEA = '$vmndea[$j]',
				Pump_Flame_Treat_Top_VMNDER = '$vmnder[$j]',
				Pump_Flame_Treat_Top_TempM = '$tempm[$j]',
				Pump_Flame_Treat_Top_ArusR = '$arusr[$j]',
				Pump_Flame_Treat_Top_ArusS = '$aruss[$j]',
				Pump_Flame_Treat_Top_ArusT = '$arust[$j]',
				Pump_Flame_Treat_Top_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Pump_Corona_Bot_VMDE = '$vmde[$j]',
				Pump_Corona_Bot_VMNDEA = '$vmndea[$j]',
				Pump_Corona_Bot_VMNDER = '$vmnder[$j]',
				Pump_Corona_Bot_TempM = '$tempm[$j]',
				Pump_Corona_Bot_ArusR = '$arusr[$j]',
				Pump_Corona_Bot_ArusS = '$aruss[$j]',
				Pump_Corona_Bot_ArusT = '$arust[$j]',
				Pump_Corona_Bot_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Pump_Corona_Top_VMDE = '$vmde[$j]',
				Pump_Corona_Top_VMNDEA = '$vmndea[$j]',
				Pump_Corona_Top_VMNDER = '$vmnder[$j]',
				Pump_Corona_Top_TempM = '$tempm[$j]',
				Pump_Corona_Top_ArusR = '$arusr[$j]',
				Pump_Corona_Top_ArusS = '$aruss[$j]',
				Pump_Corona_Top_ArusT = '$arust[$j]',
				Pump_Corona_Top_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Pump_Heat_Cool_UO_VMDE = '$vmde[$j]',
				Pump_Heat_Cool_UO_VMNDEA = '$vmndea[$j]',
				Pump_Heat_Cool_UO_VMNDER = '$vmnder[$j]',
				Pump_Heat_Cool_UO_TempM = '$tempm[$j]',
				Pump_Heat_Cool_UO_ArusR = '$arusr[$j]',
				Pump_Heat_Cool_UO_ArusS = '$aruss[$j]',
				Pump_Heat_Cool_UO_ArusT = '$arust[$j]',
				Pump_Heat_Cool_UO_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Fan_Corona_Exh_Top_VMDE = '$vmde[$j]',
				Fan_Corona_Exh_Top_VMNDEA = '$vmndea[$j]',
				Fan_Corona_Exh_Top_VMNDER = '$vmnder[$j]',
				Fan_Corona_Exh_Top_TempM = '$tempm[$j]',
				Fan_Corona_Exh_Top_ArusR = '$arusr[$j]',
				Fan_Corona_Exh_Top_ArusS = '$aruss[$j]',
				Fan_Corona_Exh_Top_ArusT = '$arust[$j]',
				Fan_Corona_Exh_Top_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_pullroll SET
				Fan_Corona_Exh_Bot_VMDE = '$vmde[$j]',
				Fan_Corona_Exh_Bot_VMNDEA = '$vmndea[$j]',
				Fan_Corona_Exh_Bot_VMNDER = '$vmnder[$j]',
				Fan_Corona_Exh_Bot_TempM = '$tempm[$j]',
				Fan_Corona_Exh_Bot_ArusR = '$arusr[$j]',
				Fan_Corona_Exh_Bot_ArusS = '$aruss[$j]',
				Fan_Corona_Exh_Bot_ArusT = '$arust[$j]',
				Fan_Corona_Exh_Bot_Ket = '$ket[$j]' 
			WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 Pull Roll HCU Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktobigsiloline7.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>



