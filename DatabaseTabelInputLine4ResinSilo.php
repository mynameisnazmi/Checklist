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
	
	$insert6 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek6','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert5 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek5','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert4 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek4','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert3 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek3','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert2 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek2','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert1 = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES('$cek1','','','',
	'','','','','','','','',
	'','','','','','','','')
	");
	$insert = mysql_query("INSERT INTO form_checklist_line_4_resinsilo VALUES
	('$tanggal','$nama','','',
	'$vmde[1]','$vmndea[1]','$vmnder[1]','$tempm[1]','$arusr[1]','$aruss[1]','$arust[1]','$ket[1]',
	'$vmde[2]','$vmndea[2]','$vmnder[2]','$tempm[2]','$arusr[2]','$aruss[2]','$arust[2]','$ket[2]')
	");
	if(!$insert){
echo "<h1><script>alert('Form Checklist Line 4 Resin Silo Tanggal ($tgl) Gagal Disimpan');</script></h1>";
echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelLine4Ext.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>