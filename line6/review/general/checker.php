<?php
if(isset($_POST['submit'])){
	include '../../../koneksi.php';
	session_start();
	$pager = $_SESSION['pager'];
	$line = $_SESSION['line'];
	$date = $_SESSION['datechk'];
	$name = $_SESSION['nama'];
$conv = str_replace('-','_',$line);
$database = strtolower($conv.'_'.$pager);
	$insert = mysql_query("UPDATE $database SET status = '$name' WHERE Tanggal = '$date';");
				if($insert == true){
					header("Location:../general/index.php");
				}
				else{
					echo "ERROR";
				}
}	
else{
	echo "Proses Salah";
}
?>

		