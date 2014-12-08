<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="NoFap,submit,suggest,relapse prevention,emergency">
    <meta name="description" content="Submut a link for NoFap Emergency relapse prevention">
    <title>NoFap Emergency - Submit a Link</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	body,html{height:100%}
	html{display:table;margin:auto;text-align:center;background:#e74c3c;height:100%}
	body{display:table-cell;vertical-align:middle;background:#e74c3c}
    </style>
  </head>
  <body>
    <form style="" id="suggestor" onsubmit="return validateForm()" method="post" action="thankyou.php">
	<div class="form-group">
	<input class="form-control" name="link" placeholder="Link">
	</div>
	<div class="form-group">
	<textarea class="form-control" rows="3" name="message" placeholder="Comments, suggested categories, email address if you want to hear back (we'll do our best)"></textarea>
	</div>
	<div class="form-group">
	<div class="g-recaptcha" data-sitekey="6LcboPoSAAAAAIH6t90C3ppYFQUnNLdvZwGc-eA3"></div>
	</div>
	<button type="submit" name="submit" class="col-xs-8 col-xs-offset-2 btn btn-default"><b>Submit</b></button>
    </form>

	<form  action="mailto:jack@trump6.com">
		<button type="submit" style="margin-top:10% !important;" class="col-xs-10 col-xs-offset-1 btn btn-default">Other problem/suggestion? Email us</button>
	</form>

<script>
function validateForm() {
    var x = document.forms["suggestor"]["link"].value;
    if (x == null || x == "") {
        alert("Form must be filled out");
        return false;
    }
}
</script>
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
