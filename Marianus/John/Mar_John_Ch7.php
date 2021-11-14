<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="/style_etc/tooltip_CS_style.css" id="tt_styles">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
$path = $_SERVER["DOCUMENT_ROOT"];
include $path."/style_etc/style.php"; ?>

</head>
  <?php include "mar_john_links.php"; ?>
</h>

<body>
<br>
<?php include $path."/style_etc/controls.php"; ?>

<span id = "glag_kv" class="non_latin" style="font-size:28px">
  <?php include $path."/Marianus/middle_php/marjohn7glag.php"; ?>
</span>

<span id="cyr_kv" class="non_latin" style="font-size:28px">
<?php include $path."/Marianus/middle_php/marjohn7cyr.php"; ?>
</span>
<script> document.getElementById("cyr_kv").style.display = "none"; </script>

<span id="cs_kv" class="latin" style="font-size:24px">
<?php include $path."/Marianus/middle_php/marjohn7cs.php"; ?>
</span>
<script> document.getElementById("cs_kv").style.display = "none"; </script>

<?php include $path."/style_etc/functions.php"; ?>

</body>
</html>