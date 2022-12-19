<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
		"Motor_Ext_VMDE",
		"Motor_Ext_VMNDEA",
		"Motor_Ext_VMNDER",
		"Motor_Ext_TempM",
		"Motor_Ext_ArusR",
		"Motor_Ext_ArusS",
		"Motor_Ext_ArusT",
		"Motor_Ext_Ket",
		"Motor_Compactor_VMDE",
		"Motor_Compactor_VMNDEA",
		"Motor_Compactor_VMNDER",
		"Motor_Compactor_TempM",
		"Motor_Compactor_ArusR",
		"Motor_Compactor_ArusS",
		"Motor_Compactor_ArusT",
		"Motor_Compactor_Ket",
		"TF_Regran_VMDE",
		"TF_Regran_VMNDEA",
		"TF_Regran_VMNDER",
		"TF_Regran_TempM",
		"TF_Regran_ArusR",
		"TF_Regran_ArusS",
		"TF_Regran_ArusT",
		"TF_Regran_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_erema SET
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

		