<?php

$tituloPagina = "Evaldo";
$link = "www.google.com";

switch (filter_input_array(INPUT_GET, FILTER_DEFAULT)['p']) {
    case "cadastrarCliente":
        $tituloPagina = "Cadastrar Cliente";
        $link = './form.php';
        break;

    case "procurarCliente":
        $tituloPagina = "Procurar Cliente";
        $link = './formProcuraCliente.php';
        break;

    case "resultCliente":
        $tituloPagina = "Resultados de Busca";
        $link = './resultCliente.php';
        break;

    case "editaCliente":
        $tituloPagina = "Edicação de Cadastro";
        $link = './editaCliente.php';
        break;

    case "excluirCliente":
        $tituloPagina = "Exclusão de cadastro de cliente";
        $link = './excluirClientConf.php';
        break;

    case "cadastraFuncionario":
        $tituloPagina = "Cadastro de Funcionário";
        $link = './formFuncionario.php';
        break;
    
    case "procurarFuncionario":
        $tituloPagina = "Procurar Funcionário";
        $link = './buscarFuncionario.php';
        break;
    
    default:
        $tituloPagina = "Página Inicial";
        $link = 'index2.php';
}