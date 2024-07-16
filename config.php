<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-paula';

//conexão orientado a objeto
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//fazer prova sem tem conexao
    // if($conexao->connect_errno)
    // {
    //     echo "Erro de conexão com o BD";
    // }
    // else
    // {
    //     echo "conexão efetuada com sucesso";
    // }

?>