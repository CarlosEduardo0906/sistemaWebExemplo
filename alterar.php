<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar produto</title>
</head>
<body>
    <h2>Alterar produto</h2>

    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "ficr_modas1";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if (!$conn) {
            header("Location: consultar.php");
            exit();
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST['id'];
                $Nome = $_POST['Nome'];
                $Preco = $_POST['Preco'];
                $Quantidade = $_POST['Quantidade']; 
                $Descricao = $_POST['Descricao'];

                $sql = "UPDATE produtos SET Nome='$Nome', Preco='$Preco', Quantidade='$Quantidade', Descricao='$Descricao' WHERE id='$id'";


                if (mysqli_query($conn, $sql)) {
                    echo "Produto atualizado com sucesso!";
                } else {
                    echo "Erro ao atualizar o produto:" . mysqli_error($conn);
                }
            }
        }
        ?>

</body>
</html>