<?php



session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header("Location: ../index.php");
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];
    exit;
} else {
    $logado = $_SESSION['login'];
}
