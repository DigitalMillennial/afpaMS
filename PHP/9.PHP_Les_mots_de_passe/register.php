<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем данные из формы
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Хешируем пароль
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  // Имитируем "сохранение" в массив
  $user = [
    'surname' => $surname,
    'name' => $name,
    'email' => $email,
    'password_hash' => $password_hash
  ];

 // Выводим данные пользователя
 echo "Inscription réussie ! Vos informations : <br>";
 echo "Nom de famille : " . $user['surname'] . "<br>";
 echo "Prénom : " . $user['name'] . "<br>";
 echo "Email : " . $user['email'] . "<br>";
 echo "Mot de passe haché : " . $user['password_hash'] . "<br>";
}

// 2. Проверка пароля (aутентификация)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Проверяем, совпадает ли введённый пароль с хешем
  $input_password = $_POST['password'];
  $stored_hash = $user['password_hash'];  // Это хеш, который был сохранён при регистрации

  if (password_verify($input_password, $stored_hash)) {
    echo "Le mot de passe est correct!";
  } else {
    echo "Mot de passe incorrect!";
  }
}
?>
