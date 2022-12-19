<<html>
<body>

<h1>Result Form Checklist Electrical Line 5</h1>

<table border = 1 width = 500>

<?php
include 'koneksi.php';
	session_start();

	$hari = $_POST['Hari'];
	$bulan = $_POST['Bulan'];
	$tahun = $_POST['Tahun'];

	$_SESSION["tanggal"]="$tahun-$bulan-$hari";
	
	$query = mysql_query("SELECT * FROM `form_checklist_line_5_resinsilo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query1 = mysql_query("SELECT * FROM `form_checklist_line_5_ext` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query2 = mysql_query("SELECT * FROM `form_checklist_line_5_chillrollmdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query3 = mysql_query("SELECT * FROM `form_checklist_line_5_tdo` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query4 = mysql_query("SELECT * FROM `form_checklist_line_5_pullroll` WHERE Tanggal='$tahun-$bulan-$hari' ");
	$query5 = mysql_query("SELECT * FROM `form_checklist_line_5_winder` WHERE Tanggal='$tahun-$bulan-$hari' ");
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
	while($i<=4)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5ResinSilo1.php'>Resin Transfer Blower Feeding Trench</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5ResinSilo2.php'>Resin Rotary Valve Feeding Trench</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5ResinSilo3.php'>Silo Conveying  Blower Fan</a></td>

			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5ResinSilo4.php'>Silo Rotary Valve</a></td>

			</tr>
			";
		}
		elseif($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5ResinSilo5.php'>Melt-Ext Vertical Mixer Screw</a></td>

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
	while($i<=70)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5Ext1.php'>DC Melt-Ext</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5Ext2.php'>Melt-Ext Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5Ext3.php'>DC Metering-Ext</a></td>

			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5Ext4.php'>Metering-Ext Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5Ext5.php'>DC Co-Ext 1 </a></td>

			</tr>
			";
		}
		elseif($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine5Ext6.php'>Co-Ext1 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine5Ext7.php'>DC Co-Ext 2</a></td>

			</tr>
			";
		}
		elseif($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine5Ext8.php'>Co-Ext2 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==8){
			echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine5Ext9.php'>Melt-Ext Gear Box Oil Pump</a></td>

			</tr>
			";
		}
		elseif($i==9){
			echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine5Ext10.php'>Melt-Ext Gear Box Oil Pump 1</a></td>

			</tr>
			";
		}
		elseif($i==10){
			echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine5Ext11.php'>Melt-Ext Filter Preheating Oil Pump 2</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine5Ext12.php'>Metering-Ext Gear Box Oil Pump</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine5Ext13.php'>Co-Ext 1 Auto Loader</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine5Ext14.php'>Co-Ext 2 Auto Loader</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine5Ext15.php'>EA Panel Temperature</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine5Ext16.php'>Cascade-Ext Panel Temperature</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine5Ext17.php'>Control Room Temperature</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine5Ext18.php'>Melt-Ext Heater HCU Zone 1</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine5Ext19.php'>Melt-Ext Heater HCU Zone 2</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine5Ext20.php'>Melt-Ext Heater HCU Zone 3</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine5Ext21.php'>Melt-Ext Heater HCU Zone 4</a></td>

			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine5Ext22.php'>Melt-Ext Heater HCU Zone 5</a></td>

			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine5Ext23.php'>Melt-Ext Heater HCU Zone 6</a></td>

			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine5Ext24.php'>Melt-Ext Heater HCU Zone 7</a></td>

			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine5Ext25.php'>Melt-Ext Heater HCU Zone 8</a></td>

			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine5Ext26.php'>Melt-Ext Heater HCU Zone 9</a></td>

			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine5Ext27.php'>Metering-Ext Heater HCU Zone 1</a></td>

			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine5Ext28.php'>Metering-Ext Heater HCU Zone 2</a></td>

			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>29</td>
			<td><a href='WebTrendLine5Ext29.php'>Metering-Ext Heater HCU Zone 3</a></td>

			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>30</td>
			<td><a href='WebTrendLine5Ext30.php'>Metering-Ext Heater HCU Zone 4</a></td>

			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>31</td>
			<td><a href='WebTrendLine5Ext31.php'>Metering-Ext Heater HCU Zone 5</a></td>

			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>32</td>
			<td><a href='WebTrendLine5Ext32.php'>Metering-Ext Heater HCU Zone 6</a></td>

			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>33</td>
			<td><a href='WebTrendLine5Ext33.php'>Metering-Ext Heater HCU Zone 7</a></td>

			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>34</td>
			<td><a href='WebTrendLine5Ext34.php'>Metering-Ext Heater HCU Zone 8</a></td>

			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>35</td>
			<td><a href='WebTrendLine5Ext35.php'>Metering-Ext Heater HCU Zone 9</a></td>

			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>36</td>
			<td><a href='WebTrendLine5Ext36.php'>Metering-Ext Heater HCU Zone 10</a></td>

			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>37</td>
			<td><a href='WebTrendLine5Ext37.php'>Metering-Ext Heater HCU Zone 11</a></td>

			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>38</td>
			<td><a href='WebTrendLine5Ext38.php'>Metering-Ext Heater HCU Zone 12</a></td>

			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>39</td>
			<td><a href='WebTrendLine5Ext39.php'>Metering-Ext Heater HCU Zone 13</a></td>

			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>40</td>
			<td><a href='WebTrendLine5Ext40.php'>Metering-Ext Heater HCU Zone 14</a></td>

			</tr>
			";
		}
		elseif($i==40){
		echo"
			<tr>
			<td>41</td>
			<td><a href='WebTrendLine5Ext41.php'>Metering-Ext Heater HCU Zone 15</a></td>

			</tr>
			";
		}
		elseif($i==41){
		echo"
			<tr>
			<td>42</td>
			<td><a href='WebTrendLine5Ext42.php'>Metering-Ext Heater HCU Zone 16</a></td>

			</tr>
			";
		}
		elseif($i==42){
		echo"
			<tr>
			<td>43</td>
			<td><a href='WebTrendLine5Ext43.php'>Metering-Ext Heater HCU Zone 17</a></td>

			</tr>
			";
		}
		elseif($i==43){
		echo"
			<tr>
			<td>44</td>
			<td><a href='WebTrendLine5Ext44.php'>Metering-Ext Heater HCU Zone 18</a></td>

			</tr>
			";
		}
		elseif($i==44){
		echo"
			<tr>
			<td>45</td>
			<td><a href='WebTrendLine5Ext45.php'>Metering-Ext Heater HCU Zone 19</a></td>

			</tr>
			";
		}
		elseif($i==45){
		echo"
			<tr>
			<td>46</td>
			<td><a href='WebTrendLine5Ext46.php'>Metering-Ext Heater HCU Zone 20</a></td>

			</tr>
			";
		}
		elseif($i==46){
		echo"
			<tr>
			<td>47</td>
			<td><a href='WebTrendLine5Ext47.php'>Metering-Ext Heater HCU Zone 21</a></td>

			</tr>
			";
		}
		elseif($i==47){
		echo"
			<tr>
			<td>48</td>
			<td><a href='WebTrendLine5Ext48.php'>Metering-Ext Heater HCU Zone 22</a></td>

			</tr>
			";
		}
		elseif($i==48){
		echo"
			<tr>
			<td>49</td>
			<td><a href='WebTrendLine5Ext49.php'>Metering-Ext Heater HCU Zone 23</a></td>

			</tr>
			";
		}
		elseif($i==49){
		echo"
			<tr>
			<td>50</td>
			<td><a href='WebTrendLine5Ext50.php'>Co-Ext1 Heater HCU Zone 1</a></td>

			</tr>
			";
		}
		elseif($i==50){
		echo"
			<tr>
			<td>51</td>
			<td><a href='WebTrendLine5Ext51.php'>Co-Ext1 Heater HCU Zone 2</a></td>

			</tr>
			";
		}
		elseif($i==51){
		echo"
			<tr>
			<td>52</td>
			<td><a href='WebTrendLine5Ext52.php'>Co-Ext1 Heater HCU Zone 3</a></td>

			</tr>
			";
		}
		elseif($i==52){
		echo"
			<tr>
			<td>53</td>
			<td><a href='WebTrendLine5Ext53.php'>Co-Ext1 Heater HCU Zone 4</a></td>

			</tr>
			";
		}
		elseif($i==53){
		echo"
			<tr>
			<td>54</td>
			<td><a href='WebTrendLine5Ext54.php'>Co-Ext1 Heater HCU Zone 5</a></td>

			</tr>
			";
		}
		elseif($i==54){
		echo"
			<tr>
			<td>55</td>
			<td><a href='WebTrendLine5Ext55.php'>Co-Ext1 Heater HCU Zone 6</a></td>

			</tr>
			";
		}
		elseif($i==55){
		echo"
			<tr>
			<td>56</td>
			<td><a href='WebTrendLine5Ext56.php'>Co-Ext1 Heater HCU Zone 7</a></td>

			</tr>
			";
		}
		elseif($i==56){
		echo"
			<tr>
			<td>57</td>
			<td><a href='WebTrendLine5Ext57.php'>Co-Ext1 Heater HCU Zone 8</a></td>

			</tr>
			";
		}
		elseif($i==57){
		echo"
			<tr>
			<td>58</td>
			<td><a href='WebTrendLine5Ext58.php'>Co-Ext1 Heater HCU Zone 9</a></td>

			</tr>
			";
		}
		elseif($i==58){
		echo"
			<tr>
			<td>59</td>
			<td><a href='WebTrendLine5Ext59.php'>Co-Ext1 Heater HCU Zone 10</a></td>

			</tr>
			";
		}
		elseif($i==59){
		echo"
			<tr>
			<td>60</td>
			<td><a href='WebTrendLine5Ext60.php'>Co-Ext1 Heater HCU Zone 11</a></td>

			</tr>
			";
		}
		elseif($i==60){
		echo"
			<tr>
			<td>61</td>
			<td><a href='WebTrendLine5Ext61.php'>Co-Ext2 Heater HCU Zone 1</a></td>

			</tr>
			";
		}
		elseif($i==61){
		echo"
			<tr>
			<td>62</td>
			<td><a href='WebTrendLine5Ext62.php'>Co-Ext2 Heater HCU Zone 2</a></td>

			</tr>
			";
		}
		elseif($i==62){
		echo"
			<tr>
			<td>63</td>
			<td><a href='WebTrendLine5Ext63.php'>Co-Ext2 Heater HCU Zone 3</a></td>

			</tr>
			";
		}
		elseif($i==63){
		echo"
			<tr>
			<td>64</td>
			<td><a href='WebTrendLine5Ext64.php'>Co-Ext2 Heater HCU Zone 4</a></td>

			</tr>
			";
		}
		elseif($i==64){
		echo"
			<tr>
			<td>65</td>
			<td><a href='WebTrendLine5Ext65.php'>Co-Ext2 Heater HCU Zone 5</a></td>

			</tr>
			";
		}
		elseif($i==65){
		echo"
			<tr>
			<td>66</td>
			<td><a href='WebTrendLine5Ext66.php'>Co-Ext2 Heater HCU Zone 6</a></td>

			</tr>
			";
		}
		elseif($i==66){
		echo"
			<tr>
			<td>67</td>
			<td><a href='WebTrendLine5Ext67.php'>Co-Ext2 Heater HCU Zone 7</a></td>

			</tr>
			";
		}
		elseif($i==67){
		echo"
			<tr>
			<td>68</td>
			<td><a href='WebTrendLine5Ext68.php'>Co-Ext2 Heater HCU Zone 8</a></td>

			</tr>
			";
		}
		elseif($i==68){
		echo"
			<tr>
			<td>69</td>
			<td><a href='WebTrendLine5Ext69.php'>Co-Ext2 Heater HCU Zone 9</a></td>

			</tr>
			";
		}
		elseif($i==69){
		echo"
			<tr>
			<td>70</td>
			<td><a href='WebTrendLine5Ext70.php'>Co-Ext2 Heater HCU Zone 10</a></td>

			</tr>
			";
		}
		elseif($i==70){
		echo"
			<tr>
			<td>71</td>
			<td><a href='WebTrendLine5Ext71.php'>Co-Ext2 Heater HCU Zone 11</a></td>

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
	while($i<=22)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5ChillRollMDO1.php'>DC Chill Roll</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5ChillRollMDO2.php'>Chill-Roll Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5ChillRollMDO3.php'>Air Knife</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5ChillRollMDO4.php'>Water Removal</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5ChillRollMDO5.php'>Chill Roll Drum Water Pump</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine5ChillRollMDO6.php'>Chill Roll Water Bath Pump</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine5ChillRollMDO7.php'>DC MDO-A</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine5ChillRollMDO8.php'>MDO-A Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine5ChillRollMDO9.php'>DC MDO-B</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine5ChillRollMDO10.php'>MDO-B Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine5ChillRollMDO11.php'>DC MDO-C</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine5ChillRollMDO12.php'>MDO-C Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine5ChillRollMDO13.php'>MDO Pump Preheating 1</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine5ChillRollMDO14.php'>MDO Pump Preheating 2</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine5ChillRollMDO15.php'>MDO Pump Preheating 3</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine5ChillRollMDO16.php'>MDO Pump Preheating 4</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine5ChillRollMDO17.php'>MDO Pump Preheating 5</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine5ChillRollMDO18.php'>MDO Pump Drawing 1</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine5ChillRollMDO19.php'>MDO Pump Drawing 2</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine5ChillRollMDO20.php'>MDO Pump Drawing 3</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine5ChillRollMDO21.php'>MDO Pump Annealing 1</a></td>

			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine5ChillRollMDO22.php'>MDO Pump Annealing 2</a></td>

			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine5ChillRollMDO23.php'>DC Auxiliary Winder</a></td>

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
	while($i<=29)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5TDO1.php'>TDO Fan PH1-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5TDO2.php'>TDO Fan PH1-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5TDO3.php'>TDO Fan PH2-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5TDO4.php'>TDO Fan PH2-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5TDO5.php'>TDO Fan PH2-3 OS</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine5TDO6.php'>TDO Fan PH3-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine5TDO7.php'>TDO Fan PH3-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine5TDO8.php'>TDO Fan PH3-3 DS</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine5TDO9.php'>TDO Fan Drawing1-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine5TDO10.php'>TDO Fan Drawing1-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine5TDO11.php'>TDO Fan Drawing2-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine5TDO12.php'>TDO Fan Drawing2-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine5TDO13.php'>TDO Fan Drawing3-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine5TDO14.php'>TDO Fan Drawing3-2 DS</a></td>

			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine5TDO15.php'>TDO Fan Drawing4-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine5TDO16.php'>TDO Fan Drawing4-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine5TDO17.php'>TDO Fan Annealing1-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine5TDO18.php'>TDO Fan Annealing1-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine5TDO19.php'>TDO Fan Annealing2-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine5TDO20.php'>TDO Fan Annealing2-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine5TDO21.php'>TDO Fan Annealing3-1 DS</a></td>

			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine5TDO22.php'>TDO Fan Annealing3-2 OS</a></td>

			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine5TDO23.php'>TDO Air Shower 1 DS</a></td>

			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine5TDO24.php'>TDO Air Shower 2 OS</a></td>

			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine5TDO25.php'>DC Motor TDO-Drive</a></td>

			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine5TDO26.php'>AC Motor Cooling TDO-Drive</a></td>

			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine5TDO27.php'>Edge Guide DS</a></td>

			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine5TDO28.php'>Edge Guide OS</a></td>

			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>29</td>
			<td><a href='WebTrendLine5TDO29.php'>TDO Bolt Lubrication Pump</a></td>

			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>30</td>
			<td><a href='WebTrendLine5TDO30.php'>TDO Chain Lubrication Pump</a></td>

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
	while($i<=27)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5PullRoll1.php'>DC Pull Roll 1</a></td>

			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5PullRoll2.php'>Pull-Roll1 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5PullRoll3.php'>DC Pull Roll 2</a></td>

			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5PullRoll4.php'>Pull-Roll2 Fan Cooling Blower </a></td>

			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5PullRoll5.php'>DC Pull Roll 3</a></td>

			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine5PullRoll6.php'>Pull-Roll 3 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine5PullRoll7.php'>DC Pull Roll 4</a></td>

			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine5PullRoll8.php'>Pull-Roll4 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine5PullRoll9.php'>DC Pull Roll 5</a></td>

			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine5PullRoll10.php'>Pull-Roll5 Fan Cooling Blower</a></td>

			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine5PullRoll11.php'>Cooling Pump HCU 1</a></td>

			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine5PullRoll12.php'>Cooling Pump HCU 2</a></td>

			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine5PullRoll13.php'>Cooling Pump HCU 3</a></td>

			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine5PullRoll14.php'>Oxon-Corona Exhaust Fan 1</a></td>

			</tr>
			";
		}
		
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine5PullRoll15.php'>Oxon-Corona Exhaust Fan 2</a></td>

			</tr>
			";
		}
		
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine5PullRoll16.php'>Grinder-Exhaust Fan</a></td>

			</tr>
			";
		}
		
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine5PullRoll117.php'>Grinder-Small Grinder</a></td>

			</tr>
			";
		}
		
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine5PullRoll18.php'>Grinder-Flake Conveyor Fan</a></td>

			</tr>
			";
		}
		
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine5PullRoll19.php'>Flame Treater Mixture Blower</a></td>

			</tr>
			";
		}
		
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine5PullRoll20.php'>Corona Generator Room Temperature</a></td>

			</tr>
			";
		}
		
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine5PullRoll21.php'>Heater HCU Zone 1</a></td>

			</tr>
			";
		}
		
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine5PullRoll22.php'>Heater HCU Zone 2</a></td>

			</tr>
			";
		}
		
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine5PullRoll23.php'>Heater HCU Zone 1-1</a></td>

			</tr>
			";
		}
		
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine5PullRoll24.php'>Heater HCU Zone 1-2</a></td>

			</tr>
			";
		}
		
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine5PullRoll25.php'>Heater HCU Zone 1-3</a></td>

			</tr>
			";
		}
		
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine5PullRoll26.php'>Heater HCU Zone 2-3</a></td>

			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine5PullRoll27.php'>Heater HCU Zone 2-4</a></td>

			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine5PullRoll28.php'>Heater HCU zone 2-5</a></td>

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
	while($i<=11)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine5Winder1.php'>DC Contact Roll</a></td>

			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine5Winder2.php'>Contact-Roll Fan Cooling Blower</a></td>

			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine5Winder3.php'>DC Turning</a></td>

			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine5Winder4.php'>Turning Fan Cooling Blower</a></td>

			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine5Winder5.php'>Cutting Arm Knife Horizontal</a></td>

			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine5Winder6.php'>Cutting Arm Rotary Knife</a></td>

			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine5Winder7.php'>DC Winder-A</a></td>

			</tr>
			";
		}
		if($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine5Winder8.php'>Winder-A Fan Cooling Blower</a></td>

			</tr>
			";
		}
		if($i==8){
			echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine5Winder9.php'>DC Winder-B</a></td>

			</tr>
			";
		}
		if($i==9){
			echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine5Winder10.php'>Winder-B Fan Cooling Blower</a></td>

			</tr>
			";
		}
		if($i==10){
			echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine5Winder11.php'>Hydraulic Pump</a></td>

			</tr>
			";
		}
		if($i==11){
			echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine5Winder12.php'>Air Cushion Blower</a></td>

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