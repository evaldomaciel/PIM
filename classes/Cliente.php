<?php

require_once 'BancoDeDados.php';

class Cliente extends BancoDeDados {

    private $id;
    private $nome;
    private $cpf;
    private $cnh;
    private $dataNascimento;
    private $endereco;
    private $telefone;
    private $email;
    private $cidade;
    private $rg;
    private $orgExp;
    private $sexo;
    private $primeiraCNH;
    private $validadeCNH;
    
    public $selectSexoM;
    public $selectSexoF;

    public function getId() {
        return $this->id;
        session_destroy();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCnh() {
        return $this->cnh;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getOrgExp() {
        return $this->orgExp;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getPrimeiraCNH() {
        return $this->primeiraCNH;
    }

    public function getValidadeCNH() {
        return $this->validadeCNH;
    }

    function inserir($id, $nome, $cpf, $cnh, $dataNascimeno, $endereco, $telefone, $email) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cnh = $cnh;
        $this->dataNascimento = $dataNascimeno;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    function consultar($id, $nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade, $cliente, $rg, $rgOE, $sexo, $primeiraCNH, $validadeCNH) {
        $this->conectaBD();
        $result = @mysql_query("SELECT * FROM clientes WHERE nome like '%$nomeCliente%' and id like '%$id%' and cpf like '%$cpfCliente%' and cnh like '%$cnhCliente%' and dataNascimento like '%$dataNascCliente%' and endereco like '%$enderecoCliente%' and telefone like '%$telefone%' and email like '%$email%' and Cidades_id like '%$cidade%'");
        //$row = mysql_fetch_array($result);
        echo mysql_error();
//        echo "SELECT * FROM clientes WHERE nome like '%$nomeCliente%' and cpf like '%$cpfCliente%' and cnh like '%$cnhCliente%' and dataNascimento like '%$dataNascCliente%' and endereco like '%$enderecoCliente%' and telefone like '%$telefone%' and email like '%$email%' and Cidades_id like '%$cidade%'\n";
        //Declaranado variáveis que definiram as cores das linhas
        $numero = 0;
        $linha = 0;
        $class = "";

        if (mysql_num_rows($result) >= 1) {
            while ($row = mysql_fetch_assoc($result)) {
                //Formula para definir a cor da linha 
                $numero++;
                $linha = $numero % 2;
                // if else para definir a cor da linha 
                if ($linha == 1) {
                    $class = "success";
                } else {
                    $class = "branco";
                }
                echo "\n<tr class=\"$class\">\n<td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td id=\"esconderTD\">" . $row['cpf'] . "</td><td id=\"esconderTD\">" . $row['cnh'] . "</td><td>" . $row['dataNascimento'] . "</td>\n<td>\n<form action='./?p=editaCliente' method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"" . $row['id'] . "\"><input type=\"submit\" class=\"btn btn-warning\" value=\"Editar\"></input>\n</form>\n</td>\n</tr>\n";
            }
        } else {
            echo "Sem resultado";
        }
    }

    function inserirBD($nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade, $rg, $rgOE, $sexo, $primeiraCNH, $validadeCNH) {
        $this->conectaBD();
        echo "<h1>Inserir Banco de Dados</h1>";
        $sql = "INSERT INTO clientes (nome, cpf, cnh, dataNascimento, endereco, telefone, email, Cidades_id, rg, orgExp, sexo, primeiraCNH, validadeCNH) values ('$nomeCliente', '$cpfCliente', $cnhCliente, '$dataNascCliente', '$enderecoCliente', '$telefone', '$email', $cidade, '$rg', '$rgOE', '$sexo', '$primeiraCNH', '$validadeCNH')";
        if (mysql_query($sql)) {
            $numero = @mysql_insert_id(); //obtem o número da id incluida pelo último insert
            echo "\nCliente número $numero cadastrado com sucesso <br/> Cliente: $nomeCliente";
        } else {
            echo "Não foi possível inserir " . $sql . "\n" . mysql_error();
        }
        //echo $_SERVER['PHP_SELF'];
        //echo "hello " . $_POST["nome"];
    }

    public function abreTabela() {
        echo "\n<table  class=\"table table-striped\">\n";
        echo "<tr style=\"font-weight: bold;\" >\n<td>ID</td><td>Nome</td><td id=\"esconderTD\">CPF</td><td id=\"esconderTD\">CNH</td><td>Nascimento</td><td></td>\n</tr>\n";
    }

    public function fechaTabela() {
        echo "\n</table>\n";
    }

    public function editarClienteBD($id) {
        $id = (int) $id;
        $this->conectaBD();
        $sql = "SELECT * from clientes where id = $id";
        $result = mysql_query($sql);
        $erro = mysql_error();
        $row = mysql_fetch_assoc($result);

        $this->id = $row['id'];
        $this->nome = $row['nome'];
        $this->cpf = $row['cpf'];
        $this->cnh = $row['cnh'];
        $this->dataNascimento = $row['dataNascimento'];
        $this->endereco = $row['endereco'];
        $this->telefone = $row['telefone'];
        $this->email = $row['email'];
        $this->cidade = $row['Cidades_id'];
        $this->selecaoCidade = $row['Cidades_id'];
        $this->rg = $row['rg'];
        $this->orgExp = $row['orgExp'];
        $this->sexo = $row['sexo'];
        $this->primeiraCNH = $row['primeiraCNH'];
        $this->validadeCNH = $row['validadeCNH'];

        //Carregar sexo na edição
        if ($this->sexo == "M") {
            $this->selectSexoM = " selected";
        } else if ($this->sexo == "F") {
            $this->selectSexoF = " selected";
        } else {
            
        }
    }

//".$filtroPost['']."
    public function salvarEdicao() {
        $filtroPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $id = $filtroPost['id'];
        $filtroGet = filter_input_array(INPUT_GET, FILTER_DEFAULT);
        if (isset($filtroGet["s"])) {
            $salvar = $filtroGet["s"];
            if ($salvar == "salvar") {
                $queryExe = "UPDATE clientes SET nome='" . $filtroPost['nome'] . "', cpf='" . $filtroPost['cpfCliente'] . "', cnh='" . $filtroPost['cnhCliente'] . "', dataNascimento='" . $filtroPost['dataNascCliente'] . "', endereco='" . $filtroPost['enderecoCliente'] . "', telefone='" . $filtroPost['telefone'] . "', email='" . $filtroPost['email'] . "', Cidades_id='" . $filtroPost['cidade'] . "', rg='" . $filtroPost['rg'] . "', orgExp='" . $filtroPost['rgOE'] . "', sexo='" . $filtroPost['sexo'] . "', primeiraCNH='" . $filtroPost['primeiraCNH'] . "', validadeCNH='" . $filtroPost['validadeCNH'] . "' WHERE id='" . $filtroPost['id'] . "'";
                echo "<center><button class=\"btn btn-success\" id=\"input176\">Atualizado com Sucesso</button></center>";
                $this->conectaBD();
                $this->executaQuery($queryExe);
            } else {
                echo "Não vamos fazer nada";
            }
        }
    }

    public function confirmarExcluirCliente($id, $nome) {
        echo "<h4 style='text-align: center;'>Cliente $nome excluido<br/><br/><p><a  href=\"./#Cliente\"><button class=\"btn btn-success\" id=\"input176\" type=\"submit\" name=\"excluirB\" value=\"\">Voltar</button></a></p></h4>";
        $sql = "DELETE FROM clientes WHERE id=$id";
        $this->conectaBD();
        $this->executaQuery($sql);
        echo mysql_error();
    }

    public function editarExcluir($excluirEditar) {
        switch ($excluirEditar) {
            case "Salvar":
                $this->salvarEdicao();
                break;
            case "Excluir":
                $this->excluirCliente();
                break;
            default :
                break;
        }
    }

    public function excluirCliente() {
        $filtroPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $id = $filtroPost['id'];
        $nome = $filtroPost['nome'];
        echo "<h4 style='text-align: center;'>Deseja realmente excluir o cadastro do cliente $nome?<br/>Esta ação não pode ser desfeita</h4>";

        echo "<div class=\"form-group\">
    <form action=\"./?p=excluidoCliente\" method=\"post\" class=\"form-inline\" value=\"salvar\">
            <input type=\"hidden\"  name=\"id\" value=\"$id\">
            <input type=\"hidden\"  name=\"nome\" value=\"$nome\">
        </div>
        <div style=\"clear: both; text-align: center;\">
            <input class=\"btn btn-danger\" id=\"input176\" type=\"submit\" name=\"salvarB\" value=\"Sim, Excluir\">
            <a href=\"./#Cliente\"><button class=\"btn btn-primary\" id=\"input176\" type=\"submit\" name=\"excluirB\" value=\"\">Não, Tire-me daqui</button></a>
        </div>
    </form>";
    }

}
