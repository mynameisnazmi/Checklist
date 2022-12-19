<html>
<body>

<h1>Result Form Checklist Electrical Line 2</h1>

<table border = 1 width = 500>

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_Line_3_rawmaterial` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_Line_3_extrussion` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_Line_3_mdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_Line_3_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_Line_3_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_Line_3_winder` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$data = mysql_fetch_row($query);
	$data1 = mysql_fetch_row($query1);
	$data2 = mysql_fetch_row($query2);
	$data3 = mysql_fetch_row($query3);
	$data4 = mysql_fetch_row($query4);
	$data5 = mysql_fetch_row($query5);

	
	if($query=='0'){
		echo"Data Raw Material Tidak Ada";
	}
	else{
		echo"<h3>Date :	 $hari-$bulan-$tahun</h3>";
	}

	echo"<h3>Nama Pelaksana :  $data[1]</h3>";
	echo"<h3>Status :  $data[2]ed ($data[3])</h3>";

	echo'
		<tr>
		<th >No</th>
		<th >Raw Material</th>
			<tr></tr>
		</tr>
	';

	$i=0;
	while($i<=9)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3RawMaterial1.php'>Transfer Material Silo</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3RawMaterial2.php'>Dosing PP1</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3RawMaterial3.php'>Dosing AD</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3RawMaterial4.php'>Dosing Regran</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3RawMaterial5.php'>Rotary Valve</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3RawMaterial6.php'>Autoloader Dosing PP1</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3RawMaterial7.php'>Autoloader Dosing Add</a></td>

			</tr>
			";
		}		
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine3RawMaterial8.php'>Autoloader Dosing Regran</a></td>

			</tr>
			";
		}		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine3RawMaterial9.php'>Mixer</a></td>

			</tr>
			";
		}		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine3RawMaterial10.php'>Mixer Silo</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th >No</th>
		<th >Extrusion</th>
			<tr>			</tr>
		</tr>
	';

	$i=0;
	while($i<=24)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3Ext1.php'>Drive EA</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3Ext2.php'>Fan Drive EA</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3Ext3.php'>Gear Oil Pump</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3Ext4.php'>Pump Filter EA</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3Ext5.php'>Pump HCU 1</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3Ext6.php'>Pump HCU 2</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3Ext7.php'>Pump HCU 3</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine3Ext8.php'>Feeding Zone EA</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine3Ext9.php'>Drive Cramer Feeder</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine3Ext10.php'>Fan Drive Cramer Feeder</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine3Ext11.php'>Drive Metering Pump</a></td>

			</tr
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine3Ext12.php'>Fan Drive Metering Pump</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine3Ext13.php'>Drive Chill Roll</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine3Ext14.php'>Fan Drive Chill Roll</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine3Ext15.php'>Air Knife</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine3Ext16.php'>Water Removal</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3Ext17.php'>Pump Chill Roll</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine3Ext18.php'>Water Bath</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine3Ext19.php'>Drive EB 1</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine3Ext20.php'>Fan Drive EB 1</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine3Ext21.php'>Autoloader EB 1</a></td>

			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine3Ext22.php'>Drive EB 2</a></td>

			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine3Ext23.php'>Fan Drive EB 2</a></td>

			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine3Ext24.php'>Autoloader EB 2</a></td>

			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine3Ext25.php'>Feeding Zone EB</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th >No</th>
		<th >MDO</th>
			<tr>			</tr>
		</tr>
	';

	$i=0;
	while($i<=17)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3MDO1.php'>Drive MA</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3MDO2.php'>Fan Drive MA</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3MDO3.php'>Drive MB</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3MDO4.php'>Fan Drive MB</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3MDO5.php'>Drive MC</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3MDO6.php'>Fan Drive MC</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3MDO7.php'>Auxilary MDO</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine3MDO8.php'>Fan Auxilary MDO</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine3MDO9.php'>Pump MDO 1</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine3MDO10.php'>Pump MDO 2</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine3MDO11.php'>Pump MDO 3</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine3MDO12.php'>Pump MDO 4</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine3MDO13.php'>Pump MDO 5</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine3MDO14.php'>Pump MDO 6</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine3MDO15.php'>Pump MDO 7</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine3MDO16.php'>Pump MDO 8</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3MDO17.php'>Pump MDO 9</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine3MDO18.php'>Pump MDO 10</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th >No</th>
		<th >TDO</th>
			<tr>			</tr>
		</tr>
	';

	$i=0;
	while($i<=18)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3TDO1.php'>Edge Guide TDO</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3TDO2.php'>Lubrication Inlet</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3TDO3.php'>Lubrication Outlet</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3TDO4.php'>Chain Lubrication</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3TDO5.php'>Fan Blower TDO 1</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3TDO6.php'>Fan Blower TDO 2</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3TDO7.php'>Fan Blower TDO 3</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine3TDO8.php'>Fan Blower TDO 4</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine3TDO9.php'>Fan Blower TDO 5</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine3TDO10.php'>Fan Blower TDO 6</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine3TDO11.php'>Fan Blower TDO 7</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine3TDO12.php'>Fan Blower TDO 8</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine3TDO13.php'>Fan Blower TDO 9</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine3TDO14.php'>Fan Blower TDO 10</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine3TDO15.php'>Exhaust TDO In</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine3TDO16.php'>Exhaust TDO Out</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine3TDO17.php'>Exhaust TDO Out</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine3TDO18.php'>Drive TDO</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine3TDO19.php'>Fan Drive TDO</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th >No</th>
		<th >Pull Roll</th>
			<tr>			</tr>
		</tr>
	';

	$i=0;
	while($i<=15)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3PullRoll1.php'>Drive Pull Roll 1</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3PullRoll2.php'>Fan Drive Pull Roll 1</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3PullRoll3.php'>Drive Pull Roll 2</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3PullRoll4.php'>Fan Drive Pull Roll 2</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3PullRoll5.php'>Edge Trim Exh Fan</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3PullRoll6.php'>Edge Trim Grinder</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3PullRoll7.php'>Fluff Transfer Grinder</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine3PullRoll8.php'>Edge Puller OS</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine3PullRoll9.php'>Edge Puller DS</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine3PullRoll10.php'>Pump Cooling PR 1</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine3PullRoll11.php'>Pump Cooling PR 2</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine3PullRoll12.php'>Pump Cooling Roll</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine3PullRoll13.php'>Ozon Exhaust Corona 1</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine3PullRoll14.php'>Ozon Exhaust Corona 2</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine3PullRoll15.php'>Drive Contact Roll</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine3PullRoll16.php'>Fan Drive Contact Roll</a></td>

			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th >No</th>
		<th >Winder</th>
			<tr>			</tr>
		</tr>
	';

	$i=0;
	while($i<=6)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine3Winder1.php'>Drive WA</a></td>

			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine3Winder2.php'>Fan Drive WA</a></td>

			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine3Winder3.php'>Drive WB</a></td>

			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine3Winder4.php'>Fan Drive WB</a></td>

			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine3Winder5.php'>Drive Turning Winder</a></td>

			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine3Winder6.php'>Fan Drive Turning Winder</a></td>

			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine3Winder7.php'>Cutting Winder</a></td>

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