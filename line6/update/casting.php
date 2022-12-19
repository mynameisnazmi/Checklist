<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
		"Fan_Water_Removal_VMDE",
		"Fan_Water_Removal_VMNDEA",
		"Fan_Water_Removal_VMNDER",
		"Fan_Water_Removal_TempM",
		"Fan_Water_Removal_ArusR",
		"Fan_Water_Removal_ArusS",
		"Fan_Water_Removal_ArusT",
		"Fan_Water_Removal_Ket",
		
		"Casting_Unit_System_VMDE",
		"Casting_Unit_System_VMNDEA",
		"Casting_Unit_System_VMNDER",
		"Casting_Unit_System_TempM",
		"Casting_Unit_System_ArusR",
		"Casting_Unit_System_ArusS",
		"Casting_Unit_System_ArusT",
		"Casting_Unit_System_Ket",
		
		"Pump_Chill_Roll_VMDE",
		"Pump_Chill_Roll_VMNDEA",
		"Pump_Chill_Roll_VMNDER",
		"Pump_Chill_Roll_TempM",
		"Pump_Chill_Roll_ArusR",
		"Pump_Chill_Roll_ArusS",
		"Pump_Chill_Roll_ArusT",
		"Pump_Chill_Roll_Ket",
		
		"Pump_Water_Bath_VMDE",
		"Pump_Water_Bath_VMNDEA",
		"Pump_Water_Bath_VMNDER",
		"Pump_Water_Bath_TempM",
		"Pump_Water_Bath_ArusR",
		"Pump_Water_Bath_ArusS",
		"Pump_Water_Bath_ArusT",
		"Pump_Water_Bath_Ket",
		
		"Motor_Air_Knife_VMDE",
		"Motor_Air_Knife_VMNDEA",
		"Motor_Air_Knife_VMNDER",
		"Motor_Air_Knife_TempM",
		"Motor_Air_Knife_ArusR",
		"Motor_Air_Knife_ArusS",
		"Motor_Air_Knife_ArusT",
		"Motor_Air_Knife_Ket",
		
		"Die_Bolt_Cooling_Fan_VMDE",
		"Die_Bolt_Cooling_Fan_VMNDEA",
		"Die_Bolt_Cooling_Fan_VMNDER",
		"Die_Bolt_Cooling_Fan_TempM",
		"Die_Bolt_Cooling_Fan_ArusR",
		"Die_Bolt_Cooling_Fan_ArusS",
		"Die_Bolt_Cooling_Fan_ArusT",
		"Die_Bolt_Cooling_Fan_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_casting SET
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

		