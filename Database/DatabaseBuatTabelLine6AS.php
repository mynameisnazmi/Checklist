<?php
	include 'koneksi.php';

	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_6_airsys( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top_Ket VARCHAR(50) NOT NULL, '.
				'Fan_Cool_Exh_Top1_VMDE FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_VMNDEA FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_VMNDER FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_TempM FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_ArusR FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_ArusS FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_ArusT FLOAT(30) NOT NULL, '.
				'Fan_Cool_Exh_Top1_Ket VARCHAR(50) NOT NULL, '.
				'Airing_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Airing_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Airing_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Airing_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Airing_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Airing_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Airing_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Airing_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Airing_Supply_Fan1_VMDE FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_VMNDEA FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_VMNDER FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_TempM FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_ArusR FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_ArusS FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_ArusT FLOAT(30) NOT NULL, '.
				'Airing_Supply_Fan1_Ket VARCHAR(50) NOT NULL, '.
				'Airing_Fan_Exh_Neu_VMDE FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_VMNDEA FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_VMNDER FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_TempM FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_ArusR FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_ArusS FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_ArusT FLOAT(30) NOT NULL, '.
				'Airing_Fan_Exh_Neu_Ket VARCHAR(50) NOT NULL, '.
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