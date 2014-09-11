<?php

include 'credentials.php';

mysql_connect($host, $user, $password) or die('Could not connect: ' . mysql_error());
mysql_select_db('posts') or die('Could not select db');

if ($_GET["cat"] == "emergency") {
$query='select link from posts where cat=\'em\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
echo mysql_fetch_object($result)->link;
}

if ($_GET["cat"] == "rejection") {
$query='select link from posts where cat=\'rej\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
echo mysql_fetch_object($result)->link;
}

if ($_GET["cat"] == "depression") {
$query='select link from posts where cat=\'dep\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
echo mysql_fetch_object($result)->link;
}

if ($_GET["cat"] == "relapsed") {
$query='select link from posts where cat=\'rel\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
echo mysql_fetch_object($result)->link;
}

if ($_GET["cat"] == "bookmarklet") {
echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"favicon.png\">";

echo "<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-53301604-1', 'auto'); ga('send', 'pageview'); </script>";

$query='select link from posts where cat=\'em\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

echo "<script> window.location.href=\"".mysql_fetch_object($result)->link."\";</script>";
}

?>
