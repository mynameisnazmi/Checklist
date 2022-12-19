<?php
//if(isset($_POST['buattabel'])){
	include '4.koneksi.php';
	//$tanggal = date('d-m-Y');
	
	$cek = mysql_select_db('checklist motor 1');
	if($cek)
	{
		//echo "<br>Database Benar</br>";
			   
		$tabel = 'CREATE TABLE form_checklist_line_4( '.
				'Tanggal DATE NOT NULL, '.
				'Nama VARCHAR(30) NOT NULL, '.
				'Ex_Dos_1_VMDE FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_VMNDEA FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_VMNDER FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_VPDE FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_VPNDEA FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_VPNDER FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_TempM FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_TempP FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_Arus FLOAT(30) NOT NULL, '.
				'Ex_Dos_1_Ket VARCHAR(50) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VMDE FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VMNDEA FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VMNDER FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VPDE FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VPNDEA FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_VPNDER FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_TempM FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_TempP FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_Arus FLOAT(30) NOT NULL, '.
				'Ex_Blow_Trf_Mat_Ket VARCHAR(50) NOT NULL, '.
				'Mat_Dos_Unit_VMDE FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VMNDEA FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VMNDER FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VPDE FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VPNDEA FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_VPNDER FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_TempM FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_TempP FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_Arus FLOAT(30) NOT NULL, '.
				'Mat_Dos_Unit_Ket VARCHAR(50) NOT NULL, '.
				'Blow_Trf_Mat_VMDE FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_VMNDEA FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_VMNDER FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_VPDE FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_VPNDEA FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_VPNDER FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_TempM FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_TempP FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_Arus FLOAT(30) NOT NULL, '.
				'Blow_Trf_Mat_Ket VARCHAR(50) NOT NULL, '.
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