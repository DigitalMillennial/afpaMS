<?php
  // Проверим, был ли загружен файл через форму
  if (isset($_FILES['file'])) {
    // Используем var_dump для вывода информации о загруженном файле
    echo '<pre>';
    var_dump($_FILES['file']);
    echo '</pre>';
  } else {
    echo "Файл не был загружен.";
  }
?>
