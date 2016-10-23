<h2>Procurar Cadastro de Clientes</h2>
<div class="form-group">
    <form action="./?p=resultCliente" method="post" class="form-inline">
        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">ID</label><br/>
            <input class="form-control" style="width: 60px;" type="text" name="id" >
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Nome</label><br/>
                <input class="form-control" id="inputNome" type="text" name="nome">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Data de Nascimento</label><br/>
                <input class="form-control" id="input160" type="date" name="dataNascCliente">
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">RG</label><br/>
                <input class="form-control" id="rg" type="text" name="rg">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Org Exp</label><br/>
                <input class="form-control" id="rgOE" type="text" name="rgOE">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CPF</label><br/>
                <input class="form-control" id="input200" type="text" name="cpfCliente">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Sexo</label><br/>
                <select class="form-control" id="input112" name="sexo">
                    <option value=""></option>
                    <option value='F'>Feminino</option>
                    <option value='M'>Masculino</option>
                </select>
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CNH</label><br/>
                <input class="form-control" id="input160" type="text" name="cnhCliente">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Primeira Habilitação</label><br/>
                <input class="form-control" id="input160" type="date" name="primeiraCNH">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CNH Validade</label><br/>
                <input class="form-control" id="input160" type="date" name="validadeCNH">
            </div>
        </div>

        <div style="clear: both">

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Telefone</label><br/>
                <input class="form-control" id="input160" type="tel" name="telefone">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">E-mail</label><br/>
                <input class="form-control" id="input250" type="email" name="email">
            </div>
        </div>

        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">Endereço</label><br/>
            <input class="form-control" id="inputNome" type="text" name="enderecoCliente">
        </div>

        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">Cidade</label><br/>
            <select class="form-control" id="input176" name="cidade">
                <option value=""></option>
                <?php
                require_once '../classes/BancoDeDados.php';

                $Conexao = new BancoDeDados();

                $Conexao->conectaBD();

                $result = @mysql_query("select * from cidades order by nome");
                //$row = mysql_fetch_array($result);

                while ($row = mysql_fetch_array($result)) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nome"] . " - " . $row["uf"] . "</option>";
                    echo "\n                ";
                }
                ?>                
            </select>

        </div>
        <div style="clear: both; text-align: center;">
            <input class="btn btn-success" id="input176" type="submit" value="Procurar">
            <button type="button" class="btn btn-warning" id="input176" >Editar</button>
            <button type="button" class="btn btn-danger" id="input176" >Excluir</button>
        </div>
    </form>
    <!--h4>Resultado de Busca</h4-->

    <?php
    require_once '../classes/Cliente.php';
    $Cliente = new Cliente();
    $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if ( isset($filtro["id"]) 
            || isset($filtro["nome"]) 
            || isset($filtro["cpfCliente"]) 
            || isset($filtro["cnhCliente"]) 
            || isset($filtro["dataNascCliente"]) 
            || isset($filtro["enderecoCliente"]) 
            || isset($filtro["telefone"]) 
            || isset($filtro["email"]) 
            || isset($filtro["cidade"])
            || isset($filtro["rg"])
            || isset($filtro["rgOE"])
            || isset($filtro["sexo"])
            || isset($filtro["primeiraCNH"])
            || isset($filtro["validadeCNH"])){
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
        echo "<!--Sem parâmetros de busca-->";
    }
    ?>

</div>
