<?php
    /*
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';
    */
    $conexao = new mysqli('localhost:3306','root','','cadastro');

    if($conexao->connect_errno)
    {
        echo "Ocorreu um Erro! Tente novamente mais tarde.";
    }
   
?>