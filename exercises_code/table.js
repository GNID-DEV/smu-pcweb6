// https://codesandbox.io/s/js-rows-cols-table-v1-kk14t?file=/script.js

function genTable() {
  var columns = document.getElementById("tCol").value;
  var rows = document.getElementById("tRow").value;

  // newTable
  var table = document.getElementById("newTable");

  // Loop Rows based on tRows input
  for (var i = 0; i < rows; i++) {
    // 3: Create a new row
    var row = document.createElement("tr");
    // 4: Append that row to the table
    table.appendChild(row);

    // Loop Cols based on tCol input
    for (var j = 0; j < columns; j++) {
      // Create a <td> cell element
      var cell = document.createElement("td");
      // Set random colour
      var r = Math.floor(Math.random() * 256);
      var g = Math.floor(Math.random() * 256);
      var b = Math.floor(Math.random() * 256);
      var bgColor = "rgb(" + r + "," + g + "," + b + ")";
      // assign colour to cell
      cell.style.backgroundColor = bgColor;

      // 6: Append to the row
      row.appendChild(cell);

      // Give the cell some text
      cell.innerText = i.toString() + "," + j.toString();
    }
  }
}
