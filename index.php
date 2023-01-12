<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require("connect.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO DureAuto (merk, model, topsnelheid, prijs)  VALUES (:merk, :model, :topsnelheid, :prijs)";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":merk", $_POST["merk"]);
        $statement->bindValue(":model", $_POST["model"]);
        $statement->bindValue(":topsnelheid", $_POST["topsnelheid"]);
        $statement->bindValue(":prijs", $_POST["prijs"]);
        $statement->execute();
        header("Location: read.php");
    }
    ?>
    <form action="index.php" method="post">
        <label for="merk">Merk</label><br>
        <input type="text" name="merk"><br>
        <label for="model">Model</label><br>
        <input type="text" name="model"><br>
        <label for="topsnelheid">Topsnelheid</label><br>
        <input type="number" name="topsnelheid"><br>
        <label for="prijs">Prijs</label><br>
        <input type="text" name="prijs"><br>
        <button type="submit">Versturen</button>
    </form>
</body>
</html>