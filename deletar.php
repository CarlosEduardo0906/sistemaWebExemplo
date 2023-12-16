<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ficr_modas1";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        header("Location: deletar.php");
        exit();
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];

            $sql = "DELETE FROM produtos WHERE id='$id'"; 


            if (mysqli_query($conn, $sql)) {
                echo "Produto excluído com sucesso!";
            } else {
                echo "Erro ao excluir produto:" . mysqli_error($conn);
            }

        }
    }