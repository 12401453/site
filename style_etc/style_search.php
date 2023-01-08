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
@media all and (max-width: 768px) {
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

}





</style>
