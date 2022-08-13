<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --->
  <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path = $path."/site";
    include $path."/style_etc/style.php"; 
  ?>

  <link rel="stylesheet" type="text/css" href="/site/style_etc/tooltip_CS_style.css" id="tt_styles">
 

</head>

<body>
<br>
<?php include $path."/style_etc/controls.php"; ?>

<div id="main_flexbox">
  <span id="script_bar"><span id="glag_switcher" class="script_switcher selected">Glagolitic</span><span id="cyr_switcher" class="script_switcher unselected">Cyrillic</span><span id="CS_switcher" class="script_switcher unselected">Common Slavic</span></span>
  <span id="main_text" class="non_latin">
    <?php include $path."/Marianus/middle_php/marmat5glag.php"; ?>
  </span>
</div>
<?php include $path."/style_etc/functions.php"; ?>

</body>
</html>
