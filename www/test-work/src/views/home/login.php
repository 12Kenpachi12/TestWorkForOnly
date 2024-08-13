<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="form-container">
        <h2>Авторизация</h2>
        <form action="/login" method="POST">
            <label for="login">Email или Телефон:</label>
            <input type="text" id="login" name="login" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
        <p>Нет аккаунта? <a href="register.html">Зарегистрироваться</a></p>
    </div>
</body>
</html>