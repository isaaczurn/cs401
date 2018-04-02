<?php
    require_once("dao.php");
    session_start();

    $dao = new Dao();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $login_success = $dao->login($username, $password);
    if($login_success) {
        $_SESSION['logged'] = true;

    }
    header("Location: games.php");
    exit;
?>
