<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Таблица умножения от 1 до 9</h2>

<table>
    <tr>
        <th></th>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>
    <?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
