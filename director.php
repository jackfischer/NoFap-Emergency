<?php

include 'credentials.php';
$cat = $_GET["cat"];
try {
	$DBH = new PDO("mysql:host=localhost;dbname=posts", $user, $password, array(PDO::ATTR_PERSISTENT => true));
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

if ($cat != "bookmarklet") {
	if($_GET["religious"] == "true") {
		$query = "select link from links where cat=:cat order by RAND() limit 1";
		$insert = "insert into events (cat, timestamp, religious) values (:cat, CURRENT_TIMESTAMP, 1)";
	}
	else {
		$query = "select link from links where cat=:cat and religious is NULL order by RAND() limit 1";
		$insert = "insert into events (cat, timestamp) values (:cat, CURRENT_TIMESTAMP)";
	}

	$IH = $DBH->prepare($insert);
	$IH->execute(array(":cat" => $cat));

	$STH = $DBH->prepare($query);
	$STH->execute(array(":cat" => $cat));

	header("Access-Control-Allow-Origin: *");
	echo $STH->fetch()[0];
}


if ($cat == "bookmarklet") {
	
	echo "<html><head>";
	echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"favicon.png\">";
	echo "<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-53301604-1', 'auto'); ga('require', 'displayfeatures'); ga('send', 'pageview'); </script>";
	echo "</head>";

	$insert="INSERT INTO events (cat, timestamp) VALUES (\"bkmarklet\", CURRENT_TIMESTAMP)";
	$IH = $DBH->prepare($insert);
	$IH->execute();

	$query="select link from links where cat=:cat and religious is NULL order by RAND() limit 1";
	$STH = $DBH->prepare($query);
	$STH->execute(array(":cat" => "em"));
	$result = $STH->fetch()[0];

	echo "<script> window.location.href=\"".$result."\";</script>";
}

?>
