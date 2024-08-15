<?php

$title = 'Региcтрация';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

    <div class="form-container">
        <h2><?= $title ?></h2>
        <form id="registerForm" action="/register" method="POST">
            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required value="<?= $request['email'] ?? '' ?>">
            <?php if (!empty($errors['email'])) { ?>
                <?php foreach ($errors['email'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required value="<?= $request['username'] ?? '' ?>">
            <?php if (!empty($errors['username'])) { ?>
                <?php foreach ($errors['username'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required placeholder="79999999999" value="<?= $request['phone'] ?? '' ?>">
            <span class="error-message" id="phoneError"></span>
            <?php if (!empty($errors['phone'])) { ?>
                <?php foreach ($errors['phone'] as $error) { ?>
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

            <label for="confirmPassword">Подтверждение пароля:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <?php if (!empty($errors['confirmPassword'])) { ?>
                <?php foreach ($errors['confirmPassword'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <button type="submit">Зарегистрироваться</button>
        </form>
        <p>Уже есть аккаунт? <a href="/login">Войти</a></p>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>