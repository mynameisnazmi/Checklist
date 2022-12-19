<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array(
		"Pump_Heat_Cool_UI_VMDE",
		"Pump_Heat_Cool_UI_VMNDEA",
		"Pump_Heat_Cool_UI_VMNDER",
		"Pump_Heat_Cool_UI_Temp",
		"Pump_Heat_Cool_UI_ArusR",
		"Pump_Heat_Cool_UI_ArusS",
		"Pump_Heat_Cool_UI_ArusT",
		"Pump_Heat_Cool_UI_Ket",
		"Pump_Flame_Treat_Top_VMDE",
		"Pump_Flame_Treat_Top_VMNDEA",
		"Pump_Flame_Treat_Top_VMNDER",
		"Pump_Flame_Treat_Top_Temp",
		"Pump_Flame_Treat_Top_ArusR",
		"Pump_Flame_Treat_Top_ArusS",
		"Pump_Flame_Treat_Top_ArusT",
		"Pump_Flame_Treat_Top_Ket",
		"Pump_Corona_Bot_VMDE",
		"Pump_Corona_Bot_VMNDEA",
		"Pump_Corona_Bot_VMNDER",
		"Pump_Corona_Bot_Temp",
		"Pump_Corona_Bot_ArusR",
		"Pump_Corona_Bot_ArusS",
		"Pump_Corona_Bot_ArusT",
		"Pump_Corona_Bot_Ket",
		"Pump_Corona_Top_VMDE",
		"Pump_Corona_Top_VMNDEA",
		"Pump_Corona_Top_VMNDER",
		"Pump_Corona_Top_Temp",
		"Pump_Corona_Top_ArusR",
		"Pump_Corona_Top_ArusS",
		"Pump_Corona_Top_ArusT",
		"Pump_Corona_Top_Ket",
		"Pump_Heat_Cool_UO_VMDE",
		"Pump_Heat_Cool_UO_VMNDEA",
		"Pump_Heat_Cool_UO_VMNDER",
		"Pump_Heat_Cool_UO_Temp",
		"Pump_Heat_Cool_UO_ArusR",
		"Pump_Heat_Cool_UO_ArusS",
		"Pump_Heat_Cool_UO_ArusT",
		"Pump_Heat_Cool_UO_Ket",
		"Fan_Corona_Exh_Top_VMDE",
		"Fan_Corona_Exh_Top_VMNDEA",
		"Fan_Corona_Exh_Top_VMNDER",
		"Fan_Corona_Exh_Top_Temp",
		"Fan_Corona_Exh_Top_ArusR",
		"Fan_Corona_Exh_Top_ArusS",
		"Fan_Corona_Exh_Top_ArusT",
		"Fan_Corona_Exh_Top_Ket",
		"Fan_Corona_Exh_Bot_VMDE",
		"Fan_Corona_Exh_Bot_VMNDEA",
		"Fan_Corona_Exh_Bot_VMNDER",
		"Fan_Corona_Exh_Bot_Temp",
		"Fan_Corona_Exh_Bot_ArusR",
		"Fan_Corona_Exh_Bot_ArusS",
		"Fan_Corona_Exh_Bot_ArusT",
		"Fan_Corona_Exh_Bot_Ket"
		);
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_pullroll SET
				$arr[$i] = '$data[$i]' WHERE Tanggal = '$date';");
				if($len == 55 AND $insert == true){
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

		