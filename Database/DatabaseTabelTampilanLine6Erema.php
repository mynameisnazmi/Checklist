<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_Erema( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_Erema` VALUES('1','Motor Extruder')");
	$insert =mysql_query("INSERT INTO `form_line_6_Erema` VALUES('2','Motor Compactor')");
	$insert =mysql_query("INSERT INTO `form_line_6_Erema` VALUES('3','TF. Regran')");
	if($insert){
		echo "<br>Format Tabel Berhasil Dibuat</br>";
	}
	else {
		echo "<br>Format Tabel Gagal Dibuat</br>";
	}
}
else
{
	echo "<br>Tabel Gagal Dibuat</br>";
}
?>