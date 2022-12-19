<?php
//if(isset($_POST['buattabel'])){
	include '4.koneksi.php';
	//$tanggal = date('d-m-Y');
	
	$cek = mysql_select_db('checklist motor 1');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_2( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Transfer_Material_Silo VARCHAR(30) NOT NULL, '.
				'Dosing_PP1 VARCHAR(30) NOT NULL, '.
				'Dosing_AD VARCHAR(30) NOT NULL, '.
				'Dosing_Regran VARCHAR(30) NOT NULL, '.
				'Rotary_Valve VARCHAR(30) NOT NULL, '.
				'Autoloader_Dosing_PP1 VARCHAR(30) NOT NULL, '.
				'Autoloader_Dosing_Add VARCHAR(30) NOT NULL, '.
				'Autoloader_Dosing_Regran VARCHAR(30) NOT NULL, '.
				'Autoloader_Dosing_Mixer VARCHAR(30) NOT NULL, '.
				'Autoloader_Dosing_Mixer_Silo VARCHAR(30) NOT NULL, '.
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
//}
//else{
//	echo "Proses Salah";
//}
?>