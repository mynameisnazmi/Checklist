<?php
if(isset($_POST['submit'])){
	//echo "<br>Proses Benar</br>";
	include 'koneksi.php';
	session_start();
	
	$nama=$_SESSION['nama'];
	$vmde=$_POST['VMDE'];
	$vmndea=$_POST['VMNDEA'];
	$vmnder=$_POST['VMNDER'];
	$tempm=$_POST['TempM'];
	$arusr=$_POST['ArusR'];
	$aruss=$_POST['ArusS'];
	$arust=$_POST['ArusT'];
	$ket=$_POST['Ket'];
	
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = date('Y-m-d');
	$cek1 = date('Y-m-d', strtotime('-1 day'));
	$cek2 = date('Y-m-d', strtotime('-2 day'));
	$cek3 = date('Y-m-d', strtotime('-3 day'));
	$cek4 = date('Y-m-d', strtotime('-4 day'));
	$cek5 = date('Y-m-d', strtotime('-5 day'));
	$cek6 = date('Y-m-d', strtotime('-6 day'));
	
	$tgl = date('d-m-Y');
	
	$insert6 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek6','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert5 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek5','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert4 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek4','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert3 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek3','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert2 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek2','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert1 = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES('$cek1','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert = mysql_query("INSERT INTO form_checklist_line_7_MDO VALUES
	('$tanggal','$nama',
	'$vmde[1]','$vmndea[1]','$vmnder[1]','$tempm[1]','$arusr[1]','$aruss[1]','$arust[1]','$ket[1]',
	'$vmde[2]','$vmndea[2]','$vmnder[2]','$tempm[2]','$arusr[2]','$aruss[2]','$arust[2]','$ket[2]',
	'$vmde[3]','$vmndea[3]','$vmnder[3]','$tempm[3]','$arusr[3]','$aruss[3]','$arust[3]','$ket[3]',
	'$vmde[4]','$vmndea[4]','$vmnder[4]','$tempm[4]','$arusr[4]','$aruss[4]','$arust[4]','$ket[4]',
	'$vmde[5]','$vmndea[5]','$vmnder[5]','$tempm[5]','$arusr[5]','$aruss[5]','$arust[5]','$ket[5]',
	'$vmde[6]','$vmndea[6]','$vmnder[6]','$tempm[6]','$arusr[6]','$aruss[6]','$arust[6]','$ket[6]')
	");
	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 7 MDO ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelLine7MDOHCU.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>