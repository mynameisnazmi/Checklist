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
	
	$insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Bigbag_Blow_Stat_Fan1_VMDE = '$vmde[$j]',
				Bigbag_Blow_Stat_Fan1_VMNDEA = '$vmndea[$j]',
				Bigbag_Blow_Stat_Fan1_VMNDER = '$vmnder[$j]',
				Bigbag_Blow_Stat_Fan1_TempM = '$tempm[$j]',
				Bigbag_Blow_Stat_Fan1_ArusR = '$arusr[$j]',
				Bigbag_Blow_Stat_Fan1_ArusS = '$aruss[$j]',
				Bigbag_Blow_Stat_Fan1_ArusT = '$arust[$j]',
				Bigbag_Blow_Stat_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Bigbag_Rotary_Valve1_VMDE = '$vmde[$j]',
				Bigbag_Rotary_Valve1_VMNDEA = '$vmndea[$j]',
				Bigbag_Rotary_Valve1_VMNDER = '$vmnder[$j]',
				Bigbag_Rotary_Valve1_TempM = '$tempm[$j]',
				Bigbag_Rotary_Valve1_ArusR = '$arusr[$j]',
				Bigbag_Rotary_Valve1_ArusS = '$aruss[$j]',
				Bigbag_Rotary_Valve1_ArusT = '$arust[$j]',
				Bigbag_Rotary_Valve1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Silo_Blow_Stat_Fan1_VMDE = '$vmde[$j]',
				Silo_Blow_Stat_Fan1_VMNDEA = '$vmndea[$j]',
				Silo_Blow_Stat_Fan1_VMNDER = '$vmnder[$j]',
				Silo_Blow_Stat_Fan1_TempM = '$tempm[$j]',
				Silo_Blow_Stat_Fan1_ArusR = '$arusr[$j]',
				Silo_Blow_Stat_Fan1_ArusS = '$aruss[$j]',
				Silo_Blow_Stat_Fan1_ArusT = '$arust[$j]',
				Silo_Blow_Stat_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Rotary_Valve1_VMDE = '$vmde[$j]',
				Rotary_Valve1_VMNDEA = '$vmndea[$j]',
				Rotary_Valve1_VMNDER = '$vmnder[$j]',
				Rotary_Valve1_TempM = '$tempm[$j]',
				Rotary_Valve1_ArusR = '$arusr[$j]',
				Rotary_Valve1_ArusS = '$aruss[$j]',
				Rotary_Valve1_ArusT = '$arust[$j]',
				Rotary_Valve1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Rotary_Valve2_VMDE = '$vmde[$j]',
				Rotary_Valve2_VMNDEA = '$vmndea[$j]',
				Rotary_Valve2_VMNDER = '$vmnder[$j]',
				Rotary_Valve2_TempM = '$tempm[$j]',
				Rotary_Valve2_ArusR = '$arusr[$j]',
				Rotary_Valve2_ArusS = '$aruss[$j]',
				Rotary_Valve2_ArusT = '$arust[$j]',
				Rotary_Valve2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_bigsilo SET
				Rotary_Valve3_VMDE = '$vmde[$j]',
				Rotary_Valve3_VMNDEA = '$vmndea[$j]',
				Rotary_Valve3_VMNDER = '$vmnder[$j]',
				Rotary_Valve3_TempM = '$tempm[$j]',
				Rotary_Valve3_ArusR = '$arusr[$j]',
				Rotary_Valve3_ArusS = '$aruss[$j]',
				Rotary_Valve3_ArusT = '$arust[$j]',
				Rotary_Valve3_Ket = '$ket[$j]' 


				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 Big Silo Storage Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktomextline6.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>

				