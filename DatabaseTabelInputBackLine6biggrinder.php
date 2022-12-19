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
	
	$insert = mysql_query("UPDATE form_checklist_line_6_biggrinder SET

				Motor_Grinder_VMDE = '$vmde[$j]',
				Motor_Grinder_VMNDEA = '$vmndea[$j]',
				Motor_Grinder_VMNDER = '$vmnder[$j]',
				Motor_Grinder_TempM = '$tempm[$j]',
				Motor_Grinder_ArusR = '$arusr[$j]',
				Motor_Grinder_ArusS = '$aruss[$j]',
				Motor_Grinder_ArusT = '$arust[$j]',
				Motor_Grinder_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_biggrinder SET
				Conveying_Fan1_VMDE = '$vmde[$j]',
				Conveying_Fan1_VMNDEA = '$vmndea[$j]',
				Conveying_Fan1_VMNDER = '$vmnder[$j]',
				Conveying_Fan1_TempM = '$tempm[$j]',
				Conveying_Fan1_ArusR = '$arusr[$j]',
				Conveying_Fan1_ArusS = '$aruss[$j]',
				Conveying_Fan1_ArusT = '$arust[$j]',
				Conveying_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_biggrinder SET
				Conveying_Fan2_VMDE = '$vmde[$j]',
				Conveying_Fan2_VMNDEA = '$vmndea[$j]',
				Conveying_Fan2_VMNDER = '$vmnder[$j]',
				Conveying_Fan2_TempM = '$tempm[$j]',
				Conveying_Fan2_ArusR = '$arusr[$j]',
				Conveying_Fan2_ArusS = '$aruss[$j]',
				Conveying_Fan2_ArusT = '$arust[$j]',
				Conveying_Fan2_Ket = '$ket[$j]'

				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 Big Grinder Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href=MainPageTab.php';</script></h2>";
	}
	else { header("Location: ../checklist/ConfirmL6.php");
	}						
}	
else{
	echo "Proses Salah";
}
?>