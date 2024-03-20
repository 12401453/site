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
//$loans = $_POST['loans'];
//$no_cs = $_POST['no_cs'];

$long_adj_hidden = $_POST['long_adj_hidden'];
$loans_hidden = $_POST['loans_hidden'];
$no_cs_hidden = $_POST['no_cs_hidden'];

$restr = $loans_hidden + $loans + $long_adj_hidden + $long_adj + $no_cs + $no_cs_hidden;


function utf8_substr_replace($original, $replacement, $position, $length) {
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

$glag_present = true;
if($texttype == "1229_riga") {
  $glag_present = false;
}

$column_list = "tokno, cs_id, cyr_id_good, glag_id";
if(!$glag_present) {
  $column_list = "tokno, cs_id, cyr_id_good";
}


$search2 = $search;


switch($restr) {

  case 3:
    $sql = "SELECT $column_list FROM $texttype";
    break;

  case 5:
    $sql = "SELECT $column_list FROM $texttype WHERE cyr_id_good NOT LIKE '%҃%'";
    break;

  case 6:
    $sql = "SELECT $column_list FROM $texttype WHERE non_assim !='W'";
    break;

  case 7:
    $sql = "SELECT $column_list FROM $texttype WHERE long_adj !='2' AND long_adj !='4'";
    break;

  case 8:
    $sql = "SELECT $column_list FROM $texttype WHERE non_assim !='W' AND cyr_id_good NOT LIKE '%҃%'";
    break;

  case 9:
    $sql = "SELECT $column_list FROM $texttype WHERE long_adj !='2' AND long_adj !='4' AND cyr_id_good NOT LIKE '%҃%'";
    break;

  case 10:
    $sql = "SELECT $column_list FROM $texttype WHERE non_assim !='W' AND long_adj !='2' AND long_adj !='4'";
    break;

  case 12:
    $sql = "SELECT $column_list FROM $texttype WHERE non_assim !='W' AND long_adj !='2' AND long_adj !='4' AND cyr_id_good NOT LIKE '%҃%'";
    break;

}

$result = $conn->query($sql);

$T_bar_ma = mb_strpos($search2, 'T');
$V_bar_ma = mb_strpos($search2, 'V');
$J_bar_ma = mb_strpos($search2, 'J');
$C_bar_ma = mb_strpos($search2, 'C');
$E_bar_ma = mb_strpos($search2, 'E');
$O_bar_ma = mb_strpos($search2, 'O');
$K_bar_ma = mb_strpos($search2, 'K');
$R_bar_ma = mb_strpos($search2, 'R');
$Ъ_bar_ma = mb_strpos($search2, 'Ъ');
$M_bar_ma = mb_strpos($search2, 'M');

while ($T_bar_ma !== false) {
  $T_pos = mb_strpos($search2, 'T');
  $search2 = utf8_substr_replace($search2, '[tŕrpsšdfgћђklĺzžxčvbnńmǯ]', $T_pos, 1);
  $T_bar_ma = mb_strpos($search2, 'T');
}

while ($V_bar_ma !== false) {
  $V_pos = mb_strpos($search2, 'V');
  $search2 = utf8_substr_replace($search2, '[aeěęoǫiьъuǞyü]', $V_pos, 1);
  $V_bar_ma = mb_strpos($search2, 'V');
}

while ($J_bar_ma !== false) {
  $J_pos = mb_strpos($search2, 'J');
  $search2 = utf8_substr_replace($search2, '[šžčǯћђńĺŕj]', $J_pos, 1);
  $J_bar_ma = mb_strpos($search2, 'J');
}

while ($C_bar_ma !== false) {
  $C_pos = mb_strpos($search2, 'C');
  $search2 = utf8_substr_replace($search2, '[šžčǯћђńĺŕ]', $C_pos, 1);
  $C_bar_ma = mb_strpos($search2, 'C');
}

while ($E_bar_ma !== false) {
  $E_pos = mb_strpos($search2, 'E');
  $search2 = utf8_substr_replace($search2, '[eěęiьŕ̥ĺ̥]', $E_pos, 1);
  $E_bar_ma = mb_strpos($search2, 'E');
}

while ($O_bar_ma !== false) {
  $O_pos = mb_strpos($search2, 'O');
  $search2 = utf8_substr_replace($search2, '[aoǫъuy]', $O_pos, 1);
  $O_bar_ma = mb_strpos($search2, 'O');
}

while ($K_bar_ma !== false) {
  $K_pos = mb_strpos($search2, 'K');
  $search2 = utf8_substr_replace($search2, '[kgx]', $K_pos, 1);
  $K_bar_ma = mb_strpos($search2, 'K');
}

while ($R_bar_ma !== false) {
  $R_pos = mb_strpos($search2, 'R');
  $search2 = utf8_substr_replace($search2, '[rlŕĺ]', $R_pos, 1);
  $R_bar_ma = mb_strpos($search2, 'R');
}

while ($Ъ_bar_ma !== false) {
  $Ъ_pos = mb_strpos($search2, 'Ъ');
  $search2 = utf8_substr_replace($search2, '[ьъ]', $Ъ_pos, 1);
  $Ъ_bar_ma = mb_strpos($search2, 'Ъ');
}

while ($M_bar_ma !== false) {
  $M_pos = mb_strpos($search2, 'M');
  $search2 = utf8_substr_replace($search2, '[mbpv]', $M_pos, 1);
  $M_bar_ma = mb_strpos($search2, 'M');
}

$search2 = "/" . $search2 . "/" . "u";

if($result->num_rows > 0) {
  $res_count = 0;
  while($row = $result->fetch_assoc()) {
    $tokno_row = $row["tokno"];
    $cs_row = $row["cs_id"];

    if(preg_match($search2, $cs_row) === 1) {
      if($glag_present) {
        echo $row["glag_id"].' | ';
      }
      echo $row["cyr_id_good"].' | '.'<span style="font-family:Calibri; font-size:24px">'. $row["cs_id"].'</span>';
      if (gethyperlink($tokno_row, $texttype) !== 99) {
        echo  '   '. '<span class="context_link" style="font-family:Calibri; font-size:17px"><a href="' . gethyperlink($tokno_row, $texttype) . '">Context</a></span><br>'; 
      }
      else { echo '<br>';}
      $res_count++;
    }
  }
  if($res_count == 0) {
    echo "<span style='font-family: sans-serif'>Ешқандай нәтиже табылған жоқ</span>";
  }
}
else {
 echo "0 records";
}

$conn->close();

?>
</div>
</body>
