function validateForm() {
  var x = document.forms["suggestor"]["link"].value;
  if (x == null || x == "") {
    alert("Form must be filled out");
    return false;
  }
}

function send() {
  $("button[name=submit]").disabled = true
  $.post("thankyou.php", {
    link: $('input[name="link"]').value,
    message: $('input[name="message"]').value,
    g-recaptcha-response: grecaptcha.getResponse()
  }, function() {alert("success!")})
  .fail(function() {
    $("button[name=submit]").disabled = false
    alert("didnt work")
  })
}