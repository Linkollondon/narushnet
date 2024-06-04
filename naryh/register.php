<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "naryh";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка данных из формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first_name = $_POST['firstName'];
  $last_name = $_POST['lastName'];
  $middle_name = $_POST['middleName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  // Хэширование пароля (например, с помощью bcrypt)
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Подготовка SQL-запроса
  $sql = "INSERT INTO users (first_name, last_name, middle_name, email, phone, password)
          VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $first_name, $last_name, $middle_name, $email, $phone, $hashed_password);

  // Выполнение запроса
  if ($stmt->execute()) {
    echo "Регистрация успешна!";
  } else {
    echo "Ошибка: " . $stmt->error;
  }

  $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="#">Нарушениям.Нет</a>
        </div>
        <nav>
            <ul>
                <li><a href="register.php">Регистрация</a></li>
                <li><a href="login.php">Авторизация</a></li>
            </ul>
        </nav>
    </div>
</header>

    
<div class="container">
<form action="register.php" method="post">
        <div>
        <h1>Регистрация</h1>
        </div>
      <label for="firstName">Имя:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="lastName">Фамилия:</label>
      <input type="text" id="lastName" name="lastName" required>

      <label for="middleName">Отчество:</label>
      <input type="text" id="middleName" name="middleName" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" required>

      <label for="phone">Телефон:</label>
      <input type="tel" id="phone" name="phone" required>

      <button type="submit">Зарегистрироваться</button>
    </form>
  </div>

  <footer>
  <div class="footer-container">
    <p>&copy; 2023 Моя Компания. Все права защищены.</p>
    </div>

  </footer>














<style>

  /* Общие стили */
body {
    width: auto;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Стили header */
header {
  background-color:#f70000;
  color: #fff;
  padding: 20px 0;
}

.header-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo a {
  color: #fff;
  text-decoration: none;
  font-size: 24px;
  font-weight: bold;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-left: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

nav a:hover {
  color: #ccc;
}

/* Стили main content */
.container {
 
  margin: 50px auto;
  padding: 30px;
  background-color: #f2f2f2;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

form {
  display: flex;
  flex-direction: column;
}
form div{
    display: flex;
    justify-content: center;
}

label {
  font-weight: bold;
  margin-top: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="tel"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

button {
  background-color: #f70000;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
}

button:hover {
  background-color: #45a049;
}

/* Стили footer */
footer {
  background-color: #f70000;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
}

footer p {
  margin: 0;
}
</style>
</body>
</html>