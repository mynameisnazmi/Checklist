<html>
    <head>
        <title>Review Trend</title>
        <script src="Chart.js/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
	
	<center><table border = 1 width = 500>
	<img width=300 height=100 src='arghakarya.jpg' />
	<?php
		echo"<h1>Trend Checklist Electrical Line 4</h1>";
	
		include ('4.koneksi.php');

		$hari1 = $_POST['Hari1'];
		$bulan1 = $_POST['Bulan1'];
		$tahun1 = $_POST['Tahun1'];
		$hari2 = $_POST['Hari2'];
		$bulan2 = $_POST['Bulan2'];
		$tahun2 = $_POST['Tahun2'];
		
		echo"<h3>Date : From $hari1-$bulan1-$tahun1 Until $hari2-$bulan2-$tahun2 </h3>";
		
		// Fetch the data
		$query = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
		$result = mysql_query($query);
		
		$item = $_POST['Item'];
		$parameter = $_POST['Parameter'];
		
		//query sama query 1 untuk data pada grafik
		//query2 sama query 3 untuk data pada tabel
		
		if($item == 'Ex Dosing 1'){
			echo"<center>$item</center>";
			if($parameter == 'VMDE'){
				$query1 = "SELECT Ex_Dos_1_VMDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VMDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor DE</center>";
			}
			elseif($parameter == 'VMNDEA'){
				$query1 = "SELECT Ex_Dos_1_VMNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VMNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Axial</center>";
			}
			elseif($parameter == 'VMNDER'){
				$query1 = "SELECT Ex_Dos_1_VMNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VMNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Radial</center>";
			}
			elseif($parameter == 'VPDE'){
				$query1 = "SELECT Ex_Dos_1_VPDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VPDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa DE</center>";
			}
			elseif($parameter == 'VPNDEA'){
				$query1 = "SELECT Ex_Dos_1_VPNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VPNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Axial</center>";
			}
			elseif($parameter == 'VPNDER'){
				$query1 = "SELECT Ex_Dos_1_VPNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_VPNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Radial</center>";
			}
			elseif($parameter == 'TempM'){
				$query1 = "SELECT Ex_Dos_1_TempM as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_TempM as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Motor</center>";
			}
			elseif($parameter == 'TempP'){
				$query1 = "SELECT Ex_Dos_1_TempP as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_TempP as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Pompa</center>";
			}
			elseif($parameter == 'Arus'){
				$query1 = "SELECT Ex_Dos_1_Arus as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Dos_1_Arus as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Arus</center>";
			}
		}
		
		elseif($item == 'Ex Blower Transfer Material'){
			echo"<center>$item</center>";
			if($parameter == 'VMDE'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VMDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VMDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor DE</center>";
			}
			elseif($parameter == 'VMNDEA'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VMNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VMNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Axial</center>";
			}
			elseif($parameter == 'VMNDER'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VMNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VMNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Radial</center>";
			}
			elseif($parameter == 'VPDE'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VPDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VPDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa DE</center>";
			}
			elseif($parameter == 'VPNDEA'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VPNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VPNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Axial</center>";
			}
			elseif($parameter == 'VPNDER'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_VPNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_VPNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Radial</center>";
			}
			elseif($parameter == 'TempM'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_TempM as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_TempM as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Motor</center>";
			}
			elseif($parameter == 'TempP'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_TempP as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_TempP as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Pompa</center>";
			}
			elseif($parameter == 'Arus'){
				$query1 = "SELECT Ex_Blow_Trf_Mat_Arus as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Ex_Blow_Trf_Mat_Arus as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Arus</center>";
			}
		}
		
		elseif($item == 'Material Dosing Unit (MDU Mixer)'){
			echo"<center>$item</center>";
			if($parameter == 'VMDE'){
				$query1 = "SELECT Mat_Dos_Unit_VMDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VMDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor DE</center>";
			}
			elseif($parameter == 'VMNDEA'){
				$query1 = "SELECT Mat_Dos_Unit_VMNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VMNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Axial</center>";
			}
			elseif($parameter == 'VMNDER'){
				$query1 = "SELECT Mat_Dos_Unit_VMNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VMNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Radial</center>";
			}
			elseif($parameter == 'VPDE'){
				$query1 = "SELECT Mat_Dos_Unit_VPDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VPDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa DE</center>";
			}
			elseif($parameter == 'VPNDEA'){
				$query1 = "SELECT Mat_Dos_Unit_VPNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VPNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Axial</center>";
			}
			elseif($parameter == 'VPNDER'){
				$query1 = "SELECT Mat_Dos_Unit_VPNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_VPNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Radial</center>";
			}
			elseif($parameter == 'TempM'){
				$query1 = "SELECT Mat_Dos_Unit_TempM as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_TempM as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Motor</center>";
			}
			elseif($parameter == 'TempP'){
				$query1 = "SELECT Mat_Dos_Unit_TempP as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_TempP as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Pompa</center>";
			}
			elseif($parameter == 'Arus'){
				$query1 = "SELECT Mat_Dos_Unit_Arus as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Mat_Dos_Unit_Arus as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Arus</center>";
			}
		}
			
		elseif($item == 'Blower Transfer Material'){
			echo"<center>$item</center>";
			if($parameter == 'VMDE'){
				$query1 = "SELECT Blow_Trf_Mat_VMDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VMDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor DE</center>";
			}
			elseif($parameter == 'VMNDEA'){
				$query1 = "SELECT Blow_Trf_Mat_VMNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VMNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Axial</center>";
			}
			elseif($parameter == 'VMNDER'){
				$query1 = "SELECT Blow_Trf_Mat_VMNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VMNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Motor NDE Radial</center>";
			}
			elseif($parameter == 'VPDE'){
				$query1 = "SELECT Blow_Trf_Mat_VPDE as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VPDE as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa DE</center>";
			}
			elseif($parameter == 'VPNDEA'){
				$query1 = "SELECT Blow_Trf_Mat_VPNDEA as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VPNDEA as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Axial</center>";
			}
			elseif($parameter == 'VPNDER'){
				$query1 = "SELECT Blow_Trf_Mat_VPNDER as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_VPNDER as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Vibrasi Pompa NDE Radial</center>";
			}
			elseif($parameter == 'TempM'){
				$query1 = "SELECT Blow_Trf_Mat_TempM as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_TempM as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Motor</center>";
			}
			elseif($parameter == 'TempP'){
				$query1 = "SELECT Blow_Trf_Mat_TempP as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_TempP as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Temperature Pompa</center>";
			}
			elseif($parameter == 'Arus'){
				$query1 = "SELECT Blow_Trf_Mat_Arus as itemdb FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result1 = mysql_query($query1);
				$query2 = "SELECT Tanggal FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2' ";
				$result2 = mysql_query($query2);
				$query3 = "SELECT Blow_Trf_Mat_Arus as itemdb1 FROM `form_checklist_line_4` WHERE Tanggal>='$tahun1-$bulan1-$hari1' AND Tanggal<='$tahun2-$bulan2-$hari2'";
				$result3 = mysql_query($query3);
				echo"<center><br>Arus</center>";
			}
		}
		
		else{
			echo"Item Tidak Ditemukan";
		}

		if ( !$result OR !$result1 ) {
		  die( 'error' );
		}

		echo "
			<center><th>Tanggal</th>
			";
		
		$i=0;
		while($data = mysql_fetch_array($result2))
		{
			echo "
			<th>".$data['Tanggal']."</th>
			";
			$i++;
		}
		echo "
			<tr><br></tr>
			";
					
		echo "
			<th>Value</th>
			";
			
		$k=0;
		while($data1 = mysql_fetch_array($result3))
		{
			echo "
			<th>".$data1['itemdb1']."</th>
			";
			$k++;
		}
	?>
	</table></center>
	
        <div class="container">
            <canvas id="myChart" width="100" height="75"></canvas>
        </div>
		
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
					<?php
						if (!empty($result)) {
                        while ($b = mysql_fetch_array($result)) { echo '"' . $b['Tanggal'] . '",';} 
						}
					?>
					],
                    datasets: [{
							label: 'data',
                            data: [
							<?php
								if (!empty($result1)) {
								while ($p = mysql_fetch_array($result1)) { echo '"' . $p['itemdb'] . '",';} 
								}
							?>
							],
							fill: false,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		
		<form method="POST" action="index.php">
		<center><input type="submit" name="index" value="Main Page"></center>
		</form>
		
    </body>
</html>