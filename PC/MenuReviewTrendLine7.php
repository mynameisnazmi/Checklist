<html>
<body>

<h1>Menu Trend Electrical Line 7</h1>

<table border = 1 width = 500>

<?php
include 'koneksi.php';
	
	echo'
		<tr>
		<th>No</th>
		<th>Motor Casting</th>
		</tr>
	';

	$i=0;
	while($i<=5)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Casting1.php'>Fan Water Removal Chill Roll (+SC=321N3-M011)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7Casting2.php'>Casting Unit System Water Removal Fan (+SC=321N3-M514)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7Casting3.php'>Pump Chill Roll (+SC=324U1-M010)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7Casting4.php'>Pump Water Bath (+SC=324U1-M110)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7Casting5.php'>Motor Air Knife (+SC=321MK-M015)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Casting6.php'>Die Bolt Cooling Fan (+SH32=292Q1)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>Extrusion</th>
		</tr>
	';

	$i=0;
	while($i<=7)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Ext1.php'>Main Extruder (+SE11=271M1-M012)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7Ext2.php'>Melt Pump Main Extruder (+SE52=271M4-M015)</a></td>
			</tr>
			";
		}
		elseif($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7Ext3.php'>Co Extruder 1 (+SE33=281M1-M015)</a></td>
			</tr>
			";
		}
		elseif($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7Ext4.php'>Co Extruder 2 (+SE34=281M2-M015)</a></td>
			</tr>
			";
		}
		elseif($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7Ext5.php'>Melt Pump Co Extruder 2 (+SE53=281MB-M015)</a></td>
			</tr>
			";
		}
		elseif($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Ext6.php'>Co Extruder 3 (+SE43=281M3-M015)</a></td>
			</tr>
			";
		}
		elseif($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Ext7.php'>Melt Pump Co Extruder 3 (+SE53=281MC-M015)</a></td>
			</tr>
			";
		}
		elseif($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7Ext8.php'>Co Extruder 4(+SE44=281M4-M015)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//

	echo'
		<tr>
		<th>No</th>
		<th>Motor TDO Airing</th>
		</tr>
	';

	$i=0;
	while($i<=4)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDOAiring1.php'>Exhaust Fan (+SG63=347N1-M014)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7TDOAiring2.php'>Exhaust Fan (+SG63=347N1-M114)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7TDOAiring3.php'>Exhaust Fan Neutral Top (+SG63=347N1-M214)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7TDOAiring4.php'>Exhaust Fan Neutral Bottom (+SG63=347N1-M314)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7TDOAiring5.php'>LPG Exhaust Fan</a></td>
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
	while($i<=69)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDO1.php'>Line Drive Outlet Left (+SD42=341M5-M015)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7TDO2.php'>Cooling Drive Outlet Left (+SD42=341M5-M050)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7TDO3.php'>Line Drive Outlet Right (+SD43=341M6-M015)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7TDO4.php'>Cooling Drive Outlet Right (+SD43=341M6-M050)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7TDO5.php'>Preheating 1 Fan 1 (+SG33=343N1-M014)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7TDO6.php'>Preheating 1 Fan 2 (+SG33=343N1-M024)</a></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7TDO7.php'>Preheating 1 Fan 3 (+SG33=343N1-M034)</a></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7TDO8.php'>Preheating 2 Fan 1 (+SG33=343N1-M114)</a></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine7TDO9.php'>Preheating 2 Fan 2 (+SG33=343N1-M124)</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine7TDO10.php'>Preheating 2 Fan 3 (+SG33=343N1-M134)</a></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine7TDO11.php'>Preheating 3 Fan 1 (+SG33=343N1-M214)</a></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine7TDO12.php'>Preheating 3 Fan 2 (+SG33=343N1-M224)</a></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine7TDO13.php'>Preheating 3 Fan 3 (+SG33=343N1-M234)</a></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine7TDO14.php'>Preheating 4 Fan 1 (+SG34=343N1-M314)</a></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine7TDO15.php'>Preheating 4 Fan 2 (+SG34=343N1-M324)</a></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine7TDO16.php'>Preheating 4 Fan 3 (+SG34=343N1-M334)</a></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7TDO17.php'>Preheating 5 Fan 1 (+SG34=343N1-M414)</a></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine7TDO18.php'>Preheating 5 Fan 2 (+SG34=343N1-M424)</a></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine7TDO19.php'>Preheating 5 Fan 3 (+SG34=343N1-M434)</a></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine7TDO20.php'>Preheating 6 Fan 1 (+SG34=343N1-M514)</a></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine7TDO21.php'>Preheating 6 Fan 2 (+SG34=343N1-M524)</a></td>
			</tr>
			";
		}
		elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine7TDO22.php'>Preheating 6 Fan 3 (+SG34=343N1-M534)</a></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine7TDO23.php'>Drawing 1 Fan 1 Top (+SG41=343N4-M014)</a></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine7TDO24.php'>Drawing 1 Fan 2 Top (+SG41=343N4-M214)</a></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine7TDO25.php'>Drawing 1 Fan 1 Bottom (+SG41=343N4-M114)</a></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine7TDO26.php'>Drawing 1 Fan 2 Bottom (+SG41=343N4-M314)</a></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine7TDO27.php'>Drawing 2 Fan 1 Top (+SG41=343N4-M414)</a></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine7TDO28.php'>Drawing 2 Fan 2 Top (+SG41=343N4-M614)</a></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>29</td>
			<td><a href='WebTrendLine7TDO29.php'>Drawing 2 Fan 1 Bottom (+SG41=343N4-M514)</a></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>30</td>
			<td><a href='WebTrendLine7TDO30.php'>Drawing 2 Fan 2 Bottom (+SG41=343N4-M714)</a></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>31</td>
			<td><a href='WebTrendLine7TDO31.php'>Drawing 3 Fan 1 Top (+SG41=343N4-M814)</a></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>32</td>
			<td><a href='WebTrendLine7TDO32.php'>Drawing 3 Fan 2 Top (+SG42=343M5-M014)</a></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>33</td>
			<td><a href='WebTrendLine7TDO33.php'>Drawing 3 Fan 1 Bottom (+SG41=343N4-M914)</a></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>34</td>
			<td><a href='WebTrendLine7TDO34.php'>Drawing 3 Fan 2 Bottom (+SG42=343M5-M114)</a></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>35</td>
			<td><a href='WebTrendLine7TDO35.php'>Drawing 4 Fan 1 Top (+SG42=343M5-M214)</a></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>36</td>
			<td><a href='WebTrendLine7TDO36.php'>Drawing 4 Fan 2 Top (+SG42=343M5-M414)</a></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>37</td>
			<td><a href='WebTrendLine7TDO37.php'>Drawing 4 Fan 1 Bottom (+SG42=343M5-M314)</a></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>38</td>
			<td><a href='WebTrendLine7TDO38.php'>Drawing 4 Fan 2 Bottom (+SG42=343M5-M514)</a></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>39</td>
			<td><a href='WebTrendLine7TDO39.php'>Drawing 5 Fan 1 Top (+SG42=343M5-M614)</a></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>40</td>
			<td><a href='WebTrendLine7TDO40.php'>Drawing 5 Fan 2 Top (+SG42=343M5-M814)</a></td>
			</tr>
			";
		}
		elseif($i==40){
		echo"
			<tr>
			<td>41</td>
			<td><a href='WebTrendLine7TDO41.php'>Drawing 5 Fan 1 Bottom (+SG42=343M5-M714)</a></td>
			</tr>
			";
		}
		elseif($i==41){
		echo"
			<tr>
			<td>42</td>
			<td><a href='WebTrendLine7TDO42.php'>Drawing 5 Fan 2 Bottom (+SG42=343M5-M914)</a></td>
			</tr>
			";
		}
		elseif($i==42){
		echo"
			<tr>
			<td>43</td>
			<td><a href='WebTrendLine7TDO43.php'>Annealing 1 Fan 1 Top (+SG52=343M7-M014)</a></td>
			</tr>
			";
		}
		elseif($i==43){
		echo"
			<tr>
			<td>44</td>
			<td><a href='WebTrendLine7TDO44.php'>Annealing 1 Fan 2 Top (+SG52=343M7-M214)</a></td>
			</tr>
			";
		}
		elseif($i==44){
		echo"
			<tr>
			<td>45</td>
			<td><a href='WebTrendLine7TDO45.php'>Annealing 1 Fan 1 Bottom (+SG52=343M7-M114)</a></td>
			</tr>
			";
		}
		elseif($i==45){
		echo"
			<tr>
			<td>46</td>
			<td><a href='WebTrendLine7TDO46.php'>Annealing 1 Fan 2 Bottom (+SG52=343M7-M314)</a></td>
			</tr>
			";
		}
		elseif($i==46){
		echo"
			<tr>
			<td>47</td>
			<td><a href='WebTrendLine7TDO47.php'>Annealing 2 Fan 1 Top (+SG52=343M7-M414)</a></td>
			</tr>
			";
		}
		elseif($i==47){
		echo"
			<tr>
			<td>48</td>
			<td><a href='WebTrendLine7TDO48.php'>Annealing 2 Fan 2 Top (+SG52=343M7-M614)</a></td>
			</tr>
			";
		}
		elseif($i==48){
		echo"
			<tr>
			<td>49</td>
			<td><a href='WebTrendLine7TDO49.php'>Annealing 2 Fan 1 Bottom (+SG52=343M7-M514)</a></td>
			</tr>
			";
		}
		elseif($i==49){
		echo"
			<tr>
			<td>50</td>
			<td><a href='WebTrendLine7TDO50.php'>Annealing 2 Fan 2 Bottom (+SG52=343M7-M714)</a></td>
			</tr>
			";
		}
		elseif($i==50){
		echo"
			<tr>
			<td>51</td>
			<td><a href='WebTrendLine7TDO51.php'>Annealing 3 Fan 1 Top (+SG52=343M7-M814)</a></td>
			</tr>
			";
		}
		elseif($i==51){
		echo"
			<tr>
			<td>52</td>
			<td><a href='WebTrendLine7TDO52.php'>Annealing 3 Fan 2 Top (+SG53=343N8-M014)</a></td>
			</tr>
			";
		}
		elseif($i==52){
		echo"
			<tr>
			<td>53</td>
			<td><a href='WebTrendLine7TDO53.php'>Annealing 3 Fan 1 Bottom (+SG52=343M7-M914)</a></td>
			</tr>
			";
		}
		elseif($i==53){
		echo"
			<tr>
			<td>54</td>
			<td><a href='WebTrendLine7TDO54.php'>Annealing 3 Fan 2 Bottom (+SG53=343N8-M114)</a></td>
			</tr>
			";
		}
		elseif($i==54){
		echo"
			<tr>
			<td>55</td>
			<td><a href='WebTrendLine7TDO55.php'>Annealing 4 Fan 1 Top (+SG53=343N8-M214)</a></td>
			</tr>
			";
		}
		elseif($i==55){
		echo"
			<tr>
			<td>56</td>
			<td><a href='WebTrendLine7TDO56.php'>Annealing 4 Fan 2 Top (+SG53=343N8-M414)</a></td>
			</tr>
			";
		}
		elseif($i==56){
		echo"
			<tr>
			<td>57</td>
			<td><a href='WebTrendLine7TDO57.php'>Annealing 4 Fan 1 Bottom (+SG53=343N8-M314)</a></td>
			</tr>
			";
		}
		elseif($i==57){
		echo"
			<tr>
			<td>58</td>
			<td><a href='WebTrendLine7TDO58.php'>Annealing 4 Fan 2 Bottom (+SG53=343N8-M514)</a></td>
			</tr>
			";
		}
		elseif($i==58){
		echo"
			<tr>
			<td>59</td>
			<td><a href='WebTrendLine7TDO59.php'>Annealing 5 Fan 1 Top (+SG53=343N8-M614)</a></td>
			</tr>
			";
		}
		elseif($i==59){
		echo"
			<tr>
			<td>60</td>
			<td><a href='WebTrendLine7TDO60.php'>Annealing 5 Fan 2 Top (+SG53=343N8-M814)</a></td>
			</tr>
			";
		}
		elseif($i==60){
		echo"
			<tr>
			<td>61</td>
			<td><a href='WebTrendLine7TDO61.php'>Annealing 5 Fan 1 Bottom (+SG53=343N8-M714)</a></td>
			</tr>
			";
		}
		elseif($i==61){
		echo"
			<tr>
			<td>62</td>
			<td><a href='WebTrendLine7TDO62.php'>Annealing 5 Fan 2 Bottom (+SG53=343N8-M914)</a></td>
			</tr>
			";
		}
		elseif($i==62){
		echo"
			<tr>
			<td>63</td>
			<td><a href='WebTrendLine7TDO63.php'>Annealing 6 Fan 1 Top (+SG53=343N9-M014)</a></td>
			</tr>
			";
		}
		elseif($i==63){
		echo"
			<tr>
			<td>64</td>
			<td><a href='WebTrendLine7TDO64.php'>Annealing 6 Fan 2 Top (+SG53=343N9-M214)</a></td>
			</tr>
			";
		}
		elseif($i==64){
		echo"
			<tr>
			<td>65</td>
			<td><a href='WebTrendLine7TDO65.php'>Annealing 6 Fan 1 Bottom (+SG53=343N9-M114)</a></td>
			</tr>
			";
		}
		elseif($i==65){
		echo"
			<tr>
			<td>66</td>
			<td><a href='WebTrendLine7TDO66.php'>Annealing 6 Fan 2 Bottom (+SG53=343N9-M314)</a></td>
			</tr>
			";
		}
		elseif($i==66){
		echo"
			<tr>
			<td>67</td>
			<td><a href='WebTrendLine7TDO67.php'>Film Edge Cooling Fan Left (+SG64=345N5-M014)</a></td>
			</tr>
			";
		}
		elseif($i==67){
		echo"
			<tr>
			<td>68</td>
			<td><a href='WebTrendLine7TDO68.php'>Film Edge Cooling Fan Right (+SG64=345N5-M114)</a></td>
			</tr>
			";
		}
		elseif($i==68){
		echo"
			<tr>
			<td>69</td>
			<td><a href='WebTrendLine7TDO69.php'>Edge Guide Fan Left (+SD41=341M1-M050)</a></td>
			</tr>
			";
		}
		elseif($i==69){
		echo"
			<tr>
			<td>70</td>
			<td><a href='WebTrendLine7TDO70.php'>Edge Guide Fan Right (+SD42=341M2-M050)</a></td>
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
	while($i<=39)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7TDOAS1.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M021)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7TDOAS2.php'>Cooling 1 Fan 1 Top (+SG61=345N1-M023)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7TDOAS3.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M071)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7TDOAS4.php'>Cooling 1 Fan 2 Top (+SG61=345N1-M073)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7TDOAS5.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M121)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7TDOAS6.php'>Cooling 1 Fan 1 Bottom (+SG61=345N1-M123)</a></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7TDOAS7.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M171)</a></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7TDOAS8.php'>Cooling 1 Fan 2 Bottom (+SG61=345N1-M173)</a></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine7TDOAS9.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M221)</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine7TDOAS10.php'>Cooling 2 Fan 1 Top (+SG61=345N1-M223)</a></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine7TDOAS11.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M271)</a></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine7TDOAS12.php'>Cooling 2 Fan 2 Top (+SG61=345N1-M273)</a></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine7TDOAS13.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M321)</a></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine7TDOAS14.php'>Cooling 2 Fan 1 Bottom (+SG61=345N1-M323)</a></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine7TDOAS15.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M371)</a></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine7TDOAS16.php'>Cooling 2 Fan 2 Bottom (+SG61=345N1-M373)</a></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine7TDOAS17.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M421)</a></td>
			</tr>
			";
		}
		elseif($i==17){
		echo"
			<tr>
			<td>18</td>
			<td><a href='WebTrendLine7TDOAS18.php'>Cooling 3 Fan 1 Top (+SG61=345N1-M423)</a></td>
			</tr>
			";
		}
		elseif($i==18){
		echo"
			<tr>
			<td>19</td>
			<td><a href='WebTrendLine7TDOAS19.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M471)</a></td>
			</tr>
			";
		}
		elseif($i==19){
		echo"
			<tr>
			<td>20</td>
			<td><a href='WebTrendLine7TDOAS20.php'>Cooling 3 Fan 2 Top (+SG61=345N1-M473)</a></td>
			</tr>
			";
		}
		elseif($i==20){
		echo"
			<tr>
			<td>21</td>
			<td><a href='WebTrendLine7TDOAS21.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M521)</a></td>
			</tr>
			";
		}elseif($i==21){
		echo"
			<tr>
			<td>22</td>
			<td><a href='WebTrendLine7TDOAS22.php'>Cooling 3 Fan 1 Bottom (+SG61=345N1-M523)</a></td>
			</tr>
			";
		}
		elseif($i==22){
		echo"
			<tr>
			<td>23</td>
			<td><a href='WebTrendLine7TDOAS23.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M571)</a></td>
			</tr>
			";
		}
		elseif($i==23){
		echo"
			<tr>
			<td>24</td>
			<td><a href='WebTrendLine7TDOAS24.php'>Cooling 3 Fan 2 Bottom (+SG61=345N1-M573)</a></td>
			</tr>
			";
		}
		elseif($i==24){
		echo"
			<tr>
			<td>25</td>
			<td><a href='WebTrendLine7TDOAS25.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M621)</a></td>
			</tr>
			";
		}
		elseif($i==25){
		echo"
			<tr>
			<td>26</td>
			<td><a href='WebTrendLine7TDOAS26.php'>Cooling 4 Fan 1 Top (+SG61=345N1-M623)</a></td>
			</tr>
			";
		}
		elseif($i==26){
		echo"
			<tr>
			<td>27</td>
			<td><a href='WebTrendLine7TDOAS27.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M671)</a></td>
			</tr>
			";
		}
		elseif($i==27){
		echo"
			<tr>
			<td>28</td>
			<td><a href='WebTrendLine7TDOAS28.php'>Cooling 4 Fan 2 Top (+SG61=345N1-M673)</a></td>
			</tr>
			";
		}
		elseif($i==28){
		echo"
			<tr>
			<td>29</td>
			<td><a href='WebTrendLine7TDOAS29.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M721)</a></td>
			</tr>
			";
		}
		elseif($i==29){
		echo"
			<tr>
			<td>30</td>
			<td><a href='WebTrendLine7TDOAS30.php'>Cooling 4 Fan 1 Bottom (+SG61=345N1-M723)</a></td>
			</tr>
			";
		}
		elseif($i==30){
		echo"
			<tr>
			<td>31</td>
			<td><a href='WebTrendLine7TDOAS31.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M771)</a></td>
			</tr>
			";
		}
		elseif($i==31){
		echo"
			<tr>
			<td>32</td>
			<td><a href='WebTrendLine7TDOAS32.php'>Cooling 4 Fan 2 Bottom (+SG61=345N1-M773)</a></td>
			</tr>
			";
		}
		elseif($i==32){
		echo"
			<tr>
			<td>33</td>
			<td><a href='WebTrendLine7TDOAS33.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M821)</a></td>
			</tr>
			";
		}
		elseif($i==33){
		echo"
			<tr>
			<td>34</td>
			<td><a href='WebTrendLine7TDOAS34.php'>Cooling 5 Fan 1 Top (+SG61=345N1-M823)</a></td>
			</tr>
			";
		}
		elseif($i==34){
		echo"
			<tr>
			<td>35</td>
			<td><a href='WebTrendLine7TDOAS35.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M871)</a></td>
			</tr>
			";
		}
		elseif($i==35){
		echo"
			<tr>
			<td>36</td>
			<td><a href='WebTrendLine7TDOAS36.php'>Cooling 5 Fan 2 Top (+SG61=345N1-M873)</a></td>
			</tr>
			";
		}
		elseif($i==36){
		echo"
			<tr>
			<td>37</td>
			<td><a href='WebTrendLine7TDOAS37.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M921)</a></td>
			</tr>
			";
		}
		elseif($i==37){
		echo"
			<tr>
			<td>38</td>
			<td><a href='WebTrendLine7TDOAS38.php'>Cooling 5 Fan 1 Bottom (+SG61=345N1-M923)</a></td>
			</tr>
			";
		}
		elseif($i==38){
		echo"
			<tr>
			<td>39</td>
			<td><a href='WebTrendLine7TDOAS39.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M971)</a></td>
			</tr>
			";
		}
		elseif($i==39){
		echo"
			<tr>
			<td>40</td>
			<td><a href='WebTrendLine7TDOAS40.php'>Cooling 5 Fan 2 Bottom (+SG61=345N1-M973)</a></td>
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
	while($i<=6)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Pullroll1.php'>Pump Heating Cooling Unit Inlet (+SPU12=374U1-M010)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7Pullroll2.php'>Pump Flame Treatment Top (+SPU12=374U1-M210)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7Pullroll3.php'>Pump Corona Bottom (+SPU12=374U1-M410)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7Pullroll4.php'>Pump Corona Top (+SPU12=374U1-M510)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7Pullroll5.php'>Pump Heating Cooling Unit Outlet (+SPU12=374U1-M610)</a></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Pullroll6.php'>Fan Corona Exhaust Top (+SPU12=371N4-M111)</a></td>
			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Pullroll7.php'>Fan Corona Exhaust Bottom (+SPU12=371N4-M011)</a></td>
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
	while($i<=7)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7Bigsilo1.php'>Big Bag Blowing Station Fan 1 (+SR12=211N1-M010)</a></td>
			</tr>
			";
		}
		if($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7Bigsilo2.php'>Big Bag Rotary Valve 1 (+SR12=211N1-M024)</a></td>
			</tr>
			";
		}
		if($i==2){
			echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7Bigsilo3.php'>Silo Blowing Station Fan 1 (+SR12=211N1-M110)</a></td>
			</tr>
			";
		}
		if($i==3){
			echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7Bigsilo4.php'>Rotary Valve 1 (+SR12=211T1-M014)</a></td>
			</tr>
			";
		}
		if($i==4){
			echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7Bigsilo5.php'>Rotary Valve 2 (+SR12=211T1-M114)</a></td>
			</tr>
			";
		}
		if($i==5){
			echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7Bigsilo6.php'>Rotary Valve 3 (+SR12=211T1-M164)</a></td>
			</tr>
			";
		}
		if($i==6){
			echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7Bigsilo7.php'>Big Bag Blowing Station Fan 2 (+SR12=211N1-M150)</a></td>
			</tr>
			";
		}
		if($i==7){
			echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7Bigsilo8.php'>Rotary Valve 1 (+SR12=)</a></td>
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
	while($i<=5)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7MDO1.php'>Drawing 1 (+SR13=331M5-M015)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7MDO2.php'>Drawing 2 (+SR13=331M6-M015)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7MDO3.php'>Drawing 3 (+SR13=331M7-M015)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7MDO4.php'>Drawing 4 (+SR13=331M8-M015)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7MDO5.php'>Drawing 5 (+SR13=331M9-M015)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7MDO6.php'>Drawing 6 (+SR13=331MA-M015)</a></td>
			</tr>
			";
		}
		$i++;
	}
	
	//
	
	echo'
		<tr>
		<th>No</th>
		<th>HCU MDO</th>
		</tr>
	';

	$i=0;
	while($i<=16)
	{
		if($i==0){
			echo"
			<tr>
			<td>1</td>
			<td><a href='WebTrendLine7MDOHCU1.php'>HCU Preheating 1 (+SMU=334U1-M010)</a></td>
			</tr>
			";
		}
		elseif($i==1){
			echo"
			<tr>
			<td>2</td>
			<td><a href='WebTrendLine7MDOHCU2.php'>HCU Preheating 2 (+SMU=334U1-M110)</a></td>
			</tr>
			";
		}
		elseif($i==2){
		echo"
			<tr>
			<td>3</td>
			<td><a href='WebTrendLine7MDOHCU3.php'>HCU Preheating 3 (+SMU=334U1-M210)</a></td>
			</tr>
			";
		}
		elseif($i==3){
		echo"
			<tr>
			<td>4</td>
			<td><a href='WebTrendLine7MDOHCU4.php'>HCU Preheating 4 (+SMU=334U1-M310)</a></td>
			</tr>
			";
		}
		elseif($i==4){
		echo"
			<tr>
			<td>5</td>
			<td><a href='WebTrendLine7MDOHCU5.php'>HCU Preheating 5 (+SMU=334U1-M410)</a></td>
			</tr>
			";
		}
		elseif($i==5){
		echo"
			<tr>
			<td>6</td>
			<td><a href='WebTrendLine7MDOHCU6.php'>HCU Preheating 6 (+SMU=334U1-M510)</a></td>
			</tr>
			";
		}
		elseif($i==6){
		echo"
			<tr>
			<td>7</td>
			<td><a href='WebTrendLine7MDOHCU7.php'>HCU Preheating 7 (+SMU=334U1-M610)</a></td>
			</tr>
			";
		}
		elseif($i==7){
		echo"
			<tr>
			<td>8</td>
			<td><a href='WebTrendLine7MDOHCU8.php'>HCU Preheating 8 (+SMU=334U1-M710)</a></td>
			</tr>
			";
		}
		elseif($i==8){
		echo"
			<tr>
			<td>9</td>
			<td><a href='WebTrendLine7MDOHCU9.php'>HCU Preheating 9 (+SMU=334U1-M810)</a></td>
			</tr>
			";
		}
		elseif($i==9){
		echo"
			<tr>
			<td>10</td>
			<td><a href='WebTrendLine7MDOHCU10.php'>HCU Drawing 1 (+SMU=334U4-M010)</a></td>
			</tr>
			";
		}
		elseif($i==10){
		echo"
			<tr>
			<td>11</td>
			<td><a href='WebTrendLine7MDOHCU11.php'>HCU Drawing 2 (+SMU=334U4-M110)</a></td>
			</tr>
			";
		}
		elseif($i==11){
		echo"
			<tr>
			<td>12</td>
			<td><a href='WebTrendLine7MDOHCU12.php'>HCU Drawing 3 (+SMU=334U4-M210)</a></td>
			</tr>
			";
		}
		elseif($i==12){
		echo"
			<tr>
			<td>13</td>
			<td><a href='WebTrendLine7MDOHCU13.php'>HCU Drawing 4 (+SMU=334U4-M310)</a></td>
			</tr>
			";
		}
		elseif($i==13){
		echo"
			<tr>
			<td>14</td>
			<td><a href='WebTrendLine7MDOHCU14.php'>HCU Drawing 5 (+SMU=334U4-M410)</a></td>
			</tr>
			";
		}
		elseif($i==14){
		echo"
			<tr>
			<td>15</td>
			<td><a href='WebTrendLine7MDOHCU15.php'>HCU Drawing 6 (+SMU=334U4-M510)</a></td>
			</tr>
			";
		}
		elseif($i==15){
		echo"
			<tr>
			<td>16</td>
			<td><a href='WebTrendLine7MDOHCU16.php'>HCU Annealing 1 (+SMU=334U7-M010)</a></td>
			</tr>
			";
		}
		elseif($i==16){
		echo"
			<tr>
			<td>17</td>
			<td><a href='WebTrendLine7MDOHCU17.php'>HCU Annealing 2 (+SMU=334U7-M110)</a></td>
			</tr>
			";
		}
		$i++;
	}
?>
</table>

<form method="POST" action="../MainPagePC.php">
<br><input type="submit" name="mainpagePC" value="Main Page">
</form>

</body>
</html>