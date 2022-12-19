<?php
	include '4.koneksi.php';
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = $_SESSION["tanggal"];
	$status = $_POST['Check'];
	$tanggalcek = date('Y-m-d');
	$insert = mysql_query("UPDATE `form_checklist_line_4` SET `Status` = '$status', `Tanggal Status` = '$tanggalcek' WHERE `form_checklist_line_4`.`Tanggal` = '$tanggal';");
	if(!$insert){
		echo "<h1>Review Checklist Gagal Di Check</h1>";
	}
	else {
		echo "<h1>Review Checklist Berhasil Di Check</h1>";
	}
?>
<form method="POST" action="4.MainPageTab.php">
<br><input type="submit" name="mainpagetab" value="Main Page">
</form>