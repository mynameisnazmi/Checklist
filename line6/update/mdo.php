<?php
if(isset($_POST['submit'])){
	include '../../koneksi.php';
	session_start();
	$date = date('Y-m-d', strtotime($_SESSION['daterecord']));
	$nama=$_SESSION['nama'];
	$data=$_POST['data'];
	$arr = array("Drawing_1_VMDE",
	"Drawing_1_VMNDER   ",
	"Drawing_1_VMNDEA   ",
	"Drawing_1_TempM  ",
	"Drawing_1_ArusR  ",
	"Drawing_1_ArusS  ",
	"Drawing_1_ArusT  ",
	"Drawing_1_Ket ",
	"Drawing_2_VMDE  ",
	"Drawing_2_VMNDEA   ",
	"Drawing_2_VMNDER   ",
	"Drawing_2_TempM  ",
	"Drawing_2_ArusR  ",
	"Drawing_2_ArusS  ",
	"Drawing_2_ArusT  ",
	"Drawing_2_Ket ",
	"Drawing_3_VMDE  ",
	"Drawing_3_VMNDEA   ",
	"Drawing_3_VMNDER   ",
	"Drawing_3_TempM  ",
	"Drawing_3_ArusR  ",
	"Drawing_3_ArusS  ",
	"Drawing_3_ArusT  ",
	"Drawing_3_Ket ",
	"Drawing_4_VMDE  ",
	"Drawing_4_VMNDEA   ",
	"Drawing_4_VMNDER   ",
	"Drawing_4_TempM  ",
	"Drawing_4_ArusR  ",
	"Drawing_4_ArusS  ",
	"Drawing_4_ArusT  ",
	"Drawing_4_Ket ",
	"Drawing_5_VMDE  ",
	"Drawing_5_VMNDEA   ",
	"Drawing_5_VMNDER   ",
	"Drawing_5_TempM  ",
	"Drawing_5_ArusR  ",
	"Drawing_5_ArusS  ",
	"Drawing_5_ArusT  ",
	"Drawing_5_Ket ",
	"Drawing_6_VMDE  ",
	"Drawing_6_VMNDEA   ",
	"Drawing_6_VMNDER   ",
	"Drawing_6_TempM  ",
	"Drawing_6_ArusR  ",
	"Drawing_6_ArusS  ",
	"Drawing_6_ArusT  ",
	"Drawing_6_Ket");
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
	$insert = mysql_query("UPDATE line_6_mdo SET
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

		