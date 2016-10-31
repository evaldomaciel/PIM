<?php

require_once 'BancoDeDados.php';

class Funcionarios extends BancoDeDados {

    private $id;
    private $nome;
    private $cpf;
    private $login;
    private $senha;
    private $perfil;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function consultar() {
        $this->conectaBD();
        $sql = "select * from funcionarios";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            echo mysql_error();            
            $funcionaio = [$row["id"],$row["nome"],$row["cpf"],$row["login"],$row["senha"],$row["perfil"]];
            var_dump($funcionaio);
            echo "Vamos editar esse maldito funcionário <form action='id' method=\"post\"><input style='text-align: center; margin: 10px auto; postion: relative;' class=\"btn btn-success\"  type=\"submit\" value=\"Editar\"></form>";
        }
    }

    public function inserir($nome, $cpf, $login, $senha, $perfil) {
        echo "Vamos inserir o funcionário";
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->login = $login;
        $this->senha = $senha;
        $this->perfil = $perfil;
        $sql = "INSERT INTO funcionarios (nome, cpf, login, senha, perfil) VALUES ('$nome', $cpf, '$login', md5('$senha'), '$perfil')";
        $this->executaQuery($sql);
        echo "<META http-equiv=\"refresh\" content=\"3 ;URL=/\"> Funcionário cadastrado com sucesso ";
    }

    public function editar() {
        echo "vamos editar o funcionário";
    }

    public function excluir() {
        echo "vamos exlcuir o funcionário";
    }

}
