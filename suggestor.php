<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="NoFap,submit,suggest,relapse prevention,emergency">
    <meta name="description" content="Suggest a link for NoFap Emergency relapse prevention">
    <title>NoFap Emergency - Suggest a Link</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
html, body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
background: #e74c3c;
}
</style>
</head>
<body>
<form method="post" action="suggestor.php">
<div class="form-group">
<input class="form-control" name="link" placeholder="Potential Link">
</div>
<div class="form-group">
<textarea class="form-control" rows="3" name="message" placeholder="Comments, suggested categories, email address if you want to hear back (we'll do our best)"></textarea>
</div>
<div class="form-group">
<?php
  require_once('recaptchalib.php');
  $publickey = "6LcboPoSAAAAAIH6t90C3ppYFQUnNLdvZwGc-eA3";
    echo recaptcha_get_html($publickey);
?>
</div>
<button type="submit" name="submit" class="col-xs-12 btn btn-default">Submit</button>
</form>
<style>
html {
text-align:center;
background: #e74c3c;
height: 100%;
}
</style>

<?php
if (isset($_POST["link"])) {
require_once('recaptchalib.php');
require_once('credentials.php');
$resp = recaptcha_check_answer ($privatekey,
                              $_SERVER["REMOTE_ADDR"],
                              $_POST["recaptcha_challenge_field"],
                              $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  // What happens when the CAPTCHA was entered incorrectly
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
} else {
// Your code here to handle a successful verification
$link = $_POST['link'];
$message = $_POST['message'];
$to = 'trump6@gmail.com'; 
$email_subject = "Website Contact Form";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nLink: " . $link . "\n\nMessage:\n" . $message;
$headers = "From: trump6@gmail.com\n"; 
mail($to,$email_subject,$email_body,$headers);
echo "<p style=\"margin-top:25%;\"> Thank you!";
return true;
}
}
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53301604-1', 'auto');
ga('require', 'displayfeatures');
    ga('send', 'pageview');
 </script>
 </body>
</html>
