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
	
	$insert = mysql_query("UPDATE form_checklist_line_7_tdoairing SET
		
				Exhaust_Fan1_VMDE = '$vmde[$j]',
				Exhaust_Fan1_VMNDEA = '$vmndea[$j]',
				Exhaust_Fan1_VMNDER = '$vmnder[$j]',
				Exhaust_Fan1_TempM = '$tempm[$j]',
				Exhaust_Fan1_ArusR = '$arusr[$j]',
				Exhaust_Fan1_ArusS = '$aruss[$j]',
				Exhaust_Fan1_ArusT = '$arust[$j]',
				Exhaust_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_tdoairing SET
				Exhaust_Fan2_VMDE = '$vmde[$j]',
				Exhaust_Fan2_VMNDEA = '$vmndea[$j]',
				Exhaust_Fan2_VMNDER = '$vmnder[$j]',
				Exhaust_Fan2_TempM = '$tempm[$j]',
				Exhaust_Fan2_ArusR = '$arusr[$j]',
				Exhaust_Fan2_ArusS = '$aruss[$j]',
				Exhaust_Fan2_ArusT = '$arust[$j]',
				Exhaust_Fan2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_tdoairing SET
				Exhaust_Fan_Neu_Top_VMDE = '$vmde[$j]',
				Exhaust_Fan_Neu_Top_VMNDEA = '$vmndea[$j]',
				Exhaust_Fan_Neu_Top_VMNDER = '$vmnder[$j]',
				Exhaust_Fan_Neu_Top_TempM = '$tempm[$j]',
				Exhaust_Fan_Neu_Top_ArusR = '$arusr[$j]',
				Exhaust_Fan_Neu_Top_ArusS = '$aruss[$j]',
				Exhaust_Fan_Neu_Top_ArusT = '$arust[$j]',
				Exhaust_Fan_Neu_Top_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_tdoairing SET
				Exhaust_Fan_Neu_Bot_VMDE = '$vmde[$j]',
				Exhaust_Fan_Neu_Bot_VMNDEA = '$vmndea[$j]',
				Exhaust_Fan_Neu_Bot_VMNDER = '$vmnder[$j]',
				Exhaust_Fan_Neu_Bot_TempM = '$tempm[$j]',
				Exhaust_Fan_Neu_Bot_ArusR = '$arusr[$j]',
				Exhaust_Fan_Neu_Bot_ArusS = '$aruss[$j]',
				Exhaust_Fan_Neu_Bot_ArusT = '$arust[$j]',
				Exhaust_Fan_Neu_Bot_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_tdoairing SET
				LPG_Exhaust_Fan_VMDE = '$vmde[$j]',
				LPG_Exhaust_Fan_VMNDEA = '$vmndea[$j]',
				LPG_Exhaust_Fan_VMNDER = '$vmnder[$j]',
				LPG_Exhaust_Fan_TempM = '$tempm[$j]',
				LPG_Exhaust_Fan_ArusR = '$arusr[$j]',
				LPG_Exhaust_Fan_ArusS = '$aruss[$j]',
				LPG_Exhaust_Fan_ArusT = '$arust[$j]',
				LPG_Exhaust_Fan_Ket = '$ket[$j]' 


				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 Airing System Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktotdoline7.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>
