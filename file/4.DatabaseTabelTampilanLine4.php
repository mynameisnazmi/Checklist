<?php
//if(isset($_POST['webtabel'])){
//echo "<br>Proses Benar</br>";
include '4.koneksi.php';

//$tanggal = date('d-m-Y');

$tabel = 'CREATE TABLE form_line_4( '.
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
	$insert =mysql_query("INSERT INTO `form_line_4` VALUES('1','EX DOSING-1')");
	$insert =mysql_query("INSERT INTO `form_line_4` VALUES('2','EX Blower Transfer Material')");
	$insert =mysql_query("INSERT INTO `form_line_4` VALUES('3','Material Dosing Unit (MDU Mixer)')");
	$insert =mysql_query("INSERT INTO `form_line_4` VALUES('4','Blower Transfer Material')");
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