<?php
require_once '../classes/BancoDeDados.php';
$Conexao = new BancoDeDados();
$Conexao->conectaBD();

require_once '../classes/Cliente.php';
$Cliente = new Cliente();
$Cliente->conectaBD();

$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $filtro["id"];

$Cliente->salvarEdicao();

$Cliente->editarClienteBD($id);
?>
<h2>Exclusão de Cadastro de Clientes</h2>


<div class="form-group">

    Deseja realmente exlcuir o cadastro do cliente?

</div>
