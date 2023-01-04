<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-bre">
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
    
    <!-- MENU -->
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
                <a href="../cadastrar-entrar/cadastrar.php" class="entrar-cadastrar">Entrar | Cadastrar</a>
            </div>
        </div>
      </nav>

    <!-- Notificação de Cadastro -->
    <?php
        if(isset($_SESSION['cadastro'])):
    ?> 
    <div class="alert alert-success" role="alert">
        Formulário Enviado com Sucesso, Agradecemos pela Ajuda!
    </div>
    <?php
        endif;
        unset($_SESSION['cadastro']);
    ?>

    <div class="container-fluid" id="container-fale">
        <div class="row align-items-center col-md-12">
            <div class="col-md-12" id="title">
                <h1>Fale Conosco</h1>
                <p>Achou algum erro ou tenha uma sujestão de melhoria? Relate para gente</p>
            </div>

            <form name="frm_faleconosco" method="POST" id="frm_contato">
                <div id="nameEmail">
                    <div class="col-6">
                        <div class="mb-3 form-floating" id="input-name">
                            <input type="text" class="form-control" name="txt_nome" placeholder="Digite seu nome" required>
                            <label for="form-label">Digite seu nome</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" name="txt_email" placeholder="Digite seu email" required>
                            <label for="form-label">Digite seu e-mail</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <textarea name="txt_comentario" class="form-control" id="comentario" cols="10" rows="10" placeholder="Digite sua Mensagem" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" onClick="document.frm_faleconosco.action='contatoEnviar.php'">Enviar Mensagem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>