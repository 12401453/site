<?php

if (!empty($_GET['tokno'])) {
$highlight_var = $_GET['tokno']; }
else {$highlight_var = 0;}

echo '<style>  #csword'. $highlight_var . ' {
  font-weight: bold;
  border-style: solid;
} </style>';
?>


<?php

$ruuw = $result->fetch_assoc();
$cs_empty = $ruuw["cs_id"];
if ($cs_empty == '') { echo '<p style="text-align: center; font-family: Arial; font-size: 50px">«Где хозяин?» –«Нема». «Как? совсем нету?»<br>–«Зовсім». –«А хозяйка?» –«Побігла в слободку».</p>';
}

elseif ($result->num_rows > 0) {
  $result->data_seek(0);
  while($row = $result->fetch_assoc()) {
    $cs_id = $row["cs_id"];
    $tokno = $row["tokno"];
  
    $cyr_id_good = $row["cyr_id_good"];
    $eng_trans = $row["eng_trans"];
    $etym_disc = $row["etym_disc"];
    $loan_source = $row["loan_source"];

    $morph_replace = $row["morph_replace"];
    $loan_place = $row["loan_place"];

    if ($morph_replace == '' AND $loan_place == 0) {
       echo '<span class="tooltip" id="tokno_',$tokno,'">' . $cs_id. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
      if($eng_trans != '') {echo ' class="tooltiptext4"';}
      echo '>',$eng_trans,'</span><span';
      if($etym_disc != '') {echo ' class="tooltiptext5"';}
      echo '>',$etym_disc,'</span><span';
      if($loan_source != '') {echo ' class="tooltiptext6"';}
      echo '>',$loan_source,'</span></span>' . " " ; //this ensures each word is its own element with a unique id

      } elseif ($loan_place == 0) {
      echo '<span class="morph_replace"><span class="undoneclass" style="display:inline;"><span class="tooltip" id="tokno_',$tokno,'">' . $cs_id. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span><span class="redoneclass" style="display:none;"><span class="tooltip" id="tokno_',$tokno,'">' . $row["morph_replace"]. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span></span>' . " " ;

    } elseif ($morph_replace =='') {
      echo '<span class="loan_place',$loan_place,'"><span class="tooltip" id="tokno_',$tokno,'">' . $cs_id. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
      if($eng_trans != '') {echo ' class="tooltiptext4"';}
      echo '>',$eng_trans,'</span><span';
      if($etym_disc != '') {echo ' class="tooltiptext5"';}
      echo '>',$etym_disc,'</span><span';
      if($loan_source != '') {echo ' class="tooltiptext6"';}
      echo '>',$loan_source,'</span></span></span>' . " " ;

    } else {
     echo '<span class="loan_place',$loan_place,'"><span class="morph_replace"><span class="undoneclass" style="display:inline;"><span class="tooltip" id="tokno_',$tokno,'">' . $cs_id. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
     if($eng_trans != '') {echo ' class="tooltiptext4"';}
     echo '>',$eng_trans,'</span><span';
     if($etym_disc != '') {echo ' class="tooltiptext5"';}
     echo '>',$etym_disc,'</span><span';
     if($loan_source != '') {echo ' class="tooltiptext6"';}
     echo '>',$loan_source,'</span></span></span><span class="redoneclass" style="display:none;"><span class="tooltip" id="tokno_',$tokno,'">' . $row["morph_replace"]. '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
     if($eng_trans != '') {echo ' class="tooltiptext4"';}
     echo '>',$eng_trans,'</span><span';
     if($etym_disc != '') {echo ' class="tooltiptext5"';}
     echo '>',$etym_disc,'</span><span';
     if($loan_source != '') {echo ' class="tooltiptext6"';}
     echo '>',$loan_source,'</span></span></span></span></span>' . " " ;

    }
      }

    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
