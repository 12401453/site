  <style>
      @font-face { font-family: Bukyvede; src: url('/site/Fonts/BukyVede-Regular.ttf'); }
      @font-face { font-family: Menaion; src: url('/site/Fonts/MenaionUnicode.otf'); }
      @font-face { font-family: OnDiskSans; src: url('/site/Fonts/PTSerif-Regular.ttf'); }
      @font-face {font-family: Bookerly; src: url('/site/Fonts/Bookerly.ttf'); }

#links-flexbox {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
  background-color: #e9a728bd;
  font-family: Calibri;
}

.link-buttons {
  font-size: 17px;
  width: fit-content;
  max-width: 97%;
  padding: 6px;
  user-select: none;
  min-width: 100px;
  text-align: center;
  border-right: 1px solid #815400;
  cursor: pointer;
}
.link-buttons:hover {
  background-color: #d59110;
}

body {
  background-color: #f0c36dbd;
  margin: 0;
}
#top_buttons {
  font-family: OnDiskSans;
  font-family: Calibri;
  user-select: none;
}

#select_button {
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: 16px;
  width: fit-content;
  max-width: 97%;
  border-radius: 2px;
  padding: 6px;
 /* background-color: #e9a728bd; */
}

#textselect {
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: inherit;
  min-width: 100px;
  max-width: 100%;
 
  padding: 5px;
}

#hidden_select {
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: inherit;
  padding: 5px;
  visibility: hidden; position: fixed;
}

#gospels_chap_select {
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: 16px;
  width: fit-content;
  max-width: 97%;
  border-radius: 2px;
  padding: 6px;
  user-select: none;
 
}
#booklabel {
  visibility: hidden;

}

#bookselect, #chapselect {
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: inherit;
  padding: 1px;
}


#CS_controls {
  font-family: OnDiskSans;
  font-family: Calibri;
}

@media all and (min-width: 768px) {
  #textselect {
    width: 229px;
  }

  #main_flexbox {
    margin-left: 7.3%;
    margin-right: 7.3%;
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    border-radius: 6px;
    background-color: white;
    border: 3px solid #815400;
    margin-bottom: 30px;
  }
  .non_latin {
  font-family: Bukyvede;
  font-size: 28px;
  }
  .menaion {
  font-family: Menaion;
  font-size: 22px;
  }

  .latin {
    font-family: OnDiskSans;
    font-family: Calibri;
    font-size: 24px;
    line-height: 1.63;
  /*  border: 1px solid red; */
  }
}
@media all and (max-width: 768px) {
  #main_flexbox {
    margin-left: 1.3%;
    margin-right: 1.3%;
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    border-radius: 6px;
    background-color: white;
    border: 2px solid #815400;
    margin-bottom: 30px;
  }

  .link-buttons {
  font-size: 14px;
  width: fit-content;
  max-width: 97%;
  padding: 4px;
  user-select: none;
  min-width: 80px;
  text-align: center;
  border-right: 1px solid #815400;
  cursor: pointer;
}


  .script_switcher, #top_buttons, #CS_controls, #select_button, #gospels_chap_select {
    font-size: 14px;
  }

  #textselect {
    width: 204px;
  }
  
  .non_latin {
  font-family: Bukyvede;
  font-size: 22px;
  }
  .menaion {
  font-family: Menaion;
  font-size: 16px;
  }

  .latin {
    font-family: Calibri;
    font-size: 18px;
    line-height: 1.63;
    
  /*  border: 1px solid red; */
  }
}
#main_text {
  display: inline-block;
  padding-left: 6%;
  padding-right: 6%;
}
#script_bar {
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-content: stretch;
    overflow-x: auto;
}
.script_switcher {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 15px;
  flex: 1;
  text-align: center;
  cursor: default;
  user-select: none;
  font-family: OnDiskSans;
  font-family: Calibri;
}

.script_switcher.selected {
  background-color: white;
  border-bottom: none;
}
.script_switcher.unselected {
  background-color: #f0c36dbd;
  border-bottom: 2px solid #815400;
}

.script_switcher.unselected:hover {
  background-color: #e9a728bd;
}

#glag_switcher {
  border-bottom-right-radius: 8px;
  border-top-left-radius: 4px;
}
#cyr_switcher {
  border-bottom-left-radius: 8px;
  border-left: 2px solid #815400;
  border-right: 2px solid #815400;

}
#CS_switcher {
  border-top-right-radius: 4px;
}

.highlighted {
  color: red;
}

