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
            <?php if (!empty($errors['email'])) { ?>
                <?php foreach ($errors['email'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required value="<?= $user->username ?>">
            <?php if (!empty($errors['username'])) { ?>
                <?php foreach ($errors['username'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required value="<?= $user->phone ?>">
            <?php if (!empty($errors['phone'])) { ?>
                <?php foreach ($errors['phone'] as $error) { ?>
                 <span class="error-message" id="emailError"><?= $error ?></span>
                <?php } ?>
            <?php } ?>

            <button type="submit">Сохранить</button>
        </form>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>