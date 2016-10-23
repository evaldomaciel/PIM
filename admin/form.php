<h2>Cadastro de Clientes</h2>
<div class="form-group">
    <form action="./?p=cadastrarCliente" method="post" class="form-inline">
        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">ID</label><br/>
            <input class="form-control" style="width: 60px;" type="text" name="id" disabled="disabled">
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
                <?php
                require_once '../classes/BancoDeDados.php';

                $Conexao = new BancoDeDados();

                $Conexao->conectaBD();

                $result = @mysql_query("select * from cidades order by nome");
                //$row = mysql_fetch_array($result);

                while ($row = mysql_fetch_array($result)) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nome"] . " - " . $row["uf"] . "</option>\n";
                }
                ?>
            </select>

        </div>
        <div style="clear: both; text-align: center;">
            <input class="btn btn-success" id="input176" type="submit" value="Enviar">
        </div>
    </form>
    <!--h4>Confirmação de Cadastro</h4-->
    <?php
    // $nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade
    //echo $_SERVER['PHP_SELF'];

    require_once '../classes/Cliente.php';
    $Cliente = new Cliente();

    if (isset($_POST["nome"])) {
        $nomeCliente = $_POST["nome"];
        $cpfCliente = $_POST["cpfCliente"];
        $cnhCliente = $_POST["cnhCliente"];
        $dataNascCliente = $_POST["dataNascCliente"];
        $enderecoCliente = $_POST["enderecoCliente"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $rg = $_POST["rg"];
        $rgOE = $_POST["rgOE"];
        $sexo = $_POST["sexo"];
        $primeiraCNH = $_POST["primeiraCNH"];
        $validadeCNH = $_POST["validadeCNH"];
        
        $Cliente->inserirBD($nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade, $rg, $rgOE, $sexo, $primeiraCNH, $validadeCNH);
    } else {
        echo "<!--Sem Paramentros-->"; 
    }
    ?>

</div>
