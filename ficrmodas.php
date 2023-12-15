<?php 
  session_start();

  // Verificar se o usuário e senha estão autenticados
  if (!isset($_SESSION["email"]) and !isset($_SESSION["senha"])) {
  // Se não estiver autenticado redirecionar para a página de login
  header("Location: loginv2.html");
  }
  
  // ERRO ACIMA!!! GOOGLE (Esta página não está funcionando. Redirecionamento em excesso por localhost. Tente excluir os cookies. ERR_TOO_MANY_REDIRECTS)
?>
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sticky-footer-navbar.css" rel="stylesheet">

   
    <title>Ficr Modas</title>

    
   
  </head>

  <body class="d-flex flex-column h-100">

    <header>
     
        <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container"> 
          <a class="navbar-brand" href="index.html">Ficr Modas</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="cadastrar_produto.html">Cadastrar produto <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Desativado</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0"> <!-- Adicionando classes de margem para ajustar a posição -->
              <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <a class="btn btn-outline-light ml-auto" href="loginv2.html">Login</a> <!-- Botão de login fictício alinhado à direita -->
          </div>
        </div>
      </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/camiseta-adidas-trefoil-masculino-f05a2723669c08f68e5e3ca691870bc5.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/whatsapp-image-2022-07-25-at-23-39-111-67de3d03e7f398b91016588037845990-1024-1024.jpeg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/D14-5695-028_zoom1.webp" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    

    

 


  </body>
</html>
