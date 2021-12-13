<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
</head>
<body>
    <h2>Alterar cadastro</h2>
    <?php
    include "conexao.php";
    //$estado = $_POST['estado'];
    //$cidade = $_POST['cidade'];

    $estado = mysqli_real_escape_string($conn, trim($_POST['estado']));
    $cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
    $id = mysqli_real_escape_string($conn, trim($_POST['id']));

    //$sql = "INSERT INTO `cidadeestado` (`estado`, `cidade`, `data_cadastro`) VALUES ('$estado', '$cidade', NOW())";
    $sql = "UPDATE `tb_cidade` SET  `cidade` = '$cidade', `c_estado`= '$estado' WHERE id_cidade = $id";

    if(mysqli_query($conn, $sql)){
        header("Location: pesquisa.php");
        //echo "certo";
    }else{
        header("Location: cadastro.php");
        //echo "errado";
    }

    ?>
</body>
</html>