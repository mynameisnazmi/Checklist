<html>
<body>

<h1>Menu Trend Electrical Line 6</h1>

<table border = 1 width = 500>

<?php
include 'koneksi.php';
	
	$queryy = mysql_query("SELECT * FROM `form_line_6_casting`");
	$queryy1 = mysql_query("SELECT * FROM `form_line_6_mdo`");
	$queryy2 = mysql_query("SELECT * FROM `form_line_6_tdo`");
	$queryy3 = mysql_query("SELECT * FROM `form_line_6_tdoas`");
	$queryy4 = mysql_query("SELECT * FROM `form_line_6_pullroll`");
	$queryy5 = mysql_query("SELECT * FROM `form_line_6_airsys`");
	$queryy6 = mysql_query("SELECT * FROM `form_line_6_bigsilo`");
	$queryy7 = mysql_query("SELECT * FROM `form_line_6_mext`");
	$queryy8 = mysql_query("SELECT * FROM `form_line_6_erema`");
	$queryy9 = mysql_query("SELECT * FROM `form_line_6_smallgrinder`");
	$queryy10 = mysql_query("SELECT * FROM `form_line_6_biggrinder`");
	
	echo'
		<tr>
		<th>No</th>
		<th>Motor Casting</th>
		</tr>
	';

	$i=0;
	while($dataa = mysql_fetch_row($queryy))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting1.php'>Fan Water Removal Chill Roll (+SG21=321N3-M011)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting2.php'>Casting Unit System Water Removal Fan (+SG21=321N3-M511)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting3.php'>Pump Chill Roll (+SG21=321U1-M010)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting4.php'>Pump Water Bath (+SG21=321U1-M110)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting5.php'>Motor Air Knife (+SG21=321N1-M014)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa[0]."</td>
			<td><a href='WebTrendLine6Casting6.php'>Die Bolt Cooling Fan (+SH32=292Q1-M020)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Motor MDO</th>
		</tr>
	';

	$i=0;
	while($dataa1 = mysql_fetch_row($queryy1))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO1.php'>Drawing 1 (+SD21=331M5-M015)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO2.php'>Drawing 2 (+SD21=331M6-M015)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO3.php'>Drawing 3 (+SD21=331M7-M015)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO4.php'>Drawing 4 (+SD21=331M8-M015)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO5.php'>Drawing 5 (+SD21=331M9-M015)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa1[0]."</td>
			<td><a href='WebTrendLine6MDO6.php'>Drawing 6 (+SD21=331MA-M015)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Motor TDO</th>
		</tr>
	';

	$i=0;
	while($dataa2 = mysql_fetch_row($queryy2))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO1.php'>Line Drive Outlet Left (+SD41=341M1-M015)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO2.php'>Cooling Drive Outlet Left (+SD41=341M1-M050)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO3.php'>Line Drive Outlet Right (+SD42=341M2-M015)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO4.php'>Cooling Drive Outlet Right (+SD42=341M2-M050)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO5.php'>Preheating 1 Fan 1 (+SG33=343N1-M014)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO6.php'>Preheating 1 Fan 2 (+SG33=343N1-M024)</a></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO7.php'>Preheating 1 Fan 3 (+SG33=343N1-M034)</a></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO8.php'>Preheating 2 Fan 1 (+SG33=343N1-M114)</a></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO9.php'>Preheating 2 Fan 2 (+SG33=343N1-M124)</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO10.php'>Preheating 2 Fan 3 (+SG33=343N1-M134)</a></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO11.php'>Preheating 3 Fan 1 (+SG33=343N1-M214)</a></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO12.php'>Preheating 3 Fan 2 (+SG33=343N1-M224)</a></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO13.php'>Preheating 3 Fan 3 (+SG33=343N1-M234)</a></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO14.php'>Preheating 4 Fan 1 (+SG34=343N1-M314)</a></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO15.php'>Preheating 4 Fan 2 (+SG34=343N1-M324)</a></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO16.php'>Preheating 4 Fan 3 (+SG34=343N1-M334)</a></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO17.php'>Preheating 5 Fan 1 (+SG34=343N1-M414)</a></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO18.php'>Preheating 5 Fan 2 (+SG34=343N1-M424)</a></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO19.php'>Preheating 5 Fan 3 (+SG34=343N1-M434)</a></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO20.php'>Preheating 6 Fan 1 (+SG34=343N1-M514)</a></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO21.php'>Preheating 6 Fan 2 (+SG34=343N1-M524)</a></td>
			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO22.php'>Preheating 6 Fan 3 (+SG34=343N1-M534)</a></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO23.php'>Drawing 1 Fan 1 Top (+SG41=343N4-M014)</a></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO24.php'>Drawing 1 Fan 2 Top (+SG41=343N4-M214)</a></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO25.php'>Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)</a></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO26.php'>Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)</a></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO27.php'>Drawing 2 Fan 1 Top (+SG41=343N4-M414)</a></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO28.php'>Drawing 2 Fan 2 Top (+SG41=343N4-M614)</a></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO29.php'>Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)</a></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO30.php'>Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)</a></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO31.php'>Drawing 3 Fan 1 Top (+SG41=343N4-M814)</a></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO32.php'>Drawing 3 Fan 2 Top (+SG42=343M5-M014)</a></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO33.php'>Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)</a></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO34.php'>Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)</a></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO35.php'>Drawing 4 Fan 1 Top (+SG42=343M5-M214)</a></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO36.php'>Drawing 4 Fan 2 Top (+SG42=343M5-M414)</a></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO37.php'>Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)</a></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO38.php'>Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)</a></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO39.php'>Drawing 5 Fan 1 Top (+SG42=343M5-M614)</a></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO40.php'>Drawing 5 Fan 2 Top (+SG42=343M5-M814)</a></td>
			</tr>
			";
		}
		elseif($i==40){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO41.php'>Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)</a></td>
			</tr>
			";
		}
		elseif($i==41){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO42.php'>Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)</a></td>
			</tr>
			";
		}
		elseif($i==42){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO43.php'>Annealing 1 Fan 1 Top (+SG52=343M7-M014)</a></td>
			</tr>
			";
		}
		elseif($i==43){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO44.php'>Annealing 1 Fan 2 Top (+SG52=343M7-M214)</a></td>
			</tr>
			";
		}
		elseif($i==44){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO45.php'>Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)</a></td>
			</tr>
			";
		}
		elseif($i==45){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO46.php'>Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)</a></td>
			</tr>
			";
		}
		elseif($i==46){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO47.php'>Annealing 2 Fan 1 Top (+SG52=343M7-M414)</a></td>
			</tr>
			";
		}
		elseif($i==47){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO48.php'>Annealing 2 Fan 2 Top (+SG52=343M7-M614)</a></td>
			</tr>
			";
		}
		elseif($i==48){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO49.php'>Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)</a></td>
			</tr>
			";
		}
		elseif($i==49){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO50.php'>Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)</a></td>
			</tr>
			";
		}
		elseif($i==50){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO51.php'>Annealing 3 Fan 1 Top (+SG52=343M7-M814)</a></td>
			</tr>
			";
		}
		elseif($i==51){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO52.php'>Annealing 3 Fan 2 Top (+SG53=343N8-M014)</a></td>
			</tr>
			";
		}
		elseif($i==52){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO53.php'>Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)</a></td>
			</tr>
			";
		}
		elseif($i==53){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO54.php'>Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)</a></td>
			</tr>
			";
		}
		elseif($i==54){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO55.php'>Annealing 4 Fan 1 Top (+SG53=343N8-M214)</a></td>
			</tr>
			";
		}
		elseif($i==55){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO56.php'>Annealing 4 Fan 2 Top (+SG53=343N8-M414)</a></td>
			</tr>
			";
		}
		elseif($i==56){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO57.php'>Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)</a></td>
			</tr>
			";
		}
		elseif($i==57){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO58.php'>Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)</a></td>
			</tr>
			";
		}
		elseif($i==58){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO59.php'>Annealing 5 Fan 1 Top (+SG53=343N8-M614)</a></td>
			</tr>
			";
		}
		elseif($i==59){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO60.php'>Annealing 5 Fan 2 Top (+SG53=343N8-M814)</a></td>
			</tr>
			";
		}
		elseif($i==60){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO61.php'>Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)</a></td>
			</tr>
			";
		}
		elseif($i==61){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO62.php'>Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)</a></td>
			</tr>
			";
		}
		elseif($i==62){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO63.php'>Annealing 6 Fan 1 Top (+SG53=343N9-M014)</a></td>
			</tr>
			";
		}
		elseif($i==63){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO64.php'>Annealing 6 Fan 2 Top (+SG53=343N9-M214)</a></td>
			</tr>
			";
		}
		elseif($i==64){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO65.php'>Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)</a></td>
			</tr>
			";
		}
		elseif($i==65){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO66.php'>Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)</a></td>
			</tr>
			";
		}
		elseif($i==66){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO67.php'>Film Edge Cooling Fan Left (+SG63=345N5-M014)</a></td>
			</tr>
			";
		}
		elseif($i==67){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO68.php'>Film Edge Cooling Fan Right (+SG63=345N5-M114)</a></td>
			</tr>
			";
		}
		elseif($i==68){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO69.php'>Edge Guide Fan Left (+SD24=341MA-M050)</a></td>
			</tr>
			";
		}
		elseif($i==69){
		echo"
			<tr>
			<td>".$dataa2[0]."</td>
			<td><a href='WebTrendLine6TDO70.php'>Edge Guide Fan Right (+SD24=341MA-M250)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Motor TDO Air Shower</th>
		</tr>
	';

	$i=0;
	while($dataa3 = mysql_fetch_row($queryy3))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS1.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M021)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS2.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M023)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS3.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M071)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS4.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M073)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS5.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS6.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)</a></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS7.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)</a></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS8.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)</a></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS9.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M221)</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS10.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M223)</a></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS11.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M271)</a></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS12.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M273)</a></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS13.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)</a></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS14.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)</a></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS15.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)</a></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS16.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)</a></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS17.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M421)</a></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS18.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M423)</a></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS19.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M471)</a></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS20.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M473)</a></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS21.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)</a></td>
			</tr>
			";
		}elseif($i==21){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS22.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)</a></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS23.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)</a></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS24.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)</a></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS25.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M621)</a></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS26.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M623)</a></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS27.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M671)</a></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS28.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M673)</a></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS29.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)</a></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS30.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)</a></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS31.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)</a></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS32.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)</a></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS33.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M821)</a></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS34.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M823)</a></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS35.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M871)</a></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS36.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M873)</a></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS37.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)</a></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS38.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)</a></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS39.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)</a></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>".$dataa3[0]."</td>
			<td><a href='WebTrendLine6TDOAS40.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Pull Roll HCU</th>
		</tr>
	';

	$i=0;
	while($dataa4 = mysql_fetch_row($queryy4))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll1.php'>Pump Heating Cooling Unit Inlet (+SG82=374U1-M010)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll2.php'>Pump Flame Treatment Top (+SG82=374U1-M110)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll3.php'>Pump Corona Bottom (+SG82=374U1-M210)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll4.php'>Pump Corona Top (+SG82=374U1-M310)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll5.php'>Pump Heating Cooling Unit Outlet (+SG82=374U1-M410)</a></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll6.php'>Fan Corona Exhaust Top (+SG81=376N1-M111)</a></td>
			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>".$dataa4[0]."</td>
			<td><a href='WebTrendLine6Pullroll7.php'>Fan Corona Exhaust Bottom (+SG81=376N1-M011)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Airing System</th>
		</tr>
	';

	$i=0;
	while($dataa5 = mysql_fetch_row($queryy5))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS1.php'>Fan Cooling Exhaust Top (+SG64=347N1-M434)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS2.php'>Fan Cooling Exhaust Top 1 (+SG63=347N1-M414)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS3.php'>Airing Fan 1 (+SG64=347N1-M014)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS4.php'>Airing Supply Fan 1 (+SG63=347N1-M114)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa5[0]."</td>
			<td><a href='WebTrendLine6AS5.php'>Airing Fan Exhaust Neutral (+SG63=347N1-M214)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Big Silo Storage</th>
		</tr>
	';

	$i=0;
	while($dataa6 = mysql_fetch_row($queryy6))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo1.php'>Big Bag Blowing Station Fan 1 (+SR13=211N1-M010)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo2.php'>Big Bag Rotary Valve 1 (+SR13=211O1-M024)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo3.php'>Silo Blowing Station Fan 1 (+SR13=211N1-M110)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo4.php'>Rotary Valve 1 (+SR13=211T1-M014)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo5.php'>Rotary Valve 2 (+SR13=211T1-M114)</a></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>".$dataa6[0]."</td>
			<td><a href='WebTrendLine6Bigsilo6.php'>Rotary Valve 3 (+SR13=211T1-M164)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Main Extruder</th>
		</tr>
	';

	$i=0;
	while($dataa7 = mysql_fetch_row($queryy7))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt1.php'>Main Extruder</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt2.php'>Melt Pump</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt3.php'>Co Extruder 1</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>".$dataa7[0]."</td>
			<td><a href='WebTrendLine6MExt4.php'>Co Extruder 2</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Erema</th>
		</tr>
	';

	$i=0;
	while($dataa8 = mysql_fetch_row($queryy8))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema1.php'>Motor Extruder</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema2.php'>Motor Compactor</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa8[0]."</td>
			<td><a href='WebTrendLine6Erema3.php'>TF. Regran</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Small Grinder</th>
		</tr>
	';

	$i=0;
	while($dataa9 = mysql_fetch_row($queryy9))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder1.php'>Motor Grinder</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder2.php'>Conveying Fan 1</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa9[0]."</td>
			<td><a href='WebTrendLine6Smallgrinder3.php'>Conveying Fan 2</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Big Grinder</th>
		</tr>
	';

	$i=0;
	while($dataa10 = mysql_fetch_row($queryy10))
	{
		if($i==0){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder1.php'>Motor Grinder</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder2.php'>Conveying Fan 1</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>".$dataa10[0]."</td>
			<td><a href='WebTrendLine6Biggrinder3.php'>Conveying Fan 2</a></td>
			</tr>
			";
		}
		$i++;
	}
?>
</table>

<form method="POST" action="../MainPagePC.php">
<br><input type="submit" name="mainpagetab" value="Main Page">
</form>

</body>
</html>