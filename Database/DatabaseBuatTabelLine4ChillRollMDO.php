<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4_ChillrollMDO( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'DC_Chillroll_VMDE FLOAT(30) NOT NULL, '.
				'DC_Chillroll_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Chillroll_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Chillroll_TempM FLOAT(30) NOT NULL, '.
				'DC_Chillroll_ArusR FLOAT(30) NOT NULL, '.
				'DC_Chillroll_ArusS FLOAT(30) NOT NULL, '.
				'DC_Chillroll_ArusT FLOAT(30) NOT NULL, '.
				'DC_Chillroll_Ket VARCHAR(50) NOT NULL, '.
				'Air_Knife_VMDE FLOAT(30) NOT NULL, '.
				'Air_Knife_VMNDEA FLOAT(30) NOT NULL, '.
				'Air_Knife_VMNDER FLOAT(30) NOT NULL, '.
				'Air_Knife_TempM FLOAT(30) NOT NULL, '.
				'Air_Knife_ArusR FLOAT(30) NOT NULL, '.
				'Air_Knife_ArusS FLOAT(30) NOT NULL, '.
				'Air_Knife_ArusT FLOAT(30) NOT NULL, '.
				'Air_Knife_Ket VARCHAR(50) NOT NULL, '.
				'Water_Removal_VMDE FLOAT(30) NOT NULL, '.
				'Water_Removal_VMNDEA FLOAT(30) NOT NULL, '.
				'Water_Removal_VMNDER FLOAT(30) NOT NULL, '.
				'Water_Removal_TempM FLOAT(30) NOT NULL, '.
				'Water_Removal_ArusR FLOAT(30) NOT NULL, '.
				'Water_Removal_ArusS FLOAT(30) NOT NULL, '.
				'Water_Removal_ArusT FLOAT(30) NOT NULL, '.
				'Water_Removal_Ket VARCHAR(50) NOT NULL, '.
				'Drum_Water_Pump_VMDE FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_VMNDEA FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_VMNDER FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_TempM FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_ArusR FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_ArusS FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_ArusT FLOAT(30) NOT NULL, '.
				'Drum_Water_Pump_Ket VARCHAR(50) NOT NULL, '.
				'Water_Bath_Pump_VMDE FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_VMNDEA FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_VMNDER FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_TempM FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_ArusR FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_ArusS FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_ArusT FLOAT(30) NOT NULL, '.
				'Water_Bath_Pump_Ket VARCHAR(50) NOT NULL, '.
				'DC_MDOA_VMDE FLOAT(30) NOT NULL, '.
				'DC_MDOA_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_MDOA_VMNDER FLOAT(30) NOT NULL, '.
				'DC_MDOA_TempM FLOAT(30) NOT NULL, '.
				'DC_MDOA_ArusR FLOAT(30) NOT NULL, '.
				'DC_MDOA_ArusS FLOAT(30) NOT NULL, '.
				'DC_MDOA_ArusT FLOAT(30) NOT NULL, '.
				'DC_MDOA_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_MDOA_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOA_Ket VARCHAR(50) NOT NULL, '.
				'DC_MDOB_VMDE FLOAT(30) NOT NULL, '.
				'DC_MDOB_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_MDOB_VMNDER FLOAT(30) NOT NULL, '.
				'DC_MDOB_TempM FLOAT(30) NOT NULL, '.
				'DC_MDOB_ArusR FLOAT(30) NOT NULL, '.
				'DC_MDOB_ArusS FLOAT(30) NOT NULL, '.
				'DC_MDOB_ArusT FLOAT(30) NOT NULL, '.
				'DC_MDOB_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_MDOB_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOB_Ket VARCHAR(50) NOT NULL, '.
				'DC_MDOC_VMDE FLOAT(30) NOT NULL, '.
				'DC_MDOC_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_MDOC_VMNDER FLOAT(30) NOT NULL, '.
				'DC_MDOC_TempM FLOAT(30) NOT NULL, '.
				'DC_MDOC_ArusR FLOAT(30) NOT NULL, '.
				'DC_MDOC_ArusS FLOAT(30) NOT NULL, '.
				'DC_MDOC_ArusT FLOAT(30) NOT NULL, '.
				'DC_MDOC_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_MDOC_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_MDOC_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Preheat1_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_TempM FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Preheat1_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Preheat2_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_TempM FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Preheat2_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Preheat3_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_TempM FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Preheat3_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Preheat4_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_TempM FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Preheat4_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Preheat5_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_TempM FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Preheat5_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Drawing1_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_TempM FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Drawing1_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Drawing2_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_TempM FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Drawing2_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Drawing3_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_TempM FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Drawing3_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Annealing1_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_TempM FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Annealing1_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Annealing2_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_TempM FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Annealing2_Ket VARCHAR(50) NOT NULL, '.
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