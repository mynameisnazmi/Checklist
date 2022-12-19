<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_Biggrinder( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Motor_Grinder_VMDE FLOAT(30) NOT NULL, '.
				'Motor_Grinder_VMNDEA FLOAT(30) NOT NULL, '.
				'Motor_Grinder_VMNDER FLOAT(30) NOT NULL, '.
				'Motor_Grinder_TempM FLOAT(30) NOT NULL, '.
				'Motor_Grinder_ArusR FLOAT(30) NOT NULL, '.
				'Motor_Grinder_ArusS FLOAT(30) NOT NULL, '.
				'Motor_Grinder_ArusT FLOAT(30) NOT NULL, '.
				'Motor_Grinder_Ket VARCHAR(50) NOT NULL, '.
				'Conveying_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Conveying_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Conveying_Fan2_VMDE FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_VMNDEA FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_VMNDER FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_TempM FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_ArusR FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_ArusS FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_ArusT FLOAT(30) NOT NULL, '.
				'Conveying_Fan2_Ket VARCHAR(50) NOT NULL, '.
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