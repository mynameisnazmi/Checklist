<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
		"Motor_Grinder_VMDE ",
		"Motor_Grinder_VMNDEA",
		"Motor_Grinder_VMNDER",
		"Motor_Grinder_TempM",
		"Motor_Grinder_ArusR",
		"Motor_Grinder_ArusS",
		"Motor_Grinder_ArusT",
		"Motor_Grinder_Ket",
		"Conveying_Fan_1_VMDE ",
		"Conveying_Fan_1_VMNDEA",
		"Conveying_Fan_1_VMNDER",
		"Conveying_Fan_1_TempM",
		"Conveying_Fan_1_ArusR",
		"Conveying_Fan_1_ArusS",
		"Conveying_Fan_1_ArusT",
		"Conveying_Fan_1_Ket",
		"Conveying_Fan_2_VMDE ",
		"Conveying_Fan_2_VMNDEA",
		"Conveying_Fan_2_VMNDER",
		"Conveying_Fan_2_TempM",
		"Conveying_Fan_2_ArusR",
		"Conveying_Fan_2_ArusS",
		"Conveying_Fan_2_ArusT",
		"Conveying_Fan_2_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_biggrinder SET
				$arr[$i] = '$data[$i]' WHERE Tanggal = '$date';");
				if($len == 23 AND $insert == true){
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

		