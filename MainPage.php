
<html>
<head>
	<title>Main Page</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<script type="text/javascript" src="../main/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../main/js/Pikaday-master/css/pikaday.css" />
</head><style type="text/css">

	.selectfrm{
		border: 2px solid #007399;
		margin: 0px auto;
		width: 30%;
		padding: 3px;
		font-size: 15px;
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
	.login {
		font-family: Arial, Helvetica, sans-serif;
		position: static;
		left: 425px;
		margin: 150px auto;
		width: 400px;
		padding: 30px;
		border: 10px solid #007399;
		background: white;
	}
	.select{
		border: 3px solid #007399;
		margin: 0px auto;
		width: 30%;
		padding: 3px;
	}
	.change{
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 5px;
		width: 140px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.change:hover {
		background-color: #007399;
		color: white;
	}
	.logout {
		font-size: 15px;
		text-decoration: none;
		background-color: white;
		color: black;
		border: 2px solid #007399;
		text-align: center;
		border-radius: 8px;
		margin: 1px;
		float: center;
		padding: 5px;
		width: 80px;
		display: inline-block;
		cursor: pointer;
		transition-duration: 0.1s;
	}
	.logout:hover{
		background-color: #e6b800;
		color: white;
	}
#dater,#formp,#btn, #mach,#dateform{
	display:none;

}
</style>
<?php 
session_start();

include "koneksi.php";

	if(isset($_POST['logout'])){
		session_destroy();
		header("location:http://131.107.251.10/checklist2/");
		exit();
		}
$tanggal = date('d-m-Y');
if(isset($_SESSION['nama'])){
	//echo $_SESSION['type'];
echo '
<div class="login">
<body>
	<center>
	<img width=325 height=125 src="arghakarya.jpg" />
<h1>Online Checklist</h1>


<h3>Logged as '.$_SESSION['nama'].'</h3>
<h4>Date : '.$tanggal.'</h4>
</head>
<body>

<h3>	
<label>Checklist
<input id="trx" type="radio" name="trx" value="Checklist"></label>
<label>Review Checklist
<input id="trx" type="radio" name="trx" value="Review"></label>
</br>
</br>
<div id="mach" > Line</br>
<select class="selectfrm" id="line" name="line">
		<option value="Line-4">OPP Line 4</option>
		<option value="Line-5">OPP Line 5</option>
		<option value="Line-6" selected>OPP Line 6</option>
		<option value="Line-7">OPP Line 7</option>
		<option value="PET-1">PET </option>
	</select>
	</div>
	</br>
<div id="formp" > Form</br>
		<select class="selectfrm" id="form">
	<option value="Electrical">Electrical</option>
	<option value="Mechanical">Mechanical</option>
	</select></div>
	</br>
	<div id="dater">View</br>
	<select class="selectfrm" onChange="gnrl(this.options[this.selectedIndex].value)" id="view">
		<option value="1">Specified</option>
		<option value="0">General</option>
	</select>
	</div>
	<div id="dateform">Date</br>
	<input type="text" disabled name="tgl" id="datepicker"> 
	<button id="datepicker-button">Choose Date</button>
	</div>
<div>
</br>
<button class="submit" id="btn" value="yes">Submit</button>

	<form method="POST" action=""></br>
	<input class="logout" type="submit" name="logout" value="Logout">
</form></div></center>
';
}
?></div>
<script type="text/javascript" src="../main/js/Pikaday-master/pikaday.js"></script>
<script type="text/javascript" src="../main/js/Pikaday-master/moment.min.js.download"></script>
<script>
    document.getElementById('btn').addEventListener('click',() => {
       const form = {
     trx : document.querySelector('input[name = "trx"]:checked'),
	 line : document.getElementById('line').options[document.getElementById('line').selectedIndex],
     formus : document.getElementById('form').options[document.getElementById('form').selectedIndex],
     submit : document.getElementById('btn'),
	 datepicker : document.getElementById('datepicker'),
     view: document.getElementById('view')
    };
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
        let responseObject = null;
        try{
            responseObject = JSON.parse(xhr.responseText);
        }
        catch(e){
            console.error('Couldnt update');
        }
        if(responseObject){
            handlerespo(responseObject);
        }

    };
	const mydata =`trx=${form.trx.value}&dateform=${form.datepicker.value}&line=${form.line.value}&formus=${form.formus.value}&option=${form.view.value}&submit=${form.submit.value}`;
        //response
	//console.log (mydata);    
    xhr.open('post', 'main_proc.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	   xhr.send(mydata);
	   
	   function handlerespo (responseObject){
    if (responseObject.status){
        window.location = responseObject.msg;
    }
    else{
        
        alert('GAGAL UPDATE');
    }
}
});
var picker = new Pikaday ({ field : document.getElementById('datepicker'),
							trigger: document.getElementById('datepicker-button'),
							yearRange: [2015,2050],
							format: 'YYYY-MM-DD',
							toString(date, format){
								const day = date.getDate();
								const month = date.getMonth()+1;
								const year = date.getFullYear();
								return `${year}-${month}-${day}`;
							},
							parse(dateString, format) {
								const parts = dateString.split('-');
								const day = parseInt(parts[0], 10);
								const month = parseInt(parts[1], 10) - 1;
								const year = parseInt(parts[2], 10);
								return new Date(year, month, day);
							}
});

function gnrl(param){
	if ( param == 0 ){
		$("#dateform").show();
	}
	else{
		$("#dateform").hide();
	}
}

$('input[type=radio][name=trx]').change(function(){
	var mode = "";
if ( this.value == 'Review' ){
	//mode = this.value;
	$("#dater").show();
	$("#formp").show();
	$("#mach").show();
	$("#btn").show();
	$("#dateform").hide();
	}
else
	{
	//mode = this.value;
	$("#formp").show();
	$("#mach").show();
	$("#dater").hide();
	$("#btn").show();
	$("#dateform").hide();
	}

});
</script>
</body>
</html>