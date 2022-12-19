<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_bigsilo( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Bigbag_Blow_Stat_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Bigbag_Rotary_Valve1_VMDE FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_VMNDEA FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_VMNDER FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_TempM FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_ArusR FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_ArusS FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_ArusT FLOAT(30) NOT NULL, '.
				'Bigbag_Rotary_Valve1_Ket VARCHAR(50) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Silo_Blow_Stat_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Rotary_Valve1_VMDE FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_VMNDEA FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_VMNDER FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_TempM FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_ArusR FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_ArusS FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_ArusT FLOAT(30) NOT NULL, '.
				'Rotary_Valve1_Ket VARCHAR(50) NOT NULL, '.
				'Rotary_Valve2_VMDE FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_VMNDEA FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_VMNDER FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_TempM FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_ArusR FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_ArusS FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_ArusT FLOAT(30) NOT NULL, '.
				'Rotary_Valve2_Ket VARCHAR(50) NOT NULL, '.
				'Rotary_Valve3_VMDE FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_VMNDEA FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_VMNDER FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_TempM FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_ArusR FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_ArusS FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_ArusT FLOAT(30) NOT NULL, '.
				'Rotary_Valve3_Ket VARCHAR(50) NOT NULL, '.
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