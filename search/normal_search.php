<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      @font-face { font-family: Bukyvede; src: url('BukyVede-Regular.ttf'); }
      p1 {
         font-family: Bukyvede; font-size: 28px
      }

    </style>


</head>
<h> <?php
$path = $_SERVER["DOCUMENT_ROOT"];
include $path."/links.php";?><br>
   <a href="/search">Search again</a>
</h>

<body>
<p1 style="font-size:28px">
<br>





<?php

$search = $_POST['search'];
$texttype = $_POST['textselect'];
$searchtype = $_POST['searchtype'];
if (!empty($_POST['long_adj'])) {$long_adj = $_POST['long_adj'];}
else $long_adj = 0;
if (!empty($_POST['loans'])) {$loans = $_POST['loans'];}
else $loans = 0;
if (!empty($_POST['no_cs'])) {$no_cs = $_POST['no_cs'];}
else $no_cs = 0;

$long_adj_hidden = $_POST['long_adj_hidden'];
$loans_hidden = $_POST['loans_hidden'];
$no_cs_hidden = $_POST['no_cs_hidden'];

$restr = $loans_hidden + $loans + $long_adj_hidden + $long_adj + $no_cs + $no_cs_hidden;


function utf8_substr_replace($original, $replacement, $position, $length)
{
    $startString = mb_substr($original, 0, $position, "UTF-8");
    $endString = mb_substr($original, $position + $length, mb_strlen($original), "UTF-8");

    $out = $startString . $replacement . $endString;

    return $out;
}

function gethyperlink($tokno_row, $texttype)
{

if ($texttype == "kievbl") {
  $hyperlink = "/Kiev_Missal/Kiev_Missal.php";
  return $hyperlink;
}

elseif ($texttype == "1229_riga") {
  $hyperlink = "/1229_riga/1229_riga.php";
  return $hyperlink;
}

 elseif($texttype == "zographensis") {

if($tokno_row < 116) { $hyperlink = "/Zographensis/Zog_Mat_Ch3.php";}
elseif($tokno_row > 116 AND $tokno_row < 515) {$hyperlink = "/Zographensis/Zog_Mat_Ch4.php";}
elseif($tokno_row > 515 AND $tokno_row < 1282) {$hyperlink = "/Zographensis/Zog_Mat_Ch5.php";}
elseif($tokno_row > 1282 AND $tokno_row < 1890) {$hyperlink = "/Zographensis/Zog_Mat_Ch6.php";}
elseif($tokno_row > 1890 AND $tokno_row < 2358) {$hyperlink = "/Zographensis/Zog_Mat_Ch7.php";}
elseif($tokno_row > 2358 AND $tokno_row < 2910) {$hyperlink = "/Zographensis/Zog_Mat_Ch8.php";}
elseif($tokno_row > 2910 AND $tokno_row < 3322) {$hyperlink = "/Zographensis/Zog_Mat_Ch9.php";}
elseif($tokno_row > 3322 AND $tokno_row < 3985) {$hyperlink = "/Zographensis/Zog_Mat_Ch10.php";}
elseif($tokno_row > 3985 AND $tokno_row < 4433) {$hyperlink = "/Zographensis/Zog_Mat_Ch11.php";}
elseif($tokno_row > 4433 AND $tokno_row < 5253) {$hyperlink = "/Zographensis/Zog_Mat_Ch12.php";}
elseif($tokno_row > 5253 AND $tokno_row < 6182) {$hyperlink = "/Zographensis/Zog_Mat_Ch13.php";}
elseif($tokno_row > 6182 AND $tokno_row < 6675) {$hyperlink = "/Zographensis/Zog_Mat_Ch14.php";}
elseif($tokno_row > 6675 AND $tokno_row < 7232) {$hyperlink = "/Zographensis/Zog_Mat_Ch15.php";}
elseif($tokno_row > 7232 AND $tokno_row < 7516) {$hyperlink = "/Zographensis/Zog_Mat_Ch16.php";}
elseif($tokno_row > 7516 AND $tokno_row < 7984) {$hyperlink = "/Zographensis/Zog_Mat_Ch24.php";}
elseif($tokno_row > 7984 AND $tokno_row < 8683) {$hyperlink = "/Zographensis/Zog_Mat_Ch25.php";}
elseif($tokno_row > 8683 AND $tokno_row < 9853) {$hyperlink = "/Zographensis/Zog_Mat_Ch26.php";}
elseif($tokno_row > 9853 AND $tokno_row < 10777) {$hyperlink = "/Zographensis/Zog_Mat_Ch27.php";}
elseif($tokno_row > 10777 AND $tokno_row < 11090) {$hyperlink = "/Zographensis/Zog_Mat_Ch28.php";}
 else {$hyperlink = 99;}

 return $hyperlink;

 }
}



include $path."/db_details_web.php";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SET NAMES UTF8";
$res = $conn->query($sql);

$SELECT_part1 = "SELECT * FROM $texttype WHERE LOCATE('$search', $searchtype)";

  if (mb_strpos($search, 'F') === 0) {
    $search = utf8_substr_replace($search, '', 0, 1);
    $SELECT_part1 = "SELECT * FROM $texttype WHERE $searchtype LIKE '$search%'";
   }

  if (mb_strpos($search, 'F') === false) {

    switch ($restr) {
    case 3:
        $sql = $SELECT_part1;
    break;

    case 5:
      $sql = $SELECT_part1." AND cs_id !=''";
    break;

    case 6:
      $sql = $SELECT_part1." AND non_assim !='W'";
    break;

    case 7:
      $sql = $SELECT_part1." AND long_adj !='2' AND long_adj !='4'";
    break;

    case 8:
      $sql = $SELECT_part1." AND non_assim !='W' AND cs_id !=''";
    break;

    case 9:
      $sql = $SELECT_part1." AND long_adj !='2' AND long_adj !='4' AND cs_id !=''";
    break;

    case 10:
      $sql = $SELECT_part1." AND non_assim !='W' AND long_adj !='2' AND long_adj !='4'";
    break;

    case 12:
      $sql = $SELECT_part1." AND non_assim !='W' AND long_adj !='2' AND long_adj !='4' AND cs_id !=''";
    break;

  }

  $result = $conn->query($sql);


  if ($result->num_rows > 0){
  while($row = $result->fetch_assoc() ){
    $tokno_row = $row["tokno"];

    $cs_row = $row["cs_id"];
    $cyr_row = $row["cyr_id_good"];
    $glag_row = $row["glag_id"];



      	echo  $row["glag_id"].' | '.$row["cyr_id_good"].' | '.'<span style="font-family:Calibri; font-size:24px">'. $row["cs_id"].'</span>';
if (gethyperlink($tokno_row, $texttype) !== 99) {
echo  '   '. '<span class="context_link" style="font-family:Calibri; font-size:17px"><a href="' . gethyperlink($tokno_row, $texttype) . '?tokno=' . $tokno_row . '">Context</a></span><br>'; }
else { echo '<br>';}

  }
  } else {
  	echo "<span style='font-family: Calibri'>Ешқандай нәтиже табылған жоқ</span>";
  }
  }

else {
  echo "<span style='font-family: Calibri'>Please put the 'F' letter at the front of the query, not anywhere else.</span>";
}

$conn->close();

?>
</p1>
</body>
</html>
