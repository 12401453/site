
<br>
<form autocomplete="off"> 
<div id="select_button">
  <label id="textlabel" for="textselect">Text:</label>
  <select id="textselect" name="textselect" autocomplete="off" onchange="selectText()">
    <?php $path = $_SERVER["DOCUMENT_ROOT"];
        $path = $path."/site";
        include $path."/db_details_web.php";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SET NAMES UTF8";
        $res = $conn->query($sql);

        $sql = "SELECT * FROM texts";
        $res = $conn->query($sql);

        if ($res->num_rows > 0) {

          while($row = $res->fetch_assoc()) {
            echo '<option value="'.$row["text_id"].'">'.$row["text_title"].'</option>';
          }
        }
        
    ?>
  </select>
</div>

<div id="gospels_chap_select">
  <label id="booklabel" for="bookselect">Text:</label>
  <select id="bookselect" name="bookselect" autocomplete="off" onchange="selectBook()">
    <option value="1">Matthew</option>
    <option value="2">Mark</option>
    <option value="3">Luke</option>
    <option value="4">John</option>
  </select>

  <select id="chapselect" name="chapselect" autocomplete="off" onchange="selectChapter()">
    <?php  
    $sql = "SELECT chapter FROM gospels_index WHERE codex = 2 AND book = 1";
      $res = $conn->query($sql);

      if ($res->num_rows > 0) {

        while($row = $res->fetch_assoc()) {
          echo '<option value="'.$row["chapter"].'">Chapter '.$row["chapter"].'</option>';
        }
      }
    $conn->close();
    ?>
  </select>
</div>
</form>

<br>
<span id="top_buttons">
<input type="checkbox" id="morph_highlight" name="morph_highlight" autocomplete="off" disabled="disabled">
  <label for="morph_highlight">Highlight morphologically conditioned or other non-etymological development</label><br>
<input type="checkbox" id="loan_place" name="loan_place" autocomplete="off" disabled="disabled">
  <label for="loan_place">Show loanword origin</label><br>

  <br></span>

<form autocomplete="off">
<div id="tt_button"><label for="type_select" style="font-weight: bold">Tooltip:</label>
  <select id="type_select" name="tooltip_data" onchange="tt_type()">
    <option value="0">None</option>
    <option value="1">Cyrillic</option>
    <option value="2">Glagolitic</option>
    <option value="3" selected="selected">Common Slavic</option>
    <option value="4">English</option>
    <option value="5">Etymology discussion</option>
    <option value="6">Loanword source</option>
  </select>
</div>
</form>