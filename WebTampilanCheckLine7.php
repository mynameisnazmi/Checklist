<?php
	include 'koneksi.php';
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = $_SESSION["tanggal"];
	$status = $_POST['Check'];
	$tanggalcek = date('Y-m-d');
	$insert = mysql_query("UPDATE `form_checklist_line_7_casting` SET `Status` = '$status', `Tanggal_Status` = '$tanggalcek' WHERE `form_checklist_line_7_casting`.`Tanggal` = '$tanggal';");
	if(!$insert){
		echo "<script>alert('Review Checklist Gagal Di Check');
			location.href='MainPageTab.php';</script>";
	}
	else {
		echo "<script>alert('Review Checklist Berhasil Di Check');
			location.href='MainPageTab.php';</script>";
	}
?>