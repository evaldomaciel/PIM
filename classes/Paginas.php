<?php

class Paginas {

    private $link;
    private $tituloPagina;

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getTituloPagina() {
        return $this->tituloPagina;
    }

    public function getPage($paginaSolic) {
        switch (@$_REQUEST[p]) {
            case "cadastrarCliente":
                $this->tituloPagina = "<title>Cadastrar Cliente</title>";
                $this->link = './form.php';
                break;

            case "procurarCliente":
                $this->tituloPagina = "<title>Procurar Cliente</title>";
                $this->link = './formProcuraCliente.php';
                break;
            
            case "resultCliente":
                $this->tituloPagina = "<title>Resultados de Busca</title>";
                $this->link = './resultCliente.php';
                break;

            case "editaCliente":
                $this->tituloPagina = "<title>Edicação de Cadastro</title>";
                $this->link = './editaCliente.php';
                break;
            
            case "excluirCliente":
                $this->tituloPagina = "<title>Exclusão de cadastro de cliente</title>";
                $this->link = './excluirClientConf.php';
                break;
            
            case "excluidoCliente":
                $this->tituloPagina = "<title>Exclusão de cadastro de cliente</title>";
                $this->link = './excluidoClientConf.php';
                break; 

            default:
                $this->tituloPagina = "<title>Página Inicial</title>";
                $this->link = 'index2.php';
        }
    }

}
