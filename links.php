<style>
  .topbar_link {
    text-decoration: none;
    color: black;
  }
  .current_link {
    background-color: #d59110;
  }

</style>
<div id="links-flexbox"> 
  <a class="topbar_link" href="/site"><div id="texts_link" class="link-buttons">Texts</div></a>
  <a class="topbar_link" href="/site/search.php"><div id="search_link" class="link-buttons">Search</div></a>
  <a class="topbar_link" href="/site/principles.php"><div id="info_link" class="link-buttons">Reconstruction info</div></a>
</div>
<script>
    const link_blocks = document.getElementsByClassName("topbar_link");
    for (let link_block of link_blocks) link_block.classList.remove("current_link");

    if(page_id == 0) link_blocks[1].classList.add("current_link");
    else link_blocks[page_id -1].classList.add("current_link");

</script>
