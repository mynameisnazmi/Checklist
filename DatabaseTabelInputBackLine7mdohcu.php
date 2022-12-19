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
	
	$insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET 
				HCU_Preheat1_VMDE = '$vmde[$j]',
				HCU_Preheat1_VMNDEA = '$vmndea[$j]',
				HCU_Preheat1_VMNDER = '$vmnder[$j]',
				HCU_Preheat1_TempM = '$tempm[$j]',
				HCU_Preheat1_ArusR = '$arusr[$j]',
				HCU_Preheat1_ArusS = '$aruss[$j]',
				HCU_Preheat1_ArusT = '$arust[$j]',
				HCU_Preheat1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat2_VMDE = '$vmde[$j]',
				HCU_Preheat2_VMNDEA = '$vmndea[$j]',
				HCU_Preheat2_VMNDER = '$vmnder[$j]',
				HCU_Preheat2_TempM = '$tempm[$j]',
				HCU_Preheat2_ArusR = '$arusr[$j]',
				HCU_Preheat2_ArusS = '$aruss[$j]',
				HCU_Preheat2_ArusT = '$arust[$j]',
				HCU_Preheat2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat3_VMDE = '$vmde[$j]',
				HCU_Preheat3_VMNDEA = '$vmndea[$j]',
				HCU_Preheat3_VMNDER = '$vmnder[$j]',
				HCU_Preheat3_TempM = '$tempm[$j]',
				HCU_Preheat3_ArusR = '$arusr[$j]',
				HCU_Preheat3_ArusS = '$aruss[$j]',
				HCU_Preheat3_ArusT = '$arust[$j]',
				HCU_Preheat3_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat4_VMDE = '$vmde[$j]',
				HCU_Preheat4_VMNDEA = '$vmndea[$j]',
				HCU_Preheat4_VMNDER = '$vmnder[$j]',
				HCU_Preheat4_TempM = '$tempm[$j]',
				HCU_Preheat4_ArusR = '$arusr[$j]',
				HCU_Preheat4_ArusS = '$aruss[$j]',
				HCU_Preheat4_ArusT = '$arust[$j]',
				HCU_Preheat4_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat5_VMDE = '$vmde[$j]',
				HCU_Preheat5_VMNDEA = '$vmndea[$j]',
				HCU_Preheat5_VMNDER = '$vmnder[$j]',
				HCU_Preheat5_TempM = '$tempm[$j]',
				HCU_Preheat5_ArusR = '$arusr[$j]',
				HCU_Preheat5_ArusS = '$aruss[$j]',
				HCU_Preheat5_ArusT = '$arust[$j]',
				HCU_Preheat5_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat6_VMDE = '$vmde[$j]',
				HCU_Preheat6_VMNDEA = '$vmndea[$j]',
				HCU_Preheat6_VMNDER = '$vmnder[$j]',
				HCU_Preheat6_TempM = '$tempm[$j]',
				HCU_Preheat6_ArusR = '$arusr[$j]',
				HCU_Preheat6_ArusS = '$aruss[$j]',
				HCU_Preheat6_ArusT = '$arust[$j]',
				HCU_Preheat6_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat7_VMDE = '$vmde[$j]',
				HCU_Preheat7_VMNDEA = '$vmndea[$j]',
				HCU_Preheat7_VMNDER = '$vmnder[$j]',
				HCU_Preheat7_TempM = '$tempm[$j]',
				HCU_Preheat7_ArusR = '$arusr[$j]',
				HCU_Preheat7_ArusS = '$aruss[$j]',
				HCU_Preheat7_ArusT = '$arust[$j]',
				HCU_Preheat7_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat8_VMDE = '$vmde[$j]',
				HCU_Preheat8_VMNDEA = '$vmndea[$j]',
				HCU_Preheat8_VMNDER = '$vmnder[$j]',
				HCU_Preheat8_TempM = '$tempm[$j]',
				HCU_Preheat8_ArusR = '$arusr[$j]',
				HCU_Preheat8_ArusS = '$aruss[$j]',
				HCU_Preheat8_ArusT = '$arust[$j]',
				HCU_Preheat8_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Preheat9_VMDE = '$vmde[$j]',
				HCU_Preheat9_VMNDEA = '$vmndea[$j]',
				HCU_Preheat9_VMNDER = '$vmnder[$j]',
				HCU_Preheat9_TempM = '$tempm[$j]',
				HCU_Preheat9_ArusR = '$arusr[$j]',
				HCU_Preheat9_ArusS = '$aruss[$j]',
				HCU_Preheat9_ArusT = '$arust[$j]',
				HCU_Preheat9_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing1_VMDE = '$vmde[$j]',
				HCU_Drawing1_VMNDEA = '$vmndea[$j]',
				HCU_Drawing1_VMNDER = '$vmnder[$j]',
				HCU_Drawing1_TempM = '$tempm[$j]',
				HCU_Drawing1_ArusR = '$arusr[$j]',
				HCU_Drawing1_ArusS = '$aruss[$j]',
				HCU_Drawing1_ArusT = '$arust[$j]',
				HCU_Drawing1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing2_VMDE = '$vmde[$j]',
				HCU_Drawing2_VMNDEA = '$vmndea[$j]',
				HCU_Drawing2_VMNDER = '$vmnder[$j]',
				HCU_Drawing2_TempM = '$tempm[$j]',
				HCU_Drawing2_ArusR = '$arusr[$j]',
				HCU_Drawing2_ArusS = '$aruss[$j]',
				HCU_Drawing2_ArusT = '$arust[$j]',
				HCU_Drawing2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing3_VMDE = '$vmde[$j]',
				HCU_Drawing3_VMNDEA = '$vmndea[$j]',
				HCU_Drawing3_VMNDER = '$vmnder[$j]',
				HCU_Drawing3_TempM = '$tempm[$j]',
				HCU_Drawing3_ArusR = '$arusr[$j]',
				HCU_Drawing3_ArusS = '$aruss[$j]',
				HCU_Drawing3_ArusT = '$arust[$j]',
				HCU_Drawing3_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing4_VMDE = '$vmde[$j]',
				HCU_Drawing4_VMNDEA = '$vmndea[$j]',
				HCU_Drawing4_VMNDER = '$vmnder[$j]',
				HCU_Drawing4_TempM = '$tempm[$j]',
				HCU_Drawing4_ArusR = '$arusr[$j]',
				HCU_Drawing4_ArusS = '$aruss[$j]',
				HCU_Drawing4_ArusT = '$arust[$j]',
				HCU_Drawing4_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing5_VMDE = '$vmde[$j]',
				HCU_Drawing5_VMNDEA = '$vmndea[$j]',
				HCU_Drawing5_VMNDER = '$vmnder[$j]',
				HCU_Drawing5_TempM = '$tempm[$j]',
				HCU_Drawing5_ArusR = '$arusr[$j]',
				HCU_Drawing5_ArusS = '$aruss[$j]',
				HCU_Drawing5_ArusT = '$arust[$j]',
				HCU_Drawing5_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Drawing6_VMDE = '$vmde[$j]',
				HCU_Drawing6_VMNDEA = '$vmndea[$j]',
				HCU_Drawing6_VMNDER = '$vmnder[$j]',
				HCU_Drawing6_TempM = '$tempm[$j]',
				HCU_Drawing6_ArusR = '$arusr[$j]',
				HCU_Drawing6_ArusS = '$aruss[$j]',
				HCU_Drawing6_ArusT = '$arust[$j]',
				HCU_Drawing6_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Annealing1_VMDE = '$vmde[$j]',
				HCU_Annealing1_VMNDEA = '$vmndea[$j]',
				HCU_Annealing1_VMNDER = '$vmnder[$j]',
				HCU_Annealing1_TempM = '$tempm[$j]',
				HCU_Annealing1_ArusR = '$arusr[$j]',
				HCU_Annealing1_ArusS = '$aruss[$j]',
				HCU_Annealing1_ArusT = '$arust[$j]',
				HCU_Annealing1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_7_mdohcu SET
				HCU_Annealing2_VMDE = '$vmde[$j]',
				HCU_Annealing2_VMNDEA = '$vmndea[$j]',
				HCU_Annealing2_VMNDER = '$vmnder[$j]',
				HCU_Annealing2_TempM = '$tempm[$j]',
				HCU_Annealing2_ArusR = '$arusr[$j]',
				HCU_Annealing2_ArusS = '$aruss[$j]',
				HCU_Annealing2_ArusT = '$arust[$j]',
				HCU_Annealing2_Ket = '$ket[$j]' 	
				
				WHERE Tanggal = '$date';");
	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 MDO HCU Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		header("Location: ../checklist/ConfirmL7.php");
	}						
}	
else{
	echo "Proses Salah";
}
?>
				
