<?php
	include "../include/db.php";
	
	$cek = mysql_select_db('arghapedia');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
			$tabel = 'CREATE TABLE user_temp( '.
				'ID INT(11) NOT NULL,'.
				'first_name VARCHAR(20) NOT NULL,'.
				'last_name VARCHAR(20) NOT NULL,'.
				'department VARCHAR(20) NOT NULL,'.
				'email VARCHAR(30) NOT NULL, '.
				'pass VARCHAR(100) NOT NULL, '.
				'typeUser INT(10) NOT NULL, '.
				'primary key ( ID ))';		
		
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