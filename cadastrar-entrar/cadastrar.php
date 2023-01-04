<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Bland | Cadastre-se</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.png" class="icon">
</head>
<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
             <img src="../img/logo.png"  width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../jogos/jogos.html">Jogos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Gêneros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../genero/Indie_Blend_Genero_RPG.html">RPG</a></li>
                            <li><a class="dropdown-item" href="../genero/Indie_Blend_Genero_Acao.html">Ação</a></li>
                            <li><a class="dropdown-item" href="../genero/Indie_Blend_Genero_Terror_retro.html">Terror</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contato/contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Indie_Blend_Equipe.html" class="nav-link">Sobre Nós</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i> </button>
                </form>
                <a href="cadastrar.php" class="entrar-cadastrar">Entrar | Cadastrar</a>
            </div>
        </div>
      </nav>

      <!-- Notificação de Cadastro -->
        <?php
            if(isset($_SESSION['cadastro'])):
        ?> 
        <div class="alert alert-success" role="alert">
            Conta Cadastrada com Sucesso! | Entre na sua Conta 
        </div>
        <?php
            endif;
            unset($_SESSION['cadastro']);
        ?>

        <!-- Notificação de Usuário já Cadastrado -->
        <?php
            if(isset($_SESSION['nao_cadastro'])):
        ?> 
        <div class="alert alert-danger" role="alert">
            Conta já cadastrada | Entre na sua
        </div>
        <?php
            endif;
            unset($_SESSION['nao_cadastro']);
        ?> 

        <!-- Notificação de Campo Vázio -->
        <?php
            if(isset($_SESSION['campo_vazio'])):
        ?> 
        <div class="alert alert-danger" role="alert">
            Existe Campos Vazios
        </div>
        <?php
            endif;
            unset($_SESSION['campo_vazio']);
        ?> 


      <div class="container col-11 col-md-5">
        <div class="row align-items-center gx-5">
            <div class="col-md-6 col-sm-12 order-md-2 order-2" id="total">
                <form name="frm_criarConta" method="POST" id="formulario">
                    <h1>Cadastre-se</h1>
                    <div class="mb-2" id="nome-sobrenome">
                        <input type="text" class="form-control" name="txt_nome" placeholder="Nome" >
                        <input type="text" class="form-control" name="txt_sobrenome" placeholder="Sobrenome" >
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" name="txt_email" placeholder="E-mail" >
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="txt_senha" placeholder="Senha" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked >
                        <label class="form-check-label" for="flexCheckChecked">Aceita os <a href="termosDeUso.html">Termos</a> </label>
                    </div>
                    <hr>
                    <div class="mb-2" id="botão">
                        <button class="btn btn-primary" type="submit" onClick="document.frm_criarConta.action='criarConta.php'">Cadastrar</button>
                        <button class="btn btn-primary" type="submit" onClick="document.frm_criarConta.action='entrar.php'">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 order-md-1 order-1" id="total">
                <img src="../img/banner.png" alt="Logo do Indie Bland" class="img-fluid" id="img-logo">
                <h2 id="corpo-img">Seu site de Jogos Indie.</h2>
            </div>
        </div>
      </div>
     
      
   
</body>
</html>