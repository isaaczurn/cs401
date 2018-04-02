<?php
    require_once("dao.php");

    $dao = new Dao();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $dao->saveUser($username, $password);
    header("Location: ../index.php");
    exit;
?>
