
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

    $chapter_exists = false;
    $HTML_options = "";

    $sql = "SELECT chapter FROM gospels_index WHERE codex = $codex AND book = $book";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $HTML_options = $HTML_options.'<option value="'.$row["chapter"].'">Chapter '.$row["chapter"].'</option>';
        if($chapter == $row["chapter"]) {
          $chapter_exists = true;
        }
      }
    }
    $json_response = json_encode(array("HTML_options" => $HTML_options, "chapter_exists" => $chapter_exists));
    echo $json_response;

$conn->close();

?>
