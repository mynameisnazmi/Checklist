<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4_TDO( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'TDO_Fan1_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan1_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan2_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan2_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan3_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan3_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan4_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan4_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan5_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan5_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan6_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan6_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan7_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan7_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan8_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan8_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan9_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan9_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan10_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan10_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan11_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan11_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan12_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan12_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_OS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan1_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan1_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan2_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan2_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan3_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan3_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan4_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan4_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan5_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan5_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan6_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan6_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan7_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan7_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan8_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan8_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan9_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan9_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan10_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan10_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan11_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan11_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Fan12_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Fan12_DS_Ket VARCHAR(50) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_VMDE FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_VMNDEA FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_VMNDER FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_TempM FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_ArusR FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_ArusS FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_ArusT FLOAT(30) NOT NULL, '.
				'TDO_Airshow_Fan13_DS_Ket VARCHAR(50) NOT NULL, '.
				'DC_TDO_Drive_VMDE FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_VMNDER FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_TempM FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_ArusR FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_ArusS FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_ArusT FLOAT(30) NOT NULL, '.
				'DC_TDO_Drive_Ket VARCHAR(50) NOT NULL, '.
				'AC_Cool_TDO_Drive_VMDE FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_VMNDEA FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_VMNDER FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_TempM FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_ArusR FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_ArusS FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_ArusT FLOAT(30) NOT NULL, '.
				'AC_Cool_TDO_Drive_Ket VARCHAR(50) NOT NULL, '.
				'primary key ( Tanggal ))';		
		
		$databasetabel = mysql_query( $tabel );
		if($databasetabel)
		{
			echo "<h1>Tabel Berhasil Dibuat</h1></br>";
		}
		else
		{
			echo "<br><h1>Tabel Gagal Dibuat</h1></br>";
		}
	}
	else
	{
		echo "<br>Database Salah</br>";
	}
?>