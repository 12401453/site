<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
      @font-face { font-family: Bukyvede; src: url('BukyVede-Regular.ttf'); }
      p1 {
         font-family: Bukyvede
         }
      p2 {
       font-family: Calibri
     }
    </style>
</head>
<h> <?php
$path = $_SERVER["DOCUMENT_ROOT"];
include $path."/links.php";

?>
</h>

<body>

  <script>

function changeSearch1() {
  var spoofspan = document.getElementById('spoofspan');
  var spanDisplay = spoofspan.style.display;

if (spanDisplay == 'inline') {
document.getElementById('csCheck').checked = true;
document.getElementById('cs_search').setAttribute('action', '/search/placeholder_search.php');
spoofspan.style.display = 'none';
document.getElementById('cyrCheck').disabled = true;
document.getElementById('glagCheck').disabled = true;
document.getElementById('anyvowel_search').disabled = true;
}
else {
  document.getElementById("cs_search").setAttribute("action", "/search/normal_search.php");
spoofspan.style.display = 'inline';
document.getElementById('cyrCheck').disabled = false;
document.getElementById('glagCheck').disabled = false;
document.getElementById('anyvowel_search').disabled = false;
}
}





  </script>


<p2 style="font-size:20px">
<br>
<br>

<form id="cs_search" action="/search/normal_search.php" method="post">
Search <input type="text" accept-charset="utf-8" name="search"><br>

Search via:<span id="spoofspan" style="display: inline;"></span><br>
<input type="radio" id="csCheck" name="searchtype" value="cs_id" checked>
<label for="csCheck">Common Slavonic</label>
<br>
<input type="radio" id="cyrCheck" name="searchtype" value="cyr_id_good">
<label for="cyrCheck">Cyrillic</label>
<br>
<input type="radio" id="glagCheck" name="searchtype" value="glag_id">
<label for="glagCheck">Glagolitic</label><br>


<label for="textselect">Choose text to search:</label>
<select id="textselect" name="textselect">
  <option value="zographensis">Codex Zographensis</option>
  <option value="kievbl">Kiev Folia</option>
  <option value="1229_riga">1229 Gotland Treaty</option>
</select><div style="font-size: 16px">
<input type="checkbox" id="long_adj_off" name="long_adj" value="4">
<input type="hidden" name="long_adj_hidden" value="1">
 <label for="long_adj_off">Exclude long-form adjectivals whose short forms have consonantal desinences (e.g. masc. Dpl. сѫштіимъ < *sǫћemъjimъ) </label><br>
<input type="checkbox" id="loans_off" name="loans" value="3">
<input type="hidden" name="loans_hidden" value="1">
  <label for="loans_off">Exclude badly-integrated foreign loans</label><br>
<input type="checkbox" id="no_cs" name="no_cs" value="2">
<input type="hidden" name="no_cs_hidden" value="1">
    <label for="no_cs">Exclude unannotated parts of the text</label></div>
<span style="font-size: 16px">(Start the query with capital 'F' to find only word-initial examples. Does not work with placeholder letters)</span><br><br>


<span>
<input type="checkbox" id="anycons_search" name="anycons_search" onclick="changeSearch1()">
<label for="anycons_search">Enable placeholder letters (placeholders must be capitalised)</label>
<span style="font-size: 16px;"><ul>
  <li>'T' for any consonant </li>
  <li>'V' for any vowel (excluding syllabic liquids)</li>
  <li>'J' for any palatal <b>including</b> /j/</li>
  <li>'C' for any palatal <b>excluding</b> /j/</li>
  <li>'E' for any front vowel (excluding the archiphoneme /Ǟ/)</li>
  <li>'O' for any back-vowel</li>
  <li>'K' for any velar (excluding foreign /ḱ ǵ x́/)</li>
  <li>'R' for any liquid</li>
  <li>'Ъ' for any jer</li></ul> </span>

</span>

<input type ="submit">
</form><br><br>


