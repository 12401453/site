


<br>
<?php
include $path."/db_details_web.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM marianus WHERE tokno <= 37140 AND tokno > 36545";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/Glag_get.php";
?>