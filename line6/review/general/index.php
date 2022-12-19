<html>
<head>
	<title>Line 6 - Checklist</title>
	<script type="text/javascript" src="../../../../main/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../../main/js/Pikaday-master/css/pikaday.css" />
	<style>
	
	table {
  text-align: left;
  position: relative;
  border-collapse: collapse; 
  width:70vw;
  overflow-y:auto;
  overflow-x:hidden;
}
th, td {
	text-align:center;
  padding: 0.6vw;

}
input{
	width:8vw;
}
#content{
	position:absolute;
	left:50%;
	transform : translate(-50%,0%);
	margin-top:20px;	
}
#headerr{
	margin-left:5vw;
}
#fl{
display:flex;
justify-content:flex-end;
}
#chk {
	margin:10px;
	padding : 10px 10px;
	font-size:15px;
}

	</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css1.css">
<?php
session_start();

echo'
<div id="headerr">
<h1 class="head">Review Checklist Electrical <span id="colname">'.$_SESSION['line'].'</span></h1>
<h3>Electrical&nbsp;-&nbsp;'.$_SESSION['nama'].'</h3>
<div id="mach" > Area
<select class="selectfrm" id="area" name="line">
		<option value="silo">Silo</option>
		<option value="ext">Extrussion</option>
		<option value="casting">Chill Roll</option>
		<option value="erema">Erema</option>
		<option value="mdo">MDO</option>
		<option value="tdo">TDO</option>
		<option value="tdoas">TDO Air Shower</option>
		<option value="as">Airing System</option>
		<option value="biggrinder">Big Grinder</option>
		<option value="smallgrinder">Small Grinder</option>
		<option value="pullroll">Pull Roll</option>
	</select>
</div>
</div>


<div id="border">
<div id=content></div>
</div>
'; 
?>
</table>
<br>
<br>

<script type="text/javascript" src="../../../../main/js/Pikaday-master/pikaday.js"></script>
<script type="text/javascript" src="../../../../main/js/Pikaday-master/moment.min.js.download"></script>
<script type="text/javascript">

$(document).ready(function(){
	var page = "<?php echo $_SESSION['pager']?>";
	if (page==""){
	$("#content").html();
	$("#content").load('silo.php');
	}
	else{
	$("#content").html();
	$("#content").load(page+'.php');
	}
	console.log(page);
document.getElementById('area').value=page;
$('#area').live('change',function(){
			$("#content").html();
			$("#content").load(this.value+'.php');
			});

});

</script>
</body>
</html>