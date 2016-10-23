<?php
require_once '../classes/Cliente.php';
$Cliente = new Cliente();

$posta = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $posta["id"]; $nome = $posta["nome"];
$Cliente->confirmarExcluirCliente($id,$nome);
?>

