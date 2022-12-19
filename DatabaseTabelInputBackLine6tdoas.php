<?php
$j=1;
if(isset($_POST['submit'])){
	//echo "<br>Proses Benar</br>";
	include 'koneksi.php';
	session_start();
	$date = date('Y-m-d');
	$nama=$_SESSION['nama'];
	$vmde=$_POST['VMDE'];
	$vmndea=$_POST['VMNDEA'];
	$vmnder=$_POST['VMNDER'];
	$tempm=$_POST['TempM'];
	$arusr=$_POST['ArusR'];
	$aruss=$_POST['ArusS'];
	$arust=$_POST['ArusT'];
	$ket=$_POST['Ket'];
	
	$insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET 
  				Cooling1_Fan1_Top1_VMDE = '$vmde[$j]',
				Cooling1_Fan1_Top1_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan1_Top1_VMNDER = '$vmnder[$j]',
				Cooling1_Fan1_Top1_TempM = '$tempm[$j]',
				Cooling1_Fan1_Top1_ArusR = '$arusr[$j]',
				Cooling1_Fan1_Top1_ArusS = '$aruss[$j]',
				Cooling1_Fan1_Top1_ArusT = '$arust[$j]',
				Cooling1_Fan1_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan1_Top2_VMDE = '$vmde[$j]',
				Cooling1_Fan1_Top2_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan1_Top2_VMNDER = '$vmnder[$j]',
				Cooling1_Fan1_Top2_TempM = '$tempm[$j]',
				Cooling1_Fan1_Top2_ArusR = '$arusr[$j]',
				Cooling1_Fan1_Top2_ArusS = '$aruss[$j]',
				Cooling1_Fan1_Top2_ArusT = '$arust[$j]',
				Cooling1_Fan1_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan2_Top1_VMDE = '$vmde[$j]',
				Cooling1_Fan2_Top1_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan2_Top1_VMNDER = '$vmnder[$j]',
				Cooling1_Fan2_Top1_TempM = '$tempm[$j]',
				Cooling1_Fan2_Top1_ArusR = '$arusr[$j]',
				Cooling1_Fan2_Top1_ArusS = '$aruss[$j]',
				Cooling1_Fan2_Top1_ArusT = '$arust[$j]',
				Cooling1_Fan2_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan2_Top2_VMDE = '$vmde[$j]',
				Cooling1_Fan2_Top2_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan2_Top2_VMNDER = '$vmnder[$j]',
				Cooling1_Fan2_Top2_TempM = '$tempm[$j]',
				Cooling1_Fan2_Top2_ArusR = '$arusr[$j]',
				Cooling1_Fan2_Top2_ArusS = '$aruss[$j]',
				Cooling1_Fan2_Top2_ArusT = '$arust[$j]',
				Cooling1_Fan2_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan1_Bot1_VMDE = '$vmde[$j]',
				Cooling1_Fan1_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan1_Bot1_VMNDER = '$vmnder[$j]',
				Cooling1_Fan1_Bot1_TempM = '$tempm[$j]',
				Cooling1_Fan1_Bot1_ArusR = '$arusr[$j]',
				Cooling1_Fan1_Bot1_ArusS = '$aruss[$j]',
				Cooling1_Fan1_Bot1_ArusT = '$arust[$j]',
				Cooling1_Fan1_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan1_Bot2_VMDE = '$vmde[$j]',
				Cooling1_Fan1_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan1_Bot2_VMNDER = '$vmnder[$j]',
				Cooling1_Fan1_Bot2_TempM = '$tempm[$j]',
				Cooling1_Fan1_Bot2_ArusR = '$arusr[$j]',
				Cooling1_Fan1_Bot2_ArusS = '$aruss[$j]',
				Cooling1_Fan1_Bot2_ArusT = '$arust[$j]',
				Cooling1_Fan1_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan2_Bot1_VMDE = '$vmde[$j]',
				Cooling1_Fan2_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan2_Bot1_VMNDER = '$vmnder[$j]',
				Cooling1_Fan2_Bot1_TempM = '$tempm[$j]',
				Cooling1_Fan2_Bot1_ArusR = '$arusr[$j]',
				Cooling1_Fan2_Bot1_ArusS = '$aruss[$j]',
				Cooling1_Fan2_Bot1_ArusT = '$arust[$j]',
				Cooling1_Fan2_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling1_Fan2_Bot2_VMDE = '$vmde[$j]',
				Cooling1_Fan2_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling1_Fan2_Bot2_VMNDER = '$vmnder[$j]',
				Cooling1_Fan2_Bot2_TempM = '$tempm[$j]',
				Cooling1_Fan2_Bot2_ArusR = '$arusr[$j]',
				Cooling1_Fan2_Bot2_ArusS = '$aruss[$j]',
				Cooling1_Fan2_Bot2_ArusT = '$arust[$j]',
				Cooling1_Fan2_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan1_Top1_VMDE = '$vmde[$j]',
				Cooling2_Fan1_Top1_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan1_Top1_VMNDER = '$vmnder[$j]',
				Cooling2_Fan1_Top1_TempM = '$tempm[$j]',
				Cooling2_Fan1_Top1_ArusR = '$arusr[$j]',
				Cooling2_Fan1_Top1_ArusS = '$aruss[$j]',
				Cooling2_Fan1_Top1_ArusT = '$arust[$j]',
				Cooling2_Fan1_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan1_Top2_VMDE = '$vmde[$j]',
				Cooling2_Fan1_Top2_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan1_Top2_VMNDER = '$vmnder[$j]',
				Cooling2_Fan1_Top2_TempM = '$tempm[$j]',
				Cooling2_Fan1_Top2_ArusR = '$arusr[$j]',
				Cooling2_Fan1_Top2_ArusS = '$aruss[$j]',
				Cooling2_Fan1_Top2_ArusT = '$arust[$j]',
				Cooling2_Fan1_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan2_Top1_VMDE = '$vmde[$j]',
				Cooling2_Fan2_Top1_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan2_Top1_VMNDER = '$vmnder[$j]',
				Cooling2_Fan2_Top1_TempM = '$tempm[$j]',
				Cooling2_Fan2_Top1_ArusR = '$arusr[$j]',
				Cooling2_Fan2_Top1_ArusS = '$aruss[$j]',
				Cooling2_Fan2_Top1_ArusT = '$arust[$j]',
				Cooling2_Fan2_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan2_Top2_VMDE = '$vmde[$j]',
				Cooling2_Fan2_Top2_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan2_Top2_VMNDER = '$vmnder[$j]',
				Cooling2_Fan2_Top2_TempM = '$tempm[$j]',
				Cooling2_Fan2_Top2_ArusR = '$arusr[$j]',
				Cooling2_Fan2_Top2_ArusS = '$aruss[$j]',
				Cooling2_Fan2_Top2_ArusT = '$arust[$j]',
				Cooling2_Fan2_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan1_Bot1_VMDE = '$vmde[$j]',
				Cooling2_Fan1_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan1_Bot1_VMNDER = '$vmnder[$j]',
				Cooling2_Fan1_Bot1_TempM = '$tempm[$j]',
				Cooling2_Fan1_Bot1_ArusR = '$arusr[$j]',
				Cooling2_Fan1_Bot1_ArusS = '$aruss[$j]',
				Cooling2_Fan1_Bot1_ArusT = '$arust[$j]',
				Cooling2_Fan1_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan1_Bot2_VMDE = '$vmde[$j]',
				Cooling2_Fan1_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan1_Bot2_VMNDER = '$vmnder[$j]',
				Cooling2_Fan1_Bot2_TempM = '$tempm[$j]',
				Cooling2_Fan1_Bot2_ArusR = '$arusr[$j]',
				Cooling2_Fan1_Bot2_ArusS = '$aruss[$j]',
				Cooling2_Fan1_Bot2_ArusT = '$arust[$j]',
				Cooling2_Fan1_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan2_Bot1_VMDE = '$vmde[$j]',
				Cooling2_Fan2_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan2_Bot1_VMNDER = '$vmnder[$j]',
				Cooling2_Fan2_Bot1_TempM = '$tempm[$j]',
				Cooling2_Fan2_Bot1_ArusR = '$arusr[$j]',
				Cooling2_Fan2_Bot1_ArusS = '$aruss[$j]',
				Cooling2_Fan2_Bot1_ArusT = '$arust[$j]',
				Cooling2_Fan2_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling2_Fan2_Bot2_VMDE = '$vmde[$j]',
				Cooling2_Fan2_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling2_Fan2_Bot2_VMNDER = '$vmnder[$j]',
				Cooling2_Fan2_Bot2_TempM = '$tempm[$j]',
				Cooling2_Fan2_Bot2_ArusR = '$arusr[$j]',
				Cooling2_Fan2_Bot2_ArusS = '$aruss[$j]',
				Cooling2_Fan2_Bot2_ArusT = '$arust[$j]',
				Cooling2_Fan2_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan1_Top1_VMDE = '$vmde[$j]',
				Cooling3_Fan1_Top1_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan1_Top1_VMNDER = '$vmnder[$j]',
				Cooling3_Fan1_Top1_TempM = '$tempm[$j]',
				Cooling3_Fan1_Top1_ArusR = '$arusr[$j]',
				Cooling3_Fan1_Top1_ArusS = '$aruss[$j]',
				Cooling3_Fan1_Top1_ArusT = '$arust[$j]',
				Cooling3_Fan1_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan1_Top2_VMDE = '$vmde[$j]',
				Cooling3_Fan1_Top2_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan1_Top2_VMNDER = '$vmnder[$j]',
				Cooling3_Fan1_Top2_TempM = '$tempm[$j]',
				Cooling3_Fan1_Top2_ArusR = '$arusr[$j]',
				Cooling3_Fan1_Top2_ArusS = '$aruss[$j]',
				Cooling3_Fan1_Top2_ArusT = '$arust[$j]',
				Cooling3_Fan1_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan2_Top1_VMDE = '$vmde[$j]',
				Cooling3_Fan2_Top1_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan2_Top1_VMNDER = '$vmnder[$j]',
				Cooling3_Fan2_Top1_TempM = '$tempm[$j]',
				Cooling3_Fan2_Top1_ArusR = '$arusr[$j]',
				Cooling3_Fan2_Top1_ArusS = '$aruss[$j]',
				Cooling3_Fan2_Top1_ArusT = '$arust[$j]',
				Cooling3_Fan2_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan2_Top2_VMDE = '$vmde[$j]',
				Cooling3_Fan2_Top2_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan2_Top2_VMNDER = '$vmnder[$j]',
				Cooling3_Fan2_Top2_TempM = '$tempm[$j]',
				Cooling3_Fan2_Top2_ArusR = '$arusr[$j]',
				Cooling3_Fan2_Top2_ArusS = '$aruss[$j]',
				Cooling3_Fan2_Top2_ArusT = '$arust[$j]',
				Cooling3_Fan2_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan1_Bot1_VMDE = '$vmde[$j]',
				Cooling3_Fan1_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan1_Bot1_VMNDER = '$vmnder[$j]',
				Cooling3_Fan1_Bot1_TempM = '$tempm[$j]',
				Cooling3_Fan1_Bot1_ArusR = '$arusr[$j]',
				Cooling3_Fan1_Bot1_ArusS = '$aruss[$j]',
				Cooling3_Fan1_Bot1_ArusT = '$arust[$j]',
				Cooling3_Fan1_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan1_Bot2_VMDE = '$vmde[$j]',
				Cooling3_Fan1_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan1_Bot2_VMNDER = '$vmnder[$j]',
				Cooling3_Fan1_Bot2_TempM = '$tempm[$j]',
				Cooling3_Fan1_Bot2_ArusR = '$arusr[$j]',
				Cooling3_Fan1_Bot2_ArusS = '$aruss[$j]',
				Cooling3_Fan1_Bot2_ArusT = '$arust[$j]',
				Cooling3_Fan1_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan2_Bot1_VMDE = '$vmde[$j]',
				Cooling3_Fan2_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan2_Bot1_VMNDER = '$vmnder[$j]',
				Cooling3_Fan2_Bot1_TempM = '$tempm[$j]',
				Cooling3_Fan2_Bot1_ArusR = '$arusr[$j]',
				Cooling3_Fan2_Bot1_ArusS = '$aruss[$j]',
				Cooling3_Fan2_Bot1_ArusT = '$arust[$j]',
				Cooling3_Fan2_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling3_Fan2_Bot2_VMDE = '$vmde[$j]',
				Cooling3_Fan2_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling3_Fan2_Bot2_VMNDER = '$vmnder[$j]',
				Cooling3_Fan2_Bot2_TempM = '$tempm[$j]',
				Cooling3_Fan2_Bot2_ArusR = '$arusr[$j]',
				Cooling3_Fan2_Bot2_ArusS = '$aruss[$j]',
				Cooling3_Fan2_Bot2_ArusT = '$arust[$j]',
				Cooling3_Fan2_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan1_Top1_VMDE = '$vmde[$j]',
				Cooling4_Fan1_Top1_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan1_Top1_VMNDER = '$vmnder[$j]',
				Cooling4_Fan1_Top1_TempM = '$tempm[$j]',
				Cooling4_Fan1_Top1_ArusR = '$arusr[$j]',
				Cooling4_Fan1_Top1_ArusS = '$aruss[$j]',
				Cooling4_Fan1_Top1_ArusT = '$arust[$j]',
				Cooling4_Fan1_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan1_Top2_VMDE = '$vmde[$j]',
				Cooling4_Fan1_Top2_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan1_Top2_VMNDER = '$vmnder[$j]',
				Cooling4_Fan1_Top2_TempM = '$tempm[$j]',
				Cooling4_Fan1_Top2_ArusR = '$arusr[$j]',
				Cooling4_Fan1_Top2_ArusS = '$aruss[$j]',
				Cooling4_Fan1_Top2_ArusT = '$arust[$j]',
				Cooling4_Fan1_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan2_Top1_VMDE = '$vmde[$j]',
				Cooling4_Fan2_Top1_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan2_Top1_VMNDER = '$vmnder[$j]',
				Cooling4_Fan2_Top1_TempM = '$tempm[$j]',
				Cooling4_Fan2_Top1_ArusR = '$arusr[$j]',
				Cooling4_Fan2_Top1_ArusS = '$aruss[$j]',
				Cooling4_Fan2_Top1_ArusT = '$arust[$j]',
				Cooling4_Fan2_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan2_Top2_VMDE = '$vmde[$j]',
				Cooling4_Fan2_Top2_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan2_Top2_VMNDER = '$vmnder[$j]',
				Cooling4_Fan2_Top2_TempM = '$tempm[$j]',
				Cooling4_Fan2_Top2_ArusR = '$arusr[$j]',
				Cooling4_Fan2_Top2_ArusS = '$aruss[$j]',
				Cooling4_Fan2_Top2_ArusT = '$arust[$j]',
				Cooling4_Fan2_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan1_Bot1_VMDE = '$vmde[$j]',
				Cooling4_Fan1_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan1_Bot1_VMNDER = '$vmnder[$j]',
				Cooling4_Fan1_Bot1_TempM = '$tempm[$j]',
				Cooling4_Fan1_Bot1_ArusR = '$arusr[$j]',
				Cooling4_Fan1_Bot1_ArusS = '$aruss[$j]',
				Cooling4_Fan1_Bot1_ArusT = '$arust[$j]',
				Cooling4_Fan1_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan1_Bot2_VMDE = '$vmde[$j]',
				Cooling4_Fan1_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan1_Bot2_VMNDER = '$vmnder[$j]',
				Cooling4_Fan1_Bot2_TempM = '$tempm[$j]',
				Cooling4_Fan1_Bot2_ArusR = '$arusr[$j]',
				Cooling4_Fan1_Bot2_ArusS = '$aruss[$j]',
				Cooling4_Fan1_Bot2_ArusT = '$arust[$j]',
				Cooling4_Fan1_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan2_Bot1_VMDE = '$vmde[$j]',
				Cooling4_Fan2_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan2_Bot1_VMNDER = '$vmnder[$j]',
				Cooling4_Fan2_Bot1_TempM = '$tempm[$j]',
				Cooling4_Fan2_Bot1_ArusR = '$arusr[$j]',
				Cooling4_Fan2_Bot1_ArusS = '$aruss[$j]',
				Cooling4_Fan2_Bot1_ArusT = '$arust[$j]',
				Cooling4_Fan2_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling4_Fan2_Bot2_VMDE = '$vmde[$j]',
				Cooling4_Fan2_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling4_Fan2_Bot2_VMNDER = '$vmnder[$j]',
				Cooling4_Fan2_Bot2_TempM = '$tempm[$j]',
				Cooling4_Fan2_Bot2_ArusR = '$arusr[$j]',
				Cooling4_Fan2_Bot2_ArusS = '$aruss[$j]',
				Cooling4_Fan2_Bot2_ArusT = '$arust[$j]',
				Cooling4_Fan2_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan1_Top1_VMDE = '$vmde[$j]',
				Cooling5_Fan1_Top1_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan1_Top1_VMNDER = '$vmnder[$j]',
				Cooling5_Fan1_Top1_TempM = '$tempm[$j]',
				Cooling5_Fan1_Top1_ArusR = '$arusr[$j]',
				Cooling5_Fan1_Top1_ArusS = '$aruss[$j]',
				Cooling5_Fan1_Top1_ArusT = '$arust[$j]',
				Cooling5_Fan1_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan1_Top2_VMDE = '$vmde[$j]',
				Cooling5_Fan1_Top2_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan1_Top2_VMNDER = '$vmnder[$j]',
				Cooling5_Fan1_Top2_TempM = '$tempm[$j]',
				Cooling5_Fan1_Top2_ArusR = '$arusr[$j]',
				Cooling5_Fan1_Top2_ArusS = '$aruss[$j]',
				Cooling5_Fan1_Top2_ArusT = '$arust[$j]',
				Cooling5_Fan1_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan2_Top1_VMDE = '$vmde[$j]',
				Cooling5_Fan2_Top1_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan2_Top1_VMNDER = '$vmnder[$j]',
				Cooling5_Fan2_Top1_TempM = '$tempm[$j]',
				Cooling5_Fan2_Top1_ArusR = '$arusr[$j]',
				Cooling5_Fan2_Top1_ArusS = '$aruss[$j]',
				Cooling5_Fan2_Top1_ArusT = '$arust[$j]',
				Cooling5_Fan2_Top1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan2_Top2_VMDE = '$vmde[$j]',
				Cooling5_Fan2_Top2_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan2_Top2_VMNDER = '$vmnder[$j]',
				Cooling5_Fan2_Top2_TempM = '$tempm[$j]',
				Cooling5_Fan2_Top2_ArusR = '$arusr[$j]',
				Cooling5_Fan2_Top2_ArusS = '$aruss[$j]',
				Cooling5_Fan2_Top2_ArusT = '$arust[$j]',
				Cooling5_Fan2_Top2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan1_Bot1_VMDE = '$vmde[$j]',
				Cooling5_Fan1_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan1_Bot1_VMNDER = '$vmnder[$j]',
				Cooling5_Fan1_Bot1_TempM = '$tempm[$j]',
				Cooling5_Fan1_Bot1_ArusR = '$arusr[$j]',
				Cooling5_Fan1_Bot1_ArusS = '$aruss[$j]',
				Cooling5_Fan1_Bot1_ArusT = '$arust[$j]',
				Cooling5_Fan1_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan1_Bot2_VMDE = '$vmde[$j]',
				Cooling5_Fan1_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan1_Bot2_VMNDER = '$vmnder[$j]',
				Cooling5_Fan1_Bot2_TempM = '$tempm[$j]',
				Cooling5_Fan1_Bot2_ArusR = '$arusr[$j]',
				Cooling5_Fan1_Bot2_ArusS = '$aruss[$j]',
				Cooling5_Fan1_Bot2_ArusT = '$arust[$j]',
				Cooling5_Fan1_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan2_Bot1_VMDE = '$vmde[$j]',
				Cooling5_Fan2_Bot1_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan2_Bot1_VMNDER = '$vmnder[$j]',
				Cooling5_Fan2_Bot1_TempM = '$tempm[$j]',
				Cooling5_Fan2_Bot1_ArusR = '$arusr[$j]',
				Cooling5_Fan2_Bot1_ArusS = '$aruss[$j]',
				Cooling5_Fan2_Bot1_ArusT = '$arust[$j]',
				Cooling5_Fan2_Bot1_Ket = '$ket[$j]' WHERE Tanggal = '$date';");   $j++; $insert = mysql_query("UPDATE form_checklist_line_6_tdoas SET
				Cooling5_Fan2_Bot2_VMDE = '$vmde[$j]',
				Cooling5_Fan2_Bot2_VMNDEA = '$vmndea[$j]',
				Cooling5_Fan2_Bot2_VMNDER = '$vmnder[$j]',
				Cooling5_Fan2_Bot2_TempM = '$tempm[$j]',
				Cooling5_Fan2_Bot2_ArusR = '$arusr[$j]',
				Cooling5_Fan2_Bot2_ArusS = '$aruss[$j]',
				Cooling5_Fan2_Bot2_ArusT = '$arust[$j]',
				Cooling5_Fan2_Bot2_Ket = '$ket[$j]' WHERE Tanggal = '$date';"); 

	if(!$insert){
		echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower Tanggal ($date) Gagal Disimpan');</script></h1>";

echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
	}
	else {
		include "WebTabelbacktopulrolhculine6.php";
	}						
}	
else{
	echo "Proses Salah";
}
?>



		
