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
	$_SESSION['pager'] = 'silo';
	?>

<div class="box">


</div>
<script>
	
$(document).ready(function(){
	var list = [
		"Big Bag Blow Stat Fan 1 (+SR13=211N1-M010)",
		"Big Bag Rotary Valve 1 (+SR13=211O1-M024)",
		"Silo Blow Stat Fan 1 (+SR13=211N1-M110)",
		"Rotary Valve 1 (+SR13=211T1-M014)",
		"Rotary Valve 2 (+SR13=211T1-M114)",
		"Rotary Valve 3 (+SR13=211T1-M164)"];

for (let index = 0; index < list.length; index++) {
	var res = list[index].replace("+","%2b");
	var hidesps = res.replace(/\s/g,"_");
	let num = index+1;
	//var $divnum = $('<div>'+num+'</div>');
	var $divitems = $('<a>'+num+' | '+list[index]+'</a>');
	//$divnum.attr('id','number'+index);
	//$divnum.attr('class','number);
	$divitems.attr('href','../../review/trend/index.php?item='+hidesps);
	//$(".box").append($divnum);
	$(".box").append($divitems);
}
	

});
</script>
</body>
</html>




