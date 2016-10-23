<?php
class Cidades extends BancoDeDados {
    
    private $ids;
    private $nome;
    private $uf;
    
    function inserirCidade($nome, $uf){
        $this->nome = $nome;
        $this->uf = $uf;
        
        echo "<h2>Inserir cidade no banco de dados</h2>";
        
        $this->conectaBD();
        
        $sql = "INSERT INTO cidades (nome, uf) VALUES ('$nome','$uf')";
        
        mysql_query($sql);
        
        echo "$sql\n";
        
        echo mysql_error()."\n";
        
        $numero = @mysql_insert_id();
        
        echo "Cidade $nome-$uf inserida, ID: $numero";
        
        
    }
    
    function __construct($nome, $uf) {
        $this->nome = $nome;
        $this->uf = $uf;
        echo "$this->nome - $this->uf;
";
    }
            
    function editarCidade(){
        
    }
    
    function excluirCidade(){
        
    }
    
}
