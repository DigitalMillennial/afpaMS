<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</title>
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

<h2>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</h2>
<?php 
    $tab = array(4, 3, 8, 2);
    $resultat = somme($tab);     
    function somme($tab){
        return array_sum($tab);        
    }  
    echo $resultat;
?>
</body>
</html>
