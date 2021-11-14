<?php
$book = 'mat';
$book_f = 'Mat';
$filename = "Mar_";
$php_ext = ".php";

$chap_no = 5;

for ($i = 0; $i <= 84; $i++)
  {


$f = fopen($filename.$book_f."_Ch".strval($chap_no).$php_ext, "w") or die("Unable to open file!");
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
  <?php include "mar_'.$book.'_links.php"; ?>
</h>

<body>
<br>
<?php include $path."/style_etc/controls.php"; ?>

<span id = "glag_kv" class="non_latin" style="font-size:28px">
  <?php include $path."/Marianus/middle_php/mar'.$book.$chap_no.'glag.php"; ?>
</span>

<span id="cyr_kv" class="non_latin" style="font-size:28px">
<?php include $path."/Marianus/middle_php/mar'.$book.$chap_no.'cyr.php"; ?>
</span>
<script> document.getElementById("cyr_kv").style.display = "none"; </script>

<span id="cs_kv" class="latin" style="font-size:24px">
<?php include $path."/Marianus/middle_php/mar'.$book.$chap_no.'cs.php"; ?>
</span>
<script> document.getElementById("cs_kv").style.display = "none"; </script>

<?php include $path."/style_etc/functions.php"; ?>

</body>
</html>');
fclose($f);

$chap_no++;
if($chap_no > 28 && $book == 'mat') {
  $chap_no = 1;
  $book = 'mark';
  $book_f = 'Mark';
}
if($chap_no > 16 && $book == 'mark') {
  $chap_no = 1;
  $book = 'luke';
  $book_f = 'Luke';
}
if($chap_no > 24 && $book == 'luke') {
  $chap_no = 1;
  $book = 'john';
  $book_f = 'John';
}
}
?>
