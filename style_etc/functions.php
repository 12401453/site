    <script>

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
        
        window.dispatchEvent(new Event('resize'));

      }

      else if (t_type == 5) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_etym_style.css");
        let tt5_words = document.querySelectorAll('.tooltiptext5');
        tt5_words.forEach(tt5_word => {
          tt5_word.parentNode.classList.add("highlighted");
        });

        window.dispatchEvent(new Event('resize'));
      }

      else if (t_type == 6) {
        document.getElementById("tt_styles").setAttribute("href", docRoot+"/style_etc/tooltip_loan_style.css");
        let tt6_words = document.querySelectorAll('.tooltiptext6');
        tt6_words.forEach(tt6_word => {
          tt6_word.parentNode.classList.add("highlighted");
        });

        window.dispatchEvent(new Event('resize'));
      }
    }


scrollFunction();

    </script>
