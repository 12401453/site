<?php

function tokno_lower ($chap_no, $book) {
  if($book == 'mat') {
   if ($chap_no == 5) return 0;
   if ($chap_no == 6) return 426;
   if ($chap_no == 7) return 1038;
   if ($chap_no == 8) return 1501;
   if ($chap_no == 9) return 2044;
   if ($chap_no == 10) return 2637;
   if ($chap_no == 11) return 3291;
   if ($chap_no == 12) return 3739;
   if ($chap_no == 13) return 4527;
   if ($chap_no == 14) return 5466;
   if ($chap_no == 15) return 5966;
   if ($chap_no == 16) return 6523;
   if ($chap_no == 17) return 6995;
   if ($chap_no == 18) return 7464;
   if ($chap_no == 19) return 8109;
   if ($chap_no == 20) return 8628;
   if ($chap_no == 21) return 9168;
   if ($chap_no == 22) return 9966;
   if ($chap_no == 23) return 10546;
   if ($chap_no == 24) return 11141;
   if ($chap_no == 25) return 11887;
   if ($chap_no == 26) return 12573;
   if ($chap_no == 27) return 13735;
   if ($chap_no == 28) return 14665;
   if ($chap_no == 29) return 14972;
  }

  if($book == 'mark') {
   if ($chap_no == 1) return 14972;
   if ($chap_no == 2) return 15620;
   if ($chap_no == 3) return 16122;
   if ($chap_no == 4) return 16623;
   if ($chap_no == 5) return 17250;
   if ($chap_no == 6) return 17905;
   if ($chap_no == 7) return 18846;
   if ($chap_no == 8) return 19406;
   if ($chap_no == 9) return 20021;
   if ($chap_no == 10) return 20868;
   if ($chap_no == 11) return 21718;
   if ($chap_no == 12) return 22259;
   if ($chap_no == 13) return 23007;
   if ($chap_no == 14) return 23594;
   if ($chap_no == 15) return 24757;
   if ($chap_no == 16) return 25392;
   if ($chap_no == 17) return 25692;
  }

  if($book == 'luke') {
   if ($chap_no == 1) return 25692;
   if ($chap_no == 2) return 26772;
   if ($chap_no == 3) return 27559;
   if ($chap_no == 4) return 28022;
   if ($chap_no == 5) return 28749;
   if ($chap_no == 6) return 29434;
   if ($chap_no == 7) return 30294;
   if ($chap_no == 8) return 31125;
   if ($chap_no == 9) return 32163;
   if ($chap_no == 10) return 33254;
   if ($chap_no == 11) return 33999;
   if ($chap_no == 12) return 34937;
   if ($chap_no == 13) return 35921;
   if ($chap_no == 14) return 36545;
   if ($chap_no == 15) return 37140;
   if ($chap_no == 16) return 37672;
   if ($chap_no == 17) return 38236;
   if ($chap_no == 18) return 38776;
   if ($chap_no == 19) return 39417;
   if ($chap_no == 20) return 40125;
   if ($chap_no == 21) return 40790;
   if ($chap_no == 22) return 41349;
   if ($chap_no == 23) return 42392;
   if ($chap_no == 24) return 43213;
   if ($chap_no == 25) return 44021;
  }

  if($book == 'john') {
   if ($chap_no == 1) return 44021;
   if ($chap_no == 2) return 44499;
   if ($chap_no == 3) return 44864;
   if ($chap_no == 4) return 45442;
   if ($chap_no == 5) return 46309;
   if ($chap_no == 6) return 47061;
   if ($chap_no == 7) return 48172;
   if ($chap_no == 8) return 48938;
   if ($chap_no == 9) return 49946;
   if ($chap_no == 10) return 50598;
   if ($chap_no == 11) return 51237;
   if ($chap_no == 12) return 52098;
   if ($chap_no == 13) return 52889;
   if ($chap_no == 14) return 53494;
   if ($chap_no == 15) return 54037;
   if ($chap_no == 16) return 54488;
   if ($chap_no == 17) return 55067;
   if ($chap_no == 18) return 55560;
   if ($chap_no == 19) return 55991;
   if ($chap_no == 20) return 56713;
   if ($chap_no == 21) return 57266;
   if ($chap_no == 22) return 57596;
  }
}


$filename = "mar";
$book = 'mat';
$php_ext = ".php";

$chap_no = 5;

for ($i = 0; $i <= 84; $i++)
  {

$f = fopen($filename.$book.strval($chap_no)."glag".$php_ext, "w") or die("Unable to open file!");
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

$sql = "SELECT * FROM marianus WHERE tokno <= '.tokno_lower($chap_no + 1, $book).' AND tokno > '.tokno_lower($chap_no, $book).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/Glag_get.php";
?>');
fclose($f);

$f = fopen($filename.$book.strval($chap_no)."cyr".$php_ext, "w") or die("Unable to open file!");
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

$sql = "SELECT * FROM marianus WHERE tokno <= '.tokno_lower($chap_no + 1, $book).' AND tokno > '.tokno_lower($chap_no, $book).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/Cyr_get.php";
?>');
fclose($f);

$f = fopen($filename.$book.strval($chap_no)."cs".$php_ext, "w") or die("Unable to open file!");
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

$sql = "SELECT * FROM marianus WHERE tokno <= '.tokno_lower($chap_no + 1, $book).' AND tokno > '.tokno_lower($chap_no, $book).'";
$result = $conn->query($sql);
$x = 0;
include $path."/Get/CS_get.php";
?>');
fclose($f);

$chap_no++;
if($chap_no > 28 && $book == 'mat') {
  $chap_no = 1;
  $book = 'mark';
}
if($chap_no > 16 && $book == 'mark') {
  $chap_no = 1;
  $book = 'luke';
}
if($chap_no > 24 && $book == 'luke') {
  $chap_no = 1;
  $book = 'john';
}

}
?>
