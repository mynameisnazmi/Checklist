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
	
	$insert6 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek6','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert5 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek5','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert4 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek4','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert3 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek3','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert2 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek2','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert1 = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES('$cek1','',
			'','','','','','','','',
			'','','','','','','','',
			'','','','','','','','')
			");
	$insert = mysql_query("INSERT INTO form_checklist_line_6_biggrinder VALUES
	('$tanggal','$nama',
	'$vmde[0]','$vmndea[0]','$vmnder[0]','$tempm[0]','$arusr[0]','$aruss[0]','$arust[0]','$ket[0]',
	'$vmde[1]','$vmndea[1]','$vmnder[1]','$tempm[1]','$arusr[1]','$aruss[1]','$arust[1]','$ket[1]',
	'$vmde[2]','$vmndea[2]','$vmnder[2]','$tempm[2]','$arusr[2]','$aruss[2]','$arust[2]','$ket[2]')
	");
	if(!$insert){
	echo "<h1><script>alert('Form Checklist Line 6 Erema ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {echo "<h1><script>alert('Form Checklist Line 6 Berhasil Disimpan');</script></h1>";
		  echo "<h2><script>alert('Data Dapat Dilihat di Menu Review Tabel');
		  		alert('Anda Akan Dialihkan ke Menu Edit & Confirmation');
				location.href='ConfirmL6.php';</script></h2>";
	}						
}	
else{
	echo "Proses Salah";
}
?>