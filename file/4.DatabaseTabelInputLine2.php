<?php
if(isset($_POST['submit'])){
//echo "<br>Proses Benar</br>";
include '4.koneksi.php';

$nama=$_POST['Nama'];
$kondisi=$_POST['condition'];
date_default_timezone_set("Asia/Jakarta");
$tanggal = date('Y-m-d');
$insert = mysql_query("INSERT INTO form_checklist_line_2 VALUES('$tanggal','$nama','$kondisi[0]','$kondisi[1]','$kondisi[2]','$kondisi[3]','$kondisi[4]','$kondisi[5]','$kondisi[6]','$kondisi[7]','$kondisi[8]','$kondisi[9]')");

$tgl = date('d-m-Y');
if($insert){
	echo "<h1>Form Checklist Line 2 ($tgl) Berhasil Disimpan</h1>";
	echo "<h3>Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama</h3>";
}
else {
	echo "<h1>Form Checklist Line 2 ($tgl) Gagal Disimpan</h1>";
	echo "<h3>Tidak Dapat Input Data Pada Tanggal Yang Sama</h3>";
}
}
else{
	echo "Proses Salah";
}
?>

<form method="POST" action="index.php">
<br><input type="submit" name="index" value="Main Page">
</form>