<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ficr_modas1";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
   die("Falha na conexão: " . mysqli_connect_error());
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];

        $sql = "SELECT * FROM produtos WHERE id= '$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $Nome = $row['Nome'];
            $Preco = $row['Preco'];
            $Quantidade = $row['Quantidade']; 
            $Descricao = $row['Descricao'];


        } else {
            echo "Produto não encontrado!";
        }
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Produtos</title>
</head>

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
                <a class="nav-link" href="consultar.php">Consultar ou atualizar produto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="deletar_produto.html">Deletar produto</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <button class="btn btn-outline-light ml-auto">Login</button> 
        </div>
      </nav>
    </header>


    <body class="container mt-5">
    <h2>Alteração de Produtos</h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-3">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" name="id" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Consultar Produto</button>
    </form>

    <?php if (isset($Nome)) { ?>
        <form method="post" action="alterar.php" class="mt-5">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" value="<?php echo $Nome; ?>" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="Preco">Preço:</label>
                <input type="number" name="Preco" value="<?php echo $Preco; ?>" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="Quantidade">Quantidade:</label>
                <input type="number" name="Quantidade" value="<?php echo $Quantidade; ?>" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="Descricao">Descrição:</label>
                <input type="text" name="Descricao" value="<?php echo $Descricao; ?>" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Atualizar Produto</button>
        </form>
    <?php } ?>


    <div class="container">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
        Adicionar algum comentário
    </button>
    
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Comentário:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Comentário enviado com sucesso!!!
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div>
        </div>
        </div>
    </div>


    <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Contatos</h4>
                <p>Email: ficrmodas@gmail.com</p>
                <p>Telefone: (81) 98437-5866</p>
            </div>
            <div class="col-md-4">
                <h4>Ajuda</h4>
                <p>FAQ</p>
                <p>Suporte</p>
            </div>
            <div class="col-md-4">
                <h4>Serviços</h4>
                <p>Assistência Personalizada</p>
                <p>Ajustes e Customizações</p>
                <p>Entrega Conveniente</p>
                <p>Eventos Exclusivos</p>
            </div>
        </div>
        <div class="mt-4">
            <p>Siga-nos nas redes sociais:</p>
            <i class="fab fa-facebook-f text-white mx-2"></i>
            <i class="fab fa-twitter text-white mx-2"></i>
            <i class="fab fa-instagram text-white mx-2"></i>
            <i class="fab fa-linkedin-in text-white mx-2"></i>
        </div>
    </div>
</footer>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>