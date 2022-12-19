<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_Erema( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Motor_Ext_VMDE FLOAT(30) NOT NULL, '.
				'Motor_Ext_VMNDEA FLOAT(30) NOT NULL, '.
				'Motor_Ext_VMNDER FLOAT(30) NOT NULL, '.
				'Motor_Ext_TempM FLOAT(30) NOT NULL, '.
				'Motor_Ext_ArusR FLOAT(30) NOT NULL, '.
				'Motor_Ext_ArusS FLOAT(30) NOT NULL, '.
				'Motor_Ext_ArusT FLOAT(30) NOT NULL, '.
				'Motor_Ext_Ket VARCHAR(50) NOT NULL, '.
				'Motor_Compactor_VMDE FLOAT(30) NOT NULL, '.
				'Motor_Compactor_VMNDEA FLOAT(30) NOT NULL, '.
				'Motor_Compactor_VMNDER FLOAT(30) NOT NULL, '.
				'Motor_Compactor_TempM FLOAT(30) NOT NULL, '.
				'Motor_Compactor_ArusR FLOAT(30) NOT NULL, '.
				'Motor_Compactor_ArusS FLOAT(30) NOT NULL, '.
				'Motor_Compactor_ArusT FLOAT(30) NOT NULL, '.
				'Motor_Compactor_Ket VARCHAR(50) NOT NULL, '.
				'TF_Regran_VMDE FLOAT(30) NOT NULL, '.
				'TF_Regran_VMNDEA FLOAT(30) NOT NULL, '.
				'TF_Regran_VMNDER FLOAT(30) NOT NULL, '.
				'TF_Regran_TempM FLOAT(30) NOT NULL, '.
				'TF_Regran_ArusR FLOAT(30) NOT NULL, '.
				'TF_Regran_ArusS FLOAT(30) NOT NULL, '.
				'TF_Regran_ArusT FLOAT(30) NOT NULL, '.
				'TF_Regran_Ket VARCHAR(50) NOT NULL, '.
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