<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
	"Main_Ext_VMDE",
	"Main_Ext_VMNDEA",
	"Main_Ext_VMNDER",
	"Main_Ext_TempM",
	"Main_Ext_ArusR",
	"Main_Ext_ArusS",
	"Main_Ext_ArusT",
	"Main_Ext_Ket ",
	"Melt_Pump_VMDE",
	"Melt_Pump_VMNDEA",
	"Melt_Pump_VMNDER",
	"Melt_Pump_TempM",
	"Melt_Pump_ArusR",
	"Melt_Pump_ArusS",
	"Melt_Pump_ArusT",
	"Melt_Pump_Ket ",
	"Co_Ext_1_VMDE",
	"Co_Ext_1_VMNDEA",
	"Co_Ext_1_VMNDER",
	"Co_Ext_1_TempM",
	"Co_Ext_1_ArusR",
	"Co_Ext_1_ArusS",
	"Co_Ext_1_ArusT",
	"Co_Ext_1_Ket ",
	"Co_Ext_2_VMDE",
	"Co_Ext_2_VMNDEA",
	"Co_Ext_2_VMNDER",
	"Co_Ext_2_TempM",
	"Co_Ext_2_ArusR",
	"Co_Ext_2_ArusS",
	"Co_Ext_2_ArusT",
	"Co_Ext_2_Ket ");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_ext SET
				$arr[$i] = '$data[$i]' WHERE Tanggal = '$date';");
				if($len == 31 AND $insert == true){
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

		