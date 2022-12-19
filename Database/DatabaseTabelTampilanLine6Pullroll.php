<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_pullroll( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('1','Pump Heating Cooling Unit Inlet (+SG82=374U1-M010)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('2','Pump Flame Treatment Top (+SG82=374U1-M110)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('3','Pump Corona Bottom (+SG82=374U1-M210)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('4','Pump Corona Top (+SG82=374U1-M310)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('5','Pump Heating Cooling Unit Outlet (+SG82=374U1-M410)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('6','Fan Corona Exhaust Top (+SG81=376N1-M111)')");
	$insert =mysql_query("INSERT INTO `form_line_6_pullroll` VALUES('7','Fan Corona Exhaust Bottom (+SG81=376N1-M011)')");
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