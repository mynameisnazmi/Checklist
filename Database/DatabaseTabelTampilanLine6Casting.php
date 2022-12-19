<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_casting( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('1','Fan Water Removal Chill Roll (+SG21=321N3-M011)')");
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('2','Casting Unit System Water Removal Fan (+SG21=321N3-M511)')");
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('3','Pump Chill Roll (+SG21=321U1-M010)')");
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('4','Pump Water Bath (+SG21=321U1-M110)')");
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('5','Motor Air Knife (+SG21=321N1-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_casting` VALUES('6','Die Bolt Cooling Fan (+SH32=292Q1-M020)')");
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