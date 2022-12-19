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
	$_SESSION['pager'] = 'as';
	?>

<div class="box">

	<a href="../../review/trend/index.php?item=Fan_Cool_Exh_Top_(+SG64=347N1-M434)">1 | Fan Cooling Exhaust Top (+SG64=347N1-M434)</a>
	<a href="../../review/trend/index.php?item=Fan_Cool_Exh_Top_1_(+SG63=347N1-M414)">2 | Fan Cooling Exhaust Top 1 (+SG63=347N1-M414)</a>
	<a href="../../review/trend/index.php?item=Airing_Fan_Exh_Neu_(+SG63=347N1-M214)">3 | Airing Fan Exhaust Neutral (+SG63=347N1-M214)</a>

</div>
<script>
	
$(document).ready(function(){
	var list = [
"Airing Fan 1 (+SG64=347N1-M014)",
"Airing Supply Fan 1 (+SG63=347N1-M114)"];

for (let index = 0; index < list.length; index++) {
	var res = list[index].replace("+","%2b");
	var hidesps = res.replace(/\s/g,"_");
	let num = index+4;
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




