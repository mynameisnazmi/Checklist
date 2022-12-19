<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4_pullroll( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'DC_Pullroll1_VMDE FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_TempM FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_ArusR FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_ArusS FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_ArusT FLOAT(30) NOT NULL, '.
				'DC_Pullroll1_Ket VARCHAR(50) NOT NULL, '.
				'DC_Pullroll2_VMDE FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_TempM FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_ArusR FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_ArusS FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_ArusT FLOAT(30) NOT NULL, '.
				'DC_Pullroll2_Ket VARCHAR(50) NOT NULL, '.
				'Cool_Pump1_VMDE FLOAT(30) NOT NULL, '.
				'Cool_Pump1_VMNDEA FLOAT(30) NOT NULL, '.
				'Cool_Pump1_VMNDER FLOAT(30) NOT NULL, '.
				'Cool_Pump1_TempM FLOAT(30) NOT NULL, '.
				'Cool_Pump1_ArusR FLOAT(30) NOT NULL, '.
				'Cool_Pump1_ArusS FLOAT(30) NOT NULL, '.
				'Cool_Pump1_ArusT FLOAT(30) NOT NULL, '.
				'Cool_Pump1_Ket VARCHAR(50) NOT NULL, '.
				'Cool_Pump2_VMDE FLOAT(30) NOT NULL, '.
				'Cool_Pump2_VMNDEA FLOAT(30) NOT NULL, '.
				'Cool_Pump2_VMNDER FLOAT(30) NOT NULL, '.
				'Cool_Pump2_TempM FLOAT(30) NOT NULL, '.
				'Cool_Pump2_ArusR FLOAT(30) NOT NULL, '.
				'Cool_Pump2_ArusS FLOAT(30) NOT NULL, '.
				'Cool_Pump2_ArusT FLOAT(30) NOT NULL, '.
				'Cool_Pump2_Ket VARCHAR(50) NOT NULL, '.
				'Pompa_Cool_Flame_VMDE FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_VMNDEA FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_VMNDER FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_TempM FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_ArusR FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_ArusS FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_ArusT FLOAT(30) NOT NULL, '.
				'Pompa_Cool_Flame_Ket VARCHAR(50) NOT NULL, '.
				'Pompa_Radiator_Flame_VMDE FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_VMNDEA FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_VMNDER FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_TempM FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_ArusR FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_ArusS FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_ArusT FLOAT(30) NOT NULL, '.
				'Pompa_Radiator_Flame_Ket VARCHAR(50) NOT NULL, '.
				'Corona_Exh_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Corona_Exh_Fan2_VMDE FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_VMNDEA FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_VMNDER FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_TempM FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_ArusR FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_ArusS FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_ArusT FLOAT(30) NOT NULL, '.
				'Corona_Exh_Fan2_Ket VARCHAR(50) NOT NULL, '.
				'Grinder_Exh_Fan_VMDE FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_VMNDEA FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_VMNDER FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_TempM FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_ArusR FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_ArusS FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_ArusT FLOAT(30) NOT NULL, '.
				'Grinder_Exh_Fan_Ket VARCHAR(50) NOT NULL, '.
				'Small_Grinder_VMDE FLOAT(30) NOT NULL, '.
				'Small_Grinder_VMNDEA FLOAT(30) NOT NULL, '.
				'Small_Grinder_VMNDER FLOAT(30) NOT NULL, '.
				'Small_Grinder_TempM FLOAT(30) NOT NULL, '.
				'Small_Grinder_ArusR FLOAT(30) NOT NULL, '.
				'Small_Grinder_ArusS FLOAT(30) NOT NULL, '.
				'Small_Grinder_ArusT FLOAT(30) NOT NULL, '.
				'Small_Grinder_Ket VARCHAR(50) NOT NULL, '.
				'Flake_Conv_Fan_VMDE FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_VMNDEA FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_VMNDER FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_TempM FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_ArusR FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_ArusS FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_ArusT FLOAT(30) NOT NULL, '.
				'Flake_Conv_Fan_Ket VARCHAR(50) NOT NULL, '.
				'Flame_Treat_Mix_VMDE FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_VMNDEA FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_VMNDER FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_TempM FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_ArusR FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_ArusS FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_ArusT FLOAT(30) NOT NULL, '.
				'Flame_Treat_Mix_Ket VARCHAR(50) NOT NULL, '.
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