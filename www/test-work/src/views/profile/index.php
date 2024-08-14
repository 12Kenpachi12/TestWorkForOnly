<?php

use Kenpachi\TestWork\Model\User;

/**
 * @var User $user
 */

$title = 'Вход';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

<div class="profile-container">
    <h2>Профиль пользователя</h2>
    <p><strong>Логин:</strong> <?= $user->username ?></p>
    <p><strong>Email:</strong> <?= $user->email ?></p>
    <p><strong>Телефон:</strong> <?= $user->phone ?></p>
    <a href="/logout">Выйти</a>
    <a href="/profile/edit">Редактировать</a>
    <a href="/profile/password">Сменить пароль</a>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>