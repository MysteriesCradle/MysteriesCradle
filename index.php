<!doctype html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MysteriesCradle</title>
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IM+Fell+English&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/meu.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg roxo">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="imagens/logo.png" width="70" height="70" alt="">
        </a>
        <button class="navbar-toggler burguer" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" id="menu" aria-current="page" href="#">Episodios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="menu" href="#">World</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="menu" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Temporadas
              </a>
              <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Jinsei no Unmei</a></li>
                <li><a class="dropdown-item" href="#">Novo Mundo</a></li>
                <li><a class="dropdown-item" href="#">Desconhecido</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="menu" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Mais
              </a>
              <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Notificações</a></li>
                <li><a class="dropdown-item" href="#">Sobre</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
          </ul>   
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <form class="d-flex" role="search">
          <input class="bPesquisa me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
        </form>
        <a class="LogCad" href="geral/login.php">Entrar/Cadastrar</a>
      </div></div>
    </nav>
    
<br>
<br>
<br>
<br>

<header class="header1">
  <h1>MysteriesCradle</h1>
  <h2>Novos mundos, Novos desafios e Novas Aventuras</h2>
</header>
<header class="naoentre">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href=""><img src="imagens/jnuHistory.png" id="imgindex" class="d-block w-100" alt="dcsdsvvsv"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Jinsei no Unmei</h5>
                    <p>Uma historia Original de um novo mundo, novo sistema, e novas aventuras de RPG!</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href=""><img src="imagens/gdp.png" id="imgindex" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gerador de Personagem</h5>
                    <p>Cria as aparencias de seus personagens!</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href=""><img src="imagens/ficha.png" id="imgindex" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ficha</h5>
                    <p>Crie uma ficha de RPG para jogar uma aventura nova em Dorits!</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href=""><img src="imagens/gdg.png" id="imgindex" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gerador de Gerador</h5>
                    <p>Crie seu proprio gerador para outros usuarios!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
    <footer>
      <a href="https://www.instagram.com/fkaiquesp/"><img src="imagens/insta-icon.png" alt="">@Fkaique</a><br>
      <a href="https://www.instagram.com/jinsei_no_unmei/"><img src="imagens/insta-icon.png" alt="">@jinsei-no-unmei</a>
      <p>Copyright © 2022 - Todos os Direitos Resesvados - MysteriesCradle</p>
    </footer>  
    
  </body> 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
<!--<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"
    data-bs-whatever="@mdo">Login</button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="#">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">E-mail</label>
              <input type="email" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Senha</label>
              <input type="password" class="form-control" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
          <button type="submit" class="btn btn-dark">Logar</button><br>
          </form>
        </div>
        <a class="criarC" href="">não tem uma conta?</a>
      </div>
    </div>
  </div>-->