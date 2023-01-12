<?php 
require("connect.php");
if (key_exists("id",$_GET)) {
    $sql = "DELETE FROM DureAuto WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $_GET['id']);
    $statement->execute();
    echo "Auto is verwijderd";
    header("Refresh: 3; URL=read.php");
}
?>