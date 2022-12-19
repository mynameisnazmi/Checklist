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
	
	$insert = mysql_query("UPDATE form_checklist_line_6_airsys SET 
				
				Fan_Cool_Exh_Top_VMDE = '$vmde[$j]',
				Fan_Cool_Exh_Top_VMNDEA = '$vmndea[$j]',
				Fan_Cool_Exh_Top_VMNDER = '$vmnder[$j]',
				Fan_Cool_Exh_Top_TempM = '$tempm[$j]',
				Fan_Cool_Exh_Top_ArusR = '$arusr[$j]',
				Fan_Cool_Exh_Top_ArusS = '$aruss[$j]',
				Fan_Cool_Exh_Top_ArusT = '$arust[$j]',
				Fan_Cool_Exh_Top_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_airsys SET
				Fan_Cool_Exh_Top1_VMDE = '$vmde[$j]',
				Fan_Cool_Exh_Top1_VMNDEA = '$vmndea[$j]',
				Fan_Cool_Exh_Top1_VMNDER = '$vmnder[$j]',
				Fan_Cool_Exh_Top1_TempM = '$tempm[$j]',
				Fan_Cool_Exh_Top1_ArusR = '$arusr[$j]',
				Fan_Cool_Exh_Top1_ArusS = '$aruss[$j]',
				Fan_Cool_Exh_Top1_ArusT = '$arust[$j]',
				Fan_Cool_Exh_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_airsys SET
				Airing_Fan1_VMDE = '$vmde[$j]',
				Airing_Fan1_VMNDEA = '$vmndea[$j]',
				Airing_Fan1_VMNDER = '$vmnder[$j]',
				Airing_Fan1_TempM = '$tempm[$j]',
				Airing_Fan1_ArusR = '$arusr[$j]',
				Airing_Fan1_ArusS = '$aruss[$j]',
				Airing_Fan1_ArusT = '$arust[$j]',
				Airing_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_airsys SET
				Airing_Supply_Fan1_VMDE = '$vmde[$j]',
				Airing_Supply_Fan1_VMNDEA = '$vmndea[$j]',
				Airing_Supply_Fan1_VMNDER = '$vmnder[$j]',
				Airing_Supply_Fan1_TempM = '$tempm[$j]',
				Airing_Supply_Fan1_ArusR = '$arusr[$j]',
				Airing_Supply_Fan1_ArusS = '$aruss[$j]',
				Airing_Supply_Fan1_ArusT = '$arust[$j]',
				Airing_Supply_Fan1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_airsys SET
				Airing_Fan_Exh_Neu_VMDE = '$vmde[$j]',
				Airing_Fan_Exh_Neu_VMNDEA = '$vmndea[$j]',
				Airing_Fan_Exh_Neu_VMNDER = '$vmnder[$j]',
				Airing_Fan_Exh_Neu_TempM = '$tempm[$j]',
				Airing_Fan_Exh_Neu_ArusR = '$arusr[$j]',
				Airing_Fan_Exh_Neu_ArusS = '$aruss[$j]',
				Airing_Fan_Exh_Neu_ArusT = '$arust[$j]',
				Airing_Fan_Exh_Neu_Ket = '$ket[$j]' 
				 WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 Airing System Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktobigsiloline6.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>

