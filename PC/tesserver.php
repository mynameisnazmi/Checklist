<html>
<body>
<?php
$ip=$_SERVER['REMOTE_ADDR'];
echo "IP Address = $ip";

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "<br>Nama Komputer: $hostname";
?>
</body>
</html>