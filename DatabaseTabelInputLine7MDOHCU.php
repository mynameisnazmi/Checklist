<?php
if(isset($_POST['submit'])){
	//echo "<br>Proses Benar</br>";
	include 'koneksi.php';
	session_start();

	$nama=$_SESSION["nama"];
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
	
	$insert6 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek6','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");
	$insert5 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek5','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");	
	$insert4 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek4','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");
	$insert3 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek3','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");									
	$insert2 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek2','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");				
	$insert1 = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES('$cek1','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");
	$insert = mysql_query("INSERT INTO form_checklist_line_7_MDOHCU VALUES
	('$tanggal','$nama',
	'$vmde[1]','$vmndea[1]','$vmnder[1]','$tempm[1]','$arusr[1]','$aruss[1]','$arust[1]','$ket[1]',
	'$vmde[2]','$vmndea[2]','$vmnder[2]','$tempm[2]','$arusr[2]','$aruss[2]','$arust[2]','$ket[2]',
	'$vmde[3]','$vmndea[3]','$vmnder[3]','$tempm[3]','$arusr[3]','$aruss[3]','$arust[3]','$ket[3]',
	'$vmde[4]','$vmndea[4]','$vmnder[4]','$tempm[4]','$arusr[4]','$aruss[4]','$arust[4]','$ket[4]',
	'$vmde[5]','$vmndea[5]','$vmnder[5]','$tempm[5]','$arusr[5]','$aruss[5]','$arust[5]','$ket[5]',
	'$vmde[6]','$vmndea[6]','$vmnder[6]','$tempm[6]','$arusr[6]','$aruss[6]','$arust[6]','$ket[6]',
	'$vmde[7]','$vmndea[7]','$vmnder[7]','$tempm[7]','$arusr[7]','$aruss[7]','$arust[7]','$ket[7]',
	'$vmde[8]','$vmndea[8]','$vmnder[8]','$tempm[8]','$arusr[8]','$aruss[8]','$arust[8]','$ket[8]',
	'$vmde[9]','$vmndea[9]','$vmnder[9]','$tempm[9]','$arusr[9]','$aruss[9]','$arust[9]','$ket[9]',
	'$vmde[10]','$vmndea[10]','$vmnder[10]','$tempm[10]','$arusr[10]','$aruss[10]','$arust[10]','$ket[10]',
	'$vmde[11]','$vmndea[11]','$vmnder[11]','$tempm[11]','$arusr[11]','$aruss[11]','$arust[11]','$ket[11]',
	'$vmde[12]','$vmndea[12]','$vmnder[12]','$tempm[12]','$arusr[12]','$aruss[12]','$arust[12]','$ket[12]',
	'$vmde[13]','$vmndea[13]','$vmnder[13]','$tempm[13]','$arusr[13]','$aruss[13]','$arust[13]','$ket[13]',
	'$vmde[14]','$vmndea[14]','$vmnder[14]','$tempm[14]','$arusr[14]','$aruss[14]','$arust[14]','$ket[14]',
	'$vmde[15]','$vmndea[15]','$vmnder[15]','$tempm[15]','$arusr[15]','$aruss[15]','$arust[15]','$ket[15]',
	'$vmde[16]','$vmndea[16]','$vmnder[16]','$tempm[16]','$arusr[16]','$aruss[16]','$arust[16]','$ket[16]',
	'$vmde[17]','$vmndea[17]','$vmnder[17]','$tempm[17]','$arusr[17]','$aruss[17]','$arust[17]','$ket[17]')
	");
	if(!$insert){
	echo "<h1><script>alert('Form Checklist Line 7 HCU MDO ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		echo "<h1><script>alert('Form Checklist Line 7 Berhasil Disimpan');</script></h1>";
		echo "<h2><script>alert('Data Dapat Dilihat di Menu Review Tabel');
		  		alert('Anda Akan Dialihkan ke Menu Edit & Confirmation');
				location.href='ConfirmL7.php';</script></h2>";
	}
}
else{
	echo "Proses Salah";
}