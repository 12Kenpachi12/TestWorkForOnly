<?php

$title = 'Вход';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

<div class="form-container">
    <h2>Авторизация</h2>
    <?php if (isset($error)) { ?>
        <?= $error ?>
    <?php } ?>
    <form action="/login" method="POST">
        <label for="login">Email или Телефон:</label>
        <input type="text" id="login" name="login" required>
        <?php if (!empty($errors['login'])) { ?>
            <?php foreach ($errors['login'] as $error) { ?>
                <span class="error-message" id="emailError"><?= $error ?></span>
            <?php } ?>
        <?php } ?>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <?php if (!empty($errors['password'])) { ?>
            <?php foreach ($errors['password'] as $error) { ?>
                <span class="error-message" id="emailError"><?= $error ?></span>
            <?php } ?>
        <?php } ?>

        <button type="submit">Войти</button>
    </form>
    <p>Нет аккаунта? <a href="register">Зарегистрироваться</a></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>