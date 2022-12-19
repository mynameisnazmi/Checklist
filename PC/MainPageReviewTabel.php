<html>

<body>
<style type="text/css">
	.selectfrm{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 30%;
		padding: 3px;
		font-size: 15px;
	}
	.selecttgl{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 13%;
		padding: 3px;
	}
	.selectbln{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 23%;
		padding: 3px;
	}
	.selectthn{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 16%;
		padding: 3px;
	}
	.submit{
		font-size: 15px;
		text-decoration: none;
		transition-duration: 0.1s;
		background-color: white;
		color: black;
		border: 3px solid #007399;
		text-align: center;
		border-radius: 15px;
		float: center;
		padding: 4px;
		width: 80px;
		display: inline-block;
		cursor: pointer;
	}
	.submit:hover{
		background-color: #007399;
		color: white;
	}
	

</style>

<form method="POST" action="../checklist/PC/WebTabelReview.php">	
	<center><h3><select hidden name="perintah">
	<option value="ReviewTabel">Review Tabel</option>
	</select></h3>
	
	<h3>Line : <select class="selectfrm" name="line">
	<option value="Line 2">OPP Line 2</option>
	<option value="Line 3">OPP Line 3</option>
	<option value="Line 4">OPP Line 4</option>
	<option value="Line 5">OPP Line 5</option>
	<option value="Line 6">OPP Line 6</option>
	<option value="Line 7">OPP Line 7</option>
	<option value="PET">PET </option>
	</select>
	
	&nbsp;&nbsp; Form : <select class="selectfrm" name="form">
	<option value="Electrical">Electrical</option>
	<option value="Mechanical">Mechanical</option>
	<option value="Produksi 1">Produksi 1</option>
	<option value="Produksi 2">Produksi 2</option>
	<option value="Produksi 3">Produksi 3</option>
	</select></h3>
	
	<h3>Tanggal : <select class="selecttgl" name="Hari">
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
	
	<select class="selectbln" name="Bulan">
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
	
	<select class="selectthn" name="Tahun">
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
	</select></h3>

	<input class="submit" type="submit" name="submit" value="Submit"></center>
</form>

</body>

</html>