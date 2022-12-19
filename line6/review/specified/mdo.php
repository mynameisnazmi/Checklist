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
	$_SESSION['pager'] = 'mdo';
	?>

<div class="box">


</div>
<script>
	
$(document).ready(function(){
	var list = [
		"Drawing 1 (+SD21=331M5-M015)", "Drawing 2 (+SD21=331M6-M015)", "Drawing 3 (+SD21=331M7-M015)", "Drawing 4 (+SD21=331M8-M015)", "Drawing 5 (+SD21=331M9-M015)", "Drawing 6 (+SD21=331MA-M015)"];

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