<table id="alphabet" style="text-align: center;">
  <tr style="font-size: 125%;">
    <th>Ǟ</th>
    <th>ě</th>
    <th>ę</th>
    <th>ǫ</th>
    <th>ü</th>
  </tr>
  <tr>
    <td>č<b>Ǟ</b>sъ, sъblažń<b>Ǟ</b>jetъ</td>
    <td>sl<b>ě</b>pъ, sъn<b>ě</b>sti</td>
    <td>j<b>ę</b>ga, jьm<b>ę</b></td>
    <td><b>ǫ</b>zilišče, posъĺ<b>ǫ</b></td>
    <td><b>ü</b>pokriti, s<b>ü</b>rijǞ</td>
  </tr>
  <tr style="font-family:Bukyvede; font-size:114%;">
    <td>часъ, съблажн҄ѣетъ</td>
    <td>слѣпъ, сънѣсти</td>
    <td>ѩза, ꙇмѧ</td>
    <td>ѫзилиште, посъл҄ѭ</td>
    <td>ѵпокрити, с'ѵриѣ</td>
  </tr>
  <tr style="font-size: 125%;">
    <th>r̥</th>
    <th>ŕ̥</th>
    <th>ĺ</th>
    <th>ĺ̥</th>
    <th>l̥</th>
  </tr>
  <tr>
    <td>orst<b>r̥</b>gnǫtъ, p<b>r̥</b>tъ</td>
    <td>p<b>ŕ̥</b>věje, otv<b>ŕ̥</b>zošę</td>
    <td>zem<b>ĺ</b>Ǟ, <b>ĺ</b>uby</td>
    <td>t<b>ĺ̥</b>kěte, v<b>ĺ̥</b>ki</td>
    <td>m<b>l̥</b>vęћь, d<b>l̥</b>gъ</td>
  </tr>
  <tr style="font-family:Bukyvede; font-size:114%;">
    <td>растръгнѫтъ, прътъ</td>
    <td>пръвѣе, отвръзошѧ</td>
    <td>земл҄ѣ, л҄юбъі</td>
    <td>тлъцѣте, вльци</td>
    <td>мльвѧшть, дльгъ</td>
  </tr>
  <tr style="font-size: 125%;">
    <th>ŕ</th>
    <th>žǯ</th>
    <th>šč</th>
    <th>ђ</th>
    <th>ћ</th>
  </tr>
  <tr>
    <td>mo<b>ŕ</b>e, ryba<b>ŕ</b>Ǟ</td>
    <td>jь<b>žǯ</b>enǫtъ</td>
    <td>za<b>šč</b>iti, jь<b>šč</b>istiti</td>
    <td>pově<b>ђ</b>ь, tako<b>ђ</b>e</td>
    <td>obvor<b>ћ</b>ь, nasy<b>ћ</b>eni</td>
  </tr>
  <tr style="font-family:Bukyvede; font-size:114%;">
    <td>море, ръібарѣ</td>
    <td>ижденѫтъ</td>
    <td>зашчіті, ꙇштистити</td>
    <td>повѣждь, такозе</td>
    <td>обрашть, насъицені</td>
  </tr>
  <tr style="font-size: 125%;">
    <th>šћ</th>
    <th>žђ</th>
    <th>ń</th>
    <th>ǵ</th>
    <th>ḱ</th>
  </tr>
  <tr>
    <td>oči<b>šћ</b>enьje, otъpu<b>šћ</b>Ǟti</td>
    <td>dъ<b>žђ</b>ь</td>
    <td>vъnǫtrь<b>ń</b>ǞjǞ, <b>ń</b>ǫže</td>
    <td>an<b>ǵ</b>elъ, i<b>ǵ</b>emonъ</td>
    <td><b>ḱ</b>itъ, <b>ḱ</b>ürinějьska</td>
  </tr>
  <tr style="font-family:Bukyvede; font-size:114%;">
    <td>очишчение, отъпѹштати</td>
    <td>дъждь</td>
    <td>вънѫтрьнѣѣ, н҄ѭже</td>
    <td>анꙉелъ, ꙇꙉемонъ</td>
    <td>к҄итъ, к҄ѵринѣꙇска</td>
  </tr>
</table>
<br><br>
<span style="font-size: 15px;">Note: searching for <b>ŕ, r</b> or <b>ĺ, l</b> alone will bring up results containing <b>ŕ̥, r̥</b> or <b>ĺ̥, l̥</b> respectively as well, because there is no single Unicode code for the syllabic letters, and they have to be respresented by the code for the non-syllabic letter plus the code for the "combining ring below".</span>





</body>
</html>
