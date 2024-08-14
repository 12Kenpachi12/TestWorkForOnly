<?php

use Kenpachi\TestWork\Component\User;

?>

<?php if (User::isGuest()) { ?>
    <a href="/register">Региcтрация</a>
    <a href="/login">Войти</a>
<?php } else { ?>
    <a href="/profile">Профиль</a>
    <a href="/logout">Выйти</a>
<?php } ?>