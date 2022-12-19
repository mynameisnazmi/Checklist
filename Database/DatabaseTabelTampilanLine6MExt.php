<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_Mext( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_Mext` VALUES('1','Main Extruder')");
	$insert =mysql_query("INSERT INTO `form_line_6_Mext` VALUES('2','Melt Pump')");
	$insert =mysql_query("INSERT INTO `form_line_6_Mext` VALUES('3','Co Extruder 1')");
	$insert =mysql_query("INSERT INTO `form_line_6_Mext` VALUES('4','Co Extruder 2')");
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