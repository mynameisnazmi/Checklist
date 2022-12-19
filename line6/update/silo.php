<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
	"Big_Bag_Blow_Stat_Fan_1_VMDE",
	"Big_Bag_Blow_Stat_Fan_1_VMNDEA ",
	"Big_Bag_Blow_Stat_Fan_1_VMNDER",
	"Big_Bag_Blow_Stat_Fan_1_TempM",
	"Big_Bag_Blow_Stat_Fan_1_ArusR",
	"Big_Bag_Blow_Stat_Fan_1_ArusS",
	"Big_Bag_Blow_Stat_Fan_1_ArusT",
	"Big_Bag_Blow_Stat_Fan_1_Ket ",
	"Big_Bag_Rotary_Valve_1_VMDE",
	"Big_Bag_Rotary_Valve_1_VMNDEA ",
	"Big_Bag_Rotary_Valve_1_VMNDER",
	"Big_Bag_Rotary_Valve_1_TempM",
	"Big_Bag_Rotary_Valve_1_ArusR",
	"Big_Bag_Rotary_Valve_1_ArusS",
	"Big_Bag_Rotary_Valve_1_ArusT",
	"Big_Bag_Rotary_Valve_1_Ket ",
	"Silo_Blow_Stat_Fan_1_VMDE",
	"Silo_Blow_Stat_Fan_1_VMNDEA ",
	"Silo_Blow_Stat_Fan_1_VMNDER",
	"Silo_Blow_Stat_Fan_1_TempM",
	"Silo_Blow_Stat_Fan_1_ArusR",
	"Silo_Blow_Stat_Fan_1_ArusS",
	"Silo_Blow_Stat_Fan_1_ArusT",
	"Silo_Blow_Stat_Fan_1_Ket ",
	"Rotary_Valve_1_VMDE",
	"Rotary_Valve_1_VMNDEA ",
	"Rotary_Valve_1_VMNDER",
	"Rotary_Valve_1_TempM",
	"Rotary_Valve_1_ArusR",
	"Rotary_Valve_1_ArusS",
	"Rotary_Valve_1_ArusT",
	"Rotary_Valve_1_Ket ",
	"Rotary_Valve_2_VMDE",
	"Rotary_Valve_2_VMNDEA ",
	"Rotary_Valve_2_VMNDER",
	"Rotary_Valve_2_TempM",
	"Rotary_Valve_2_ArusR",
	"Rotary_Valve_2_ArusS",
	"Rotary_Valve_2_ArusT",
	"Rotary_Valve_2_Ket ",
	"Rotary_Valve_3_VMDE",
	"Rotary_Valve_3_VMNDEA ",
	"Rotary_Valve_3_VMNDER",
	"Rotary_Valve_3_TempM",
	"Rotary_Valve_3_ArusR",
	"Rotary_Valve_3_ArusS",
	"Rotary_Valve_3_ArusT",
	"Rotary_Valve_3_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_silo SET
				$arr[$i] = '$data[$i]' WHERE Tanggal = '$date';");
				if($len == 47 AND $insert == true){
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

		