.go_green{
  background-color: #b3f7a6;
}
.latin_colour {
  background-color: #fff67d;
}
.germanic_colour {
  background-color: #ff6b66;
}
.greek_colour {
  background-color: #69d686;
}
.greek_hebrew_colour {
  background-color: #a1d669;
}
.germanic_latin_colour {
  background-color: #f76143;
}
.latin_hebrew_colour {
  background-color: #ffd27d;
}
.hebrew_colour {
  background-color: #fc8a58;
}
.turkic_colour {
  background-color: #ff82e4;
}
.germanic_greek_colour {
  background-color: #ff597a;
}
.finnic_colour {
  background-color: cyan;
}
.germanic_hebrew_colour {
  background-color: #ff3700;
}
.germanic_slavic_colour {
  background-color: #ff9591;
}
.turkic_mongol_colour {
  background-color: #f769ff;
}
.greek_latin_colour {
  background-color: #b2e312;
}
@media all and (min-width: 768px) {
  #tt_button {
    position: fixed;
    background-color: rgba(104,255,10, 0.9);
    border-style: solid;
    border-radius: 2px;
    padding: 3px;
    right: 20%;
    bottom: 0;
    z-index: 1;

  }

  #loadingbutton {
  position: fixed;
  left: 0;
  bottom: 0;
  background-color: #e9a728bd;
  border-style: solid;
  border-radius: 2px;
  padding: 6px; 
  z-index: 1;
  color: black;
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: 47px;
  }
}

@media all and (max-width: 768px) {

  #tt_button {
  position: fixed;
  background-color: rgba(104,255,10, 0.9);
  border-top-style: solid;
  border-right-style: solid;
  border-top-right-radius: 2px;
  padding: 3px;
  left: 0;
  right: unset;
  bottom: 0;
  z-index: 1;
  }

  #loadingbutton {
  position: fixed;
  right: 0;
  bottom: 0;
  background-color: #e9a728bd;
  border-style: solid;
  border-radius: 2px;
  padding: 5px;
  z-index: 1;
  color: black;
  font-family: OnDiskSans;
  font-family: Calibri;
  font-size: 34px;
  }
}





</style>
  


