<html>
<head>
	<title>Review Trend</title>
	<link rel="stylesheet" type="text/css" href="../../../chartist/dist/chartist.min.css">
	<script type="text/javascript" src="../../../../main/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../../main/js/Pikaday-master/css/pikaday.css" />
	<script src="../../../chartist/dist/chartist.min.js"></script>
	<script src="../../../chartist/chartist-plugin-legend.js"></script>
	<style type="text/css">

	.men2{
	margin-top:160px;
	position:absolute;
	top:0;
	left:50%;
	transform:translate(-50%,0);
	z-index:1;
	padding-bottom:100px;
	}
.borderchart1,.borderchart2,.borderchart3{
	position:relative;
	width:65vw;
}
.men1{
	position:relative;
	display:flex;
	justify-content:center;
	align-items:end;
	z-index:10;
}
.ct-legend {
	position: absolute;
	right:0;
	top:-15%;
	list-style-type:none;
	display:flex;
}
.ct-legend li {
        position: relative;
        padding: 0px 8px;
        margin-bottom: 3px;
    }

.ct-legend li:before {
        width: 12px;
        height: 12px;
        position: absolute;
        left: 0;
        content: '';
        border: 3px solid transparent;
        border-radius: 2px;
    }

.ct-legend li.inactive:before {
        background: transparent;
    }

.ct-legend .ct-legend-inside {
        position: absolute;
        top: 0;
        right: 0;
    }


.ct-series-0 {
			background-color:#d70206;
			color:white; 
			cursor:pointer;
		}
.ct-series-1 {
			background-color:#f05b4f;
			color:white; 
			cursor:pointer;
        }
.ct-series-2 {
			background-color:#f4c63d;
			color:white; 
			cursor:pointer;
        }
.ct-series-3 {
			background-color:#d17905;
			color:white; 
			cursor:pointer;
        }
.ct-series-4 {
			background-color:#453d3f;
			color:white; 
			cursor:pointer;
        }
.ct-series-5 {
			background-color:#59922b;
			color:white; 
			cursor:pointer;
        }
.ct-series-6 {
			background-color:#0544d3;
			color:white; 
			cursor:pointer;
        }
.ct-series-7 {
			background-color:#6b0392;
			color:white; 
			cursor:pointer;
        }
.ct-series-8 {
			background-color:#f05b4f;
			color:white; 
			cursor:pointer;
        }
.ct-series-9 {
			background-color:#dda458;
			color:white; 
			cursor:pointer;
        }
.ct-series-10 {
			background-color:#eacf7d;
			color:white; 
			cursor:pointer;
		}
.ct-series-11 {
			background-color:#b2c326;
			color:white; 
			cursor:pointer;
		}
.ct-series-12 {
			background-color:#6188e2;
			color:white; 
			cursor:pointer;
		}
.ct-series-13 {
			background-color:#a748ca;
			color:white; 
			cursor:pointer;
		}
line{
	cursor:pointer;
}
h4{position:relative;
	font-size:20px;
	left:3vw;
	top:0;
}
#myBtn {
	display:none;
  position: fixed; /* Fixed/sticky position */
  transform: translate(0,-50%);
  top: 50%; /* Place the button at the bottom of the page */
  right: 2.5vw; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #453d3f; /* Set a background color */
  color: white; /* Text color */
  padding: 2px 15px; /* Some padding */
  border-radius: 4px; /* Rounded corners */
   /* Increase font size */
}
</style>
</head>
<body>
<div class="abs">
        <div id="myBtn"></div>
</div>

<?php 
session_start();
$item = str_replace('_',' ', $_GET['item'] );
$part = strtoupper( $_SESSION['pager']);
$lien = strtoupper($_SESSION['line']);
echo '<h3>TREND '.$lien.'</h3> <span id="colname">'.$item.'</span> | <span>'.$part.'</span>'; ?>
<div class="men1">
	<div id="From"> From</br>
			<input type="text" disabled name="tgl" id="datepicker"> 
			<button id="datepicker-button">Choose Date</button>
	</div>
	<div id="From"> Until</br>
			<input type="text" disabled name="tgl" id="datepicker1"> 
			<button id="datepicker-button1">Choose Date</button>
	</div>
	<div id="mach" > Parameter</br>
		<select class="selectfrm" id="parameter" name="line">
			<option value="1">Vibrasi</option>
			<option value="2">Temperature</option>
			<option value="3">Arus</option>
		</select>
	</div>
	<button class="submit" id="btn" value="yes">Open data</button>
</div>
<div class="men2">
		<div class="borderchart1">
		<h4> Vibrasi </h4>
		<div class= "ct-chart1 ct-double-octave" id="charter"></div>
		</div>
		<div class="borderchart2">
		<h4> Temperature </h4>
		<div class= "ct-chart2 ct-double-octave" id="charter"></div>
		</div>
		<div class="borderchart3">
		<h4> Arus </h4>
		<div class= "ct-chart3 ct-double-octave" id="charter"></div>
		</div>
</div>
<script type="text/javascript" src="../../../../main/js/Pikaday-master/pikaday.js"></script>
<script type="text/javascript" src="../../../../main/js/Pikaday-master/moment.min.js.download"></script>
<script>
	var picker1 = new Pikaday ({ field : document.getElementById('datepicker1'),
							trigger: document.getElementById('datepicker-button1'),
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

$(document).ready(function(){
	document.getElementById('btn').addEventListener('click',() => {
       const form = {
	parameter : document.getElementById('parameter').options[document.getElementById('parameter').selectedIndex],
     submit : document.getElementById('btn'),
     from: document.getElementById('datepicker'),
     until: document.getElementById('datepicker1'),
     colname: document.getElementById('colname')
    };
	var conv = form.colname.innerHTML.replace(/\s/g,"_");
	var splitter = conv.indexOf("(");
	if(splitter != -1){
		var subconv= conv.substring(-0,splitter);
		
	}
	else{
		var subconv= conv;
	}
	

	//console.log(subconv);
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
	const mydata =`parameter=${form.parameter.value}&from=${form.from.value}&until=${form.until.value}&colname=${subconv}&submit=${form.submit.value}`;
        //response
	//console.log (mydata);    
    xhr.open('post', 'proceses.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	   xhr.send(mydata);
	   
	   function handlerespo (responseObject){
				if (responseObject.status){
					handlechart(responseObject.date,responseObject.data,responseObject.parameter,form.parameter.value);
				}
				else{	
					alert('GAGAL UPDATE');
				}

	   }


});

function handlechart(date,datashow,lejenname,charttype)
			{
					var data = {
						labels:date,
						series :datashow
					};
					var options = {
						lineSmooth:false,
						plugins:[
							Chartist.plugins.legend({
								legendNames:lejenname,
							})
						]
					};

					var chart1 = new Chartist.Line('.ct-chart'+charttype,data,options);
					chart1.on('created', function(bar){
						let ele =	document.querySelectorAll('.ct-point');
						ele.forEach(function(elem){
							elem.addEventListener("mouseover", function (){
								$('#myBtn').show();
								$('#myBtn').html('<b>Selected Value: </b>' + this.getAttribute('ct:value'));
								
							});
						});
					});


			}	
		for (let index = 1; index <= 3; index++) {
			handlechart(0,0,0,index);
		}

});
	
</script>
</body>
</html>