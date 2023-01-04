<?php

    session_start();
    include '../conexao.php';
    
    $email = addslashes($_POST['txt_email']);
    $senha = addslashes( $_POST['txt_senha']);

    //$criptografada = md5($senha);

    if(empty($_POST['txt_email']) || empty($_POST['txt_senha'])){
        $_SESSION['campo_vazio'] = true;
        header('Location: entrar.php');
        exit();
    }   

    if($email == "admin@admin" && $senha == "123"){
        header('Location: ../painel/painel.html');
        exit();
    }

    try{
        $sql = mysqli_query($conecta, "select * from cadastrar where email='{$email}' and senha='{$senha}'"); //O $conecta é a variável do conexao.php
        $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará

        if($sql2 == 1){
            $_SESSION['email'] = $email;
            header('Location: ../index.php');
            exit();
        }else{
            header('Location: entrar.php');
            throw new \Exception("Errado, Tente Novamente!");
            exit();
        }
    }catch(\Exception $e){
        print_r($e->getMessage());
        print($e->getCode());
    }

    

?>