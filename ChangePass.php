<style type="text/css">
	.logout {
		position: absolute;
		left: 600px;
		top: 300px;
		font-size: 15px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 5px;
		width: 80px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.logout:hover{
		background-color: #e6b800;
		color: white;
	}
</style>

<?php
	include 'koneksi_user.php';
	$username = $_POST['Username'];
	$password = md5($_POST['Password']);
	$password1 = md5($_POST['Password1']);
	$password2 = md5($_POST['Password2']);

	$query = mysql_query("SELECT * FROM user WHERE email='$username' AND pass='$password'");
	$result = mysql_fetch_array($query);
	if(!$result){
	echo "Username atau Password Salah";
	header("location:MainPagePassPC.php");
	}
	else{	
		if($password1 == $password2){
			$insert = mysql_query("UPDATE user SET `pass` = '$password2' WHERE `user`.`email` = '$username';");
			if(!$insert){
				echo "<script>alert('Password Gagal Dirubah'); 
					location.href='MainPagePassPC.php';</script>";
			}
			else {
				echo "<script>alert('Password berhasil di ubah, Silahkan logout'); 
					</script>";
			}
		}
		else{
			echo "<script>alert('Password Confirmation Tidak Sama'); 
					location.href='MainPagePassPC.php';</script>";
		}
	}
?>
<form method="POST" action="ChangePass.php">
	<?php
	if(isset($_POST['logout'])){
	unset($_SESSION["nama"]);
	unset($_SESSION["level"]);
	header("location:index.php");
	}
	?>
	<br><input class="logout" type="submit" name="logout" value="Logout">
</form>