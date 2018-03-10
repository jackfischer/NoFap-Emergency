if (location.href.indexOf("success") > 0) {
  alert("Thank you for your submission!");
}
if (location.href.indexOf("failed") > 0) {
  alert("Something went wrong with your submission.");
}

function validateForm() {
  var x = document.forms["suggestor"]["link"].value;
  if (x == null || x == "") {
    alert("Form must be filled out");
    return false;
  }
}
