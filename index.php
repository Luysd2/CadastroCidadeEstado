<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h3>tela inicial</h3>
    <p>Aqui neste tela vc pode cadastrar o estado e cidade</p>

    <?php
    include "conexao.php";
    
    // Tabela tb_cidade
    //$sql = "SELECT count(cidade) FROM tb_cidade";
    $sql = "SELECT count(*) as total FROM tb_cidade";
    $row = mysqli_query($conn, $sql);
    $x = mysqli_fetch_assoc($row);
    //var_dump($x);die;
    echo "Quantidade de cidades é: " . $x['total'];
    
    ?>

<br><br><br>
    <a href="cadastroUF.php">Cadastrar</a>
    <br><br>
    <a href="pesquisa.php">Pesquisar</a>
</body>
</html>