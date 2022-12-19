<html>
<head>
	<title>Line 4 - Checklist</title>
	
	<script type="text/javascript" src="../../../main/js/jquery.min.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<?php
session_start();
include "../../koneksi.php";
echo'
<h3>Electrical&nbsp;-&nbsp;'.$_SESSION['nama'].'</h3>

<div id="mach" > Area
<select class="selectfrm" id="area" name="line">
		<option value="silo">Silo</option>
		<option value="ext">Extrussion</option>
		<option value="chr_mdo">Chill Roll - MDO</option>
		<option value="tdo">TDO</option>
		<option value="pulrol">Pull Roll</option>
		<option value="winder">Winder</option>
	</select>
	</div>




<table border = 1 width = 1100>
<div id="border">
<div id=content></div>
</div>
'; 

	mysql_close($link);
?>
</table>
<br>
<br>
<button id="btns" value="Submit" class="submit">Submit</button>
<input type="reset" name="reset" value="Reset" class="res">


<script type="text/javascript">

$(document).ready(function(){
	
	$("#content").html();
	$("#content").load('silo.php');

	
$('#area').live('change',function(){
//alert(this.value);
			$("#content").html();
			$("#content").load(this.value+'.php');
});
	//var picker = new Pikaday ();
	//function show(){
//	document.getElementById('border').style.display="block";
	//}
});
//function navToContent(url){
	//	alert(url);
		//	$("#content").html();
		//	$("#content").load(url+'.php');
//	}

</script>
</body>
</html>