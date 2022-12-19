<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4_Ext( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'DC_MExt_VMDE FLOAT(30) NOT NULL, '.
				'DC_MExt_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_MExt_VMNDER FLOAT(30) NOT NULL, '.
				'DC_MExt_TempM FLOAT(30) NOT NULL, '.
				'DC_MExt_ArusR FLOAT(30) NOT NULL, '.
				'DC_MExt_ArusS FLOAT(30) NOT NULL, '.
				'DC_MExt_ArusT FLOAT(30) NOT NULL, '.
				'DC_MExt_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_MExt_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_MExt_Ket VARCHAR(50) NOT NULL, '.
				'DC_Metering_VMDE FLOAT(30) NOT NULL, '.
				'DC_Metering_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_Metering_VMNDER FLOAT(30) NOT NULL, '.
				'DC_Metering_TempM FLOAT(30) NOT NULL, '.
				'DC_Metering_ArusR FLOAT(30) NOT NULL, '.
				'DC_Metering_ArusS FLOAT(30) NOT NULL, '.
				'DC_Metering_ArusT FLOAT(30) NOT NULL, '.
				'DC_Metering_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_Metering_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_Metering_Ket VARCHAR(50) NOT NULL, '.
				'DC_CoExt1_VMDE FLOAT(30) NOT NULL, '.
				'DC_CoExt1_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_CoExt1_VMNDER FLOAT(30) NOT NULL, '.
				'DC_CoExt1_TempM FLOAT(30) NOT NULL, '.
				'DC_CoExt1_ArusR FLOAT(30) NOT NULL, '.
				'DC_CoExt1_ArusS FLOAT(30) NOT NULL, '.
				'DC_CoExt1_ArusT FLOAT(30) NOT NULL, '.
				'DC_CoExt1_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_CoExt1_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt1_Ket VARCHAR(50) NOT NULL, '.
				'DC_CoExt2_VMDE FLOAT(30) NOT NULL, '.
				'DC_CoExt2_VMNDEA FLOAT(30) NOT NULL, '.
				'DC_CoExt2_VMNDER FLOAT(30) NOT NULL, '.
				'DC_CoExt2_TempM FLOAT(30) NOT NULL, '.
				'DC_CoExt2_ArusR FLOAT(30) NOT NULL, '.
				'DC_CoExt2_ArusS FLOAT(30) NOT NULL, '.
				'DC_CoExt2_ArusT FLOAT(30) NOT NULL, '.
				'DC_CoExt2_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_CoExt2_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_CoExt2_Ket VARCHAR(50) NOT NULL, '.
				'Gearbox_Oil_Mext_VMDE FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_VMNDEA FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_VMNDER FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_TempM FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_ArusR FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_ArusS FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_ArusT FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Mext_Ket VARCHAR(50) NOT NULL, '.
				'Filter_Oil_Mext_VMDE FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_VMNDEA FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_VMNDER FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_TempM FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_ArusR FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_ArusS FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_ArusT FLOAT(30) NOT NULL, '.
				'Filter_Oil_Mext_Ket VARCHAR(50) NOT NULL, '.
				'Gearbox_Oil_Meter_VMDE FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_VMNDEA FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_VMNDER FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_TempM FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_ArusR FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_ArusS FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_ArusT FLOAT(30) NOT NULL, '.
				'Gearbox_Oil_Meter_Ket VARCHAR(50) NOT NULL, '.
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