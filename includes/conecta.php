<?php
    $bancoDeDados = "localhost";
    $usuarioBD = "root"; 
    $senhaBD = "";
    $baseDeDados = "pim";
    @mysql_connect($bancoDeDados, $usuarioBD, $senhaBD) or die (mysql_error());
    mysql_select_db($baseDeDados);

?>
