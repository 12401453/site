


<br>
<?php
include $path."/db_details_web.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM marianus WHERE tokno <= 41349 AND tokno > 40790";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/CS_get.php";
?>