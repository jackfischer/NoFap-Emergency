<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="NoFap,reddit,porn,addiction,help,relapse prevention,panic,emergency">
    <meta name="description" content="Panic Button for Nofap. NoFap Emergency helps successfully beat urges by getting you to the best possible content as quickly as possible.">
    <title>NoFap Emergency</title>
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
<br>
<form method="post" action="verify.php">
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
