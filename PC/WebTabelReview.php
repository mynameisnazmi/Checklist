<html>
<body>
	
<?php 
	include '../PC/koneksi.php';
	session_start();
	$Perintah = $_POST['perintah'];
	$Cek = $_SESSION["level"];
	
	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];
	
	//fungsi untuk check spv
	$query = mysql_query("SELECT * FROM `form_checklist_line_2_rawmaterial` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_array($query);
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_3_rawmaterial` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data1 = mysql_fetch_array($query1);
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_4_resinsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data2 = mysql_fetch_array($query2);
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_5_resinsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data3 = mysql_fetch_array($query3);
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_6_casting` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data4 = mysql_fetch_array($query4);
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_7_casting` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data5 = mysql_fetch_array($query5);
	/*$query6 = mysql_query("SELECT * FROM `form_checklist_line_PET` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data6 = mysql_fetch_array($query6);*/
		
	if($Perintah == 'ReviewTabel'){
		$Line = $_POST['line'];
		if($Line == 'Line 2'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '43'){
					if($data[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine2.php";
						
					}
					else{
						include "../PC/WebTampilanLine2Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine2.php";
				}
			}	
		}
		elseif($Line == 'Line 3'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '43'){
					if($data1[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine3.php";
						
					}
					else{
						include "../PC/WebTampilanLine3Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine3.php";
				}
			}	
		}
		elseif($Line == 'Line 4'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '45'){
					if($data2[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine4.php";
						
					}
					else{
						include "../PC/WebTampilanLine4Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine4.php";
				}
			}
		}
		elseif($Line == 'Line 5'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '45'){
					if($data3[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine5.php";
						
					}
					else{
						include "../PC/WebTampilanLine5Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine5.php";
				}
			}
		}
		elseif($Line == 'Line 6'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '47'){
					if($data4[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine6.php";
						
					}
					else{
						include "../PC/WebTampilanLine6Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine6.php";
				}
			}
		}
		elseif($Line == 'Line 7'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '47'){
					if($data5[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "../PC/WebTampilanLine7.php";
						
					}
					else{
						include "../PC/WebTampilanLine7Supervisor.php";
					}	
				}
				else{
					include "../PC/WebTampilanLine7.php";
				}
			}
		}		
	}
	elseif(empty($Perintah)){
		echo"<h1>Anda Belum Memilih Perintah</h1>";
		echo"<a href='../MainPagePC.php'>Kembali Ke Main Page</a>";
	}
?>

</body>
</html>