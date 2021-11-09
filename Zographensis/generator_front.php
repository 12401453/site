<?php

$filename = "Zog_Mat_Ch";
$php_ext = ".php";

#chap_no = 65

for ($chap_no = 3; $chap_no <= 28; $chap_no++)
  {

 if($chap_no < 24 && $chap_no > 16) { continue; }

$f = fopen($filename.strval($chap_no).$php_ext, "w") or die("Unable to open file!");
fwrite($f, '<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="/style_etc/tooltip_CS_style.css" id="tt_styles">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
$path = $_SERVER["DOCUMENT_ROOT"];
include $path."/style_etc/style.php"; ?>

</head>
  <?php include $path."/Zographensis/mattlinks.php"; ?>
</h>

<body>
<br>
<?php include $path."/style_etc/controls.php"; ?>

<span id = "glag_kv" class="non_latin" style="font-size:28px">
  <?php include $path."/Zographensis/middle_php/zogmat'.$chap_no.'glag.php"; ?>
</span>

<span id="cyr_kv" class="non_latin" style="font-size:28px">
<?php include $path."/Zographensis/middle_php/zogmat'.$chap_no.'cyr.php"; ?>
</span>
<script> document.getElementById("cyr_kv").style.display = "none"; </script>

<span id="cs_kv" class="latin" style="font-size:24px">
<?php include $path."/Zographensis/middle_php/zogmat'.$chap_no.'cs.php"; ?>
</span>
<script> document.getElementById("cs_kv").style.display = "none"; </script>

<?php include $path."/style_etc/functions.php"; ?>

</body>
</html>');
fclose($f);
}
?>
