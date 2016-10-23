<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title>Form Procura Cliente</title>
        <link href="../css/estilo.css" type="text/css" rel="stylesheet" >
    </head>
    <body>
        <h1>Form procura cliente</h1>
        <table>
            <tr>
                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        Nome: 
                        <input type="text" name="nome">

                        CPF
                        <input type="text" name="cpfCliente">

                        CNH
                        <input type="text" name="cnhCliente">

                        Data de Nascimento
                        <input type="date" name="dataNascCliente">

                        Endereço
                        <input type="text" name="enderecoCliente">

                        Telefone
                        <input type="tel" name="telefone">

                        E-mail
                        <input type="email" name="email">

                        Cidade
                        <input type="text" name="cidade">

                        <input type="submit" value="Buscar">

                    </form>
                </td>
                <td>
                    <?php
                    require_once '../classes/Cliente.php';
                    $Cliente = new Cliente();

                    if (isset($_POST["nome"]) || isset($_POST["cpfCliente"]) || isset($_POST["cnhCliente"]) || isset($_POST["dataNascCliente"]) || isset($_POST["enderecoCliente"]) || isset($_POST["telefone"]) || isset($_POST["email"]) || isset($_POST["cidade"])) {
                        $nomeCliente = $_POST["nome"];
                        $cpfCliente = $_POST["cpfCliente"];
                        $cnhCliente = $_POST["cnhCliente"];
                        $dataNascCliente = $_POST["dataNascCliente"];
                        $enderecoCliente = $_POST["enderecoCliente"];
                        $telefone = $_POST["telefone"];
                        $email = $_POST["email"];
                        $cidade = $_POST["cidade"];

//            echo "$nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade";


                        $Cliente->consultar($nomeCliente, $cpfCliente, $cnhCliente, $dataNascCliente, $enderecoCliente, $telefone, $email, $cidade,$Cliente);
                        
                                
                        
                    } else {
                        echo "Sem parâmetros de busca";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>








            <!-- ?php
            require_once '../classes/Cliente.php';
            $Cliente = new Cliente();

            $Cliente->inserir(1, // id
                    "Evaldo", // $nome
                    '03393173103', // $cpf
                    4324324, // $cnh
                    "30-06-1990", // $dataNascimeno
                    "Riacho Fundo", // $endereco
                    6199269676, // $telefone
                    "evaldomaciel17@gmail.com" // $email);
            );

            var_dump($Cliente);
//print_r($Cliente);
//$Cliente->consultar();
//$Cliente->inserirBD();
            ?>


