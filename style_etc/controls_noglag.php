
<br>

<span id="top_buttons">
<input type="checkbox" id="morph_highlight" name="morph_highlight" autocomplete="off" disabled="disabled">
  <label for="morph_highlight">Highlight morphologically conditioned or other non-etymological development</label><br>
<input type="checkbox" id="loan_place" name="loan_place" autocomplete="off" disabled="disabled">
  <label for="loan_place">Show loanword origin</label><br>

 <span id="CS_controls" style="display: none"> <input type="radio" id="undone" name="undone" onclick="undoFunction()">
    <label for="undone" id="undo_label">Undo non-etymological changes</label><br>
    <input type="radio" checked id="redone" name="undone" onclick="redoFunction()">
      <label for="redone" id="redo_label">Keep non-etymological changes</label></span><br></span>

<div id="tt_button"><label for="type_select" style="font-weight: bold">Tooltip:</label>
    <select id="type_select" name="tooltip_data" onchange="tt_type()">
      <option value="0">None</option>
      <option value="1">Cyrillic</option>

      <option value="3" selected="selected">Common Slavic</option>
      <option value="4">English</option>
      <option value="5">Etymology discussion</option>
      <option value="6">Loanword source</option>
    </select></div>
