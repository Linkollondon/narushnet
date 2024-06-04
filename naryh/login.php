<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация</title>
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
    <h1>Авторизация</h1>
    <form action="login_process.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Войти</button>
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
