<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="/style_etc/tooltip_CS_style.css" id="tt_styles">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">


<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path = $path."/site";
include $path."/style_etc/style.php"; ?>


</head>
<?php include $path."/links.php"; ?>
</h>

<body>
  <br>
<?php include $path."/style_etc/controls_noglag.php"; ?>




<span id="cyr_kv" class="non_latin" style="font-size:24px; font-family: Menaion">
<?php include $path."/1229_riga/middle_php/1229_cyr.php"; ?>
</span>


<span id="cs_kv" class="latin" style="font-size:24px">
  <?php include $path."/1229_riga/middle_php/1229_cs.php"; ?>
</span>
 <script> document.getElementById("cs_kv").style.display = "none"; </script>


<span id="glag_kv"></span>


<div id="refs" class="latin" style="font-size:21px; background-color: #f3d292; line-height: 1.15">Based on the <a href="http://www.schaeken.nl/lu/research/online/editions/1229/1229atxttuf.html">electronic edition by Jos Schaeken (2000)</a>, with frequent reference to the <a href="http://www.schaeken.nl/lu/research/online/editions/1229/1229atranslgerm.html">German translation</a> in <a href="https://archive.org/details/deutschrussische00goetuoft">Goetz (1916: 232-293)</a></div>

<?php include $path."/style_etc/functions_noglag.php"; ?>


</body>
</html>
