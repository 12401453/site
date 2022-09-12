
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
    if(isset($_POST['book'])) {
        $book = $_POST['book'];
    }
    if(isset($_POST['chapter'])) {
        $chapter = $_POST['chapter'];
    }

    function bookName ($book_no) {
      switch($book_no) {
        case 1:
          return "Matthew";
          break;
        case 2:
          return "Mark";
          break;
        case 3:
          return "Luke";
          break;
        case 4:
          return "John";
          break;
      }
    }

    $chapter_exists = false;
    $book_exists = false;
    $HTML_options = '<label id="booklabel" for="bookselect">Text:</label>
    <select id="bookselect" name="bookselect" onchange="selectBook()">';


    $sql = "SELECT DISTINCT(book) FROM gospels_index WHERE codex = $codex";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $HTML_options = $HTML_options.'<option value="'.$row["book"].'">'.bookName($row["book"]).'</option>';
        if($book == $row["book"]) {
          $book_exists = true;
        }
  
      }
    }
    $HTML_options = $HTML_options.'</select>&nbsp;<select id="chapselect" name="chapselect" onchange="selectChapter()">';

    if($book_exists) {
      $sql = "SELECT chapter FROM gospels_index WHERE codex = $codex AND book = $book";
    }
    else {
      $sql = "SELECT chapter FROM gospels_index WHERE codex = $codex AND book = 1";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $HTML_options = $HTML_options.'<option value="'.$row["chapter"].'">Chapter '.$row["chapter"].'</option>';
        if($chapter == $row["chapter"]) {
          $chapter_exists = true;
        }
      }
    }
    $HTML_options = $HTML_options.'</select>';

    $json_response = json_encode(array("HTML_options" => $HTML_options, "book_exists" => $book_exists, "chapter_exists" => $chapter_exists));
    

    echo $json_response;

$conn->close();

?>
