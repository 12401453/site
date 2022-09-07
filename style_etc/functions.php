    <script>
      let codex = 2;
      let book = 1;
      let chapter = 5;

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

    document.getElementById("script_bar").addEventListener('click', switch_script);/*(event) => {
      let switcher_classes = event.target.classList;
      let switcher_id = event.target.id;
      if(switcher_classes[1] == "selected") return;
      else {
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
            break;    
        }
      } 
    }) */


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


scrollFunction();

    </script>
