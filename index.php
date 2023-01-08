<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path = $path."/site";
    include $path."/style_etc/style.php"; 
  ?>

  <link rel="stylesheet" type="text/css" href="/site/style_etc/tooltip_CS_style.css" id="tt_styles">
 

</head>

<body>
<script>let page_id = 1;</script>
<?php
include $path."/links.php";
include $path."/style_etc/controls.php"; 
?>

<div id="main_flexbox">
  
  <span id="script_bar">
    <span id="glag_switcher" class="script_switcher selected">Glagolitic</span><span id="cyr_switcher" class="script_switcher unselected">Cyrillic</span><span id="CS_switcher" class="script_switcher unselected">Common Slavic</span>
  </span>
  
  <span id="CS_controls" style="display: none">
    <input type="radio" id="undone" name="undone" onclick="undoFunction(); ttPosition();">
      <label for="undone" id="undo_label">Undo non-etymological changes</label><br>
    <input type="radio" checked id="redone" name="undone" onclick="redoFunction(); ttPosition();">
      <label for="redone" id="redo_label">Keep non-etymological changes</label><br><br>
  </span>

  <span id="main_text" class="non_latin">
    <?php include $path."/glag_switcher.php"; ?>
  </span>
  
</div>
<?php include $path."/style_etc/functions.php"; ?>

<span id="spoofspan"></span>
</body>
</html>
