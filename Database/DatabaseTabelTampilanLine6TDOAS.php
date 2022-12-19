<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_TDOAS( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('1','Cooling 1 Fan 1 Top (+SG61=345N1-M021)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('2','Cooling 1 Fan 1 Top (+SG61=345N1-M023)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('3','Cooling 1 Fan 2 Top (+SG61=345N1-M071)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('4','Cooling 1 Fan 2 Top (+SG61=345N1-M073)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('5','Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('6','Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('7','Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('8','Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('9','Cooling 2 Fan 1 Top (+SG61=345N1-M221)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('10','Cooling 2 Fan 1 Top (+SG61=345N1-M223)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('11','Cooling 2 Fan 2 Top (+SG61=345N1-M271)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('12','Cooling 2 Fan 2 Top (+SG61=345N1-M273)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('13','Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('14','Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('15','Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('16','Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('17','Cooling 3 Fan 1 Top (+SG61=345N1-M421)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('18','Cooling 3 Fan 1 Top (+SG61=345N1-M423)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('19','Cooling 3 Fan 2 Top (+SG61=345N1-M471)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('20','Cooling 3 Fan 2 Top (+SG61=345N1-M473)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('21','Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('22','Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('23','Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('24','Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('25','Cooling 4 Fan 1 Top (+SG61=345N1-M621)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('26','Cooling 4 Fan 1 Top (+SG61=345N1-M623)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('27','Cooling 4 Fan 2 Top (+SG61=345N1-M671)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('28','Cooling 4 Fan 2 Top (+SG61=345N1-M673)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('29','Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('30','Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('31','Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('32','Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('33','Cooling 5 Fan 1 Top (+SG61=345N1-M821)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('34','Cooling 5 Fan 1 Top (+SG61=345N1-M823)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('35','Cooling 5 Fan 2 Top (+SG61=345N1-M871)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('36','Cooling 5 Fan 2 Top (+SG61=345N1-M873)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('37','Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('38','Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('39','Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDOAS` VALUES('40','Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)')");
	
	
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