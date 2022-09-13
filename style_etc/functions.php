<script>
    let text_id = 1;
    let codex = 2;
    let book = 1;
    let chapter = 5;
    let script_code = 1;

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

    const gospelsSelectAjax = function () {
      let loadingbutton = document.createElement('div');
      loadingbutton.innerHTML = "Loading...";
      loadingbutton.id = 'loadingbutton';
      document.getElementById('spoofspan').after(loadingbutton);

      let post_data = "text_id="+text_id+"&codex="+codex+"&book="+book+"&chapter="+chapter;
        const httpRequest = (method, url) => {
          const xhttp = new XMLHttpRequest();
          xhttp.open(method, url, true);
          xhttp.responseType = 'json';
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.onreadystatechange = () => {
            if(xhttp.readyState == 4) {
             
              let json_response = xhttp.response;
              let gospels_select_HTML = xhttp.response.HTML_options;
              
              if(json_response.chapter_exists == false) {
                codex == 1 ? chapter = 3 : chapter = 5; 
              }
              if(json_response.book_exists == false) {
                book = 1;
                chapter = 3;
              }
              fetchText();

              document.getElementById("gospels_chap_select").innerHTML = gospels_select_HTML;
              document.getElementById("chapselect").value = chapter;
              document.getElementById("bookselect").value = book;

              document.getElementById("gospels_chap_select").style.display = "block";
            }
          }
          xhttp.send(post_data);
        }
        httpRequest("POST", "gospels_chap_select.php");
    };

    const selectText = function () {
      text_id = Number(document.getElementById('textselect').value);

      if(text_id < 3) {
        text_id == 1 ? codex = 2 : codex = 1; 
        gospelsSelectAjax();
       // fetchText();
      }
      else {
        document.getElementById("gospels_chap_select").style.display = "none";
      }

      let post_data = "text_id="+text_id;

    };

    const selectBook = function () {
      book = Number(document.getElementById('bookselect').value);
      gospelsSelectAjax();
    };

    const selectChapter = function () {
      chapter = Number(document.getElementById('chapselect').value);
      gospelsSelectAjax();
    };
    
    textselector.addEventListener('change', resizeSelect);
    resizeSelect();


    const clickEvent = new Event('click');
    
    const switch_script = function (event) {
      let loadingbutton = document.createElement('div');
      loadingbutton.innerHTML = "Loading...";
      loadingbutton.id = 'loadingbutton';
      document.getElementById('spoofspan').after(loadingbutton);

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
                script_code = 1;
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
                script_code = 2;
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
                script_code = 3;
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
            loadingbutton.remove();
          }
        }
        xhttp.send(post_data);
      }
      httpRequest("POST", switcher_id+".php");      
      
    };

  document.getElementById("script_bar").addEventListener('click', switch_script);

  const fetchText = function () {

    let switcher_id = document.querySelector('.selected').id;
    let post_data = "codex="+codex+"&book="+book+"&chapter="+chapter;
      console.log(post_data);
      const httpRequest = (method, url) => {
        const xhttp = new XMLHttpRequest();
        xhttp.open(method, url, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhttp.onreadystatechange = () => {
          if(xhttp.readyState == 4) {
            document.getElementById("main_text").innerHTML = xhttp.responseText;
            tt_type();

            if(loan_place_showing) {
              document.getElementById("loan_place").dispatchEvent(clickEvent);
              document.getElementById("loan_place").dispatchEvent(clickEvent);
            }
            if(gone_green) {
              document.getElementById("morph_highlight").dispatchEvent(clickEvent);
              document.getElementById("morph_highlight").dispatchEvent(clickEvent);
            }
            if(document.getElementById("undone").checked && script_code == 3) { undoFunction(); }

            loadingbutton.remove();
          }
        }
        xhttp.send(post_data);
      }
      httpRequest("POST", switcher_id+".php");      
  };


  const docRoot = "/site";

  let t_type = Number(document.getElementById("type_select").value);

 /* const ttPosition = function () {
    if(t_type < 4) {return; }
    const tooltips = document.body.querySelectorAll(`.tooltiptext${t_type}`);
    const viewport_width = window.visualViewport.width;
    // console.log(viewport_width);
    tooltips.forEach(tooltip => {
      tooltip.style.transform = "none";
      tooltip.style.border = "none";
      let rectRight = tooltip.getBoundingClientRect().right;
      let right_overflow = rectRight - viewport_width + 3;
      if (right_overflow > 0) {
      tooltip.style.transform = `translateX(-${right_overflow}px)`;
      tooltip.style.border = "1px solid red";

      }

    /* console.log(tooltip);
    console.log(rectRight);
    console.log(right_overflow);
      console.log(viewport_width); */

  /*  });

  }; */

  const ttPosition = function () {

    const tooltips = document.body.querySelectorAll(`.tooltiptext${t_type}`);
    const viewport_width = window.visualViewport.width;
    if(t_type < 3 || (script_code == 3 && t_type < 4) || (t_type == 3 && viewport_width > 768)) {
      console.log("ttPosition() returned immediately");
      return;
    }
    tooltips.forEach(tooltip => {
      if(t_type > 3 || tooltip.previousElementSibling.innerHTML.includes("҃")) {
        tooltip.style.transform = "none";
        tooltip.style.border = "none";
        let rectRight = tooltip.getBoundingClientRect().right;
        let right_overflow = rectRight - viewport_width + 3;
        console.log("right overflow: "+right_overflow);
        if(right_overflow > 0) {
        tooltip.style.transform = `translateX(-${right_overflow}px)`;
        //tooltip.style.border = "1px solid red";
        tooltip.style.border = "1px solid black";
        }
      }
        /* console.log(tooltip);
        console.log(rectRight);
        console.log(right_overflow);
        console.log(viewport_width); */

    });

  };
  
  window.addEventListener("resize", ttPosition);

    

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
        setTimeout(function () {
          ttPosition();
        }, 100);
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
