<?php
require("config.php");
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        $connected = true;
    } else {
        $connected = false;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

