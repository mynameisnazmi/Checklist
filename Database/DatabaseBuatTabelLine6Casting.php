<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_casting( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Fan_Water_Removal_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_TempM FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Water_Removal_Ket VARCHAR(50) NOT NULL, '.
				'Casting_Unit_System_VMDE FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_VMNDEA FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_VMNDER FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_TempM FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_ArusR FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_ArusS FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_ArusT FLOAT(30) NOT NULL, '.
				'Casting_Unit_System_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Chill_Roll_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_TempM FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Chill_Roll_Ket VARCHAR(50) NOT NULL, '.
				'Pump_Water_Bath_VMDE FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_VMNDEA FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_VMNDER FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_TempM FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_ArusR FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_ArusS FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_ArusT FLOAT(30) NOT NULL, '.
				'Pump_Water_Bath_Ket VARCHAR(50) NOT NULL, '.
				'Motor_Air_Knife_VMDE FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_VMNDEA FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_VMNDER FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_TempM FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_ArusR FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_ArusS FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_ArusT FLOAT(30) NOT NULL, '.
				'Motor_Air_Knife_Ket VARCHAR(50) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_VMDE FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_VMNDEA FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_VMNDER FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_TempM FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_ArusR FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_ArusS FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_ArusT FLOAT(30) NOT NULL, '.
				'Die_Bolt_Cooling_Fan_Ket VARCHAR(50) NOT NULL, '.
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