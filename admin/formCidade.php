<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title></title>
    </head>
    <body>
        <pre>
            <form action="formCidade.php" method="post">
                Cidade
                <input type="text" name="nomeCidade"/>
                
                Estado
                <input type="text" name="ufCidade"/>
                
                
                
                <select name="Cidade">
                    <?php
                    require_once '../classes/BancoDeDados.php';

                    $Conexao = new BancoDeDados();

                    $Conexao->conectaBD();

                    $result = @mysql_query("select * from cidades order by nome");
                    //$row = mysql_fetch_array($result);

                    while ($row = mysql_fetch_array($result)) {
                        echo "<option value='".$row["id"]."'>".$row["nome"]." - ".$row["uf"]."</option>\n";
                    }
                    ?>
                </select>
                
                <input type="submit" value="Salvar"/>
                
                
                
            </form>
            <?php
            require_once '../classes/Cidades.php';

            $nomeCidade = $_POST['nomeCidade'];
            $ufCidade = $_POST['ufCidade'];

            $Cidade = new Cidades($nomeCidade, $ufCidade);
            
            $Cidade->inserirCidade($nomeCidade, $ufCidade);
            
            ?>
        </pre>

    </body>
</html>