<script> 
    function myFunction1() {
      var x = document.getElementById("cyr_kv");
      var y = document.getElementById("glag_kv");
      var z = document.getElementById("cs_kv");
      var undone = document.getElementById("undone");
      var undo_label = document.getElementById("undo_label");
      var redone = document.getElementById("redone");
      var redo_label = document.getElementById("redo_label");
          x.style.display = "inline-block";
        y.style.display = "none";
        z.style.display = "none";
        undone.style.display = "none";
        undo_label.style.display = "none";
        redone.style.display = "none";
        redo_label.style.display = "none";

    }
    function myFunction2() {
      var x = document.getElementById("cyr_kv");
      var y = document.getElementById("glag_kv");
      var z = document.getElementById("cs_kv");
      var undone = document.getElementById("undone");
      var undo_label = document.getElementById("undo_label");
      var redone = document.getElementById("redone");
      var redo_label = document.getElementById("redo_label");
          x.style.display = "none";
        y.style.display = "inline-block";
        z.style.display = "none";
        undone.style.display = "none";
        undo_label.style.display = "none";
        redone.style.display = "none";
        redo_label.style.display = "none";
      }

    function myFunction3() {
      var x = document.getElementById("cyr_kv");
      var y = document.getElementById("glag_kv");
      var z = document.getElementById("cs_kv");
      var undone = document.getElementById("undone");
      var undo_label = document.getElementById("undo_label");
      var redone = document.getElementById("redone");
      var redo_label = document.getElementById("redo_label");
          x.style.display = "none";
        y.style.display = "none";
        z.style.display = "inline-block";
        undone.style.display = "inline";
        undo_label.style.display = "inline";
        redone.style.display = "inline";
        redo_label.style.display = "inline";
      }

      function undoFunction() {
        var x = document.getElementsByClassName("undoneclass");
        var y = document.getElementsByClassName("redoneclass");
        var i;
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
      for (i = 0; i < x.length; i++) {
      y[i].style.display = "inline";
      }
        }

  function redoFunction() {
    var x = document.getElementsByClassName("undoneclass");
    var y = document.getElementsByClassName("redoneclass");
    var i;
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "inline";
    }
  for (i = 0; i < x.length; i++) {
  y[i].style.display = "none";
  }
    }

  let gone_green = false;
  let loan_place_showing = false;
  window.addEventListener('load', (event) => {
    const morphHighlightBox = document.getElementById("morph_highlight");
    const loanPlaceBox = document.getElementById("loan_place");
    morphHighlightBox.disabled = false;
    loanPlaceBox.disabled = false;
    

    morphHighlightBox.addEventListener('click', (event) => {
      let morph_replaceds = document.querySelectorAll('.morph_replace');
      
      if(gone_green == false) {
        morph_replaceds.forEach(morph_replaced => {
          morph_replaced.classList.add("go_green");
        });
        gone_green = true;
      }
      else {
        morph_replaceds.forEach(morph_replaced => {
          morph_replaced.classList.remove("go_green");
      });
        gone_green = false;
      }
    });

    loanPlaceBox.addEventListener('click', (event) => {
      let loans3 = document.querySelectorAll('.loan_place3');
      let loans1 = document.querySelectorAll('.loan_place1');
      let loans13 = document.querySelectorAll('.loan_place13');
      let loans2 = document.querySelectorAll('.loan_place2');
      let loans25 = document.querySelectorAll('.loan_place25');
      let loans35 = document.querySelectorAll('.loan_place35');
      let loans5 = document.querySelectorAll('.loan_place5');
      let loans7 = document.querySelectorAll('.loan_place7');
      let loans12 = document.querySelectorAll('.loan_place12');
      let loans8 = document.querySelectorAll('.loan_place8');
      let loans15 = document.querySelectorAll('.loan_place15');
      let loans10 = document.querySelectorAll('.loan_place10');
      let loans79 = document.querySelectorAll('.loan_place79');
      let loans23 = document.querySelectorAll('.loan_place23');

      if(loan_place_showing == false) {
        loans3.forEach(loan3 => {
          loan3.classList.add("latin_colour");
        });
        loans1.forEach(loan1 => {
          loan1.classList.add("germanic_colour");
        });
        loans13.forEach(loan13 => {
          loan13.classList.add("germanic_latin_colour");
        });
        loans2.forEach(loan2 => {
          loan2.classList.add("greek_colour");
        });
        loans25.forEach(loan25 => {
          loan25.classList.add("greek_hebrew_colour");
        });
        loans35.forEach(loan35 => {
          loan35.classList.add("latin_hebrew_colour");
        });
        loans5.forEach(loan5 => {
          loan5.classList.add("hebrew_colour");
        });
        loans7.forEach(loan7 => {
          loan7.classList.add("turkic_colour");
        });
        loans12.forEach(loan12 => {
          loan12.classList.add("germanic_greek_colour");
        });
        loans8.forEach(loan8 => {
          loan8.classList.add("finnic_colour");
        });
        loans15.forEach(loan15 => {
          loan15.classList.add("germanic_hebrew_colour");
        });
        loans10.forEach(loan10 => {
          loan10.classList.add("germanic_slavic_colour");
        });
        loans79.forEach(loan79 => {
          loan79.classList.add("turkic_mongol_colour");
        });
        loans23.forEach(loan23 => {
          loan23.classList.add("greek_latin_colour");
        });
        loan_place_showing = true;          
      }
      else {
        loans3.forEach(loan3 => {
          loan3.classList.remove("latin_colour");
        });
        loans1.forEach(loan1 => {
          loan1.classList.remove("germanic_colour");
        });
        loans13.forEach(loan13 => {
          loan13.classList.remove("germanic_latin_colour");
        });
        loans2.forEach(loan2 => {
          loan2.classList.remove("greek_colour");
        });
        loans25.forEach(loan25 => {
          loan25.classList.remove("greek_hebrew_colour");
        });
        loans35.forEach(loan35 => {
          loan35.classList.remove("latin_hebrew_colour");
        });
        loans5.forEach(loan5 => {
          loan5.classList.remove("hebrew_colour");
        });
        loans7.forEach(loan7 => {
          loan7.classList.remove("turkic_colour");
        });
        loans12.forEach(loan12 => {
          loan12.classList.remove("germanic_greek_colour");
        });
        loans8.forEach(loan8 => {
          loan8.classList.remove("finnic_colour");
        });
        loans15.forEach(loan15 => {
          loan15.classList.remove("germanic_hebrew_colour");
        });
        loans10.forEach(loan10 => {
          loan10.classList.remove("germanic_slavic_colour");
        });
        loans79.forEach(loan79 => {
          loan79.classList.remove("turkic_mongol_colour");
        });
        loans23.forEach(loan23 => {
          loan23.classList.remove("greek_latin_colour");
        });
        loan_place_showing = false;
      }  
      
    });
  });
</script>
