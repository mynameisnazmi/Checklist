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
	
	$insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				
				Main_Ext_VMDE = '$vmde[$j]',
				Main_Ext_VMNDEA = '$vmndea[$j]',
				Main_Ext_VMNDER = '$vmnder[$j]',
				Main_Ext_TempM = '$tempm[$j]',
				Main_Ext_ArusR = '$arusr[$j]',
				Main_Ext_ArusS = '$aruss[$j]',
				Main_Ext_ArusT = '$arust[$j]',
				Main_Ext_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Melt_Pump_MExt_VMDE = '$vmde[$j]',
				Melt_Pump_MExt_VMNDEA = '$vmndea[$j]',
				Melt_Pump_MExt_VMNDER = '$vmnder[$j]',
				Melt_Pump_MExt_TempM = '$tempm[$j]',
				Melt_Pump_MExt_ArusR = '$arusr[$j]',
				Melt_Pump_MExt_ArusS = '$aruss[$j]',
				Melt_Pump_MExt_ArusT = '$arust[$j]',
				Melt_Pump_MExt_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Co_Ext1_VMDE = '$vmde[$j]',
				Co_Ext1_VMNDEA = '$vmndea[$j]',
				Co_Ext1_VMNDER = '$vmnder[$j]',
				Co_Ext1_TempM = '$tempm[$j]',
				Co_Ext1_ArusR = '$arusr[$j]',
				Co_Ext1_ArusS = '$aruss[$j]',
				Co_Ext1_ArusT = '$arust[$j]',
				Co_Ext1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Co_Ext2_VMDE = '$vmde[$j]',
				Co_Ext2_VMNDEA = '$vmndea[$j]',
				Co_Ext2_VMNDER = '$vmnder[$j]',
				Co_Ext2_TempM = '$tempm[$j]',
				Co_Ext2_ArusR = '$arusr[$j]',
				Co_Ext2_ArusS = '$aruss[$j]',
				Co_Ext2_ArusT = '$arust[$j]',
				Co_Ext2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Melt_Pump_Co_Ext2_VMDE = '$vmde[$j]',
				Melt_Pump_Co_Ext2_VMNDEA = '$vmndea[$j]',
				Melt_Pump_Co_Ext2_VMNDER = '$vmnder[$j]',
				Melt_Pump_Co_Ext2_TempM = '$tempm[$j]',
				Melt_Pump_Co_Ext2_ArusR = '$arusr[$j]',
				Melt_Pump_Co_Ext2_ArusS = '$aruss[$j]',
				Melt_Pump_Co_Ext2_ArusT = '$arust[$j]',
				Melt_Pump_Co_Ext2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Co_Ext3_VMDE = '$vmde[$j]',
				Co_Ext3_VMNDEA = '$vmndea[$j]',
				Co_Ext3_VMNDER = '$vmnder[$j]',
				Co_Ext3_TempM = '$tempm[$j]',
				Co_Ext3_ArusR = '$arusr[$j]',
				Co_Ext3_ArusS = '$aruss[$j]',
				Co_Ext3_ArusT = '$arust[$j]',
				Co_Ext3_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Melt_Pump_Co_Ext3_VMDE = '$vmde[$j]',
				Melt_Pump_Co_Ext3_VMNDEA = '$vmndea[$j]',
				Melt_Pump_Co_Ext3_VMNDER = '$vmnder[$j]',
				Melt_Pump_Co_Ext3_TempM = '$tempm[$j]',
				Melt_Pump_Co_Ext3_ArusR = '$arusr[$j]',
				Melt_Pump_Co_Ext3_ArusS = '$aruss[$j]',
				Melt_Pump_Co_Ext3_ArusT = '$arust[$j]',
				Melt_Pump_Co_Ext3_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_ext SET
				Co_Ext4_VMDE = '$vmde[$j]',
				Co_Ext4_VMNDEA = '$vmndea[$j]',
				Co_Ext4_VMNDER = '$vmnder[$j]',
				Co_Ext4_TempM = '$tempm[$j]',
				Co_Ext4_ArusR = '$arusr[$j]',
				Co_Ext4_ArusS = '$aruss[$j]',
				Co_Ext4_ArusT = '$arust[$j]',
				Co_Ext4_Ket = '$ket[$j]' 
				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 MElt Extrduder Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href=MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktotdoairingline7.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>




		