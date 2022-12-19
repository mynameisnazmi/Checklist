<?php
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
	
	$insert = mysql_query("UPDATE form_checklist_line_6_mdo SET 	
				Drawing_1_VMDE  = '$vmde[1]',
				Drawing_1_VMNDEA  = '$vmndea[1]',
				Drawing_1_VMNDER  = '$vmnder[1]',
				Drawing_1_TempM  = '$tempm[1]',
				Drawing_1_ArusR  = '$arusr[1]',
				Drawing_1_ArusS  = '$aruss[1]',
				Drawing_1_ArusT  = '$arust[1]',
				Drawing_1_Ket  = '$ket[1]',

				Drawing_2_VMDE  = '$vmde[2]',
				Drawing_2_VMNDEA  = '$vmndea[2]',
				Drawing_2_VMNDER  = '$vmnder[2]',
				Drawing_2_TempM  = '$tempm[2]',
				Drawing_2_ArusR  = '$arusr[2]',
				Drawing_2_ArusS  = '$aruss[2]',
				Drawing_2_ArusT  = '$arust[2]',
				Drawing_2_Ket  = '$ket[2]',

				Drawing_3_VMDE  = '$vmde[3]',
				Drawing_3_VMNDEA  = '$vmndea[3]',
				Drawing_3_VMNDER  = '$vmnder[3]',
				Drawing_3_TempM  = '$tempm[3]',
				Drawing_3_ArusR  = '$arusr[3]',
				Drawing_3_ArusS  = '$aruss[3]',
				Drawing_3_ArusT  = '$arust[3]',
				Drawing_3_Ket  = '$ket[3]',

				Drawing_4_VMDE  = '$vmde[4]',
				Drawing_4_VMNDEA  = '$vmndea[4]',
				Drawing_4_VMNDER  = '$vmnder[4]',
				Drawing_4_TempM  = '$tempm[4]',
				Drawing_4_ArusR  = '$arusr[4]',
				Drawing_4_ArusS  = '$aruss[4]',
				Drawing_4_ArusT  = '$arust[4]',
				Drawing_4_Ket  = '$ket[4]',

				Drawing_5_VMDE  = '$vmde[5]',
				Drawing_5_VMNDEA  = '$vmndea[5]',
				Drawing_5_VMNDER  = '$vmnder[5]',
				Drawing_5_TempM  = '$tempm[5]',
				Drawing_5_ArusR  = '$arusr[5]',
				Drawing_5_ArusS  = '$aruss[5]',
				Drawing_5_ArusT  = '$arust[5]',
				Drawing_5_Ket  = '$ket[5]',

				Drawing_6_VMDE  = '$vmde[6]',
				Drawing_6_VMNDEA  = '$vmndea[6]',
				Drawing_6_VMNDER  = '$vmnder[6]',
				Drawing_6_TempM  = '$tempm[6]',
				Drawing_6_ArusR  = '$arusr[6]',
				Drawing_6_ArusS  = '$aruss[6]',
				Drawing_6_ArusT  = '$arust[6]',
				Drawing_6_Ket  = '$ket[6]'	
				WHERE Tanggal = '$date';");
	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 MDO Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktotdoline6.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>
				
				