<?php
require_once 'db.php';

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: 0");
header("Access-Control-Allow-Origin: *");

$cat = $_GET["cat"] != "bookmarklet" ? $_GET["cat"] : "em";
$platform = $_GET["platform"];

$query = "select link from links where cat=:cat and religious is NULL order by RAND() limit 1";
if($_GET["religious"] == "true")
    $query = "select link from links where cat=:cat order by RAND() limit 1";

$STH = $DBH->prepare($query);
$STH->execute(array(":cat" => $cat));
$outputlink = $STH->fetch()[0];

if ($_GET["cat"] == "bookmarklet")
    echo '<script>window.location.href="' . $outputlink . '";</script>'; //TODO header redirect
else
    echo $outputlink;

$insert = "insert into events (cat, timestamp, religious, platform, ip, link) values (:cat, CURRENT_TIMESTAMP, :religious, :platform, :ip, :link)";
$IH = $DBH->prepare($insert);
$IH->execute(
    array(
        ":cat" => $cat,
        ":religious" => ($_GET["religious"] == "true"),
        ":platform" => $platform,
        ":ip" => $_SERVER['REMOTE_ADDR'],
        ":link" => $outputlink
    )
);

?>
