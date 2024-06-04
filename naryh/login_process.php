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

// Проверка данных из формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Подготовка SQL-запроса для поиска пользователя по email
  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Проверка пароля
    if (password_verify($password, $user['password'])) {
      // Авторизация успешна, переводим пользователя на главную страницу
      header("Location: zayvlenie.php");
      exit();
    } else {
      echo "Неверный email или пароль.";
    }
  } else {
    echo "Неверный email или пароль.";
  }

  $stmt->close();
}

$conn->close();
?>