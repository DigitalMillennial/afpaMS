<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</title>
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

<h2>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</h2>
<?php   
    function check_password($password){
        if (strlen($password) < 8) {
            return "Le mot de passe doit comporter au moins 8 caractères.";
        }
        if (preg_match('/[A-Z]/', $password) &&  // Заглавная буква
        preg_match('/[a-z]/', $password) && // Строч. буква
        preg_match('/[0-9]/', $password)) {  // Цифры
        return "true.";
    } else {
        return "false";
    }
    }
    $password = "MyPass1!";
echo check_password($password);
    
?>
</body>
</html>
