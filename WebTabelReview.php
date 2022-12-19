<html>
<body>
	
<?php 
	include 'koneksi.php';
	session_start();
	$Perintah = $_POST['perintah'];
	$Cek = $_SESSION["level"];
	$nama = $_SESSION['nama'];
	$hari = date('d');
	$bulan = date('m');
	$tahun =  date('Y');
	//fungsi untuk update
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


	$day = $_POST['Hari'];
	$mounth = $_POST['Bulan'];
	$year = $_POST['Tahun'];
	
	//fungsi untuk check spv
	$que = mysql_query("SELECT * FROM `form_checklist_line_2_rawmaterial` WHERE Tanggal='$year-$mounth-$day' ");
	$dat = mysql_fetch_array($que);
	$que1 = mysql_query("SELECT * FROM `form_checklist_line_3_rawmaterial` WHERE Tanggal='$$year-$mounth-$day' ");
	$dat1 = mysql_fetch_array($que1);
	$que2 = mysql_query("SELECT * FROM `form_checklist_line_4_resinsilo` WHERE Tanggal='$year-$mounth-$day' ");
	$dat2 = mysql_fetch_array($que2);
	$que3 = mysql_query("SELECT * FROM `form_checklist_line_5_resinsilo` WHERE Tanggal='$year-$mounth-$day' ");
	$dat3 = mysql_fetch_array($que3);
	$que4 = mysql_query("SELECT * FROM `form_checklist_line_6_casting` WHERE Tanggal='$year-$mounth-$day' ");
	$dat4 = mysql_fetch_array($que4);
	$que5 = mysql_query("SELECT * FROM `form_checklist_line_7_casting` WHERE Tanggal='$year-$mounth-$day' ");
	$dat5 = mysql_fetch_array($que5);
	/*$query6 = mysql_query("SELECT * FROM `form_checklist_line_PET` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data6 = mysql_fetch_array($query6);*/
		
	if($Perintah == 'Checklist'){
		$Line = $_POST['line'];
		if($Line == 'Line 2'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data[1] == $nama) {
						if($Cek == '43' OR $Cek == '0' OR $Cek == '11'){
							header("Location: ../checklist/ConfirmL2.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}
				elseif($Cek == '43' OR $Cek == '0' OR $Cek == '11'){
						include "WebTabelLine2RawMaterial.php";
					}
				else{
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
			}	
		}
		elseif($Line == 'Line 3'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data1[1] == $nama) {
						if($Cek == '43' OR $Cek == '0' OR $Cek == '11'){
							header("Location: ../checklist/ConfirmL3.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}
				elseif($Cek == '43' OR $Cek == '0' OR $Cek == '11'){
						include "WebTabelLine3RawMaterial.php";
					}
				else{
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
			}	
		}
		elseif($Line == 'Line 4'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data2[1] == $nama) {
						if($Cek == '45' OR $Cek == '0' OR $Cek == '12'){
							header("Location: ../checklist/ConfirmL4.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}
				elseif($Cek == '45' OR $Cek == '0' OR $Cek == '12'){
						include "WebTabelLine4resinsilo.php";
					}
				else{
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
			}	
		}
		elseif($Line == 'Line 5'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data3[1] == $nama) {
						if($Cek == '45' OR $Cek == '0' OR $Cek == '12'){
							header("Location: ../checklist/ConfirmL5.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}
				elseif($Cek == '45' OR $Cek == '0' OR $Cek == '12'){
						include "WebTabelLine5resinsilo.php";
					}
				else{
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
			}	
		}
		elseif($Line == 'Line 6'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data4[1] == $nama) {
						if($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
							header("Location: ../checklist/ConfirmL6.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}
				elseif($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
						include "WebTabelLine6Casting.php";
					}
				else{
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
			}	
		}
		elseif($Line == 'Line 7'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data5[1] == $nama) {
						if($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
							header("Location: ../checklist/ConfirmL7.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}

				elseif($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
						include "WebTabelLine7Casting.php";
				}
				else {
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
				
			}	
		}
		elseif($Line == 'PET'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if ($data5[1] == $nama) {
						if($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
							header("Location: ../checklist/PET.php");
							}
						else{
							echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
							}
					}

				elseif($Cek == '47' OR $Cek == '0' OR $Cek == '13'){
						include "WebTabelLinePET####.php";
				}
				else {
					echo"<a href='MainPageTab.php'>Kembali Ke Main Page</a>";
				}
				
			}	
		}
	}
	elseif($Perintah == 'ReviewTabel'){
		$Line = $_POST['line'];
		if($Line == 'Line 2'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '43'){
					if($dat[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine2.php";
						
					}
					else{
						include "WebTampilanLine2Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine2.php";
				}
			}	
		}
		elseif($Line == 'Line 3'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '43'){
					if($dat1[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine3.php";
						
					}
					else{
						include "WebTampilanLine3Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine3.php";
				}
			}
		}
		elseif($Line == 'Line 4'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '45'){
					if($dat2[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine4.php";
						
					}
					else{
						include "WebTampilanLine4Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine4.php";
				}
			}
		}
		elseif($Line == 'Line 5'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '45'){
					if($dat3[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine5.php";
						
					}
					else{
						include "WebTampilanLine5Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine5.php";
				}
			}
		}
		elseif($Line == 'Line 6'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '47'){
					if($dat4[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine6.php";
						
					}
					else{
						include "WebTampilanLine6Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine6.php";
				}
			}
		}
		elseif($Line == 'Line 7'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '47'){
					if($dat5[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLine7.php";
						
					}
					else{
						include "WebTampilanLine7Supervisor.php";
					}	
				}
				else{
					include "WebTampilanLine7.php";
				}
			}
		}
		elseif($Line == 'PET'){
			$Form = $_POST['form'];
			if($Form == 'Electrical'){
				if($Cek == '43'){
					if($dat1[2] == 'Check'){ //ubah array berdasarkan kolom status tabel database
						include "WebTampilanLinePET.php";
						
					}
					else{
						include "WebTampilanLinePETSupervisor.php";
					}	
				}
				else{
					include "WebTampilanLinePET.php";
				}
			}
		}		
	}
	elseif(empty($Perintah)){
		echo"<h1>Anda Belum Memilih Perintah</h1>";
		//include "4.WebTabelPilihForm.php;";
	}
?>

</body>
</html>