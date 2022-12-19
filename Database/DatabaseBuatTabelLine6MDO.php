<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_MDO( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Drawing_1_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_1_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_1_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_1_TempM FLOAT(30) NOT NULL, '.
				'Drawing_1_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_1_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_1_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_1_Ket VARCHAR(50) NOT NULL, '.
				'Drawing_2_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_2_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_2_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_2_TempM FLOAT(30) NOT NULL, '.
				'Drawing_2_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_2_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_2_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_2_Ket VARCHAR(50) NOT NULL, '.
				'Drawing_3_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_3_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_3_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_3_TempM FLOAT(30) NOT NULL, '.
				'Drawing_3_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_3_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_3_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_3_Ket VARCHAR(50) NOT NULL, '.
				'Drawing_4_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_4_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_4_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_4TempM FLOAT(30) NOT NULL, '.
				'Drawing_4_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_4_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_4_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_4_Ket VARCHAR(50) NOT NULL, '.
				'Drawing_5_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_5_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_5_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_5_TempM FLOAT(30) NOT NULL, '.
				'Drawing_5_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_5_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_5_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_5_Ket VARCHAR(50) NOT NULL, '.
				'Drawing_6_VMDE FLOAT(30) NOT NULL, '.
				'Drawing_6_VMNDEA FLOAT(30) NOT NULL, '.
				'Drawing_6_VMNDER FLOAT(30) NOT NULL, '.
				'Drawing_6_Fan_TempM FLOAT(30) NOT NULL, '.
				'Drawing_6_ArusR FLOAT(30) NOT NULL, '.
				'Drawing_6_ArusS FLOAT(30) NOT NULL, '.
				'Drawing_6_ArusT FLOAT(30) NOT NULL, '.
				'Drawing_6_Ket VARCHAR(50) NOT NULL, '.
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