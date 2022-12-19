<?php
//if(isset($_POST['webtabel'])){
//echo "<br>Proses Benar</br>";
include '4.koneksi.php';

//$tanggal = date('d-m-Y');

$tabel = 'CREATE TABLE form_line_2( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(50) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist motor 1');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	//echo "<br>Tabel Berhasil Dibuat</br>";
	//$query = ;
	//$i=0;
	//while($array=mysql_fetch_array($query)){
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('1','Transfer Material Silo')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('2','Dosing PP1')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('3','Dosing AD')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('4','Dosing Regran')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('5','Rotary Valve')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('6','Autoloader Dosing PP1')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('7','Autoloader Dosing Add')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('8','Autoloader Dosing Regran')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('9','Mixer')");
	$insert =mysql_query("INSERT INTO `form_line_2` VALUES('10','Mixer Silo')");
	//$i++;
	//}
	if($insert){
	echo "<br>Format Tabel Berhasil Dibuat</br>";
	//include 'Webtampilan2.php';
	}
	else {
	echo "<br>Format Tabel Gagal Dibuat</br>";
	}
}
else
{
echo "<br>Tabel Gagal Dibuat</br>";
}


//}
//else{
//echo "Proses Salah";
//}

?>