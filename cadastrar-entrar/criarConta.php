<?php

    session_start();
    include '../conexao.php';

    if(empty($_POST['txt_nome']) || empty($_POST['txt_sobrenome']) || empty($_POST['txt_senha']) || empty($_POST['txt_email'])){
        $_SESSION['campo_vazio'] = true;
        header('Location: cadastrar.php');
        exit();
    }

    $nome = $_POST['txt_nome'];
    $sobrenome = $_POST['txt_sobrenome'];
    $email = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    //$criptografada = md5($senha);
    
    $sql = mysqli_query($conecta, "select * from cadastrar where nome = '$nome'"); //O $conecta é a variável do conexao.php
    $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará
    
    if($sql2 > 0){ //Caso tenha um cadastro já cadastrado
        $_SESSION['nao_cadastro'] = true;
        header('Location: cadastrar.php');
        exit();
    }else{ //Caso não tenha esse cadastro
        $sql = mysqli_query($conecta, "insert into cadastrar (nome,sobrenome, senha, email)values('$nome','$sobrenome','$senha','$email')"); //O $conecta é a variável do conexao.php

        $_SESSION['cadastro'] = true;
        header('Location: cadastrar.php');
        exit();
    }

?>