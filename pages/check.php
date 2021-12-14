<?php
include 'user.php';

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if (($login == $login_admin) && ($password == $password_admin)) {
    setcookie('user', $login, time() + 30, "/");
    header("Location: /");
} else {
    $wrong = 'Incorrect password';
    header("Location: ../index.php?get=$wrong");
}
