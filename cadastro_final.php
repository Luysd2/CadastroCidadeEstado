<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastar Estado e cidade</h2>
    <?php
    include "conexao.php";
    //$estado = $_POST['estado'];
    //$cidade = $_POST['cidade'];

    $cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
    $estado = mysqli_real_escape_string($conn, trim($_POST['s_estado']));
    

    $sql = "INSERT INTO `tb_cidade` (`cidade`, c_estado) VALUES ('$cidade', '$estado')";


    if(mysqli_query($conn, $sql)){
        header("Location: pesquisa.php");
       // echo "certo";
    }else{
        //header("Location: index.php");
        echo "errado";
    }

    ?>
</body>
</html>