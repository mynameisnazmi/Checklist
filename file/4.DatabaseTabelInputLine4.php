<?php
if(isset($_POST['submit'])){
//echo "<br>Proses Benar</br>";
include '4.koneksi.php';

	$nama=$_POST['Nama'];
	$vmde=$_POST['VMDE'];
	$vmndea=$_POST['VMNDEA'];
	$vmnder=$_POST['VMNDER'];
	$vpde=$_POST['VPDE'];
	$vpndea=$_POST['VPNDEA'];
	$vpnder=$_POST['VPNDER'];
	$tempm=$_POST['TempM'];
	$tempp=$_POST['TempP'];
	$arus=$_POST['Arus'];
	$ket=$_POST['Ket'];
	
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = date('Y-m-d');
	$cek1 = date('Y-m-d', strtotime('-1 day'));
	$cek2 = date('Y-m-d', strtotime('-2 day'));
	$cek3 = date('Y-m-d', strtotime('-3 day'));
	$cek4 = date('Y-m-d', strtotime('-4 day'));
	$cek5 = date('Y-m-d', strtotime('-5 day'));
	$cek6 = date('Y-m-d', strtotime('-6 day'));
	
	$tgl = date('d-m-Y');
	
	//fungsi untuk menginput tanggal yang kelongkap ke database, maksimum tanggal yang bisa diinput hanya h-7
	$insert6 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek6','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");	
	if(!$insert6){
		$insert5 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek5','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
		if(!$insert5){
			$insert4 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek4','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||||||Form Checklist Line 4 ($tgl) Gagal Disimpan|||||||</h1>";
								echo "<h3>|||||||Tidak Dapat Input Data Pada Tanggal Yang Sama|||||||</h3>";
							}
							else {
								echo "<h1>||||||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*||||||</h1>";
								echo "<h3>||||||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*||||||</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*|||||</h1>";
								echo "<h3>|||||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*|||||</h3>";
							}
							else {
								echo "<h1>|||||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**|||||</h1>";
								echo "<h3>|||||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**|||||</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||||**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**||||</h1>";
								echo "<h3>||||**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**||||</h3>";
							}
							else {
								echo "<h1>||||***Form Checklist Line 4 ($tgl) Gagal Disimpan***||||</h1>";
								echo "<h3>||||***Tidak Dapat Input Data Pada Tanggal Yang Sama***||||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||||*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*||||</h1>";
								echo "<h3>||||*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*||||</h3>";
							}
							else {
								echo "<h1>||||*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*||||</h1>";
								echo "<h3>||||*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*||||</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||*|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||*|||</h1>";
								echo "<h3>|||*|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||*|||</h3>";
							}
							else {
								echo "<h1>|||*||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||*|||</h1>";
								echo "<h3>|||*||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||*|||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||*|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|*|||</h1>";
								echo "<h3>|||*|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|*|||</h3>";
							}
							else {
								echo "<h1>|||*|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|*|||</h1>";
								echo "<h3>|||*|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|*|||</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||**||Form Checklist Line 4 ($tgl) Berhasil Disimpan||**|||</h1>";
								echo "<h3>|||**||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||**|||</h3>";
							}
							else {
								echo "<h1>|||**|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|**|||</h1>";
								echo "<h3>|||**|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|**|||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|||***|Form Checklist Line 4 ($tgl) Berhasil Disimpan|***|||</h1>";
								echo "<h3>|||***|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|***|||</h3>";
							}
							else {
								echo "<h1>|||****Form Checklist Line 4 ($tgl) Gagal Disimpan****|||</h1>";
								echo "<h3>|||****Tidak Dapat Input Data Pada Tanggal Yang Sama****|||</h3>";
							}	
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||*||||Form Checklist Line 4 ($tgl) Gagal Disimpan||||*||</h1>";
								echo "<h3>||*||||Tidak Dapat Input Data Pada Tanggal Yang Sama||||*||</h3>";
							}
							else {
								echo "<h1>||*|||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*|||*||</h1>";
								echo "<h3>||*|||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*|||*||</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||*||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*||*||</h1>";
								echo "<h3>||*||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*||*||</h3>";
							}
							else {
								echo "<h1>||*||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**||*||</h1>";
								echo "<h3>||*||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**||*||</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||*|**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**|*||</h1>";
								echo "<h3>||*|**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**|*||</h3>";
							}
							else {
								echo "<h1>||*|***Form Checklist Line 4 ($tgl) Gagal Disimpan***|*||</h1>";
								echo "<h3>||*|***Tidak Dapat Input Data Pada Tanggal Yang Sama***|*||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||*|*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*|*||</h1>";
								echo "<h3>||*|*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*|*||</h3>";
							}
							else {
								echo "<h1>||*|*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*|*||</h1>";
								echo "<h3>||*|*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*|*||</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||**|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||**||</h1>";
								echo "<h3>||**|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||**||</h3>";
							}
							else {
								echo "<h1>||**||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||**||</h1>";
								echo "<h3>||**||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||**||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||**|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|**||</h1>";
								echo "<h3>||**|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|**||</h3>";
							}
							else {
								echo "<h1>||**|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|**||</h1>";
								echo "<h3>||**|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|**||</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||***||Form Checklist Line 4 ($tgl) Berhasil Disimpan||***||</h1>";
								echo "<h3>||***||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||***||</h3>";
							}
							else {
								echo "<h1>||***|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|***||</h1>";
								echo "<h3>||***|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|***||</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>||****|Form Checklist Line 4 ($tgl) Berhasil Disimpan|****||</h1>";
								echo "<h3>||****|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|****||</h3>";
							}
							else {
								echo "<h1>||*****Form Checklist Line 4 ($tgl) Gagal Disimpan*****||</h1>";
								echo "<h3>||*****Tidak Dapat Input Data Pada Tanggal Yang Sama*****||</h3>";
							}	
						}
					}
				}
			}
		}
		else{
			$insert4 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek4','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|||||Form Checklist Line 4 ($tgl) Gagal Disimpan|||||*|</h1>";
								echo "<h3>|*|||||Tidak Dapat Input Data Pada Tanggal Yang Sama|||||*|</h3>";
							}
							else {
								echo "<h1>|*||||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*||||*|</h1>";
								echo "<h3>|*||||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*||||*|</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*|||*|</h1>";
								echo "<h3>|*|||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*|||*|</h3>";
							}
							else {
								echo "<h1>|*|||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**|||*|</h1>";
								echo "<h3>|*|||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**|||*|</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*||**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**||*|</h1>";
								echo "<h3>|*||**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**||*|</h3>";
							}
							else {
								echo "<h1>|*||***Form Checklist Line 4 ($tgl) Gagal Disimpan***||*|</h1>";
								echo "<h3>|*||***Tidak Dapat Input Data Pada Tanggal Yang Sama***||*|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*||*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*||*|</h1>";
								echo "<h3>|*||*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*||*|</h3>";
							}
							else {
								echo "<h1>|*||*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*||*|</h1>";
								echo "<h3>|*||*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*||*|</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|*|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||*|*|</h1>";
								echo "<h3>|*|*|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||*|*|</h3>";
							}
							else {
								echo "<h1>|*|*||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||*|*|</h1>";
								echo "<h3>|*|*||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||*|*|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|*|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|*|*|</h1>";
								echo "<h3>|*|*|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|*|*|</h3>";
							}
							else {
								echo "<h1>|*|*|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|*|*|</h1>";
								echo "<h3>|*|*|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|*|*|</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|**||Form Checklist Line 4 ($tgl) Berhasil Disimpan||**|*|</h1>";
								echo "<h3>|*|**||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||**|*|</h3>";
							}
							else {
								echo "<h1>|*|**|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|**|*|</h1>";
								echo "<h3>|*|**|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|**|*|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*|***|Form Checklist Line 4 ($tgl) Berhasil Disimpan|***|*|</h1>";
								echo "<h3>|*|***|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|***|*|</h3>";
							}
							else {
								echo "<h1>|*|****Form Checklist Line 4 ($tgl) Gagal Disimpan****|*|</h1>";
								echo "<h3>|*|****Tidak Dapat Input Data Pada Tanggal Yang Sama****|*|</h3>";
							}	
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|**||||Form Checklist Line 4 ($tgl) Gagal Disimpan||||**|</h1>";
								echo "<h3>|**||||Tidak Dapat Input Data Pada Tanggal Yang Sama||||**|</h3>";
							}
							else {
								echo "<h1>|**|||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*|||**|</h1>";
								echo "<h3>|**|||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*|||**|</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|**||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*||**|</h1>";
								echo "<h3>|**||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*||**|</h3>";
							}
							else {
								echo "<h1>|**||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**||**|</h1>";
								echo "<h3>|**||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**||**|</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|**|**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**|**|</h1>";
								echo "<h3>|**|**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**|**|</h3>";
							}
							else {
								echo "<h1>|**|***Form Checklist Line 4 ($tgl) Gagal Disimpan***|**|</h1>";
								echo "<h3>|**|***Tidak Dapat Input Data Pada Tanggal Yang Sama***|**|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|**|*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*|**|</h1>";
								echo "<h3>|**|*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*|**|</h3>";
							}
							else {
								echo "<h1>|**|*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*|**|</h1>";
								echo "<h3>|**|*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*|**|</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|***|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||***|</h1>";
								echo "<h3>|***|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||***|</h3>";
							}
							else {
								echo "<h1>|***||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||***|</h1>";
								echo "<h3>|***||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||***|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|***|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|***|</h1>";
								echo "<h3>|***|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|***|</h3>";
							}
							else {
								echo "<h1>|***|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|***|</h1>";
								echo "<h3>|***|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|***|</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|****||Form Checklist Line 4 ($tgl) Berhasil Disimpan||****|</h1>";
								echo "<h3>|****||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||****|</h3>";
							}
							else {
								echo "<h1>|****|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|****|</h1>";
								echo "<h3>|****|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|****|</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>|*****|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*****|</h1>";
								echo "<h3>|*****|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*****|</h3>";
							}
							else {
								echo "<h1>|******Form Checklist Line 4 ($tgl) Gagal Disimpan******|</h1>";
								echo "<h3>|******Tidak Dapat Input Data Pada Tanggal Yang Sama******|</h3>";
							}	
						}
					}
				}
			}
		}
	}
	else{
		$insert5 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek5','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
		if(!$insert5){
			$insert4 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek4','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||||||Form Checklist Line 4 ($tgl) Gagal Disimpan||||||*</h1>";
								echo "<h3>*||||||Tidak Dapat Input Data Pada Tanggal Yang Sama||||||*</h3>";
							}
							else {
								echo "<h1>*|||||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*|||||*</h1>";
								echo "<h3>*|||||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*|||||*</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*||||*</h1>";
								echo "<h3>*||||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*||||*</h3>";
							}
							else {
								echo "<h1>*||||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**||||*</h1>";
								echo "<h3>*||||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**||||*</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|||**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**|||*</h1>";
								echo "<h3>*|||**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**|||*</h3>";
							}
							else {
								echo "<h1>*|||***Form Checklist Line 4 ($tgl) Gagal Disimpan***|||*</h1>";
								echo "<h3>*|||***Tidak Dapat Input Data Pada Tanggal Yang Sama***|||*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|||*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*|||*</h1>";
								echo "<h3>*|||*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*|||*</h3>";
							}
							else {
								echo "<h1>*|||*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*|||*</h1>";
								echo "<h3>*|||*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*|||*</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||*|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||*||*</h1>";
								echo "<h3>*||*|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||*||*</h3>";
							}
							else {
								echo "<h1>*||*||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||*||*</h1>";
								echo "<h3>*||*||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||*||*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||*|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|*||*</h1>";
								echo "<h3>*||*|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|*||*</h3>";
							}
							else {
								echo "<h1>*||*|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|*||*</h1>";
								echo "<h3>*||*|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|*||*</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||**||Form Checklist Line 4 ($tgl) Berhasil Disimpan||**||*</h1>";
								echo "<h3>*||**||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||**||*</h3>";
							}
							else {
								echo "<h1>*||**|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|**||*</h1>";
								echo "<h3>*||**|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|**||*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*||***|Form Checklist Line 4 ($tgl) Berhasil Disimpan|***||*</h1>";
								echo "<h3>*||***|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|***||*</h3>";
							}
							else {
								echo "<h1>*||****Form Checklist Line 4 ($tgl) Gagal Disimpan****||*</h1>";
								echo "<h3>*||****Tidak Dapat Input Data Pada Tanggal Yang Sama****||*</h3>";
							}	
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|*||||Form Checklist Line 4 ($tgl) Gagal Disimpan||||*|*</h1>";
								echo "<h3>*|*||||Tidak Dapat Input Data Pada Tanggal Yang Sama||||*|*</h3>";
							}
							else {
								echo "<h1>*|*|||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*|||*|*</h1>";
								echo "<h3>*|*|||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*|||*|*</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|*||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*||*|*</h1>";
								echo "<h3>*|*||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*||*|*</h3>";
							}
							else {
								echo "<h1>*|*||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**||*|*</h1>";
								echo "<h3>*|*||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**||*|*</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|*|**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**|*|*</h1>";
								echo "<h3>*|*|**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**|*|*</h3>";
							}
							else {
								echo "<h1>*|*|***Form Checklist Line 4 ($tgl) Gagal Disimpan***|*|*</h1>";
								echo "<h3>*|*|***Tidak Dapat Input Data Pada Tanggal Yang Sama***|*|*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|*|*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*|*|*</h1>";
								echo "<h3>*|*|*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*|*|*</h3>";
							}
							else {
								echo "<h1>*|*|*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*|*|*</h1>";
								echo "<h3>*|*|*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*|*|*</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|**|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||**|*</h1>";
								echo "<h3>*|**|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||**|*</h3>";
							}
							else {
								echo "<h1>*|**||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||**|*</h1>";
								echo "<h3>*|**||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||**|*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|**|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|**|*</h1>";
								echo "<h3>*|**|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|**|*</h3>";
							}
							else {
								echo "<h1>*|**|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|**|*</h1>";
								echo "<h3>*|**|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|**|*</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|***||Form Checklist Line 4 ($tgl) Berhasil Disimpan||***|*</h1>";
								echo "<h3>*|***||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||***|*</h3>";
							}
							else {
								echo "<h1>*|***|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|***|*</h1>";
								echo "<h3>*|***|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|***|*</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*|****|Form Checklist Line 4 ($tgl) Berhasil Disimpan|****|*</h1>";
								echo "<h3>*|****|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|****|*</h3>";
							}
							else {
								echo "<h1>*|*****Form Checklist Line 4 ($tgl) Gagal Disimpan*****|*</h1>";
								echo "<h3>*|*****Tidak Dapat Input Data Pada Tanggal Yang Sama*****|*</h3>";
							}	
						}
					}
				}
			}
		}
		else{
			$insert4 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek4','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|||||Form Checklist Line 4 ($tgl) Gagal Disimpan|||||**</h1>";
								echo "<h3>**|||||Tidak Dapat Input Data Pada Tanggal Yang Sama|||||**</h3>";
							}
							else {
								echo "<h1>**||||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*||||**</h1>";
								echo "<h3>**||||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*||||**</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*|||**</h1>";
								echo "<h3>**|||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*|||**</h3>";
							}
							else {
								echo "<h1>**|||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**|||**</h1>";
								echo "<h3>**|||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**|||**</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**||**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**||**</h1>";
								echo "<h3>**||**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**||**</h3>";
							}
							else {
								echo "<h1>**||***Form Checklist Line 4 ($tgl) Gagal Disimpan***||**</h1>";
								echo "<h3>**||***Tidak Dapat Input Data Pada Tanggal Yang Sama***||**</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**||*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*||**</h1>";
								echo "<h3>**||*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*||**</h3>";
							}
							else {
								echo "<h1>**||*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*||**</h1>";
								echo "<h3>**||*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*||**</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|*|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||*|**</h1>";
								echo "<h3>**|*|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||*|**</h3>";
							}
							else {
								echo "<h1>**|*||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||*|**</h1>";
								echo "<h3>**|*||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||*|**</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|*|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|*|**</h1>";
								echo "<h3>**|*|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|*|**</h3>";
							}
							else {
								echo "<h1>**|*|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|*|**</h1>";
								echo "<h3>**|*|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|*|**</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|**||Form Checklist Line 4 ($tgl) Berhasil Disimpan||**|**</h1>";
								echo "<h3>**|**||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||**|**</h3>";
							}
							else {
								echo "<h1>**|**|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|**|**</h1>";
								echo "<h3>**|**|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|**|**</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>**|***|Form Checklist Line 4 ($tgl) Berhasil Disimpan|***|**</h1>";
								echo "<h3>**|***|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|***|**</h3>";
							}
							else {
								echo "<h1>**|****Form Checklist Line 4 ($tgl) Gagal Disimpan****|**</h1>";
								echo "<h3>**|****Tidak Dapat Input Data Pada Tanggal Yang Sama****|**</h3>";
							}	
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
				if(!$insert3){		
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>***||||Form Checklist Line 4 ($tgl) Gagal Disimpan||||***</h1>";
								echo "<h3>***||||Tidak Dapat Input Data Pada Tanggal Yang Sama||||***</h3>";
							}
							else {
								echo "<h1>***|||*Form Checklist Line 4 ($tgl) Berhasil Disimpan*|||***</h1>";
								echo "<h3>***|||*Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama*|||***</h3>";
							}							
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>***||*|Form Checklist Line 4 ($tgl) Gagal Disimpan|*||***</h1>";
								echo "<h3>***||*|Tidak Dapat Input Data Pada Tanggal Yang Sama|*||***</h3>";
							}
							else {
								echo "<h1>***||**Form Checklist Line 4 ($tgl) Berhasil Disimpan**||***</h1>";
								echo "<h3>***||**Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama**||***</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>***|**|Form Checklist Line 4 ($tgl) Berhasil Disimpan|**|***</h1>";
								echo "<h3>***|**|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|**|***</h3>";
							}
							else {
								echo "<h1>***|***Form Checklist Line 4 ($tgl) Gagal Disimpan***|***</h1>";
								echo "<h3>***|***Tidak Dapat Input Data Pada Tanggal Yang Sama***|***</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>***|*||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*|***</h1>";
								echo "<h3>***|*||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*|***</h3>";
							}
							else {
								echo "<h1>***|*|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*|***</h1>";
								echo "<h3>***|*|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*|***</h3>";
							}	
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek2','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>****|||Form Checklist Line 4 ($tgl) Berhasil Disimpan|||****</h1>";
								echo "<h3>****|||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|||****</h3>";
							}
							else {
								echo "<h1>****||*Form Checklist Line 4 ($tgl) Gagal Disimpan*||****</h1>";
								echo "<h3>****||*Tidak Dapat Input Data Pada Tanggal Yang Sama*||****</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>****|*|Form Checklist Line 4 ($tgl) Berhasil Disimpan|*|****</h1>";
								echo "<h3>****|*|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|*|****</h3>";
							}
							else {
								echo "<h1>****|**Form Checklist Line 4 ($tgl) Gagal Disimpan**|****</h1>";
								echo "<h3>****|**Tidak Dapat Input Data Pada Tanggal Yang Sama**|****</h3>";
							}	
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$cek1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>*****||Form Checklist Line 4 ($tgl) Berhasil Disimpan||*****</h1>";
								echo "<h3>*****||Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama||*****</h3>";
							}
							else {
								echo "<h1>*****|*Form Checklist Line 4 ($tgl) Gagal Disimpan*|*****</h1>";
								echo "<h3>*****|*Tidak Dapat Input Data Pada Tanggal Yang Sama*|*****</h3>";
							}	
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_4 VALUES('$tanggal','$nama','$vmde[0]','$vmndea[0]','$vmnder[0]','$vpde[0]','$vpndea[0]','$vpnder[0]','$tempm[0]','$tempp[0]','$arus[0]','$ket[0]','$vmde[1]','$vmndea[1]','$vmnder[1]','$vpde[1]','$vpndea[1]','$vpnder[1]','$tempm[1]','$tempp[1]','$arus[1]','$ket[1]','$vmde[2]','$vmndea[2]','$vmnder[2]','$vpde[2]','$vpndea[2]','$vpnder[2]','$tempm[2]','$tempp[2]','$arus[2]','$ket[2]','$vmde[3]','$vmndea[3]','$vmnder[3]','$vpde[3]','$vpndea[3]','$vpnder[3]','$tempm[3]','$tempp[3]','$arus[3]','$ket[3]')");
							if(!$insert){
								echo "<h1>******|Form Checklist Line 4 ($tgl) Berhasil Disimpan|******</h1>";
								echo "<h3>******|Data Dapat Dilihat Di Menu Review Tabel Pada Halaman Utama|******</h3>";
							}
							else {
								echo "<h1>*******Form Checklist Line 4 ($tgl) Gagal Disimpan*******</h1>";
								echo "<h3>*******Tidak Dapat Input Data Pada Tanggal Yang Sama*******</h3>";
							}	
						}
					}
				}
			}
		}
	}
}
else{
echo "Proses Salah";
}
?>

<form method="POST" action="index.php">
<br><input type="submit" name="index" value="Main Page">
</form>