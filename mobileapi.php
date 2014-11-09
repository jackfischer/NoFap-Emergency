<?php

include 'credentials.php';
$cat = $_GET["cat"];
$platform = $_GET["platform"];
try {
	$DBH = new PDO("mysql:host=localhost;dbname=posts", $user, $password);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
if($_GET["religious"] == "true") {
	$query = "select link from links where cat=:cat and lower(link) regexp 'jpg$|jpeg$|gif$|png$' order by RAND() limit 1";
	$insert = "insert into events (id, cat, timestamp, religious, platform) values (NULL, :cat, CURRENT_TIMESTAMP, 1, :platform)";
}
else {
	$query = "select link from links where cat=:cat and religious is NULL and lower(link) regexp 'jpg$|jpeg$|gif$|png$' order by RAND() limit 1";
	$insert = "insert into events (id, cat, timestamp, platform) values (NULL, :cat, CURRENT_TIMESTAMP, :platform)";
}

$IH = $DBH->prepare($insert);
$IH->execute(array(":cat" => $cat, ":platform" => $platform));

$STH = $DBH->prepare($query);
$STH->execute(array(":cat" => $cat));

header("Access-Control-Allow-Origin: *");
$url = $STH->fetch()[0];
echo "<img style=\"display:block;margin-right:auto;margin-left:auto;\" src=\"" . $url . "\" >";


?>
