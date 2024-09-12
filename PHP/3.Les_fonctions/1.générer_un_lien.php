<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecrivez une fonction qui permette de générer un lien.</title>
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

<h2>de générer un lien</h2>
<?php   
    function lien($a, $b){
        echo "<a href=\"{$a}\">{$b}</a>"; 
    }
    lien("https://www.reddit.com/", "Reddit Hug");
?>
</body>
</html>
