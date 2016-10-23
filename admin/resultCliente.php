<h2>Resultado de Busca</h2>
<div class="form-group">
    <h4>Lista de Clientes</h4>

    <?php
    require_once '../classes/BancoDeDados.php';
    $Conexao = new BancoDeDados();
    $Conexao->conectaBD();

    require_once '../classes/Cliente.php';
    $Cliente = new Cliente();

    $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (isset($filtro["id"]) || isset($filtro["nome"]) || isset($filtro["cpfCliente"]) || isset($filtro["cnhCliente"]) || isset($filtro["dataNascCliente"]) || isset($filtro["enderecoCliente"]) || isset($filtro["telefone"]) || isset($filtro["email"]) || isset($filtro["cidade"]) || isset($filtro["rg"]) || isset($filtro["rgOE"]) || isset($filtro["sexo"]) || isset($filtro["primeiraCNH"]) || isset($filtro["validadeCNH"])) {
        $id = $filtro["id"];
        $nomeCliente = $filtro["nome"];
        $cpfCliente = $filtro["cpfCliente"];
        $cnhCliente = $filtro["cnhCliente"];
        $dataNascCliente = $filtro["dataNascCliente"];
        $enderecoCliente = $filtro["enderecoCliente"];
        $telefone = $filtro["telefone"];
        $email = $filtro["email"];
        $cidade = $filtro["cidade"];
        $rg = $filtro["rg"];
        $rgOE = $filtro["rgOE"];
        $sexo = $filtro["sexo"];
        $primeiraCNH = $filtro["primeiraCNH"];
        $validadeCNH = $filtro["validadeCNH"];

//            echo "$nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade";

        $Cliente->abreTabela();
        $Cliente->consultar($id, $nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade, $Cliente, $rg, $rgOE, $sexo, $primeiraCNH, $validadeCNH);
        $Cliente->fechaTabela();
    } else {
        echo "Sem parâmetros de busca";
    }
    ?>

</div>
