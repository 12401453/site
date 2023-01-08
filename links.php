<script>
  const texts_link = function () {
    if(page_id == 1) return;
    window.location = "/site";
  };
  const search_link = function () {
    if(page_id == 2) return;
    window.location = "/site/search.php";
  };
  const info_link = function () {
    if(page_id == 3) return;
    window.location = "/site/principles.php";
  };



</script>
<div id="links-flexbox"> 
  <div id="texts_link" class="link-buttons" onclick="texts_link()">Texts</div>
  <div id="search_link" class="link-buttons" onclick="search_link()">Search</div>
  <div id="info_link" class="link-buttons" onclick="info_link()">Reconstruction info</div>
</div>
