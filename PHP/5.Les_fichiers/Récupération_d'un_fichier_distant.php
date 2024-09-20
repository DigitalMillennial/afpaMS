<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container table table-striped table-hover">
  <h2>Customer List</h2>

  <?php
  $liste = file("customers.csv");
  echo '<table class="table table-striped">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Surname</th>';
  echo '<th>Firstname</th>';
  echo '<th>Email</th>';
  echo '<th>Phone</th>';
  echo '<th>City</th>';
  echo '<th>State</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';

  // Проходим по каждой строке файла
  foreach($liste as $ligne) {
      // Разбиваем строку по запятой
      $data = explode(",", $ligne);

      // Выводим строку таблицы с данными пользователя
      echo '<tr>';
      foreach ($data as $cell) {
          echo '<td>' . htmlspecialchars($cell) . '</td>';
      }
      echo '</tr>';
  }

  echo '</tbody>';
  echo '</table>';
  ?>

</div>

</body>
</html>
