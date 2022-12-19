
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
		width: 30%;
		padding: 3px;
	}
	.change{
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 5px;
		width: 140px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.change:hover {
		background-color: #007399;
		color: white;
	}
	.logout {
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
		border: #e6b800 solid;
	}


</style>
<div class="login">
<body>
	<center><img width=325 height=125 src='arghakarya.jpg' /></center>
	<center><h1>Online Checklist</h1></center>
<?php
	//echo"<center><h3>User : ".$_SESSION['nama']."</h3></center>";
	$tanggal = date('d-m-Y');
	echo"<center><h4>Date : $tanggal</h4></center>";
?>

<script>
//fungsi untuk autopopup
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } 
	else { 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","MainPageChecklistReviewTabelTrendPC.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<center><h3>Menu : <select class="select" name="perintah" onchange="showUser(this.value)">
	<option value="">Select Menu</option>
	<option value="2">Review Tabel</option>
</select></h3></center>
</form>
<br>
<div id="txtHint"><center></center></div>

<form method="POST" action="MainPagePassPC.php">
	<center><br><br><input class="change" type="submit" name="changepass" value="Change Password"></center>
</form>

<form method="POST" action="MainPagePC.php">
	<?php
	if(isset($_POST['logout'])){
	unset($_SESSION["nama"]);
	unset($_SESSION["level"]);
	session_unset();
	session_destroy();
	header("location:index.php");
	}
	?>
	<center><input class="logout" type="submit" name="logout" value="Logout"></center>
</form>

</body>
</div>
</html>