<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_7_pullroll( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_TempM FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UI_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Flame_Treat_Top_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_TempM FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Flame_Treat_Top_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Corona_Bot_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_TempM FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Corona_Bot_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Corona_Top_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_TempM FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Corona_Top_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Heat_Cool_UO_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_TempM FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Heat_Cool_UO_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Corona_Exh_Top_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_TempM FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Top_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Corona_Exh_Bot_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_TempM FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Corona_Exh_Bot_Ket VARCHAR(50) NOT NULL, '.
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