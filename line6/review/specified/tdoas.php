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
	$_SESSION['pager'] = 'tdoas';
	?>

<div class="box">


</div>
<script>
	
$(document).ready(function(){
	var list = [
		"Cooling 1 Fan 1 Top 1 (+SG61=345N1-M021)",
		"Cooling 1 Fan 1 Top 2 (+SG61=345N1-M023)",
		"Cooling 1 Fan 2 Top 1 (+SG61=345N1-M071)",
		"Cooling 1 Fan 2 Top 2 (+SG61=345N1-M073)",
		"Cooling 1 Fan 1 Bot 1 (+SG61=345N1-M121)",
		"Cooling 1 Fan 1 Bot 2 (+SG61=345N1-M123)",
		"Cooling 1 Fan 2 Bot 1 (+SG61=345N1-M171)",
		"Cooling 1 Fan 2 Bot 2 (+SG61=345N1-M173)",
		"Cooling 2 Fan 1 Top 1 (+SG61=345N1-M221)",
		"Cooling 2 Fan 1 Top 2 (+SG61=345N1-M223)",
		"Cooling 2 Fan 2 Top 1 (+SG61=345N1-M271)",
		"Cooling 2 Fan 2 Top 2 (+SG61=345N1-M273)",
		"Cooling 2 Fan 1 Bot 1 (+SG61=345N1-M321)",
		"Cooling 2 Fan 1 Bot 2 (+SG61=345N1-M323)",
		"Cooling 2 Fan 2 Bot 1 (+SG61=345N1-M371)",
		"Cooling 2 Fan 2 Bot 2 (+SG61=345N1-M373)",
		"Cooling 3 Fan 1 Top 1 (+SG61=345N1-M421)",
		"Cooling 3 Fan 1 Top 2 (+SG61=345N1-M423)",
		"Cooling 3 Fan 2 Top 1 (+SG61=345N1-M471)",
		"Cooling 3 Fan 2 Top 2 (+SG61=345N1-M473)",
		"Cooling 3 Fan 1 Bot 1 (+SG61=345N1-M521)",
		"Cooling 3 Fan 1 Bot 2 (+SG61=345N1-M523)",
		"Cooling 3 Fan 2 Bot 1 (+SG61=345N1-M571)",
		"Cooling 3 Fan 2 Bot 2 (+SG61=345N1-M573)",
		"Cooling 4 Fan 1 Top 1 (+SG61=345N1-M621)",
		"Cooling 4 Fan 1 Top 2 (+SG61=345N1-M623)",
		"Cooling 4 Fan 2 Top 1 (+SG61=345N1-M671)",
		"Cooling 4 Fan 2 Top 2 (+SG61=345N1-M673)",
		"Cooling 4 Fan 1 Bot 1 (+SG61=345N1-M721)",
		"Cooling 4 Fan 1 Bot 2 (+SG61=345N1-M723)",
		"Cooling 4 Fan 2 Bot 1 (+SG61=345N1-M771)",
		"Cooling 4 Fan 2 Bot 2 (+SG61=345N1-M773)",
		"Cooling 5 Fan 1 Top 1 (+SG61=345N1-M821)",
		"Cooling 5 Fan 1 Top 2 (+SG61=345N1-M823)",
		"Cooling 5 Fan 2 Top 1 (+SG61=345N1-M871)",
		"Cooling 5 Fan 2 Top 2 (+SG61=345N1-M873)",
		"Cooling 5 Fan 1 Bot 1 (+SG61=345N1-M921)",
		"Cooling 5 Fan 1 Bot 2 (+SG61=345N1-M923)",
		"Cooling 5 Fan 2 Bot 1 (+SG61=345N1-M971)",
		"Cooling 5 Fan 2 Bot 2 (+SG61=345N1-M973)"];

for (let index = 0; index < list.length; index++) {
	var res = list[index].replace("+","%2b");
	var hidesps = res.replace(/\s/g,"_");
	let num = index+1;
	var $divitems = $('<a>'+num+' | '+list[index]+'</a>');
	$divitems.attr('href','../../review/trend/index.php?item='+hidesps);
	$(".box").append($divitems);
}
	

});
</script>
</body>
</html>




