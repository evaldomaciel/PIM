<?php

class BancoDeDados {

    function conectaBD() {
        @mysql_connect('localhost', 'root', '');
        mysql_select_db("pim");
        //mysql_close($link);
    }

    function executaQuery($queryExecutar) {
        @mysql_query($queryExecutar);
    }

    function queryClienteConsulta() {
        $result = @mysql_query("select * from clientes");
        $row = mysql_fetch_array($result);
        echo "<h1>Busca no banco de dados:</h1>\n";
        echo $row["id"] . "\n";
        echo $row["nome"] . "\n";
        echo $row["cpf"] . "\n";
        echo $row["cnh"] . "\n";
        echo $row["dataNascimento"] . "\n";
        echo $row["endereco"] . "\n";
        echo $row["telefone"] . "\n";
        echo $row["email"] . "\n";
        echo $row["Cidades_id"] . "\n";
    }

    function queryInserirCliente($nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade) {
        echo "<h1>Inserir Banco de Dados</h1>"
        . "INSERT INTO clientes (nome, cpf, cnh, dataNascimento, endereco, telefone, email, Cidades_id) values ('$nomeCliente', $cpfCliente, $cnhCliente, '$dataNascCliente', '$enderecoCliente', $telefone, '$email', $cidade)";
    }

    function formCidade() {
        $result = @mysql_query("select * from cidades");
        $row = mysql_fetch_array($result);
    }
    
    function getPost($posta){
        $posta = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    }

}
