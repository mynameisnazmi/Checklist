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
	
	$insert = mysql_query("UPDATE form_checklist_line_7_mdo SET

				Drawing_1_VMDE = '$vmde[$j]',
				Drawing_1_VMNDEA = '$vmndea[$j]',
				Drawing_1_VMNDER = '$vmnder[$j]',
				Drawing_1_TempM = '$tempm[$j]',
				Drawing_1_ArusR = '$arusr[$j]',
				Drawing_1_ArusS = '$aruss[$j]',
				Drawing_1_ArusT = '$arust[$j]',
				Drawing_1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdo SET
				Drawing_2_VMDE = '$vmde[$j]',
				Drawing_2_VMNDEA = '$vmndea[$j]',
				Drawing_2_VMNDER = '$vmnder[$j]',
				Drawing_2_TempM = '$tempm[$j]',
				Drawing_2_ArusR = '$arusr[$j]',
				Drawing_2_ArusS = '$aruss[$j]',
				Drawing_2_ArusT = '$arust[$j]',
				Drawing_2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdo SET
				Drawing_3_VMDE = '$vmde[$j]',
				Drawing_3_VMNDEA = '$vmndea[$j]',
				Drawing_3_VMNDER = '$vmnder[$j]',
				Drawing_3_TempM = '$tempm[$j]',
				Drawing_3_ArusR = '$arusr[$j]',
				Drawing_3_ArusS = '$aruss[$j]',
				Drawing_3_ArusT = '$arust[$j]',
				Drawing_3_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdo SET
				Drawing_4_VMDE = '$vmde[$j]',
				Drawing_4_VMNDEA = '$vmndea[$j]',
				Drawing_4_VMNDER = '$vmnder[$j]',
				Drawing_4TempM = '$tempm[$j]',
				Drawing_4_ArusR = '$arusr[$j]',
				Drawing_4_ArusS = '$aruss[$j]',
				Drawing_4_ArusT = '$arust[$j]',
				Drawing_4_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdo SET
				Drawing_5_VMDE = '$vmde[$j]',
				Drawing_5_VMNDEA = '$vmndea[$j]',
				Drawing_5_VMNDER = '$vmnder[$j]',
				Drawing_5_TempM = '$tempm[$j]',
				Drawing_5_ArusR = '$arusr[$j]',
				Drawing_5_ArusS = '$aruss[$j]',
				Drawing_5_ArusT = '$arust[$j]',
				Drawing_5_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdo SET
				Drawing_6_VMDE = '$vmde[$j]',
				Drawing_6_VMNDEA = '$vmndea[$j]',
				Drawing_6_VMNDER = '$vmnder[$j]',
				Drawing_6_Fan_TempM = '$tempm[$j]',
				Drawing_6_ArusR = '$arusr[$j]',
				Drawing_6_ArusS = '$aruss[$j]',
				Drawing_6_ArusT = '$arust[$j]',
				Drawing_6_Ket = '$ket[$j]' WHERE Tanggal = '$date';");
	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 MDO Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktomdohculine7.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>
				