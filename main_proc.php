<?php
if(isset($_POST['submit'])){
	session_start();
	header('Content-type', 'application/json');
    
	$trx = $_POST['trx'];
	$line = $_POST['line'];
	$formus = $_POST['formus'];
    $option = $_POST['option'];
    $dategnr = $_POST['dateform'];

	$status = false;
    $msg = array();
    
    function createinsertnew($line,$apart){


    }

 function createinsert($line,$apart){
    $nama =  $_SESSION['nama'];
    include "koneksi.php";
    $datenow = date("Y-m-d");
    $datemonday = date('Y-m-d',strtotime("monday this week"));
    $datesunday =  date('Y-m-d',strtotime("sunday this week"));
    $database = 'line_'.$line.'_'.$apart.'';
        $execution = false;
            $select = "SELECT Tanggal FROM $database WHERE (Tanggal BETWEEN '$datemonday' AND '$datesunday')";
            $result = mysql_query($select,$link);
            $total = mysql_num_rows($result);
            //echo $total;
		    if($total == 0){
                $insert = "INSERT INTO $database(Tanggal,Nama) VALUES('$datenow','$nama')";
                $execution = mysql_query($insert,$link);

            }
            else{
                $execution = false;
            }
            return $execution;
    }

function getdater($line,$apart){
    $database = 'line_'.$line.'_'.$apart.'';
    include "koneksi.php";
    $execution ="";
    $datemonday = date('Y-m-d',strtotime("monday this week"));
    $datesunday =  date('Y-m-d',strtotime("sunday this week"));
        $execution = false;
        $select = "SELECT Tanggal FROM $database WHERE (Tanggal >= '$datemonday' AND Tanggal <= '$datesunday')";
            $result = mysql_query($select,$link);
            $total = mysql_num_rows($result);
            $data = mysql_fetch_row($result);
            $execution = $data[0];
            return $execution;
}

    if($trx == 'Checklist'){
        if($line == 'Line-4' AND $formus == 'Electrical' /*AND $_SESSION["level"] == */){
            $msg = './line4/checklist/index.php';
            $status = true;
        }//ENDline4

        elseif($line == 'Line-6' AND $formus == 'Electrical' /*AND $_SESSION["level"] == */){
             $arr = array("silo","ext","casting","erema","mdo","tdo","as","tdoas","biggrinder","smallgrinder","pullroll");
             $len = count($arr)-1;
                for ($i=0; $i<=$len ; $i++) { 
                    $res = createinsert('6',$arr[$i]);
                }
                $tgl = getdater('6',$arr[$len]);
                $_SESSION['daterecord'] = $tgl;
                $_SESSION['pager'] = 'silo';
                $msg = "./line6/checklist/index.php";
                $status = true;
                $_SESSION['line'] = $line;
        }//ENDline 6
      }

    elseif($trx == 'Review'){
            if($line == 'Line-4' AND $formus == 'Electrical' /*AND $_SESSION["level"] == */){
                if($option == "1"){
                    $status = true;
                    $msg = './line4/review/specified';
                  }
                  else{
                      $status = true;
                      $msg = './line4/review/general';
                  }
            }
            elseif($line == 'Line-6' AND $formus == 'Electrical' /*AND $_SESSION["level"] == */){
                if($option == "1"){
                    $status = true;
                    $_SESSION['pager'] = 'silo';
                    $msg = './line6/review/specified';
                    $_SESSION['line'] = $line;
                  }
                  else{
                    $status = true;
                    $_SESSION['pager'] = 'silo';
                    $msg = './line6/review/general';
                    $_SESSION['datechk'] = $dategnr;
                    $_SESSION['line'] = $line;
                  }
                
            }
            

        }
        
        
      //  else{}
    }


      
echo json_encode(
    array(
        'status' => $status,
        'msg' => $msg
       )
    );

?>