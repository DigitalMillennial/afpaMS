<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица месяцев</title>
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

<h2>Таблица месяцев</h2>

<table>
    <?php
        $mois = array(
            "Janvier"   => 31,
            "Février"   => 28,
            "Mars"      => 31,
            "Avril"     => 30,
            "Mai"       => 31,
            "Juin"      => 30,
            "Juillet"   => 31,
            "Août"      => 31,
            "Septembre" => 30,
            "Octobre"   => 31,
            "Novembre"  => 30,
            "Décembre"  => 31
        );
        
        // Сортировка массива по количеству дней
        asort($mois);
        
        // Генерация строк таблицы
        foreach ($mois as $mois_nom => $jours) {
            echo "<tr><td>$mois_nom</td><td>$jours</td></tr>";
        }
    ?>
</table>

</body>
</html>
