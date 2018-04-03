<?php
    session_start();
    require_once("dao.php");

    $dao = new Dao();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $success = $dao->saveUser($username, $password);
    $_SESSION['createsuccess'] = $success;
    header("Location: login.php");
    exit;
?>
