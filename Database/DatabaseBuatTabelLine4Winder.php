<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4_Winder( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'DC_Contact_VMDE FLOAT(30) NOT NULL, '.
				'DC_Contact_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Contact_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Contact_TempM FLOAT(30) NOT NULL, '.
				'DC_Contact_ArusR FLOAT(30) NOT NULL, '.
				'DC_Contact_ArusS FLOAT(30) NOT NULL, '.
				'DC_Contact_ArusT FLOAT(30) NOT NULL, '.
				'DC_Contact_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_Contact_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_Contact_Ket VARCHAR(50) NOT NULL, '.
				'DC_Turning_VMDE FLOAT(30) NOT NULL, '.
				'DC_Turning_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Turning_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Turning_TempM FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusR FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusS FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusT FLOAT(30) NOT NULL, '.
				'DC_Turning_Ket VARCHAR(50) NOT NULL, '.
				'DC_WinderA_VMDE FLOAT(30) NOT NULL, '.
				'DC_WinderA_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_WinderA_VMNDER FLOAT(30) NOT NULL, '.
				'DC_WinderA_TempM FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusR FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusS FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusT FLOAT(30) NOT NULL, '.
				'DC_WinderA_Ket VARCHAR(50) NOT NULL, '.
				'DC_WinderB_VMDE FLOAT(30) NOT NULL, '.
				'DC_WinderB_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_WinderB_VMNDER FLOAT(30) NOT NULL, '.
				'DC_WinderB_TempM FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusR FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusS FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusT FLOAT(30) NOT NULL, '.
				'DC_WinderB_Ket VARCHAR(50) NOT NULL, '.
				'Hydraulic_Pump_VMDE FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_VMNDEA FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_VMNDER FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_TempM FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusR FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusS FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusT FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_Ket VARCHAR(50) NOT NULL, '.
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