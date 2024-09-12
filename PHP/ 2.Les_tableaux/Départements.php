<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Départements</title>    
</head>
<body>


<div> <!--Отображение списка Départements (в алфавитном порядке)-->
<h2>Départements</h2>
<?php
    
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

    // Сортировка
    ksort($departements);
    
    // Перебор и вывод 
    foreach ($departements as $region => $deps) {
        echo "<b>$region</b><br>"; 
        echo "<ol>"; 

        foreach ($deps as $dep) {
            echo "<li>$dep</li>";
        }
        
        $nb = count($deps); 
        echo "</ol>";
        echo "Total: $nb départements.<br><br>"; 
    }
?>
</div>
</body>
</html>
