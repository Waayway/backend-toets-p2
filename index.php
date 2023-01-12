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
    if (array_key_exists($_POST, "merk")) {
        
    }
    ?>
    <form action="index.php" method="post">
        <label for="merk">Merk</label><br>
        <input type="text" name="merk"><br>
        <label for="model">Model</label><br>
        <input type="text" name="model"><br>
        <label for="topsnelheid">Topsnelheid</label><br>
        <input type="text" name="topsnelheid"><br>
        <label for="prijs">Prijs</label><br>
        <input type="text" name="prijs"><br>
        <button type="submit">Versturen</button>
    </form>
</body>
</html>