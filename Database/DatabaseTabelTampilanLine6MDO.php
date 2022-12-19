<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_MDO( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('1','Drawing 1 (+SD21=331M5-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('2','Drawing 2 (+SD21=331M6-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('3','Drawing 3 (+SD21=331M7-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('4','Drawing 4 (+SD21=331M8-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('5','Drawing 5 (+SD21=331M9-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('6','Drawing 6 (+SD21=331MA-M015)')");
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