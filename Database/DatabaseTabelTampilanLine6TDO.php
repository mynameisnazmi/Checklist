<?php
include 'koneksi.php';

$tabel = 'CREATE TABLE form_line_6_TDO( '.
       'No INT NOT NULL AUTO_INCREMENT, '.
       'Bagian VARCHAR(100) NOT NULL, '.
       'primary key ( No ))';
 
mysql_select_db('checklist');
$buattabel = mysql_query( $tabel );
if($buattabel)
{
	$insert =mysql_query("INSERT INTO `form_line_6_MDO` VALUES('1','Line Drive Outlet Left (+SD41=341M1-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('2','Cooling Drive Outlet Left (+SD41=341M1-M050)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('3','Line Drive Outlet Right (+SD42=341M2-M015)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('4','Cooling Drive Outlet Right (+SD42=341M2-M050)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('5','Preheating 1 Fan 1 (+SG33=343N1-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('6','Preheating 1 Fan 2 (+SG33=343N1-M024)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('7','Preheating 1 Fan 3 (+SG33=343N1-M034)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('8','Preheating 2 Fan 1 (+SG33=343N1-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('9','Preheating 2 Fan 2 (+SG33=343N1-M124)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('10','Preheating 2 Fan 3 (+SG33=343N1-M134)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('11','Preheating 3 Fan 1 (+SG33=343N1-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('12','Preheating 3 Fan 2 (+SG33=343N1-M224)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('13','Preheating 3 Fan 3 (+SG33=343N1-M234)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('14','Preheating 4 Fan 1 (+SG34=343N1-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('15','Preheating 4 Fan 2 (+SG34=343N1-M324)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('16','Preheating 4 Fan 3 (+SG34=343N1-M334)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('17','Preheating 5 Fan 1 (+SG34=343N1-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('18','Preheating 5 Fan 2 (+SG34=343N1-M424)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('19','Preheating 5 Fan 3 (+SG34=343N1-M434)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('20','Preheating 6 Fan 1 (+SG34=343N1-M514)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('21','Preheating 6 Fan 2 (+SG34=343N1-M524)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('22','Preheating 6 Fan 3 (+SG34=343N1-M534)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('23','Drawing 1 Fan 1 Top (+SG41=343N4-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('24','Drawing 1 Fan 2 Top (+SG41=343N4-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('25','Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('26','Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('27','Drawing 2 Fan 1 Top (+SG41=343N4-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('28','Drawing 2 Fan 2 Top (+SG41=343N4-M614)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('29','Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('30','Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('31','Drawing 3 Fan 1 Top (+SG41=343N4-M814)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('32','Drawing 3 Fan 2 Top (+SG42=343M5-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('33','Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('34','Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('35','Drawing 4 Fan 1 Top (+SG42=343M5-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('36','Drawing 4 Fan 2 Top (+SG42=343M5-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('37','Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('38','Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('39','Drawing 5 Fan 1 Top (+SG42=343M5-M614)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('40','Drawing 5 Fan 2 Top (+SG42=343M5-M814)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('41','Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('42','Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('43','Annealing 1 Fan 1 Top (+SG52=343M7-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('44','Annealing 1 Fan 2 Top (+SG52=343M7-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('45','Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('46','Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('47','Annealing 2 Fan 1 Top (+SG52=343M7-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('48','Annealing 2 Fan 2 Top (+SG52=343M7-M614)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('49','Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('50','Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('51','Annealing 3 Fan 1 Top (+SG52=343M7-M814)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('52','Annealing 3 Fan 2 Top (+SG53=343N8-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('53','Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('54','Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('55','Annealing 4 Fan 1 Top (+SG53=343N8-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('56','Annealing 4 Fan 2 Top (+SG53=343N8-M414)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('57','Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('58','Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('59','Annealing 5 Fan 1 Top (+SG53=343N8-M614)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('60','Annealing 5 Fan 2 Top (+SG53=343N8-M814)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('61','Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('62','Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('63','Annealing 6 Fan 1 Top (+SG53=343N9-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('64','Annealing 6 Fan 2 Top (+SG53=343N9-M214)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('65','Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('66','Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('67','Film Edge Cooling Fan Left (+SG63=345N5-M014)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('68','Film Edge Cooling Fan Left (+SG63=345N5-M114)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('69','Edge Guide Fan Left (+SD24=341MA-M050)')");
	$insert =mysql_query("INSERT INTO `form_line_6_TDO` VALUES('70','Edge Guide Fan Left (+SD24=341MA-M250)')");
	
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