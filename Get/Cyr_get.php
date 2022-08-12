<?php

if (!empty($_GET['tokno'])) {
$highlight_var = $_GET['tokno']; }
else {$highlight_var = 0;}


echo '<style>  #tokno_'. $highlight_var . ' {
  font-weight: bold;
  border-style: solid;
} </style>

<script type="text/javascript">
function scrollFunction() {
  var elmnt = document.getElementById("tokno_'.$highlight_var.'");
  elmnt.scrollIntoView();
}


</script>';
?>



<?php
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $cs_id = $row["cs_id"];
    $tokno = $row["tokno"];
    $glag_id = str_replace(' ', '&nbsp;', $row["glag_id"]);
    $cyr_id_good = str_replace(' ', '&nbsp;', $row["cyr_id_good"]);

    $eng_trans = $row["eng_trans"];
    $etym_disc = $row["etym_disc"];
    $loan_source = $row["loan_source"];

    $morph_replace = $row["morph_replace"];
    $loan_place = $row["loan_place"];


    if ($morph_replace =='' AND $loan_place == 0) {
    echo '<span class="tooltip" id="tokno_',$tokno,'">' . $cyr_id_good.
     '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
     if($eng_trans != '') {echo ' class="tooltiptext4"';}
     echo '>',$eng_trans,'</span><span';
     if($etym_disc != '') {echo ' class="tooltiptext5"';}
     echo '>',$etym_disc,'</span><span';
     if($loan_source != '') {echo ' class="tooltiptext6"';}
     echo '>',$loan_source,'</span></span>' . " " ;

  } elseif ($loan_place == 0) {
    echo '<span class="morph_replace"><span class="tooltip" id="tokno_',$tokno,'">' . $cyr_id_good.
    '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span>' . " " ;

  } elseif ($morph_replace =='') {
    echo '<span class="loan_place',$loan_place,'"><span class="tooltip" id="tokno_',$tokno,'">' . $cyr_id_good.
    '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span>' . " " ;

} else {
echo '<span class="loan_place',$loan_place,'"><span class="morph_replace"><span class="tooltip" id="tokno_',$tokno,'">' . $cyr_id_good.
'<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
if($eng_trans != '') {echo ' class="tooltiptext4"';}
echo '>',$eng_trans,'</span><span';
if($etym_disc != '') {echo ' class="tooltiptext5"';}
echo '>',$etym_disc,'</span><span';
if($loan_source != '') {echo ' class="tooltiptext6"';}
echo '>',$loan_source,'</span></span></span></span>' . " " ;

}
}
} else {
  echo "0 results";
}
$conn->close();

?>
