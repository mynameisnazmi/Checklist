<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_bigsilo( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('1','Big Bag Blowing Station Fan 1 (+SR13=211N1-M010)')");
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('2','Big Bag Rotary Valve 1 (+SR13=211O1-M024)')");
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('3','Silo Blowing Station Fan 1 (+SR13=211N1-M110)')");
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('4','Rotary Valve 1 (+SR13=211T1-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('5','Rotary Valve 2 (+SR13=211T1-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_bigsilo` VALUES('6','Rotary Valve 3 (+SR13=211T1-M164)')");
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