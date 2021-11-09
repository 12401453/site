<?php

function tokno_lower ($chap_no) {
  if ($chap_no == 3) return 0;
  if ($chap_no == 4) return 116;
  if ($chap_no == 5) return 514;
  if ($chap_no == 6) return 1281;
  if ($chap_no == 7) return 1889;
  if ($chap_no == 8) return 2357;
  if ($chap_no == 9) return 2909;
  if ($chap_no == 10) return 3321;
  if ($chap_no == 11) return 3984;
  if ($chap_no == 12) return 4432;
  if ($chap_no == 13) return 5252;
  if ($chap_no == 14) return 6181;
  if ($chap_no == 15) return 6674;
  if ($chap_no == 16) return 7231;
  if ($chap_no == 24) return 7515;
  if ($chap_no == 25) return 7982;
  if ($chap_no == 26) return 8681;
  if ($chap_no == 27) return 9851;
  if ($chap_no == 28) return 10777;
}
function tokno_higher ($chap_no) {
  if ($chap_no == 3) return 116;
  if ($chap_no == 4) return 514;
  if ($chap_no == 5) return 1281;
  if ($chap_no == 6) return 1889;
  if ($chap_no == 7) return 2357;
  if ($chap_no == 8) return 2909;
  if ($chap_no == 9) return 3321;
  if ($chap_no == 10) return 3984;
  if ($chap_no == 11) return 4432;
  if ($chap_no == 12) return 5252;
  if ($chap_no == 13) return 6181;
  if ($chap_no == 14) return 6674;
  if ($chap_no == 15) return 7231;
  if ($chap_no == 16) return 7515;
  if ($chap_no == 24) return 7982;
  if ($chap_no == 25) return 8681;
  if ($chap_no == 26) return 9851;
  if ($chap_no == 27) return 10777;
  if ($chap_no == 28) return 11090;
}


$filename = "zogmat";
$php_ext = ".php";

#chap_no = 65

for ($chap_no = 3; $chap_no <= 28; $chap_no++)
  {
 if($chap_no < 24 && $chap_no > 16) { continue; }

$f = fopen($filename.strval($chap_no)."glag".$php_ext, "w") or die("Unable to open file!");
fwrite($f, '


<br>
<?php
include $path."/db_details_web.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM zographensis WHERE tokno < '.tokno_higher($chap_no).' AND tokno > '.tokno_lower($chap_no).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/Glag_get.php";
?>');
fclose($f);

$f = fopen($filename.strval($chap_no)."cyr".$php_ext, "w") or die("Unable to open file!");
fwrite($f, '


<br>
<?php
include $path."/db_details_web.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM zographensis WHERE tokno < '.tokno_higher($chap_no).' AND tokno > '.tokno_lower($chap_no).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/Cyr_get.php";
?>');
fclose($f);

$f = fopen($filename.strval($chap_no)."cs".$php_ext, "w") or die("Unable to open file!");
fwrite($f, '


<br>
<?php
include $path."/db_details_web.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$sql = "SELECT * FROM zographensis WHERE tokno < '.tokno_higher($chap_no).' AND tokno > '.tokno_lower($chap_no).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/CS_get.php";
?>');
fclose($f);
}
?>
