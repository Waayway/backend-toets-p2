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


$tables = array(
    "CREATE TABLE IF NOT EXISTS DureAuto (
        id          int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        merk        varchar(200),
        model       varchar(200),
        topsnelheid smallint(4),
        prijs       varchar(200)  # prijs kan je beter als een Decimal doen.
    );"
);

foreach ($tables as $sql) {
    $pdo->exec($sql);
}