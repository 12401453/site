
<br>
<?php
include $path."/db_details_web.php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM 1229_riga";
$result = $conn->query($sql);

include $path."/Get/Cyr_get_noglag.php";
?>
