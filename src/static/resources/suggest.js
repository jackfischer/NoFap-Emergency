function validateForm() {
  var x = document.forms["suggestor"]["link"].value;
  if (x == null || x == "") {
    alert("Form must be filled out");
    return false;
  }
}

