<?php

require_once 'credentials.php';

try {
    $DBH = new PDO("mysql:host=localhost;dbname=posts", $user, $password, array(PDO::ATTR_PERSISTENT => false));
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo $e->getMessage(); 
}

?>
