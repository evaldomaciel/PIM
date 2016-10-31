<H3>Vamos buscar nossos funcionários aqui =) </H3>

<?php 
require_once '../classes/Funcionarios.php';

$Funcionario = new Funcionarios(); 

$Funcionario->consultar();
$Funcionario->getNome();