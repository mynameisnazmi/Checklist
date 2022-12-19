<?php
//if(isset($_POST['buattabel'])){
	include '4.koneksi.php';
	//$tanggal = date('d-m-Y');
	
	$cek = mysql_select_db('checklist motor 1');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE user( '.
				'No INT(10) NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Level VARCHAR(30) NOT NULL, '.
				'Line VARCHAR(30) NOT NULL, '.
				'Password VARCHAR(30) NOT NULL, '.
				'primary key ( No ))';		
		
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