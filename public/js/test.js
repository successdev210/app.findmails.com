//swap column1 and column2
var fileInput = document.getElementById('fileInput'); // Replace 'fileInput' with your file input element's ID
var columnIndex1 = 1; // Index of the first column (0-based)
var columnIndex2 = 2; // Index of the second column (0-based)

var formData = new FormData();
formData.append('file', fileInput.files[0]);

// Read the selected file
var reader = new FileReader();
reader.onload = function(e) {
  var originalCsv = e.target.result;
  var modifiedCsv = swapColumnsInCsv(originalCsv, columnIndex1, columnIndex2);

  // Now 'modifiedCsv' contains the CSV with swapped columns

  formData.append('file', new Blob([modifiedCsv], { type: 'text/csv' }), 'bulk_email.csv');

  $.ajax({
    url: 'http://167.235.254.95:8888/bulk_email/',
    type: 'POST',
    headers: {
      'accept': 'application/json',
    },
    data: formData,
    processData: false,
    contentType: false, // Let the browser set the correct content type with boundary
    success: function(data) {
      console.log(data); // Process the response data
    },
    error: function(xhr, status, error) {
      console.error('API error:', error);
    }
  });
};

reader.readAsText(fileInput.files[0]);

function swapColumnsInCsv(csvContent, columnIndex1, columnIndex2, columnIndex3) {
  var lines = csvContent.split('\n');
  for (var i = 0; i < lines.length; i++) {
    var cells = lines[i].split(',');
    var cell1 = cells[0]
    var cell2 = cells[1]
    var cell3 = cells[2]
    cells[columnIndex1] = cell0;
    cells[columnIndex2] = cell1;
    cells[columnIndex3] = cell2;
    lines[i] = cells.join(',');
  }
  return lines.join('\n');
}



//include header
var fileInput = document.getElementById('fileInput'); // Replace 'fileInput' with your file input element's ID
var fieldNames = ['Field1', 'Field2', 'Field3']; // Replace with your field names

var formData = new FormData();
formData.append('file', fileInput.files[0]);

// Read the selected file
var reader = new FileReader();
reader.onload = function(e) {
  var originalCsv = e.target.result;
  var modifiedCsv = addFieldNamesToCsv(originalCsv, fieldNames);

  // Now 'modifiedCsv' contains the CSV with field names

  formData.append('file', new Blob([modifiedCsv], { type: 'text/csv' }));

  $.ajax({
    url: 'http://167.235.254.95:8888/bulk_domain/',
    type: 'POST',
    headers: {
      'accept': 'application/json',
    },
    data: formData,
    processData: false,
    contentType: false, // Let the browser set the correct content type with boundary
    success: function(data) {
      console.log(data); // Process the response data
    },
    error: function(xhr, status, error) {
      console.error('API error:', error);
    }
  });
};

reader.readAsText(fileInput.files[0]);

function addFieldNamesToCsv(csvContent, fieldNames) {
  var lines = csvContent.split('\n');
  lines.unshift(fieldNames.join(','));
  return lines.join('\n');
}
