<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_Biggrinder( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_Biggrinder` VALUES('1','Motor Grinder')");
	$insert =mysql_query("INSERT INTO `form_line_6_Biggrinder` VALUES('2','Conveying Fan 1')");
	$insert =mysql_query("INSERT INTO `form_line_6_Biggrinder` VALUES('3','Conveying Fan 2')");
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