<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_5_resinsilo( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Status VARCHAR(10) NOT NULL, '.
				'Tanggal_Status DATE NOT NULL, '.
				'Res_Trf_Blw_Fed_Trc_VMDE FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VMNDEA FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VMNDER FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_TempM FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_ArusR FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_ArusS FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_ArusT FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_Ket VARCHAR(50) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_VMDE FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_VMNDEA FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_VMNDER FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_TempM FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_ArusR FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_ArusS FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_ArusT FLOAT(30) NOT NULL, '.
				'Res_Rty_Vlv_Fed_Trc_Ket VARCHAR(50) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_VMDE FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_VMNDEA FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_VMNDER FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_TempM FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_ArusR FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_ArusS FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_ArusT FLOAT(30) NOT NULL, '.
				'Sil_Cvy_Blw_Fan_Ket VARCHAR(50) NOT NULL, '.
				'Sil_Rty_Vlv_VMDE FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_VMNDEA FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_VMNDER FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_TempM FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_ArusR FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_ArusS FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_ArusT FLOAT(30) NOT NULL, '.
				'Sil_Rty_Vlv_Ket VARCHAR(50) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_VMDE FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_VMNDEA FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_VMNDER FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_TempM FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_ArusR FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_ArusS FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_ArusT FLOAT(30) NOT NULL, '.
				'Mlt_Ext_Ver_Mix_Scr_Ket VARCHAR(50) NOT NULL, '.
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