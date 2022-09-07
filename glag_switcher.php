    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path = $path."/site";

    include $path."/db_details_web.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }




    $sql = "SET NAMES UTF8";
    $res = $conn->query($sql);

    if(isset($_POST['codex'])) {
        $codex = $_POST['codex'];
    }
    else $codex = 2;

    if(isset($_POST['book'])) {
        $book = $_POST['book'];
    }
    else $book = 1;

    if(isset($_POST['chapter'])) {
        $chapter = $_POST['chapter'];
    }
    else $chapter = 5;

    $sql = "SELECT tokno_start, tokno_end FROM gospels_index WHERE codex = $codex AND book = $book AND chapter = $chapter";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $tokno_start = $row["tokno_start"];
    $tokno_end = $row["tokno_end"];

    $codex_table = "marianus";
    if($codex == 1) {
        $codex_table = "zographensis";
    }


    $sql = "SELECT * FROM $codex_table WHERE tokno < $tokno_end AND tokno > $tokno_start";
    $result = $conn->query($sql);

echo "<br>";

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
    echo '<span class="tooltip" id="tokno_',$tokno,'">' . $glag_id.
     '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
     if($eng_trans != '') {echo ' class="tooltiptext4"';}
     echo '>',$eng_trans,'</span><span';
     if($etym_disc != '') {echo ' class="tooltiptext5"';}
     echo '>',$etym_disc,'</span><span';
     if($loan_source != '') {echo ' class="tooltiptext6"';}
     echo '>',$loan_source,'</span></span>' . " " ;

  } elseif ($loan_place == 0) {
    echo '<span class="morph_replace"><span class="tooltip" id="tokno_',$tokno,'">' . $glag_id.
    '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span>' . " " ;

  } elseif ($morph_replace =='') {
    echo '<span class="loan_place',$loan_place,'"><span class="tooltip" id="tokno_',$tokno,'">' . $glag_id.
    '<span class="tooltiptext1">',$cyr_id_good,'</span><span class="tooltiptext2">',$glag_id,'</span><span class="tooltiptext3">',$cs_id,'</span><span';
    if($eng_trans != '') {echo ' class="tooltiptext4"';}
    echo '>',$eng_trans,'</span><span';
    if($etym_disc != '') {echo ' class="tooltiptext5"';}
    echo '>',$etym_disc,'</span><span';
    if($loan_source != '') {echo ' class="tooltiptext6"';}
    echo '>',$loan_source,'</span></span></span>' . " " ;

} else {
echo '<span class="loan_place',$loan_place,'"><span class="morph_replace"><span class="tooltip" id="tokno_',$tokno,'">' . $glag_id.
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