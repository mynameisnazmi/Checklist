<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
	"Fan_Cool_Exh_Top_VMDE",
	"Fan_Cool_Exh_Top_VMNDEA",
	"Fan_Cool_Exh_Top_VMNDER",
	"Fan_Cool_Exh_Top_TempM",
	"Fan_Cool_Exh_Top_ArusR",
	"Fan_Cool_Exh_Top_ArusS",
	"Fan_Cool_Exh_Top_ArusT",
	"Fan_Cool_Exh_Top_Ket",
	"Fan_Cool_Exh_Top_1_VMDE",
	"Fan_Cool_Exh_Top_1_VMNDEA",
	"Fan_Cool_Exh_Top_1_VMNDER",
	"Fan_Cool_Exh_Top_1_TempM",
	"Fan_Cool_Exh_Top_1_ArusR",
	"Fan_Cool_Exh_Top_1_ArusS",
	"Fan_Cool_Exh_Top_1_ArusT",
	"Fan_Cool_Exh_Top_1_Ket",
	"Airing_Fan_1_VMDE",
	"Airing_Fan_1_VMNDEA",
	"Airing_Fan_1_VMNDER",
	"Airing_Fan_1_TempM",
	"Airing_Fan_1_ArusR",
	"Airing_Fan_1_ArusS",
	"Airing_Fan_1_ArusT",
	"Airing_Fan_1_Ket",
	"Airing_Supply_Fan_1_VMDE",
	"Airing_Supply_Fan_1_VMNDEA",
	"Airing_Supply_Fan_1_VMNDER",
	"Airing_Supply_Fan_1_TempM",
	"Airing_Supply_Fan_1_ArusR",
	"Airing_Supply_Fan_1_ArusS",
	"Airing_Supply_Fan_1_ArusT",
	"Airing_Supply_Fan_1_Ket",
	"Airing_Fan_Exh_Neu_VMDE",
	"Airing_Fan_Exh_Neu_VMNDEA",
	"Airing_Fan_Exh_Neu_VMNDER",
	"Airing_Fan_Exh_Neu_TempM",
	"Airing_Fan_Exh_Neu_ArusR",
	"Airing_Fan_Exh_Neu_ArusS",
	"Airing_Fan_Exh_Neu_ArusT",
	"Airing_Fan_Exh_Neu_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_as SET
				$arr[$i] = '$data[$i]' WHERE Tanggal = '$date';");
				if($len == 39 AND $insert == true){
					header("Location:../checklist/index.php");
				}
				else{
					echo "ERROR";
				}
	}
	
}	
else{
	echo "Proses Salah";
}
?>

		