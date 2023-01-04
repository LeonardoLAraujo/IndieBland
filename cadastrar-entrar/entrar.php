<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Bland | Entrar</title>
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

    <!-- Estrutura do corpo -->
    <div class="container col-11 col-md-5">
        <div class="row align-items-center gx-5">
             <div class="col-md-6 col-sm-12 order-md-2 order-2" id="total">
                <form name="frm_entrar" method="POST" id="formulario">
                    <h1>Entrar</h1>
                    <div class="mb-2">
                        <input type="email" class="form-control" name="txt_email" placeholder="E-mail" id="email">
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="txt_senha" placeholder="Senha">
                    </div>
                    <div class="mb-2">
                        <!-- Button trigger modal -->
                        <a href="#" id="esqueciSenha" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueci a Senha</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <p id="title-modal">Esqueceu a Senha?</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Informa seu E-mail para recuperar a senha</p>
                                <input type="email" class="form-control" name="txt_esqueci_senha" id="input-modal" placeholder="E-mail">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">Recuperar Senha</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-2" id="botão">
                        <button class="btn btn-primary" type="submit" onClick="document.frm_entrar.action='logar.php'">Entrar</button>
                        <button class="btn btn-primary" type="submit" onClick="document.frm_entrar.action='cadastrar.php'">Cadastrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 order-md-1 order-1" id="total">
                <img src="../img/banner.png" alt="Logo do Facebook" class="img-fluid" id="img-logo">
                <h2 id="corpo-img">Seu site de Jogos Indie.</h2>
            </div>
        </div>
    </div>

</body>
</html>