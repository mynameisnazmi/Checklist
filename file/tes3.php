<?php
	//echo "<br>Proses Benar</br>";
	include 'koneksi.php';
	session_start();

	$nama=$_SESSION["nama"];
	$vmde=$_POST['VMDE'];
	$vmndea=$_POST['VMNDEA'];
	$vmnder=$_POST['VMNDER'];
	$tempm=$_POST['TempM'];
	$arusr=$_POST['ArusR'];
	$aruss=$_POST['ArusS'];
	$arust=$_POST['ArusT'];
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
	
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdo VALUES
							('$tanggal','$nama','','','',
							'$vmde[0]','$vmndea[0]','$vmnder[0]','$tempm[0]','$arusr[0]','$aruss[0]','$arust[0]','$ket[0]',
							'$vmde[1]','$vmndea[1]','$vmnder[1]','$tempm[1]','$arusr[1]','$aruss[1]','$arust[1]','$ket[1]',
							'$vmde[2]','$vmndea[2]','$vmnder[2]','$tempm[2]','$arusr[2]','$aruss[2]','$arust[2]','$ket[2]',
							'$vmde[3]','$vmndea[3]','$vmnder[3]','$tempm[3]','$arusr[3]','$aruss[3]','$arust[3]','$ket[3]',
							'$vmde[4]','$vmndea[4]','$vmnder[4]','$tempm[4]','$arusr[4]','$aruss[4]','$arust[4]','$ket[4]',
							'$vmde[5]','$vmndea[5]','$vmnder[5]','$tempm[5]','$arusr[5]','$aruss[5]','$arust[5]','$ket[5]',
							'$vmde[6]','$vmndea[6]','$vmnder[6]','$tempm[6]','$arusr[6]','$aruss[6]','$arust[6]','$ket[6]',
							'$vmde[7]','$vmndea[7]','$vmnder[7]','$tempm[7]','$arusr[7]','$aruss[7]','$arust[7]','$ket[7]',
							'$vmde[8]','$vmndea[8]','$vmnder[8]','$tempm[8]','$arusr[8]','$aruss[8]','$arust[8]','$ket[8]',
							'$vmde[9]','$vmndea[9]','$vmnder[9]','$tempm[9]','$arusr[9]','$aruss[9]','$arust[9]','$ket[9]',
							'$vmde[10]','$vmndea[10]','$vmnder[10]','$tempm[10]','$arusr[10]','$aruss[10]','$arust[10]','$ket[10]',
							'$vmde[11]','$vmndea[11]','$vmnder[11]','$tempm[11]','$arusr[11]','$aruss[11]','$arust[11]','$ket[11]',
							'$vmde[12]','$vmndea[12]','$vmnder[12]','$tempm[12]','$arusr[12]','$aruss[12]','$arust[12]','$ket[12]',
							'$vmde[13]','$vmndea[13]','$vmnder[13]','$tempm[13]','$arusr[13]','$aruss[13]','$arust[13]','$ket[13]',
							'$vmde[14]','$vmndea[14]','$vmnder[14]','$tempm[14]','$arusr[14]','$aruss[14]','$arust[14]','$ket[14]',
							'$vmde[15]','$vmndea[15]','$vmnder[15]','$tempm[15]','$arusr[15]','$aruss[15]','$arust[15]','$ket[15]',
							'$vmde[16]','$vmndea[16]','$vmnder[16]','$tempm[16]','$arusr[16]','$aruss[16]','$arust[16]','$ket[16]',
							'$vmde[17]','$vmndea[17]','$vmnder[17]','$tempm[17]','$arusr[17]','$aruss[17]','$arust[17]','$ket[17]',
							'$vmde[18]','$vmndea[18]','$vmnder[18]','$tempm[18]','$arusr[18]','$aruss[18]','$arust[18]','$ket[18]',
							'$vmde[19]','$vmndea[19]','$vmnder[19]','$tempm[19]','$arusr[19]','$aruss[19]','$arust[19]','$ket[19]',
							'$vmde[20]','$vmndea[20]','$vmnder[20]','$tempm[20]','$arusr[20]','$aruss[20]','$arust[20]','$ket[20]',
							'$vmde[21]','$vmndea[21]','$vmnder[21]','$tempm[21]','$arusr[21]','$aruss[21]','$arust[21]','$ket[21]',
							'$vmde[22]','$vmndea[22]','$vmnder[22]','$tempm[22]','$arusr[22]','$aruss[22]','$arust[22]','$ket[22]',
							'$vmde[23]','$vmndea[23]','$vmnder[23]','$tempm[23]','$arusr[23]','$aruss[23]','$arust[23]','$ket[23]',
							'$vmde[24]','$vmndea[24]','$vmnder[24]','$tempm[24]','$arusr[24]','$aruss[24]','$arust[24]','$ket[24]',
							'$vmde[25]','$vmndea[25]','$vmnder[25]','$tempm[25]','$arusr[25]','$aruss[25]','$arust[25]','$ket[25]',
							'$vmde[26]','$vmndea[26]','$vmnder[26]','$tempm[26]','$arusr[26]','$aruss[26]','$arust[26]','$ket[26]',
							'$vmde[27]','$vmndea[27]','$vmnder[27]','$tempm[27]','$arusr[27]','$aruss[27]','$arust[27]','$ket[27]',
							'$vmde[28]','$vmndea[28]','$vmnder[28]','$tempm[28]','$arusr[28]','$aruss[28]','$arust[28]','$ket[28]',
							'$vmde[29]','$vmndea[29]','$vmnder[29]','$tempm[29]','$arusr[29]','$aruss[29]','$arust[29]','$ket[29]',
							'$vmde[30]','$vmndea[30]','$vmnder[30]','$tempm[30]','$arusr[30]','$aruss[30]','$arust[30]','$ket[30]',
							'$vmde[31]','$vmndea[31]','$vmnder[31]','$tempm[31]','$arusr[31]','$aruss[31]','$arust[31]','$ket[31]',
							'$vmde[32]','$vmndea[32]','$vmnder[32]','$tempm[32]','$arusr[32]','$aruss[32]','$arust[32]','$ket[32]',
							'$vmde[33]','$vmndea[33]','$vmnder[33]','$tempm[33]','$arusr[33]','$aruss[33]','$arust[33]','$ket[33]',
							'$vmde[34]','$vmndea[34]','$vmnder[34]','$tempm[34]','$arusr[34]','$aruss[34]','$arust[34]','$ket[34]',
							'$vmde[35]','$vmndea[35]','$vmnder[35]','$tempm[35]','$arusr[35]','$aruss[35]','$arust[35]','$ket[35]',
							'$vmde[36]','$vmndea[36]','$vmnder[36]','$tempm[36]','$arusr[36]','$aruss[36]','$arust[36]','$ket[36]',
							'$vmde[37]','$vmndea[37]','$vmnder[37]','$tempm[37]','$arusr[37]','$aruss[37]','$arust[37]','$ket[37]',
							'$vmde[38]','$vmndea[38]','$vmnder[38]','$tempm[38]','$arusr[38]','$aruss[38]','$arust[38]','$ket[38]',
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]',
							'$vmde[40]','$vmndea[40]','$vmnder[40]','$tempm[40]','$arusr[40]','$aruss[40]','$arust[40]','$ket[40]',
							'$vmde[41]','$vmndea[41]','$vmnder[41]','$tempm[41]','$arusr[41]','$aruss[41]','$arust[41]','$ket[41]',
							'$vmde[42]','$vmndea[42]','$vmnder[42]','$tempm[42]','$arusr[42]','$aruss[42]','$arust[42]','$ket[42]',
							'$vmde[43]','$vmndea[43]','$vmnder[43]','$tempm[43]','$arusr[43]','$aruss[43]','$arust[43]','$ket[43]',
							'$vmde[44]','$vmndea[44]','$vmnder[44]','$tempm[44]','$arusr[44]','$aruss[44]','$arust[44]','$ket[44]',
							'$vmde[45]','$vmndea[45]','$vmnder[45]','$tempm[45]','$arusr[45]','$aruss[45]','$arust[45]','$ket[45]',
							'$vmde[46]','$vmndea[46]','$vmnder[46]','$tempm[46]','$arusr[46]','$aruss[46]','$arust[46]','$ket[46]',
							'$vmde[47]','$vmndea[47]','$vmnder[47]','$tempm[47]','$arusr[47]','$aruss[47]','$arust[47]','$ket[47]',
							'$vmde[48]','$vmndea[48]','$vmnder[48]','$tempm[48]','$arusr[48]','$aruss[48]','$arust[48]','$ket[48]',
							'$vmde[49]','$vmndea[49]','$vmnder[49]','$tempm[49]','$arusr[49]','$aruss[49]','$arust[49]','$ket[49]',
							'$vmde[50]','$vmndea[50]','$vmnder[50]','$tempm[50]','$arusr[50]','$aruss[50]','$arust[50]','$ket[50]',
							'$vmde[51]','$vmndea[51]','$vmnder[51]','$tempm[51]','$arusr[51]','$aruss[51]','$arust[51]','$ket[51]',
							'$vmde[52]','$vmndea[52]','$vmnder[52]','$tempm[52]','$arusr[52]','$aruss[52]','$arust[52]','$ket[52]',
							'$vmde[53]','$vmndea[53]','$vmnder[53]','$tempm[53]','$arusr[53]','$aruss[53]','$arust[53]','$ket[53]',
							'$vmde[54]','$vmndea[54]','$vmnder[54]','$tempm[54]','$arusr[54]','$aruss[54]','$arust[54]','$ket[54]',
							'$vmde[55]','$vmndea[55]','$vmnder[55]','$tempm[55]','$arusr[55]','$aruss[55]','$arust[55]','$ket[55]',
							'$vmde[56]','$vmndea[56]','$vmnder[56]','$tempm[56]','$arusr[56]','$aruss[56]','$arust[56]','$ket[56]',
							'$vmde[57]','$vmndea[57]','$vmnder[57]','$tempm[57]','$arusr[57]','$aruss[57]','$arust[57]','$ket[57]',
							'$vmde[58]','$vmndea[58]','$vmnder[58]','$tempm[58]','$arusr[58]','$aruss[58]','$arust[58]','$ket[58]',
							'$vmde[59]','$vmndea[59]','$vmnder[59]','$tempm[59]','$arusr[59]','$aruss[59]','$arust[59]','$ket[59]',
							'$vmde[60]','$vmndea[60]','$vmnder[60]','$tempm[60]','$arusr[60]','$aruss[60]','$arust[60]','$ket[60]',
							'$vmde[61]','$vmndea[61]','$vmnder[61]','$tempm[61]','$arusr[61]','$aruss[61]','$arust[61]','$ket[61]',
							'$vmde[62]','$vmndea[62]','$vmnder[62]','$tempm[62]','$arusr[62]','$aruss[62]','$arust[62]','$ket[62]',
							'$vmde[63]','$vmndea[63]','$vmnder[63]','$tempm[63]','$arusr[63]','$aruss[63]','$arust[63]','$ket[63]',
							'$vmde[64]','$vmndea[64]','$vmnder[64]','$tempm[64]','$arusr[64]','$aruss[64]','$arust[64]','$ket[64]',
							'$vmde[65]','$vmndea[65]','$vmnder[65]','$tempm[65]','$arusr[65]','$aruss[65]','$arust[65]','$ket[65]',
							'$vmde[66]','$vmndea[66]','$vmnder[66]','$tempm[66]','$arusr[66]','$aruss[66]','$arust[66]','$ket[66]',
							'$vmde[67]','$vmndea[67]','$vmnder[67]','$tempm[67]','$arusr[67]','$aruss[67]','$arust[67]','$ket[67]',
							'$vmde[68]','$vmndea[68]','$vmnder[68]','$tempm[68]','$arusr[68]','$aruss[68]','$arust[68]','$ket[68]',
							'$vmde[69]','$vmndea[69]','$vmnder[69]','$tempm[69]','$arusr[69]','$aruss[69]','$arust[69]','$ket[69]')
							");
							if(!$insert){
								echo "<h1>Form Checklist Line 6 TDO ($tgl) Gagal Disimpan</h1>";
								echo "<h3>Tidak Dapat Input Data Pada Tanggal Yang Sama</h3>";
								echo"<br><a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
							else {
								include "WebTabelLine6TDOAS.php";
							}
?>
<form method="POST" action="MainPageTab.php">
<input type="submit" name="MainPage" value="Main Page">
</form>