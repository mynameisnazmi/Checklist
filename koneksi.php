<?php
// Connect to MySQL
$link = mysql_connect( 'localhost', 'root', 'dev32016' );
if ( !$link ) {
	die( 'Could not connect: ' . mysql_error() );
}
elseif ( $link ){
	//echo '<br\>Connected</br>';
}

// Select the data base
$db = mysql_select_db( 'checklistnew', $link );
if ( !$db ){
	die ( 'Error selecting database \'test\' : ' . mysql_error() );
}
elseif ( $db ){
	//echo '<br\>Database Success</br>';
}
?>