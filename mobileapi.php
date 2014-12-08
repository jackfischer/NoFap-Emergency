<?php
header("Access-Control-Allow-Origin: *");
?>

<!DOCTYPE html>
<html lang="en">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53301604-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>

<?php
include 'credentials.php';
$cat = $_GET["cat"];
$platform = $_GET["platform"];
try {
	$DBH = new PDO("mysql:host=localhost;dbname=posts", $user, $password, array(PDO::ATTR_PERSISTENT => true));
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

$url = $STH->fetch()[0];
echo '<img style="display:block;margin-right:auto;margin-left:auto;" src="' . $url . '">';

?>

</html>
