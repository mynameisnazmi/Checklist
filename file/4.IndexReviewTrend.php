<html>

<body>

<form method="POST" action="4.WebTabelReview.php">	
	<center><h3><select hidden name="perintah">
	<option value="ReviewTrend">Review Trend</option>
	</select></h3></center>
	
	<center><h3>Line : <select name="line">
	<option value="Line 2">OPP Line 2</option>
	<option value="Line 3">OPP Line 3</option>
	<option value="Line 4">OPP Line 4</option>
	<option value="Line 5">OPP Line 5</option>
	<option value="Line 6">OPP Line 6</option>
	<option value="Line 7">OPP Line 7</option>
	<option value="PET">PET </option>
	</select></h3></center>
	
	<center><h3>Form : <select name="form">
	<option value="Electrical">Electrical</option>
	<option value="Mechanical">Mechanical</option>
	<option value="Produksi 1">Produksi 1</option>
	<option value="Produksi 2">Produksi 2</option>
	<option value="Produksi 3">Produksi 3</option>
	</select></h3></center>
	
	<center><h3>Item Name : <input type='text' onkeyup='showHint(this.value)' name='Item'></h3></center>
	<p><center>Suggestions: <span id="txt1Hint"></span></center></p>
		
	<center><h3>Paramater : <select name='Parameter'>
	<option value="VMDE">Vibrasi Motor DE</option>
	<option value="VMNDEA">Vibrasi Motor NDE Axial</option>
	<option value="VMNDER">Vibrasi Motor NDE Radial</option>
	<option value="VPDE">Vibrasi Pompa DE</option>
	<option value="VPNDEA">Vibrasi Pompa NDE Axial</option>
	<option value="VPNDER">Vibrasi Pompa NDE Radial</option>
	<option value="TempM">Temperature Motor</option>
	<option value="TempP">Temperature Pompa</option>
	<option value="Arus">Arus</option>
	</select></center>
	
	<center><h3>Trend Date : From <select name="Hari1">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	</select>
	
	<select name="Bulan1">
	<option value="1">Januari</option>
	<option value="2">Febuari</option>
	<option value="3">Maret</option>
	<option value="4">April</option>
	<option value="5">Mei</option>
	<option value="6">Juni</option>
	<option value="7">Juli</option>
	<option value="8">Agustus</option>
	<option value="9">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
	</select>
	
	<select name="Tahun1">
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>
	</select>
	
	Until <select name="Hari2">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	</select>
	
	<select name="Bulan2">
	<option value="1">Januari</option>
	<option value="2">Febuari</option>
	<option value="3">Maret</option>
	<option value="4">April</option>
	<option value="5">Mei</option>
	<option value="6">Juni</option>
	<option value="7">Juli</option>
	<option value="8">Agustus</option>
	<option value="9">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">Desember</option>
	</select>
	
	<select name="Tahun2">
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>
	</select></h3></center>

	<center><input type="submit" name="submit" value="Submit"></center>
</form>

</body>

</html>