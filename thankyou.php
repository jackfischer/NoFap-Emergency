<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="NoFap,submit,suggest,relapse prevention,emergency">
<meta name="description" content="Submit a link for NoFap Emergency relapse prevention">
<title>NoFap Emergency - Thank You!</title>
<link rel="shortcut icon" type="image/png" href="icons/favicon.png">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
body,html{height:100%}
html{display:table;margin:auto;text-align:center;background:#e74c3c;height:100%}
body{display:table-cell;vertical-align:middle;background:#e74c3c}
</style>

</head>
<body>

<?php
require_once 'db.php';

$remoteIP = $_SERVER['REMOTE_ADDR'];
$response = $_POST["g-recaptcha-response"];
$googleUrl = "https://www.google.com/recaptcha/api/siteverify";
$googleUrl = $googleUrl . "?secret=$secret&response=$response&remoteip=$remoteIP";
$googleArray = json_decode( file_get_contents($googleUrl) );

if ( ($googleArray->{'success'} == 1) || isset($_POST['platform']) ){
    $insert = "insert into suggestions (link, comments) values (:link, :comments)";
    $IH = $DBH->prepare($insert);
    $IH->execute( array(":link" => $_POST['link'], ":comments" => $_POST["message"]) );

    echo '<a href="http://emergency.nofap.com"> <div class="alert alert-success"
        style="opacity:1;" role="alert">Thank you!</div> </a>';
} else {
    echo '<div class="alert alert-success" style="opacity:1;" role="alert">
        Something went wrong. Try submitting again</div>';
}
?>

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
