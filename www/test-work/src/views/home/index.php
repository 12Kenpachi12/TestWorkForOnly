<?php

$title = 'Региcтрация';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

    <div class="form-container">
        <h2><?= $title ?></h2>
        <form id="registerForm" action="/register" method="POST">
            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message" id="emailError"></span>

            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required>
            <span class="error-message" id="usernameError"></span>

            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required>
            <span class="error-message" id="phoneError"></span>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Подтверждение пароля:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <span class="error-message" id="passwordError"></span>

            <button type="submit">Зарегистрироваться</button>
        </form>
        <p>Уже есть аккаунт? <a href="login.html">Войти</a></p>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>