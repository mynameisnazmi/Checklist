<?php
	include 'koneksi.php';
	
	$cek = mysql_select_db('checklist');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_7_MDOHCU( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'HCU_Preheat1_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat1_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat2_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat2_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat3_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat3_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat4_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat4_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat5_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat5_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat6_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat6_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat7_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat7_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat8_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat8_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Preheat9_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_TempM FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Preheat9_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing1_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing1_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing2_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing2_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing3_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing3_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing4_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing4_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing5_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing5_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Drawing6_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_TempM FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Drawing6_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Annealing1_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_TempM FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Annealing1_Ket VARCHAR(50) NOT NULL, '.
				'HCU_Annealing2_VMDE FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_VMNDEA FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_VMNDER FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_TempM FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_ArusR FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_ArusS FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_ArusT FLOAT(30) NOT NULL, '.
				'HCU_Annealing2_Ket VARCHAR(50) NOT NULL, '.
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