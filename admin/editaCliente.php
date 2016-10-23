<?php
require_once '../classes/BancoDeDados.php';
$Conexao = new BancoDeDados();
$Conexao->conectaBD();

require_once '../classes/Cliente.php';
$Cliente = new Cliente();
$Cliente->conectaBD();

$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $filtro["id"];

if (isset($filtro["editarExcluir"])) {
    $excluirEditar = $filtro["editarExcluir"];
    $Cliente->editarExcluir($excluirEditar);
} else { /* Não faça nada  */
}


$Cliente->editarClienteBD($id);
?>
<h2>Manutenção Cadastro de Clientes</h2>


<div class="form-group">
    <form action="./?p=editaCliente&s=salvar" method="post" class="form-inline" value="salvar">
        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">ID</label><br/>
            <input type="hidden"  name="id" value="<?php echo $Cliente->getId(); ?>">
            <input class="form-control" style="width: 60px;" type="text" disabled="disabled" name="id" value="<?php echo $Cliente->getId(); ?>">
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Nome</label><br/>
                <input class="form-control" id="inputNome" type="text" name="nome" value="<?php echo $Cliente->getNome(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Data de Nascimento</label><br/>
                <input class="form-control" id="input160" type="date" name="dataNascCliente" value="<?php echo $Cliente->getDataNascimento(); ?>">
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">RG</label><br/>
                <input class="form-control" id="rg" type="text" name="rg" value="<?php echo $Cliente->getRg(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Org Exp</label><br/>
                <input class="form-control" id="rgOE" type="text" name="rgOE"  value="<?php echo $Cliente->getOrgExp(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CPF</label><br/>
                <input class="form-control" id="input200" type="text" name="cpfCliente" value="<?php echo $Cliente->getCpf(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Sexo</label><br/>
                <select class="form-control" id="input112" name="sexo">
                    <option value=""></option>
                    <option value='F' <?php echo $Cliente->selectSexoF; ?>>Feminino</option>
                    <option value='M' <?php echo $Cliente->selectSexoM; ?>>Masculino</option>
                </select>
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CNH</label><br/>
                <input class="form-control" id="input160" type="text" name="cnhCliente" value="<?php echo $Cliente->getCnh(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Primeira Habilitação</label><br/>
                <input class="form-control" id="input160" type="date" name="primeiraCNH" value="<?php echo $Cliente->getPrimeiraCNH(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CNH Validade</label><br/>
                <input class="form-control" id="input160" type="date" name="validadeCNH" value="<?php echo $Cliente->getValidadeCNH(); ?>">
            </div>
        </div>

        <div style="clear: both">

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Telefone</label><br/>
                <input class="form-control" id="input160" type="tel" name="telefone" value="<?php echo $Cliente->getTelefone(); ?>">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">E-mail</label><br/>
                <input class="form-control" id="input250" type="email" name="email" value="<?php echo $Cliente->getEmail(); ?>">
            </div>
        </div>

        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">Endereço</label><br/>
            <input class="form-control" id="inputNome" type="text" name="enderecoCliente" value="<?php echo $Cliente->getEndereco(); ?>">
        </div>

        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">Cidade</label><br/>
            <select class="form-control" id="input176" name="cidade">
                <?php
                $result = @mysql_query("select * from cidades order by nome");
//$row = mysql_fetch_array($result);

                while ($row = mysql_fetch_array($result)) {
                    // If else para selecionar a cidade do cliente na tela de edição. 
                    if ($row["id"] == $Cliente->selecaoCidade) {
                        echo "<option value='" . $row["id"] . "' selected>" . $row["nome"] . " - " . $row["uf"] . "</option>";
                    } else {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . " - " . $row["uf"] . "</option>";
                    }

                    echo "\n\t\t\t\t";
                }
                ?>                
            </select>

        </div>
        <div style="clear: both; text-align: center;">
            <input class="btn btn-warning" id="input176" type="submit" name="editarExcluir" value="Salvar">
            <input class="btn btn-danger" id="input176" type="submit" name="editarExcluir" value="Excluir">
        </div>
    </form>

</div>
