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

    $sql = "SELECT id, merk, model, topsnelheid, prijs FROM DureAuto ORDER BY prijs DESC";
    ?>
    <table>
        <thead>
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Topsnelheid</th>
                <th>Prijs</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pdo->query($sql, PDO::FETCH_OBJ) as $obj) {
                echo "<tr>";
                echo "<td>" . $obj->merk . "</td>";
                echo "<td>" . $obj->model . "</td>";
                echo "<td>" . $obj->topsnelheid . "</td>";
                echo "<td>" . $obj->prijs . "</td>";
                echo "<td><a href=\"delete.php?id=" . $obj->id . "\">Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>