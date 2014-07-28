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

if ($_GET["cat"] == "relapse") {
$query='select link from posts where cat=\'rel\' order by RAND() limit 1';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
echo mysql_fetch_object($result)->link;
}

?>
