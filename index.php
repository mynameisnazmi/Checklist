<html>

<head>
	<title>Argha Online Checklist</title>
		<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<style type="text/css">
	.login {
		font-family: Arial, Helvetica, sans-serif;
		position: static;
		left: 425px;
		margin: 150px auto;
		width: 400px;
		padding: 30px;
		border: 10px solid #007399;
		background: white;
	}
	input[type=text], input[type=password]{
		border: 1px solid #007399;
		margin: 0px auto;
		width: 45%;
		padding: 0.5px;
	}
	.submit{
		text-decoration: none;
		transition-duration: 0.1s;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 20px;
		margin: 1px;
		float: center;
		padding: 3px;
		font-size: 16px;
		width: 100px;
		display: inline-block;
		cursor: pointer;
	}
	.submit:hover{
		background-color: #007399;
		color: white;
	}

</style>
<div class="login">
	<center><img width=325 height=100 src='arghakarya.jpg' /></center>
	<center><h2>Online Checklist</h2></center>
<?php
	//echo"<center><h3>User : ".$_SESSION['nama']."</h3></center>";
	$tanggal = date('d-m-Y');
	echo"<center><h4>Date : $tanggal</h4></center>"
?>
</head>
<body>
<form method="POST" action="loging.php">	
<center><h4>Username : <input type='text' name='Username'></h4></center>
<center><h4>Password : <input type='password' name='Password'></h4></center>
<center><input class="submit" type="submit" class="submit" name="submit" value="Submit"></center>
</form>
<center><p>Developed by Electrical Department</p></center>
</body>
</div>



</html>