<?php


$title = 'Изменение пароля';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>

    <div class="form-container">
        <h2><?= $title ?></h2>

        <?php if (isset($error)) { ?>
            <?= $error ?>
        <?php } ?>

        <form id="registerForm" action="/profile/change-password" method="POST">
            <label for="password">Текущий пароль:</label>
            <input type="password" id="password" name="current_password" required>

            <label for="confirmPassword">Новый пароль:</label>
            <input type="password" id="confirmPassword" name="new_password" required>
            <span class="error-message" id="passwordError"></span>

            <button type="submit">Сохранить</button>
        </form>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php' ?>