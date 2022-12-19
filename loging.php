
<html>

<head>
	<title>Main Page</title>
</head>

<body>

<?php
include 'koneksi_user.php';
session_start();
$username = $_POST['Username'];
$password = md5($_POST['Password']);
$query = mysql_query("SELECT * FROM user WHERE email='$username' AND pass='$password' ");
$result = mysql_fetch_array($query);
if(!$result){
	echo "tidak berhasil login";
	header("location:index.php");
}
else{
	$ip=$_SERVER['REMOTE_ADDR'];
	//Usahakan Range IP memiliki array yang sama. 
	//contoh : 1-9, 10-99,dan 100-255
	//Pilih range berdasarkan ketiga jenis diatas 
	if ($ip=='131.107.11.9' || $ip=='131.107.11.202' || $ip=='131.107.251.10'){
	header("location:MainPage.php");
			$_SESSION["nama"] = $result['first_name'];
			$_SESSION["level"] = $result[5];
			$_SESSION["device"] = 1;
	}
	else{
		header("location:MainPage.php");
			$_SESSION["nama"] = $result['first_name'];
			$_SESSION["level"] = $result[5];
			$_SESSION["device"] = 0;
			//print_r($_SESSION["nama"]);
	}
}
mysql_close($link);
?>

</body>
</html>