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
	
	$insert = mysql_query("UPDATE form_checklist_line_6_erema SET

				Motor_Ext_VMDE = '$vmde[$j]',
				Motor_Ext_VMNDEA = '$vmndea[$j]',
				Motor_Ext_VMNDER = '$vmnder[$j]',
				Motor_Ext_TempM = '$tempm[$j]',
				Motor_Ext_ArusR = '$arusr[$j]',
				Motor_Ext_ArusS = '$aruss[$j]',
				Motor_Ext_ArusT = '$arust[$j]',
				Motor_Ext_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_erema SET
				Motor_Compactor_VMDE = '$vmde[$j]',
				Motor_Compactor_VMNDEA = '$vmndea[$j]',
				Motor_Compactor_VMNDER = '$vmnder[$j]',
				Motor_Compactor_TempM = '$tempm[$j]',
				Motor_Compactor_ArusR = '$arusr[$j]',
				Motor_Compactor_ArusS = '$aruss[$j]',
				Motor_Compactor_ArusT = '$arust[$j]',
				Motor_Compactor_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_erema SET
				TF_Regran_VMDE = '$vmde[$j]',
				TF_Regran_VMNDEA = '$vmndea[$j]',
				TF_Regran_VMNDER = '$vmnder[$j]',
				TF_Regran_TempM = '$tempm[$j]',
				TF_Regran_ArusR = '$arusr[$j]',
				TF_Regran_ArusS = '$aruss[$j]',
				TF_Regran_ArusT = '$arust[$j]',
				TF_Regran_Ket = '$ket[$j]' 
				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 Erema Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href=MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktosmallgrinderline6.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>
