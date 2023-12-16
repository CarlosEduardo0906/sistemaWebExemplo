<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "ficr_modas1";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if (!$conn) {
            header("Location: cadastrar_produto.html");
            exit();
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST['id'];
                $Nome = $_POST['Nome'];
                $Preco = $_POST['Preco'];
                $Quantidade = $_POST['Quantidade']; 
                $Descricao = $_POST['Descricao'];


                $sql = "INSERT INTO produtos (id, Nome, Preco, Quantidade, Descricao) VALUE ('$id', '$Nome', '$Preco', '$Quantidade', '$Descricao')";


                if (mysqli_query($conn, $sql)) {
                    echo "Produto cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar produto:" . mysqli_error($conn);
                }

            }
        }

    ?>
</body>
</html>