<?php

use Kenpachi\TestWork\Model\User;

/**
 * @var User $user
 */

$title = 'Редактирование профиля';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

    <div class="form-container">
        <h2><?= $title ?></h2>
        <form id="registerForm" action="/profile" method="POST">
            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required value="<?= $user->email ?>">
            <span class="error-message" id="emailError"></span>

            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required value="<?= $user->username ?>">
            <span class="error-message" id="usernameError"></span>

            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required value="<?= $user->phone ?>">
            <span class="error-message" id="phoneError"></span>

            <button type="submit">Сохранить</button>
        </form>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>