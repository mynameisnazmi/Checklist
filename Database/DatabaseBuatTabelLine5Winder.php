<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_5_winder( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'DC_Contactroll_VMDE FLOAT(30) NOT NULL, '.
				'DC_Contactroll_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Contactroll_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Contactroll_TempM FLOAT(30) NOT NULL, '.
				'DC_Contactroll_ArusR FLOAT(30) NOT NULL, '.
				'DC_Contactroll_ArusS FLOAT(30) NOT NULL, '.
				'DC_Contactroll_ArusT FLOAT(30) NOT NULL, '.
				'DC_Contactroll_Ket VARCHAR(50) NOT NULL, '.
				'Contact_Fan_Cool_Blow_VMDE FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_VMNDEA FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_VMNDER FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_TempM FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_ArusR FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_ArusS FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_ArusT FLOAT(30) NOT NULL, '.
				'Contact_Fan_Cool_Blow_Ket VARCHAR(50) NOT NULL, '.
				'DC_Turning_VMDE FLOAT(30) NOT NULL, '.
				'DC_Turning_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Turning_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Turning_TempM FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusR FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusS FLOAT(30) NOT NULL, '.
				'DC_Turning_ArusT FLOAT(30) NOT NULL, '.
				'DC_Turning_Ket VARCHAR(50) NOT NULL, '.
				'Turning_Fan_Cool_Blow_VMDE FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_VMNDEA FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_VMNDER FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_TempM FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_ArusR FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_ArusS FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_ArusT FLOAT(30) NOT NULL, '.
				'Turning_Fan_Cool_Blow_Ket VARCHAR(50) NOT NULL, '.
				'Cut_Knife_Hor_VMDE FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_VMNDEA FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_VMNDER FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_TempM FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_ArusR FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_ArusS FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_ArusT FLOAT(30) NOT NULL, '.
				'Cut_Knife_Hor_Ket VARCHAR(50) NOT NULL, '.
				'Cut_Rotary_Knife_VMDE FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_VMNDEA FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_VMNDER FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_TempM FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_ArusR FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_ArusS FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_ArusT FLOAT(30) NOT NULL, '.
				'Cut_Rotary_Knife_Ket VARCHAR(50) NOT NULL, '.
				'DC_WinderA_VMDE FLOAT(30) NOT NULL, '.
				'DC_WinderA_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_WinderA_VMNDER FLOAT(30) NOT NULL, '.
				'DC_WinderA_TempM FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusR FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusS FLOAT(30) NOT NULL, '.
				'DC_WinderA_ArusT FLOAT(30) NOT NULL, '.
				'DC_WinderA_Ket VARCHAR(50) NOT NULL, '.
				'WindA_Fan_Cool_Blow_VMDE FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_VMNDEA FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_VMNDER FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_TempM FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_ArusR FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_ArusS FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_ArusT FLOAT(30) NOT NULL, '.
				'WindA_Fan_Cool_Blow_Ket VARCHAR(50) NOT NULL, '.
				'DC_WinderB_VMDE FLOAT(30) NOT NULL, '.
				'DC_WinderB_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_WinderB_VMNDER FLOAT(30) NOT NULL, '.
				'DC_WinderB_TempM FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusR FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusS FLOAT(30) NOT NULL, '.
				'DC_WinderB_ArusT FLOAT(30) NOT NULL, '.
				'DC_WinderB_Ket VARCHAR(50) NOT NULL, '.
				'WindB_Fan_Cool_Blow_VMDE FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_VMNDEA FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_VMNDER FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_TempM FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_ArusR FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_ArusS FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_ArusT FLOAT(30) NOT NULL, '.
				'WindB_Fan_Cool_Blow_Ket VARCHAR(50) NOT NULL, '.
				'Hydraulic_Pump_VMDE FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_VMNDEA FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_VMNDER FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_TempM FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusR FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusS FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_ArusT FLOAT(30) NOT NULL, '.
				'Hydraulic_Pump_Ket VARCHAR(50) NOT NULL, '.
				'Air_Cush_Blow_VMDE FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_VMNDEA FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_VMNDER FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_TempM FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_ArusR FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_ArusS FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_ArusT FLOAT(30) NOT NULL, '.
				'Air_Cush_Blow_Ket VARCHAR(50) NOT NULL, '.
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