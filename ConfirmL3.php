<html>
<head>
	<title>Main Page</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head><style type="text/css">
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
	.select{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 40%;
		padding: 3px;
	}
	.submit{
		font-size: 15px;
		text-decoration: none;
		transition-duration: 0.1s;
		background-color: white;
		color: black;
		border: 3px solid #007399;
		text-align: center;
		border-radius: 15px;
		float: center;
		padding: 4px;
		width: 80px;
		display: inline-block;
		cursor: pointer;
	}
	.submit:hover{
		background-color: #007399;
		color: white;
	}
	h5 {
		font-size: 18px;
		text-decoration: none;
	}

</style>
<div class="login">
<body>
	<center><h1>Edit & Confirmation</h1></center>
<?php
	session_start();
	echo"<center><h5>By : ".$_SESSION['nama']."</h5></center>";
	$tanggal = date('d-m-Y');
	echo"<center><h4>Date : $tanggal</h4></center>";
	if (isset($_POST['btn'])) {
		$sel = $_POST['perintah'];
		switch ($sel) {
			case '1': header("Location: ../checklist/Webtabelbacktoline3rawmaterial.php");break;
			case '2': header("Location: ../checklist/Webtabelbacktoline3ext.php");break;
			case '3': header("Location: ../checklist/Webtabelbacktoline3mdo.php");break;
			case '4': header("Location: ../checklist/Webtabelbacktoline3tdo.php");break;
			case '5': header("Location: ../checklist/Webtabelbacktoline3pullroll.php");break;
			case '6': header("Location: ../checklist/Webtabelbacktoline3winder.php");break;

			default:
				break;
		}
	}
?>
</head>
<body>
<form action="" method="POST" >
<center><h3>Pilih Bagian : <select class="select" name="perintah">
	<option value=". . ." >. . .</option>
	<option value="1" > Raw Material </option>
	<option value="2" > Extruder </option>
	<option value="3" > MDO </option>
	<option value="4" > TDO </option>
	<option value="5" > Pull Roll </option>
	<option value="6" > Winder </option>
</select></h3></center>
<center><button class="submit" name="btn">Go >></button></center>
<br>
<br>
<center><button class="submit" formaction="MainPageTab.php" >Done</button></center>
</form>
</form>
</body>
</div>
</html>