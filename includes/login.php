
<?php

include_once './conecta.php';


$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = mysql_query("select * from funcionarios where login = '$login' and senha =  md5('$senha');");
$row = mysql_num_rows($sql);
if ($row > 0) {
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];
    echo "Autenticado";
    header("Location: ../admin");
} else {
    echo "select * from funcionarios where login = '$login' and senha = '$senha'";
    echo "<p><a href='../logout.php'>sair</a></p>";
}
?>
