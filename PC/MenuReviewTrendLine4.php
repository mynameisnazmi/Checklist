<html>
<body>

<h1>Result Form Checklist Electrical Line 4</h1>

<table border = 1 width = 500

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_4_resinsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_4_ext` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_4_chillrollmdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_4_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_4_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_4_winder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);
	if($query=='0'){
		echo"Data Casting Tidak Ada";
	}
	elseif($query1=='0'){
		echo"Data MDO Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}

	echo"<h3>Nama Pelaksana :  $data[1]</h3>";
	echo"<h3>Status :  $data[2]ed ($data[3])</h3>";

	echo'
		<tr>
		<th>No</th>
		<th>Resin ~ Silo</th>
			<tr>
			</tr>
		</tr>
	';

	$i=0;
	while($i<=1)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4ResinSilo1.php'>Material Dosing Unit (MDU Mixer)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4ResinSilo2.php'>Blower Transfer Material</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Extruder</th>

			<tr>

			</tr>
		</tr>
	';

	$i=0;
	while($i<=10)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4Ext1.php'>DC Melt-Ext</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4Ext2.php'>Melt-Ext Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4Ext3.php'>DC Metering-Ext</a></td>

			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4Ext4.php'>Metering-Ext Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4Ext5.php'>DC Co-Ext 1 </a></td>

			</tr>
			";
		}
		elseif($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4Ext6.php'>Co-Ext1 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4Ext7.php'>DC Co-Ext 2</a></td>

			</tr>
			";
		}
		elseif($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine4Ext8.php'>Co-Ext2 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==8){
			echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4Ext9.php'>Melt-Ext Gear Box Oil Pump</a></td>

			</tr>
			";
		}
		elseif($i==9){
			echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4Ext10.php'>Melt-Ext Filter Preheating Oil Pump</a></td>

			</tr>
			";
		}
		elseif($i==10){
			echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4Ext11.php'>Metering-Ext Gear Box Oil Pump</a></td>
 
			</tr>
			";
		}
		$i++;
	}
		
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Chill Roll ~ MDO</th>

			<tr>

			</tr>
		</tr>
	';

	$i=0;
	while($i<=20)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4ChillRollMDO1.php'>DC Chill Roll</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4ChillRollMDO2.php'>Air Knife</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4ChillRollMDO3.php'>Water Removal</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4ChillRollMDO4.php'>Chill Roll Drum Water Pump</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4ChillRollMDO5.php'>Chill Roll Water Bath Pump</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4ChillRollMDO6.php'>DC MDO-A</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4ChillRollMDO7.php'>MDO-A Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine4ChillRollMDO8.php'>DC MDO-B</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4ChillRollMDO9.php'>MDO-B Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4ChillRollMDO10.php'>DC MDO-C</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4ChillRollMDO11.php'>MDO-C Fan Cooling Blower</a></td>
 
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine4ChillRollMDO12.php'>MDO Pump Preheating 1</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine4ChillRollMDO13.php'>MDO Pump Preheating 2</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine4ChillRollMDO14.php'>MDO Pump Preheating 3</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine4ChillRollMDO15.php'>MDO Pump Preheating 4</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine4ChillRollMDO16.php'>MDO Pump Preheating 5</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4ChillRollMDO17.php'>MDO Pump Drawing 1</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine4ChillRollMDO18.php'>MDO Pump Drawing 2</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine4ChillRollMDO19.php'>MDO Pump Drawing 3</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine4ChillRollMDO20.php'>MDO Pump Annealing 1</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine4ChillRollMDO21.php'>MDO Pump Annealing 2</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>TDO</th>

			<tr>

			</tr>
		</tr>
	';

	$i=0;
	while($i<=27)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4TDO1.php'>TDO Fan 1 OS</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4TDO2.php'>TDO Fan 2 OS</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4TDO3.php'>TDO Fan 3 OS</a></td>
			
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4TDO4.php'>TDO Fan 4 OS</a></td>
			
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4TDO5.php'>TDO Fan 5 OS</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4TDO6.php'>TDO Fan 6 OS</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4TDO7.php'>TDO Fan 7 OS</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine4TDO8.php'>TDO Fan 8 OS</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4TDO9.php'>TDO Fan 9 OS</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4TDO10.php'>TDO Fan 10 OS</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4TDO11.php'>TDO Fan 11 OS</a></td>
 
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine4TDO12.php'>TDO Fan 12 OS</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine4TDO13.php'>TDO Air Shower Fan 13 OS</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine4TDO14.php'>TDO Fan 1 DS</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine4TDO15.php'>TDO Fan 2 DS</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine4TDO16.php'>TDO Fan 3 DS</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4TDO17.php'>TDO Fan 4 DS</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine4TDO18.php'>TDO Fan 5 DS</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine4TDO19.php'>TDO Fan 6 DS</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine4TDO20.php'>TDO Fan 7 DS</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine4TDO21.php'>TDO Fan 8 DS</a></td>

			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine4TDO22.php'>TDO Fan 9 DS</a></td>

			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine4TDO23.php'>TDO Fan 10 DS</a></td>

			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine4TDO24.php'>TDO Fan 11 DS</a></td>

			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine4TDO25.php'>TDO Fan 12 DS</a></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine4TDO26.php'>TDO Air Shower Fan 13 DS</a></td>

			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine4TDO27.php'>DC Motor TDO-Drive</a></td>

			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine4TDO28.php'>AC Motor Cooling TDO-Drive</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Pull Roll</th>

			<tr>

			</tr>
		</tr>
	';

	$i=0;
	while($i<=11)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4PullRoll1.php'>DC Pull Roll 1</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4PullRoll2.php'>DC Pull Roll 2</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4PullRoll3.php'>Cooling Pump 1</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4PullRoll4.php'>Cooling Pump 2</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4PullRoll5.php'>Pompa Cooling Flame</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4PullRoll6.php'>Pompa Radiator Flame</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine4PullRoll7.php'>Oxon-Corona Exhaust Fan 1</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine4PullRoll8.php'>Oxon-Corona Exhaust Fan 2</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine4PullRoll9.php'>Grinder - Exhaust Fan</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine4PullRoll10.php'>Grinder - Small Grinder</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine4PullRoll11.php'>Grinder - Flake Conveyor Fan</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine4PullRoll12.php'>Flame Treater Mixture Blower</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Winder</th>

			<tr>

			</tr>
		</tr>
	';

	$i=0;
	while($i<=5)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine4Winder1.php'>DC Contact Roll</a></td>

			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine4Winder2.php'>Contact-Roll Fan Cooling Blower</a></td>

			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine4Winder3.php'>DC Turning</a></td>

			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine4Winder4.php'>DC Winder-A</a></td>

			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine4Winder5.php'>DC Winder-B</a></td>

			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine4Winder6.php'>Hydraulic Pump</a></td>

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