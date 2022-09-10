<script>
    let text_id = 1;
    let codex = 2;
    let book = 1;
    let chapter = 5;

    const textselector = document.getElementById('textselect');
    const resizeSelect = function () {
      let dummyselect = document.createElement('select');
      let dummyoption = document.createElement('option');

      dummyoption.textContent = textselector.options[textselector.selectedIndex].text;
      dummyselect.id = 'hidden_select';
      dummyselect.appendChild(dummyoption);
      textselector.after(dummyselect);//.after('') inserts stuff directly after the entire element, i.e. after its </> closing tag

      const dummywidth = dummyselect.getBoundingClientRect().width;
      console.log("Select width: "+dummywidth);
      textselector.style.width = `${dummywidth}px`;

      dummyselect.remove();
    };

    const selectText = function () {
      text_id = Number(document.getElementById('textselect').value);

      if(text_id < 3) {
        text_id == 1 ? codex = 2 : codex = 1;
        let post_data = "text_id="+text_id+"&codex="+codex+"&book="+book+"&chapter="+chapter;
        const httpRequest = (method, url) => {
          const xhttp = new XMLHttpRequest();
          xhttp.open(method, url, true);
          xhttp.responseType = 'json';
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.onreadystatechange = () => {
            if(xhttp.readyState == 4) {
              let gospels_select_HTML = '<label id="booklabel" for="bookselect">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><select id="bookselect" name="bookselect" onchange="selectBook()"><option value="1">Matthew</option><option value="2">Mark</option><option value="3">Luke</option><option value="4">John</option></select><select id="chapselect" name="chapselect" onchange="selectChapter()">';
              let json_response = xhttp.response;
              gospels_select_HTML += json_response.HTML_options;

              if(json_response.chapter_exists == false) {
                codex == 1 ? chapter = 3 : chapter = 5; 
              }

              document.getElementById("gospels_chap_select").innerHTML = gospels_select_HTML;
              document.getElementById("chapselect").value = chapter;
              document.getElementById("bookselect").value = book;

              document.getElementById("gospels_chap_select").style.display = "block";
            }
          }
          xhttp.send(post_data);
        }
        httpRequest("POST", "gospels_chap_select.php");

      }
      else {
        document.getElementById("gospels_chap_select").style.display = "none";
      }

      let post_data = "text_id="+text_id;

    };
    
    textselector.addEventListener('change', resizeSelect);
    resizeSelect();


    const clickEvent = new Event('click');
    
    const switch_script = function (event) {
      let switcher_classes = event.target.classList;
      if(switcher_classes[1] == "selected") return;

      let switcher_id = event.target.id;

      let post_data = "codex="+codex+"&book="+book+"&chapter="+chapter;
      console.log(post_data);
      const httpRequest = (method, url) => {
        const xhttp = new XMLHttpRequest();
        xhttp.open(method, url, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhttp.onreadystatechange = () => {
          if(xhttp.readyState == 4) {
            if(switcher_id == "CS_switcher") {
              document.getElementById("main_text").classList.replace("non_latin", "latin");
            }
            else {
              document.getElementById("main_text").classList.replace("latin", "non_latin");
            }
            document.getElementById("main_text").innerHTML = xhttp.responseText;
            tt_type();

            switcher_classes.remove("unselected");
            switcher_classes.add("selected");
            switch(switcher_id) {
              case("glag_switcher"):
                event.target.style.borderRight = "none";
                event.target.style.borderBottomRightRadius = "0px";

                document.getElementById("cyr_switcher").classList.remove("selected");
                document.getElementById("cyr_switcher").classList.add("unselected");
                document.getElementById("cyr_switcher").style.borderLeft = "2px solid #815400";
                document.getElementById("cyr_switcher").style.borderRight = "none";
                document.getElementById("cyr_switcher").style.borderBottomLeftRadius = "8px";
                document.getElementById("cyr_switcher").style.borderBottomRightRadius = "0px";

                document.getElementById("CS_switcher").classList.remove("selected");
                document.getElementById("CS_switcher").classList.add("unselected");
                document.getElementById("CS_switcher").style.borderLeft = "2px solid #815400";
                document.getElementById("CS_switcher").style.borderBottomLeftRadius = "0px";

                document.getElementById("CS_controls").style.display = "none";
                break;
              case("cyr_switcher"):
                event.target.style.borderLeft = "none";
                event.target.style.borderRight = "none";
                event.target.style.borderBottomLeftRadius = "0px";

                document.getElementById("glag_switcher").classList.remove("selected");
                document.getElementById("glag_switcher").classList.add("unselected");
                document.getElementById("glag_switcher").style.borderRight = "2px solid #815400";
                document.getElementById("glag_switcher").style.borderBottomRightRadius = "8px";

                document.getElementById("CS_switcher").classList.remove("selected");
                document.getElementById("CS_switcher").classList.add("unselected");
                document.getElementById("CS_switcher").style.borderLeft = "2px solid #815400";
                document.getElementById("CS_switcher").style.borderBottomLeftRadius = "8px";

                document.getElementById("CS_controls").style.display = "none";
                break;
              case("CS_switcher"):
                event.target.style.borderLeft = "none";
                event.target.style.borderRight = "none";
                event.target.style.borderBottomLeftRadius = "0px";

                document.getElementById("glag_switcher").classList.remove("selected");
                document.getElementById("glag_switcher").classList.add("unselected");
                document.getElementById("glag_switcher").style.borderRight = "2px solid #815400";
                document.getElementById("glag_switcher").style.borderBottomRightRadius = "0px";

                document.getElementById("cyr_switcher").classList.remove("selected");
                document.getElementById("cyr_switcher").classList.add("unselected");
                document.getElementById("cyr_switcher").style.borderRight = "2px solid #815400";
                document.getElementById("cyr_switcher").style.borderLeft = "none";
                document.getElementById("cyr_switcher").style.borderBottomRightRadius = "8px";
                document.getElementById("cyr_switcher").style.borderBottomLeftRadius = "0px";

                document.getElementById("CS_controls").style.display = "inline";
                if(document.getElementById("undone").checked) { undoFunction(); }
          
                break;    
            }
            if(loan_place_showing) {
              document.getElementById("loan_place").dispatchEvent(clickEvent);
              document.getElementById("loan_place").dispatchEvent(clickEvent);
            }
            if(gone_green) {
              document.getElementById("morph_highlight").dispatchEvent(clickEvent);
              document.getElementById("morph_highlight").dispatchEvent(clickEvent);
            }

          }
        }
        xhttp.send(post_data);
      }
      httpRequest("POST", switcher_id+".php");      
      
    };

  document.getElementById("script_bar").addEventListener('click', switch_script);


  const docRoot = "/site";

 window.addEventListener("resize", ttPosition);

    var t_type = 0;

   function ttPosition() {
     if(t_type < 4) {return; }
      const tooltip5s = document.body.getElementsByClassName(`tooltiptext${t_type}`);
      const viewport_width = window.visualViewport.width;
      console.log(viewport_width);
       for (var tt_num in tooltip5s) {
        let etym_tt = tooltip5s[tt_num];
        etym_tt.style.transform = "none";
        etym_tt.style.border = "none";
        let rectRight = etym_tt.getBoundingClientRect().right;
        let right_overflow = rectRight - viewport_width + 3;
        if (right_overflow > 0) {
       etym_tt.style.transform = `translateX(-${right_overflow}px)`;
       etym_tt.style.border = "1px solid red";

        }

       console.log(etym_tt);
      console.log(rectRight);
      console.log(right_overflow);
       console.log(viewport_width);

      }

    }

    function tt_type() {
      
      let highlighted_words = document.querySelectorAll('.highlighted');
      highlighted_words.forEach(highlighted_word => {
          highlighted_word.classList.remove("highlighted");
        });

      t_type = document.getElementById("type_select").value;
      if (t_type == 0) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_none_style.css");       
      }

      else if (t_type == 1) {
       document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_Cyr_style.css");
      }

      else if (t_type == 2) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_Glag_style.css");
      }

      else if (t_type == 3) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_CS_style.css");
      }

      else if (t_type == 4) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_eng_style.css");
        let tt4_words = document.querySelectorAll('.tooltiptext4');
        tt4_words.forEach(tt4_word => {
          tt4_word.parentNode.classList.add("highlighted");
        });
        
       // window.dispatchEvent(new Event('resize'));
        setTimeout(function () {
          ttPosition();
        }, 100);

      }

      else if (t_type == 5) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_etym_style.css");
        let tt5_words = document.querySelectorAll('.tooltiptext5');
        tt5_words.forEach(tt5_word => {
          tt5_word.parentNode.classList.add("highlighted");
        });

      //  window.dispatchEvent(new Event('resize'));
        setTimeout(function () {
          ttPosition();
        }, 100);

      }

      else if (t_type == 6) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_loan_style.css");
        let tt6_words = document.querySelectorAll('.tooltiptext6');
        tt6_words.forEach(tt6_word => {
          tt6_word.parentNode.classList.add("highlighted");
        });

        //window.dispatchEvent(new Event('resize'));
        setTimeout(function () {
          ttPosition();
        }, 100);
      }
    }

    scrollFunction(); //has to go last
</script>
