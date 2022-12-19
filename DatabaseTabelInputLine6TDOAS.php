<?php
if(isset($_POST['submit'])){
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
	
	$insert6 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek6','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
	'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
	");
	if(!$insert6){
		$insert5 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek5','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
		");
		if(!$insert5){
			$insert4 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek4','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
			");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
		}
		else{
			$insert4 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek4','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
			");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
		}
	}
	else{
		$insert5 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek5','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
		'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
		");
		if(!$insert5){
			$insert4 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek4','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
			");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
		}
		else{
			$insert4 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek4','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
			'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
			");
			if(!$insert4){
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
			}
			else{
				$insert3 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek3','',
				''','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
				'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
				");
				if(!$insert3){						
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
				}
				else{
					$insert2 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek2','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
					'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
					");
					if(!$insert2){	
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
					}
					else{
						$insert1 = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES('$cek1','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
						'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')
						");
						if(!$insert1){
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
							}
						}
						else{
							$insert = mysql_query("INSERT INTO form_checklist_line_6_tdoas VALUES
							('$tanggal','$nama',
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
							'$vmde[39]','$vmndea[39]','$vmnder[39]','$tempm[39]','$arusr[39]','$aruss[39]','$arust[39]','$ket[39]')
							");
							if(!$insert){
										echo "<h1><script>alert('Form Checklist Line 6 TDO Air Shower ($tgl) Gagal Disimpan');</script></h1>";
	echo "<h2><script>alert('Tidak Dapat Input Data Pada Tanggal Yang Sama');
		location.href='MainPageTab.php';</script></h2>";
							}
							else {
								include "WebTabelLine6Pullroll.php";
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