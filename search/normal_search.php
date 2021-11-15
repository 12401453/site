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

function gethyperlink($tokno_row, $texttype) {


  if ($texttype == "kievbl") {
    $hyperlink = "/Kiev_Missal/Kiev_Missal.php";
    return $hyperlink;
  }

  if ($texttype == "1229_riga") {
    $hyperlink = "/1229_riga/1229_riga.php";
    return $hyperlink;
  }
  if($texttype == "marianus") {

    if($tokno_row > 0 AND $tokno_row <= 426) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch5.php";}
    elseif($tokno_row > 426 AND $tokno_row <= 1038) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch6.php";}
    elseif($tokno_row > 1038 AND $tokno_row <= 1501) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch7.php";}
    elseif($tokno_row > 1501 AND $tokno_row <= 2044) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch8.php";}
    elseif($tokno_row > 2044 AND $tokno_row <= 2637) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch9.php";}
    elseif($tokno_row > 2637 AND $tokno_row <= 3291) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch10.php";}
    elseif($tokno_row > 3291 AND $tokno_row <= 3739) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch11.php";}
    elseif($tokno_row > 3739 AND $tokno_row <= 4527) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch12.php";}
    elseif($tokno_row > 4527 AND $tokno_row <= 5466) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch13.php";}
    elseif($tokno_row > 5466 AND $tokno_row <= 5966) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch14.php";}
    elseif($tokno_row > 5966 AND $tokno_row <= 6523) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch15.php";}
    elseif($tokno_row > 6523 AND $tokno_row <= 6995) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch16.php";}
    elseif($tokno_row > 6995 AND $tokno_row <= 7464) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch17.php";}
    elseif($tokno_row > 7464 AND $tokno_row <= 8109) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch18.php";}
    elseif($tokno_row > 8109 AND $tokno_row <= 8628) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch19.php";}
    elseif($tokno_row > 8628 AND $tokno_row <= 9168) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch20.php";}
    elseif($tokno_row > 9168 AND $tokno_row <= 9966) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch21.php";}
    elseif($tokno_row > 9966 AND $tokno_row <= 10546) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch22.php";}
    elseif($tokno_row > 10546 AND $tokno_row <= 11141) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch23.php";}
    elseif($tokno_row > 11141 AND $tokno_row <= 11887) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch24.php";}
    elseif($tokno_row > 11887 AND $tokno_row <= 12573) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch25.php";}
    elseif($tokno_row > 12573 AND $tokno_row <= 13735) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch26.php";}
    elseif($tokno_row > 13735 AND $tokno_row <= 14665) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch27.php";}
    elseif($tokno_row > 14665 AND $tokno_row <= 14972) {$hyperlink = "/Marianus/Mat/Mar_Mat_Ch28.php";}

    elseif($tokno_row > 14972 AND $tokno_row <= 15620) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch1.php";}
    elseif($tokno_row > 15620 AND $tokno_row <= 16122) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch2.php";}
    elseif($tokno_row > 16122 AND $tokno_row <= 16623) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch3.php";}
    elseif($tokno_row > 16623 AND $tokno_row <= 17250) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch4.php";}
    elseif($tokno_row > 17250 AND $tokno_row <= 17905) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch5.php";}
    elseif($tokno_row > 17905 AND $tokno_row <= 18846) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch6.php";}
    elseif($tokno_row > 18846 AND $tokno_row <= 19406) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch7.php";}
    elseif($tokno_row > 19406 AND $tokno_row <= 20021) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch8.php";}
    elseif($tokno_row > 20021 AND $tokno_row <= 20868) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch9.php";}
    elseif($tokno_row > 20868 AND $tokno_row <= 21718) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch10.php";}
    elseif($tokno_row > 21718 AND $tokno_row <= 22259) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch11.php";}
    elseif($tokno_row > 22259 AND $tokno_row <= 23007) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch12.php";}
    elseif($tokno_row > 23007 AND $tokno_row <= 23594) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch13.php";}
    elseif($tokno_row > 23594 AND $tokno_row <= 24757) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch14.php";}
    elseif($tokno_row > 24757 AND $tokno_row <= 25392) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch15.php";}
    elseif($tokno_row > 25392 AND $tokno_row <= 25692) {$hyperlink = "/Marianus/Mark/Mar_Mark_Ch16.php";}

    elseif($tokno_row > 25692 AND $tokno_row <= 26772) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch1.php";}
    elseif($tokno_row > 26772 AND $tokno_row <= 27559) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch2.php";}
    elseif($tokno_row > 27559 AND $tokno_row <= 28022) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch3.php";}
    elseif($tokno_row > 28022 AND $tokno_row <= 28749) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch4.php";}
    elseif($tokno_row > 28749 AND $tokno_row <= 29434) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch5.php";}
    elseif($tokno_row > 29434 AND $tokno_row <= 30294) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch6.php";}
    elseif($tokno_row > 30294 AND $tokno_row <= 31125) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch7.php";}
    elseif($tokno_row > 31125 AND $tokno_row <= 32163) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch8.php";}
    elseif($tokno_row > 32163 AND $tokno_row <= 33254) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch9.php";}
    elseif($tokno_row > 33254 AND $tokno_row <= 33999) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch10.php";}
    elseif($tokno_row > 33999 AND $tokno_row <= 34937) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch11.php";}
    elseif($tokno_row > 34937 AND $tokno_row <= 35921) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch12.php";}
    elseif($tokno_row > 35921 AND $tokno_row <= 36545) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch13.php";}
    elseif($tokno_row > 36545 AND $tokno_row <= 37140) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch14.php";}
    elseif($tokno_row > 37140 AND $tokno_row <= 37672) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch15.php";}
    elseif($tokno_row > 37672 AND $tokno_row <= 38236) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch16.php";}
    elseif($tokno_row > 38236 AND $tokno_row <= 38776) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch17.php";}
    elseif($tokno_row > 38776 AND $tokno_row <= 39417) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch18.php";}
    elseif($tokno_row > 39417 AND $tokno_row <= 40125) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch19.php";}
    elseif($tokno_row > 40125 AND $tokno_row <= 40790) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch20.php";}
    elseif($tokno_row > 40790 AND $tokno_row <= 41349) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch21.php";}
    elseif($tokno_row > 41349 AND $tokno_row <= 42392) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch22.php";}
    elseif($tokno_row > 42392 AND $tokno_row <= 43213) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch23.php";}
    elseif($tokno_row > 43213 AND $tokno_row <= 44021) {$hyperlink = "/Marianus/Luke/Mar_Luke_Ch24.php";}

    elseif($tokno_row > 44021 AND $tokno_row <= 44499) {$hyperlink = "/Marianus/John/Mar_John_Ch1.php";}
    elseif($tokno_row > 44499 AND $tokno_row <= 44864) {$hyperlink = "/Marianus/John/Mar_John_Ch2.php";}
    elseif($tokno_row > 44864 AND $tokno_row <= 45442) {$hyperlink = "/Marianus/John/Mar_John_Ch3.php";}
    elseif($tokno_row > 45442 AND $tokno_row <= 46309) {$hyperlink = "/Marianus/John/Mar_John_Ch4.php";}
    elseif($tokno_row > 46309 AND $tokno_row <= 47061) {$hyperlink = "/Marianus/John/Mar_John_Ch5.php";}
    elseif($tokno_row > 47061 AND $tokno_row <= 48172) {$hyperlink = "/Marianus/John/Mar_John_Ch6.php";}
    elseif($tokno_row > 48172 AND $tokno_row <= 48938) {$hyperlink = "/Marianus/John/Mar_John_Ch7.php";}
    elseif($tokno_row > 48938 AND $tokno_row <= 49946) {$hyperlink = "/Marianus/John/Mar_John_Ch8.php";}
    elseif($tokno_row > 49946 AND $tokno_row <= 50598) {$hyperlink = "/Marianus/John/Mar_John_Ch9.php";}
    elseif($tokno_row > 50598 AND $tokno_row <= 51237) {$hyperlink = "/Marianus/John/Mar_John_Ch10.php";}
    elseif($tokno_row > 51237 AND $tokno_row <= 52098) {$hyperlink = "/Marianus/John/Mar_John_Ch11.php";}
    elseif($tokno_row > 52098 AND $tokno_row <= 52889) {$hyperlink = "/Marianus/John/Mar_John_Ch12.php";}
    elseif($tokno_row > 52889 AND $tokno_row <= 53494) {$hyperlink = "/Marianus/John/Mar_John_Ch13.php";}
    elseif($tokno_row > 53494 AND $tokno_row <= 54037) {$hyperlink = "/Marianus/John/Mar_John_Ch14.php";}
    elseif($tokno_row > 54037 AND $tokno_row <= 54488) {$hyperlink = "/Marianus/John/Mar_John_Ch15.php";}
    elseif($tokno_row > 54488 AND $tokno_row <= 55067) {$hyperlink = "/Marianus/John/Mar_John_Ch16.php";}
    elseif($tokno_row > 55067 AND $tokno_row <= 55560) {$hyperlink = "/Marianus/John/Mar_John_Ch17.php";}
    elseif($tokno_row > 55560 AND $tokno_row <= 55991) {$hyperlink = "/Marianus/John/Mar_John_Ch18.php";}
    elseif($tokno_row > 55991 AND $tokno_row <= 56713) {$hyperlink = "/Marianus/John/Mar_John_Ch19.php";}
    elseif($tokno_row > 56713 AND $tokno_row <= 57266) {$hyperlink = "/Marianus/John/Mar_John_Ch20.php";}
    elseif($tokno_row > 57266 AND $tokno_row <= 57596) {$hyperlink = "/Marianus/John/Mar_John_Ch21.php";}
    else { $hyperlink = 99; }
  }

  if($texttype == "zographensis") {

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
  }

  return $hyperlink;

 
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
