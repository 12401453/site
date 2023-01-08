<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $path = $_SERVER["DOCUMENT_ROOT"];
    $path = $path."/site";
    include $path."/style_etc/style_search.php";
?>
    <style>

      #para1 {
         font-family: Bukyvede;
         font-size: 28px;
         margin: 8px;
      }

    </style>


</head>
<h>
<script>let page_id = 0;</script>
<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path = $path."/site";
include $path."/links.php";
?>
<br>
   
</h>

<body>
<div id="para1">

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

include $path."/gethyperlink.php";



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
      $sql = $SELECT_part1." AND cyr_id_good NOT LIKE '%҃%'";
    break;

    case 6:
      $sql = $SELECT_part1." AND non_assim !='W'";
    break;

    case 7:
      $sql = $SELECT_part1." AND long_adj !='2' AND long_adj !='4'";
    break;

    case 8:
      $sql = $SELECT_part1." AND non_assim !='W' AND cyr_id_good NOT LIKE '%҃%'";
    break;

    case 9:
      $sql = $SELECT_part1." AND long_adj !='2' AND long_adj !='4' AND cyr_id_good NOT LIKE '%҃%'";
    break;

    case 10:
      $sql = $SELECT_part1." AND non_assim !='W' AND long_adj !='2' AND long_adj !='4'";
    break;

    case 12:
      $sql = $SELECT_part1." AND non_assim !='W' AND long_adj !='2' AND long_adj !='4' AND cyr_id_good NOT LIKE '%҃%'";
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
  echo  '   '. '<span class="context_link" style="font-family:Calibri; font-size:17px"><a href="' . gethyperlink($tokno_row, $texttype). '">Context</a></span><br>'; 
}
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
</div>
</body>
</html>
