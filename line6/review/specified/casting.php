<html>
<head>
	<title>Checklist</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	
	<script type="text/javascript" src="../../../../main/js/jquery.min.js"></script>
	<style>
	

	</style>
</head>
<body>
<?php 
session_start();
	$_SESSION['pager'] = 'casting';
	?>

<div class="box">

	<a href="../../review/trend/index.php?item=Fan_Water_Removal_">1 | Fan Water Removal Chill Roll (+SG21=321N3-M011)</a>
	<a href="../../review/trend/index.php?item=Casting_Unit_System_">2 | Casting Unit System Water Removal Fan (+SG21=321N3-M511)</a>

</div>
<script>
	
$(document).ready(function(){
	var list = [
		"Pump Chill Roll (+SG21=321U1-M010)", 
		"Pump Water Bath (+SG21=321U1-M110)", 
		"Motor Air Knife (+SG21=321N1-M014)", 
		"Die Bolt Cooling Fan (+SH32=292Q1-M020)"];

for (let index = 0; index < list.length; index++) {
	var res = list[index].replace("+","%2b");
	var hidesps = res.replace(/\s/g,"_");
	let num = index+3;
	//var $divnum = $('<div>'+num+'</div>');
	var $divitems = $('<a>'+num+' | '+list[index]+'</a>');
	//$divnum.attr('id','number'+index);
	//$divnum.attr('class','number');
	$divitems.attr('href','../../review/trend/index.php?item='+hidesps);
	//$(".box").append($divnum);
	$(".box").append($divitems);
}
	

});
</script>
</body>
</html>




