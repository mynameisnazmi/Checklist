<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_7_TDOAiring( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Exhaust_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Exhaust_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Exhaust_Fan2_VMDE FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_VMNDEA FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_VMNDER FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_TempM FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_ArusR FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_ArusS FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_ArusT FLOAT(30) NOT NULL, '.
				'Exhaust_Fan2_Ket VARCHAR(50) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_VMDE FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_VMNDEA FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_VMNDER FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_TempM FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_ArusR FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_ArusS FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_ArusT FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Top_Ket VARCHAR(50) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_VMDE FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_VMNDEA FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_VMNDER FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_TempM FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_ArusR FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_ArusS FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_ArusT FLOAT(30) NOT NULL, '.
				'Exhaust_Fan_Neu_Bot_Ket VARCHAR(50) NOT NULL, '.
				'LPG_Exhaust_Fan_VMDE FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_VMNDEA FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_VMNDER FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_TempM FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_ArusR FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_ArusS FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_ArusT FLOAT(30) NOT NULL, '.
				'LPG_Exhaust_Fan_Ket VARCHAR(50) NOT NULL, '.
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