<style>
    html {
        white-space: pre-line;
    }
</style>
<h1>Confirmação de Cadastro</h1>
<?php

require_once '../classes/Funcionarios.php';

$funcionaio = new Funcionarios();

$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome = $filtro['nome'];
$cpf = $filtro['cpfFuncionario'];
$login = $filtro['login'];
$senha = $filtro['senha'];
$confirma = $filtro['confirmaSenha'];
$perfil = $filtro['perfil'];
    
$sql = "INSERT INTO funcionarios (nome, cpf, login, senha, perfil) VALUES ('$nome', '$cpf', '$login', md5('$senha'), '$perfil')";

$funcionaio->inserir($nome, $cpf, $login, $senha, $perfil);