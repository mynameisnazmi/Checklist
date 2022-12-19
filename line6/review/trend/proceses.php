<?php 
session_start();
header('Content-type', 'application/json');
include "../../../koneksi.php";
$database ="";
$parameter=$_POST['parameter'];
$from=date('Y-m-d',strtotime($_POST['from']));
$until=date('Y-m-d',strtotime($_POST['until']));
$submit=$_POST['submit'];
$colname=$_POST['colname'];
$line = $_SESSION['line'];
$pager = $_SESSION['pager'];
$dataarr=array();
$status = FALSE;

$conv = str_replace('-','_',$line);
$database = strtolower($conv.'_'.$pager);


if($parameter == 1){//vibrasi
	$arr = array("VMDE","VMNDEA","VMNDER");
	$parsave = $arr;
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
		$arr[$i] = $colname.$arr[$i];
	}
	$select = "SELECT Tanggal,$arr[0],$arr[1],$arr[2] FROM $database WHERE (Tanggal >= '$from' AND Tanggal <= '$until')";
	$result = mysql_query($select,$link);
	while ($data = mysql_fetch_row($result)) {
		$datearr[] = date('d-m-Y',strtotime($data[0]));
		$dataarr1[] =$data[1];
		$dataarr2[] =$data[2];
		$dataarr3[] =$data[3];
	}
	array_push($dataarr,$dataarr1,$dataarr2,$dataarr3);
	$status = TRUE;
}
elseif ($parameter == 2) {//temperature
	$parsave = array("TEMPERATURE");
	$mergcol = $colname.'TempM';
	$select = "SELECT Tanggal,$mergcol FROM $database WHERE (Tanggal >= '$from' AND Tanggal <= '$until')";
	$result = mysql_query($select,$link);
	while ($data = mysql_fetch_row($result)) {
		$datearr[] = date('d-m-Y',strtotime($data[0]));
		$dataarr1[] =$data[1];
	}
	array_push($dataarr,$dataarr1);
	$status = TRUE;
}
elseif ($parameter ==3) {//arus
	$arr = array("Arus R","Arus S","Arus T");
	$parsave = $arr;
	$len = count($arr)-1;
	for ($i=0; $i <= $len ; $i++) { 
		$conv = str_replace(' ','',$arr[$i]);
		$arr[$i] = $colname.$conv;
	}
	$select = "SELECT Tanggal,$arr[0],$arr[1],$arr[2] FROM $database WHERE (Tanggal >= '$from' AND Tanggal <= '$until')";
	$result = mysql_query($select,$link);
	while ($data = mysql_fetch_row($result)) {
		$datearr[] = date('d-m-Y',strtotime($data[0]));
		$dataarr1[] =$data[1];
		$dataarr2[] =$data[2];
		$dataarr3[] =$data[3];
	}
	array_push($dataarr,$dataarr1,$dataarr2,$dataarr3);
	$status = TRUE;
}

   
echo json_encode(
    array(
        'status' => $status,
		'data' => $dataarr,
		'date' => $datearr,
		'parameter' => $parsave
       )
    );



?>