<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_7_Ext( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Main_Ext_VMDE FLOAT(30) NOT NULL, '.
				'Main_Ext_VMNDEA FLOAT(30) NOT NULL, '.
				'Main_Ext_VMNDER FLOAT(30) NOT NULL, '.
				'Main_Ext_TempM FLOAT(30) NOT NULL, '.
				'Main_Ext_ArusR FLOAT(30) NOT NULL, '.
				'Main_Ext_ArusS FLOAT(30) NOT NULL, '.
				'Main_Ext_ArusT FLOAT(30) NOT NULL, '.
				'Main_Ext_Ket VARCHAR(50) NOT NULL, '.
				'Melt_Pump_MExt_VMDE FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_VMNDEA FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_VMNDER FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_TempM FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_ArusR FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_ArusS FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_ArusT FLOAT(30) NOT NULL, '.
				'Melt_Pump_MExt_Ket VARCHAR(50) NOT NULL, '.
				'Co_Ext1_VMDE FLOAT(30) NOT NULL, '.
				'Co_Ext1_VMNDEA FLOAT(30) NOT NULL, '.
				'Co_Ext1_VMNDER FLOAT(30) NOT NULL, '.
				'Co_Ext1_TempM FLOAT(30) NOT NULL, '.
				'Co_Ext1_ArusR FLOAT(30) NOT NULL, '.
				'Co_Ext1_ArusS FLOAT(30) NOT NULL, '.
				'Co_Ext1_ArusT FLOAT(30) NOT NULL, '.
				'Co_Ext1_Ket VARCHAR(50) NOT NULL, '.
				'Co_Ext2_VMDE FLOAT(30) NOT NULL, '.
				'Co_Ext2_VMNDEA FLOAT(30) NOT NULL, '.
				'Co_Ext2_VMNDER FLOAT(30) NOT NULL, '.
				'Co_Ext2_TempM FLOAT(30) NOT NULL, '.
				'Co_Ext2_ArusR FLOAT(30) NOT NULL, '.
				'Co_Ext2_ArusS FLOAT(30) NOT NULL, '.
				'Co_Ext2_ArusT FLOAT(30) NOT NULL, '.
				'Co_Ext2_Ket VARCHAR(50) NOT NULL, '.
				'Melt_Pump_Co_Ext2_VMDE FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_VMNDEA FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_VMNDER FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_TempM FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_ArusR FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_ArusS FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_ArusT FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext2_Ket VARCHAR(50) NOT NULL, '.
				'Co_Ext3_VMDE FLOAT(30) NOT NULL, '.
				'Co_Ext3_VMNDEA FLOAT(30) NOT NULL, '.
				'Co_Ext3_VMNDER FLOAT(30) NOT NULL, '.
				'Co_Ext3_TempM FLOAT(30) NOT NULL, '.
				'Co_Ext3_ArusR FLOAT(30) NOT NULL, '.
				'Co_Ext3_ArusS FLOAT(30) NOT NULL, '.
				'Co_Ext3_ArusT FLOAT(30) NOT NULL, '.
				'Co_Ext3_Ket VARCHAR(50) NOT NULL, '.
				'Melt_Pump_Co_Ext3_VMDE FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_VMNDEA FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_VMNDER FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_TempM FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_ArusR FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_ArusS FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_ArusT FLOAT(30) NOT NULL, '.
				'Melt_Pump_Co_Ext3_Ket VARCHAR(50) NOT NULL, '.
				'Co_Ext4_VMDE FLOAT(30) NOT NULL, '.
				'Co_Ext4_VMNDEA FLOAT(30) NOT NULL, '.
				'Co_Ext4_VMNDER FLOAT(30) NOT NULL, '.
				'Co_Ext4_TempM FLOAT(30) NOT NULL, '.
				'Co_Ext4_ArusR FLOAT(30) NOT NULL, '.
				'Co_Ext4_ArusS FLOAT(30) NOT NULL, '.
				'Co_Ext4_ArusT FLOAT(30) NOT NULL, '.
				'Co_Ext4_Ket VARCHAR(50) NOT NULL, '.
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