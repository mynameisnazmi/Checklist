<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_Airsys( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_Airsys` VALUES('1','Fan Cooling Exhaust Top (+SG64=347N1-M434)')");
	$insert =mysql_query("INSERT INTO `form_line_6_Airsys` VALUES('2','Fan Cooling Exhaust Top 1 (+SG63=347N1-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_Airsys` VALUES('3','Airing Fan 1 (+SG64=347N1-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_Airsys` VALUES('4','Airing Supply Fan 1 (+SG63=347N1-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_Airsys` VALUES('5','Airing Fan Exhaust Neutral (+SG63=347N1-M214)')");
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