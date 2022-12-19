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
	$_SESSION['pager'] = 'tdo';
	?>

<div class="box">


</div>
<script>
	
$(document).ready(function(){
	var list = [		
		"Line Drive Outlet Left (+SD41 =341M1- M015)",
		"Cooling Drive Outlet Left (+SD41=341M1-M050)",
		"Line Drive Outlet Right (+SD42=341M2-M015)",
		"Cooling Drive Outlet Right (+SD42=341M2-M050)",
		"Preheating 1 Fan 1 (+SG33=343N1-M014)",
		"Preheating 1 Fan 2 (+SG33=343N1-M024)",
		"Preheating 1 Fan 3 (+SG33=343N1-M034)",
		"Preheating 2 Fan 1 (+SG33=343N1-M114)",
		"Preheating 2 Fan 2 (+SG33=343N1-M124)",
		"Preheating 2 Fan 3 (+SG33=343N1-M134)",
		"Preheating 3 Fan 1 (+SG33=343N1-M214)",
		"Preheating 3 Fan 2 (+SG33=343N1-M224)",
		"Preheating 3 Fan 3 (+SG33=343N1-M234)",
		"Preheating 4 Fan 1 (+SG34=343N1-M314)",
		"Preheating 4 Fan 2 (+SG34=343N1-M324)",
		"Preheating 4 Fan 3 (+SG34=343N1-M334)",
		"Preheating 5 Fan 1 (+SG34=343N1-M414)",
		"Preheating 5 Fan 2 (+SG34=343N1-M424)",
		"Preheating 5 Fan 3 (+SG34=343N1-M434)",
		"Preheating 6 Fan 1 (+SG34=343N1-M514)",
		"Preheating 6 Fan 2 (+SG34=343N1-M524)",
		"Preheating 6 Fan 3 (+SG34=343N1-M534)",
		"Drawing 1 Fan 1 Top (+SG41=343N4-M014)",
		"Drawing 1 Fan 2 Top (+SG41=343N4-M214)",
		"Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)",
		"Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)",
		"Drawing 2 Fan 1 Top (+SG41=343N4-M414)",
		"Drawing 2 Fan 2 Top (+SG41=343N4-M614)",
		"Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)",
		"Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)",
		"Drawing 3 Fan 1 Top (+SG41=343N4-M814)",
		"Drawing 3 Fan 2 Top (+SG42=343M5-M014)",
		"Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)",
		"Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)",
		"Drawing 4 Fan 1 Top (+SG42=343M5-M214)",
		"Drawing 4 Fan 2 Top (+SG42=343M5-M414)",
		"Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)",
		"Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)",
		"Drawing 5 Fan 1 Top (+SG42=343M5-M614)",
		"Drawing 5 Fan 2 Top (+SG42=343M5-M814)",
		"Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)",
		"Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)",
		"Annealing 1 Fan 1 Top (+SG52=343M7-M014)",
		"Annealing 1 Fan 2 Top (+SG52=343M7-M214)",
		"Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)",
		"Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)",
		"Annealing 2 Fan 1 Top (+SG52=343M7-M414)",
		"Annealing 2 Fan 2 Top (+SG52=343M7-M614)",
		"Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)",
		"Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)",
		"Annealing 3 Fan 1 Top (+SG52=343M7-M814)",
		"Annealing 3 Fan 2 Top (+SG53=343N8-M014)",
		"Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)",
		"Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)",
		"Annealing 4 Fan 1 Top (+SG53=343N8-M214)",
		"Annealing 4 Fan 2 Top (+SG53=343N8-M414)",
		"Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)",
		"Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)",
		"Annealing 5 Fan 1 Top (+SG53=343N8-M614)",
		"Annealing 5 Fan 2 Top (+SG53=343N8-M814)",
		"Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)",
		"Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)",
		"Annealing 6 Fan 1 Top (+SG53=343N9-M014)",
		"Annealing 6 Fan 2 Top (+SG53=343N9-M214)",
		"Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)",
		"Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)",
		"Film Edge Cooling Fan Left (+SG63=345N5-M014)",
		"Film Edge Cooling Fan Right (+SG63 =345N5 -M114)",
		"Edge Guide Fan Left (+SD24=341MA-M050)",
		"Edge Guide Fan Right (+SD24=341MA-M250)"];

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




