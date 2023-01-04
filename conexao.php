<?php

    $server = "localhost"; //Servidor onde está o banco de Dados
    $user = "root"; //Usuario do banco de dados
    $password =""; //Senha do banco de Dados
    $dataBase = "indieBland"; //Nome do Banco de Dados

    $conecta = mysqli_connect($server, $user, $password, $dataBase) or die("Erro ao tentar Conectar com o servidor!!"); //Criando a variável para colocar no mysqli_query, para não dar erro

?>