<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indie Bland | Página Inicial</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="shortcut icon" type="imagex/png" href="./img/logo.png" class="icon">
</head>
<body>
  
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
         <img src="img/logo.png"  width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jogos/jogos.html">Jogos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Gêneros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="genero/Indie_Blend_Genero_RPG.html">RPG</a></li>
                        <li><a class="dropdown-item" href="genero/Indie_Blend_Genero_Acao.html">Ação</a></li>
                        <li><a class="dropdown-item" href="genero/Indie_Blend_Genero_Terror_retro.html">Terror</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato/contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="Indie_Blend_Equipe.html" class="nav-link">Sobre Nós</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i> </button>
            </form>
            <a href="cadastrar-entrar/cadastrar.php" class="entrar-cadastrar">Entrar | Cadastrar <?php echo $_SESSION['email'];?></a>
        </div>
    </div>
  </nav>

  <!-- BANNER  -->
  <div id="header-site">
    <div class="container-fluid" >
      <div class="row align-items-center">
        <div class="col-xs-12">
          <h1 class="text-center">Jogos indie</h1>
          <p class="lead text-center">São desenvolvidos por estúdios independentes sem apóio financeiro de uma empresa. As desenvolvedoras indie cuidam de todo o processo de criar e divulgar seus jogos
          </p>
        </div>
      </div>
    </div>
  </div>
  

    <!--O QUE É JOGOS INDIE -->
    <div class="container-fluid">
      <div class="row align-items-center">
          <div class="col-md-12 col-sm-12 order-md-2" id="oq-indie">
            <h1 >O que é Jogos Indie</h1>
            <p>Jogos indies, como também são chamados os jogos independentes, cresceram muito nos últimos anos. Se antigamente eles eram conhecidos como produtos de “segunda” e jogos de baixo orçamento, hoje são referência na indústria de games e também na forma como a relação comercial funciona – o que gerou até mesmo a produção de um filme/documentário sobre este mercado, o Indie Game: The Movie.</p>
            <p>Algumas das maiores provas estão aí para nos mostrar o resultado do bom trabalho que os desenvolvedores independentes estão fazendo. Mesmo sem o apoio de grandes empresas por trás, jogos como Minecraft, Super Meat Boy e FTL fazem enorme sucesso – em uma indústria onde até mesmo grandes nomes fracassam em vendas e grandes empresas de outrora são fechadas sem mais nem menos.</p>
            <p class="ultimo-p-indie-oq">Mesmo com recursos e até mesmo equipes limitadas, as produtoras independentes conseguiram se destacar no mercado e até criar um mercado à parte – com jogos que são lançados sem nenhuma amarra comercial, acordo abusivo ou preço muito acima do que o jogo vale, como muitas das vezes ocorre.</p>
          </div>
      </div>
    </div>
   
    <div class="container-fluid">
      <div class="row align-items-center" id="oq-indie2">
          <div class="col-md-5 col-sm-7">
            <iframe src="https://www.youtube.com/embed/Wm734eGzXt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6 col-sm-5" >
          <p>Como pode ver, não temos uma só perspectiva sobre o que é um jogo indie. São diversos fatores que levam o game a ser categorizado como independente. Sendo alguns pontos principais:</p>
          <ul>
            <li>Se o game foi feito por um estúdio independente, sem publishers</li>
            <li>Baixa verba envolvida</li>
            <li>Total liberdade aos criadores do game, sem pressão externa</li>
            <li>Se segue um aesthetic específico do modelo indie</li>
            <li>Geralmente, uma equipe não muito grande por trás do processo (às vezes sendo até uma só pessoa)</li>
            <li>Histórias únicas com mecânicas inovadoras</li>
          </ul>
        </div>
      </div>
    </div>
    
  <!--Genêro-->
  <div class="container-fluid" id="indie-genero">
    <div class="row">
      <div class="col-12">
        <h1>Gêneros Indie</h1>
        <p>Bom, agora que já te explicamos o que é um jogo indie, é hora de trazermos uma linha do tempo para você entender melhor como foi o desenvolvimento dessa indústria na cena.</p>
        <p>Tudo começou na década de 80 com desenvolvedores programando jogos nos seus próprios PCs. Sim, foi quando os computadores começaram a ser usados de forma pessoal. Isso tornou possível para gamers criarem sua própria história e jogo, entrando assim para o mercado.</p>
        <p>Era um solo fértil para o nascimento dos jogos indies. Podemos comparar o início dos jogos indies com as bandas que começavam com ensaio na garagem dos próprios pais. Só que nesse caso os gamers começavam a desenvolver seus jogos no seu próprio quarto.</p>
        <p>A cena independente teve muitas dificuldades, dentre elas foi a forte concorrência que tiveram com as grandes publishers. As publishers entraram na jogada lá nos anos 90 e isso complicou a vida dos indie developers (que já não era tão fácil). Competir por um espaço nas prateleiras, visto o tamanho dos games que saíam com apoio dessas empresas, era algo difícil. </p>
        <p class="ultimo-genero-p"> Lançar o seu jogo contando com pouca grana já era um processo de risco, agora com a falta de atenção que ganhavam era necessário ter muito jogo de cintura e um marketing afiado. Seguindo estratégias como liberar uma prévia gratuita do game para ser atrativo ao público e vender por preços bem em conta.  <p>Para entender melhor. <a href="jogos/jogos.html" id="link-home">Gêneros Indie</a> </p>
      </div>
    </div>
  </div>

  <!-- Carousel de gêneros -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Hollowk.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Stardew_Valley.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Terror_Retro.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden" id="btn-ca">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden" id="btn-ca">Next</span>
    </button>
  </div>


  <!-- JOGOS -->
  <div class="container-fluid" id="jogos-indie">
    <div class="row">
      <div class="col-12">
        <h1 >Jogos Indie</h1>
        <p>Ao Passar dos anos, vários jogos indie foram lançados, muitos fizeram sucesso e são jogados até hoje e outros cairam no esquecimento</p>
        <p>Aqui vai alguma imagens de algum jogos indie</p>
        <p>Para entender melhor. <a href="jogos/jogos.html" id="link-home">Jogos Indie</a> </p>
      </div>
    </div>
  </div>

  <!-- Carousel de Jogos -->
  <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel2">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Nun_Massacre.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Hades.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Terraria.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" id="btn-ca">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" id="btn-ca">Next</span>
      </button>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="text-center text-white" id="rodape">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://m.facebook.com/people/Indie-Blend/100087630665884/" role="button"
          ><i class="bi bi-facebook"></i>
        </a>
    
          <!-- Discord -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://discord.gg/NYdZG8f4" role="button"
        ><i class="bi bi-discord"></i></a>
    
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/indie_blend/" role="button"
        ><i class="bi bi-instagram"></i></a>
      </section>
    <!-- Section: Social media -->
    </div>
    
    <!-- Copyright -->
    <div class="text-center p-3" id="copyrigth">
        © 2022 Copyright:
      <a class="text-white" href="index.php">Indie Bland</a>
    </div>
    </footer>

</body>
</html>